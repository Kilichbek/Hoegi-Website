@extends('layouts.front')

@section('title','| Contact')

@section('header')
    <section class="cr-section breadcrumb-area" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="cr-breadcrumb text-center">
                        <h2 class="cr-breadcrumb__title">Contact</h2>
                        <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
   <!-- Contact Page Area -->
<section class="cr-section contact-page-area ptb--150 bg--white">

        <!-- Contact Page Details -->
        <aside class="contact-page-details">
            <div class="container">
                <div class="row">
                    <!-- Contact Sidebar -->
                    <div class="col-lg-4">
                        <div class="contact-sidebar">
                            <div class="small-title">
                                <h4>Get in touch</h4>
                                <p>Lets do better design was born and I will give you a mplete of the tem, and pund  actual </p>
                            </div>
                            <ul class="contact-sidebar__body">
                                <li class="ct__address">
                                    <p>125 New Yourk, Straight Road <br> River Side Lane, USA</p>
                                </li>
                                <li class="ct__phone">
                                    <p><a href="callto://+00812458356987">+008 12458 356 987 (toll free)</a></p>
                                    <p><a href="callto://+00825647987546">+008 25647 987 546</a></p>
                                </li>
                                <li class="ct__mail">
                                    <p><a href="mailto://info@nailsboat.com">info@nail’sboat.com</a></p>
                                    <p><a href="mailto://www.nailsboat.com">www.nail’sboat.com</a></p>
                                </li>
                            </ul>
                            <div class="contact-sidebar__social">
                                <h5>You can also connect us here...</h5>
                                <div class="social-icons social-icons--rounded social-icons--medium">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                        <li class="google-plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- //Contact Sidebar -->
                    <!-- Contact Map -->
                    <div class="col-lg-8">
                        <div class="ct__map">
                            <div id="google-map" class="contact-map"></div>
                        </div>
                    </div><!-- //Contact Map -->
                </div>
            </div>
        </aside><!-- //Contact Page Details -->

        <!-- Contact Page Form -->
        <aside class="contact-page-form pt--100">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    <div class="col-lg-8">
                        <div class="contact__form">
                            <div class="small-title">
                                <h4>Send us a message</h4>
                                <p>Lets do better design was born and I will give you a mplete of the tem, and pund  actual teachings of the great explorer ecial contet to make it beautiful know how to pursu obis est eligend</p>
                            </div>
                            <div class="comment-box">
                                <form id="contact-form" action="mail.php" method="post">
                                    <div class="single-input">
                                        <input type="text" name="name" id="comment-name" placeholder="Enter your name">
                                    </div>
                                    <div class="single-input">
                                        <input type="email" placeholder="Your email">
                                    </div>
                                    <div class="single-input">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                    <div class="single-input">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="single-input textarea">
                                        <textarea cols="3" name="message" rows="3" placeholder="Write your message here"></textarea>
                                    </div>
                                    <div class="single-input">
                                        <button type="submit" class="cr-btn cr-btn--sm cr-btn--transparent cr-btn--icon"><span>send</span></button>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div><!-- //Contact Form -->
                    <div class="col-lg-4">
                        <img src="images/others-jpg/contact-image.jpg" alt="contact image">
                    </div>
                </div>
            </div>
        </aside><!-- //Contact Page Form -->

</section><!-- //Contact Page Area --> 
@endsection


@section('map')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0"></script>
	    <script>
	        // When the window has finished loading create our google map below
	        google.maps.event.addDomListener(window, 'load', init);
	    
	        function init() {
	            // Basic options for a simple Google Map
	            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	            var mapOptions = {
	                // How zoomed in you want the map to start at (always required)
	                zoom: 14,

	                scrollwheel: false,

	                // The latitude and longitude to center the map (always required)
	                center: new google.maps.LatLng(40.6768, -73.9001), // New York

	                // How you would like to style the map. 
	                // This is where you would paste any style found on

	                styles:[
					    {
					        "featureType": "all",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "weight": "2.00"
					            }
					        ]
					    },
					    {
					        "featureType": "all",
					        "elementType": "geometry.stroke",
					        "stylers": [
					            {
					                "color": "#9c9c9c"
					            }
					        ]
					    },
					    {
					        "featureType": "all",
					        "elementType": "labels.text",
					        "stylers": [
					            {
					                "visibility": "on"
					            }
					        ]
					    },
					    {
					        "featureType": "landscape",
					        "elementType": "all",
					        "stylers": [
					            {
					                "color": "#f2f2f2"
					            }
					        ]
					    },
					    {
					        "featureType": "landscape",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            }
					        ]
					    },
					    {
					        "featureType": "landscape.man_made",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            }
					        ]
					    },
					    {
					        "featureType": "poi",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "off"
					            }
					        ]
					    },
					    {
					        "featureType": "road",
					        "elementType": "all",
					        "stylers": [
					            {
					                "saturation": -100
					            },
					            {
					                "lightness": 45
					            }
					        ]
					    },
					    {
					        "featureType": "road",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "color": "#eeeeee"
					            }
					        ]
					    },
					    {
					        "featureType": "road",
					        "elementType": "labels.text.fill",
					        "stylers": [
					            {
					                "color": "#7b7b7b"
					            }
					        ]
					    },
					    {
					        "featureType": "road",
					        "elementType": "labels.text.stroke",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            }
					        ]
					    },
					    {
					        "featureType": "road.highway",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "simplified"
					            }
					        ]
					    },
					    {
					        "featureType": "road.arterial",
					        "elementType": "labels.icon",
					        "stylers": [
					            {
					                "visibility": "off"
					            }
					        ]
					    },
					    {
					        "featureType": "transit",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "off"
					            }
					        ]
					    },
					    {
					        "featureType": "water",
					        "elementType": "all",
					        "stylers": [
					            {
					                "color": "#46bcec"
					            },
					            {
					                "visibility": "on"
					            }
					        ]
					    },
					    {
					        "featureType": "water",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "color": "#c8d7d4"
					            }
					        ]
					    },
					    {
					        "featureType": "water",
					        "elementType": "labels.text.fill",
					        "stylers": [
					            {
					                "color": "#070707"
					            }
					        ]
					    },
					    {
					        "featureType": "water",
					        "elementType": "labels.text.stroke",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            }
					        ]
					    }
					]

	            };

	            // Get the HTML DOM element that will contain your map 
	            // We are using a div with id="map" seen below in the <body>
	            var mapElement = document.getElementById('google-map');

	            // Create the Google Map using our element and options defined above
	            var map = new google.maps.Map(mapElement, mapOptions);

	            // Let's also add a marker while we're at it
	            var marker = new google.maps.Marker({
	                position: new google.maps.LatLng(40.6768, -73.9001),
	                map: map,
	                title:'Site Name',
	                icon:"images/icons/marker.png",
	                animation:google.maps.Animation.BOUNCE
	            });
	        }
        </script>
@endsection