const CONFIG = {
    ELEM: '.imp-shape',
}

const { ELEM } = CONFIG;

const imageMap = {
    init() {
        this.elem = document.querySelectorAll(ELEM);
        console.log('Image map init');

        const interval = setInterval(() => {
            console.log('setInterval', this.elem.length);
            this.elem = document.querySelectorAll(ELEM);

            if (this.elem.length) {
                clearInterval(interval);
                this.addEvent();
                console.log('STOP');
            }
        }, 100)
    },

    addEvent() {
        this.elem.forEach(element => {
            console.log('elem interval');
            element.addEventListener('click', (e) => {
                e.preventDefault();
                console.log('click');
            });
        });
    },
}

export default imageMap;