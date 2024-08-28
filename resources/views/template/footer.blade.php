
<style>
a{
    color: white;
}
</style>

<footer class="footer">
    <div class="container">


        <div class="footer_content" style="margin-top: -80px">
            <div class="row">

                <!-- Footer Column - About -->
                <div class="col-lg-3 footer_col d-flex flex-column align-items-center text-center text-light">

                    <!-- Logo -->
                    <div class="logo_container mb-3">
                        <div class="logo" style="background-color: white; padding: 10px;">
                            <!-- Use asset function for the image URL -->
                            <img src="{{ asset('templates/images/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 120px;">
                        </div>
                    </div>
                    <p class="footer_about_text text-light" style="font-size: 16px;">Inspiring Minds, Crafting Futures</p>
                </div>
                <!-- Footer Column - Menu -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Menu</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item text-light"><a href="{{url('/')}}">Home</a></li>
                            <li class="footer_list_item text-light"><a href="{{url('about_us')}}">About us</a></li>
                            <li class="footer_list_item text-light"><a href="{{url('/signrature_program')}}">Signature Programs</a></li>
                            <li class="footer_list_item text-light"><a href="{{url('r_m_o')}}">Resource Mobilization Officer</a></li>
                            <li class="footer_list_item text-light"><a href="{{url('/our_team')}}">Our Team</a></li>
                            <li class="footer_list_item text-light"><a href="{{url('/contact_us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Usefull Links -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Useful Links</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item text-light"><a href="{{url('https://nust.edu.pk/about-us')}}">NUST </a></li>
                            {{-- <li class="footer_list_item text-light"><a href="{{url('/')}}">Testimonials</a></li> --}}
                            <li class="footer_list_item text-light"><a href="{{url('https://advancement.nust.edu.pk/#/')}}">Advancement </a></li>
                            <li class="footer_list_item text-light"><a href="{{url('https://www.linkedin.com/company/uaonust/')}}">LinkedIn </a></li>
                            <li class="footer_list_item text-light"><a href="{{url('https://www.facebook.com/uao.nust?mibextid=kFxxJD')}}">Facebook </a></li>
                            <li class="footer_list_item text-light"><a href="{{url('https://www.instagram.com/uao.nust?igsh=MWk3ZmU3cGdscHp2NA==')}}">Instagram </a></li>
                          </ul>
                    </div>
                </div>

                <!-- Footer Column - Contact -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Contact</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <!-- Use asset function for the image URL -->
                                    <img src="{{ asset('templates/images/placeholder.svg') }}" alt="Placeholder Icon">
                                </div>
                                {{-- <span> RIC Secretariat National University of Science & Technology(NUST) H12 Islamabad</span> --}}
                                <span class="text-light"> RIC Secretariat NUST H-12 </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Islamabad</span>
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <!-- Use asset function for the image URL -->
                                    <img src="{{ asset('templates/images/smartphone.svg') }}" alt="Smartphone Icon">
                                </div>
                                <span class="text-light">+92 51 9085 6821</span>

                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <!-- Use asset function for the image URL -->
                                    <img src="{{ asset('templates/images/envelope.svg') }}" alt="Envelope Icon">
                                </div>
                                <span class="text-light">                                advancement.nust.edu.pk</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<script src="{{ asset('templates/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('templates/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('templates/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('templates/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('templates/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('templates/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('templates/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('templates/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('templates/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('templates/plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('templates/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('templates/js/custom.js') }}"></script>
{{--
<script src="{{ asset('templates/js/temp/oneyear.js') }}"></script> --}}
{{-- <script src="{{ asset('templates/js/temp/foutyear.js') }}"></script> --}}
{{-- <script src="{{ asset('templates/js/temp/perpetual_seat_your_name.js') }}"></script> --}}
