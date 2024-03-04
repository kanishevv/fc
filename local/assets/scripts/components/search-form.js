import { qs, qsa, $on } from '../util';

export const SearchFilter = () => {
    
    // const searchInputs = document.getElementsByName('q');

    // for (let searchInputIndex = 0; searchInputIndex < searchInputs.length; searchInputIndex++) {
    //     const searchInput = searchInputs[searchInputIndex];
        
    //     $on(searchInput, 'input', (event) => {
    //         let searchInputValue = event.currentTarget.value;

    //         const searchFilterItemLinks = qsa('.search-filter__item-link');

    //         for (let index = 0; index < searchFilterItemLinks.length; index++) {
    //             const element = searchFilterItemLinks[index];
                
    //             console.log('elemtnt');
    //         }
    //     });
    // }

    // /search/?q=право&amp;where=iblock_law_about_education
    // const search = qs('.search');

    // tabs__item
    // 
}

export const ToggleFilter = () => {
    const search = qs('.search');
    const toggleSearchFilter = qs('.js-toggle-filter');

    $on(toggleSearchFilter, 'click', (event) => search.classList.toggle('search_is-open'));
}
