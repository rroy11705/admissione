<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>admissione | Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <!-- CSS here -->
        <link rel="stylesheet" href="./assets/css/common.css">
        <link rel="stylesheet" href="./assets/css/index.css">
        <!-- <link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
        
        <?php include_once('./includes/navbar.php'); ?>    

        <section id="company-intro">
            <div id="home" class="hero container min-height-100vh fade-up">
                <div class="hero-text fade-up fade-delay">
                    <div class="pre-heading fade-up fade-delay">  
                        College Counselling
                    </div>
                    <div class="heading fade-up fade-delay">
                        Let’s Find Your<br />
                        <span class="line-two fade-up fade-delay">Most Desirable College</span><br >
                        With Our Experts
                    </div>
                    <div class="text fade-up fade-delay">
                        Our goal is to guide you to get the best college that you deserve at minimal cost.
                    </div>
                    <div class="heading-buttons">
                        <button onclick="location.href='tel:9330554104'" class="button opaque button-icon text-left" style="padding: 9px 25px;">
                            <img src="./assets/images/call.svg" alt="Call" style="width:22px">
                            <span style="display: grid;">
                                <span style="font-size:14px;font-family: 'Inter';">Call Us Now on</span>
                                <span>9330554104</span> 
                            </span>
                        </button>
                        <button type="button" id="open_register_popup" class="button fade-up fade-delay">
                            Register Now
                        </button>
                    </div>
                </div>
                <div class="hero-illustration fade-up fade-delay">
                    <script>
                        var breakPoint = window.matchMedia("(min-width: 835px)");
                        if(breakPoint.matches) {
                            document.write('<img src="./assets/images/hero-illustration.svg" alt="hero-Illustration">');
                        }
                    </script>
                </div>
                <div class="hero-bottom-shadow"></div>
            </div>
            <div id="company-service" class="company-service container">
                <div class="service-cards counters fade-up">
                    <div class="card card-1 fade-up fade-delay">
                        <div class="text-container">
                            <img class="service-icon" src="./assets/images/identify.png" alt="Identifying Student's Aspirations">
                            <p class="heading-3 m-0"><span data-counter="rating">Identifying Student's Aspirations</span></p>
                            <hr class="border">
                            <p class="text text-primary m-0">
                                Admissione has set up a convenient and accessible platform that helps in identifying the student’s aspirations through AI.
                            </p>
                        </div>
                    </div>
                    <div class="card card-2 fade-up fade-delay">
                        <div class="text-container">
                            <img class="service-icon" src="./assets/images/guidance.png" alt="Application Support & guidance">
                            <p class="heading-3 m-0"><span data-counter="rating">Application Support & guidance</span></p>
                            <hr class="border">
                            <p class="text text-light-1 m-0">
                                we are a one-stop solution for your post-exam counseling. The process is smoothly driven with rapid solutions with our team.
                            </p>
                        </div>
                    </div>
                    <div class="card card-3 fade-up fade-delay">
                        <div class="text-container">
                            <img class="service-icon" src="./assets/images/subscription.png" alt="Free & Paid both subscription available ">
                            <p class="heading-3 text-dark m-0"><span data-counter="rating">Free & Paid both subscription available </span></p>
                            <hr class="border bg-danger">
                            <p class="text text-gray m-0">
                                If you want you can switch from our free to paid subscription & Pay us after getting admitted into your college.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="company-workflow">
            <div class="workflow container fade-up bg-dark-gray">
                <div class="workflow-text fade-up fade-delay">
                    <div class="pre-heading text-center m-0 fade-up fade-delay">  
                        What's The Function
                    </div>
                    <!-- <hr class="border border-large bg-danger"> -->
                    <div class="heading-2 text-center fade-up fade-delay">
                        Let's find out what we do in details
                    </div>
                    <!-- <div class="text text-gray fade-up fade-delay">
                        Problems trying to resolve the conflict between 
                        the two major realms of Classical physics: 
                        Newtonian mechanics 
                    </div> -->
                </div>
                <div class="workflow-information fade-up fade-delay">
                    <div class="workflow-information-card">
                        <div class="heading-2 workflow-information-card-icon">
                            01
                        </div>
                        <div class="workflow-information-card-text">
                            <div class="card-heading heading-3">
                                Identifying Student's Aspirations
                            </div>
                            <div class="card-text text">
                                We ask you to fill up a form and send documents over email/whatsapp to know your places of interest. We would set up your account for e-counselling and send you the credentials for payment.
                            </div>
                        </div>
                    </div>
                    <div class="workflow-information-card">
                        <div class="heading-2 workflow-information-card-icon">
                            02
                        </div>
                        <div class="workflow-information-card-text">
                            <div class="card-heading heading-3">
                                Give Them Right Guidance
                            </div>
                            <div class="card-text text">
                                Our experts would understand your requirements and choose the right set and order of college that best suites your interests and ranking.
                            </div>
                        </div>
                    </div>
                    <div class="workflow-information-card">
                        <div class="heading-2 workflow-information-card-icon">
                            03
                        </div>
                        <div class="workflow-information-card-text">
                            <div class="card-heading heading-3">
                                Personal News Updates
                            </div>
                            <div class="card-text text">
                                Update the candidate with every information that is needed for his or her college admission in our personalized portal.
                            </div>
                        </div>
                    </div>
                    <div class="workflow-information-card">
                        <div class="heading-2 workflow-information-card-icon">
                            04
                        </div>
                        <div class="workflow-information-card-text">
                            <div class="card-heading heading-3">
                                Scholarship Guidance
                            </div>
                            <div class="card-text text">
                                We would guide you through the process of applying for scholarships, help you fill up forms and provide you with the right information to get the best possible scholarships for you.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="company-pricing">
            <div class="pricing container">
                <div class="pricing-text fade-up">
                    <hr class="border border-large bg-danger">
                    <div class="heading-2 text-dark fade-up fade-delay">
                        Affordable Packages
                    </div>
                    <div class="text text-gray fade-up fade-delay">
                        Getting a college or university is something we all desire for. Whether the course is for short term like 6 months or long term like 5 years, we always try to give you the best education. This effort makes adnissione a one-stop solution for those looking for affordable career counseling packages in India.
                    </div>
                </div>
                <div class="pricing-cards fade-up">
                    <div class="card bg-danger fade-up fade-delay">
                        <div class="heading-3 m-0">
                            Free
                        </div>
                        <hr class="border">
                        <!--<div class="small-text m-0">-->
                        <!--    Some Descriptions about this range-->
                        <!--</div>-->
                        <div class="features">
                            <div class="feature">
                                <img src="./assets/images/tick.svg" alt="tick">
                                <p class="text m-0">
                                    Initial Counseling
                                </p>
                            </div>
                            <div class="feature">
                                <img src="./assets/images/tick.svg" alt="tick">
                                <p class="text m-0">
                                    Scholarship Guidance
                                </p>
                            </div>
                            <div class="feature">
                                <img src="./assets/images/cross.svg" alt="cross">
                                <p class="text m-0">
                                    Student Credit Card Guidance
                                </p>
                            </div>
                            <div class="feature">
                                <img src="./assets/images/cross.svg" alt="cross">
                                <p class="text m-0">
                                    Choice Filling by Expert
                                </p>
                            </div>
                            <div class="feature">
                                <img src="./assets/images/cross.svg" alt="cross">
                                <p class="text m-0">
                                    Guidance About college, Fees & Placement
                                </p>
                            </div>
                            <div class="feature">
                                <img src="./assets/images/cross.svg" alt="cross">
                                <p class="text m-0">
                                    News Update Via sms or WhatsApp
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-info fade-up fade-delay">
                        <div class="heading-3 m-0">
                            ₹499 /-
                        </div>
                        <hr class="border">
                        <!--<div class="small-text m-0">-->
                        <!--    Some Descriptions about this range-->
                        <!--</div>-->
                        <div class="features">
                            <div class="feature">
                                <img src="./assets/images/tick.svg" alt="tick">
                                <p class="text m-0">
                                    Initial Counseling
                                </p>
                            </div>
                            <div class="feature">
                                <img src="./assets/images/tick.svg" alt="tick">
                                <p class="text m-0">
                                    Scholarship Assistance
                                </p>
                            </div>
                            <div class="feature">
                                <img src="./assets/images/tick.svg" alt="tick">
                                <p class="text m-0">
                                    Student Credit Card Guidance
                                </p>
                            </div>
                            <div class="feature">
                                <img src="./assets/images/tick.svg" alt="tick">
                                <p class="text m-0">
                                    Choice Filling by Expert
                                </p>
                            </div>
                            <div class="feature">
                                <img src="./assets/images/tick.svg" alt="tick">
                                <p class="text m-0">
                                    Guidance About college, Fees & Placement
                                </p>
                            </div>
                            <div class="feature">
                                <img src="./assets/images/tick.svg" alt="tick">
                                <p class="text m-0">
                                    News Update Via sms or WhatsApp
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="company-testimonials">
            <div class="testimonials container min-height-100vh bg-dark-gray">
                <div class="testimonials-splider-container">
                    <div class="testimonials-heading heading text-center color-light-7">
                        Testimonials
                    </div>
                    <div id="testimonials-splide" class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <blockquote class="sub-heading color-light-5">
                                        <img src="assets/images/quote-sign-left.png" class="quote-sign-left" alt="quote-sign-left">
                                            I secured Calcutta Medical College; the admission department is very good.
                                        <img src="assets/images/quote-sign-right.png" class="quote-sign-right" alt="quote-sign-right">
                                    </blockquote>
                                    <div class="sub-heading text-right text-white color-5 m-0"> ~ Abheek Saha</div>
                                    <div class="pre-heading text-Regular text-right color-7 m-0"> (MBBS-UR)</div>
                                </li>
                                <li class="splide__slide">
                                    <blockquote class="sub-heading color-light-5">
                                        <img src="assets/images/quote-sign-left.png" class="quote-sign-left" alt="quote-sign-left">
                                            I was ensured govt college by them, great communication between teachers and students.
                                        <img src="assets/images/quote-sign-right.png" class="quote-sign-right" alt="quote-sign-right">
                                    </blockquote>
                                    <div class="sub-heading text-right text-white color-5 m-0"> ~ Partha Pratim Mondal</div>
                                    <div class="pre-heading text-Regular text-right color-7 m-0"> (CSE)</div>
                                </li>
                                <li class="splide__slide">
                                    <blockquote class="sub-heading color-light-5">
                                        <img src="assets/images/quote-sign-left.png" class="quote-sign-left" alt="quote-sign-left">
                                            The admission process was undoubtedly very smooth and easy. 
                                        <img src="assets/images/quote-sign-right.png" class="quote-sign-right" alt="quote-sign-right">
                                    </blockquote>
                                    <div class="sub-heading text-right text-white color-5 m-0"> ~ Dia Nandy</div>
                                    <div class="pre-heading text-Regular text-right color-7 m-0"> (CSE)</div>
                                </li>
                                <li class="splide__slide">
                                    <blockquote class="sub-heading color-light-5">
                                        <img src="assets/images/quote-sign-left.png" class="quote-sign-left" alt="quote-sign-left">
                                            Experts are excellent & polite. They help me a lot.
                                        <img src="assets/images/quote-sign-right.png" class="quote-sign-right" alt="quote-sign-right">
                                    </blockquote>
                                    <div class="sub-heading text-right text-white color-5 m-0"> ~ Susmita Maji</div>
                                    <div class="pre-heading text-Regular text-right color-7 m-0"> (Electrical Engineering)</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="company-faq">
            <div class="faq container">
                <div class="faq-text fade-up">
                    <hr class="border border-large bg-danger">
                    <div class="heading-2 text-dark fade-up fade-delay">
                        Frequently Asked Questions
                    </div>
                    <div class="text text-gray fade-up fade-delay">
                        Frequently-asked questions about what we do and how we do and how we can help you...
                    </div>
                </div>
                <div class="faq-cards fade-up">
                    <div class="faq-cards-item fade-up fade-delay">
                        <button id="faq-cards-button-1" aria-expanded="false"><span class="faq-cards-title">Why choose us?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="faq-cards-content text text-grey bg-dark m-0">
                            <p>we are here to make your college admission easy by providing complete information about all colleges, placement, and scholarships and guiding you through your counselling process until your admission.</p>
                        </div>
                    </div>
                    <div class="faq-cards-item fade-up fade-delay">
                        <button id="faq-cards-button-2" aria-expanded="false"><span class="faq-cards-title">What is expert counseling?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="faq-cards-content text text-grey bg-dark m-0">
                            <p>A counsellor with 5+ years of extensive knowledge and experience in the counselling process will guide you by understanding your result & aspirations.</p>
                        </div>
                    </div>
                    <div class="faq-cards-item fade-up fade-delay">
                        <button id="faq-cards-button-3" aria-expanded="false"><span class="faq-cards-title">Name of the entrance exam we cover?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="faq-cards-content text text-grey bg-dark m-0">
                            <p>NEET, JEE MAINS, WBJEE, JENPAS(UG), WB ANM & GNM, CET MAKAUT, GATE, MAT.</p>
                        </div>
                    </div>
                    <div class="faq-cards-item fade-up fade-delay">
                        <button id="faq-cards-button-4" aria-expanded="false"><span class="faq-cards-title">How to pay?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="faq-cards-content text text-grey bg-dark m-0">
                            <p>If you are a paid subscriber, after getting a college you have to pay us our fees via any online process to our bank account.</p>
                        </div>
                    </div>
                    <div class="faq-cards-item fade-up fade-delay">
                        <button id="faq-cards-button-4" aria-expanded="false"><span class="faq-cards-title">Application process</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="faq-cards-content text text-grey bg-dark m-0">
                            <p>You can fill up the inquiry form below or give us a direct call on 9330554104 our expert will help you.</p>
                        </div>
                    </div>
                    <div class="faq-cards-item fade-up fade-delay">
                        <button id="faq-cards-button-4" aria-expanded="false"><span class="faq-cards-title">How a student engage in our community?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="faq-cards-content text text-grey bg-dark m-0">
                            <p>We always want to engage a student via our community. When a student faces a problem like ragging in the university or college, the other students in the community will help.</p>
                        </div>
                    </div>
                </div>
        </section>

        <?php include_once('./includes/contact.php'); ?>    

        <?php include_once('./includes/footer.php'); ?>    
        <?php include_once('./includes/register_popup.php') ?>

        <a
            href="https://wa.me/919330554104"
            class="whatsapp_float"
            target="_blank"
            rel="noopener noreferrer"
        >
            <i class="fa fa-whatsapp whatsapp-icon"></i>
        </a>

        <script src="./assets/js/jquery-loader.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
        <!-- <script src="https://cdn.plyr.io/3.6.3/plyr.polyfilled.js"></script> -->
        <!-- <script>
            const player = new Plyr('#player');
        </script> -->
        <script src="./assets/js/common.js"></script>
    </body>
</html>

