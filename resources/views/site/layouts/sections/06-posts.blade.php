<section id="posts" class="cta">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2 style="color: #69acd9;">مقالات</h2>
            <p>اینجا میتونه توضیحی در مورد مقالات قرار بگیره</p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper py-3">
                @foreach($posts as $post)
                    <div class="swiper-slide rounded-3 p-3" style="background-color: rgba(250,250,250,0.1)">
                        <div class="row px-2">
                            <div class="col-6">
                                <img src="{{asset($post->images->url)}}"
                                     class="img-thumbnail" alt="{{$post->title}}">
                            </div>
                            <div class="col-6">
                                <h3 class="text-white">{{$post->title}}</h3>
                                <p class="mt-3" style="color: #69acd9;">
                                    {{Str::limit(strip_tags($post->description),150)}}
                                </p>
                                <a class="cta-btn" href="{{route('site.posts.show',$post->slug)}}">ادامه ی مطلب</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination bg-light rounded-pill mx-5"></div>
        </div>
    </div>
</section>
