<template>
    <div class="control-icon more has-items">
        <a href="#"><svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg></a>
        <div class="label-avatar bg-blue" v-if="all_nots_user_request_count > 0">{{ all_nots_user_request_count }}</div>

        <div class="more-dropdown more-with-triangle triangle-top-center" v-if="all_nots_user_request_count > 0">
            <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Запити в друзі</h6>
                <a href="#" @click="markAsRead">Відмітити як прочитано</a>
            </div>
            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="notification-list friend-requests">
                    <li v-for="friend in all_nots_user_request" :class="{ 'un-read': unRead }">
                        <div class="author-thumb">
                            <img :src="friend.avatar"  alt="author" width="32px">
                        </div>
                        <div class="notification-event">
                            <a :href="'/id' + friend.user_id" class="h6 notification-friend">{{ friend.first_name }} {{ friend.last_name }} {{ friend.message }}</a>
                            <!--<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>-->
                        </div>
                        <accept_friend_nots :id="friend.user_id"></accept_friend_nots>
                    </li>
                </ul>
            </div>

            <a href="/settings/friends_request" class="view-all bg-blue">Переглянути всіх друзів</a>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            this.listen();
            this.get_unread_user_requests();
            window.axios.get('/oauth/clients')
                .then(response => {
                    response.data.forEach( (key) => {
                        this.api_key = key.secret
                    } );
                });
        },
        props: {
            id: {
                type: Number,
                required: true
            },
        },
        data() {
            return {
                unread_user_requests: [],
                api_key: [],
                unRead: true
            }
        },
        methods: {
            listen() {
                Echo.private('App.User.' + this.id)
                    .notification( (notification) => {
                        this.$store.commit('add_not_user_request', notification);

                        document.getElementById("noty_friend_audio").play()
                    })
            },
            get_unread_user_requests() {
                window.axios.get('/get_unread_user_requests')
                    .then( (nots) => {
                        nots.data.forEach( (not) => {
                            if (not.notifiable_type === 'App\u005CUser') {
                                this.$store.commit('add_not_user_request', not.data);
                            }
                        })
                    })
            },
            markAsRead() {
                window.axios.get('/mark_read_friends_request')
                    .then( (resp) => {
                        if (resp.data === 1) {
                            this.unRead = false;
                        }
                    })
            }
        },
        computed: {
            all_nots_user_request_count() {
                return this.$store.getters.all_nots_user_request_count
            },
            all_nots_user_request() {
                return this.$store.getters.all_nots_user_request
            }
        }
    }
</script>
