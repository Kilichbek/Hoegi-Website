@extends('layouts.front')

@section('title','| Home')

@section('content')

<!-- Pillar Of Islam -->
<section class="cr-section islams-pillar-area ptb--120 bg--pattern">
    <div class="islams-pillars islams-pillars--style-2 d-flex justify-content-between justify-content-lg-center align-items-center flex-wrap flex-xl-nowrap flex-xx-nowrap flex-sp-nowrap">
        <div class="islams-pillars__content text-left">
            <h3>Every muslim needs to realise the </h3>
            <h2>Importance of the “Pillars” of Islam</h2>
            <p><span>Islam</span> is the know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues</p>
            <a href="about-us.html" class="cr-btn cr-btn--transparent cr-btn--dark cr-btn--sm"><span>Read more</span></a>
        </div>
        <div class="pillars d-flex justify-content-lg-between flex-md-wrap justify-content-md-center justify-content-sm-center justify-content-center">
            <div class="pillar__single wow fadeInRight" data-wow-delay="0s">
                <div class="pillar__single__inner">
                    <img class="pillar__single__icon" src="images/pillars/pillar-icon-1.png" alt="pillar 1">
                    <h3>Kalima</h3>
                </div>
            </div>
            <div class="pillar__single wow fadeInRight" data-wow-delay="0.1s">
                <div class="pillar__single__inner">
                    <img class="pillar__single__icon" src="images/pillars/pillar-icon-2.png" alt="pillar 2">
                    <h3>Salat</h3>
                </div>
            </div>
            <div class="pillar__single wow fadeInRight" data-wow-delay="0.2s">
                <div class="pillar__single__inner">
                    <img class="pillar__single__icon" src="images/pillars/pillar-icon-3.png" alt="pillar 3">
                    <h3>Zakat</h3>
                </div>
            </div>
            <div class="pillar__single wow fadeInRight" data-wow-delay="0.3s">
                <div class="pillar__single__inner">
                    <img class="pillar__single__icon" src="images/pillars/pillar-icon-4.png" alt="pillar 4">
                    <h3>Siam</h3>
                </div>
            </div>
            <div class="pillar__single wow fadeInRight" data-wow-delay="0.4s">
                <div class="pillar__single__inner">
                    <img class="pillar__single__icon" src="images/pillars/pillar-icon-5.png" alt="pillar 5">
                    <h3>HAJJ</h3>
                </div>
            </div>
        </div>
    </div>
</section><!-- //Pillar Of Islam -->

<!-- Activities area -->
<section class="cr-section activities-area bg--white pt--120 pb--130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                <div class="section-title text-center">
                    <h4>Our “Services”</h4>
                    <h2>Here is our Services</h2>
                    <p><span>Islam</span> is the know how to pursue pleasure rationally encounter consequences that are extremely painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
                </div>
            </div>
        </div>
        <div class="activity-slider-active slider-arrow--style2">

            <!-- Single Activity -->
            <div class="activity-wrap">
                <figure class="activity">
                    <div class="activity__thumb">
                        <a href="single-activity.html">
                            <img src="images/activity/1.jpg" alt="activity image">
                        </a>
                    </div>
                    <figcaption class="activity__content text-center">
                        <h3><a href="single-activity.html">Shahada</a></h3>
                        <p>Islam is the know how to pursuesure rationally encounter consequences  extremely painful again we love islam for peace </p>
                    </figcaption>
                </figure>
            </div><!-- //Single Activity -->

            <!-- Single Activity -->
            <div class="activity-wrap">
                <figure class="activity">
                    <div class="activity__thumb">
                        <a href="single-activity.html">
                            <img src="images/activity/2.jpg" alt="activity image">
                        </a>
                    </div>
                    <figcaption class="activity__content text-center">
                        <h3><a href="single-activity.html">Medical Treatement</a></h3>
                        <p>Islam is the know how to pursuesure rationally encounter consequences  extremely painful again we love islam for peace </p>
                    </figcaption>
                </figure>
            </div><!-- //Single Activity -->

            <!-- Single Activity -->
            <div class="activity-wrap">
                <figure class="activity">
                    <div class="activity__thumb">
                        <a href="single-activity.html">
                            <img src="images/activity/3.jpg" alt="activity image">
                        </a>
                    </div>
                    <figcaption class="activity__content text-center">
                        <h3><a href="single-activity.html">Legal Services</a></h3>
                        <p>Islam is the know how to pursuesure rationally encounter consequences  extremely painful again we love islam for peace </p>
                    </figcaption>
                </figure>
            </div><!-- //Single Activity -->
        </div>
    </div>
