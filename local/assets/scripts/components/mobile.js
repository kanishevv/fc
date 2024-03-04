export const Mobile = () => {
    if ($('.section-wrapper-container-content').hasClass("mobile-version")) {
        window.location.hash = "anchor-for-mobile";
    }
}