<hr>
<footer id="footer">
    <div class="container py-4">
        <div class="text-center">
            <h6>
                Copyright &copy; <strong><span>taranomusic.ir</span></strong> {{date('Y')}}. All Rights Reserved
            </h6>
            <h6>
                طراحی و توسعه:
                <a class="link-primary" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    شرکت ایده پردازان آریو وب
                </a>
            </h6>
        </div>
    </div>
</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="d-flex justify-content-between p-3">
                <h6 class="modal-title" id="exampleModalLabel">معرفی شرکت طراح</h6>
                <a type="button" class="text-danger" data-bs-dismiss="modal">
                    <i class="fas fa-times-circle"></i>x
                </a>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <h2>ایده پردازان آریو وب</h2>
                        <p>
                            شرکت ایده پردازان آریو وب فعال در زمینه برنامه نویسی، طراحی سایت، طراحی اپلیکیشن های موبایل
                        </p>
                        <p><strong>شماره تماس:</strong></p>
                        09178776773 - 09177165426
                    </div>
                    <div class="col-md-4">
                        <img class="rounded-circle img-fluid" width="100px"
                             src="{{asset('assets/site/img/arioweb.jpg')}}" alt="ایده پردازان آریو وب">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<script src="{{asset('assets/site/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/site/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/site/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/site/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/site/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/site/vendor/swiper/swiper-bundle.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/site/js/main.js')}}"></script>
<script src="{{asset('assets/site/js/sweetalert.min.js')}}"></script>
@include('sweetalert::alert')
</body>

</html>
