@extends('layouts.app')

@section('title', 'FAQS')

@section('content')

<!-- page area section -->
    <div class="contact-banner-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- banner main inner contact areas start -->
                    <div class="text-center">
                        <h1 class="title skew-up-2">FQQS</h1>
                        <div class="pagimation title skew-up-2">
                            <a href="index.html">Home</a> >
                            FQQS
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
    <!-- page area section -->
        

    <!-- faq call to action area start -->
    <div class="single-service-banner-area rts-section-gapTop">
        <!-- rts faq section area start -->
        <div class="row pt--100 pb--80 align-items-center">
            <div class="container">
                <div class="row mt--60">
                    <div class="col-lg-12">
                        <div class="accordion-faq-area-border-bottom-style pb--100 style-four">
                            <div class="accordion" id="accordionExamples">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What does Axione Solutions actually do?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                Axione Solutions is a creative digital agency that helps businesses grow online. We design visuals that reflect your brand, build modern and user-friendly websites, and run smart marketing campaigns like SEO, social media, and Google Ads to bring you more customers.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Do I need to be tech-savvy to work with you?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                Not at all. You don’t need to understand any technical terms or tools—we handle all of that for you. We simply listen to your goals, understand your challenges, and explain everything in simple language so the process stays smooth and stress-free.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Can you design a brand from scratch?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                Yes, we love doing that. Whether you’re just starting out or rebranding, we can create your logo, choose your brand colors, design your website, and build your online presence from the ground up—making sure everything looks consistent and feels uniquely yours.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How long does it take to build a website?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                It depends on the project. A small, simple website might take about 2–3 weeks, while larger websites with more pages and features can take a bit longer. We’ll always give you a clear timeline before we begin and keep you updated along the way.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Do you offer website maintenance after launch?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                Yes, we do. Launching your website is just the start. We can handle all the ongoing work like updates, security, backups, bug fixes, and improvements—so your site always stays fast, secure, and working perfectly.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Will my website work on mobiles and tablets?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                Absolutely. Every website we create is fully responsive, which means it will look great and work smoothly on any device—desktop, laptop, tablet, or mobile phone—without you needing to worry about it.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            How can SEO help my business?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                SEO (Search Engine Optimization) helps your website appear on Google when people search for what you offer. It brings you organic traffic, builds trust with customers, and reduces the need to pay for ads every time someone visits your site.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Can you manage my social media pages too?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                Yes, we can. We’ll plan your content, design posts, write captions, and even handle replies and engagement. This way, your brand stays active and consistent on social media while you focus on running your business.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Do you offer Google Ads campaigns?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                We do. If you want quick results, our team can create and manage Google Ads campaigns that target the right people at the right time—bringing more traffic, leads, and sales while staying within your budget.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Where is Axione Solutions located?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                We’re based at 227, 2nd Floor, ANTHURIUM Office Space, Sector 73, Noida, Uttar Pradesh 201301. You’re welcome to visit us by appointment, or we can meet online if that’s more convenient for you.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            How can I contact your team?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                The easiest way is through our Contact Us page. Just fill out the form and we’ll get back to you quickly. You can also email us directly at info@axionesolutions.in
 for any questions or project inquiries.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Will I get updates during the project?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                Yes, definitely. We keep you in the loop from start to finish. You’ll get regular updates, previews, and progress reports, so you always know what’s happening and can share feedback easily.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Do you provide custom packages for startups or small businesses?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamples">
                                        <div class="accordion-body">
                                            <p class="disc">
                                                Yes, we understand that startups and small businesses often work on tight budgets. We can create flexible, tailored packages that fit your needs, focus on essentials, and give you room to grow over time.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts faq section area end -->
        <div class="shape-area">
            <img src="{{ asset ('assets/images/about/s1.png')}}" alt="shape" class="one">
            <img src="{{ asset ('assets/images/about/s3.png')}}" alt="shape" class="two">
            <img src="{{ asset ('assets/images/about/s4.png')}}" alt="shape" class="three">
            <img src="{{ asset ('assets/images/about/s2.png')}}" alt="shape" class="four">    
        </div>
    </div>
    <!-- faq call to action area end -->
    


@endsection