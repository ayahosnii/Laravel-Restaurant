<template>
    <section class="section-tb-padding blog-page">
        <div class="container ">
            <div class="row">



         <div class="col-md-8" v-if="issearching">
             .... searching now
         </div>
        <div class="blog-style-1-list col-md-8" id="app" v-else>
        <div class="blog-start" v-for="post in posts.data" :key="post.id">
            <div class="blog-post">
                <div class="blog-image">
                    <a :href="'/post/'+post.slug">

                        <img :src=post.image alt="blog-image" class="img-fluid">

                    </a>
                </div>
                <div class="blog-content">
                    <div class="blog-title">
                        <h6><a :href="'/post/'+post.slug">{{post.title}}</a></h6>
                    </div>
                    <div class="date-comm-adit">
                        <span class="blog-date"><i class="fa-solid fa-calendar"></i> {{ post.created_at }}</span>
                        <a href="javascript:void(0)"><i class="fa-solid fa-comment"></i>{{ post.comments_count }} Comment</a>
                        <span class="blog-admin"><i class="fa-solid fa-user"></i> By <span class="blog-editor">{{ post.user.email }}</span></span>
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
                <div class="col-md-3" style="margin-left:100px; align-items: center;">
                    <div class="wrapper">
                        <div class="container">
                            <form role="search" method="get" class="search-form form" action="">
                                <label>
                                    <span class="screen-reader-text">Search for...</span>
                                    <input type="search" class="search-field" placeholder="Type something..." value="" name="s" title="" v-model="searchpost"/>
                                </label>
                                <button type="submit" class="search-submit button" value="" ><i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                    </div>
                    <categories></categories>
                </div>

                <div class="all-page">
                    <span class="page-title">Showing 1 - 5 of 6 result</span>
                    <div class="page-number style-1">
                        <a href="?page=1" class="active">1</a>
                        <a href="?page=2">2</a>
                        <a href="javascript:void(0)">3</a>
                        <a href="javascript:void(0)">4</a>
                        <a href="javascript:void(0)">5</a>
                        <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <Pagination :data="posts" @pagination-change-page="getPosts" />

    </section>
</template>

<script>
import categories from './Categories.vue'
import LaravelVuePagination from 'laravel-vue-pagination';

 export default {
        data(){
            return{
                posts:{},
                searchpost:'',
                issearching: false,
            }
        },
     components :{
         categories,
         'Pagination': LaravelVuePagination
     },
     watch: {
         searchpost(query){
             if(query.length > 0){
                 this.issearching =true;
                 console.log(query)
                 axios.get('/api/searchposts/'+query+'?page=1')
                     .then(res => {
                         this.posts = res.data;
                     })
                     .catch(err => {
                         console.log(err)
                     })
             }else{
                 let oldposts = JSON.parse(localStorage.getItem('posts')) ;
                 this.posts = oldposts;
             }
             this.issearching = false
         }
     },
        mounted() {
            console.log('Component mounted.')
            this.getPosts();
        },
         methods:{
             getPosts(){
                 axios.get('/api/posts')
                     .then(res => {
                         this.posts = res.data;
                         localStorage.setItem('posts', JSON.stringify(this.posts))
                     })
                     .then(err => console.log(err))
             }
         },

 }

</script>
