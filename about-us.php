<?php
/*
Template Name: About Us
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css" rel="stylesheet" />
    <!--//new home files-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about-us.css">
    <title>About Us | Bond Cleaning Services</title>
</head>

<body>
    <!-- top nav header start -->
    <div class="top-nav-parent">
        <div class="top-nav">
            <div class="top-nav-left">
                <p><i class="fa fa-envelope"></i>hello@gmail.com</p>
                <p><i class="fa fa-phone"></i>+62 132 432 342</p>
            </div>
            <div class="top-nav-right">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    <!-- top nav header end -->
    <!-- nav header start -->
    <div class="nav-parent">
        <div class="nav">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-bars" id="menu-icon"></i>
            </label>
            <div class="logo">
                <h1>HCS</h1>
            </div>
            <div class="menus">
                <ul>
                    <li><a href="https://bondcleaningservice.com/" class="active">HOME</a></li>
                    <li><a href="https://bondcleaningservice.com/about-us/">ABOUT US</a></li>
                    <li><a href="#services">SERVICES<i class="fa fa-chevron-down"></i></a>
                        <ul id="submenu">
                            <li><a href="#">BOND CLEANING GOLDCOAST</a></li>
                            <li><a href="#">BOND CLEANING BRISBANE</a></li>
                        </ul>
                    </li>
                    <li><a href="#pricing">PRICING</a></li>
                    <li><a href="https://bondcleaningservice.com/contact-us/">CONTACT US</a></li>
                </ul>
            </div>
            <div class="get-quote">
                <p><i class="fa fa-phone"></i>+62 132 432 342</p>
                <a href="#">GET A QUOTE</a>
            </div>
        </div>
    </div>
    <!-- nav header end -->
    <!-- main start -->
    <div class="main">
        <div class="main-child">
            <div class="left">
                <h2>Book A Clean</h2>
                <span>Don't put up with a smelly bins any longer!</span>
                <p>Fill out the form to BOOK YOUR BIN CLEAN.</p>
                <form action="">
                    <div class="mb-3">
                        <input type="text" class="form-control p-3" name="yourname" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control p-3" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control p-3" name="address" placeholder="Address" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="tel" class="form-control p-3" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control p-3" name="date" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="form-control p-3">Book Now <i
                                class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="right">
                <h3>Book your professional home cleaner in sec.</h3>
                <div class="points-about">
                    <h4>1. Book a Cleaning</h4>
                    <p>Conveniently book your cleaning appointment with just a few clicks.</p>
                    <h4>2. Confirm Booking</h4>
                    <p>Receive instant confirmation of your booking to put your mind at ease.</p>
                    <h4>3. We'll Clean it</h4>
                    <p>Sit back and relax while our expert team takes care of the cleaning, leaving your home sparkling
                        and refreshed.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- main end -->
    <!-- trusted service start -->
    <div class="trusted-service">
        <div class="trusted-service-child">
            <div class="trusted-service-left">
                <h2>We're Australian most trusted house cleaning service!</h2>
                <p>Rely on Australia's most trusted house cleaning service to transform your home into a pristine
                    sanctuary. With our unparalleled expertise, dedication, and commitment to excellence, we've earned
                    the trust of countless satisfied customers across the nation. Experience the difference with our
                    meticulous attention to detail, friendly service, and unwavering reliability. Trust us to deliver
                    exceptional results every time, leaving your home impeccably clean and your mind at ease.
                </p>
            </div>
            <div class="trusted-service-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trust ser.png" alt="">
            </div>
        </div>
    </div>
    <!-- trusted service end -->
    <!-- cta section start -->
    <div class="bcs-cta">
        <div class="bcs-cta-child">
            <div class="bcs-cta-child-left">
                <h2>Get Your Personalized Cleaning Quote Now!</h2>
                <p>Let Us Tailor Your Cleaning Solution Today!</p>
            </div>
            <div class="bcs-cta-child-right">
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
                        <button type="submit" class="cta-btn w-100 p-3">Book Now <i
                                class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- cta section end -->
    <!-- trusted service start -->
    <div class="why-choose">
        <div class="why-choose-child">
            <div class="why-choose-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why choose.png" alt="">
            </div>
            <div class="why-choose-right">
                <h2>Why choose Bond cleaning to clean your home?</h2>
                <p>Selecting Bond Cleaning for your home cleaning needs ensures a premium level of service and peace of
                    mind. With our proven track record of excellence, we offer unmatched professionalism, reliability,
                    and attention to detail. Our dedicated team utilizes industry-leading techniques and top-quality
                    products to deliver exceptional results, leaving your home spotless and refreshed. Trust in our
                    expertise to exceed your expectations and provide you with a hassle-free cleaning experience,
                    allowing you to enjoy a pristine living space without the stress.
                </p>
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
            </div>
        </div>
    </div>
    <!-- trusted service end -->
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
                <div class="bcs-bond-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q5.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- bcs bond accordion section end -->
    <!-- bcs bond footer section start -->
    <div class="bcs-footer">
        <div class="bcs-footer-child">
            <div class="bcs-footer-subchild">
                <div class="bcs-footer-child-left">
                    <h1>B.Cleaning</h1>
                    <p>Welcome to our cleaning site! Discover a world of immaculate spaces and pristine surfaces. With
                        our expert team and cutting-edge techniques, we ensure every corner gleams with cleanliness.
                        Experience the difference today!</p>
                    <p><i class="fa fa-envelope"></i>hello@gmail.com</p>
                    <p><i class="fa fa-phone"></i>+62 132 432 342</p>
                </div>
                <div class="bcs-footer-child-right">
                    <div class="bcs-footer-nav">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Home</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>About Us</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Our Services</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Pricing</a></li>
                        </ul>
                    </div>
                    <div class="bcs-footer-nav">
                        <h2>Our Services</h2>
                        <ul>
                            <li><a href="https://bondcleaningservice.com/carpet-services/"><i class="fas fa-caret-right"></i>Carpet Services</a></li>
                            <li><a href="https://bondcleaningservice.com/pest-control/"><i class="fas fa-caret-right"></i>Pest Control</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Bond Cleaning</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Spring Cleaning</a></li>
                        </ul>
                    </div>
                    <div class="bcs-footer-nav">
                        <h2>Follow Us</h2>
                        <p>follow us on social media for more updates!</p>
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
                </div>
            </div>
            <div class="bcs-copyright">
                <p>Allright Reserved - Bond Cleaning</p>
            </div>
        </div>
    </div>
    <!-- bcs bond footer section end -->



    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const checkBox = document.getElementById('check');
            const menu = document.querySelector('.menus');
            const menuIcon = document.getElementById('menu-icon');

            function updateMenuIcon() {
                if (checkBox.checked) {
                    menuIcon.classList.remove('fa-bars');
                    menuIcon.classList.add('fa-times');
                } else {
                    menuIcon.classList.remove('fa-times');
                    menuIcon.classList.add('fa-bars');
                }
            }

            updateMenuIcon();

            checkBox.addEventListener('change', updateMenuIcon);

            menuIcon.addEventListener('click', function () {
                checkBox.checked = !checkBox.checked;
                updateMenuIcon();
            });

            document.addEventListener('click', function (event) {
                if (!menu.contains(event.target) && !event.target.matches('#check, #check + label')) {
                    checkBox.checked = false;
                    updateMenuIcon();
                }
            });
        });
    </script>
</body>

</html>