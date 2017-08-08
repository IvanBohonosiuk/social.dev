<template>
    <div>

    </div>
</template>

<script>
    export default {
        props: {
            auth: {
                type: Object,
                required: true
            }
        },
        mounted() {
            this.get_auth_user_data()
        },
        methods: {
            get_auth_user_data() {
                window.axios.get('/api/user?api_token=' + this.auth.api_token)
                    .then( (resp) => {
                        this.$store.commit('auth_user_data', resp.data)
                    })
            }
        }
    }
</script>