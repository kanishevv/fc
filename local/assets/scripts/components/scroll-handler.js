export const ScrollHandler = () => {
    const body = document.body;
    let timer;

    window.addEventListener('scroll', function () {
        clearTimeout(timer);
  
        if (!body.classList.contains('scroll')) {
            body.classList.add('scroll')
        }

        timer = setTimeout(function () {
            body.classList.remove('scroll')
        }, 500);
    }, false);
}