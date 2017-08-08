<template>
    <div class="post-additional-info inline-items">

        <a class="post-add-icon inline-items" v-if="!auth_user_likes_post" @click="like()" style="cursor: pointer;">
            <svg class="olymp-heart-icon"><use xlink:href="/icons/icons.svg#olymp-heart-icon"></use></svg>
            <span>{{ all_post_likes_count }}</span>
        </a>
        <a class="post-add-icon inline-items c-red" v-else @click="unlike()" style="cursor: pointer;">
            <svg class="olymp-heart-icon"><use xlink:href="/icons/icons.svg#olymp-heart-icon"></use></svg>
            <span>{{ all_post_likes_count }}</span>
        </a>

        <ul class="friends-harmonic">
            <li v-for="like in post.likes">
                <a :href="'/id' + like.user.id">
                    <img :src="like.user.avatar" alt="friend" :title="like.user.first_name + ' ' + like.user.last_name" style="width: 100%;">
                </a>
            </li>
        </ul>

        <!--<div class="names-people-likes">-->
            <!--<a href="#">Jenny</a>, <a href="#">Robert</a> and-->
            <!--<br>6 more liked this-->
        <!--</div>-->


        <div class="comments-shared">
            <a href="#" class="post-add-icon inline-items">
                <svg class="olymp-speech-balloon-icon"><use xlink:href="/icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
                <span>17</span>
            </a>

            <a href="#" class="post-add-icon inline-items">
                <svg class="olymp-share-icon"><use xlink:href="/icons/icons.svg#olymp-share-icon"></use></svg>
                <span>24</span>
            </a>
        </div>


    </div>
</template>

<script>
    export default {
        props: {
            post_id: {
                type: Number,
                required: true
            }
        },
        computed: {
            all_post_likes_count() {
                return this.post.likes.length
            },
            likers() {
                var likers = [];

                this.post.likes.forEach((like) => {
                    likers.push(like.user.id)
                });

                return likers;
            },
            auth_user_likes_post() {
                var check_index = this.likers.indexOf(this.$store.state.auth_user.id);

                if (check_index === -1)
                    return false;
                else
                    return true;
            },
            post() {
                return this.$store.state.posts.find((post) => {
                    return post.id === this.post_id
                })
            }
        },
        methods: {
            like() {
                window.axios.get('/like/' + this.post_id)
                    .then((resp) => {
                        this.$store.commit('update_post_likes', {
                            id: this.post_id,
                            like: resp.data
                        });
                    });
            },
            unlike() {
                window.axios.get('/unlike/' + this.post_id)
                    .then((resp) => {
                        this.$store.commit('unlike_post', {
                            post_id: this.post_id,
                            like_id: resp.data
                        })
                    });
            }
        }
    }
</script>