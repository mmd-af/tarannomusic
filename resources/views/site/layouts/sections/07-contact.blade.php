<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>تماس با ما</h2>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-lg-6 p-3 shadow-lg">
                <div class="info p-3">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>آدرس:</h4>
                        <b>شیراز - معالی آباد - رو به روی پارک ملت - ساختمان طوبی4 - جنب شیرینی فروشی آلما - طبقه ی 5 -
                            واحد 10</b>
                    </div>
                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>شماره تماس:</h4>
                        <b>تلفن ثابت: 36248130-071</b>
                        <b>همراه: 09376188115</b>
                    </div>
                    <div class="email">
                        <i class="bi bi-whatsapp"></i>
                        <h4>واتس اپ:</h4>
                        <b>09173099324</b>
                    </div>
                    <div class="email">
                        <i class="bx bxl-instagram"></i>
                        <h4>اینستاگرام:</h4>
                        <b>tarannomusic@</b>
                    </div>
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>ایمیل:</h4>
                        <b>info@taranomusic.ir</b>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 p-3 shadow-lg">
                <p class="p-3">
                    با گذاشتن پیام در کمتر از 24 ساعت در رابطه با هرگونه سوالی که داشته باشید با شما تماس گرفته می شود -
                    مشاوره رایگان می باشد.
                </p>
                <form action="{{route('site.messages.store')}}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row px-3">
                        <div class="form-group col-12">
                            <input type="number" class="form-control" name="mobile_number" id="mobile_number"
                                   placeholder="شماره تماس" required>
                        </div>
                        <div class="form-group col-12">
                                <textarea class="form-control" name="description" rows="5" placeholder="پیام"
                                          required></textarea>
                        </div>
                        <div class="text-center col-12">
                            <button type="submit">ارسال پیام</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
