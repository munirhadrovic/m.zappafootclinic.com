<!DOCTYPE html>
<html>
	<head>



		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "a";
			});
		</script>
        <link rel="stylesheet" href="css/themes/emirtheme1.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu2').slicknav({
					prependTo:'#navigation-menu-page2'
				});
			});

            $(function(){
                $('#navigation-menu-page3').slicknav({
                    prependTo:'#navigation-menu-page3-sub'
                });
            });
            $(function(){
                $('#navigation-menu-page4').slicknav({
                    prependTo:'#navigation-menu-page4-sub'
                });
            });
            $(function(){
                $('#navigation-menu-page5').slicknav({
                    prependTo:'#navigation-menu-page5-sub'
                });
            });
            $(function(){
                $('#navigation-menu-page6').slicknav({
                    prependTo:'#navigation-menu-page6-sub'
                });
            });
            $(function(){
                $('#navigation-menu-page7').slicknav({
                    prependTo:'#navigation-menu-page7-sub'
                });
            });
            $(function(){
                $('#navigation-menu-page8').slicknav({
                    prependTo:'#navigation-menu-page8-sub'
                });
            });
            $(function(){
                $('#navigation-menu-page9').slicknav({
                    prependTo:'#navigation-menu-page9-sub'
                });
            });
            $(function(){
                $('#navigation-menu-page10').slicknav({
                    prependTo:'#navigation-menu-page10-sub'
                });
            });
            $(function(){
                $('#navigation-menu').slicknav({
                    prependTo:'#navigation-menu-contact'
                });
            });
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });

            <!--TEST FOR GITHUB but from emir account-->

		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });

            <!-- new test from emir-->



            <!--TEST FOR GITHUB but frmo emir account-->
		   
			// $(document).bind ('pageshow', function (e, data) {
			// 	console.log ($('#page1'));
			// 	console.log ($.mobile.activePage);

			// 	if ($.mobile.activePage.attr('id') == 'page1') { 
			// 		console.log ('Bingo!'); 
			// 		$(function(){
			//    			$( "[data-role='header'], [data-role='footer']" ).toolbar();
			// 		}); 
			// 	}
			// 	else {
			// 		$(function(){
			//    			$( "[data-role='header1'], [data-role='footer1']" ).toolbar();
			// 		}); 
			// 	}
			// });
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><a href="http://m.zappafootclinic.com/" rel="external"><img src="img/ZPA_msthd.gif" alt="LOGO"></a></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><a href="http://zappafootclinic.com/" rel="external">  Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/Screenshot_4.png" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/Think-Feet-Family-Foot-Clinic.png" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider_03.png" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/Screenshot_8.png" alt="">
                            <!-- <p class="caption">The 4 caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/Screenshot_1.png" alt="">
                            <!-- <p class="caption">The 5 caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn veliko-dugme ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn veliko-dugme ui-icon-location ui-btn-icon-left buttons-radius" );
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>" );
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn veliko-dugme ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0)
									{
									  
									     console.log("Blakberu je prosao ");
									   <!--k,cvj bsdj kb vjklbvj,.x-->
									}
								
									// if (ua.indexOf("BlackBerry") >= 0) {

									// console.log("Blakberu je prosao ")
									// var prostordugme=document.getElementById('findUS');
									// var dugme= document.createElement('a');
									// dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									// dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									// dugme.innerHTML="Find US";
									// prostordugme.appendChild(dugme);
									// }		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn veliko-dugme ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>



					</div>	   
				</fieldset>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Services</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page3" data-transition="<?php echo $transitionefect ?>">Insurance</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page4" data-transition="<?php echo $transitionefect ?>">Physicians</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page5" data-transition="<?php echo $transitionefect ?>">Office Hours</a></div>
                </div>
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page6" data-transition="<?php echo $transitionefect ?>">About US</a></div>
                </div>
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
                </div>
		  </div>

		 
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-page2">
                        <ul id="menu2" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Physicians</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Office Hours</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
					<img src="img/slider-images/Screenshot_5.png" alt="SLider" class="images-mobile">
                        <section id="services-text">
                            <h1>Full-spectrum service. Single-minded focus.</h1>
                                <p>The Foot Clinic is built on the best in compassionate care. Every effort is made to treat you so you feel comfortable during your visit. Our office has x-ray,
                                    physical therapy, and laboratory collection services on site. The general practice environment provides treatment for all foot and ankle problems ranging from
                                    routine monthly care, to fracture reduction and surgical remedy for common foot and ankle disorders. Diabetic foot care education and wound care treatment is a
                                    high priority in our practice. A growing part of podiatric medicine—and a personal area of Dr. Zappa's personal interest and expertise—are custom orthotics,
                                    sports medicine and work related injuries.
                                </p>
                                <p>At the Foot Clinic you will find available services covering preventative care, the treatment of chronic conditions, as well as state-of-the-art podiatric surgical
                                    procedures. A small sample of the kinds of work we do :
                                </p>
                            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                                <div class="ui-block-a buttons-semir ">
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://www.emedicinehealth.com/achilles_tendon_rupture/article_em.htm" data-transition="<?php echo $transitionefect ?>">
                                        Achilles Tendon
                                    </a>
                                </div>
                            </div>
                            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                                <div class="ui-block-a buttons-semir ">
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://www.orthogate.org/patient-education/ankle/ankle-sprain-and-instability" data-transition="<?php echo $transitionefect ?>">
                                        Ankle Instability
                                    </a>
                                </div>
                            </div>
                            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                                <div class="ui-block-a buttons-semir ">
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://www.podiatrynetwork.com/r_ankle_sprains.cfm" data-transition="<?php echo $transitionefect ?>">
                                        Ankle Sprains
                                    </a>
                                </div>
                            </div>
                            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                                <div class="ui-block-a buttons-semir ">
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://www.webmd.com/osteoarthritis/guide/arthritis-footcare-shoes" data-transition="<?php echo $transitionefect ?>">
                                        Arthritic Foot & Ankle Care
                                    </a>
                                </div>
                            </div>
                            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                                <div class="ui-block-a buttons-semir ">
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://www.webmd.com/skin-problems-and-treatments/tc/athletes-foot-medications" data-transition="<?php echo $transitionefect ?>">
                                        Athletes Foot
                                    </a>
                                </div>
                            </div>
                            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                                <div class="ui-block-a buttons-semir ">
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://epodiatry.com/bunion.htm" data-transition="<?php echo $transitionefect ?>">
                                        Bunions
                                    </a>
                                </div>
                            </div>

                        </section>

				</div>

			</div>	
				
				
		</div>
		
	<!-- page 2 ///////////////////////////-->
		<!-- contactform ///////////////////////-->


		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-contact">
                        <ul id="navigation-menu" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Physicians</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Office Hours</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                        </ul>
					</section>	
					<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
						Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
						E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
						Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
						Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
						Message:<br>
						<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
                        <button type="submit" value="Send" name="submit" class="btn ui-btn ui-input-btn ui-corner-all ui-shadow">Submit</button>
					</form>
                    <img src="img/slider-images/Screenshot_3.png" alt="SLider" class="images-mobile">
				</div>
			</div>
		
		</div>
