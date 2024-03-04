import Choices from 'choices.js';
import { qs, qsa } from '../util';


export const Select = () => {
    const selectCollection = qsa('select');
    let isSearch = false;

    if ($(selectCollection).data('is-search') == true) {
        isSearch = true;
    }

    for (let selectIndex = 0; selectIndex < selectCollection.length; selectIndex++) {
        const selectItem = selectCollection[selectIndex];

        new Choices(
            selectItem,
            {
                searchEnabled: isSearch,
                position: 'bottom',
                itemSelectText: '',
                classNames: {
                    containerOuter: 'select',
                    containerInner: 'select__inner',
                    input: 'select__input',
                    inputCloned: 'select__input--cloned',
                    list: 'select__list',
                    listItems: 'select__list--multiple',
                    listSingle: 'select__list--single',
                    listDropdown: 'select__list--dropdown',
                    item: 'select__item',
                    itemSelectable: 'select__item--selectable',
                    itemDisabled: 'select__item--disabled',
                    itemChoice: 'select__item--choice',
                    placeholder: 'select__placeholder',
                    group: 'select__group',
                    groupHeading: 'select__heading',
                    button: 'select__button',
                    activeState: 'is-active',
                    focusState: 'is-focused',
                    openState: 'is-open',
                    disabledState: 'is-disabled',
                    highlightedState: 'is-highlighted',
                    selectedState: 'is-selected',
                    flippedState: 'is-flipped',
                    loadingState: 'is-loading',
                    noResults: 'has-no-results',
                    noselect: 'has-no-select'
                }
            }
        );
    }
}
