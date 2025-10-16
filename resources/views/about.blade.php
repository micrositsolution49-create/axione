@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- about banner area srart -->
    <div class="contact-banner-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- banner main inner contact areas start -->
                    <div class="text-center">
                        <h1 class="title skew-up-2">About Us</h1>
                        <div class="pagimation title skew-up-2">
                            <a href="index.html">Home</a> >
                            About Us
                        </div>
                    </div>
                    <!-- banner main inner contact areas end -->
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="{{ asset('assets/images/about/s2.png')}}" alt="shape" class="one">
            <img src="{{ asset('assets/images/about/s4.png')}}" alt="shape" class="two">
            <img src="{{ asset('assets/images/about/s2.png')}}" alt="shape" class="three">
            <img src="{{ asset('assets/images/about/s1.png')}}" alt="shape" class="four">
        </div>
    </div>
    <!-- about banner area end -->


    <!-- single sertvice area start -->
    <div class="single-service-banner-area rts-section-gapTop">
        <div class="container">
            <div class="row pt--100 pb--80 align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="title-style-one-left">
                        <span class="pre">Axione Solutions</span>
                        <h2 class="title split-collab">Where Creativity <br> Meets Strategy</h2>
                        <p class="disc">
                            At Axione Solutions, we believe design alone isn’t enough every idea needs the right strategy. That’s why we blend creativity with technology to build solutions that look great, engage audiences, and deliver measurable results.

