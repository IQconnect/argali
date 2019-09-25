const CONFIG = {
  ELEM: '[data-extra-menu]',
};

const ExtraMenu = {
  init() {
    const { ELEM } = CONFIG;

    this.$elem = document.querySelectorAll(ELEM);
    this.$currentLocation = this.getLastPartOfLink();

    this.checkCurrentPage();
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
