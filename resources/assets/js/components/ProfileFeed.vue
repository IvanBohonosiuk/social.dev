<template>
    <div>
        <div class="ui-block" v-for="post in profile_posts_sorted" v-if="profile_posts_sorted">
            <article class="hentry post">

                <div class="post__author author vcard inline-items">
                    <a :href="'/id' + post.from_user.id">
                        <img :src="post.from_user.avatar" alt="author">
                        <online :auth_user="post.from_user"></online>
                    </a>

                    <div class="author-date">
                        <a class="h6 post__author-name fn" :href="'/id' + post.from_user.id">{{ post.from_user.first_name }} {{ post.from_user.last_name }}</a>
                        <div class="post__date">
                            <time class="published" :datetime="post.created_at">
                                {{ post.created_at }}
                            </time>
                        </div>
                    </div>

                    <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        <ul class="more-dropdown">
                            <li>
                                <a href="#">Edit Post</a>
                            </li>
                            <li>
                                <a href="#">Delete Post</a>
                            </li>
                            <li>
                                <a href="#">Turn Off Notifications</a>
                            </li>
                            <li>
                                <a href="#">Select as Featured</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <p>
                    {{ post.content }}
                </p>

                <like :post_id="post.id"></like>

            </article>
        </div>
        <div class="ui-block" v-if="profile_posts_sorted == ''">
            <article class="hentry post">
                <p>Ще немає постів.</p>
            </article>
        </div>

        <a href="#" class="btn btn-control btn-more" v-if="profile_posts.length > 10"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.get_profile_feed()
        },
        props: {
            profile_user_id: {
                type: Number,
                required: true
            }
        },
        methods: {
            get_profile_feed() {
                window.axios.get('/id' + this.profile_user_id + '/profile_feeds')
                    .then( (resp) => {
                        resp.data.forEach((post) => {
                            this.$store.commit('add_post', post)
                        });
                    })
            }
        },
        computed: {
            profile_posts() {
                return this.$store.getters.all_posts
            },
            profile_posts_sorted() {
                function compare(a, b) {
                    if (a.id > b.id)
                        return -1;
                    if (a.id < b.id)
                        return 1;
                    return 0;
                }

                return this.profile_posts.sort(compare);
            }
        }
    }
</script>