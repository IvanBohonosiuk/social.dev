import Vuex from 'vuex';
import Vue from 'vue';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        nots_user_request: [],
        posts: [],
        feeds: [],
        auth_user: {},
        user_request_friends: []
    },
    getters: {
        all_nots_user_request(state) {
            return state.nots_user_request
        },
        all_nots_user_request_count(state) {
            return state.nots_user_request.length
        },
        all_posts(state) {
            return state.posts
        },
        all_feeds(state) {
            return state.feeds
        },
        all_user_request_friends(state) {
            return state.user_request_friends
        }
    },
    mutations: {
        add_not_user_request(state, not) {
            state.nots_user_request.push(not)
        },
        add_post(state, post) {
            state.posts.push(post)
        },
        user_request_friends(state, user_request) {
            state.user_request_friends.push(user_request)
        },
        auth_user_data(state, user) {
            state.auth_user = user
        },
        update_post_likes(state, payload)
        {
            var post = state.posts.find( (p) => {
                return p.id === payload.id
            });

            post.likes.push(payload.like);
        },
        unlike_post(state, payload) {

            var post = state.posts.find((p) => {
                return p.id === payload.post_id
            });

            var like = post.likes.find( (l) => {
                return l.id === payload.like_id
            });

            var index = post.likes.indexOf(like);

            post.likes.splice(index, 1)
        }
    }
});