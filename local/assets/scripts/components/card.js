
import Swiper, { Navigation, Pagination } from 'swiper';

Swiper.use([Pagination]);

export const CardSlider = () => {
    const cardLists = document.getElementsByClassName('card__list');
    const cardPaginations = document.getElementsByClassName('card__pagination');

    for (let index = 0; index < cardLists.length; index++) {
        const cardList = cardLists[index];
        const cardPagination = cardPaginations[index];

        cardList.classList.add(`card__list_${index}`);
        cardPagination.classList.add(`card__pagination_${index}`);

        new Swiper(`.card__list_${index}`, {
            slidesPerView: 1,
            slideClass: 'card__list-item',
            slideActiveClass: 'card__list-item--active',
            slideNextClass: 'card__list-item-next',
            slidePrevClass: 'card__list-item-prev',
            slideDuplicateClass: 'card__list-duplicate',
            slideDuplicateNextClass: 'card__list-duplicate-next',
            slideDuplicatePrevClass: 'card__list-duplicate-prev',
            slideDuplicateActiveClass: 'card__list-duplicate--active',
            slideVisibleClass: 'card__list-item-visible',
            loop: true,
            allowTouchMove: false,
            pagination: {
                el: `.card__pagination_${index}`,
                clickable: true,
                bulletClass: 'card__pagination-bullet',
                bulletActiveClass: 'card__pagination-bullet--active'
            },
        });
    }
};
