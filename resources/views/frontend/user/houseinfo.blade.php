@extends('frontend.layout.master')
@section('body')
<!-- House Info Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">বাড়ি সমূহের তথ্য</h1>
            </div>
            <div class="row">
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="houseinfosingle.html">
                        <div class="polaroid">
                            <img src="{{asset('frontend')}}/img/house02.jpg" alt="5 Terre" style="width:100%">
                            <div class="polaroidtext">
                                <p>ভূইঁয়া বাড়ি</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="houseinfosingle.html">
                        <div class="polaroid">
                            <img src="{{asset('frontend')}}/img/house02.jpg" alt="5 Terre" style="width:100%">
                            <div class="polaroidtext">
                                <p>চৌধুরী বাড়ি</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="houseinfosingle.html">
                        <div class="polaroid">
                            <img src="{{asset('frontend')}}/img/house02.jpg" alt="5 Terre" style="width:100%">
                            <div class="polaroidtext">
                                <p>মির্জা বাড়ি</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="houseinfosingle.html">
                        <div class="polaroid">
                            <img src="{{asset('frontend')}}/img/house02.jpg" alt="5 Terre" style="width:100%">
                            <div class="polaroidtext">
                                <p>সরকার বাড়ি</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="houseinfosingle.html">
                        <div class="polaroid">
                            <img src="{{asset('frontend')}}/img/house02.jpg" alt="5 Terre" style="width:100%">
                            <div class="polaroidtext">
                                <p>শেখ বাড়ি</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="houseinfosingle.html">
                        <div class="polaroid">
                            <img src="{{asset('frontend')}}/img/house02.jpg" alt="5 Terre" style="width:100%">
                            <div class="polaroidtext">
                                <p>মোল্লা বাড়ি</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="houseinfosingle.html">
                        <div class="polaroid">
                            <img src="{{asset('frontend')}}/img/house02.jpg" alt="5 Terre" style="width:100%">
                            <div class="polaroidtext">
                                <p>মোল্লা বাড়ি</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="houseinfosingle.html">
                        <div class="polaroid">
                            <img src="{{asset('frontend')}}/img/house02.jpg" alt="5 Terre" style="width:100%">
                            <div class="polaroidtext">
                                <p>মোল্লা বাড়ি</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- House Info End -->

    <!-- Map Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">ম্যাপ</h1>
            </div>
            <div class="row g-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.2735969059945!2d91.39693131496762!3d23.01372448495752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37536836ba1a6935%3A0x8c51de81f4d7516d!2sSkill%20Based%20Information%20Technology%2C%20Mizan%20Rd%2C%20Feni!5e0!3m2!1sen!2sbd!4v1682954363671!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- Map End -->
@endsection