var Flickity = require('flickity');

const CONFIG = {
    ELEM: '.slider__carousel',
    CELL: '.slider__cell',
};

const contentSlider = {
    init() {
        const { ELEM, CELL } = CONFIG;
        this.elem = document.querySelectorAll(ELEM);
        console.log('Init slider', this.elem)
        if (this.elem) {
            this.elem.forEach(element => {
                this.slider = new Flickity(element, {
                    pageDots: true,
                    prevNextButtons: false,
                    cellSelector: CELL,
                    wrapAround: true,
                    autoPlay: 3000,
                });

                setTimeout(()=> {
                    this.slider.resize();
                }, 1000)
            });
        }
    },
};

export default contentSlider;