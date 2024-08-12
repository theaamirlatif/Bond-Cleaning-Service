<?php
/*
Template Name: Custom Home
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Bond Cleaning Services</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css">

</head>

<body>
    <!-- header section start -->
    <header>
        <div class="header-container">
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Artboard-1.png" alt="">
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="https://bondcleaningservice.com/">Home</a></li>
                    <li class="has-submenu">
                        <a href="#services">Services <i class="fas fa-chevron-down arrow"></i></a>
                        <ul class="submenu">
                            <li><a href="#">Bond Cleaning Goldcoast</a></li>
                            <li><a href="#">Bond Cleaning Brisbane</a></li>
                        </ul>
                    </li>
                    <li><a href="https://bondcleaningservice.com/about-us/">About Us</a></li>
                    <li><a href="https://bondcleaningservice.com/contact-us/">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header-button">
                <div class="bcs-get-quote">
                    <div class="bcs-hq-icon">
                        <a class="bcs-hq-icon-child" href="tel:0721122729"><i class="fas fa-phone-volume"></i></a>
                    </div>
                    <div class="bcs-hq-content">
                        <p><a href="tel:0721122729">Call Now</a></p>
                        <p><a href="tel:0721122729">07 2112 2729</a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->
    <!-- hero section start -->
    <div class="bcs-hero">
        <div class="bcs-hero-overlay"></div>
        <div class="bcs-hero-wrapper">
            <div class="bcs-hero-content">
                <h2>“Best Bond Cleaning Services”</h2>
                <div class="bcs-hero-para">
                    <p>Bond Cleaning | Carpet Cleaning</p>
                    <p>Spring Cleaning | Pest Cleaning</p>
                </div>
                <ul>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Right-arrow.png" alt=""><span>Skilled Staff</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Right-arrow.png" alt=""><span>5 Days Gurantee</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Right-arrow.png" alt=""><span>Same Day Availability</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Right-arrow.png" alt=""><span>Best Customer Support</span></li>
                </ul>
                <b>Book now & get 30% discount</b>
                <b>We beat any written quote by 10%</b>
                <div class="bcs-hero-btns">
                    <div class="bcs-get-quote-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png" alt=""><span>Get Fee
                                Quote</span></a>
                    </div>
                    <div class="bcs-call-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt=""><span>07 2112
                                2729</span></a>
                    </div>
                </div>
            </div>
            <div class="bcs-hero-form">
                <h4>GET FREE QUOTE WITH 30% DISCOUNT</h4>
                <div class="bcs-hero-txt-float">
                    <span class="mar1">Limited time offer * Get a free quote * Limited time offer * Get a free
                        quote</span>
                    <span class="mar2">Limited time offer * Get a free quote * Limited time offer * Get a free
                        quote</span>
                </div>
                <form action="" class="bcs-hero-inp-form">
                    <div class="bcs-hero-child-form">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-1-1.png" alt="">
                        <input type="text" placeholder="Fullname" required>
                    </div>
                    <div class="bcs-hero-child-form">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telephone-1.png" alt="">
                        <input type="text" placeholder="Phone Number" required>
                    </div>
                    <div class="bcs-hero-child-form">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail-1.png" alt="">
                        <input type="text" placeholder="Full Address" required>
                    </div>
                    <h4>Select your Services:</h4>
                    <div class="bcs-form-services">
                        <div class="bcs-form-service-child">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vector.png" alt="">
                            <span>Bond Cleaning</span>
                        </div>
                        <div class="bcs-form-service-child">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07-Extermination.png" alt="">
                            <span>Pest Cleaning</span>
                        </div>
                        <div class="bcs-form-service-child">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Mat_Cleaning.png" alt="">
                            <span>Carpet Cleaning</span>
                        </div>
                        <div class="bcs-form-service-child">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Page-1.png" alt="">
                            <span>Spring Cleaning</span>
                        </div>
                    </div>
                    <div class="bcs-hero-child-form">
                        <a href="#">Quick Online Quote</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- hero section end -->
    <!-- services details section start -->
    <div class="bcs-services-details">
        <div class="bcs-services-details-child">
            <h2>Best Bond Cleaning Services</h2>
            <p>Book now & get 30% discount<br>We beat any written quote by 10%</p>
            <div class="bcs-service-subchild">
                <div class="bcs-service-subchild-child">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Staff.png" alt="">
                    <span>Skilled Staff</span>
                </div>
                <div class="bcs-service-subchild-child">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Check Mark.png" alt="">
                    <span>same day availability</span>
                </div>
                <div class="bcs-service-subchild-child">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Guarantee.png" alt="">
                    <span>5 Days Gurantee</span>
                </div>
                <div class="bcs-service-subchild-child">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Online Support.png" alt="">
                    <span>Best customer support</span>
                </div>
            </div>
            <div class="bcs-sd-btns">
                <div class="bcs-sd-get-quote-btn">
                    <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png" alt=""><span>Get Fee
                            Quote</span></a>
                </div>
                <div class="bcs-sd-call-btn">
                    <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt=""><span>07
                            2112 2729</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- services details section end -->
    <!-- services slider section start -->
    <div class="bcs-services-slider">
        <div class="bcs-services-slider-layer"></div>
        <div class="bcs-services-slider-child">
            <h2>HIGH QUALITY BOND CLEANING SERVICE AT AFFORDABLE PRICING</h2>
            <div class="bcs-service-slider-wrapper">
                <div class="bcs-service-slider">
                    <div class="bcs-service-col">
                        <div class="bcs-service-col-wrapper">
                            <div class="bcs-img-wrapper">
                                <img src="https://bondcleaningservice.com/wp-content/uploads/2024/04/image-12.webp"
                                    alt="Pest Control">
                            </div>
                            <h4>Pest Control</h4>
                        </div>
                    </div>
                    <div class="bcs-service-col">
                        <div class="bcs-service-col-wrapper">
                            <div class="bcs-img-wrapper">
                                <img src="https://bondcleaningservice.com/wp-content/uploads/2024/04/image-11-1.webp"
                                    alt="Carpet Cleaning">
                            </div>
                            <h4>Carpet Cleaning</h4>
                        </div>
                    </div>
                    <div class="bcs-service-col">
                        <div class="bcs-service-col-wrapper">
                            <div class="bcs-img-wrapper">
                                <img src="https://bondcleaningservice.com/wp-content/uploads/2024/04/image-15.webp"
                                    alt="Spring Cleaning">
                            </div>
                            <h4>Spring Cleaning</h4>
                        </div>
                    </div>
                    <div class="bcs-service-col">
                        <div class="bcs-service-col-wrapper">
                            <div class="bcs-img-wrapper">
                                <img src="https://bondcleaningservice.com/wp-content/uploads/2024/04/image-13-1.webp"
                                    alt="Bond Cleaning">
                            </div>
                            <h4>Bond Cleaning</h4>
                        </div>
                    </div>
                </div>

                <div class="bcs-slider-nav">
                    <button class="bcs-slick-btn bcs-prev-btn"><svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 13L1 7L7 1" stroke="#0037FA" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg></button>
                    <button class="bcs-slick-btn bcs-next-btn"><svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="#0037FA" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg></button>
                </div>
            </div>
        </div>
    </div>
    <!-- services slider section end -->
    <!-- cta section start -->
    <div class="bcs-cta">
        <div class="bcs-cta-child">
            <div class="bcs-cta-child-left">
                <h2>Get Your Personalized Cleaning Quote Now!</h2>
                <p>Let Us Tailor Your Cleaning Solution Today!</p>
            </div>
            <div class="bcs-cta-child-right">
                <div class="bcs-cta-btns">
                    <div class="bcs-cta-get-quote-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png" alt=""><span>Get Fee
                                Quote</span></a>
                    </div>
                    <div class="bcs-cta-call-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt=""><span>07 2112
                                2729</span></a>
                    </div>
                </div>
                <form action="#" method="post" class="w-100">
                    <div class="mb-3">
                        <input type="text" id="fullname" name="fullname" class="form-control w-100 p-3"
                            placeholder="Your Name" required>
                    </div>

                    <div class="mb-3 d-flex gap-3">
                        <input type="tel" id="phone" name="phone" class="form-control w-50 p-3"
                            placeholder="Phone Number" required>
                        <input type="datetime" id="date" name="date" class="form-control w-50 p-3" placeholder="Date"
                            required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100 p-3">Book Now <i
                                class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- cta section end -->
    <!-- bcs spark section start -->
    <div class="bcs-spark">
        <div class="bcs-spark-child">
            <div class="bcs-spark-child-left">
                <h2>SPARKLING BOND CLEANING SERVICES</h2>
                <p>Get sparkling bond cleaning delivered to you at an affordable price. Please fill up the form and get
                    a free quote today and get to know about our latest offers!!! With the pocket-friendly price and
                    latest cleaning gadgets, we will leave a sparkling cleaning property behind that you will love! Book
                    with us now!!!</p>
                <div class="bcs-spark-child-right mob-spark">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 19.png" alt="">
                </div>
                <div class="bcs-spark-btns">
                    <div class="bcs-spark-get-quote-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png" alt=""><span>Get Fee
                                Quote</span></a>
                    </div>
                    <div class="bcs-spark-call-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt=""><span>07 2112
                                2729</span></a>
                    </div>
                </div>
            </div>
            <div class="bcs-spark-child-right desk-spark">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 19.png" alt="">
            </div>
        </div>
    </div>
    <!-- bcs spark section end -->
    <!-- bcs trusted client section start -->
    <div class="bcs-trusted-client">
        <div class="bcs-trusted-client-child">
            <div class="bcs-trusted-client-child-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 2.png" alt="">
            </div>
            <div class="bcs-trusted-client-child-right">
                <h2>Meet Your Trusted Cleaning Experts:</h2>
                <p>At Bond Cleaning Services, we're your partners in pristine spaces. With passion and commitment, we
                    deliver top-tier service tailored to your needs, ensuring every corner shines and every bond is
                    upheld.</p>
                <div class="bcs-trust-subchilds">
                    <div class="bcs-trust-singlechild">
                        <div class="bcs-trust-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendars.png" alt="" class="trust-img">
                        </div>
                        <div class="bcs-singlechild-content">
                            <h4>7 Years Of Business</h4>
                            <p>7 Years Strong: Pioneering Excellence in Cleaning Services</p>
                        </div>
                    </div>
                    <div class="bcs-trust-singlechild">
                        <div class="bcs-trust-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bolt.png" alt="" class="trust-img">
                        </div>
                        <div class="bcs-singlechild-content">
                            <h4>Exclusive Team Work</h4>
                            <p>Teamwork: Our Secret to Exceptional Results</p>
                        </div>
                    </div>
                    <div class="bcs-trust-singlechild">
                        <div class="bcs-trust-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Meeting.png" alt="" class="trust-img">
                        </div>
                        <div class="bcs-singlechild-content">
                            <h4>Pristine Partners</h4>
                            <p>We make every corner shine and uphold every bond.</p>
                        </div>
                    </div>
                    <div class="bcs-trust-singlechild">
                        <div class="bcs-trust-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Housekeeping.png" alt="" class="trust-img">
                        </div>
                        <div class="bcs-singlechild-content">
                            <h4>Custom Cleaning</h4>
                            <p>Passionate about meeting your specific needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bcs trusted client section end -->
    <!-- cta section start -->
    <div class="bcs-cta">
        <div class="bcs-cta-child">
            <div class="bcs-cta-child-left">
                <h2>Get Your Personalized Cleaning Quote Now!</h2>
                <p>Let Us Tailor Your Cleaning Solution Today!</p>
            </div>
            <div class="bcs-cta-child-right">
                <div class="bcs-cta-btns">
                    <div class="bcs-cta-get-quote-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png" alt=""><span>Get Fee
                                Quote</span></a>
                    </div>
                    <div class="bcs-cta-call-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt=""><span>07 2112
                                2729</span></a>
                    </div>
                </div>
                <form action="#" method="post" class="w-100">
                    <div class="mb-3">
                        <input type="text" id="fullname" name="fullname" class="form-control w-100 p-3"
                            placeholder="Your Name" required>
                    </div>

                    <div class="mb-3 d-flex gap-3">
                        <input type="tel" id="phone" name="phone" class="form-control w-50 p-3"
                            placeholder="Phone Number" required>
                        <input type="datetime" id="date" name="date" class="form-control w-50 p-3" placeholder="Date"
                            required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100 p-3">Book Now <i
                                class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- cta section end -->
    <!-- bcs trusted partner section start -->
    <div class="bcs-trusted-partner">
        <div class="bcs-trusted-partner-child">
            <div class="bcs-trusted-partner-child-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 9.png" alt="">
            </div>
            <div class="bcs-trusted-partner-child-right">
                <h2>Why Choose Us: Your Trusted Cleaning Partner</h2>
                <p>Discover why we're your top choice for exceptional cleaning services. With our unmatched expertise,
                    meticulous attention to detail, and unwavering commitment to customer satisfaction, we guarantee
                    that your space will sparkle and shine every single time. Our dedicated team goes above and beyond
                    to provide a spotless environment, ensuring that every corner is thoroughly cleaned to perfection.
                    Trust us to transform your home or office into a pristine and inviting space, because we believe in
                    delivering nothing less than excellence.</p>
                <div class="bcs-trust-partner-subchilds">
                    <div class="bcs-trust-partner-singlechild">
                        <div class="bcs-trust-partner-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Expensive Price.png" alt="" class="trust-partner-img">
                        </div>
                        <div class="bcs-partner-singlechild-content">
                            <h4>Cost Effective Bond Cleaning Services </h4>
                            <p>Save long-term with our affordable bond cleaning for full recovery.</p>
                        </div>
                    </div>
                    <div class="bcs-trust-partner-singlechild">
                        <div class="bcs-trust-partner-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Time.png" alt="" class="trust-partner-img">
                        </div>
                        <div class="bcs-partner-singlechild-content">
                            <h4>Time-Saving And Efficient Services</h4>
                            <p>Pressed for time? Choose us for punctual, efficient bond cleaning.</p>
                        </div>
                    </div>
                </div>
                <div class="bcs-trust-partner-subchilds">
                    <div class="bcs-trust-partner-singlechild">
                        <div class="bcs-trust-partner-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Happy.png" alt="" class="trust-partner-img">
                        </div>
                        <div class="bcs-partner-singlechild-content">
                            <h4>Expertise And Experience </h4>
                            <p>Trust our experts for top-tier bond cleaning that impresses</p>
                        </div>
                    </div>
                    <div class="bcs-trust-partner-singlechild">
                        <div class="bcs-trust-partner-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Eco-friendly Cleaning.png" alt="" class="trust-partner-img">
                        </div>
                        <div class="bcs-partner-singlechild-content">
                            <h4>Complete Bond Cleaning Services</h4>
                            <p>Book our cleaning services today for a spotless rental property</p>
                        </div>
                    </div>
                </div>
                <div class="bcs-trusted-partner-btns">
                    <div class="bcs-trusted-partner-get-quote-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png" alt=""><span>Get Fee
                                Quote</span></a>
                    </div>
                    <div class="bcs-trusted-partner-call-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt=""><span>07 2112
                                2729</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bcs trusted client section end -->
    <!-- bcs reviews section start -->
    <div class="bcs-reviews-slider">
        <div class="bcs-reviews-slider-layer"></div>
        <div class="bcs-reviews-slider-child">
            <h2>What our clients are saying</h2>
            <div class="bcs-review-slider-wrapper">
                <div class="bcs-review-slider">
                    <div class="bcs-review-col">
                        <div class="bcs-review-col-wrapper">
                            <div class="bcs-review-img-wrapper">
                                <div class="review-header">
                                    <div class="review-header-img">
                                        <img src="https://bondcleaningservice.com/wp-content/uploads/2024/04/image-12.webp"
                                            alt="Pest Control">
                                    </div>
                                    <div class="review-header-content">
                                        <h4>Mike Thomas</h4>
                                        <p>Business Man</p>
                                        <div class="bcs-review-rating mob-rating">
                                            <span class="bcs-rating"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>"As a business owner, I was searching for a waste disposal solution that aligned with my
                                company's sustainability goals. This service not only helped us streamline our waste
                                management processes but also provided valuable insights on how to minimize waste
                                generation. Their dedication to environmental responsibility is truly commendable."</p>
                            <div class="bcs-review-rating desk-rating">
                                <span class="bcs-rating"></span>
                            </div>
                        </div>
                    </div>
                    <div class="bcs-review-col">
                        <div class="bcs-review-col-wrapper">
                            <div class="bcs-review-img-wrapper">
                                <div class="review-header">
                                    <div class="review-header-img">
                                        <img src="https://bondcleaningservice.com/wp-content/uploads/2024/04/image-12.webp"
                                            alt="Pest Control">
                                    </div>
                                    <div class="review-header-content">
                                        <h4>Mike Thomas</h4>
                                        <p>Business Man</p>
                                        <div class="bcs-review-rating mob-rating">
                                            <span class="bcs-rating"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>"As a business owner, I was searching for a waste disposal solution that aligned with my
                                company's sustainability goals. This service not only helped us streamline our waste
                                management processes but also provided valuable insights on how to minimize waste
                                generation. Their dedication to environmental responsibility is truly commendable."</p>
                            <div class="bcs-review-rating desk-rating">
                                <span class="bcs-rating"></span>
                            </div>
                        </div>
                    </div>
                    <div class="bcs-review-col">
                        <div class="bcs-review-col-wrapper">
                            <div class="bcs-review-img-wrapper">
                                <div class="review-header">
                                    <div class="review-header-img">
                                        <img src="https://bondcleaningservice.com/wp-content/uploads/2024/04/image-12.webp"
                                            alt="Pest Control">
                                    </div>
                                    <div class="review-header-content">
                                        <h4>Mike Thomas</h4>
                                        <p>Business Man</p>
                                        <div class="bcs-review-rating mob-rating">
                                            <span class="bcs-rating"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>"As a business owner, I was searching for a waste disposal solution that aligned with my
                                company's sustainability goals. This service not only helped us streamline our waste
                                management processes but also provided valuable insights on how to minimize waste
                                generation. Their dedication to environmental responsibility is truly commendable."</p>
                            <div class="bcs-review-rating desk-rating">
                                <span class="bcs-rating"></span>
                            </div>
                        </div>
                    </div>
                    <div class="bcs-review-col">
                        <div class="bcs-review-col-wrapper">
                            <div class="bcs-review-img-wrapper">
                                <div class="review-header">
                                    <div class="review-header-img">
                                        <img src="https://bondcleaningservice.com/wp-content/uploads/2024/04/image-12.webp"
                                            alt="Pest Control">
                                    </div>
                                    <div class="review-header-content">
                                        <h4>Mike Thomas</h4>
                                        <p>Business Man</p>
                                        <div class="bcs-review-rating mob-rating">
                                            <span class="bcs-rating"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>"As a business owner, I was searching for a waste disposal solution that aligned with my
                                company's sustainability goals. This service not only helped us streamline our waste
                                management processes but also provided valuable insights on how to minimize waste
                                generation. Their dedication to environmental responsibility is truly commendable."</p>
                            <div class="bcs-review-rating desk-rating">
                                <span class="bcs-rating"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bcs reviews section end -->
    <!-- bcs prove section start -->
    <div class="bcs-prove-process">
        <div class="bcs-prove-process-child">
            <div class="brisbane-head">
                <h1>Our Proven Process Explained</h1>
                <p>For premier bond cleaning services in Brisbane, trust our expert team to deliver exceptional
                    results.
                    With years of experience and a commitment to excellence, we ensure your property meets the
                    highest
                    standards, leaving it spotless and ready for inspection. Our attention to detail,
                    customer-centric
                    approach, and reliable service make us the top choice for bond cleaning in Brisbane.
                    Experience the
                    difference with us today!</p>
            </div>
            <div class="brisbane-tab">
                <div class="row bcs-brisbane">
                    <div class="col-12 col-md-3 col-xl-3 bcs-brisbane-tab">

                        <div class="diffi-tab">
                            <div class="bg-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-bg1.png" alt="img">
                            </div>
                            <div class="tab">
                                <div class="icon-main-tab">
                                    <div class="icon-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Booking.png" alt="img">
                                    </div>
                                </div>
                                <h4>Booking</h4>
                                <p>Visit our site and choose your service.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-3 col-xl-3 bcs-brisbane-tab">

                        <div class="diffi-tab tabtwo">
                            <div class="bg-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-bg2.png" alt="img">
                            </div>
                            <div class="tab">
                                <div class="icon-main-tab-two">
                                    <div class="icon-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Choice.png" alt="img">
                                    </div>
                                </div>
                                <h4>Selection</h4>
                                <p>Pick your preferred date and time.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-3 col-xl-3 bcs-brisbane-tab">

                        <div class="diffi-tab">
                            <div class="bg-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-bg4.png" alt="img">
                            </div>
                            <div class="tab">
                                <div class="icon-main-tab">
                                    <div class="icon-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Schedule.png" alt="img">
                                    </div>
                                </div>
                                <h4>Schedule</h4>
                                <p>Receive an email with your booking details.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-3 col-xl-3 bcs-brisbane-tab">

                        <div class="diffi-tab tabtwo">
                            <div class="bg-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-bg3.png" alt="img">
                            </div>
                            <div class="tab">
                                <div class="icon-main-tab-two">
                                    <div class="icon-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Confirmation.png" alt="img">
                                    </div>
                                </div>
                                <h4>Confirmation</h4>
                                <p> Our team arrives on time, fully equipped.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bcs prove section end -->
    <!-- cta section start -->
    <div class="bcs-cta">
        <div class="bcs-cta-child">
            <div class="bcs-cta-child-left">
                <h2>Get Your Personalized Cleaning Quote Now!</h2>
                <p>Let Us Tailor Your Cleaning Solution Today!</p>
            </div>
            <div class="bcs-cta-child-right">
                <div class="bcs-cta-btns">
                    <div class="bcs-cta-get-quote-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png" alt=""><span>Get Fee
                                Quote</span></a>
                    </div>
                    <div class="bcs-cta-call-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt=""><span>07 2112
                                2729</span></a>
                    </div>
                </div>
                <form action="#" method="post" class="w-100">
                    <div class="mb-3">
                        <input type="text" id="fullname" name="fullname" class="form-control w-100 p-3"
                            placeholder="Your Name" required>
                    </div>

                    <div class="mb-3 d-flex gap-3">
                        <input type="tel" id="phone" name="phone" class="form-control w-50 p-3"
                            placeholder="Phone Number" required>
                        <input type="datetime" id="date" name="date" class="form-control w-50 p-3" placeholder="Date"
                            required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100 p-3">Book Now <i
                                class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- cta section end -->
    <!-- section service area start  -->
    <div class="bcs-service-area">
        <div class="bcs-service-area-child">
            <div class="bcs-service-child-left desk-service-area">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1 6.png" alt="">
            </div>
            <div class="bcs-service-child-right">
                <h2>Service Areas: Where We Bring Cleanliness to You</h2>
                <div class="bcs-service-child-left mob-service-area">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1 6.png" alt="">
                </div>
                <p>Discover our expansive service areas, where our dedicated team brings top-tier cleanliness right to
                    your doorstep. From bustling urban centers to serene suburban neighborhoods, we're committed to
                    ensuring every corner shines, no matter where you are. Explore our coverage and experience the
                    convenience of professional cleaning tailored to your location.</p>
                <ul class="bcs-service-desk-icons">
                    <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Brisbane </a></li>
                    <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Gold coast </a></li>
                    <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Ipswich </a></li>
                    <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Redland bay </a></li>
                </ul>
                <ul class="bcs-service-mob-icons">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pin.png" alt="">Brisbane</a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pin.png" alt="">Gold coast</a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pin.png" alt="">Ipswich</a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pin.png" alt="">Redland bay</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- section service area end  -->
    <!-- bcs additional section start -->
    <div class="bcs-additional-section desk-additional">
        <div class="bcs-additional-section-child">
            <h2>Additional Services</h2>
            <div class="additional-childs">
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clean 1.png" alt="">
                    </div>
                    <h3>Wall washing</h3>
                </div>
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clean-window 1.png" alt="">
                    </div>
                    <h3>External windows cleaning</h3>
                </div>
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/window 1.png" alt="">
                    </div>
                    <h3>Blinds/curtains cleaning</h3>
                </div>
            </div>
            <div class="additional-childs">
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carpet 1.png" alt="">
                    </div>
                    <h3>Carpet cleaning</h3>
                </div>
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cleaning 1.png" alt="">
                    </div>
                    <h3>Upholstery/Furniture cleaning</h3>
                </div>
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person 1.png" alt="">
                    </div>
                    <h3>Patio/Balcony cleaning</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- bcs additional section end -->
    <!-- bcs cost effective section start -->
    <div class="bcs-cost-effective-section">
        <div class="bcs-cost-effective-section-child">
            <div class="bcs-cs-child-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 1597881697.png" alt="">
            </div>
            <div class="bcs-cs-child-right">
                <h2>Cost Effective Bond Cleaning</h2>
                <p>Our trained professionals always deliver the best to you! You can trust our team of experienced
                    cleaners as they exactly what it takes to achieve sparkling clean results. We provide tailor-made
                    cleaning solutions at affordable prices that will not break the bank. Get the highest standard of
                    cleaning solutions delivered to you without worrying about a big bill!</p>
                <div class="bcs-hero-btns">
                    <div class="bcs-get-quote-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png" alt=""><span>Get Fee
                                Quote</span></a>
                    </div>
                    <div class="bcs-call-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt=""><span>07 2112
                                2729</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bcs cost effective section end -->
    <!-- bcs additional section start -->
    <div class="bcs-additional-section mob-additional">
        <div class="bcs-additional-section-child">
            <h2>Additional services: Book Now</h2>
            <div class="additional-childs">
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clean 1.png" alt="">
                    </div>
                    <h3>Wall washing</h3>
                </div>
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carpet 1.png" alt="">
                    </div>
                    <h3>Carpet cleaning</h3>
                </div>
            </div>
            <div class="additional-childs">
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clean-window 1.png" alt="">
                    </div>
                    <h3>External windows cleaning</h3>
                </div>
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cleaning 1.png" alt="">
                    </div>
                    <h3>Upholstery/Furniture cleaning</h3>
                </div>
            </div>
            <div class="additional-childs">
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/window 1.png" alt="">
                    </div>
                    <h3>Blinds/curtains cleaning</h3>
                </div>
                <div class="additional-single-child">
                    <div class="additinal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person 1.png" alt="">
                    </div>
                    <h3>Patio/Balcony cleaning</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- bcs additional section end -->
    <!-- bcs banner section start -->
    <div class="bcs-gurantee-banner-section">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2 1.png" alt="" class="desk-gurantee-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner31.png" alt="" class="mob-gurantee-banner">
    </div>
    <!-- bcs banner section end -->
    <!-- bcs cost effective section start -->
    <div class="bcs-quality-service-section mob-quality-sec">
        <div class="bcs-quality-service-section-child">
            <div class="bcs-qs-child-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 2.png" alt="">
            </div>
            <div class="bcs-qs-child-right">
                <h2>Bond cleaning brisbane</h2>
                <p>For premier bond cleaning services in Brisbane, trust our expert team to deliver exceptional results.
                    With years of experience and a commitment to excellence, we ensure your property meets the highest
                    standards, leaving it spotless and ready for inspection. Our attention to detail, customer-centric
                    approach, and reliable service make us the top choice for bond cleaning in Brisbane. Experience the
                    difference with us today!</p>
                <div class="bcs-cost-effective-btns">
                    <div class="bcs-cost-effective-get-quote-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png" alt=""><span>Get Fee
                                Quote</span></a>
                    </div>
                    <div class="bcs-cost-effective-call-btn">
                        <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt=""><span>07 2112
                                2729</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bcs cost effective section end -->
    <!-- bcs book coditions section start -->
    <div class="bcs-book-conditions-section">
        <div class="bcs-book-conditions-section-child">
            <h2>Book Our Professional Bond Cleaning Services For Impressive Results</h2>
            <div class="book-condition-childs">
                <div class="book-condition-single-child">
                    <div class="book-condition-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/times.png" alt="">
                    </div>
                    <div class="book-condition-content">
                        <h4>Same-Day Availability</h4>
                        <p class="desk-condition-text">We always have a spot available for your last-minute bookings! We
                            ensure that your cleaning
                            needs are met on time without any delays.</p>
                        <p class="mob-condition-text">Last-minute bookings? We've got you covered with timely, reliable
                            cleaning!</p>
                    </div>
                </div>
                <div class="book-condition-single-child">
                    <div class="book-condition-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/times.png" alt="">
                    </div>
                    <div class="book-condition-content">
                        <h4>Same-Day Availability</h4>
                        <p class="desk-condition-text">We always have a spot available for your last-minute bookings! We
                            ensure that your cleaning
                            needs are met on time without any delays.</p>
                        <p class="mob-condition-text">Our expert cleaners will make your property shine with exceptional
                            results.</p>
                    </div>
                </div>
            </div>
            <div class="book-condition-childs">
                <div class="book-condition-single-child">
                    <div class="book-condition-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/times.png" alt="">
                    </div>
                    <div class="book-condition-content">
                        <h4>Same-Day Availability</h4>
                        <p class="desk-condition-text">We always have a spot available for your last-minute bookings! We
                            ensure that your cleaning
                            needs are met on time without any delays.</p>
                        <p class="mob-condition-text">Affordable, Premium Cleaning Services for Every Home</p>
                    </div>
                </div>
                <div class="book-condition-single-child">
                    <div class="book-condition-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/times.png" alt="">
                    </div>
                    <div class="book-condition-content">
                        <h4>Same-Day Availability</h4>
                        <p class="desk-condition-text">We always have a spot available for your last-minute bookings! We
                            ensure that your cleaning
                            needs are met on time without any delays.</p>
                        <p class="mob-condition-text">Enjoy our 5-day satisfaction guarantee and affordable,
                            high-quality cleaning!</p>
                    </div>
                </div>
            </div>
            <div class="bcs-book-conditions-btns">
                <div class="bcs-book-conditions-get-quote-btn">
                    <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png" alt=""><span>Get Fee
                            Quote</span></a>
                </div>
                <div class="bcs-book-conditions-call-btn">
                    <a href="tel:0721122729"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt=""><span>07
                            2112 2729</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- bcs book coditions section end -->
    <!-- bcs cleaning check list start  -->
    <div class="bcs-cleaning-checklist">
        <div class="bcs-cleaning-checklist-child">
            <div class="parent">
                <div class="check-left">
                    <h2>
                        House Cleaning Price List
                    </h2>
                    <div class="check-lft-child">
                        <div class="tab1">
                            <button class="tablinks first" onclick="openCity(event, 'Bedrooms')"
                                id="defaultOpen">Bedrooms</button>
                            <button class="tablinks" onclick="openCity(event, 'Bathrooms')">Bathrooms</button>
                            <button class="tablinks" onclick="openCity(event, 'Kitchen')">Kitchen</button>
                            <button class="tablinks" onclick="openCity(event, 'Lounge')">Lounge <br> Dining
                                Room</button>
                            <button class="tablinks" onclick="openCity(event, 'Laundry')">Laundry</button>
                            <button class="tablinks last" onclick="openCity(event, 'Garage')">Garage</button>
                        </div>
                        <div class="content-div">
                            <div id="Bedrooms" class="tabcontent">
                                <div class="d-flex justify-content-start align-items-center">
                                    <ul>
                                        <li>Clean all ceiling fans and remove cobwebs</li>
                                        <li>Clean all Internal windows, sills and tracks</li>
                                        <li>Clean light fittings and remove any dead bugs</li>
                                        <li>Clean wardrobe walls, shelves and doors</li>
                                        <li>Clean scuff marks on high traffic areas near power points</li>
                                        <li>Clean light switches, Power points, doors and skirting Boards</li>
                                        <li>Clean Air conditioner Filters</li>
                                        <li>Vacuum/Mop Floors</li>
                                    </ul>
                                </div>
                            </div>

                            <div id="Bathrooms" class="tabcontent">
                                <div class="d-flex justify-content-start align-items-center">
                                    <ul>
                                        <li>Clean all light switches, Power point, doors</li>
                                        <li>Clean light fittings remove any dead bugs.</li>
                                        <li>Clean scuff marks on high traffic areas near power points</li>
                                        <li>Wipe and disinfect toilet</li>
                                        <li>Clean shower screen and tiles (discoloured grout is not guaranteed)</li>
                                        <li>Clean exhaust fan and filters</li>
                                        <li>Bath tub wiped and disinfect</li>
                                        <li>Clean windows, sills and tracks</li>
                                        <li>Clean all the mirrors.</li>
                                        <li>Vacuum and Mop Floors</li>
                                    </ul>
                                </div>
                            </div>

                            <div id="Kitchen" class="tabcontent">
                                <div class="d-flex justify-content-start align-items-center">
                                    <ul>
                                        <li>Clean all inside/outside all Kitchen cupboards</li>
                                        <li>Wipe down kitchen bench tops</li>
                                        <li>Clean Scuff marks near power points.</li>
                                        <li>Clean all internal windows, sills and tracks</li>
                                        <li>Clean all ceiling fans and remove cobwebsr</li>
                                        <li>Clean light fittings and remove any dead bugs</li>
                                        <li>Wipe down Oven if it’s extra dirty additional charges may apply. (Oven in
                                            normal Condition)</li>
                                        <li>Clean skirting boards</li>
                                        <li>Wipe down Range hood and cook top</li>
                                        <li>Clean sink</li>
                                        <li>Vacuum and Mop Floors</li>
                                    </ul>
                                </div>
                            </div>

                            <div id="Lounge" class="tabcontent">
                                <div class="d-flex justify-content-start align-items-center">
                                    <ul>
                                        <li>Clean all internal windows, sills and tracks</li>
                                        <li>Clean all light switches, Power points, door and skirting boards</li>
                                        <li>Clean all ceiling fans and remove cobwebs</li>
                                        <li>Clean scuff marks near power points</li>
                                        <li>Clean light fittings and remove any dead bugs</li>
                                        <li>Clean Air Conditioner filters</li>
                                        <li>Vacuum and Mop floors</li>
                                    </ul>
                                </div>
                            </div>

                            <div id="Laundry" class="tabcontent">
                                <div class="d-flex justify-content-start align-items-center">
                                    <ul>
                                        <li>Clean all Ceiling fans and remove cobwebs</li>
                                        <li>Clean all internal windows, sills and tracks</li>
                                        <li>Clean light fittings, remove any dead bugs</li>
                                        <li>Clean sink and cup boards</li>
                                        <li>Clean all mirrors</li>
                                        <li>Vacuum and Mop Floors</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="Garage" class="tabcontent">
                                <div class="d-flex justify-content-start align-items-center">
                                    <ul>
                                        <li>Sweep the Garage</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="check-right">
                    <h2>
                        Flat Rate Cleaning
                    </h2>
                    <p>
                        This is our most popular service for a reason! You pay a fixed price, and our cleaners will
                        utilise our detalled service checklist throughout your home.<br><br> There are no hidden fees.
                        This is a flat rate estimate based on the number of bedrooms and bathrooms in your home.<br><br>
                        Upon arrival, we'll do a walkthrough to confirm the initial estimate is accurate. If your home
                        hasn't been professionally cleaned recently, this may increase the estimate for your first
                        service.<br><br> 6 Bed Home If you're in need of extras such as fridge or oven cleaning, please
                        check out our <a href="#">pricing list for add ons</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- cleaning check list end  -->
    <!-- bcs bond accordion section start -->
    <div class="bcs-bond-faqs">
        <div class="bcs-bond-faqs-child">
            <h2>FAQs on Bond Cleaning Brisbane</h2>
            <p>For top-notch bond cleaning services on the Gold Coast, trust our expert team to deliver exceptional
                results. With years of experience and a commitment to excellence, we ensure your property meets the
                highest standards, leaving it spotless and ready for inspection. Our attention to detail,
                customer-centric approach, and reliable service make us the top choice for bond cleaning on the Gold
                Coast. Experience the difference with us today!</p>
            <div class="bcs-bond-subchild">
                <div class="bcs-bond-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q5.png" alt="">
                </div>
                <div class="bcs-bond-right">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What inspired you to start this business?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We recognized the need for reliable and efficient bond cleaning services in the
                                        market. Our passion for creating seamless experiences and delivering exceptional
                                        results inspired us to launch our bond cleaning business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What sets your cleaning service apart from others?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our cleaning service stands out due to our meticulous attention to detail, use of
                                        eco-friendly products, and commitment to customer satisfaction. We prioritize
                                        thoroughness in every aspect, ensuring your property is left spotless and ready
                                        for inspection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do you ensure post-clean satisfaction?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>ChatGPT We ensure customer satisfaction through regular follow-ups to gather
                                        feedback, addressing any concerns promptly, and maintaining open communication
                                        channels. Additionally, our commitment to quality and consistency ensures that
                                        every clean exceeds our customers' expectations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What's your booking availability?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We offer flexible booking options to accommodate our customers' schedules. You
                                        can easily book our cleaning services online or contact our customer support
                                        team to find a convenient time slot that fits your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Any discounts for repeat customers?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, we value our recurring clients and often offer special promotions or
                                        discounts as a token of appreciation for their loyalty. Get in touch with us to
                                        learn more about our current offers for recurring clients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How handle customer feedback?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>ChatGPT
                                        We take customer feedback and concerns seriously, addressing them promptly and
                                        effectively. Our customer support team is readily available to listen to any
                                        feedback or concerns and take appropriate actions to resolve them to the
                                        customer's satisfaction. We believe in transparent communication and strive to
                                        ensure that every customer's experience with our service is positive.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bcs bond accordion section end -->
    <!-- bcs banner section start -->
    <div class="bcs-discount-banner-section">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/discount.png" alt="" class="desk-discount-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mfb1.png" alt="" class="mob-discount-banner">
    </div>
    <!-- bcs banner section end -->
    <!-- bcs bond footer section start -->
    <div class="bcs-footer">
        <div class="bcs-footer-child">
            <div class="bcs-footer-subchild">
                <div class="bcs-footer-child-left">
                    <h2>Information</h2>
                    <p>Welcome to our cleaning site! Discover a world of immaculate spaces and pristine surfaces. With
                        our expert team and cutting-edge techniques, we ensure every corner gleams with cleanliness.
                        Experience the difference today!</p>
                    <div class="bcs-footer-social-media-icon">
                        <a href=""><svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.5312 14.75C29.5312 6.72266 23.0273 0.21875 15 0.21875C6.97266 0.21875 0.46875 6.72266 0.46875 14.75C0.46875 22.0156 5.74219 28.0508 12.7148 29.1055V18.9688H9.02344V14.75H12.7148V11.5859C12.7148 7.95312 14.8828 5.90234 18.1641 5.90234C19.8047 5.90234 21.4453 6.19531 21.4453 6.19531V9.76953H19.6289C17.8125 9.76953 17.2266 10.8828 17.2266 12.0547V14.75H21.2695L20.625 18.9688H17.2266V29.1055C24.1992 28.0508 29.5312 22.0156 29.5312 14.75Z"
                                    fill="white"></path>
                            </svg></a>
                        <a href=""><svg width="30" height="25" viewBox="0 0 30 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.8945 6.65625C28.0664 5.77734 29.1211 4.72266 29.9414 3.49219C28.8867 3.96094 27.6562 4.3125 26.4258 4.42969C27.7148 3.66797 28.6523 2.49609 29.1211 1.03125C27.9492 1.73438 26.6016 2.26172 25.2539 2.55469C24.082 1.32422 22.5 0.621094 20.7422 0.621094C17.3438 0.621094 14.5898 3.375 14.5898 6.77344C14.5898 7.24219 14.6484 7.71094 14.7656 8.17969C9.66797 7.88672 5.09766 5.42578 2.05078 1.73438C1.52344 2.61328 1.23047 3.66797 1.23047 4.83984C1.23047 6.94922 2.28516 8.82422 3.98438 9.9375C2.98828 9.87891 1.99219 9.64453 1.17188 9.17578V9.23438C1.17188 12.2227 3.28125 14.6836 6.09375 15.2695C5.625 15.3867 5.03906 15.5039 4.51172 15.5039C4.10156 15.5039 3.75 15.4453 3.33984 15.3867C4.10156 17.8477 6.38672 19.6055 9.08203 19.6641C6.97266 21.3047 4.33594 22.3008 1.46484 22.3008C0.9375 22.3008 0.46875 22.2422 0 22.1836C2.69531 23.9414 5.91797 24.9375 9.43359 24.9375C20.7422 24.9375 26.8945 15.6211 26.8945 7.47656C26.8945 7.18359 26.8945 6.94922 26.8945 6.65625Z"
                                    fill="white"></path>
                            </svg></a>
                        <a href=""><svg width="33" height="23" viewBox="0 0 33 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.293 4.07422C31.9414 2.66797 30.8281 1.55469 29.4805 1.20312C26.9609 0.5 17 0.5 17 0.5C17 0.5 6.98047 0.5 4.46094 1.20312C3.11328 1.55469 2 2.66797 1.64844 4.07422C0.945312 6.53516 0.945312 11.8086 0.945312 11.8086C0.945312 11.8086 0.945312 17.0234 1.64844 19.543C2 20.9492 3.11328 22.0039 4.46094 22.3555C6.98047 23 17 23 17 23C17 23 26.9609 23 29.4805 22.3555C30.8281 22.0039 31.9414 20.9492 32.293 19.543C32.9961 17.0234 32.9961 11.8086 32.9961 11.8086C32.9961 11.8086 32.9961 6.53516 32.293 4.07422ZM13.7188 16.5547V7.0625L22.0391 11.8086L13.7188 16.5547Z"
                                    fill="white"></path>
                            </svg></a>
                        <a href=""><svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.5 7.01172C9.75 7.01172 6.76172 10.0586 6.76172 13.75C6.76172 17.5 9.75 20.4883 13.5 20.4883C17.1914 20.4883 20.2383 17.5 20.2383 13.75C20.2383 10.0586 17.1914 7.01172 13.5 7.01172ZM13.5 18.1445C11.0977 18.1445 9.10547 16.2109 9.10547 13.75C9.10547 11.3477 11.0391 9.41406 13.5 9.41406C15.9023 9.41406 17.8359 11.3477 17.8359 13.75C17.8359 16.2109 15.9023 18.1445 13.5 18.1445ZM22.0547 6.77734C22.0547 5.89844 21.3516 5.19531 20.4727 5.19531C19.5938 5.19531 18.8906 5.89844 18.8906 6.77734C18.8906 7.65625 19.5938 8.35938 20.4727 8.35938C21.3516 8.35938 22.0547 7.65625 22.0547 6.77734ZM26.5078 8.35938C26.3906 6.25 25.9219 4.375 24.3984 2.85156C22.875 1.32812 21 0.859375 18.8906 0.742188C16.7227 0.625 10.2188 0.625 8.05078 0.742188C5.94141 0.859375 4.125 1.32812 2.54297 2.85156C1.01953 4.375 0.550781 6.25 0.433594 8.35938C0.316406 10.5273 0.316406 17.0312 0.433594 19.1992C0.550781 21.3086 1.01953 23.125 2.54297 24.707C4.125 26.2305 5.94141 26.6992 8.05078 26.8164C10.2188 26.9336 16.7227 26.9336 18.8906 26.8164C21 26.6992 22.875 26.2305 24.3984 24.707C25.9219 23.125 26.3906 21.3086 26.5078 19.1992C26.625 17.0312 26.625 10.5273 26.5078 8.35938ZM23.6953 21.4844C23.2852 22.6562 22.3477 23.5352 21.2344 24.0039C19.4766 24.707 15.375 24.5312 13.5 24.5312C11.5664 24.5312 7.46484 24.707 5.76562 24.0039C4.59375 23.5352 3.71484 22.6562 3.24609 21.4844C2.54297 19.7852 2.71875 15.6836 2.71875 13.75C2.71875 11.875 2.54297 7.77344 3.24609 6.01562C3.71484 4.90234 4.59375 4.02344 5.76562 3.55469C7.46484 2.85156 11.5664 3.02734 13.5 3.02734C15.375 3.02734 19.4766 2.85156 21.2344 3.55469C22.3477 3.96484 23.2266 4.90234 23.6953 6.01562C24.3984 7.77344 24.2227 11.875 24.2227 13.75C24.2227 15.6836 24.3984 19.7852 23.6953 21.4844Z"
                                    fill="white"></path>
                            </svg></a>
                    </div>
                </div>
                <div class="bcs-footer-child-right">
                    <div class="bcs-footer-nav">
                        <h2>Navigation</h2>
                        <ul>
                            <li><a href="#"><i class="fas fa-chevron-right"></i>Home</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i>About Us</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i>Our Services</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i>Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="bcs-footer-nav">
                        <h2>Services</h2>
                        <ul>
                            <li><a href="https://bondcleaningservice.com/carpet-services/"><i class="fas fa-chevron-right"></i>Carpet Services</a></li>
                            <li><a href="https://bondcleaningservice.com/pest-control/"><i class="fas fa-chevron-right"></i>Pest Control</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i>Bond Cleaning</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i>Spring Cleaning</a></li>
                        </ul>
                    </div>
                    <div class="bcs-footer-nav">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="#"><i class="fas fa-chevron-right"></i>Term Of Service</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i>Privacy Policy</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i>Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bcs-copyright">
                <p>Allright Reserved - Bond Cleaning Brisbane</p>
            </div>
        </div>
    </div>
    <!-- bcs bond footer section end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.menu-toggle');
            const navMenu = document.querySelector('.nav-menu');
            const hasSubmenu = document.querySelectorAll('.has-submenu');

            menuToggle.addEventListener('click', function () {
                navMenu.classList.toggle('active');
            });

            hasSubmenu.forEach(item => {
                item.addEventListener('click', function () {
                    this.classList.toggle('active');
                });
            });
        });

        // service slider
        $(document).ready(function () {
            $('.bcs-service-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false, // Disable default arrows
                infinite: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true, // Ensure slider continues looping
                            arrows: true, // Show navigation arrows
                            dots: true // Show dots for navigation
                        }
                    }
                ]
            });

            // Custom buttons
            $('.bcs-prev-btn').click(function () {
                $('.bcs-service-slider').slick('slickPrev');
            });

            $('.bcs-next-btn').click(function () {
                $('.bcs-service-slider').slick('slickNext');
            });
        });

        $(document).ready(function () {
            $('.bcs-review-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1500,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: true,
                            dots: true
                        }
                    }
                ]
            });
        });

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        function toggleAccordion(element) {
            var content = element.nextElementSibling;
            if (element.classList.contains('active')) {
                // Close the active item
                content.style.maxHeight = null;
                element.classList.remove('active');
            } else {
                // Close all other items
                var allButtons = document.querySelectorAll('.accordion-button');
                allButtons.forEach(function (btn) {
                    var contentSibling = btn.nextElementSibling;
                    if (contentSibling !== content) {
                        contentSibling.style.maxHeight = null;
                        btn.classList.remove('active');
                    }
                });
                // Open the clicked item
                content.style.maxHeight = content.scrollHeight + "px";
                element.classList.add('active');
            }
        }

    </script>
</body>

</html>