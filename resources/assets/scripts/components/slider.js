var Flickity = require('flickity');

const CONFIG = {
    ELEM: '.gallery',
    CELL: '.gallery__cell',
};

const Slider = {
    init() {
        const { ELEM, CELL } = CONFIG;
        this.elem = document.querySelectorAll(ELEM);
        if (this.elem) {
            this.elem.forEach(element => {
                this.slider = new Flickity(element, {
                    pageDots: false,
                    prevNextButtons: false,
                    cellSelector: CELL,
                    wrapAround: true,
                    autoPlay: true,
                });

            });
        }
    },
};

export default Slider;