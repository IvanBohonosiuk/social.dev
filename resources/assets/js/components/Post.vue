<template>

    <div class="ui-block">
        <div class="news-feed-form">

            <!--<form>-->
                <div class="author-thumb">
                    <img :src="auth_user.avatar" alt="author" style="width: 40px;">
                </div>
                <div class="form-group with-icon label-floating">
                    <label class="control-label">Що у Вас на думці?</label>
                    <textarea class="form-control" v-model="content"></textarea>
                </div>
                <div class="add-options-message">
                    <a href="#" class="js-open-popup options-message" data-popup-target=".update-header-photo" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD PHOTOS">
                        <svg class="olymp-camera-icon"><use xlink:href="/public/icons/icons.svg#olymp-camera-icon"></use></svg>
                    </a>
                    <a href="#" class="options-message" data-toggle="tooltip" data-placement="top" title="" data-original-title="TAG YOUR FRIENDS">
                        <svg class="olymp-computer-icon"><use xlink:href="/public/icons/icons.svg#olymp-computer-icon"></use></svg>
                    </a>

                    <a href="#" class="options-message" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD LOCATION">
                        <svg class="olymp-small-pin-icon"><use xlink:href="/public/icons/icons.svg#olymp-small-pin-icon"></use></svg>
                    </a>

                    <button class="btn btn-primary btn-md-2" :disabled="not_working" @click="create_post()">Post Status</button>

                </div>

            <!--</form>-->

        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                content: '',
                not_working: true
            }
        },
        props: {
            profile_user_id: {
                type: Number,
                required: true
            },
            auth_user: {
                type: Object,
                required: true
            }
        },
        methods: {
            create_post() {
                window.axios.post('/id' + this.profile_user_id + '/create_post', {contents: this.content})
                    .then( (resp) => {
                        this.content = '';
                        this.$store.commit('add_post', resp.data);
                    });
            }
        },
        watch: {
            content() {
                if (this.content.length > 0) {
                    this.not_working = false
                } else {
                    this.not_working = true
                }
            }
        }
    }
</script>