We focus on long term growth, not quick wins. From web development to SEO, social media, and Google Ads, our goal is simple to transform businesses into digital leaders with a strong and lasting online presence.
                        </p>
                        <a href="contact-us.html" class="rts-btn btn-primary arrow-rotate">Get In Touch <i class="fa-light fa-arrow-right"></i></a>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="thumbnail">
                        <img src="{{asset('assets/images/about/about-axione-solutions-1.webp')}}" alt="about">
                        <img class="short-image" src="{{asset('assets/images/about/about-axione-solutions-2.webp')}}" alt="about">
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="{{ asset('assets/images/about/s2.png')}}" alt="shape" class="one">
            <img src="{{ asset('assets/images/about/s4.png')}}" alt="shape" class="two">
            <img src="{{ asset('assets/images/about/s2.png')}}" alt="shape" class="three">
            <img src="{{ asset('assets/images/about/s1.png')}}" alt="shape" class="four">
        </div>
    </div>
    <!-- single sertvice area end -->


    <!-- rts  working process area start-->
    <div class="rts-working-process-area rts-section-gap about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
            <div class="row align-items-center mt--50">
                <div class="col-lg-6 pr--100 pr_md--0 pr_sm--0">
                    <div class="title-style-one-left pb-4">
                        <span class="pre skew-up">This is how we work</span>
                        <h2 class="title skew-up">Why you will choose us</h2>
                        <p class="mb-2">When you’re looking for a digital partner, you don’t just want services—you want people who actually care about your growth. That’s where we come in.</p>
                        <strong>At Axione Solutions, we keep things simple:</strong>
                    </div>
                    <div class="accordion-area-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1609 6.16117C13.5051 3.81696 16.6845 2.5 19.9997 2.5C21.6412 2.5 23.2667 2.82332 24.7833 3.45151C26.2998 4.07969 27.6778 5.00043 28.8386 6.16117C29.9993 7.3219 30.92 8.69989 31.5482 10.2165C32.1764 11.733 32.4997 13.3585 32.4997 15C32.5833 16.8147 32.2347 18.6234 31.4828 20.2771C30.7309 21.9309 29.5971 23.3825 28.1747 24.5125C26.9122 25.6875 26.2497 26.35 26.2497 27.5H23.7497C23.7497 25.2199 25.0841 23.9737 26.3972 22.7474C26.423 22.7233 26.4489 22.6991 26.4747 22.675C27.6453 21.7817 28.5788 20.6148 29.1934 19.2767C29.808 17.9385 30.0849 16.47 29.9997 15C29.9997 12.3478 28.9462 9.8043 27.0708 7.92893C25.1954 6.05357 22.6519 5 19.9997 5C17.3476 5 14.804 6.05357 12.9287 7.92893C11.0533 9.8043 9.99972 12.3478 9.99972 15C9.91315 16.469 10.1881 17.9368 10.8004 19.2748C11.4128 20.6128 12.3439 21.7803 13.5122 22.675C14.8622 23.9125 16.2497 25.2 16.2497 27.5H13.7497C13.7497 26.35 13.0747 25.6875 11.8247 24.525C10.4013 23.393 9.26699 21.9393 8.51509 20.2834C7.76319 18.6275 7.41519 16.8167 7.49972 15C7.49972 11.6848 8.81668 8.50537 11.1609 6.16117ZM26.2497 32.5V30H13.7497V32.5H26.2497ZM23.7497 37.5V35H16.2497V37.5H23.7497Z" fill="#614CE1"></path>
                                        </svg>
                                        We listen first
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Before suggesting any strategy, we take time to understand your business, your challenges, and your goals.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <g clip-path="url(#clip0_889_9723)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M32.5 10H30V5H25V2.5H30C30.6628 2.50069 31.2983 2.76431 31.767 3.233C32.2357 3.70169 32.4993 4.33717 32.5 5V10ZM2.5 15H5V20H2.5V15ZM5 32.5H10V30H5V25H2.5V30C2.50069 30.6628 2.76431 31.2983 3.233 31.767C3.70169 32.2357 4.33717 32.4993 5 32.5ZM15 2.5H20V5H15V2.5ZM5 10H2.5V5C2.50069 4.33717 2.76431 3.70169 3.233 3.233C3.70169 2.76431 4.33717 2.50069 5 2.5H10V5H5V10ZM33.2716 39.9053C33.4232 39.9681 33.5858 40.0004 33.75 40.0002C33.9142 40.0004 34.0768 39.9681 34.2284 39.9053C34.3801 39.8424 34.5178 39.7502 34.6338 39.6339L39.6338 34.6339C39.7499 34.5179 39.842 34.3801 39.9049 34.2285C39.9677 34.0769 40 33.9143 40 33.7502C40 33.586 39.9677 33.4235 39.9049 33.2718C39.842 33.1202 39.7499 32.9824 39.6338 32.8664L31.9616 25.1943L38.1934 21.0402C38.3908 20.9086 38.5467 20.7235 38.6428 20.5066C38.739 20.2897 38.7714 20.0499 38.7363 19.8153C38.7013 19.5806 38.6001 19.3608 38.4447 19.1815C38.2894 19.0022 38.0862 18.8708 37.8589 18.8027L12.8589 11.3027C12.6427 11.2379 12.413 11.2328 12.1942 11.2879C11.9753 11.3431 11.7755 11.4565 11.6159 11.6161C11.4564 11.7757 11.343 11.9755 11.2878 12.1943C11.2326 12.4132 11.2377 12.6429 11.3025 12.8591L18.8025 37.8591C18.8706 38.0863 19.002 38.2895 19.1813 38.4449C19.3606 38.6003 19.5804 38.7014 19.8151 38.7365C20.0497 38.7716 20.2895 38.7392 20.5064 38.643C20.7233 38.5469 20.9084 38.391 21.04 38.1936L25.1941 31.9618L32.8663 39.6339C32.9822 39.7502 33.1199 39.8424 33.2716 39.9053ZM36.9824 33.7502L33.75 36.9826L24.8063 28.0389L20.434 34.5962L14.3646 14.3648L34.596 20.4342L28.0388 24.8064L36.9824 33.7502Z" fill="#614CE1"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_889_9723">
                                                    <rect width="40" height="40" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        We create with purpose
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Every design, every campaign, and every line of code is built to help you stand out and grow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.97215 9.90735C3.7944 10.4568 4.7611 10.75 5.75 10.75C7.07609 10.75 8.34785 10.2232 9.28554 9.28554C10.2232 8.34785 10.75 7.07609 10.75 5.75C10.75 4.7611 10.4568 3.7944 9.90735 2.97215C9.35794 2.14991 8.57705 1.50904 7.66342 1.1306C6.74979 0.752166 5.74446 0.65315 4.77455 0.846076C3.80465 1.039 2.91373 1.51521 2.21447 2.21447C1.51521 2.91373 1.039 3.80465 0.846076 4.77455C0.65315 5.74446 0.752166 6.74979 1.1306 7.66342C1.50904 8.57705 2.14991 9.35794 2.97215 9.90735ZM4.36108 3.67133C4.7722 3.39662 5.25555 3.25 5.75 3.25C6.41304 3.25 7.04893 3.51339 7.51777 3.98223C7.98661 4.45108 8.25 5.08696 8.25 5.75C8.25 6.24446 8.10338 6.7278 7.82868 7.13893C7.55397 7.55005 7.16353 7.87048 6.70671 8.0597C6.2499 8.24892 5.74723 8.29843 5.26228 8.20197C4.77732 8.1055 4.33187 7.8674 3.98223 7.51777C3.6326 7.16814 3.3945 6.72268 3.29804 6.23773C3.20158 5.75278 3.25108 5.25011 3.4403 4.79329C3.62952 4.33648 3.94995 3.94603 4.36108 3.67133ZM15.75 4.5H32V7H15.75V4.5ZM15.75 27H32V29.5H15.75V27ZM18.25 15.75H2V18.25H18.25V15.75ZM5.75 33.25C4.7611 33.25 3.7944 32.9568 2.97215 32.4074C2.14991 31.8579 1.50904 31.0771 1.1306 30.1634C0.752166 29.2498 0.65315 28.2445 0.846076 27.2746C1.039 26.3046 1.51521 25.4137 2.21447 24.7145C2.91373 24.0152 3.80465 23.539 4.77455 23.3461C5.74446 23.1532 6.74979 23.2522 7.66342 23.6306C8.57705 24.009 9.35794 24.6499 9.90735 25.4722C10.4568 26.2944 10.75 27.2611 10.75 28.25C10.75 29.5761 10.2232 30.8479 9.28554 31.7855C8.34785 32.7232 7.07609 33.25 5.75 33.25ZM5.75 25.75C5.25555 25.75 4.7722 25.8966 4.36108 26.1713C3.94995 26.446 3.62952 26.8365 3.4403 27.2933C3.25108 27.7501 3.20158 28.2528 3.29804 28.7377C3.3945 29.2227 3.6326 29.6681 3.98223 30.0178C4.33187 30.3674 4.77732 30.6055 5.26228 30.702C5.74723 30.7984 6.2499 30.7489 6.70671 30.5597C7.16353 30.3705 7.55397 30.0501 7.82868 29.6389C8.10338 29.2278 8.25 28.7445 8.25 28.25C8.25 27.587 7.98661 26.9511 7.51777 26.4822C7.04893 26.0134 6.41304 25.75 5.75 25.75ZM25.4722 21.1574C26.2944 21.7068 27.2611 22 28.25 22C29.5761 22 30.8479 21.4732 31.7855 20.5355C32.7232 19.5979 33.25 18.3261 33.25 17C33.25 16.0111 32.9568 15.0444 32.4074 14.2222C31.8579 13.3999 31.0771 12.759 30.1634 12.3806C29.2498 12.0022 28.2445 11.9031 27.2746 12.0961C26.3046 12.289 25.4137 12.7652 24.7145 13.4645C24.0152 14.1637 23.539 15.0546 23.3461 16.0246C23.1532 16.9945 23.2522 17.9998 23.6306 18.9134C24.009 19.8271 24.6499 20.6079 25.4722 21.1574ZM26.8611 14.9213C27.2722 14.6466 27.7556 14.5 28.25 14.5C28.913 14.5 29.5489 14.7634 30.0178 15.2322C30.4866 15.7011 30.75 16.337 30.75 17C30.75 17.4945 30.6034 17.9778 30.3287 18.3889C30.054 18.8001 29.6635 19.1205 29.2067 19.3097C28.7499 19.4989 28.2472 19.5484 27.7623 19.452C27.2773 19.3555 26.8319 19.1174 26.4822 18.7678C26.1326 18.4181 25.8945 17.9727 25.798 17.4877C25.7016 17.0028 25.7511 16.5001 25.9403 16.0433C26.1295 15.5865 26.45 15.196 26.8611 14.9213Z" fill="#614CE1"></path>
                                        </svg>
                                        We stay with you
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our relationship doesn’t end when the project is delivered. We walk alongside you, adjusting and improving as your business evolves.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7878 37.4126C20.935 37.4708 21.0919 37.5005 21.2503 37.5001C21.5322 37.4984 21.8053 37.4015 22.0253 37.2251L28.2753 32.2251C28.4226 32.1087 28.5418 31.9606 28.624 31.7918C28.7062 31.623 28.7494 31.4378 28.7503 31.2501V21.7626L33.4753 17.0501C34.7564 15.7761 35.7718 14.2605 36.4628 12.5911C37.1537 10.9217 37.5064 9.13179 37.5003 7.32508V5.00008C37.5003 4.33704 37.2369 3.70115 36.768 3.23231C36.2992 2.76347 35.6633 2.50008 35.0003 2.50008H32.6753C30.8686 2.49399 29.0786 2.84664 27.4092 3.53757C25.7398 4.22849 24.2242 5.24396 22.9503 6.52508L18.2378 11.2501H8.75026C8.56148 11.2524 8.37569 11.2975 8.20682 11.3819C8.03796 11.4664 7.89041 11.588 7.77526 11.7376L2.77526 17.9876C2.63575 18.1605 2.54483 18.3674 2.51188 18.5871C2.47892 18.8068 2.50512 19.0314 2.58776 19.2376C2.6694 19.4424 2.80375 19.6219 2.97718 19.758C3.1506 19.8941 3.35694 19.982 3.57526 20.0126L12.3253 21.2626L12.6753 18.7626L6.08776 17.8251L9.35026 13.7501H18.7503C18.9148 13.751 19.0779 13.7195 19.2301 13.6573C19.3824 13.5951 19.521 13.5034 19.6378 13.3876L24.7253 8.30008C25.7665 7.25178 27.0052 6.42036 28.3698 5.85392C29.7344 5.28748 31.1978 4.99727 32.6753 5.00008H35.0003V7.32508C35.0031 8.80257 34.7129 10.266 34.1464 11.6306C33.58 12.9952 32.7486 14.2339 31.7003 15.2751L26.6128 20.3626C26.4969 20.4794 26.4053 20.6179 26.343 20.7702C26.2808 20.9225 26.2493 21.0856 26.2503 21.2501V30.6501L22.2003 33.9126L21.2628 27.3251L18.7628 27.6751L20.0128 36.4251C20.0434 36.6434 20.1312 36.8497 20.2673 37.0232C20.4034 37.1966 20.583 37.3309 20.7878 37.4126ZM9.11037 29.115L19.1071 19.1183L20.8749 20.886L10.8781 30.8828L9.11037 29.115Z" fill="#614CE1"></path>
                                        </svg>
                                        We focus on results that matter
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        More clicks, better reach, higher sales—we make sure our work translates into real impact for your business.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-left">
                        <img src="{{ asset('assets/images/about/about-axione-solutions-1.webp')}}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts  working process area end-->


    <!-- rts counter up area start -->
    <div class="rts-counterup-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="counter-upmain-wrapper-style-one service-single">
                        <!-- single counter up area start -->
                        <div class="single-counter-up">
                            <h3 class="title"><span class="counter">150</span>+</h3>
                            <p>Projects Delivered</p>
                        </div>
                        <!-- single counter up area end -->
                        <!-- single counter up area start -->
                        <div class="single-counter-up">
                            <h3 class="title"><span class="counter">100</span>+</h3>
                            <p>Happy Clients</p>
                        </div>
                        <!-- single counter up area end -->
                        <!-- single counter up area start -->
                        <div class="single-counter-up">
                            <h3 class="title"><span class="counter">6</span>+</h3>
                            <p>Years of Experience</p>
                        </div>
                        <!-- single counter up area end -->
                        <!-- single counter up area start -->
                        <div class="single-counter-up">
                            <h3 class="title"><span class="counter">20</span>+</h3>
                            <p>Industries Served</p>
                        </div>
                        <!-- single counter up area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts counter up area end -->

    <!-- rts about area  -->
    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one-center">
                        <span class="pre">How We Work</span>
                        <h2 class="title skew-up">We like to keep  <br>things simple</h2>
                        <p>Just three easy steps to bring your ideas to life.</p>
                    </div>
                </div>
            </div>
            <div class="row mt--70">
                <div class="col-lg-12">
                    <div class="about-large-image-bg">

                    </div>
                </div>
            </div>
            <div class="row g-5 plr--60 mt-dec-working-step plr_sm--0">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single working -process area start -->
                    <div class="single-working-process">
                        <h5 class="number">01</h5>
                        <h3 class="title">Let’s Talk</h3>
                        <p class="disc">
                            We begin by understanding you—your business, your goals, and the challenges you face. It’s all about listening first, so we know exactly how to help.
                        </p>
                    </div>
                    <!-- single working -process area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single working -process area start -->
                    <div class="single-working-process">
                        <h5 class="number">02</h5>
                        <h3 class="title">We Create</h3>
                        <p class="disc">
                            Our team gets to work—designing, building, and planning strategies that fit your brand perfectly. You’ll see progress, give feedback, and stay in the loop.
                        </p>
                    </div>
                    <!-- single working -process area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single working -process area start -->
                    <div class="single-working-process">
                        <h5 class="number">03</h5>
                        <h3 class="title">Launch & Grow</h3>
                        <p class="disc">
                            Once everything’s ready, we go live together. From there, we keep optimizing, supporting, and helping your business grow step by step.
                        </p>
                    </div>
                    <!-- single working -process area end -->
                </div>
            </div>
            
        </div>
    </div>
    <!-- rts about area end -->

    <!-- blog area start -->
    <div class="rts-section-gap rts-blog-area-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one-center">
                        <span class="pre">Our Blog</span>
                        <h2 class="title skew-up">Stay updated with trends, tips, <br> and insights that keep you ahead.</h2>
                    </div>
                </div>
            </div>
            <div class="row g-48 mt--0">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area-style-one">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-1.webp')}}" alt="blog-image">
                        </a>
                        <div class="inner-content-wrapper">
                            <a href="#">
                                <h6 class="title">
                                    Why Good Design Is the First Step to Winning Customers Online?
                                </h6>
                            </a>
                            <div class="bottom-area">
                                <span class="admin">Axione Solutions</span>
                                <span class="date">• 25 Aug, 2025</span>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area-style-one">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-2.webp')}}" alt="blog-image">
                        </a>
                        <div class="inner-content-wrapper">
                            <a href="#">
                                <h6 class="title">
                                    How to Read Your Website Analytics Without Feeling Overwhelmed?
                                </h6>
                            </a>
                            <div class="bottom-area">
                                <span class="admin">Axione Solutions</span>
                                <span class="date">• 27 Aug, 2025</span>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area-style-one">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-3.webp')}}" alt="blog-image">
                        </a>
                        <div class="inner-content-wrapper">
                            <a href="#">
                                <h6 class="title">
                                    Simple Digital Marketing Habits Every Business Owner Should Try.
                                </h6>
                            </a>
                            <div class="bottom-area">
                                <span class="admin">Axione Solutions</span>
                                <span class="date">• 31 Aug, 2025</span>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>

                <div class="col-lg-12  text-center">
                    <a href="about-us.html" class="rts-btn btn-primary text-center">Read More</a>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img class="one" src="{{ asset('assets/images/testimonials/shape/download-1.png')}}" alt="shape">
            <img class="two" src="{{ asset('assets/images/testimonials/shape/download-2.png')}}" alt="shape">
            <img class="three" src="{{ asset('assets/images/testimonials/shape/download-3.png')}}" alt="shape">
        </div>
    </div>
    <!-- blog area end -->


@endsection