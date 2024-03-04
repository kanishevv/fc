import { qs, $on } from '../util';

const toggleModalFeedback = (event) => {
    event.preventDefault();
    const page = qs('.page');

    if (!page.classList.contains('page_modal-visible')) {
        page.classList.add('page_modal-visible');
    } else {
        page.classList.remove('page_modal-visible');
    }
}

export const ModalFeedback = (event) => {
    const modal = $('.js-modal-feedback');
    const modalClose = qs('.js-modal-feedback-close');

    modal.on('click', toggleModalFeedback);
    $on(modalClose, 'click', (event) => toggleModalFeedback(event));

    const modalForm = document.querySelector('#feedback-form-modal');
    modalForm.querySelectorAll('input:not(.changed)').forEach(el => {
        el.addEventListener('change', ev => {
            el.classList.add('changed');
            el.parentElement.querySelector('.feedback-form__field-invalid').removeAttribute('style');
        });
    });
}
