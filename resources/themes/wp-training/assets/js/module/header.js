export default class StickyHeader {
    constructor(id) {
        const header = document.getElementById(id);
        const sticky = header.offsetTop;
        window.addEventListener('scroll', function () {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky-header");
            } else {
                header.classList.remove("sticky-header");
            }
        });
    }
}