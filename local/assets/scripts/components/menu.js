import { qs, $on } from '../util';

const toggleMenu = (event) => {
    event.preventDefault();

    const page = qs('.page');

    if (!page.classList.contains('page_menu-visible')) {
        page.classList.add('page_menu-visible');
    } else {
        page.classList.remove('page_menu-visible');
    }
}

export const Menu = (event) => {
    const menuToggle = qs('.js-menu-toggle');
    const menuToggleMobile = qs('.js-menu-toggle-mobile');
    const menuClose = qs('.js-menu-close');
    const menuToggleFooter = qs('.js-menu-toggle-footer');

    if (menuToggle) {
        $on(menuToggle, 'click', (event) => toggleMenu(event));
    }
    if (menuClose) {
        $on(menuClose, 'click', (event) => toggleMenu(event));
    }
    if (menuToggleMobile) {
        $on(menuToggleMobile, 'click', (event) => toggleMenu(event));
    }
    if (menuToggleFooter) {
        $on(menuToggleFooter, 'click', (event) => toggleMenu(event));
    }
}
