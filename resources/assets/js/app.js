
window.Vue = require('vue');
require('./bootstrap');
require('./main');
// require('./js/jquery-3.2.0.min');
// require('./js/tether.min');
// require('./js/theme-plugins');
// require('./js/material.min');
// require('./js/main');
// require('./js/selectize.min');
// require('./js/jquery.magnific-popup.min');
// require('./js/daterangepicker.min');
// require('./js/fullcalendar');
// require('./js/simplecalendar');
// require('./js/jquery.gifplayer');
// require('./js/swiper.jquery.min');
// // require('./js/moment.min');
// require('./js/mediaelement.min');
// require('./js/mediaelement-and-player');
// require('./js/mediaelement-playlist-plugin.min');
// require('./js/webfontloader.min');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('passport-clients', require('./components/passport/Clients.vue'));
// Vue.component('passport-authorized-clients', require('./components/passport/AuthorizedClients.vue'));
// Vue.component('passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens.vue'));
Vue.component('init', require('./components/Init.vue'));
Vue.component('nots', require('./components/Nots.vue'));
Vue.component('online', require('./components/UserStatus.vue'));
Vue.component('friend', require('./components/Friend.vue'));
Vue.component('notification_friend', require('./components/NotificationFriend.vue'));
Vue.component('accept_friend_nots', require('./components/AcceptFriendNots.vue'));
Vue.component('like', require('./components/Like.vue'));
Vue.component('post', require('./components/Post.vue'));
Vue.component('profile-feed', require('./components/ProfileFeed.vue'));
// Vue.component('all_feeds', require('./components/AllFeeds.vue'));
Vue.component('all_feeds', require('./components/AllFeeds.vue'));

import { store } from './store';

const app = new Vue({
    el: '#app',
    store
});