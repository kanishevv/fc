export const Highlighter = () => {
    $.fn.replaceText = function( search, replace, text_only ) {
        return this.each(function(){
            var node = this.firstChild,
                val,
                new_val,
                remove = [];
            if ( node ) {
                do {
                    if ( node.nodeType === 3 ) {
                        val = node.nodeValue;
                        new_val = val.replace( search, replace );
                        if ( new_val !== val ) {
                            if ( !text_only && /</.test( new_val ) ) {
                                $(node).before( new_val );
                                remove.push( node );
                            } else {
                                node.nodeValue = new_val;
                            }
                        }
                    } else {
                        $(node).find('*').replaceText(search, replace, text_only);
                    }
                } while ( node = node.nextSibling );
            }
            remove.length && $(remove).remove();
        });
    };

    function highlight(arr, selector = '.search-result__item-title, .search-result__item-date, .search-result__item-description, .search-result__detail') {
        $.each(arr, function(ind, txt) {
            let re = new RegExp(txt, "gi");
            
            // $& подставляет найденное совпадение
            $(selector).replaceText(re, `<span class="search-result__highlight">$&</span>`, false);
        });
    }

    let params = new URLSearchParams(window.location.search);
    let arr = [];

    let q = params.get('q');
    if (q) {
        arr.push(q);
    }

    let pravDoc = params.get('aFilterPrav_DOC');
    if (pravDoc) {
        arr.push(pravDoc);
    }

    let sudDoc = params.get('aFilterSud_DOC');
    if (sudDoc) {
        arr.push(sudDoc);
    }

    let pravName = params.get('aFilterPrav_NAME');
    if (pravName) {
        arr.push(pravName);
    }

    let sudName = params.get('aFilterSud_NAME');
    if (sudName) {
        arr.push(sudName);
    }

    let faqName = params.get('aFilterFaq_NAME');
    if (faqName) {
        arr.push(faqName);
    }

    highlight(arr);
}