</section><!-- //Activities area -->

<!-- Salat times area -->
<section class="cr-section salat-times-area">
    <div class="salat-times large--width d-flex align-items-center justify-content-center">
        <div class="salat-times__inner text-center">
            <div class="container">
                <div class="row">
                    <div  class="col-lg-10 offset-lg-1">
                        <h2>Time of Salat</h2>
                        <h4>Prayer Times</h4>
                        <div class="salat-times__boxes d-flex flex-sm-wrap flex-wrap justify-content-md-between justify-content-center flex-md-nowrap">
                            <div class="salat-times__box">
                                <h4>Fajr</h4>
                                <span>[{timeCalc.timeDawn}]</span>
                            </div>
                            <div class="salat-times__box">
                                <h4>Dhuhr</h4>
                                <span>[{timeCalc.timeZuhr}]</span>
                            </div>
                            <div class="salat-times__box">
                                <h4>Asr</h4>
                                <span>[{timeCalc.timeAsr}]</span>
                            </div>
                            <div class="salat-times__box">
                                <h4>Maghrib</h4>
                                <span>[{timeCalc.timeMaghrib}]</span>
                            </div>
                            <div class="salat-times__box">
                                <h4>Isha</h4>
                                <span>[{timeCalc.timeIsha}]</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- //Salat times area -->

<!-- Upcoming Events -->
<section class="cr-section events-area bg--white ptb--150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                <div class="section-title text-center">
                    <h4>Our “Events”</h4>
                    <h2>Upcoming Events</h2>
                    <p><span>Islam</span> is the know how to pursue pleasure rationally encounter consequences that are extremely painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="events2">

                    <!-- Event Single -->
                    <article class="event-single video--event">
                        <div class="event-single__thumb">
                            <a class="video--trigger" href="https://www.youtube.com/watch?v=6I40BWTk95E">
                                <img src="images/event/layout-2/1.jpg" alt="event thumb">
                            </a>
                            <div class="event-single__date">
                                <h3>23 December, 2017</h3>
                            </div>
                        </div>
                        <div class="event-single__content">
                            <h3><a href="event-details.html">Importance of Hajj in Islam</a></h3>
                            <p><strong>Ramadan</strong> is the know how  to pursue pleasure ratio </p>
                            <div class="event-single__content__location">
                                <p><i class="icofont icofont-institution"></i>Central masque, New town, Las Vegas</p>
                                <p><i class="icofont icofont-wall-clock"></i> 03.00 am to 05.30pm</p>
                            </div>
                        </div>
                    </article><!-- //Event Single -->

                    <!-- Event Single -->
                    <article class="event-single">
                        <div class="event-single__thumb">
                            <a href="event-details.html">
                                <img src="images/event/layout-2/2.jpg" alt="event thumb">
                            </a>
                            <div class="event-single__date">
                                <h3>15 December, 2017</h3>
                            </div>
                        </div>
                        <div class="event-single__content">
                            <h3><a href="event-details.html">Salat is the way to get closer to Allah</a></h3>
                            <p><strong>Ramadan</strong> is the know how  to pursue pleasure ratio </p>
                            <div class="event-single__content__location">
                                <p><i class="icofont icofont-institution"></i>Central masque, New town, Las Vegas</p>
                                <p><i class="icofont icofont-wall-clock"></i> 03.00 am to 05.30pm</p>
                            </div>
                        </div>
                    </article><!-- //Event Single -->

                </div>
            </div>
        </div>
    </div>
</section><!-- //Upcoming Events -->

<!--  Offer Donation Area -->
<div class="offer-donation-area bg--pattern ptb--90">
    <div class="offer-donation__inner d-flex flex-wrap flex-lg-nowrap align-items-center">
        <div class="offer-donation__offer offer d-flex align-items-center flex-wrap flex-sm-nowrap">
            <div class="offer__thumb text-lg-center">
                <img class="wow fadeInLeft" src="images/others-png/offer-thumb-small.png" alt="offer thumb">
            </div>
            <div class="offer__content text-center">
                <h2>Special Discount on...</h2>
                <h4>Hajj & Umrah package </h4>
                <img src="images/others-png/kaba-small.png" alt="kaba">
                <div class="offer__content__button">
                    <a href="contact.html" class="cr-btn cr-btn--transparent cr-btn--sm"><span>Contact Us</span></a>
                </div>
            </div>
        </div>
        <div class="offer-donatino__donation">
            <div class="donation-wantend text-center">
                <h2>Donation wanted for...</h2>
                <h5>Mosque development & kid’s school</h5>
                <p>Islam is the know how to pursue pleasure rationally encounter consequences that are extremely painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
                <div class="donation-wantend__form">
                    <form action="#">
                        <input type="text" placeholder="Your amount here">
                        <button class="cr-btn cr-btn--black"><span>DONATE NOW</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- // Offer Donation Area -->

