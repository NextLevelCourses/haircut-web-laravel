<!-- Footer Start -->
<div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="contact" class="container py-5">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-uppercase mb-4">Get In Touch</h4>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-map-marker-alt text-primary"></span>
                    </div>
                    <span>123 Street, New York, USA</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-phone-alt text-primary"></span>
                    </div>
                    <span>+012 345 67890</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-envelope-open text-primary"></span>
                    </div>
                    <span>info@example.com</span>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-uppercase mb-4">Quick Links</h4>
                <a class="btn btn-link" href="#aboutus">About Us</a>
                <a class="btn btn-link" href="#services">Our Services</a>
                <a class="btn btn-link" href="#contact">Contact Us</a>
            </div>

            <!-- Map Location -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-uppercase mb-4">Our Location</h4>
                <div class="rounded overflow-hidden">
                    <iframe
                        class="w-100"
                        height="200"
                        style="border:0;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24177.640391786685!2d-74.0060152!3d40.7127281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzQ2LjgiTiA3NMKwMDAnMjUuNiJX!5e0!3m2!1sen!2sus!4v1623400556000!5m2!1sen!2sus"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-uppercase mb-4">Newsletter</h4>
                <form action="/subscribe" method="POST">
                    <!-- Tambahkan CSRF token jika pakai Laravel -->
                    {{-- @csrf --}}
                    <div class="position-relative mb-4">
                        <input 
                            class="form-control border-0 w-100 py-3 ps-4 pe-5" 
                            type="email" 
                            name="email" 
                            placeholder="Your email" 
                            required>
                        <button 
                            type="submit" 
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            Sign Up
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">The Shortcut</a>, All Rights Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a class="border-bottom" href="#">Next Level Project</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
