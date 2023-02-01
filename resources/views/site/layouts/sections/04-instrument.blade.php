<section id="instrument" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>ساز هایی که توی آموزشگاه ما تدریس میشه</h2>
            <p>
                توضیحاتی در مورد ساز های موسیقی و...
            </p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

            @foreach($instruments as $instrument)
                <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset($instrument->images->url)}}" style="width: 100%" alt="{{$instrument->name}}">
                        <div class="portfolio-info">
                            <h4>{{$instrument->name}}</h4>
                            <p>{{$instrument->description}}</p>
                            <div class="portfolio-links">
                                <a href="{{asset($instrument->images->url)}}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox"
                                   title="{{$instrument->id}}">
                                    <i class="bx bx-plus"></i></a>
                                {{--                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
