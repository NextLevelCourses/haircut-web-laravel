<!-- Footer Start -->
<!-- Footer Start -->
<div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">Get In Touch</h4>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-map-marker-alt text-primary"></span>
                    </div>
                    <span>{{ $about->location }}</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-phone-alt text-primary"></span>
                    </div>
                    <span>{{ $about->work_phone }}</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-envelope-open text-primary"></span>
                    </div>
                    <span>{{ $about->work_email }}</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">Quick Links</h4>
                <a class="btn btn-link" href="">Book</a>
                <a class="btn btn-link" href="">Contact Us</a>
                {{-- <a class="btn btn-link" href="">Our Services</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Support</a> --}}
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">Notification Services</h4>
                <div class="position-relative mb-4">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">{{ __('Subscribe') }}</button>
                </div>
                <!-- disable social media links
                <div class="d-flex pt-1 m-n1">
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; {{ now()->year }} <a class="border-bottom" href="#">Shortcut</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <a class="border-bottom" href="https://htmlcodex.com">Version.
                        {{ config('app.version') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- Footer End -->
