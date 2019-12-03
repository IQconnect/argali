// import external dependencies
import 'jquery';
import 'maphilight';
import 'image-map-resizer';
import 'tooltipster';


// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

import slider from './components/slider';
import sliderInvest from './components/slider-invest';
import rotator from './components/rotator';
import hamburger from './components/hamburger';
import popup from './components/popup';
import ExtraMenu from './components/extra-menu';
import form from './components/form';
import gmap from './components/gmap';
import scroll from './components/scroll';
import popupForm from './components/popup-form';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  slider.init();
  sliderInvest.init();
  rotator.init();
  hamburger.init();
  popup.init();
  ExtraMenu.init();
  form.init();
  gmap.init();
  scroll.init();
  popupForm.init();
});

setTimeout(() => {
  slider.resize();
  sliderInvest.resize();
  $('.map__image').maphilight();
  $('map').imageMapResize();
  $('.tooltip').tooltipster();
}, 1000)


