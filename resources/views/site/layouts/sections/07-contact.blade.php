<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>تماس با ما</h2>
            <p>
                توضیحات تماس با ما
            </p>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-lg-6 p-3 shadow-lg">
                <div class="info p-3">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>آدرس:</h4>
                        <p>شیراز - معالی آباد - رو به روی پارک ملت</p>
                    </div>
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>ایمیل:</h4>
                        <p>info@taranomusic.ir</p>
                    </div>
                    <div class="email">
                        <i class="bx bxl-instagram"></i>
                        <h4>اینستاگرام:</h4>
                        <p>@taranomusic</p>
                    </div>
                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>شماره تماس:</h4>
                        <p>+98-917-7165426</p>
                    </div>

                </div>

            </div>
            <div class="col-sm-12 col-lg-6 p-3 shadow-lg">
                <form action="{{route('site.messages.store')}}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
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
