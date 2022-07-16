<template>
    <div class="" id="app">
        hi
        <div class="blog-start" v-for="post in posts" :key="post.id">
            <div class="blog-post">
                <div class="blog-image">
                    <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">

                        <img :src=post.image alt="blog-image" class="img-fluid">

                    </a>
                </div>
                <div class="blog-content">
                    <div class="blog-title">
                        <h6><router-link :to="'/post/'+post.slug">{{post.title}}</router-link></h6>
                    </div>
                    <div class="date-comm-adit">
                        <span class="blog-date"><i class="ti-calendar"></i> {{ post.added_at }}</span>
                        <a href="javascript:void(0)"><i class="ti-comment-alt"></i> {{ post.comments_count }} Comment</a>
                        <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">{{post.user.name}}</span></span>
                    </div>
                    <p class="blog-description">{{post.body.substr(0,150)}}</p>
                    <a :href="'/post/'+post.slug" class="read-link">
                        <span>Read more</span>
                        <i class="ti-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

 export default {
        data(){
            return{
                posts:{},
            }
        },
        create() {
            console.log('Component mounted.')
            this.getPosts();
        },
         methods:{
             getPosts(){
                 axios.get('/api/posts')
                     .then(res => {
                         this.posts = res.data
                     })
                     .then(err => console.log(err))
             }
         },

     props: {
         form: {
             type: String,
             required: true,
         },
         setup(props, context) {
             console.log(props.form)
         }
     }

 }

</script>
