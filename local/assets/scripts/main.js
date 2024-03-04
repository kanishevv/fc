/* global jQuery */

// import local dependencies
import Router from './util/Router';

import common from './routes/common';

/* Generate icons sprite */ 
function requireAll(r) {
  r.keys().forEach(r);
}

requireAll(require.context('../icons', true, /\.svg$/));

// import pageMain module on-demand only when body has `page_main` class
const pageMain = () => import('./routes/pageMain');

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Main page
  pageMain,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

