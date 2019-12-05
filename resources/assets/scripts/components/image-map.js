const CONFIG = {
    ELEM: '.imp-shape',
    CLOSE: 'data-close-popup',
    POPUP: 'data-popup-flat',
}

const { ELEM, CLOSE, POPUP } = CONFIG;

const imageMap = {
    init() {
        this.elem = document.querySelectorAll(ELEM);
        this.close = document.querySelectorAll(`[${CLOSE}]`);
        this.popups = document.querySelectorAll(`[${POPUP}]`);
        this.class = '-is-active';
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

                const $this = e.currentTarget;
                console.log('click', $this.dataset.shapeTitle);
                document.querySelector(`[data-popup-flat="${$this.dataset.shapeTitle}"]`).classList.add(this.class);
            });
        });

        this.close.forEach(element => {
          console.log('close elem');
          element.addEventListener('click', (e) => {
              e.preventDefault();
              console.log('click');
              this.popups.forEach((elem) => { elem.classList.remove(this.class) })
          });
      });
    },
}

export default imageMap;
