export default class Slider {
    constructor(id) {
        const element = document.getElementById(id)
        this.sliderItem = element.querySelectorAll('.js-slider-item')
        this.prevBtn = document.querySelector('.slider-button-prev')
        this.nextBtn = document.querySelector('.slider-button-next')
        this.sliderLength = this.sliderItem.length
        this.init()
    }

    init() {
        const $this = this;
        $this.sliderItem.forEach((item, index) => {
            item.style.order = index + 1
        })

        $this.prevBtn && $this.prevBtn.addEventListener('click', () => {
            $this.sliderItem.forEach(item => {
                item.className += ' slider-item-transition slider-item-right'
            })

            setTimeout(function () {
                $this.prev()
                $this.resetPosition()
            }, 500)
        })

        $this.nextBtn && $this.nextBtn.addEventListener('click', () => {
            $this.sliderItem.forEach(item => {
                item.className += ' slider-item-transition slider-item-left'
            })

            setTimeout(function () {
                $this.next()
                $this.resetPosition()
            }, 300)
        })
    }

    resetPosition() {
        const $this = this;
        $this.sliderItem.forEach(item => {
            item.classList.remove(
                'slider-item-transition',
                'slider-item-left',
                'slider-item-right'
            )
        })
    }

    prev() {
        const $this = this;
        $this.sliderItem.forEach(item => {
            const currentItem = parseInt(item.style.order)
            if (currentItem < $this.sliderLength) {
                item.style.order = currentItem + 1
            } else {
                item.style.order = 1
            }
        })
    }

    next() {
        const $this = this;
        $this.sliderItem.forEach(item => {
            const currentItem = parseInt(item.style.order)
            if (currentItem > 1) {
                item.style.order = currentItem - 1
            } else {
                item.style.order = $this.sliderLength
            }
        })
    }
}