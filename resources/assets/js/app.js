const _ = require('lodash');
const Vue = require('vue');
const hljs = require('highlight.js');

vr = require('vue-resource');
v2f = require('vue2-filters');

Vue.use(vr);
Vue.use(v2f);

hljs.initHighlightingOnLoad();