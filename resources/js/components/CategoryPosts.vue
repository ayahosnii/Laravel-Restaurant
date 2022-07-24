<template>
    <section class="section-tb-padding blog-page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog-style-1-list" id="app">
                        <div class="blog-start" v-for="post in posts" :key="post.id">
                            <div class="blog-post">
                                <div class="blog-image">
                                    <router-link :to="'/post/'+post.slug">

                                        <img :src=post.image alt="blog-image" class="img-fluid">

                                    </router-link>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h6><router-link :to="'/post/'+post.slug">{{post.title}}</router-link></h6>
                                    </div>
                                    <div class="date-comm-adit">
                                        <span class="blog-date"><i class="fa-solid fa-calendar"></i> {{ post.added_at }}</span>
                                        <a href="javascript:void(0)"><i class="fa-solid fa-comment"></i> {{ post.comments_count }} Comment</a>
                                        <span class="blog-admin"><i class="fa-solid fa--user"></i> By <span class="blog-editor">{{post.user.name}}</span></span>
                                    </div>
                                    <p class="blog-description">{{post.body.substr(0,150)}}</p>
                                    <a :href="'/post/'+post.slug" class="read-link">
                                        <span>Read more</span>
                                        <i class="fa-solid fa-angles-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-page">
                    <span class="page-title">Showing 1 - 5 of 6 result</span>
                    <div class="page-number style-1">
                        <a href="javascript:void(0)" class="active">1</a>
                        <a href="javascript:void(0)">2</a>
                        <a href="javascript:void(0)">3</a>
                        <a href="javascript:void(0)">4</a>
                        <a href="javascript:void(0)">5</a>
                        <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import categories from './Categories.vue'
export default {
    data(){
        return{
            posts:{},
        }
    },
    components :{
        categories
    },
    mounted() {
        console.log('Component mounted.')
        this.getPosts();
    },
    methods:{
        getPosts(){
            axios.get('/api/category/'+this.$route.params.slug+'/posts')
                .then(res => {
                    this.posts = res.data
                })
                .then(err => console.log(err))
        }
    },

}

</script>
