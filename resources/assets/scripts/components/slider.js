var Flickity = require('flickity');

const CONFIG = {
    ELEM: '.gallery',
    CELL: '.gallery__cell',
};

const Slider = {
    init() {
        const { ELEM } = CONFIG;
        this.elem = document.querySelectorAll(ELEM);
        if (this.elem) {
            this.createSlider();
            this.resize();
        }
    },

    createSlider() {
        const { CELL } = CONFIG;

        this.elem.forEach(element => {
            console.log(element);
            this.slider = new Flickity(element, {
                pageDots: false,
                prevNextButtons: false,
                cellSelector: CELL,
                wrapAround: true,
                autoPlay: true,
            });
            this.slider.resize();
        });
    },

    resize() {
        const { CELL } = CONFIG;

        if (this.elem.length) {
            this.slider.resize();

            this.elem.forEach(element => {
                this.slider = new Flickity(element, {
                    pageDots: false,
                    prevNextButtons: false,
                    cellSelector: CELL,
                    wrapAround: true,
                    autoPlay: true,
                });
                this.slider.resize();
            });
        }
    },
};

export default Slider;