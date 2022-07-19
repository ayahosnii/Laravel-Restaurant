<template>
    <div class="">
        <section class="section-tb-padding blog-page">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="blog-style-1-details">
                            <div class="single-image">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                    <img :src="post.image" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="single-blog-content">
                                <div class="single-b-title">
                                    <h4>{{ post.title }}</h4>
                                </div>
                                <div class="date-edit-comments">
                                    <div class="blog-info-wrap">
                                        <span class="blog-data date">
                                            <i class="icon-clock"></i>
                                            <span class="blog-d-n-c">{{ post.added_at }}</span>
                                        </span>
                                        <span class="blog-data blog-edit">
                                            <i class="icon-user"></i>
                                            <span class="blog-d-n-c">By <span class="editor"></span></span>
                                        </span>
                                        <span class="blog-data comments">
                                            <i class="icon-bubble"></i>
                                            <span class="blog-d-n-c">{{post.comments_count}} <span class="add-comments">comments</span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog-description">
                                    <p> {{post.body}} </p>

                                </div>
                                <div class="blog-info">
                                    <i class="fa fa-quote-left"></i>
                                    <h6></h6>
                                </div>
                                <div class="b-link">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/blog.html">Garlic</a>
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/blog.html">Tost</a>
                                </div>
                                <div class="blog-social">
                                    <a href="javascript:void(0)" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:void(0)" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="javascript:void(0)" class="insta"><i class="fa fa-instagram"></i></a>
                                    <a href="javascript:void(0)" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                                <div class="blog-comments">
                                    <h4><span>{{post.comments_count}}</span> Comments</h4>
                                    <div class="blog-comment-info">
                                        <ul class="comments-arae" v-for="(comment,i) in post.comments" :key="i">
                                            <li class="comments-man">{{comment.user.name.substr(0,2).toUpperCase()}}</li>
                                            <li class="comments-content">
                                                <span class="comments-result">{{comment.body}}</span>
                                                <span class="comment-name"><i>By <span class="comments-title">{{comment.user.name}}</span></i></span>
                                                <span class="comments-result c-date">jan 20, 2021 <a href="javascript:void(0)" class="Reply">Reply</a></span>
                                            </li>
                                        </ul>
                                        <ul class="comments-arae comment-reply">
                                            <li class="comments-man">JE</li>
                                            <li class="comments-content">
                                                <span class="comments-result">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum...</span>
                                                <span class="comment-name"><i>By <span class="comments-title">Jenis</span></i></span>
                                                <span class="comments-result c-date">jan 15, 2021 <a href="javascript:void(0)" class="Reply">Reply</a></span>
                                            </li>
                                        </ul>
<!--
                                        <ul class="comments-arae comment-reply">
                                            <li class="comments-man">JE</li>
                                            <li class="comments-content">
                                                <span class="comments-result">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting...</span>
                                                <span class="comment-name"><i>By <span class="comments-title">Jenis</span></i></span>
                                                <span class="comments-result c-date">jan 15, 2021 <a href="javascript:void(0)" class="Reply">Reply</a></span>
                                            </li>
                                        </ul>
-->
<!--                                        <ul class="comments-arae all-reply">
                                            <li class="comments-man">DV</li>
                                            <li class="comments-content">
                                                <span class="comments-result">What is Lorem Ipsum Lorem Ipsum is simply dummy text industry Lorem Ipsum...</span>
                                                <span class="comment-name"><i>By <span class="comments-title">Devid</span></i></span>
                                                <span class="comments-result c-date">jan 01, 2021 <a href="javascript:void(0)" class="Reply">Reply</a></span>
                                            </li>
                                        </ul>
                                        <ul class="comments-arae comment-reply">
                                            <li class="comments-man">KR</li>
                                            <li class="comments-content">
                                                <span class="comments-result">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum...</span>
                                                <span class="comment-name"><i>By <span class="comments-title">Kartik</span></i></span>
                                                <span class="comments-result c-date">jan 11, 2021 <a href="javascript:void(0)" class="Reply">Reply</a></span>
                                            </li>
                                        </ul>-->
                                    </div>
                                </div>
                                <div class="comments-form">
                                    <h4>Leave a comment</h4>
                                    <form>
                                        <label>Name*</label>
                                        <input type="text" name="name" placeholder="Name">
                                        <label>Email*</label>
                                        <input type="text" name="email" placeholder="Email">
                                        <label>Comment*</label>
                                        <textarea placeholder="Message"></textarea>
                                    </form>
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-3-grid.html" class="btn-style1">Post comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-page">
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
        </section>
    </div>

</template>

<script>
export default {
    data(){
        return {
            post:'',
            slug:this.$route.params.slug,
            body:'',
            post_id : '',
            comments:[]
        }
    },
    created(){
        this.getPost();
    },
    methods: {
        getPost() {
            window.axios.get('/api/posts/'+this.$route.params.slug)
                .then(res => {
                    console.log(res)
                    this.post = res.data
                    this.post_id = this.post.id;
                    this.comments = this.post.comments
                })
                .catch(err => {
                    console.log(err)
                })
        },
    addComment(){
        let {body,post_id} = this;
        axios.post('/api/comment/create',{body,post_id})
            .then(res => {
                console.log(res)
                this.comments.unshift(res.data)
            })
    }
    },

}
</script>
