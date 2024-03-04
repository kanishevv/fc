function OpenMenuNode(oThis)
{
	if (oThis.parentNode.className == 'wrapper-container-level menu-open')
		oThis.parentNode.className = 'wrapper-container-level menu-close';
	else
		oThis.parentNode.className = 'wrapper-container-level menu-open';
	return false;
}

$(document).ready(function(){
	$(".menu-close").children("a").on('click', function(e) {
		e.preventDefault();
        OpenMenuNode(this);
	});

	$(".menu-open").children("a").on('click', function(e) {
		e.preventDefault();
        OpenMenuNode(this);
	});
});