<!-- Team Area -->
<section class="cr-section team-area ptb--150 bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                <div class="section-title text-center">
                    <h4>Our “Team”</h4>
                    <h2>Meet our Organizer</h2>
                    <p>Islam is the know how to pursue pleasure rationally encounter consequences that are extremely painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Team -->
            <div class="col-lg-6 col-md-6 col-xl-3">
                <figure class="team-member wow fadeInUp">
                    <div class="team-member__thumb">
                        <div class="hexagon">
                            <div class="hexagon__inner1">
                                <div class="hexagon__inner2">
                                    <img src="images/team/1.jpg" alt="team member 1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <figcaption class="team-member__content">
                        <h3>Sawad Bin Maksud</h3>
                        <h5>President</h5>
                    </figcaption>
                </figure>
            </div><!-- //Single Team -->
            <!-- Single Team -->
            <div class="col-lg-6 col-md-6 col-xl-3">
                <figure class="team-member wow fadeInUp">
                    <div class="team-member__thumb">
                        <div class="hexagon">
                            <div class="hexagon__inner1">
                                <div class="hexagon__inner2">
                                    <img src="images/team/2.jpg" alt="team member 1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <figcaption class="team-member__content">
                        <h3>Nahiyan Bin Momen</h3>
                        <h5>Event Organizer</h5>
                    </figcaption>
                </figure>
            </div><!-- //Single Team -->
            <!-- Single Team -->
            <div class="col-lg-6 col-md-6 col-xl-3">
                <figure class="team-member wow fadeInUp">
                    <div class="team-member__thumb">
                        <div class="hexagon">
                            <div class="hexagon__inner1">
                                <div class="hexagon__inner2">
                                    <img src="images/team/3.jpg" alt="team member 1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <figcaption class="team-member__content">
                        <h3>Julfiker Amin Ali</h3>
                        <h5>Quran Teacher</h5>
                    </figcaption>
                </figure>
            </div><!-- //Single Team -->
            <!-- Single Team -->
            <div class="col-lg-6 col-md-6 col-xl-3">
                <figure class="team-member wow fadeInUp">
                    <div class="team-member__thumb">
                        <div class="hexagon">
                            <div class="hexagon__inner1">
                                <div class="hexagon__inner2">
                                    <img src="images/team/4.jpg" alt="team member 1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <figcaption class="team-member__content">
                        <h3>Hasib Bin Asfaque</h3>
                        <h5>Imam</h5>
                    </figcaption>
                </figure>
            </div><!-- //Single Team -->
        </div>
    </div>
</section><!-- //Team Area -->

@endsection

@section('banner')
<div class="banner-area">
        <div class="banner banner-slide-active fullscreen slide-animate-text slider-arrow--style1 arrow--dark">

            <!-- Single Banner -->
            <div class="banner__single right-side--bg fullscreen d-flex flex-wrap flex-md-nowrap justify-content-center align-items-center">
                <div class="banner__content color--theme text-center">
                    <img src="images/others-png/bismilla-word-theme.png" alt="bismillah word">
                    <h3>O’ Allah we believe that</h3>
                    <h1>Only you can save us</h1>
                    <div class="banner__content__button">
                        <a href="about-us.html" class="cr-btn cr-btn--theme cr-btn--transparent cr-btn--sm"><span>Learn More</span></a>
                    </div>
                </div>
                <div class="banner__side-photo">
                    <img src="images/others-png/munajat.png" alt="banner side image">
                </div>
            </div><!-- //Single Banner -->

            <!-- Single Banner -->
            <div class="banner__single right-side--bg fullscreen d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center">
                <div class="banner__content color--theme text-center">
                    <img src="images/others-png/bismilla-word-theme.png" alt="bismillah word">
                    <h3>In the name of <strong>“Allah”</strong></h3>
                    <h1>Come to the straight path</h1>
                    <div class="banner__content__button">
                        <a href="about-us.html" class="cr-btn cr-btn--theme cr-btn--transparent cr-btn--sm"><span>Learn More</span></a>
                    </div>
                </div>
                <div class="banner__side-photo">
                    <img src="images/others-png/munajat.png" alt="banner side image">
                </div>
            </div><!-- //Single Banner -->

        </div>
    </div>
@endsection