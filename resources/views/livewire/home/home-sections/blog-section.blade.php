<section class="section-tb-padding blog1">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Recent blogs</h2>
                </div>
                <div class="home-blog owl-carousel owl-theme owl-loaded owl-drag">







                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2814px;">
                            @foreach($posts as $post)
                                <div class="owl-item active" style="width: 372px; margin-right: 30px;">
                                    <div class="items">
                                        <div class="blog-start">
                                            <div class="blog-image">
                                                <a href="">
                                                    <img src="{{$post->image}}" alt="blog-image" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-title">
                                                    <h6><a href="{{url('/post/'.$post->slug)}}">{{$post->title}}</a></h6>
                                                    <span class="blog-admin">By <span class="blog-editor">{{$post->user->name}}</span></span>
                                                </div>
                                                <p class="blog-description">{{substr($post->body, 300)}}...</p>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                    <span>Read more</span>
                                                    <i class="ti-arrow-right"></i>
                                                </a>
                                                <div class="blog-date-comment">
                                                    <span class="blog-date">8 Jan 2021</span>
                                                    <a href="javascript:void(0)">1 Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                        <div class="all-blog">
                            <a href="{{url('/post/')}}" class="btn btn-style1">View all</a>
                        </div>
                    </div>
                </div>
            </div>
</section>
