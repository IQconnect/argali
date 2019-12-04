const CONFIG = {
  ELEM: '[data-extra-menu]',
  HEADER: '[header]',
};

const ExtraMenu = {
  init() {
    const { ELEM, HEADER } = CONFIG;

    this.$elem = document.querySelectorAll(ELEM);
    this.$header = document.querySelector(HEADER);

    if(this.$elem) {
      this.$currentLocation = this.getLastPartOfLink();
      
      this.changeMainMenu();
      // this.checkCurrentPage();
    }
  },

  changeMainMenu() {
    this.$header.classList.add('-is-static')
  },

  checkCurrentPage() {
    console.log('check');

    this.$elem.forEach(element => {
      const link = element.getAttribute('href');
      const location = this.getLastPartOfLink(link);

      if (this.$currentLocation === location) {
        element.classList.add('-is-active');
      }

    });
  },

  getLastPartOfLink(link = window.location.href) {
    const splitedArray = link.split('/');
    const result = splitedArray[splitedArray.length - 2];

    return result
  },
}

export default ExtraMenu;
