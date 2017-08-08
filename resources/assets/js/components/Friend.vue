<template>
    <div style="display: inline-block; margin-right: 20px; margin-bottom: 0; fill: #fff; cursor: pointer;">
        <a class="btn btn-control bg-blue" v-if="status == 0 && !loading" title="Добавити в друзі" v-on:click="add_friend">
            <svg class="olymp-happy-face-icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            <div class="ripple-container"></div>
        </a>
        <a class="btn btn-control bg-green" v-if="status == 'pending' && !loading" title="Підтвердити друга" v-on:click="accept_friend">
            <svg class="olymp-happy-face-icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            <div class="ripple-container"></div>
        </a>
        <a class="btn btn-control bg-grey" v-if="status == 'waiting' && !loading" title="Запит дружби надіслано">
            <svg class="olymp-happy-face-icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            <div class="ripple-container"></div>
        </a>
        <a class="btn btn-control bg-breez" v-if="status == 'friends' && !loading" title="Ви друзі">
            <svg class="olymp-happy-face-icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            <div class="ripple-container"></div>
        </a>
    </div>
</template>

<script>
    export default {
        mounted() {
            window.axios.get('/check_relationship_status/' + this.profile_user_id )
                .then((resp) => {
                    this.status = resp.data.status;
                    this.loading = false
                })
        },
        props: {
            profile_user_id: {
                type: Number,
                required: true
            },
        },
        data() {
            return {
                status: '',
                loading: true
            }
        },
        methods: {
            add_friend() {
                this.loading = true;
                window.axios.get('/add_friend/' + this.profile_user_id)
                    .then( (resp) => {
                        if (resp.data === 1) {
                            this.status = 'waiting';
                            this.loading = false
                        }
                    })
            },

            accept_friend() {
                this.loading = true;
                window.axios.get('/accept_friend/' + this.profile_user_id)
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