<!--contactform///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 3///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page3" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-page3-sub">
                            <ul id="navigation-menu-page3" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Physicians</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Office Hours</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/Screenshot_7.png" alt="SLider" class="images-mobile">
                    <section id="insurance-text">
                        <h1>In-network. Out-of-network. Always within reach.</h1>
                        <p>Our practice always welcomes new patients. The preferred method is by appointment,
                            but walk in and emergency visits are accepted, based on availability.</p>
                        <p>Dr. Zappa is a participating provider with Medicare, Medicaid and most managed care, HMO, PPO and traditional insurance plans,
                            and he accepts out of netwok patients on an individual basis. He is willing to negotiate fees for out-of-network patients.</p>
                        </section>

                </div>

            </div>
            <!--page 3///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        </div>
        <!--page 4///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page4" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-page4-sub">
                        <ul id="navigation-menu-page4" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Office Hours</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/Screenshot_6.png" alt="SLider" class="images-mobile">
                    <section id="physicians-text">
                        <h1>Giving compassionate care requires the best in care givers.</h1>
                        <p>The Foot Clinic is home to several of the area's best practicioners, all of whom are focused on providing you with the highest possible level of care:</p>

                        <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                            <div class="ui-block-a buttons-semir ">
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page10" data-transition="<?php echo $transitionefect ?>">
                                    Frank William Zappa, DPM
                                </a>
                            </div>
                        </div>
                        <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                            <div class="ui-block-a buttons-semir ">
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page7" data-transition="<?php echo $transitionefect ?>">
                                    Nikola Ivancevic, DPM
                                </a>
                            </div>
                        </div>
                        <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                            <div class="ui-block-a buttons-semir ">
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page8" data-transition="<?php echo $transitionefect ?>">
                                    Jagruti Patel, DPM
                                </a>
                            </div>
                        </div>
                        <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                            <div class="ui-block-a buttons-semir ">
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page9" data-transition="<?php echo $transitionefect ?>">
                                    Nancy Zomaya, DPM
                                </a>
                            </div>
                        </div>

                    </section>

                </div>

            </div>


        </div>
        <!--page 4///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!--page 5///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page5" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-page5-sub">
                        <ul id="navigation-menu-page5" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Physicians</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                        <img src="img/slider-images/Screenshot_2.png" alt="SLider" class="images-mobile">
                    <section id="officehours-text">
                        <h1>The Foot Clinic Office Hours:</h1>
                            <p>Mon:	1:00-6:00</p>
                            <p>Tues:	Closed</p>
                            <p>Wed:	9:30-5:00</p>
                            <p>Thur:	Closed</p>
                            <p>Fri:	2:00-5:00</p>
                            <p>Sat:	9:00-1:00</p>
                            <p>Sun:	Closed</p>
                        <h1>Oak Lawn Office Hours:</h1>
                            <p>Mon:	9:00-5:00</p>
                            <p>Tues:	9:00-2:00</p>
                            <p>Wed:	Closed</p>
                            <p>Thur:	2:00-6:00</p>
                            <p>Fri:	9:00-1:00</p>
                            <p>Sat:	8:00-12:00</p>
                            <p>Sun:	Closed</p>
                    </section>

                </div>

            </div>


        </div>
        <!--page 5///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 6///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page6" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-page6-sub">
                        <ul id="navigation-menu-page6" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Physicians</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Office Hours</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>

                    <section id="about-text">
                        <img src="img/slider-images/o.jpg" alt="SLider" class="images-mobile">
                            <h3>The Foot Clinic has spent thirty years as part of the Taylor Street community. From chronic foot and ankle symptoms to complex surgical procedures,
                                Dr. Zappa and his associates provide individual treatment of common foot disorders, diabetics,
                                as well as sport and work-related injuries. The Foot Clinic is dedicated to providing you with  most comprehensive care available.</h3>
                            <h1>We have two Chicagoland locations.</h1>
                        <img src="img/slider-images/foot_map.gif" alt="SLider" class="images-mobile">
                                 <h3>The Foot Clinic</h3>
                                    <p>1226 W. Taylor St., Chicago, IL 60607</p>
                                    <p>312-243-3769 voice   |   312-243-3840 fax</p>
                        <img src="img/slider-images/oak_map.gif" alt="SLider" class="images-mobile">
                                <h3>Oak Lawn Lower Extremity Associates, P.C.</h3>
                                    <p>4701 West 95th Street, Ste #1, Oak Lawn, IL 60453</p>
                                    <p>708-425-4950 voice   |   708-425-0109 fax</p>
                    </section>

                </div>

            </div>


        </div>
        <!--page 6//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 7///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page7" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-page7-sub">
                        <ul id="navigation-menu-page7" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Physicians</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Office Hours</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>

                    <section id="about-text">
                        <h1>Nikola Ivancevic, DPM</h1>
                        <p>Dr. Ivancevic received his B.A. in biological sciences and Doctor of Podiatric Medicine degree at Dr. Scholl College of Podiatric Medicine, Chicago, Illinois,
                            in 1996. He completed a one-year primary podiatric medicine residency at Illinois Masonic Hospital, Chicago Illinois, 1996-1997. He also completed a one-year podiatric
                            surgical residency at former Columbus Hospital, Chicago Illinois, 1997-1998. Dr. Ivancevic is ABLES podiatric medicine board certified and surgical board qualified. Dr.
                            Ivancevic has been in private practice at 1130 and 1226 west Taylor Street, Chicago Illinois, and 135 South Palmer Street,
                            suite 105, Elmhurst Illinois, currently for nine years. He currently practices in the Physician Center and has privileges at St. Anthony Hospital, Chicago Illinois.</p>
                        <p>Dr. Ivancevic treats all diseases and surgery of the foot to all ages. He services many homes and senior centers throughout the state of Illinois and Wisconsin, along with
                            a significant amount of housecalls to the elderly in Chicago, western, southern and northern suburbs of Illinois.</p>

                    </section>

                </div>

            </div>


        </div>
        <!--page 7//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page 8///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page8" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-page8-sub">
                        <ul id="navigation-menu-page8" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Physicians</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Office Hours</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/photo_Jagruti-Patel.jpg" alt="SLider" class="images-mobile">
                    <section id="about-text">
                        <h1>Jagruti Patel, DPM</h1>
                        <p>Dr. Patel is a native of Chicago and received her B.S. from the University of Illinois.
                            She completed her Doctor of Podiatric Medicine degree (DPM) from New York College of Podiatric Medicine in New York City.</p>
                        <p>Dr. Patel completed a 3 year podiatric medicine and surgical residency at St. Joseph Hospital in Chicago, Il with a focus on foot and
                            ankle reconstructive surgery and diabetic wound care. Dr. Patel also served as Chief Resident throughout her residency.</p>
                        <p>Dr. Patel’s professional interest is in General Podiatry, including bunions and hammertoes, with special interest in forefoot surgery.
                            She also treats pediatric and adult foot conditions requiring custom made orthotics.</p>
                        <p>Dr. Patel is a member of the American Podiatric Medical Association and the Illinois Podiatric Medical Association.</p>
                        <p>Dr. Patel enjoys traveling, exploring new restaurants and is a big Chicago sports fan.</p>
                    </section>

                </div>

            </div>


        </div>
        <!--page 8//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page 9///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page9" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-page9-sub">
                        <ul id="navigation-menu-page9" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Physicians</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Office Hours</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/photo_Nancy-Zomaya.jpg" alt="SLider" class="images-mobile">
                    <section id="about-text">
                        <h1>Nancy Zomaya, DPM</h1>
                        <p>Dr. Zomaya graduated from the Scholl College of Podiatric Medicine at Rosalind Franklin University of Medicine & Science located in North Chicago, IL.
                            She then completed a three year podiatric medicine and surgery residency at Saint Joseph Hospital, IL, where she gained a comprehensive background in foot
                            and ankle surgery. During her residency training, she served as Chief Resident of the podiatry program and maintained an active role in teaching podiatric
                            students and junior residents while also participating in research. Currently in private practice, Dr. Zomaya is also an active member of the teaching faculty
                            for the podiatry residents at Presence Saint Joseph Hospital. Dr. Zomaya treats all diseases of the foot and ankle in both children and adults and is accepting new patients.
                        </p>
                    </section>

                </div>

            </div>


        </div>
        <!--page 9//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 10//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div data-role="page" id="page10" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-page10-sub">
                        <ul id="navigation-menu-page10" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Physicians</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Office Hours</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/photo_Frank-W-Zappa.jpg" alt="SLider" class="images-mobile">
                    <section id="about-text">
                        <h1>Frank William Zappa, DPM</h1>
                        <p>Dr. Zappa graduated from the Scholl College of Podiatric Medicine in June 1966,and has practiced podiatric medicine and surgery for over 40 years.
                            He was board certified in foot surgery in 1976 and began to plan a new office on the near west side.
                            The Taylor Street office was opened in 1977 at 1345 West Taylor Street, followed by a move to 1158 West Taylor Street, then finally ending in the
                            present location at 1226 West Taylor Street.</p>
                        <p>Dr. Zappa is the section chief of podiatry at St. Anthony hospital where he also serves on the credentials committee.
                            He is also on staff at multilple free standing surgery centers in the city and suburbs.</p>
                        <p>Not only has he has been in private practice in both the city and suburbs, Dr. Zappa entered the academic arena, teaching residents in 1984.
                            He is the program director for the Presence Saint Joseph Hospital/Chicago, IL PMSR+RRA Podiatric Medicine and Surgery Residency with Reconstructive Rearfoot/Ankle Surgery
                            at 2900 North Lake Shore Drive. This is one of the larger programs of its type in the United States. There are presently fifteen surgical residents completing various years
                            of their training that total three years of post-graduate study. The residents particpate in surgical procedures at sixteen locations in Illinois and Wisconsin.
                            Students and residents participate, under supervision, in the office and at the hospital with Dr. Zappa. You can always find two or three eager learners
                            following him around.</p>
                    </section>

                </div>

            </div>


        </div>

        <!--page 10//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
