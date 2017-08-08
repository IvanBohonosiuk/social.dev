<template>
    <span class="notification-icon">
        <a class="accept-request" v-if="status == 'pending' && !loading" title="Підтвердити друга" @click="accept_friend">
            <span class="icon-add without-text">
                <svg class="olymp-happy-face-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
            </span>
        </a>
        <a class="accept-request request-del" v-if="status == 'pending' && !loading">
            <span class="icon-minus">
                <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
            </span>
        </a>
        <a class="accept-request bg-grey" v-if="status == 'waiting' && !loading" title="Запит дружби надіслано">
            <span class="icon-add without-text">
                <svg class="olymp-happy-face-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
            </span>
        </a>
        <a class="accept-request bg-green" v-if="status == 'friends' && !loading" title="Ви друзі">
            <span class="icon-add without-text">
                <svg class="olymp-happy-face-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
            </span>
        </a>
    </span>
</template>

<script>
    export default {
        props: {
            id: {
                type: Number,
                required: true
            },
        },
        mounted() {
            window.axios.get('/check_relationship_status/' + this.id )
                .then((resp) => {
                    this.status = resp.data.status;
                    this.loading = false
                })
        },
        data() {
            return {
                status: '',
                loading: true
            }
        },
        methods: {
            accept_friend() {
                this.loading = true;
                window.axios.get('/accept_friend/' + this.id)
                    .then( (resp) => {
                        if (resp.data === 1) {
                            this.status = 'friends';
                            this.loading = false

                        }
                    })
            }
        }
    }
</script>

<style>
    .notification-icon .accept-request {
        cursor: pointer;
    }
</style>