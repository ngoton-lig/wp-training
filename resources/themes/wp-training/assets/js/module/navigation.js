export default class Navigation {
    constructor(id) {
        this.anchors = document.getElementById(id).getElementsByTagName('a');
        this.navigator();
    }

    navigator() {
        const $this = this,
            area = [40, 40],
            sections = document.querySelectorAll('section'),
            anchors = $this.anchors;

        for (let i = 0; i < anchors.length; i++) {
            anchors[i].onclick = function(e) {
                e.preventDefault();
                $this.scrollTo(this.getAttribute("href").split('#')[1]);
            }
        }

        window.addEventListener('scroll', function () {
            const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
            for(let i = sections.length; i--;) {
                const element = sections[i],
                    rect = element.getBoundingClientRect(),
                    topPercent = rect.top / windowHeight * 100,
                    bottomPercent = rect.bottom / windowHeight * 100,
                    middle = (topPercent + bottomPercent)/2;

                if(middle > area[1] && middle < 100 - area[1]) {
                    $this.removeActive(anchors);
                    for (let i = 0; i < anchors.length; i++) {
                        const id = `js-${anchors[i].getAttribute("href").split('#')[1]}`;
                        if (element.id == id) {
                            $this.addActive(anchors[i]);
                        }
                    }
                }
            }
        })
    }

    removeActive(elements) {
        for (let i = 0; i < elements.length; i++) {
            elements[i].classList.remove('is-current');
        }
    }

    addActive(element) {
        element.classList.add('is-current');
    }

    scrollTo(id) {
        const section = document.getElementById(`js-${id}`);
        const headerTop = id == 'catch' ? 0 : document.getElementById('js-header').offsetHeight;
        const top = this.offset(section).top - headerTop;
        window.scrollTo({ top: top, behavior: 'smooth' });
    }

    offset(element) {
        const rect = element.getBoundingClientRect();
        const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
    }
}