window._ = require('lodash');
window.Vue = require('vue');
window.hljs = require('highlight.js');

vr = require('vue-resource');
v2f = require('vue2-filters');

Vue.use(vr);
Vue.use(v2f);

hljs.initHighlightingOnLoad();