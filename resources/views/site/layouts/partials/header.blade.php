<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 col-lg-8 text-center">
                <h1 class="mt-2">به آموزشگاه موسیقی ترنم خوش آمدید</h1>
                <h2 class="mt-5">میخوای یادگیری موسیقی رو شروع کنی؟ همین حالا با ما تماس بگیر</h2>
                <a href="#contact" class="btn-get-started scrollto mt-4">مشاوره ی رایگان</a>
            </div>
            <div class="col-sm-12 col-lg-4 text-center">
                <section class="contact">
                    <form action="{{route('site.messages.store')}}" method="post" role="form" class="php-email-form border border-3 p-3 border-success">
                        @csrf
                        <h3>
                            پیش ثبت نام
                        </h3>
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="name"
                                       placeholder="نام و نام خانوادگی">
                            </div>
                            <div class="form-group col-12">
                                <input type="number" class="form-control" name="mobile_number"
                                       placeholder="شماره تماس" required>
                            </div>
                            <div class="form-group col-12">
                                <textarea class="form-control" name="description" rows="5" placeholder="ساز درخواستی... اگر سوالی دارید بپرسید"
                                          required></textarea>
                            </div>
                            <div class="text-center col-12">
                                <button type="submit">پیش ثبت نام</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <div class="row icon-boxes text-center">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-stack-line"></i></div>
                    <h4 class="title"><a href="#contact">ارائه ی دیپلم موسیقی</a></h4>
                    <p class="description">
                        مورد تایید اداره ی آموزش و پرورش و وزارت فرهنگ و ارشاد اسلامی
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="ri-open-arm-line"></i></div>
                    <h4 class="title"><a href="#contact">اساتید با تجربه</a></h4>
                    <p class="description">
                        اساتیدی با تجربه عضو هیئت علمی دانشگاه موسیقی شیراز
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="ri-team-line"></i></div>
                    <h4 class="title"><a href="#contact">کلاس های گروه نوازی</a></h4>
                    <p class="description">
                        برگزاری کلاس های گروهی شامل موسیقی کودک و آواز گروهی
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="500">
                <div class="icon-box">
                    <div class="icon">
                        <i class="ri-chat-smile-3-line"></i>
                    </div>
                    <h4 class="title"><a href="#contact">پشتیبانی مدرسین</a></h4>
                    <p class="description">
                        می توانید با استاد خود در طول هفته در ارتباط باشید
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
