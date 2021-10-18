export default class Scrolling {
    constructor(id) {
        this.element = document.getElementById(id);
        this.imageId = `${id}-image`
    }

    parallax() {
        const $this = this;
        const imageTop = $this.element.offsetHeight;
        const image = document.getElementById($this.imageId);
        image.style.top = `${imageTop}px`;
        window.addEventListener('scroll', function () {
            if($this.isElementInViewport($this.element)) {
                const percent = 100-$this.getElementScrolledPercentage($this.element)
                const top = Math.round(imageTop*percent/100)
                image.style.top = `${top}px`;
            }
        });
    }

    fadeIn() {
        const $this = this;
    }

    getElementScrolledPercentage(element){
        const viewportHeight = window.innerHeight;
        const scrollTop = window.scrollY;
        const elementOffsetTop = element.offsetTop;
        const elementHeight = element.offsetHeight;
        const distance = (scrollTop + viewportHeight) - elementOffsetTop;
        const percentage = Math.round(distance / ((viewportHeight + elementHeight) / 100));
        return Math.min(100, Math.max(0, percentage));
    }

    isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        const windowWidth = (window.innerWidth || document.documentElement.clientWidth);
        const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
        return rect.bottom > 0 && rect.right > 0 && rect.left < windowWidth && rect.top < windowHeight;
    }
}