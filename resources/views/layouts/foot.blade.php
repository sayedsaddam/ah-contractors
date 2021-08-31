
<footer class="ftco-footer">
    <div class="container mb-5 pb-4">
        <div class="row">
            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2 d-flex align-items-center">About</h2>
                    <p>Licensed under construction and operation of engineering works bye-laws 1987 and having registered offices...</p>
                    <ul class="ftco-footer-social list-unstyled mt-4">
                        <li><a target="_blank" href="https://linkedin.com/company/ahcontractors"><span class="fa fa-linkedin"></span></a></li>
                        <li><a target="_blank" href="https://twitter.com/AH_Contractors"><span class="fa fa-twitter"></span></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/alhayatcontractors"><span class="fa fa-facebook"></span></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/ah.contractors/"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">quick links <small class="font-weight-lighter text-info text-lowercase">(to navigate around)</small></h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-md-4">
                            <li><a href="projects"><span class="fa fa-chevron-right mr-2"></span>Project</a></li>
                            <li><a href="about"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="services"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                            <li><a href="blog"><span class="fa fa-chevron-right mr-2"></span>Blog Posts</a></li>
                            <li><a href="industries"><span class="fa fa-chevron-right mr-2"></span>Industries</a></li>
                        </ul>
                        <ul class="list-unstyled ml-md-5">
                            <li><a href="contact"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="help"><span class="fa fa-chevron-right mr-2"></span>Help</a></li>
                            <li><a href="privacy-policy"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a></li>
                            <li><a href="terms-of-use"><span class="fa fa-chevron-right mr-2"></span>Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="customer-service"><span class="fa fa-chevron-right mr-2"></span>Customer Services</a></li>
                        <li><a href="prompt-delivery"><span class="fa fa-chevron-right mr-2"></span>Prompt Delivery</a></li>
                        <li><a href="reliable-equipment"><span class="fa fa-chevron-right mr-2"></span>Reliable Equipment</a></li>
                        <li><a href="new-heavy-equipment"><span class="fa fa-chevron-right mr-2"></span>New Heavy Equipment</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Have Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="fa fa-map-marker mr-3"></span><span class="text">Office # 11, Umer building, Jinnah Avenue, Blue Area, Islamabad-Pakistan, 44000.</span></li>
                            <li><a href="tel:+92518469000"><span class="fa fa-phone mr-3"></span><span class="text">+92 51 846 9000</span></a></li>
                            <li><a href="mailto:careers@ah-contractors.com"><span class="fa fa-paper-plane mr-3"></span><span class="text">careers@ah-contractors.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aside-stretch py-3">
                    
                    <p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All rights reserved. AH Contractors</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal > Request a quote. -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="fa fa-close"></span>
                    </button>
                </div>
                <div class="modal-body p-4 p-md-5">
                    <form action="/request-quote" class="appointment-form ftco-animate">
                        {{ csrf_field() }}
                        <h3>Request Quote</h3>
                        <div class="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="" selected>Select Your Services</option>
                                            <option value="">Architecture</option>
                                            <option value="">Renovation</option>
                                            <option value="">Construction</option>
                                            <option value="">Interior &amp; Exterior</option>
                                            <option value="">Chemical Research</option>
                                            <option value="">Petroleum &amp; Gas</option>
                                            <option value="">Other Services</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="submit request" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    
    <script src="{{ asset('js/main.js') }}"></script>
    
</body>
</html>