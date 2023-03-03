<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>اساتید ما</h2>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach($teachers as $teacher)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset($teacher->images->url)}}"
                                 class="img-fluid rounded-5" alt="">
                            <h3>{{$teacher->name}}</h3>
                            <h4>{{$teacher->teach}}</h4>
                            <p class="mt-3">
                                {{$teacher->bio}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
