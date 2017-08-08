<template>
    <span :class="'icon-status ' + status"></span>
</template>

<script>
    export default {
        props: {
            auth_user: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                status: this.auth_user.status
            }
        },
        mounted() {
            this.listen();
        },
        methods: {
            listen() {
                Echo.join('online')
                    .joining((user) => {
                        window.axios.put('/api/user/' + user.id + '/online?api_token=' + user.api_token, {});
                    })
                    .leaving((user) => {
                        window.axios.put('/api/user/' + user.id + '/offline?api_token=' + user.api_token, {});
                    })
                    .listen('UserOnline', (e) => {
                        this.status = e.user.status;
                    })
                    .listen('UserOffline', (e) => {
                        this.status = e.user.status;
                    });
            }
        }
    }
</script>