<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')

        <div class="Covid-block" id="covid-pop">
            <div class="bg-covid">
                <span class="closebtn float-right" id="covid-pop-close"><img width="12px" height="12px"
                        src="/frontend_assets/img/close-covid-box.svg"></span>
                <span>COVID-19: We work remotely and offer our services. <a href="/contact"><b>Contact Us!</b></a>.<br>
                    <a href="/research"><b>Learn more</b></a>
                    about
                    the impact of COVID-19 on App Development Industry!</span>
            </div>
        </div>
        <div class="container py-2 d-none d-sm-none d-md-none d-xl-flex header-top justify-content-between">
            <div class="align-self-center d-flex">
                <a class="mr-0 mr-md-3 c-black d-inline-flex" href="tel:+918000161161"><img class="mr-2"
                        src="/frontend_assets/img/ind-flag.svg" alt="india"> +91 8000 161161</a>
                <a class="mr-0 mr-md-3 c-black d-inline-flex" href="tel:+13097914105"><img class="mr-2"
                        src="/frontend_assets/img/us-flag.svg" alt="usa"> +1 309 791 4105</a>
                <a class="mr-0 c-black d-inline-flex" href="tel:+442081338639"><img class="mr-2"
                        src="/frontend_assets/img/uk-flag.svg" alt="uk"> +44 20 8133 8639</a>
            </div>
            <div>
                <a class="mr-0 c-black d-inline-flex shadow-btn" href="/press-releases">Press Release</a>
                <a class="mr-2 c-black d-inline-flex shadow-btn" href="/our-portfolio">Our Fresh Work</a>
            </div>
        </div>

        <div class="cd-main-content"></div>
        <main>
            <section class="slider-sect position-relative">
                <div class="container-fluid mb-5 px-0 pt-5 pt-sm-5 pt-md-0">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="swiper-container main-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide overflow-hidden">
                                        <div class="mobile-banner-images">
                                            <div class="container">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 left-content align-self-xl-center align-self-start align-self-sm-start align-self-md-start align-self-lg-start">
                                                        <h1><span class="text-skyblue fst d-block">Mobile App</span><span
                                                                class="scd d-block">Development Company</span></h1>
                                                        <div class="d-flex bottom-desc">
                                                            <b class="align-self-center">#1</b><label
                                                                class="mb-0 bord-line align-self-center"></label>
                                                            <p class="mb-0 desc align-self-center">Ranked as <span>#1 Top
                                                                    App
                                                                    Development</span><br>Company in USA and India on
                                                                <span>Clutch</span></p>
                                                        </div>
                                                        <label class="mb-0 d-flex align-items-center read-more-btn mt-4"><a
                                                                href="/contact" class="ml-3" title="">Get A Quote <img
                                                                    class="ml-3"
                                                                    src="/frontend_assets/img/arrow-right-white.svg"
                                                                    alt="right arrow"></a></label>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                                                        <img class="img-fluid"
                                                            src="/frontend_assets/img/main-banner/mobile-app-development.png"
                                                            alt="mobile app development company">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="website-banner-images">
                                            <div class="container">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 left-content align-self-xl-center align-self-start align-self-sm-start align-self-md-start align-self-lg-start">
                                                        <h2><span class="text-pinkorange fst d-block">Web</span><span
                                                                class="scd d-block">Development
                                                                Company</span></h2>
                                                        <div class="d-flex bottom-desc">
                                                            <b class="align-self-center">#1</b><label
                                                                class="mb-0 bord-line align-self-center"></label>
                                                            <p class="mb-0 desc align-self-center">Ranked as <span>#1 Top
                                                                    Web
                                                                    Development</span><br>Company in USA and India on
                                                                <span>Clutch</span></p>
                                                        </div>
                                                        <label class="mb-0 d-flex align-items-center read-more-btn mt-4"><a
                                                                href="/contact" class="ml-3" title="">Get A Quote <img
                                                                    class="ml-3"
                                                                    src="/frontend_assets/img/arrow-right-white.svg"
                                                                    alt="right arrow"></a></label>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                                                        <img class="img-fluid"
                                                            src="/frontend_assets/img/main-banner/web-development.png"
                                                            alt="web development company">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blockchain-banner-images">
                                            <div class="container">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 left-content align-self-xl-center align-self-start align-self-sm-start align-self-md-start align-self-lg-start">
                                                        <h2><span
                                                                class="text-light-orange fst d-block">Blockchain</span><span
                                                                class="scd d-block">Development Company</span></h2>
                                                        <div class="d-flex bottom-desc">
                                                            <b class="align-self-center">#1</b><label
                                                                class="mb-0 bord-line align-self-center"></label>
                                                            <p class="mb-0 desc align-self-center">Ranked as <span>#1 Top
                                                                    Blockchain
                                                                    Development</span><br>Company in USA and India on
                                                                <span>Clutch</span></p>
                                                        </div>
                                                        <label class="mb-0 d-flex align-items-center read-more-btn mt-4"><a
                                                                href="/contact" class="ml-3" title="">Get A Quote <img
                                                                    class="ml-3"
                                                                    src="/frontend_assets/img/arrow-right-white.svg"
                                                                    alt="right arrow"></a></label>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                                                        <img class="img-fluid"
                                                            src="/frontend_assets/img/main-banner/blockchain-development.png"
                                                            alt="blockchain development company">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide overflow-hidden">
                                        <div class="mobile-banner-images metaverse-banner">
                                            <div class="container h-100">
                                                <div class="row h-100">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 left-content align-self-xl-center align-self-start align-self-sm-start align-self-md-start align-self-lg-start">
                                                        <h2><span class="fst d-block"
                                                                style="color: #4E2B78 !important">Metaverse</span><span
                                                                class="scd d-block">Development Company</span></h2>
                                                        <div class="d-flex bottom-desc">
                                                            <b class="align-self-center">#1</b><label
                                                                class="mb-0 bord-line align-self-center"></label>
                                                            <p class="mb-0 desc align-self-center">Ranked as <span>#1 Top
                                                                    Metaverse</span><br>Company in
                                                                USA and India</p>
                                                        </div>
                                                        <label class="mb-0 d-flex align-items-center read-more-btn mt-4"><a
                                                                href="/contact" class="ml-3" title="">Get A Quote <img
                                                                    class="ml-3"
                                                                    src="/frontend_assets/img/arrow-right-white.svg"
                                                                    alt="right arrow"></a></label>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center align-self-center">
                                                        <img class="img-fluid"
                                                            src="/frontend_assets/img/main-banner/metaverse-development.png"
                                                            alt="metaverse company">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="container h-100">
                                            <div class="row h-100">
                                                <div
                                                    class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 left-content align-self-xl-center align-self-start align-self-sm-start align-self-md-start align-self-lg-start">
                                                    <h2><span class="fst d-block">Artificial<br>Intelligence(AI)</span><span
                                                            class="scd d-block">Development Company</span></h2>
                                                    <div class="d-flex bottom-desc">
                                                        <b class="align-self-center">#1</b><label
                                                            class="mb-0 bord-line align-self-center"></label>
                                                        <p class="mb-0 desc align-self-center">Ranked as <span>#1 Top AI
                                                                Development</span><br>Company
                                                            in USA and India on <span>Clutch</span></p>
                                                    </div>
                                                    <label class="mb-0 d-flex align-items-center read-more-btn mt-4"><a
                                                            href="/contact" class="ml-3" title="">Get A Quote <img
                                                                class="ml-3"
                                                                src="/frontend_assets/img/arrow-right-white.svg"
                                                                alt="right arrow"></a></label>
                                                </div>
                                                <div
                                                    class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center align-self-center">
                                                    <img class="img-fluid"
                                                        src="/frontend_assets/img/main-banner/ai-development.png"
                                                        alt="ai development company">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="particles-js"></div>
            </section>



            <section class="sect-pad-tb comp-logos">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="comp-logos-swip swiper-container w-100 h-100">
                                <div class="swiper-wrapper text-center">
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/npci-hlis.png" alt="npci">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/google-hlis.png" alt="google">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/disney-hlis.png" alt="disney">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/bbc-hlis.png" alt="bbc">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/tata-motors-hlis.png" alt="tata power">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/astral-hlis.png" alt="astral">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/kantar-media-hlis.png" alt="kantar media">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/zydus-logo.png" alt="zydus">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/emaar-hlis.png" alt="emaar">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/art-of-living-hlis.png" alt="art of living">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/sbs-discovery-media-hlis.png"
                                            alt="sbs discovery media">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/ceat.png" alt="ceat">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/hitachi.png" alt="hitachi">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/dhl.png" alt="dhl">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/frontend_assets/img/viacom-media-hlis.png" alt="viacom media">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="states-sect about-sect">
                <div class="container">
                    <div class="row justify-content-end">
                        <div
                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 pr-3 pr-md-4 pr-xl-5 align-self-center mb-0 mb-md-4 mb-lg-4">
                            <h2 class="comp-nam mb-3"><span>Hyperlink</span> <span>InfoSystem</span></h2>
                            <p class="desc mb-0">Because we deliver the best & we are unbeatable.</p>
                            <p class="desc mt-4 mb-0 text-justify">Hyperlink Infosystem is a renowned <b>mobile app
                                    development company
                                    & the best IT Software Solutions provider based in New York, USA & India, established in
                                    2011. Apart
                                    from this, we also have sales offices in California, USA & Dubai,
                                    UAE.</b><br><br><b>Hyperlink
                                    InfoSystem</b> is well known to craft the most innovative & eye catchy mobile apps &
                                websites. We offer
                                a wide range of customized services in mobile apps, website development, AR-VR Development,
                                Game
                                Development, Blockchain Development and much more. Our skilled team & our products are
                                engineered to bring
                                growth to your business. We believe in delivering the services without compromising on time
                                and
                                quality.<br><br>We are proud members of <b>GESIA</b> (Gujarat Electronics & Software
                                Industries
                                Association) and we are <b>ISO 27001:2013 Certified</b> Company.</p>
                            <h2 class="h5 mt-4 mb-3">OFFICIAL PARTNER OF,</h2>
                            <ul class="row d-flex partner-imgs list-unstyled p-0 mb-0">
                                <li class="col-6 col-md-3 mb-3 mb-md-0 text-center"><img
                                        src="/frontend_assets/img/partner-salesforce.svg" class="img-fluid"
                                        alt="salesforce partner">
                                </li>
                                <li class="col-6 col-md-3 mb-3 mb-md-0 text-center"><img
                                        src="/frontend_assets/img/partner-google.svg" class="img-fluid" alt="google">
                                </li>
                                <li class="col-6 col-md-3 mb-0 mb-md-0 text-center"><img
                                        src="/frontend_assets/img/partner-oracle.svg" class="img-fluid" alt="oracle">
                                </li>
                                <li class="col-6 col-md-3 mb-0 mb-md-0 text-center"><img
                                        src="/frontend_assets/img/partner-aws.svg" class="img-fluid" alt="aws"></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="row mob-row flex-nowrap flex-sm-nowrap flex-xl-wrap">
                                <div class="col-9 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="card-box text-center m-auto bg-white">
                                        <img src="/frontend_assets/img/about/ux.png" alt="experience">
                                        <h3 class="pb-1 my-3"><span>11+</span></h3>
                                        <p class="desc mb-0">Years Experience in Mobile App Design and Development</p>
                                    </div>
                                </div>
                                <div class="col-9 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-35">
                                    <div class="card-box text-center m-auto bg-white">
                                        <img src="/frontend_assets/img/about/dating-app.png"
                                            alt="mobile app development">
                                        <h3 class="pb-1 my-3"><span>4500+</span></h3>
                                        <p class="desc mb-0">Mobile Apps<br>Developed</p>
                                    </div>
                                </div>
                                <div class="col-9 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="card-box text-center m-auto bg-white">
                                        <img src="/frontend_assets/img/about/data.png" alt="web development">
                                        <h3 class="pb-1 my-3"><span>2200+</span></h3>
                                        <p class="desc mb-0">Websites<br>Developed</p>
                                    </div>
                                </div>
                                <div class="col-9 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="card-box text-center m-auto bg-white">
                                        <img src="/frontend_assets/img/about/customer-review.png" alt="ratings">
                                        <h3 class="pb-1 my-3"><span>4.9</span></h3>
                                        <p class="desc mb-0">Ratings on<br>Clutch.co</p>
                                    </div>
                                </div>
                                <div class="col-9 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-35">
                                    <div class="card-box text-center m-auto bg-white">
                                        <img src="/frontend_assets/img/about/app-development-ab.png"
                                            alt="app downloads">
                                        <h3 class="pb-1 my-3"><span>110</span></h3>
                                        <p class="desc mb-0">Million App Downloads on App Stores (iOS + Android)</p>
                                    </div>
                                </div>
                                <div class="col-9 col-sm-12 col-md-4 col-lg-4 col-xl-4 mr-3 mr-sm-3 mr-md-0">
                                    <div class="card-box text-center m-auto bg-white">
                                        <img src="/frontend_assets/img/about/web-development.png" alt="team strength">
                                        <h3 class="pb-1 my-3"><span>1000+</span></h3>
                                        <p class="desc mb-0">Dedicated Developers & Designers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="sect-pad-tb clutch-sect d-none d-sm-none d-md-none d-lg-none d-xl-block">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 align-self-center">
                            <h2 class="main-title mb-2 mt-5 title-ranked h2">Ranked as #1</h2>
                            <p class="desc mb-0">Top App Development Company Since 2014</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-12 col-lg-4 col-xl-9 text-center align-self-center pr-3 pr-md-0">
                            <ul class="row d-flex list-unstyled clutch-imgs p-0 m-0">
                                <li class="col-12 col-md-4 col-lg-2 border-right">
                                    <div class="card-box">
                                        <img class="img-fluid" src="/frontend_assets/img/clutch-2014.svg"
                                            alt="clutch-2014">
                                    </div>
                                </li>
                                <li class="col-12 col-md-4 col-lg-2 border-right">
                                    <div class="card-box">
                                        <img class="img-fluid" src="/frontend_assets/img/clutch-2015.svg"
                                            alt="clutch-2015">
                                    </div>
                                </li>
                                <li class="col-12 col-md-4 col-lg-2 border-right">
                                    <div class="card-box">
                                        <img class="img-fluid" src="/frontend_assets/img/clutch-2016.svg"
                                            alt="clutch-2016">
                                    </div>
                                </li>
                                <li class="col-12 col-md-4 col-lg-2 border-right">
                                    <div class="card-box">
                                        <img class="img-fluid" src="/frontend_assets/img/clutch-2017.svg"
                                            alt="clutch-2017">
                                    </div>
                                </li>
                                <li class="col-12 col-md-4 col-lg-2 border-right">
                                    <div class="card-box">
                                        <img class="img-fluid" src="/frontend_assets/img/clutch-2018.svg"
                                            alt="clutch-2018">
                                    </div>
                                </li>
                                <li class="col-12 col-md-4 col-lg-2">
                                    <div class="card-box">
                                        <img class="img-fluid" src="/frontend_assets/img/clutch-2019.svg"
                                            alt="clutch-2019">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect-pad-tb d-block d-sm-block d-md-block d-lg-block d-xl-none">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-3 align-self-center">
                            <h2 class="main-title mb-2 title-ranked">Ranked as #1</h2>
                            <p class="desc mb-0">Top App Development Company Since 2014</p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-12 text-center">
                            <div class="swiper-container mob-clutch mt-4 mt-md-0">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="p-4">
                                            <img class="img-fluid" src="/frontend_assets/img/clutch-2014.svg"
                                                alt="clutch 2014">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="p-4">
                                            <img class="img-fluid" src="/frontend_assets/img/clutch-2015.svg"
                                                alt="clutch 2015">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="p-4">
                                            <img class="img-fluid" src="/frontend_assets/img/clutch-2016.svg"
                                                alt="clutch 2016">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="p-4">
                                            <img class="img-fluid" src="/frontend_assets/img/clutch-2017.svg"
                                                alt="clutch 2017">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="p-4">
                                            <img class="img-fluid" src="/frontend_assets/img/clutch-2018.svg"
                                                alt="clutch 2018">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="p-4">
                                            <img class="img-fluid" src="/frontend_assets/img/clutch-2019.svg"
                                                alt="clutch 2019">
                                        </div>
                                    </div>
                                </div>
                                <div class="mob-clutch-swiper-pagination mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="sect-pad-tb position-relative blue-grad" id="our-key-features">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2 class="main-title mb-3 mt-60 title-key-features c-white">Our Key Features</h2>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
                            <p class="c-white">Services That We Deliver Makes Us Dignified As One of The Top App Development
                                Companies.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-12">
                            <div class="mt-40 swiper-container our-key-features">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-box card-box-img-1 c-white">
                                            <div class="content d-flex flex-column">
                                                <div class="align-self-start">
                                                    <img width="50px" height="50px"
                                                        src="/frontend_assets/img/okf-client-centric-development.svg"
                                                        alt="client centric development">
                                                    <h3 class="my-3">Client Centric<br>Development</h3>
                                                </div>
                                                <p class="desc mb-0 c-white">We craft the client's needs on web, mobile, and
                                                    blockchain to tailor
                                                    the solutions and enhance growth of the businesses.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-box card-box-img-2 c-white">
                                            <div class="content d-flex flex-column">
                                                <div class="align-self-start">
                                                    <img width="50px" height="50px"
                                                        src="/frontend_assets/img/okf-agile.svg"
                                                        alt="agile development">
                                                    <h3 class="my-3">Agile<br>Development</h3>
                                                </div>
                                                <p class="desc mb-0 c-white">We follow the Agile Development process that
                                                    helps us to deliver the
                                                    project with utmost quality and solid product for reliable and scalable
                                                    business.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-box card-box-img-3 c-white">
                                            <div class="content d-flex flex-column">
                                                <div class="align-self-start">
                                                    <img width="50px" height="50px"
                                                        src="/frontend_assets/img/okf-dedicated-development-team.svg"
                                                        alt="dedicated development team">
                                                    <h3 class="my-3">Dedicated<br>Development Team</h3>
                                                </div>
                                                <p class="desc mb-0 c-white">Our skilled team leverage projects to provide
                                                    best results.The team
                                                    dedicates their every effort and does not look back until it's
                                                    accomplished.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-box card-box-img-4 c-white">
                                            <div class="content d-flex flex-column">
                                                <div class="align-self-start">
                                                    <img width="50px" height="50px"
                                                        src="/frontend_assets/img/okf-excellent-support.svg"
                                                        alt="excellent support">
                                                    <h3 class="my-3">Excellent<br>Support</h3>
                                                </div>
                                                <p class="desc mb-0 c-white">We are always there to assist our clients in
                                                    every possible way to
                                                    meet client's expectations and end needs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-box card-box-img-5 c-white">
                                            <div class="content d-flex flex-column">
                                                <div class="align-self-start">
                                                    <img width="50px" height="50px"
                                                        src="/frontend_assets/img/okf-data-backups.svg"
                                                        alt="data backups">
                                                    <h3 class="my-3">Data<br>Backups</h3>
                                                </div>
                                                <p class="desc mb-0 c-white">The backups are the best options and we
                                                    carefully maintain our
                                                    clients project backups to deal with misfortunes in the best manner.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-box card-box-img-6 c-white">
                                            <div class="content d-flex flex-column">
                                                <div class="align-self-start">
                                                    <img width="50px" height="50px"
                                                        src="/frontend_assets/img/okf-data-security.svg"
                                                        alt="data protection">
                                                    <h3 class="my-3">Data<br>Protection</h3>
                                                </div>
                                                <p class="desc mb-0 c-white">By signing an NDA, our company ensures the
                                                    utmost safety of all your
                                                    private data. We deliver best-rated products to maintain
                                                    confidentiality.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-box card-box-img-7 c-white">
                                            <div class="content d-flex flex-column">
                                                <div class="align-self-start">
                                                    <img width="50px" height="50px"
                                                        src="/frontend_assets/img/okf-qa.svg"
                                                        alt="quality deliverance">
                                                    <h3 class="my-3">Quality<br>Deliverance</h3>
                                                </div>
                                                <p class="desc mb-0 c-white">We believe in delivering quality products to
                                                    our clients by assuring
                                                    all their project specifications at the best industry competitive price.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-box card-box-img-8 c-white">
                                            <div class="content d-flex flex-column">
                                                <div class="align-self-start">
                                                    <img width="50px" height="50px"
                                                        src="/frontend_assets/img/okf-growth.svg" alt="enhancement">
                                                    <h3 class="my-3">Enhancement</h3>
                                                </div>
                                                <p class="desc mb-0 c-white">During Discovery, Designing and Development
                                                    phases, our technical
                                                    team is always there to provide suggestions and edits to improvise their
                                                    product in the best
                                                    possible manner.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="sect-pad-tb services-we-offer d-none d-sm-none d-md-none d-lg-none d-xl-block">
                <div class="text-center">
                    <h4 class="main-title mb-0 mt-60 title-services c-black">Services We Offer</h4>
                </div>
                <div class="container mt-4">
                    <div class="row content-box h-100">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                            <div class="content-right h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <img class="align-self-center mr-3"
                                            src="/frontend_assets/img/services-we-offer/mobile-icon.svg"
                                            alt="mobile app development">
                                        <h4 class="m-0">App<br>Development</h4>
                                    </div>
                                    <ul class="list-unstyled mt-30">
                                        <li><a href="android-app-development.htm"><img
                                                    src="/frontend_assets/img/services-we-offer/android.svg"
                                                    class="mr-3" width="23px" height="23px" alt="android">Android App</a>
                                        </li>
                                        <li><a href="iphone-application-development-india.htm"><img
                                                    src="/frontend_assets/img/services-we-offer/apple-icon.svg"
                                                    class="mr-3" width="23px" height="23px" alt="ios">iOS App</a></li>
                                        <li><a href="flutter-app-development.htm"><img
                                                    src="/frontend_assets/img/services-we-offer/flutter.svg"
                                                    class="mr-3" width="23px" height="23px" alt="flutter">Flutter</a></li>
                                        <li><a href="react-native-app-development.htm"><img
                                                    src="/frontend_assets/img/services-we-offer/react-native.svg"
                                                    class="mr-3" width="23px" height="23px" alt="react-native">React
                                                Native</a></li>
                                        <li><a href="kotlin-app-development.htm"><img
                                                    src="/frontend_assets/img/services-we-offer/kotlin.svg"
                                                    class="mr-3" width="23px" height="23px" alt="kotlin">Kotlin</a></li>
                                        <li><a href="ionic-app-development.htm"><img
                                                    src="/frontend_assets/img/services-we-offer/ionic.svg"
                                                    class="mr-3" width="23px" height="23px" alt="ionic  ">Ionic</a></li>
                                    </ul>
                                </div>
                                <div class="pt-1">
                                    <label
                                        class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                            href="mobile-app-development.htm" class="ml-3" title="">Read more <img
                                                class="ml-3" src="/frontend_assets/img/arrow-right-white.svg"
                                                alt="right arrow"></a></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                            <div class="content-right h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <img class="align-self-center mr-3"
                                            src="/frontend_assets/img/services-we-offer/web-development.svg"
                                            alt="web development">
                                        <h4 class="m-0">Web<br>Development</h4>
                                    </div>
                                    <ul class="list-unstyled mt-30">
                                        <li><a href="php-web-application-development.htm"><img class="mr-3" width="23px"
                                                    height="23px" src="/frontend_assets/img/services-we-offer/php.svg"
                                                    alt="php">PHP</a></li>
                                        <li><a href="wordpress-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/wordpress.svg"
                                                    alt="wordpress">WordPress</a>
                                        </li>
                                        <li><a href="drupal-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/drupal.svg"
                                                    alt="drupal">Drupal</a></li>
                                        <li><a href="cakephp-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/cakephp.svg"
                                                    alt="cakephp">CakePHP</a></li>
                                        <li><a href="laravel-development.htm"><img class="mr-3" width="23px" height="23px"
                                                    src="/frontend_assets/img/services-we-offer/laravel.svg"
                                                    alt="laravel">Laravel</a></li>
                                    </ul>
                                </div>
                                <div class="pt-1">
                                    <label
                                        class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                            href="web-development" class="ml-3" title="">Read more <img class="ml-3"
                                                src="/frontend_assets/img/arrow-right-white.svg"
                                                alt="right arrow"></a></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                            <div class="content-right h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <img class="align-self-center mr-3"
                                            src="/frontend_assets/img/services-we-offer/ecommerce-development.svg"
                                            alt="ecommerce development">
                                        <h4 class="m-0">Ecommerce<br>Development</h4>
                                    </div>
                                    <ul class="list-unstyled mt-30">
                                        <li><a href="magento-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/magento.svg"
                                                    alt="magento">Magento</a></li>
                                        <li><a href="bigcommerce.htm"><img class="mr-3" width="23px" height="23px"
                                                    src="/frontend_assets/img/services-we-offer/bigcommerce.svg"
                                                    alt="bigcommerce">Bigcommerce</a></li>
                                        <li><a href="ubercart-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/ubercart.svg"
                                                    alt="ubercart">Ubercart</a></li>
                                        <li><a href="prestashop.htm"><img class="mr-3" width="23px" height="23px"
                                                    src="/frontend_assets/img/services-we-offer/prestashop.svg"
                                                    alt="prestashop">Prestashop</a></li>
                                        <li><a href="virtuemart-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/virtuemart.svg"
                                                    alt="virtuemart">Virtuemart</a></li>
                                    </ul>
                                </div>
                                <div class="pt-1">
                                    <label
                                        class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                            href="ecommerce-development/default.htm" class="ml-3" title="">Read more <img
                                                class="ml-3" src="/frontend_assets/img/arrow-right-white.svg"
                                                alt="right arrow"></a></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                            <div class="content-right h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <img class="align-self-center mr-3"
                                            src="/frontend_assets/img/services-we-offer/blockchain-development.svg"
                                            alt="blockchain development">
                                        <h4 class="m-0">Blockchain<br>Development</h4>
                                    </div>
                                    <ul class="list-unstyled mt-30">
                                        <li><a href="ethereum-app-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/ethereum.svg"
                                                    alt="ethereum">Ethereum</a></li>
                                        <li><a href="hyperledger-blockchain-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/hyperledger.svg"
                                                    alt="hyperledger">Hyperledger</a></li>
                                        <li><a href="smart-contracts-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/smart-contract.svg"
                                                    alt="smart contract">Smart
                                                Contracts</a></li>
                                        <li><a href="private-blockchain-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/private-blockchain.svg"
                                                    alt="private blockchain">Private Blockchains</a></li>
                                        <li><a href="nft-marketplace-development-company/default.htm"><img class="mr-3"
                                                    width="23px" height="23px"
                                                    src="/frontend_assets/img/services-we-offer/nft-marketplace.svg"
                                                    alt="nft marketplace">NFT Marketplace</a></li>
                                    </ul>
                                </div>
                                <div class="pt-1">
                                    <label
                                        class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                            href="blockchain-development.htm" class="ml-3" title="">Read more <img
                                                class="ml-3" src="/frontend_assets/img/arrow-right-white.svg"
                                                alt="right arrow"></a></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                            <div class="content-right h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <img class="align-self-center mr-3"
                                            src="/frontend_assets/img/services-we-offer/game-development.svg"
                                            alt="game development">
                                        <h4 class="m-0">Game<br>Development</h4>
                                    </div>
                                    <ul class="list-unstyled mt-30">
                                        <li><a href="unity3d-game-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/unity-3d.svg"
                                                    alt="unity 3d">Unity 3d</a></li>
                                        <li><a href="augmented-reality-app-development-company.htm"><img class="mr-3"
                                                    width="23px" height="23px"
                                                    src="/frontend_assets/img/services-we-offer/augmented-reality.svg"
                                                    alt="augmented reality">Augmented Reality</a></li>
                                        <li><a
                                                href="virtual-reality-mobile-game-application-development-company-oculus-vr.htm"><img
                                                    class="mr-3" width="23px" height="23px"
                                                    src="/frontend_assets/img/services-we-offer/virtual-reality-v2.svg"
                                                    alt="virtual reality">Virtual Reality</a></li>
                                        <li><a href="casual-game-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/casual-games.svg"
                                                    alt="casual games">Casual
                                                Games</a></li>
                                        <li><a href="metaverse-development-company/default.htm"><img class="mr-3"
                                                    width="23px" height="23px"
                                                    src="/frontend_assets/img/services-we-offer/metaverse-new.svg"
                                                    alt="metaverse">Metaverse</a></li>
                                    </ul>
                                </div>
                                <div class="pt-1">
                                    <label
                                        class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                            href="game-development-company/default.htm" class="ml-3" title="">Read more <img
                                                class="ml-3" src="/frontend_assets/img/arrow-right-white.svg"
                                                alt="right arrow"></a></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                            <div class="content-right h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <img class="align-self-center mr-3"
                                            src="/frontend_assets/img/services-we-offer/salesforce-development.svg"
                                            alt="salesforce solutions">
                                        <h4 class="m-0">Salesforce<br>Solutions</h4>
                                    </div>
                                    <ul class="list-unstyled mt-30">
                                        <li><svg class="mr-2" width="23px" height="23px" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -38 256 256"
                                                version="1.1" preserveAspectRatio="xMidYMid">
                                                <g>
                                                    <path
                                                        d="M106.553203,159.610976 C114.801129,168.204994 126.284107,173.534815 138.983873,173.534815 C155.865892,173.534815 170.594851,164.121105 178.438396,150.146262 C185.254593,153.191874 192.799405,154.885905 200.737669,154.885905 C231.186506,154.885905 255.871995,129.985475 255.871995,99.2706935 C255.871995,68.5522694 231.186506,43.651839 200.737669,43.651839 C197.021731,43.651839 193.389583,44.0234329 189.877657,44.7338328 C182.970383,32.4129469 169.807947,24.0885163 154.700107,24.0885163 C148.375726,24.0885163 142.393793,25.5493901 137.067615,28.1469039 C130.065621,11.6765534 113.751923,0.127999726 94.7387049,0.127999726 C74.9385822,0.127999726 58.0638501,12.6565411 51.5864595,30.2271008 C48.7557888,29.6259931 45.8231119,29.3126885 42.8139304,29.3126885 C19.23958,29.3126885 0.127998772,48.6209959 0.127998772,72.4430755 C0.127998772,88.4070383 8.71473094,102.34545 21.4727861,109.802829 C18.8461277,115.846693 17.3852539,122.517167 17.3852539,129.53009 C17.3852539,156.926028 39.6262381,179.134225 67.0586069,179.134225 C83.1646497,179.134225 97.4782987,171.476477 106.553203,159.610976"
                                                        fill="#00A1E0"
                                                        transform="translate(127.999997, 89.631112) scale(1, -1) translate(-127.999997, -89.631112) " />
                                                    <path
                                                        d="M37.1700744,75.3309413 C37.009779,74.9119875 37.2283636,74.8245536 37.2793667,74.7516921 C37.7602528,74.4019567 38.2484251,74.1505844 38.7402405,73.8700675 C41.3486835,72.4856983 43.8114035,72.0813168 46.3870588,72.0813168 C51.6330895,72.0813168 54.8900002,74.8719136 54.8900002,79.3638274 L54.8900002,79.4512613 C54.8900002,83.6043689 51.2141357,85.1126027 47.7641419,86.2018827 L47.3160434,86.3476058 C44.7148866,87.1927996 42.4707512,87.921415 42.4707512,89.6336611 L42.4707512,89.724738 C42.4707512,91.1892549 43.7822589,92.2676057 45.8150958,92.2676057 C48.0738034,92.2676057 50.755108,91.5171318 52.4819264,90.5626457 C52.4819264,90.5626457 52.9883141,90.2347688 53.174111,90.7265842 C53.2761172,90.9888857 54.1504556,93.3423133 54.2415326,93.5973287 C54.3398956,93.8742026 54.1650279,94.0782149 53.9865172,94.1875072 C52.0156126,95.3860795 49.2905911,96.2057718 46.4708496,96.2057718 L45.9462465,96.2021287 C41.1446712,96.2021287 37.7930405,93.3022395 37.7930405,89.1454888 L37.7930405,89.058055 C37.7930405,84.6754335 41.4907635,83.2546335 44.9553296,82.2637166 L45.5127204,82.092492 C48.0373727,81.3165166 50.2122895,80.6498336 50.2122895,78.872012 L50.2122895,78.7845782 C50.2122895,77.1597659 48.7987757,75.9502644 46.5182096,75.9502644 C45.6329419,75.9502644 42.8095574,75.9684798 39.760302,77.8956674 C39.3923513,78.110609 39.1774097,78.2672613 38.8932497,78.4384859 C38.7438836,78.5332059 38.3686467,78.6971444 38.2047082,78.2016859 L37.1700744,75.3309413 L37.1700744,75.3309413 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(46.001138, 84.143544) scale(1, -1) translate(-46.001138, -84.143544) " />
                                                    <path
                                                        d="M113.969779,75.3309413 C113.809484,74.9119875 114.028068,74.8245536 114.079072,74.7516921 C114.559958,74.4019567 115.04813,74.1505844 115.539945,73.8700675 C118.148388,72.4856983 120.611108,72.0813168 123.186764,72.0813168 C128.432794,72.0813168 131.689705,74.8719136 131.689705,79.3638274 L131.689705,79.4512613 C131.689705,83.6043689 128.013841,85.1126027 124.563847,86.2018827 L124.115748,86.3476058 C121.514591,87.1927996 119.270456,87.921415 119.270456,89.6336611 L119.270456,89.724738 C119.270456,91.1892549 120.581964,92.2676057 122.614801,92.2676057 C124.873508,92.2676057 127.554813,91.5171318 129.281631,90.5626457 C129.281631,90.5626457 129.788019,90.2347688 129.973816,90.7265842 C130.075822,90.9888857 130.95016,93.3423133 131.041237,93.5973287 C131.1396,93.8742026 130.964733,94.0782149 130.786222,94.1875072 C128.815317,95.3860795 126.090296,96.2057718 123.270554,96.2057718 L122.745951,96.2021287 C117.944376,96.2021287 114.592745,93.3022395 114.592745,89.1454888 L114.592745,89.058055 C114.592745,84.6754335 118.290468,83.2546335 121.755034,82.2637166 L122.312425,82.092492 C124.837077,81.3165166 127.015637,80.6498336 127.015637,78.872012 L127.015637,78.7845782 C127.015637,77.1597659 125.598481,75.9502644 123.317914,75.9502644 C122.432647,75.9502644 119.609262,75.9684798 116.560007,77.8956674 C116.192056,78.110609 115.973471,78.2599751 115.696598,78.4384859 C115.601878,78.5004182 115.157422,78.6716428 115.004413,78.2016859 L113.969779,75.3309413 L113.969779,75.3309413 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(122.800843, 84.143544) scale(1, -1) translate(-122.800843, -84.143544) " />
                                                    <path
                                                        d="M166.398769,84.1136744 C166.398769,81.5744499 165.925169,79.5744007 164.992541,78.1608868 C164.070843,76.7619453 162.675544,76.08069 160.730141,76.08069 C158.781095,76.08069 157.393083,76.7583022 156.485956,78.1608868 C155.567901,79.5707576 155.101587,81.5744499 155.101587,84.1136744 C155.101587,86.6492559 155.567901,88.6456621 156.485956,90.0446036 C157.393083,91.4289728 158.781095,92.102942 160.730141,92.102942 C162.675544,92.102942 164.070843,91.4289728 164.996184,90.0446036 C165.925169,88.6456621 166.398769,86.6492559 166.398769,84.1136744 M170.777747,88.8205297 C170.347864,90.2741174 169.677538,91.5564805 168.784984,92.623902 C167.89243,93.6949666 166.763076,94.5547327 165.422424,95.181342 C164.085415,95.8043081 162.504319,96.1212558 160.730141,96.1212558 C158.95232,96.1212558 157.371224,95.8043081 156.034215,95.181342 C154.693563,94.5547327 153.564209,93.6949666 152.668012,92.623902 C151.779101,91.5528374 151.108775,90.2704743 150.675249,88.8205297 C150.249009,87.3742282 150.034067,85.7931329 150.034067,84.1136744 C150.034067,82.434216 150.249009,80.8494776 150.675249,79.4068191 C151.108775,77.9568745 151.775458,76.6745115 152.671655,75.6034469 C153.564209,74.5323823 154.697206,73.6762592 156.034215,73.0678654 C157.374867,72.4594715 158.95232,72.14981 160.730141,72.14981 C162.504319,72.14981 164.081772,72.4594715 165.422424,73.0678654 C166.759433,73.6762592 167.89243,74.5323823 168.784984,75.6034469 C169.677538,76.6708684 170.347864,77.9532315 170.777747,79.4068191 C171.20763,80.8531206 171.422572,82.4378591 171.422572,84.1136744 C171.422572,85.7894898 171.20763,87.3742282 170.777747,88.8205297"
                                                        fill="#FFFFFF"
                                                        transform="translate(160.728320, 84.135533) scale(1, -1) translate(-160.728320, -84.135533) " />
                                                    <path
                                                        d="M206.737482,76.7251427 C206.591759,77.1513827 206.180091,76.9910873 206.180091,76.9910873 C205.542553,76.7470012 204.864941,76.5211304 204.143612,76.408195 C203.411353,76.2952596 202.606233,76.2369704 201.742824,76.2369704 C199.622553,76.2369704 197.939452,76.8672227 196.733593,78.113155 C195.524092,79.3590873 194.846479,81.3737088 194.853766,84.0987303 C194.861052,86.5796656 195.458516,88.444921 196.533224,89.8657209 C197.600645,91.2792348 199.225458,92.0042071 201.393088,92.0042071 C203.200055,92.0042071 204.577138,91.7965517 206.019796,91.3411671 C206.019796,91.3411671 206.365888,91.1918009 206.529827,91.6435424 C206.91235,92.7073209 207.19651,93.468724 207.604535,94.6381516 C207.721113,94.9696716 207.436953,95.1117516 207.334947,95.1518255 C206.766627,95.3740532 205.425975,95.7347178 204.413199,95.887727 C203.465999,96.0334501 202.358504,96.1099547 201.127144,96.1099547 C199.28739,96.1099547 197.648005,95.7966501 196.245421,95.1700409 C194.846479,94.5470747 193.658836,93.6873086 192.718922,92.616244 C191.779009,91.5451794 191.064966,90.2628163 190.587723,88.8128717 C190.114123,87.3665702 189.873679,85.7781887 189.873679,84.0987303 C189.873679,80.4665826 190.853667,77.5302627 192.788141,75.3808473 C194.726258,73.2241458 197.637076,72.1275797 201.433162,72.1275797 C203.677298,72.1275797 205.979722,72.5829643 207.633679,73.2350751 C207.633679,73.2350751 207.950627,73.3880843 207.81219,73.756035 L206.737482,76.7251427 L206.737482,76.7251427 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(198.860433, 84.118767) scale(1, -1) translate(-198.860433, -84.118767) " />
                                                    <path
                                                        d="M214.399204,86.5520198 C214.606859,87.9618906 214.996668,89.1349613 215.597776,90.0493736 C216.504902,91.4373859 217.889271,92.198789 219.834675,92.198789 C221.780078,92.198789 223.066084,91.4337428 223.987782,90.0493736 C224.599819,89.1349613 224.865764,87.9108875 224.971413,86.5520198 L214.399204,86.5520198 L214.399204,86.5520198 Z M229.142736,89.6522783 C228.771142,91.0548629 227.849444,92.4720198 227.244693,93.1204874 C226.290207,94.1478351 225.357579,94.8655213 224.432238,95.2662597 C223.222736,95.7835766 221.772791,96.1260258 220.18441,96.1260258 C218.333727,96.1260258 216.654268,95.8163643 215.291758,95.1751828 C213.925604,94.5340013 212.778035,93.6596628 211.878195,92.5703828 C210.978355,91.4847459 210.300742,90.1914536 209.870859,88.7232937 C209.437333,87.2624198 209.218749,85.6703952 209.218749,83.9909368 C209.218749,82.2823338 209.444619,80.6903092 209.892718,79.25858 C210.344459,77.8159215 211.065789,76.5444877 212.042133,75.4916385 C213.014835,74.4315031 214.268053,73.6008816 215.769001,73.0216324 C217.259019,72.4460262 219.069628,72.1472939 221.149825,72.150937 C225.430441,72.1655093 227.685505,73.1199955 228.61449,73.6336693 C228.778428,73.7247462 228.935081,73.8850416 228.738354,74.3440693 L227.769296,77.0581615 C227.623573,77.4625431 227.211905,77.3131769 227.211905,77.3131769 C226.15177,76.9197246 224.643536,76.2129677 221.127967,76.2202539 C218.829185,76.2238969 217.124225,76.9015092 216.056804,77.9616446 C214.960238,79.0472815 214.424705,80.6429492 214.329985,82.8943707 L229.153665,82.8797984 C229.153665,82.8797984 229.543474,82.8870845 229.583548,83.2659645 C229.598121,83.4262599 230.093579,86.3115768 229.142736,89.6522783 L229.142736,89.6522783 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(219.472103, 84.138465) scale(1, -1) translate(-219.472103, -84.138465) " />
                                                    <path
                                                        d="M95.6829901,86.5520198 C95.8942885,87.9618906 96.2804547,89.1349613 96.8815624,90.0493736 C97.7886885,91.4373859 99.1730577,92.198789 101.118461,92.198789 C103.063864,92.198789 104.34987,91.4337428 105.275211,90.0493736 C105.883605,89.1349613 106.14955,87.9108875 106.255199,86.5520198 L95.6829901,86.5520198 L95.6829901,86.5520198 Z M110.422879,89.6522783 C110.051285,91.0548629 109.13323,92.4720198 108.528479,93.1204874 C107.573993,94.1478351 106.641365,94.8655213 105.716024,95.2662597 C104.506522,95.7835766 103.056578,96.1260258 101.468196,96.1260258 C99.6211562,96.1260258 97.9380547,95.8163643 96.5755439,95.1751828 C95.2093901,94.5340013 94.0618209,93.6596628 93.1619809,92.5703828 C92.2621409,91.4847459 91.5845286,90.1914536 91.1546455,88.7232937 C90.7247625,87.2624198 90.5025348,85.6703952 90.5025348,83.9909368 C90.5025348,82.2823338 90.7284055,80.6903092 91.176504,79.25858 C91.6282455,77.8159215 92.3495747,76.5444877 93.3259193,75.4916385 C94.2986209,74.4315031 95.5518393,73.6008816 97.052787,73.0216324 C98.5428054,72.4460262 100.353415,72.1472939 102.433612,72.150937 C106.714227,72.1655093 108.969291,73.1199955 109.898276,73.6336693 C110.062214,73.7247462 110.218867,73.8850416 110.022141,74.3440693 L109.056725,77.0581615 C108.907359,77.4625431 108.495691,77.3131769 108.495691,77.3131769 C107.435556,76.9197246 105.930965,76.2129677 102.40811,76.2202539 C100.112972,76.2238969 98.4080116,76.9015092 97.3405901,77.9616446 C96.2440239,79.0472815 95.7084916,80.6429492 95.6137716,82.8943707 L110.437451,82.8797984 C110.437451,82.8797984 110.827261,82.8870845 110.867334,83.2659645 C110.881907,83.4262599 111.377365,86.3115768 110.422879,89.6522783 L110.422879,89.6522783 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(100.755643, 84.138465) scale(1, -1) translate(-100.755643, -84.138465) " />
                                                    <path
                                                        d="M63.6417638,76.8187739 C63.0625146,77.2814447 62.9823669,77.3980231 62.7856408,77.6967554 C62.4941946,78.15214 62.3448285,78.8006077 62.3448285,79.6239431 C62.3448285,80.9281646 62.7747115,81.8644354 63.6672654,82.4946877 C63.6563361,82.4910446 64.9423423,83.6058261 67.9660961,83.5657523 C70.0900099,83.5366076 71.9880529,83.223303 71.9880529,83.223303 L71.9880529,76.4836108 L71.991696,76.4836108 C71.991696,76.4836108 70.1082253,76.0792293 67.9879545,75.9517216 C64.9714869,75.7695678 63.6308346,76.822417 63.6417638,76.8187739 M69.5399053,87.2343307 C68.9387976,87.2780476 68.1591792,87.3035491 67.2265515,87.3035491 C65.9551176,87.3035491 64.7274007,87.1432537 63.5761885,86.8335922 C62.41769,86.5239307 61.37577,86.0394014 60.4795731,85.3982199 C59.5797331,84.7533953 58.8547608,83.9300599 58.3301578,82.9537153 C57.8055547,81.9773707 57.5396101,80.8261584 57.5396101,79.5365092 C57.5396101,78.2250016 57.7654809,77.0847185 58.2172224,76.1520908 C58.6689639,75.2158201 59.3210747,74.4362016 60.1516962,73.8350939 C60.9750316,73.2339863 61.99145,72.793174 63.1718069,72.5272294 C64.3339484,72.2612847 65.6527423,72.1264909 67.0954007,72.1264909 C68.6145638,72.1264909 70.1300837,72.2503555 71.5982437,72.5017278 C73.0518314,72.749457 74.836939,73.1101217 75.3323975,73.223057 C75.8242129,73.3396355 76.3706744,73.4890016 76.3706744,73.4890016 C76.7386252,73.5800786 76.7094806,73.9735309 76.7094806,73.9735309 L76.7021944,87.5294199 C76.7021944,90.5021706 75.9080036,92.7062321 74.3451237,94.0723859 C72.7895298,95.4348967 70.4980345,96.1234382 67.536213,96.1234382 C66.4250746,96.1234382 64.6363238,95.970429 63.5652592,95.7554874 C63.5652592,95.7554874 60.3265639,95.1288782 58.9931978,94.0869582 C58.9931978,94.0869582 58.7017516,93.9048044 58.862047,93.4967798 L59.9112531,90.6770383 C60.0424039,90.3127306 60.3957824,90.4365952 60.3957824,90.4365952 C60.3957824,90.4365952 60.5087177,90.4803121 60.6398685,90.5568168 C63.4923977,92.1087675 67.0990438,92.0614075 67.0990438,92.0614075 C68.7019976,92.0614075 69.9333576,91.7408167 70.7639791,91.1032783 C71.5727422,90.4839552 71.9844099,89.5476845 71.9844099,87.5731368 L71.9844099,86.9465276 C70.709333,87.1286814 69.5399053,87.2343307 69.5399053,87.2343307"
                                                        fill="#FFFFFF"
                                                        transform="translate(67.124818, 84.124965) scale(1, -1) translate(-67.124818, -84.124965) " />
                                                    <path
                                                        d="M189.099133,94.6589745 C189.212069,94.9941376 188.975269,95.1544329 188.876906,95.1908637 C188.625533,95.2892268 187.365029,95.5551714 186.392327,95.6171037 C184.530715,95.7300391 183.496081,95.4167345 182.57074,95.0014237 C181.652684,94.586113 180.632623,93.9157868 180.064303,93.1543837 L180.064303,94.9577068 C180.064303,95.2090791 179.885792,95.4094483 179.638063,95.4094483 L175.838334,95.4094483 C175.590604,95.4094483 175.412094,95.2090791 175.412094,94.9577068 L175.412094,72.8478733 C175.412094,72.6001441 175.616106,72.3961318 175.863835,72.3961318 L179.758284,72.3961318 C180.006014,72.3961318 180.206383,72.6001441 180.206383,72.8478733 L180.206383,83.8936824 C180.206383,85.3764146 180.370321,86.8555038 180.698198,87.7844884 C181.018789,88.7025438 181.455958,89.4384453 181.995134,89.9666915 C182.537952,90.4912946 183.153632,90.8592453 183.827601,91.0669007 C184.516143,91.2781992 185.277546,91.3474176 185.816721,91.3474176 C186.592697,91.3474176 187.445177,91.1470484 187.445177,91.1470484 C187.729337,91.1142607 187.889632,91.2891284 187.984352,91.5477868 C188.239367,92.2253991 188.960697,94.254593 189.099133,94.6589745"
                                                        fill="#FFFFFF"
                                                        transform="translate(182.270544, 84.018248) scale(1, -1) translate(-182.270544, -84.018248) " />
                                                    <path
                                                        d="M152.543767,105.761574 C152.070167,105.907297 151.640284,106.00566 151.07925,106.111309 C150.51093,106.213316 149.833318,106.264319 149.064629,106.264319 C146.383324,106.264319 144.270339,105.506559 142.787607,104.012897 C141.312161,102.526522 140.310315,100.264171 139.80757,97.2877773 L139.625416,96.2859312 L136.259213,96.2859312 C136.259213,96.2859312 135.851189,96.3005035 135.763755,95.8560481 L135.21365,92.770362 C135.173577,92.4789159 135.301084,92.2931189 135.694537,92.2931189 L138.969663,92.2931189 L135.647177,73.7425715 C135.388518,72.24891 135.089786,71.0211931 134.758266,70.0885655 C134.434032,69.1705101 134.117084,68.4819686 133.723632,67.9792239 C133.344752,67.4983378 132.98773,67.1413163 132.368407,66.9336609 C131.858377,66.7624363 131.268198,66.6822886 130.623374,66.6822886 C130.266352,66.6822886 129.789109,66.7405778 129.43573,66.8134393 C129.085995,66.8826578 128.900198,66.9591624 128.634254,67.0720978 C128.634254,67.0720978 128.251731,67.2178209 128.098721,66.8352978 C127.9785,66.5183501 127.104161,64.1175625 126.998512,63.8224732 C126.896506,63.527384 127.042229,63.2978702 127.228026,63.2286517 C127.665195,63.0756425 127.989429,62.9736363 128.583251,62.8315563 C129.406586,62.6384733 130.102414,62.627544 130.754524,62.627544 C132.117035,62.627544 133.362967,62.8206271 134.393958,63.1922209 C135.428592,63.5674579 136.332075,64.2195686 137.133552,65.1011932 C137.996961,66.0556794 138.53978,67.0538824 139.057096,68.4200362 C139.57077,69.7679747 140.011583,71.44379 140.361318,73.3964792 L143.702019,92.2931189 L148.583742,92.2931189 C148.583742,92.2931189 148.99541,92.2785466 149.079201,92.7266451 L149.632949,95.8086881 C149.669379,96.1037773 149.545515,96.2859312 149.148419,96.2859312 L144.408776,96.2859312 C144.434278,96.3915804 144.649219,98.0601096 145.192038,99.6302757 C145.425195,100.296959 145.862364,100.839777 146.230315,101.211371 C146.594623,101.575679 147.013576,101.834337 147.472604,101.983703 C147.942561,102.136713 148.478093,102.209574 149.064629,102.209574 C149.509084,102.209574 149.949896,102.158571 150.281416,102.089353 C150.740444,101.99099 150.918955,101.939986 151.039176,101.903556 C151.523706,101.757833 151.589281,101.899913 151.684001,102.13307 L152.816998,105.244257 C152.933576,105.57942 152.645773,105.7215 152.543767,105.761574"
                                                        fill="#FFFFFF"
                                                        transform="translate(139.904621, 84.445931) scale(1, -1) translate(-139.904621, -84.445931) " />
                                                    <path
                                                        d="M86.3217408,63.553237 C86.3217408,63.3055078 86.14323,63.1051385 85.8955008,63.1051385 L81.9646209,63.1051385 C81.7168916,63.1051385 81.542024,63.3055078 81.542024,63.553237 L81.542024,95.1897165 C81.542024,95.4374457 81.7168916,95.6378149 81.9646209,95.6378149 L85.8955008,95.6378149 C86.14323,95.6378149 86.3217408,95.4374457 86.3217408,95.1897165 L86.3217408,63.553237 L86.3217408,63.553237 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(83.931882, 79.371477) scale(1, -1) translate(-83.931882, -79.371477) " />
                                                </g>
                                            </svg><a href="salesforce-development.htm">Salesforce Development</a></li>
                                        <li><svg class="mr-2" width="23px" height="23px" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -38 256 256"
                                                version="1.1" preserveAspectRatio="xMidYMid">
                                                <g>
                                                    <path
                                                        d="M106.553203,159.610976 C114.801129,168.204994 126.284107,173.534815 138.983873,173.534815 C155.865892,173.534815 170.594851,164.121105 178.438396,150.146262 C185.254593,153.191874 192.799405,154.885905 200.737669,154.885905 C231.186506,154.885905 255.871995,129.985475 255.871995,99.2706935 C255.871995,68.5522694 231.186506,43.651839 200.737669,43.651839 C197.021731,43.651839 193.389583,44.0234329 189.877657,44.7338328 C182.970383,32.4129469 169.807947,24.0885163 154.700107,24.0885163 C148.375726,24.0885163 142.393793,25.5493901 137.067615,28.1469039 C130.065621,11.6765534 113.751923,0.127999726 94.7387049,0.127999726 C74.9385822,0.127999726 58.0638501,12.6565411 51.5864595,30.2271008 C48.7557888,29.6259931 45.8231119,29.3126885 42.8139304,29.3126885 C19.23958,29.3126885 0.127998772,48.6209959 0.127998772,72.4430755 C0.127998772,88.4070383 8.71473094,102.34545 21.4727861,109.802829 C18.8461277,115.846693 17.3852539,122.517167 17.3852539,129.53009 C17.3852539,156.926028 39.6262381,179.134225 67.0586069,179.134225 C83.1646497,179.134225 97.4782987,171.476477 106.553203,159.610976"
                                                        fill="#00A1E0"
                                                        transform="translate(127.999997, 89.631112) scale(1, -1) translate(-127.999997, -89.631112) " />
                                                    <path
                                                        d="M37.1700744,75.3309413 C37.009779,74.9119875 37.2283636,74.8245536 37.2793667,74.7516921 C37.7602528,74.4019567 38.2484251,74.1505844 38.7402405,73.8700675 C41.3486835,72.4856983 43.8114035,72.0813168 46.3870588,72.0813168 C51.6330895,72.0813168 54.8900002,74.8719136 54.8900002,79.3638274 L54.8900002,79.4512613 C54.8900002,83.6043689 51.2141357,85.1126027 47.7641419,86.2018827 L47.3160434,86.3476058 C44.7148866,87.1927996 42.4707512,87.921415 42.4707512,89.6336611 L42.4707512,89.724738 C42.4707512,91.1892549 43.7822589,92.2676057 45.8150958,92.2676057 C48.0738034,92.2676057 50.755108,91.5171318 52.4819264,90.5626457 C52.4819264,90.5626457 52.9883141,90.2347688 53.174111,90.7265842 C53.2761172,90.9888857 54.1504556,93.3423133 54.2415326,93.5973287 C54.3398956,93.8742026 54.1650279,94.0782149 53.9865172,94.1875072 C52.0156126,95.3860795 49.2905911,96.2057718 46.4708496,96.2057718 L45.9462465,96.2021287 C41.1446712,96.2021287 37.7930405,93.3022395 37.7930405,89.1454888 L37.7930405,89.058055 C37.7930405,84.6754335 41.4907635,83.2546335 44.9553296,82.2637166 L45.5127204,82.092492 C48.0373727,81.3165166 50.2122895,80.6498336 50.2122895,78.872012 L50.2122895,78.7845782 C50.2122895,77.1597659 48.7987757,75.9502644 46.5182096,75.9502644 C45.6329419,75.9502644 42.8095574,75.9684798 39.760302,77.8956674 C39.3923513,78.110609 39.1774097,78.2672613 38.8932497,78.4384859 C38.7438836,78.5332059 38.3686467,78.6971444 38.2047082,78.2016859 L37.1700744,75.3309413 L37.1700744,75.3309413 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(46.001138, 84.143544) scale(1, -1) translate(-46.001138, -84.143544) " />
                                                    <path
                                                        d="M113.969779,75.3309413 C113.809484,74.9119875 114.028068,74.8245536 114.079072,74.7516921 C114.559958,74.4019567 115.04813,74.1505844 115.539945,73.8700675 C118.148388,72.4856983 120.611108,72.0813168 123.186764,72.0813168 C128.432794,72.0813168 131.689705,74.8719136 131.689705,79.3638274 L131.689705,79.4512613 C131.689705,83.6043689 128.013841,85.1126027 124.563847,86.2018827 L124.115748,86.3476058 C121.514591,87.1927996 119.270456,87.921415 119.270456,89.6336611 L119.270456,89.724738 C119.270456,91.1892549 120.581964,92.2676057 122.614801,92.2676057 C124.873508,92.2676057 127.554813,91.5171318 129.281631,90.5626457 C129.281631,90.5626457 129.788019,90.2347688 129.973816,90.7265842 C130.075822,90.9888857 130.95016,93.3423133 131.041237,93.5973287 C131.1396,93.8742026 130.964733,94.0782149 130.786222,94.1875072 C128.815317,95.3860795 126.090296,96.2057718 123.270554,96.2057718 L122.745951,96.2021287 C117.944376,96.2021287 114.592745,93.3022395 114.592745,89.1454888 L114.592745,89.058055 C114.592745,84.6754335 118.290468,83.2546335 121.755034,82.2637166 L122.312425,82.092492 C124.837077,81.3165166 127.015637,80.6498336 127.015637,78.872012 L127.015637,78.7845782 C127.015637,77.1597659 125.598481,75.9502644 123.317914,75.9502644 C122.432647,75.9502644 119.609262,75.9684798 116.560007,77.8956674 C116.192056,78.110609 115.973471,78.2599751 115.696598,78.4384859 C115.601878,78.5004182 115.157422,78.6716428 115.004413,78.2016859 L113.969779,75.3309413 L113.969779,75.3309413 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(122.800843, 84.143544) scale(1, -1) translate(-122.800843, -84.143544) " />
                                                    <path
                                                        d="M166.398769,84.1136744 C166.398769,81.5744499 165.925169,79.5744007 164.992541,78.1608868 C164.070843,76.7619453 162.675544,76.08069 160.730141,76.08069 C158.781095,76.08069 157.393083,76.7583022 156.485956,78.1608868 C155.567901,79.5707576 155.101587,81.5744499 155.101587,84.1136744 C155.101587,86.6492559 155.567901,88.6456621 156.485956,90.0446036 C157.393083,91.4289728 158.781095,92.102942 160.730141,92.102942 C162.675544,92.102942 164.070843,91.4289728 164.996184,90.0446036 C165.925169,88.6456621 166.398769,86.6492559 166.398769,84.1136744 M170.777747,88.8205297 C170.347864,90.2741174 169.677538,91.5564805 168.784984,92.623902 C167.89243,93.6949666 166.763076,94.5547327 165.422424,95.181342 C164.085415,95.8043081 162.504319,96.1212558 160.730141,96.1212558 C158.95232,96.1212558 157.371224,95.8043081 156.034215,95.181342 C154.693563,94.5547327 153.564209,93.6949666 152.668012,92.623902 C151.779101,91.5528374 151.108775,90.2704743 150.675249,88.8205297 C150.249009,87.3742282 150.034067,85.7931329 150.034067,84.1136744 C150.034067,82.434216 150.249009,80.8494776 150.675249,79.4068191 C151.108775,77.9568745 151.775458,76.6745115 152.671655,75.6034469 C153.564209,74.5323823 154.697206,73.6762592 156.034215,73.0678654 C157.374867,72.4594715 158.95232,72.14981 160.730141,72.14981 C162.504319,72.14981 164.081772,72.4594715 165.422424,73.0678654 C166.759433,73.6762592 167.89243,74.5323823 168.784984,75.6034469 C169.677538,76.6708684 170.347864,77.9532315 170.777747,79.4068191 C171.20763,80.8531206 171.422572,82.4378591 171.422572,84.1136744 C171.422572,85.7894898 171.20763,87.3742282 170.777747,88.8205297"
                                                        fill="#FFFFFF"
                                                        transform="translate(160.728320, 84.135533) scale(1, -1) translate(-160.728320, -84.135533) " />
                                                    <path
                                                        d="M206.737482,76.7251427 C206.591759,77.1513827 206.180091,76.9910873 206.180091,76.9910873 C205.542553,76.7470012 204.864941,76.5211304 204.143612,76.408195 C203.411353,76.2952596 202.606233,76.2369704 201.742824,76.2369704 C199.622553,76.2369704 197.939452,76.8672227 196.733593,78.113155 C195.524092,79.3590873 194.846479,81.3737088 194.853766,84.0987303 C194.861052,86.5796656 195.458516,88.444921 196.533224,89.8657209 C197.600645,91.2792348 199.225458,92.0042071 201.393088,92.0042071 C203.200055,92.0042071 204.577138,91.7965517 206.019796,91.3411671 C206.019796,91.3411671 206.365888,91.1918009 206.529827,91.6435424 C206.91235,92.7073209 207.19651,93.468724 207.604535,94.6381516 C207.721113,94.9696716 207.436953,95.1117516 207.334947,95.1518255 C206.766627,95.3740532 205.425975,95.7347178 204.413199,95.887727 C203.465999,96.0334501 202.358504,96.1099547 201.127144,96.1099547 C199.28739,96.1099547 197.648005,95.7966501 196.245421,95.1700409 C194.846479,94.5470747 193.658836,93.6873086 192.718922,92.616244 C191.779009,91.5451794 191.064966,90.2628163 190.587723,88.8128717 C190.114123,87.3665702 189.873679,85.7781887 189.873679,84.0987303 C189.873679,80.4665826 190.853667,77.5302627 192.788141,75.3808473 C194.726258,73.2241458 197.637076,72.1275797 201.433162,72.1275797 C203.677298,72.1275797 205.979722,72.5829643 207.633679,73.2350751 C207.633679,73.2350751 207.950627,73.3880843 207.81219,73.756035 L206.737482,76.7251427 L206.737482,76.7251427 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(198.860433, 84.118767) scale(1, -1) translate(-198.860433, -84.118767) " />
                                                    <path
                                                        d="M214.399204,86.5520198 C214.606859,87.9618906 214.996668,89.1349613 215.597776,90.0493736 C216.504902,91.4373859 217.889271,92.198789 219.834675,92.198789 C221.780078,92.198789 223.066084,91.4337428 223.987782,90.0493736 C224.599819,89.1349613 224.865764,87.9108875 224.971413,86.5520198 L214.399204,86.5520198 L214.399204,86.5520198 Z M229.142736,89.6522783 C228.771142,91.0548629 227.849444,92.4720198 227.244693,93.1204874 C226.290207,94.1478351 225.357579,94.8655213 224.432238,95.2662597 C223.222736,95.7835766 221.772791,96.1260258 220.18441,96.1260258 C218.333727,96.1260258 216.654268,95.8163643 215.291758,95.1751828 C213.925604,94.5340013 212.778035,93.6596628 211.878195,92.5703828 C210.978355,91.4847459 210.300742,90.1914536 209.870859,88.7232937 C209.437333,87.2624198 209.218749,85.6703952 209.218749,83.9909368 C209.218749,82.2823338 209.444619,80.6903092 209.892718,79.25858 C210.344459,77.8159215 211.065789,76.5444877 212.042133,75.4916385 C213.014835,74.4315031 214.268053,73.6008816 215.769001,73.0216324 C217.259019,72.4460262 219.069628,72.1472939 221.149825,72.150937 C225.430441,72.1655093 227.685505,73.1199955 228.61449,73.6336693 C228.778428,73.7247462 228.935081,73.8850416 228.738354,74.3440693 L227.769296,77.0581615 C227.623573,77.4625431 227.211905,77.3131769 227.211905,77.3131769 C226.15177,76.9197246 224.643536,76.2129677 221.127967,76.2202539 C218.829185,76.2238969 217.124225,76.9015092 216.056804,77.9616446 C214.960238,79.0472815 214.424705,80.6429492 214.329985,82.8943707 L229.153665,82.8797984 C229.153665,82.8797984 229.543474,82.8870845 229.583548,83.2659645 C229.598121,83.4262599 230.093579,86.3115768 229.142736,89.6522783 L229.142736,89.6522783 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(219.472103, 84.138465) scale(1, -1) translate(-219.472103, -84.138465) " />
                                                    <path
                                                        d="M95.6829901,86.5520198 C95.8942885,87.9618906 96.2804547,89.1349613 96.8815624,90.0493736 C97.7886885,91.4373859 99.1730577,92.198789 101.118461,92.198789 C103.063864,92.198789 104.34987,91.4337428 105.275211,90.0493736 C105.883605,89.1349613 106.14955,87.9108875 106.255199,86.5520198 L95.6829901,86.5520198 L95.6829901,86.5520198 Z M110.422879,89.6522783 C110.051285,91.0548629 109.13323,92.4720198 108.528479,93.1204874 C107.573993,94.1478351 106.641365,94.8655213 105.716024,95.2662597 C104.506522,95.7835766 103.056578,96.1260258 101.468196,96.1260258 C99.6211562,96.1260258 97.9380547,95.8163643 96.5755439,95.1751828 C95.2093901,94.5340013 94.0618209,93.6596628 93.1619809,92.5703828 C92.2621409,91.4847459 91.5845286,90.1914536 91.1546455,88.7232937 C90.7247625,87.2624198 90.5025348,85.6703952 90.5025348,83.9909368 C90.5025348,82.2823338 90.7284055,80.6903092 91.176504,79.25858 C91.6282455,77.8159215 92.3495747,76.5444877 93.3259193,75.4916385 C94.2986209,74.4315031 95.5518393,73.6008816 97.052787,73.0216324 C98.5428054,72.4460262 100.353415,72.1472939 102.433612,72.150937 C106.714227,72.1655093 108.969291,73.1199955 109.898276,73.6336693 C110.062214,73.7247462 110.218867,73.8850416 110.022141,74.3440693 L109.056725,77.0581615 C108.907359,77.4625431 108.495691,77.3131769 108.495691,77.3131769 C107.435556,76.9197246 105.930965,76.2129677 102.40811,76.2202539 C100.112972,76.2238969 98.4080116,76.9015092 97.3405901,77.9616446 C96.2440239,79.0472815 95.7084916,80.6429492 95.6137716,82.8943707 L110.437451,82.8797984 C110.437451,82.8797984 110.827261,82.8870845 110.867334,83.2659645 C110.881907,83.4262599 111.377365,86.3115768 110.422879,89.6522783 L110.422879,89.6522783 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(100.755643, 84.138465) scale(1, -1) translate(-100.755643, -84.138465) " />
                                                    <path
                                                        d="M63.6417638,76.8187739 C63.0625146,77.2814447 62.9823669,77.3980231 62.7856408,77.6967554 C62.4941946,78.15214 62.3448285,78.8006077 62.3448285,79.6239431 C62.3448285,80.9281646 62.7747115,81.8644354 63.6672654,82.4946877 C63.6563361,82.4910446 64.9423423,83.6058261 67.9660961,83.5657523 C70.0900099,83.5366076 71.9880529,83.223303 71.9880529,83.223303 L71.9880529,76.4836108 L71.991696,76.4836108 C71.991696,76.4836108 70.1082253,76.0792293 67.9879545,75.9517216 C64.9714869,75.7695678 63.6308346,76.822417 63.6417638,76.8187739 M69.5399053,87.2343307 C68.9387976,87.2780476 68.1591792,87.3035491 67.2265515,87.3035491 C65.9551176,87.3035491 64.7274007,87.1432537 63.5761885,86.8335922 C62.41769,86.5239307 61.37577,86.0394014 60.4795731,85.3982199 C59.5797331,84.7533953 58.8547608,83.9300599 58.3301578,82.9537153 C57.8055547,81.9773707 57.5396101,80.8261584 57.5396101,79.5365092 C57.5396101,78.2250016 57.7654809,77.0847185 58.2172224,76.1520908 C58.6689639,75.2158201 59.3210747,74.4362016 60.1516962,73.8350939 C60.9750316,73.2339863 61.99145,72.793174 63.1718069,72.5272294 C64.3339484,72.2612847 65.6527423,72.1264909 67.0954007,72.1264909 C68.6145638,72.1264909 70.1300837,72.2503555 71.5982437,72.5017278 C73.0518314,72.749457 74.836939,73.1101217 75.3323975,73.223057 C75.8242129,73.3396355 76.3706744,73.4890016 76.3706744,73.4890016 C76.7386252,73.5800786 76.7094806,73.9735309 76.7094806,73.9735309 L76.7021944,87.5294199 C76.7021944,90.5021706 75.9080036,92.7062321 74.3451237,94.0723859 C72.7895298,95.4348967 70.4980345,96.1234382 67.536213,96.1234382 C66.4250746,96.1234382 64.6363238,95.970429 63.5652592,95.7554874 C63.5652592,95.7554874 60.3265639,95.1288782 58.9931978,94.0869582 C58.9931978,94.0869582 58.7017516,93.9048044 58.862047,93.4967798 L59.9112531,90.6770383 C60.0424039,90.3127306 60.3957824,90.4365952 60.3957824,90.4365952 C60.3957824,90.4365952 60.5087177,90.4803121 60.6398685,90.5568168 C63.4923977,92.1087675 67.0990438,92.0614075 67.0990438,92.0614075 C68.7019976,92.0614075 69.9333576,91.7408167 70.7639791,91.1032783 C71.5727422,90.4839552 71.9844099,89.5476845 71.9844099,87.5731368 L71.9844099,86.9465276 C70.709333,87.1286814 69.5399053,87.2343307 69.5399053,87.2343307"
                                                        fill="#FFFFFF"
                                                        transform="translate(67.124818, 84.124965) scale(1, -1) translate(-67.124818, -84.124965) " />
                                                    <path
                                                        d="M189.099133,94.6589745 C189.212069,94.9941376 188.975269,95.1544329 188.876906,95.1908637 C188.625533,95.2892268 187.365029,95.5551714 186.392327,95.6171037 C184.530715,95.7300391 183.496081,95.4167345 182.57074,95.0014237 C181.652684,94.586113 180.632623,93.9157868 180.064303,93.1543837 L180.064303,94.9577068 C180.064303,95.2090791 179.885792,95.4094483 179.638063,95.4094483 L175.838334,95.4094483 C175.590604,95.4094483 175.412094,95.2090791 175.412094,94.9577068 L175.412094,72.8478733 C175.412094,72.6001441 175.616106,72.3961318 175.863835,72.3961318 L179.758284,72.3961318 C180.006014,72.3961318 180.206383,72.6001441 180.206383,72.8478733 L180.206383,83.8936824 C180.206383,85.3764146 180.370321,86.8555038 180.698198,87.7844884 C181.018789,88.7025438 181.455958,89.4384453 181.995134,89.9666915 C182.537952,90.4912946 183.153632,90.8592453 183.827601,91.0669007 C184.516143,91.2781992 185.277546,91.3474176 185.816721,91.3474176 C186.592697,91.3474176 187.445177,91.1470484 187.445177,91.1470484 C187.729337,91.1142607 187.889632,91.2891284 187.984352,91.5477868 C188.239367,92.2253991 188.960697,94.254593 189.099133,94.6589745"
                                                        fill="#FFFFFF"
                                                        transform="translate(182.270544, 84.018248) scale(1, -1) translate(-182.270544, -84.018248) " />
                                                    <path
                                                        d="M152.543767,105.761574 C152.070167,105.907297 151.640284,106.00566 151.07925,106.111309 C150.51093,106.213316 149.833318,106.264319 149.064629,106.264319 C146.383324,106.264319 144.270339,105.506559 142.787607,104.012897 C141.312161,102.526522 140.310315,100.264171 139.80757,97.2877773 L139.625416,96.2859312 L136.259213,96.2859312 C136.259213,96.2859312 135.851189,96.3005035 135.763755,95.8560481 L135.21365,92.770362 C135.173577,92.4789159 135.301084,92.2931189 135.694537,92.2931189 L138.969663,92.2931189 L135.647177,73.7425715 C135.388518,72.24891 135.089786,71.0211931 134.758266,70.0885655 C134.434032,69.1705101 134.117084,68.4819686 133.723632,67.9792239 C133.344752,67.4983378 132.98773,67.1413163 132.368407,66.9336609 C131.858377,66.7624363 131.268198,66.6822886 130.623374,66.6822886 C130.266352,66.6822886 129.789109,66.7405778 129.43573,66.8134393 C129.085995,66.8826578 128.900198,66.9591624 128.634254,67.0720978 C128.634254,67.0720978 128.251731,67.2178209 128.098721,66.8352978 C127.9785,66.5183501 127.104161,64.1175625 126.998512,63.8224732 C126.896506,63.527384 127.042229,63.2978702 127.228026,63.2286517 C127.665195,63.0756425 127.989429,62.9736363 128.583251,62.8315563 C129.406586,62.6384733 130.102414,62.627544 130.754524,62.627544 C132.117035,62.627544 133.362967,62.8206271 134.393958,63.1922209 C135.428592,63.5674579 136.332075,64.2195686 137.133552,65.1011932 C137.996961,66.0556794 138.53978,67.0538824 139.057096,68.4200362 C139.57077,69.7679747 140.011583,71.44379 140.361318,73.3964792 L143.702019,92.2931189 L148.583742,92.2931189 C148.583742,92.2931189 148.99541,92.2785466 149.079201,92.7266451 L149.632949,95.8086881 C149.669379,96.1037773 149.545515,96.2859312 149.148419,96.2859312 L144.408776,96.2859312 C144.434278,96.3915804 144.649219,98.0601096 145.192038,99.6302757 C145.425195,100.296959 145.862364,100.839777 146.230315,101.211371 C146.594623,101.575679 147.013576,101.834337 147.472604,101.983703 C147.942561,102.136713 148.478093,102.209574 149.064629,102.209574 C149.509084,102.209574 149.949896,102.158571 150.281416,102.089353 C150.740444,101.99099 150.918955,101.939986 151.039176,101.903556 C151.523706,101.757833 151.589281,101.899913 151.684001,102.13307 L152.816998,105.244257 C152.933576,105.57942 152.645773,105.7215 152.543767,105.761574"
                                                        fill="#FFFFFF"
                                                        transform="translate(139.904621, 84.445931) scale(1, -1) translate(-139.904621, -84.445931) " />
                                                    <path
                                                        d="M86.3217408,63.553237 C86.3217408,63.3055078 86.14323,63.1051385 85.8955008,63.1051385 L81.9646209,63.1051385 C81.7168916,63.1051385 81.542024,63.3055078 81.542024,63.553237 L81.542024,95.1897165 C81.542024,95.4374457 81.7168916,95.6378149 81.9646209,95.6378149 L85.8955008,95.6378149 C86.14323,95.6378149 86.3217408,95.4374457 86.3217408,95.1897165 L86.3217408,63.553237 L86.3217408,63.553237 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(83.931882, 79.371477) scale(1, -1) translate(-83.931882, -79.371477) " />
                                                </g>
                                            </svg><a href="salesforce-consulting.htm">Salesforce Consulting</a></li>
                                        <li><svg class="mr-2" width="23px" height="23px" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -38 256 256"
                                                version="1.1" preserveAspectRatio="xMidYMid">
                                                <g>
                                                    <path
                                                        d="M106.553203,159.610976 C114.801129,168.204994 126.284107,173.534815 138.983873,173.534815 C155.865892,173.534815 170.594851,164.121105 178.438396,150.146262 C185.254593,153.191874 192.799405,154.885905 200.737669,154.885905 C231.186506,154.885905 255.871995,129.985475 255.871995,99.2706935 C255.871995,68.5522694 231.186506,43.651839 200.737669,43.651839 C197.021731,43.651839 193.389583,44.0234329 189.877657,44.7338328 C182.970383,32.4129469 169.807947,24.0885163 154.700107,24.0885163 C148.375726,24.0885163 142.393793,25.5493901 137.067615,28.1469039 C130.065621,11.6765534 113.751923,0.127999726 94.7387049,0.127999726 C74.9385822,0.127999726 58.0638501,12.6565411 51.5864595,30.2271008 C48.7557888,29.6259931 45.8231119,29.3126885 42.8139304,29.3126885 C19.23958,29.3126885 0.127998772,48.6209959 0.127998772,72.4430755 C0.127998772,88.4070383 8.71473094,102.34545 21.4727861,109.802829 C18.8461277,115.846693 17.3852539,122.517167 17.3852539,129.53009 C17.3852539,156.926028 39.6262381,179.134225 67.0586069,179.134225 C83.1646497,179.134225 97.4782987,171.476477 106.553203,159.610976"
                                                        fill="#00A1E0"
                                                        transform="translate(127.999997, 89.631112) scale(1, -1) translate(-127.999997, -89.631112) " />
                                                    <path
                                                        d="M37.1700744,75.3309413 C37.009779,74.9119875 37.2283636,74.8245536 37.2793667,74.7516921 C37.7602528,74.4019567 38.2484251,74.1505844 38.7402405,73.8700675 C41.3486835,72.4856983 43.8114035,72.0813168 46.3870588,72.0813168 C51.6330895,72.0813168 54.8900002,74.8719136 54.8900002,79.3638274 L54.8900002,79.4512613 C54.8900002,83.6043689 51.2141357,85.1126027 47.7641419,86.2018827 L47.3160434,86.3476058 C44.7148866,87.1927996 42.4707512,87.921415 42.4707512,89.6336611 L42.4707512,89.724738 C42.4707512,91.1892549 43.7822589,92.2676057 45.8150958,92.2676057 C48.0738034,92.2676057 50.755108,91.5171318 52.4819264,90.5626457 C52.4819264,90.5626457 52.9883141,90.2347688 53.174111,90.7265842 C53.2761172,90.9888857 54.1504556,93.3423133 54.2415326,93.5973287 C54.3398956,93.8742026 54.1650279,94.0782149 53.9865172,94.1875072 C52.0156126,95.3860795 49.2905911,96.2057718 46.4708496,96.2057718 L45.9462465,96.2021287 C41.1446712,96.2021287 37.7930405,93.3022395 37.7930405,89.1454888 L37.7930405,89.058055 C37.7930405,84.6754335 41.4907635,83.2546335 44.9553296,82.2637166 L45.5127204,82.092492 C48.0373727,81.3165166 50.2122895,80.6498336 50.2122895,78.872012 L50.2122895,78.7845782 C50.2122895,77.1597659 48.7987757,75.9502644 46.5182096,75.9502644 C45.6329419,75.9502644 42.8095574,75.9684798 39.760302,77.8956674 C39.3923513,78.110609 39.1774097,78.2672613 38.8932497,78.4384859 C38.7438836,78.5332059 38.3686467,78.6971444 38.2047082,78.2016859 L37.1700744,75.3309413 L37.1700744,75.3309413 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(46.001138, 84.143544) scale(1, -1) translate(-46.001138, -84.143544) " />
                                                    <path
                                                        d="M113.969779,75.3309413 C113.809484,74.9119875 114.028068,74.8245536 114.079072,74.7516921 C114.559958,74.4019567 115.04813,74.1505844 115.539945,73.8700675 C118.148388,72.4856983 120.611108,72.0813168 123.186764,72.0813168 C128.432794,72.0813168 131.689705,74.8719136 131.689705,79.3638274 L131.689705,79.4512613 C131.689705,83.6043689 128.013841,85.1126027 124.563847,86.2018827 L124.115748,86.3476058 C121.514591,87.1927996 119.270456,87.921415 119.270456,89.6336611 L119.270456,89.724738 C119.270456,91.1892549 120.581964,92.2676057 122.614801,92.2676057 C124.873508,92.2676057 127.554813,91.5171318 129.281631,90.5626457 C129.281631,90.5626457 129.788019,90.2347688 129.973816,90.7265842 C130.075822,90.9888857 130.95016,93.3423133 131.041237,93.5973287 C131.1396,93.8742026 130.964733,94.0782149 130.786222,94.1875072 C128.815317,95.3860795 126.090296,96.2057718 123.270554,96.2057718 L122.745951,96.2021287 C117.944376,96.2021287 114.592745,93.3022395 114.592745,89.1454888 L114.592745,89.058055 C114.592745,84.6754335 118.290468,83.2546335 121.755034,82.2637166 L122.312425,82.092492 C124.837077,81.3165166 127.015637,80.6498336 127.015637,78.872012 L127.015637,78.7845782 C127.015637,77.1597659 125.598481,75.9502644 123.317914,75.9502644 C122.432647,75.9502644 119.609262,75.9684798 116.560007,77.8956674 C116.192056,78.110609 115.973471,78.2599751 115.696598,78.4384859 C115.601878,78.5004182 115.157422,78.6716428 115.004413,78.2016859 L113.969779,75.3309413 L113.969779,75.3309413 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(122.800843, 84.143544) scale(1, -1) translate(-122.800843, -84.143544) " />
                                                    <path
                                                        d="M166.398769,84.1136744 C166.398769,81.5744499 165.925169,79.5744007 164.992541,78.1608868 C164.070843,76.7619453 162.675544,76.08069 160.730141,76.08069 C158.781095,76.08069 157.393083,76.7583022 156.485956,78.1608868 C155.567901,79.5707576 155.101587,81.5744499 155.101587,84.1136744 C155.101587,86.6492559 155.567901,88.6456621 156.485956,90.0446036 C157.393083,91.4289728 158.781095,92.102942 160.730141,92.102942 C162.675544,92.102942 164.070843,91.4289728 164.996184,90.0446036 C165.925169,88.6456621 166.398769,86.6492559 166.398769,84.1136744 M170.777747,88.8205297 C170.347864,90.2741174 169.677538,91.5564805 168.784984,92.623902 C167.89243,93.6949666 166.763076,94.5547327 165.422424,95.181342 C164.085415,95.8043081 162.504319,96.1212558 160.730141,96.1212558 C158.95232,96.1212558 157.371224,95.8043081 156.034215,95.181342 C154.693563,94.5547327 153.564209,93.6949666 152.668012,92.623902 C151.779101,91.5528374 151.108775,90.2704743 150.675249,88.8205297 C150.249009,87.3742282 150.034067,85.7931329 150.034067,84.1136744 C150.034067,82.434216 150.249009,80.8494776 150.675249,79.4068191 C151.108775,77.9568745 151.775458,76.6745115 152.671655,75.6034469 C153.564209,74.5323823 154.697206,73.6762592 156.034215,73.0678654 C157.374867,72.4594715 158.95232,72.14981 160.730141,72.14981 C162.504319,72.14981 164.081772,72.4594715 165.422424,73.0678654 C166.759433,73.6762592 167.89243,74.5323823 168.784984,75.6034469 C169.677538,76.6708684 170.347864,77.9532315 170.777747,79.4068191 C171.20763,80.8531206 171.422572,82.4378591 171.422572,84.1136744 C171.422572,85.7894898 171.20763,87.3742282 170.777747,88.8205297"
                                                        fill="#FFFFFF"
                                                        transform="translate(160.728320, 84.135533) scale(1, -1) translate(-160.728320, -84.135533) " />
                                                    <path
                                                        d="M206.737482,76.7251427 C206.591759,77.1513827 206.180091,76.9910873 206.180091,76.9910873 C205.542553,76.7470012 204.864941,76.5211304 204.143612,76.408195 C203.411353,76.2952596 202.606233,76.2369704 201.742824,76.2369704 C199.622553,76.2369704 197.939452,76.8672227 196.733593,78.113155 C195.524092,79.3590873 194.846479,81.3737088 194.853766,84.0987303 C194.861052,86.5796656 195.458516,88.444921 196.533224,89.8657209 C197.600645,91.2792348 199.225458,92.0042071 201.393088,92.0042071 C203.200055,92.0042071 204.577138,91.7965517 206.019796,91.3411671 C206.019796,91.3411671 206.365888,91.1918009 206.529827,91.6435424 C206.91235,92.7073209 207.19651,93.468724 207.604535,94.6381516 C207.721113,94.9696716 207.436953,95.1117516 207.334947,95.1518255 C206.766627,95.3740532 205.425975,95.7347178 204.413199,95.887727 C203.465999,96.0334501 202.358504,96.1099547 201.127144,96.1099547 C199.28739,96.1099547 197.648005,95.7966501 196.245421,95.1700409 C194.846479,94.5470747 193.658836,93.6873086 192.718922,92.616244 C191.779009,91.5451794 191.064966,90.2628163 190.587723,88.8128717 C190.114123,87.3665702 189.873679,85.7781887 189.873679,84.0987303 C189.873679,80.4665826 190.853667,77.5302627 192.788141,75.3808473 C194.726258,73.2241458 197.637076,72.1275797 201.433162,72.1275797 C203.677298,72.1275797 205.979722,72.5829643 207.633679,73.2350751 C207.633679,73.2350751 207.950627,73.3880843 207.81219,73.756035 L206.737482,76.7251427 L206.737482,76.7251427 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(198.860433, 84.118767) scale(1, -1) translate(-198.860433, -84.118767) " />
                                                    <path
                                                        d="M214.399204,86.5520198 C214.606859,87.9618906 214.996668,89.1349613 215.597776,90.0493736 C216.504902,91.4373859 217.889271,92.198789 219.834675,92.198789 C221.780078,92.198789 223.066084,91.4337428 223.987782,90.0493736 C224.599819,89.1349613 224.865764,87.9108875 224.971413,86.5520198 L214.399204,86.5520198 L214.399204,86.5520198 Z M229.142736,89.6522783 C228.771142,91.0548629 227.849444,92.4720198 227.244693,93.1204874 C226.290207,94.1478351 225.357579,94.8655213 224.432238,95.2662597 C223.222736,95.7835766 221.772791,96.1260258 220.18441,96.1260258 C218.333727,96.1260258 216.654268,95.8163643 215.291758,95.1751828 C213.925604,94.5340013 212.778035,93.6596628 211.878195,92.5703828 C210.978355,91.4847459 210.300742,90.1914536 209.870859,88.7232937 C209.437333,87.2624198 209.218749,85.6703952 209.218749,83.9909368 C209.218749,82.2823338 209.444619,80.6903092 209.892718,79.25858 C210.344459,77.8159215 211.065789,76.5444877 212.042133,75.4916385 C213.014835,74.4315031 214.268053,73.6008816 215.769001,73.0216324 C217.259019,72.4460262 219.069628,72.1472939 221.149825,72.150937 C225.430441,72.1655093 227.685505,73.1199955 228.61449,73.6336693 C228.778428,73.7247462 228.935081,73.8850416 228.738354,74.3440693 L227.769296,77.0581615 C227.623573,77.4625431 227.211905,77.3131769 227.211905,77.3131769 C226.15177,76.9197246 224.643536,76.2129677 221.127967,76.2202539 C218.829185,76.2238969 217.124225,76.9015092 216.056804,77.9616446 C214.960238,79.0472815 214.424705,80.6429492 214.329985,82.8943707 L229.153665,82.8797984 C229.153665,82.8797984 229.543474,82.8870845 229.583548,83.2659645 C229.598121,83.4262599 230.093579,86.3115768 229.142736,89.6522783 L229.142736,89.6522783 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(219.472103, 84.138465) scale(1, -1) translate(-219.472103, -84.138465) " />
                                                    <path
                                                        d="M95.6829901,86.5520198 C95.8942885,87.9618906 96.2804547,89.1349613 96.8815624,90.0493736 C97.7886885,91.4373859 99.1730577,92.198789 101.118461,92.198789 C103.063864,92.198789 104.34987,91.4337428 105.275211,90.0493736 C105.883605,89.1349613 106.14955,87.9108875 106.255199,86.5520198 L95.6829901,86.5520198 L95.6829901,86.5520198 Z M110.422879,89.6522783 C110.051285,91.0548629 109.13323,92.4720198 108.528479,93.1204874 C107.573993,94.1478351 106.641365,94.8655213 105.716024,95.2662597 C104.506522,95.7835766 103.056578,96.1260258 101.468196,96.1260258 C99.6211562,96.1260258 97.9380547,95.8163643 96.5755439,95.1751828 C95.2093901,94.5340013 94.0618209,93.6596628 93.1619809,92.5703828 C92.2621409,91.4847459 91.5845286,90.1914536 91.1546455,88.7232937 C90.7247625,87.2624198 90.5025348,85.6703952 90.5025348,83.9909368 C90.5025348,82.2823338 90.7284055,80.6903092 91.176504,79.25858 C91.6282455,77.8159215 92.3495747,76.5444877 93.3259193,75.4916385 C94.2986209,74.4315031 95.5518393,73.6008816 97.052787,73.0216324 C98.5428054,72.4460262 100.353415,72.1472939 102.433612,72.150937 C106.714227,72.1655093 108.969291,73.1199955 109.898276,73.6336693 C110.062214,73.7247462 110.218867,73.8850416 110.022141,74.3440693 L109.056725,77.0581615 C108.907359,77.4625431 108.495691,77.3131769 108.495691,77.3131769 C107.435556,76.9197246 105.930965,76.2129677 102.40811,76.2202539 C100.112972,76.2238969 98.4080116,76.9015092 97.3405901,77.9616446 C96.2440239,79.0472815 95.7084916,80.6429492 95.6137716,82.8943707 L110.437451,82.8797984 C110.437451,82.8797984 110.827261,82.8870845 110.867334,83.2659645 C110.881907,83.4262599 111.377365,86.3115768 110.422879,89.6522783 L110.422879,89.6522783 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(100.755643, 84.138465) scale(1, -1) translate(-100.755643, -84.138465) " />
                                                    <path
                                                        d="M63.6417638,76.8187739 C63.0625146,77.2814447 62.9823669,77.3980231 62.7856408,77.6967554 C62.4941946,78.15214 62.3448285,78.8006077 62.3448285,79.6239431 C62.3448285,80.9281646 62.7747115,81.8644354 63.6672654,82.4946877 C63.6563361,82.4910446 64.9423423,83.6058261 67.9660961,83.5657523 C70.0900099,83.5366076 71.9880529,83.223303 71.9880529,83.223303 L71.9880529,76.4836108 L71.991696,76.4836108 C71.991696,76.4836108 70.1082253,76.0792293 67.9879545,75.9517216 C64.9714869,75.7695678 63.6308346,76.822417 63.6417638,76.8187739 M69.5399053,87.2343307 C68.9387976,87.2780476 68.1591792,87.3035491 67.2265515,87.3035491 C65.9551176,87.3035491 64.7274007,87.1432537 63.5761885,86.8335922 C62.41769,86.5239307 61.37577,86.0394014 60.4795731,85.3982199 C59.5797331,84.7533953 58.8547608,83.9300599 58.3301578,82.9537153 C57.8055547,81.9773707 57.5396101,80.8261584 57.5396101,79.5365092 C57.5396101,78.2250016 57.7654809,77.0847185 58.2172224,76.1520908 C58.6689639,75.2158201 59.3210747,74.4362016 60.1516962,73.8350939 C60.9750316,73.2339863 61.99145,72.793174 63.1718069,72.5272294 C64.3339484,72.2612847 65.6527423,72.1264909 67.0954007,72.1264909 C68.6145638,72.1264909 70.1300837,72.2503555 71.5982437,72.5017278 C73.0518314,72.749457 74.836939,73.1101217 75.3323975,73.223057 C75.8242129,73.3396355 76.3706744,73.4890016 76.3706744,73.4890016 C76.7386252,73.5800786 76.7094806,73.9735309 76.7094806,73.9735309 L76.7021944,87.5294199 C76.7021944,90.5021706 75.9080036,92.7062321 74.3451237,94.0723859 C72.7895298,95.4348967 70.4980345,96.1234382 67.536213,96.1234382 C66.4250746,96.1234382 64.6363238,95.970429 63.5652592,95.7554874 C63.5652592,95.7554874 60.3265639,95.1288782 58.9931978,94.0869582 C58.9931978,94.0869582 58.7017516,93.9048044 58.862047,93.4967798 L59.9112531,90.6770383 C60.0424039,90.3127306 60.3957824,90.4365952 60.3957824,90.4365952 C60.3957824,90.4365952 60.5087177,90.4803121 60.6398685,90.5568168 C63.4923977,92.1087675 67.0990438,92.0614075 67.0990438,92.0614075 C68.7019976,92.0614075 69.9333576,91.7408167 70.7639791,91.1032783 C71.5727422,90.4839552 71.9844099,89.5476845 71.9844099,87.5731368 L71.9844099,86.9465276 C70.709333,87.1286814 69.5399053,87.2343307 69.5399053,87.2343307"
                                                        fill="#FFFFFF"
                                                        transform="translate(67.124818, 84.124965) scale(1, -1) translate(-67.124818, -84.124965) " />
                                                    <path
                                                        d="M189.099133,94.6589745 C189.212069,94.9941376 188.975269,95.1544329 188.876906,95.1908637 C188.625533,95.2892268 187.365029,95.5551714 186.392327,95.6171037 C184.530715,95.7300391 183.496081,95.4167345 182.57074,95.0014237 C181.652684,94.586113 180.632623,93.9157868 180.064303,93.1543837 L180.064303,94.9577068 C180.064303,95.2090791 179.885792,95.4094483 179.638063,95.4094483 L175.838334,95.4094483 C175.590604,95.4094483 175.412094,95.2090791 175.412094,94.9577068 L175.412094,72.8478733 C175.412094,72.6001441 175.616106,72.3961318 175.863835,72.3961318 L179.758284,72.3961318 C180.006014,72.3961318 180.206383,72.6001441 180.206383,72.8478733 L180.206383,83.8936824 C180.206383,85.3764146 180.370321,86.8555038 180.698198,87.7844884 C181.018789,88.7025438 181.455958,89.4384453 181.995134,89.9666915 C182.537952,90.4912946 183.153632,90.8592453 183.827601,91.0669007 C184.516143,91.2781992 185.277546,91.3474176 185.816721,91.3474176 C186.592697,91.3474176 187.445177,91.1470484 187.445177,91.1470484 C187.729337,91.1142607 187.889632,91.2891284 187.984352,91.5477868 C188.239367,92.2253991 188.960697,94.254593 189.099133,94.6589745"
                                                        fill="#FFFFFF"
                                                        transform="translate(182.270544, 84.018248) scale(1, -1) translate(-182.270544, -84.018248) " />
                                                    <path
                                                        d="M152.543767,105.761574 C152.070167,105.907297 151.640284,106.00566 151.07925,106.111309 C150.51093,106.213316 149.833318,106.264319 149.064629,106.264319 C146.383324,106.264319 144.270339,105.506559 142.787607,104.012897 C141.312161,102.526522 140.310315,100.264171 139.80757,97.2877773 L139.625416,96.2859312 L136.259213,96.2859312 C136.259213,96.2859312 135.851189,96.3005035 135.763755,95.8560481 L135.21365,92.770362 C135.173577,92.4789159 135.301084,92.2931189 135.694537,92.2931189 L138.969663,92.2931189 L135.647177,73.7425715 C135.388518,72.24891 135.089786,71.0211931 134.758266,70.0885655 C134.434032,69.1705101 134.117084,68.4819686 133.723632,67.9792239 C133.344752,67.4983378 132.98773,67.1413163 132.368407,66.9336609 C131.858377,66.7624363 131.268198,66.6822886 130.623374,66.6822886 C130.266352,66.6822886 129.789109,66.7405778 129.43573,66.8134393 C129.085995,66.8826578 128.900198,66.9591624 128.634254,67.0720978 C128.634254,67.0720978 128.251731,67.2178209 128.098721,66.8352978 C127.9785,66.5183501 127.104161,64.1175625 126.998512,63.8224732 C126.896506,63.527384 127.042229,63.2978702 127.228026,63.2286517 C127.665195,63.0756425 127.989429,62.9736363 128.583251,62.8315563 C129.406586,62.6384733 130.102414,62.627544 130.754524,62.627544 C132.117035,62.627544 133.362967,62.8206271 134.393958,63.1922209 C135.428592,63.5674579 136.332075,64.2195686 137.133552,65.1011932 C137.996961,66.0556794 138.53978,67.0538824 139.057096,68.4200362 C139.57077,69.7679747 140.011583,71.44379 140.361318,73.3964792 L143.702019,92.2931189 L148.583742,92.2931189 C148.583742,92.2931189 148.99541,92.2785466 149.079201,92.7266451 L149.632949,95.8086881 C149.669379,96.1037773 149.545515,96.2859312 149.148419,96.2859312 L144.408776,96.2859312 C144.434278,96.3915804 144.649219,98.0601096 145.192038,99.6302757 C145.425195,100.296959 145.862364,100.839777 146.230315,101.211371 C146.594623,101.575679 147.013576,101.834337 147.472604,101.983703 C147.942561,102.136713 148.478093,102.209574 149.064629,102.209574 C149.509084,102.209574 149.949896,102.158571 150.281416,102.089353 C150.740444,101.99099 150.918955,101.939986 151.039176,101.903556 C151.523706,101.757833 151.589281,101.899913 151.684001,102.13307 L152.816998,105.244257 C152.933576,105.57942 152.645773,105.7215 152.543767,105.761574"
                                                        fill="#FFFFFF"
                                                        transform="translate(139.904621, 84.445931) scale(1, -1) translate(-139.904621, -84.445931) " />
                                                    <path
                                                        d="M86.3217408,63.553237 C86.3217408,63.3055078 86.14323,63.1051385 85.8955008,63.1051385 L81.9646209,63.1051385 C81.7168916,63.1051385 81.542024,63.3055078 81.542024,63.553237 L81.542024,95.1897165 C81.542024,95.4374457 81.7168916,95.6378149 81.9646209,95.6378149 L85.8955008,95.6378149 C86.14323,95.6378149 86.3217408,95.4374457 86.3217408,95.1897165 L86.3217408,63.553237 L86.3217408,63.553237 Z"
                                                        fill="#FFFFFF"
                                                        transform="translate(83.931882, 79.371477) scale(1, -1) translate(-83.931882, -79.371477) " />
                                                </g>
                                            </svg><a href="salesforce-implementation.htm">Salesforce Implementation</a></li>
                                    </ul>
                                </div>
                                <div class="pt-1">
                                    <label
                                        class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                            href="salesforce-development.htm" class="ml-3" title="">Read more <img
                                                width="23px" height="23px" class="ml-3"
                                                src="/frontend_assets/img/arrow-right-white.svg"
                                                alt="right arrow"></a></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                            <div class="content-right h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <img class="align-self-center mr-3"
                                            src="/frontend_assets/img/services-we-offer/ai-and-ml-development.svg"
                                            alt="ai and ml">
                                        <h4 class="m-0 align-self-center">AI & ML</h4>
                                    </div>
                                    <ul class="list-unstyled mt-30">
                                        <li><a href="text-to-speech/default.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/text-to-speech.svg"
                                                    alt="text-to-speech">Text
                                                To Speech</a></li>
                                        <li><a href="business-intelligence/default.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/business-intelligence.svg"
                                                    alt="business intelligence">Business Intelligence</a></li>
                                        <li><a href="data-forecasting/default.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/data-forecasting-new.svg"
                                                    alt="data forecasting">Data Forecasting</a></li>
                                        <li><a href="natural-language-processing/default.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/natural-language-processing.svg"
                                                    alt="natural language processing">Natural Language Processing</a></li>
                                        <li><a href="data-analytics/default.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/data-analytics.svg"
                                                    alt="data analytics">Data
                                                Analytics</a></li>
                                        <li><a href="alexa-skills-development.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/alexa-skills-development.svg"
                                                    alt="alexa skills development">Alexa Skills Development</a></li>
                                    </ul>
                                </div>
                                <div class="pt-1">
                                    <label
                                        class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                            href="artificial-intelligence-and-machine-learning/default.htm" class="ml-3"
                                            title="">Read more <img class="ml-3"
                                                src="/frontend_assets/img/arrow-right-white.svg"
                                                alt="right arrow"></a></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                            <div class="content-right h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <img class="align-self-center mr-3"
                                            src="/frontend_assets/img/services-we-offer/iot-and-embedded-development.svg"
                                            alt="iot and embedded">
                                        <h4 class="m-0 align-self-center">IoT & Embedded</h4>
                                    </div>
                                    <ul class="list-unstyled mt-30">
                                        <li><a href="iot-app-development/default.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/iot-apps.svg"
                                                    alt="iot apps">IoT Apps</a></li>
                                        <li><a href="embedded-software/default.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/embedded-software.svg"
                                                    alt="embedded software">Embedded Software</a></li>
                                        <li><a href="iot-hardware-prototyping/default.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/iot-hardware-prototyping.svg"
                                                    alt="iot hardware prototyping">IoT Hardware Prototyping</a></li>
                                        <li><a href="iot-dashboard-and-analytics/default.htm"><img class="mr-3" width="23px"
                                                    height="23px"
                                                    src="/frontend_assets/img/services-we-offer/iot-dashboard-and-analytics.svg"
                                                    alt="iot dashboard and data analytics">IoT Dashboard and Analytics</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pt-1">
                                    <label
                                        class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                            href="iot-development.htm" class="ml-3" title="">Read more <img class="ml-3"
                                                src="/frontend_assets/img/arrow-right-white.svg"
                                                alt="right arrow"></a></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                            <div class="content-right h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <img class="align-self-center mr-3"
                                            src="/frontend_assets/img/services-we-offer/devops-development.svg"
                                            alt="devops">
                                        <h4 class="m-0 align-self-center">Devops</h4>
                                    </div>
                                    <ul class="list-unstyled mt-30">
                                        <li><span class="devops-txt">We Adapt DevOps to Track<br>Development Process
                                                For<br>Superior Digital
                                                Solution.</span></li>
                                    </ul>
                                </div>
                                <div class="pt-1">
                                    <label
                                        class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                            href="devops/default.htm" class="ml-3" title="">Read more <img class="ml-3"
                                                src="/frontend_assets/img/arrow-right-white.svg"
                                                alt="right arrow"></a></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sect-pad-tb services-we-offer d-block d-sm-block d-md-block d-lg-block d-xl-none">
                <div class="text-center">
                    <h4 class="main-title mb-0 mt-60 title-services c-black">Services We Offer</h4>
                </div>
                <div class="container">
                    <div class="row content-box h-100">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="swiper-container services-we-offer-mob pb-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide p-3 p-md-3 p-lg-2  p-xl-0">
                                        <div class="content-right h-100 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="d-flex">
                                                    <img class="align-self-center mr-3"
                                                        src="/frontend_assets/img/services-we-offer/mobile-icon.svg"
                                                        alt="mobile app development">
                                                    <h4 class="m-0">App<br>Development</h4>
                                                </div>
                                                <ul class="list-unstyled mt-30">
                                                    <li><a href="android-app-development.htm"><img
                                                                src="/frontend_assets/img/services-we-offer/android.svg"
                                                                class="mr-3" width="23px" height="23px"
                                                                alt="android">Android App</a></li>
                                                    <li><a href="iphone-application-development-india.htm"><img
                                                                src="/frontend_assets/img/services-we-offer/apple-icon.svg"
                                                                class="mr-3" width="23px" height="23px" alt="ios">iPhone
                                                            App</a></li>
                                                    <li><a href="flutter-app-development.htm"><img
                                                                src="/frontend_assets/img/services-we-offer/flutter.svg"
                                                                class="mr-3" width="23px" height="23px"
                                                                alt="flutter">Flutter</a></li>
                                                    <li><a href="react-native-app-development.htm"><img
                                                                src="/frontend_assets/img/services-we-offer/react-native.svg"
                                                                class="mr-3" width="23px" height="23px"
                                                                alt="react-native">React Native</a></li>
                                                    <li><a href="kotlin-app-development.htm"><img
                                                                src="/frontend_assets/img/services-we-offer/kotlin.svg"
                                                                class="mr-3" width="23px" height="23px"
                                                                alt="kotlin">Kotlin</a></li>
                                                    <li><a href="ionic-app-development.htm"><img
                                                                src="/frontend_assets/img/services-we-offer/ionic.svg"
                                                                class="mr-3" width="23px" height="23px"
                                                                alt="ionic  ">Ionic</a></li>
                                                </ul>
                                            </div>
                                            <div class="pt-1">
                                                <label
                                                    class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                                        href="mobile-app-development.htm" class="ml-3" title="">Read more
                                                        <img class="ml-3"
                                                            src="/frontend_assets/img/arrow-right-white.svg"
                                                            alt="right arrow"></a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3 p-md-3 p-lg-2  p-xl-0">
                                        <div class="content-right h-100 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="d-flex">
                                                    <img class="align-self-center mr-3"
                                                        src="/frontend_assets/img/services-we-offer/web-development.svg"
                                                        alt="web development">
                                                    <h4 class="m-0">Web<br>Development</h4>
                                                </div>
                                                <ul class="list-unstyled mt-30">
                                                    <li><a href="php-web-application-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/php.svg"
                                                                alt="php">PHP</a></li>
                                                    <li><a href="wordpress-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/wordpress.svg"
                                                                alt="wordpress">WordPress</a></li>
                                                    <li><a href="drupal-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/drupal.svg"
                                                                alt="drupal">Drupal</a></li>
                                                    <li><a href="cakephp-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/cakephp.svg"
                                                                alt="cakephp">CakePHP</a>
                                                    </li>
                                                    <li><a href="laravel-development.htm"><img class="mr-3" width="23px"
                                                                height="23px"
                                                                src="/frontend_assets/img/services-we-offer/laravel.svg"
                                                                alt="laravel">Laravel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pt-1">
                                                <label
                                                    class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                                        href="web-development" class="ml-3" title="">Read more <img
                                                            class="ml-3"
                                                            src="/frontend_assets/img/arrow-right-white.svg"
                                                            alt="right arrow"></a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3 p-md-3 p-lg-2  p-xl-0">
                                        <div class="content-right h-100 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="d-flex">
                                                    <img class="align-self-center mr-3"
                                                        src="/frontend_assets/img/services-we-offer/ecommerce-development.svg"
                                                        alt="ecommerce development">
                                                    <h4 class="m-0">Ecommerce<br>Development</h4>
                                                </div>
                                                <ul class="list-unstyled mt-30">
                                                    <li><a href="magento-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/magento.svg"
                                                                alt="magento">Magento</a>
                                                    </li>
                                                    <li><a href="bigcommerce.htm"><img class="mr-3" width="23px"
                                                                height="23px"
                                                                src="/frontend_assets/img/services-we-offer/bigcommerce.svg"
                                                                alt="bigcommerce">Bigcommerce</a></li>
                                                    <li><a href="ubercart-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/ubercart.svg"
                                                                alt="ubercart">Ubercart</a></li>
                                                    <li><a href="prestashop.htm"><img class="mr-3" width="23px"
                                                                height="23px"
                                                                src="/frontend_assets/img/services-we-offer/prestashop.svg"
                                                                alt="prestashop">Prestashop</a></li>
                                                    <li><a href="virtuemart-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/virtuemart.svg"
                                                                alt="virtuemart">Virtuemart</a></li>
                                                </ul>
                                            </div>
                                            <div class="pt-1">
                                                <label
                                                    class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                                        href="ecommerce-development/default.htm" class="ml-3" title="">Read
                                                        more <img class="ml-3"
                                                            src="/frontend_assets/img/arrow-right-white.svg"
                                                            alt="right arrow"></a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3 p-md-3 p-lg-2  p-xl-0">
                                        <div class="content-right h-100 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="d-flex">
                                                    <img class="align-self-center mr-3"
                                                        src="/frontend_assets/img/services-we-offer/blockchain-development.svg"
                                                        alt="blockchain development">
                                                    <h4 class="m-0">Blockchain<br>Development</h4>
                                                </div>
                                                <ul class="list-unstyled mt-30">
                                                    <li><a href="ethereum-app-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/ethereum.svg"
                                                                alt="ethereum">Ethereum</a></li>
                                                    <li><a href="hyperledger-blockchain-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/hyperledger.svg"
                                                                alt="hyperledger">Hyperledger</a></li>
                                                    <li><a href="smart-contracts-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/smart-contract.svg"
                                                                alt="smart contract">Smart Contracts</a></li>
                                                    <li><a href="private-blockchain-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/private-blockchain.svg"
                                                                alt="private blockchain">Private Blockchains</a></li>
                                                    <li><a href="nft-marketplace-development-company/default.htm"><img
                                                                class="mr-3" width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/nft-marketplace.svg"
                                                                alt="nft marketplace">NFT Marketplace</a></li>
                                                </ul>
                                            </div>
                                            <div class="pt-1">
                                                <label
                                                    class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                                        href="blockchain-development.htm" class="ml-3" title="">Read more
                                                        <img class="ml-3"
                                                            src="/frontend_assets/img/arrow-right-white.svg"
                                                            alt="right arrow"></a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3 p-md-3 p-lg-2  p-xl-0">
                                        <div class="content-right h-100 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="d-flex">
                                                    <img class="align-self-center mr-3"
                                                        src="/frontend_assets/img/services-we-offer/game-development.svg"
                                                        alt="game development">
                                                    <h4 class="m-0">Game<br>Development</h4>
                                                </div>
                                                <ul class="list-unstyled mt-30">
                                                    <li><a href="unity3d-game-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/unity-3d.svg"
                                                                alt="unity 3d">Unity
                                                            3d</a></li>
                                                    <li><a href="augmented-reality-app-development-company.htm"><img
                                                                class="mr-3" width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/augmented-reality.svg"
                                                                alt="augmented reality">Augmented Reality</a></li>
                                                    <li><a
                                                            href="virtual-reality-mobile-game-application-development-company-oculus-vr.htm"><img
                                                                class="mr-3" width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/virtual-reality-v2.svg"
                                                                alt="virtual reality">Virtual Reality</a></li>
                                                    <li><a href="casual-game-development.htm"><img class="mr-3" width="23px"
                                                                height="23px"
                                                                src="/frontend_assets/img/services-we-offer/casual-games.svg"
                                                                alt="casual games">Casual Games</a></li>
                                                    <li><a href="metaverse-development-company/default.htm"><img
                                                                class="mr-3" width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/metaverse-new.svg"
                                                                alt="metaverse">Metaverse</a></li>
                                                </ul>
                                            </div>
                                            <div class="pt-1">
                                                <label
                                                    class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                                        href="game-development-company/default.htm" class="ml-3"
                                                        title="">Read more <img class="ml-3"
                                                            src="/frontend_assets/img/arrow-right-white.svg"
                                                            alt="right arrow"></a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3 p-md-3 p-lg-2  p-xl-0">
                                        <div class="content-right h-100 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="d-flex">
                                                    <img class="align-self-center mr-3"
                                                        src="/frontend_assets/img/services-we-offer/salesforce-development.svg"
                                                        alt="salesforce solutions">
                                                    <h4 class="m-0">Salesforce<br>Solutions</h4>
                                                </div>
                                                <ul class="list-unstyled mt-30">
                                                    <li><svg class="mr-2" width="23px" height="23px"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 -38 256 256" version="1.1"
                                                            preserveAspectRatio="xMidYMid">
                                                            <g>
                                                                <path
                                                                    d="M106.553203,159.610976 C114.801129,168.204994 126.284107,173.534815 138.983873,173.534815 C155.865892,173.534815 170.594851,164.121105 178.438396,150.146262 C185.254593,153.191874 192.799405,154.885905 200.737669,154.885905 C231.186506,154.885905 255.871995,129.985475 255.871995,99.2706935 C255.871995,68.5522694 231.186506,43.651839 200.737669,43.651839 C197.021731,43.651839 193.389583,44.0234329 189.877657,44.7338328 C182.970383,32.4129469 169.807947,24.0885163 154.700107,24.0885163 C148.375726,24.0885163 142.393793,25.5493901 137.067615,28.1469039 C130.065621,11.6765534 113.751923,0.127999726 94.7387049,0.127999726 C74.9385822,0.127999726 58.0638501,12.6565411 51.5864595,30.2271008 C48.7557888,29.6259931 45.8231119,29.3126885 42.8139304,29.3126885 C19.23958,29.3126885 0.127998772,48.6209959 0.127998772,72.4430755 C0.127998772,88.4070383 8.71473094,102.34545 21.4727861,109.802829 C18.8461277,115.846693 17.3852539,122.517167 17.3852539,129.53009 C17.3852539,156.926028 39.6262381,179.134225 67.0586069,179.134225 C83.1646497,179.134225 97.4782987,171.476477 106.553203,159.610976"
                                                                    fill="#00A1E0"
                                                                    transform="translate(127.999997, 89.631112) scale(1, -1) translate(-127.999997, -89.631112) " />
                                                                <path
                                                                    d="M37.1700744,75.3309413 C37.009779,74.9119875 37.2283636,74.8245536 37.2793667,74.7516921 C37.7602528,74.4019567 38.2484251,74.1505844 38.7402405,73.8700675 C41.3486835,72.4856983 43.8114035,72.0813168 46.3870588,72.0813168 C51.6330895,72.0813168 54.8900002,74.8719136 54.8900002,79.3638274 L54.8900002,79.4512613 C54.8900002,83.6043689 51.2141357,85.1126027 47.7641419,86.2018827 L47.3160434,86.3476058 C44.7148866,87.1927996 42.4707512,87.921415 42.4707512,89.6336611 L42.4707512,89.724738 C42.4707512,91.1892549 43.7822589,92.2676057 45.8150958,92.2676057 C48.0738034,92.2676057 50.755108,91.5171318 52.4819264,90.5626457 C52.4819264,90.5626457 52.9883141,90.2347688 53.174111,90.7265842 C53.2761172,90.9888857 54.1504556,93.3423133 54.2415326,93.5973287 C54.3398956,93.8742026 54.1650279,94.0782149 53.9865172,94.1875072 C52.0156126,95.3860795 49.2905911,96.2057718 46.4708496,96.2057718 L45.9462465,96.2021287 C41.1446712,96.2021287 37.7930405,93.3022395 37.7930405,89.1454888 L37.7930405,89.058055 C37.7930405,84.6754335 41.4907635,83.2546335 44.9553296,82.2637166 L45.5127204,82.092492 C48.0373727,81.3165166 50.2122895,80.6498336 50.2122895,78.872012 L50.2122895,78.7845782 C50.2122895,77.1597659 48.7987757,75.9502644 46.5182096,75.9502644 C45.6329419,75.9502644 42.8095574,75.9684798 39.760302,77.8956674 C39.3923513,78.110609 39.1774097,78.2672613 38.8932497,78.4384859 C38.7438836,78.5332059 38.3686467,78.6971444 38.2047082,78.2016859 L37.1700744,75.3309413 L37.1700744,75.3309413 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(46.001138, 84.143544) scale(1, -1) translate(-46.001138, -84.143544) " />
                                                                <path
                                                                    d="M113.969779,75.3309413 C113.809484,74.9119875 114.028068,74.8245536 114.079072,74.7516921 C114.559958,74.4019567 115.04813,74.1505844 115.539945,73.8700675 C118.148388,72.4856983 120.611108,72.0813168 123.186764,72.0813168 C128.432794,72.0813168 131.689705,74.8719136 131.689705,79.3638274 L131.689705,79.4512613 C131.689705,83.6043689 128.013841,85.1126027 124.563847,86.2018827 L124.115748,86.3476058 C121.514591,87.1927996 119.270456,87.921415 119.270456,89.6336611 L119.270456,89.724738 C119.270456,91.1892549 120.581964,92.2676057 122.614801,92.2676057 C124.873508,92.2676057 127.554813,91.5171318 129.281631,90.5626457 C129.281631,90.5626457 129.788019,90.2347688 129.973816,90.7265842 C130.075822,90.9888857 130.95016,93.3423133 131.041237,93.5973287 C131.1396,93.8742026 130.964733,94.0782149 130.786222,94.1875072 C128.815317,95.3860795 126.090296,96.2057718 123.270554,96.2057718 L122.745951,96.2021287 C117.944376,96.2021287 114.592745,93.3022395 114.592745,89.1454888 L114.592745,89.058055 C114.592745,84.6754335 118.290468,83.2546335 121.755034,82.2637166 L122.312425,82.092492 C124.837077,81.3165166 127.015637,80.6498336 127.015637,78.872012 L127.015637,78.7845782 C127.015637,77.1597659 125.598481,75.9502644 123.317914,75.9502644 C122.432647,75.9502644 119.609262,75.9684798 116.560007,77.8956674 C116.192056,78.110609 115.973471,78.2599751 115.696598,78.4384859 C115.601878,78.5004182 115.157422,78.6716428 115.004413,78.2016859 L113.969779,75.3309413 L113.969779,75.3309413 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(122.800843, 84.143544) scale(1, -1) translate(-122.800843, -84.143544) " />
                                                                <path
                                                                    d="M166.398769,84.1136744 C166.398769,81.5744499 165.925169,79.5744007 164.992541,78.1608868 C164.070843,76.7619453 162.675544,76.08069 160.730141,76.08069 C158.781095,76.08069 157.393083,76.7583022 156.485956,78.1608868 C155.567901,79.5707576 155.101587,81.5744499 155.101587,84.1136744 C155.101587,86.6492559 155.567901,88.6456621 156.485956,90.0446036 C157.393083,91.4289728 158.781095,92.102942 160.730141,92.102942 C162.675544,92.102942 164.070843,91.4289728 164.996184,90.0446036 C165.925169,88.6456621 166.398769,86.6492559 166.398769,84.1136744 M170.777747,88.8205297 C170.347864,90.2741174 169.677538,91.5564805 168.784984,92.623902 C167.89243,93.6949666 166.763076,94.5547327 165.422424,95.181342 C164.085415,95.8043081 162.504319,96.1212558 160.730141,96.1212558 C158.95232,96.1212558 157.371224,95.8043081 156.034215,95.181342 C154.693563,94.5547327 153.564209,93.6949666 152.668012,92.623902 C151.779101,91.5528374 151.108775,90.2704743 150.675249,88.8205297 C150.249009,87.3742282 150.034067,85.7931329 150.034067,84.1136744 C150.034067,82.434216 150.249009,80.8494776 150.675249,79.4068191 C151.108775,77.9568745 151.775458,76.6745115 152.671655,75.6034469 C153.564209,74.5323823 154.697206,73.6762592 156.034215,73.0678654 C157.374867,72.4594715 158.95232,72.14981 160.730141,72.14981 C162.504319,72.14981 164.081772,72.4594715 165.422424,73.0678654 C166.759433,73.6762592 167.89243,74.5323823 168.784984,75.6034469 C169.677538,76.6708684 170.347864,77.9532315 170.777747,79.4068191 C171.20763,80.8531206 171.422572,82.4378591 171.422572,84.1136744 C171.422572,85.7894898 171.20763,87.3742282 170.777747,88.8205297"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(160.728320, 84.135533) scale(1, -1) translate(-160.728320, -84.135533) " />
                                                                <path
                                                                    d="M206.737482,76.7251427 C206.591759,77.1513827 206.180091,76.9910873 206.180091,76.9910873 C205.542553,76.7470012 204.864941,76.5211304 204.143612,76.408195 C203.411353,76.2952596 202.606233,76.2369704 201.742824,76.2369704 C199.622553,76.2369704 197.939452,76.8672227 196.733593,78.113155 C195.524092,79.3590873 194.846479,81.3737088 194.853766,84.0987303 C194.861052,86.5796656 195.458516,88.444921 196.533224,89.8657209 C197.600645,91.2792348 199.225458,92.0042071 201.393088,92.0042071 C203.200055,92.0042071 204.577138,91.7965517 206.019796,91.3411671 C206.019796,91.3411671 206.365888,91.1918009 206.529827,91.6435424 C206.91235,92.7073209 207.19651,93.468724 207.604535,94.6381516 C207.721113,94.9696716 207.436953,95.1117516 207.334947,95.1518255 C206.766627,95.3740532 205.425975,95.7347178 204.413199,95.887727 C203.465999,96.0334501 202.358504,96.1099547 201.127144,96.1099547 C199.28739,96.1099547 197.648005,95.7966501 196.245421,95.1700409 C194.846479,94.5470747 193.658836,93.6873086 192.718922,92.616244 C191.779009,91.5451794 191.064966,90.2628163 190.587723,88.8128717 C190.114123,87.3665702 189.873679,85.7781887 189.873679,84.0987303 C189.873679,80.4665826 190.853667,77.5302627 192.788141,75.3808473 C194.726258,73.2241458 197.637076,72.1275797 201.433162,72.1275797 C203.677298,72.1275797 205.979722,72.5829643 207.633679,73.2350751 C207.633679,73.2350751 207.950627,73.3880843 207.81219,73.756035 L206.737482,76.7251427 L206.737482,76.7251427 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(198.860433, 84.118767) scale(1, -1) translate(-198.860433, -84.118767) " />
                                                                <path
                                                                    d="M214.399204,86.5520198 C214.606859,87.9618906 214.996668,89.1349613 215.597776,90.0493736 C216.504902,91.4373859 217.889271,92.198789 219.834675,92.198789 C221.780078,92.198789 223.066084,91.4337428 223.987782,90.0493736 C224.599819,89.1349613 224.865764,87.9108875 224.971413,86.5520198 L214.399204,86.5520198 L214.399204,86.5520198 Z M229.142736,89.6522783 C228.771142,91.0548629 227.849444,92.4720198 227.244693,93.1204874 C226.290207,94.1478351 225.357579,94.8655213 224.432238,95.2662597 C223.222736,95.7835766 221.772791,96.1260258 220.18441,96.1260258 C218.333727,96.1260258 216.654268,95.8163643 215.291758,95.1751828 C213.925604,94.5340013 212.778035,93.6596628 211.878195,92.5703828 C210.978355,91.4847459 210.300742,90.1914536 209.870859,88.7232937 C209.437333,87.2624198 209.218749,85.6703952 209.218749,83.9909368 C209.218749,82.2823338 209.444619,80.6903092 209.892718,79.25858 C210.344459,77.8159215 211.065789,76.5444877 212.042133,75.4916385 C213.014835,74.4315031 214.268053,73.6008816 215.769001,73.0216324 C217.259019,72.4460262 219.069628,72.1472939 221.149825,72.150937 C225.430441,72.1655093 227.685505,73.1199955 228.61449,73.6336693 C228.778428,73.7247462 228.935081,73.8850416 228.738354,74.3440693 L227.769296,77.0581615 C227.623573,77.4625431 227.211905,77.3131769 227.211905,77.3131769 C226.15177,76.9197246 224.643536,76.2129677 221.127967,76.2202539 C218.829185,76.2238969 217.124225,76.9015092 216.056804,77.9616446 C214.960238,79.0472815 214.424705,80.6429492 214.329985,82.8943707 L229.153665,82.8797984 C229.153665,82.8797984 229.543474,82.8870845 229.583548,83.2659645 C229.598121,83.4262599 230.093579,86.3115768 229.142736,89.6522783 L229.142736,89.6522783 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(219.472103, 84.138465) scale(1, -1) translate(-219.472103, -84.138465) " />
                                                                <path
                                                                    d="M95.6829901,86.5520198 C95.8942885,87.9618906 96.2804547,89.1349613 96.8815624,90.0493736 C97.7886885,91.4373859 99.1730577,92.198789 101.118461,92.198789 C103.063864,92.198789 104.34987,91.4337428 105.275211,90.0493736 C105.883605,89.1349613 106.14955,87.9108875 106.255199,86.5520198 L95.6829901,86.5520198 L95.6829901,86.5520198 Z M110.422879,89.6522783 C110.051285,91.0548629 109.13323,92.4720198 108.528479,93.1204874 C107.573993,94.1478351 106.641365,94.8655213 105.716024,95.2662597 C104.506522,95.7835766 103.056578,96.1260258 101.468196,96.1260258 C99.6211562,96.1260258 97.9380547,95.8163643 96.5755439,95.1751828 C95.2093901,94.5340013 94.0618209,93.6596628 93.1619809,92.5703828 C92.2621409,91.4847459 91.5845286,90.1914536 91.1546455,88.7232937 C90.7247625,87.2624198 90.5025348,85.6703952 90.5025348,83.9909368 C90.5025348,82.2823338 90.7284055,80.6903092 91.176504,79.25858 C91.6282455,77.8159215 92.3495747,76.5444877 93.3259193,75.4916385 C94.2986209,74.4315031 95.5518393,73.6008816 97.052787,73.0216324 C98.5428054,72.4460262 100.353415,72.1472939 102.433612,72.150937 C106.714227,72.1655093 108.969291,73.1199955 109.898276,73.6336693 C110.062214,73.7247462 110.218867,73.8850416 110.022141,74.3440693 L109.056725,77.0581615 C108.907359,77.4625431 108.495691,77.3131769 108.495691,77.3131769 C107.435556,76.9197246 105.930965,76.2129677 102.40811,76.2202539 C100.112972,76.2238969 98.4080116,76.9015092 97.3405901,77.9616446 C96.2440239,79.0472815 95.7084916,80.6429492 95.6137716,82.8943707 L110.437451,82.8797984 C110.437451,82.8797984 110.827261,82.8870845 110.867334,83.2659645 C110.881907,83.4262599 111.377365,86.3115768 110.422879,89.6522783 L110.422879,89.6522783 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(100.755643, 84.138465) scale(1, -1) translate(-100.755643, -84.138465) " />
                                                                <path
                                                                    d="M63.6417638,76.8187739 C63.0625146,77.2814447 62.9823669,77.3980231 62.7856408,77.6967554 C62.4941946,78.15214 62.3448285,78.8006077 62.3448285,79.6239431 C62.3448285,80.9281646 62.7747115,81.8644354 63.6672654,82.4946877 C63.6563361,82.4910446 64.9423423,83.6058261 67.9660961,83.5657523 C70.0900099,83.5366076 71.9880529,83.223303 71.9880529,83.223303 L71.9880529,76.4836108 L71.991696,76.4836108 C71.991696,76.4836108 70.1082253,76.0792293 67.9879545,75.9517216 C64.9714869,75.7695678 63.6308346,76.822417 63.6417638,76.8187739 M69.5399053,87.2343307 C68.9387976,87.2780476 68.1591792,87.3035491 67.2265515,87.3035491 C65.9551176,87.3035491 64.7274007,87.1432537 63.5761885,86.8335922 C62.41769,86.5239307 61.37577,86.0394014 60.4795731,85.3982199 C59.5797331,84.7533953 58.8547608,83.9300599 58.3301578,82.9537153 C57.8055547,81.9773707 57.5396101,80.8261584 57.5396101,79.5365092 C57.5396101,78.2250016 57.7654809,77.0847185 58.2172224,76.1520908 C58.6689639,75.2158201 59.3210747,74.4362016 60.1516962,73.8350939 C60.9750316,73.2339863 61.99145,72.793174 63.1718069,72.5272294 C64.3339484,72.2612847 65.6527423,72.1264909 67.0954007,72.1264909 C68.6145638,72.1264909 70.1300837,72.2503555 71.5982437,72.5017278 C73.0518314,72.749457 74.836939,73.1101217 75.3323975,73.223057 C75.8242129,73.3396355 76.3706744,73.4890016 76.3706744,73.4890016 C76.7386252,73.5800786 76.7094806,73.9735309 76.7094806,73.9735309 L76.7021944,87.5294199 C76.7021944,90.5021706 75.9080036,92.7062321 74.3451237,94.0723859 C72.7895298,95.4348967 70.4980345,96.1234382 67.536213,96.1234382 C66.4250746,96.1234382 64.6363238,95.970429 63.5652592,95.7554874 C63.5652592,95.7554874 60.3265639,95.1288782 58.9931978,94.0869582 C58.9931978,94.0869582 58.7017516,93.9048044 58.862047,93.4967798 L59.9112531,90.6770383 C60.0424039,90.3127306 60.3957824,90.4365952 60.3957824,90.4365952 C60.3957824,90.4365952 60.5087177,90.4803121 60.6398685,90.5568168 C63.4923977,92.1087675 67.0990438,92.0614075 67.0990438,92.0614075 C68.7019976,92.0614075 69.9333576,91.7408167 70.7639791,91.1032783 C71.5727422,90.4839552 71.9844099,89.5476845 71.9844099,87.5731368 L71.9844099,86.9465276 C70.709333,87.1286814 69.5399053,87.2343307 69.5399053,87.2343307"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(67.124818, 84.124965) scale(1, -1) translate(-67.124818, -84.124965) " />
                                                                <path
                                                                    d="M189.099133,94.6589745 C189.212069,94.9941376 188.975269,95.1544329 188.876906,95.1908637 C188.625533,95.2892268 187.365029,95.5551714 186.392327,95.6171037 C184.530715,95.7300391 183.496081,95.4167345 182.57074,95.0014237 C181.652684,94.586113 180.632623,93.9157868 180.064303,93.1543837 L180.064303,94.9577068 C180.064303,95.2090791 179.885792,95.4094483 179.638063,95.4094483 L175.838334,95.4094483 C175.590604,95.4094483 175.412094,95.2090791 175.412094,94.9577068 L175.412094,72.8478733 C175.412094,72.6001441 175.616106,72.3961318 175.863835,72.3961318 L179.758284,72.3961318 C180.006014,72.3961318 180.206383,72.6001441 180.206383,72.8478733 L180.206383,83.8936824 C180.206383,85.3764146 180.370321,86.8555038 180.698198,87.7844884 C181.018789,88.7025438 181.455958,89.4384453 181.995134,89.9666915 C182.537952,90.4912946 183.153632,90.8592453 183.827601,91.0669007 C184.516143,91.2781992 185.277546,91.3474176 185.816721,91.3474176 C186.592697,91.3474176 187.445177,91.1470484 187.445177,91.1470484 C187.729337,91.1142607 187.889632,91.2891284 187.984352,91.5477868 C188.239367,92.2253991 188.960697,94.254593 189.099133,94.6589745"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(182.270544, 84.018248) scale(1, -1) translate(-182.270544, -84.018248) " />
                                                                <path
                                                                    d="M152.543767,105.761574 C152.070167,105.907297 151.640284,106.00566 151.07925,106.111309 C150.51093,106.213316 149.833318,106.264319 149.064629,106.264319 C146.383324,106.264319 144.270339,105.506559 142.787607,104.012897 C141.312161,102.526522 140.310315,100.264171 139.80757,97.2877773 L139.625416,96.2859312 L136.259213,96.2859312 C136.259213,96.2859312 135.851189,96.3005035 135.763755,95.8560481 L135.21365,92.770362 C135.173577,92.4789159 135.301084,92.2931189 135.694537,92.2931189 L138.969663,92.2931189 L135.647177,73.7425715 C135.388518,72.24891 135.089786,71.0211931 134.758266,70.0885655 C134.434032,69.1705101 134.117084,68.4819686 133.723632,67.9792239 C133.344752,67.4983378 132.98773,67.1413163 132.368407,66.9336609 C131.858377,66.7624363 131.268198,66.6822886 130.623374,66.6822886 C130.266352,66.6822886 129.789109,66.7405778 129.43573,66.8134393 C129.085995,66.8826578 128.900198,66.9591624 128.634254,67.0720978 C128.634254,67.0720978 128.251731,67.2178209 128.098721,66.8352978 C127.9785,66.5183501 127.104161,64.1175625 126.998512,63.8224732 C126.896506,63.527384 127.042229,63.2978702 127.228026,63.2286517 C127.665195,63.0756425 127.989429,62.9736363 128.583251,62.8315563 C129.406586,62.6384733 130.102414,62.627544 130.754524,62.627544 C132.117035,62.627544 133.362967,62.8206271 134.393958,63.1922209 C135.428592,63.5674579 136.332075,64.2195686 137.133552,65.1011932 C137.996961,66.0556794 138.53978,67.0538824 139.057096,68.4200362 C139.57077,69.7679747 140.011583,71.44379 140.361318,73.3964792 L143.702019,92.2931189 L148.583742,92.2931189 C148.583742,92.2931189 148.99541,92.2785466 149.079201,92.7266451 L149.632949,95.8086881 C149.669379,96.1037773 149.545515,96.2859312 149.148419,96.2859312 L144.408776,96.2859312 C144.434278,96.3915804 144.649219,98.0601096 145.192038,99.6302757 C145.425195,100.296959 145.862364,100.839777 146.230315,101.211371 C146.594623,101.575679 147.013576,101.834337 147.472604,101.983703 C147.942561,102.136713 148.478093,102.209574 149.064629,102.209574 C149.509084,102.209574 149.949896,102.158571 150.281416,102.089353 C150.740444,101.99099 150.918955,101.939986 151.039176,101.903556 C151.523706,101.757833 151.589281,101.899913 151.684001,102.13307 L152.816998,105.244257 C152.933576,105.57942 152.645773,105.7215 152.543767,105.761574"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(139.904621, 84.445931) scale(1, -1) translate(-139.904621, -84.445931) " />
                                                                <path
                                                                    d="M86.3217408,63.553237 C86.3217408,63.3055078 86.14323,63.1051385 85.8955008,63.1051385 L81.9646209,63.1051385 C81.7168916,63.1051385 81.542024,63.3055078 81.542024,63.553237 L81.542024,95.1897165 C81.542024,95.4374457 81.7168916,95.6378149 81.9646209,95.6378149 L85.8955008,95.6378149 C86.14323,95.6378149 86.3217408,95.4374457 86.3217408,95.1897165 L86.3217408,63.553237 L86.3217408,63.553237 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(83.931882, 79.371477) scale(1, -1) translate(-83.931882, -79.371477) " />
                                                            </g>
                                                        </svg><a href="salesforce-development.htm">Salesforce
                                                            Development</a></li>
                                                    <li><svg class="mr-2" width="23px" height="23px"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 -38 256 256" version="1.1"
                                                            preserveAspectRatio="xMidYMid">
                                                            <g>
                                                                <path
                                                                    d="M106.553203,159.610976 C114.801129,168.204994 126.284107,173.534815 138.983873,173.534815 C155.865892,173.534815 170.594851,164.121105 178.438396,150.146262 C185.254593,153.191874 192.799405,154.885905 200.737669,154.885905 C231.186506,154.885905 255.871995,129.985475 255.871995,99.2706935 C255.871995,68.5522694 231.186506,43.651839 200.737669,43.651839 C197.021731,43.651839 193.389583,44.0234329 189.877657,44.7338328 C182.970383,32.4129469 169.807947,24.0885163 154.700107,24.0885163 C148.375726,24.0885163 142.393793,25.5493901 137.067615,28.1469039 C130.065621,11.6765534 113.751923,0.127999726 94.7387049,0.127999726 C74.9385822,0.127999726 58.0638501,12.6565411 51.5864595,30.2271008 C48.7557888,29.6259931 45.8231119,29.3126885 42.8139304,29.3126885 C19.23958,29.3126885 0.127998772,48.6209959 0.127998772,72.4430755 C0.127998772,88.4070383 8.71473094,102.34545 21.4727861,109.802829 C18.8461277,115.846693 17.3852539,122.517167 17.3852539,129.53009 C17.3852539,156.926028 39.6262381,179.134225 67.0586069,179.134225 C83.1646497,179.134225 97.4782987,171.476477 106.553203,159.610976"
                                                                    fill="#00A1E0"
                                                                    transform="translate(127.999997, 89.631112) scale(1, -1) translate(-127.999997, -89.631112) " />
                                                                <path
                                                                    d="M37.1700744,75.3309413 C37.009779,74.9119875 37.2283636,74.8245536 37.2793667,74.7516921 C37.7602528,74.4019567 38.2484251,74.1505844 38.7402405,73.8700675 C41.3486835,72.4856983 43.8114035,72.0813168 46.3870588,72.0813168 C51.6330895,72.0813168 54.8900002,74.8719136 54.8900002,79.3638274 L54.8900002,79.4512613 C54.8900002,83.6043689 51.2141357,85.1126027 47.7641419,86.2018827 L47.3160434,86.3476058 C44.7148866,87.1927996 42.4707512,87.921415 42.4707512,89.6336611 L42.4707512,89.724738 C42.4707512,91.1892549 43.7822589,92.2676057 45.8150958,92.2676057 C48.0738034,92.2676057 50.755108,91.5171318 52.4819264,90.5626457 C52.4819264,90.5626457 52.9883141,90.2347688 53.174111,90.7265842 C53.2761172,90.9888857 54.1504556,93.3423133 54.2415326,93.5973287 C54.3398956,93.8742026 54.1650279,94.0782149 53.9865172,94.1875072 C52.0156126,95.3860795 49.2905911,96.2057718 46.4708496,96.2057718 L45.9462465,96.2021287 C41.1446712,96.2021287 37.7930405,93.3022395 37.7930405,89.1454888 L37.7930405,89.058055 C37.7930405,84.6754335 41.4907635,83.2546335 44.9553296,82.2637166 L45.5127204,82.092492 C48.0373727,81.3165166 50.2122895,80.6498336 50.2122895,78.872012 L50.2122895,78.7845782 C50.2122895,77.1597659 48.7987757,75.9502644 46.5182096,75.9502644 C45.6329419,75.9502644 42.8095574,75.9684798 39.760302,77.8956674 C39.3923513,78.110609 39.1774097,78.2672613 38.8932497,78.4384859 C38.7438836,78.5332059 38.3686467,78.6971444 38.2047082,78.2016859 L37.1700744,75.3309413 L37.1700744,75.3309413 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(46.001138, 84.143544) scale(1, -1) translate(-46.001138, -84.143544) " />
                                                                <path
                                                                    d="M113.969779,75.3309413 C113.809484,74.9119875 114.028068,74.8245536 114.079072,74.7516921 C114.559958,74.4019567 115.04813,74.1505844 115.539945,73.8700675 C118.148388,72.4856983 120.611108,72.0813168 123.186764,72.0813168 C128.432794,72.0813168 131.689705,74.8719136 131.689705,79.3638274 L131.689705,79.4512613 C131.689705,83.6043689 128.013841,85.1126027 124.563847,86.2018827 L124.115748,86.3476058 C121.514591,87.1927996 119.270456,87.921415 119.270456,89.6336611 L119.270456,89.724738 C119.270456,91.1892549 120.581964,92.2676057 122.614801,92.2676057 C124.873508,92.2676057 127.554813,91.5171318 129.281631,90.5626457 C129.281631,90.5626457 129.788019,90.2347688 129.973816,90.7265842 C130.075822,90.9888857 130.95016,93.3423133 131.041237,93.5973287 C131.1396,93.8742026 130.964733,94.0782149 130.786222,94.1875072 C128.815317,95.3860795 126.090296,96.2057718 123.270554,96.2057718 L122.745951,96.2021287 C117.944376,96.2021287 114.592745,93.3022395 114.592745,89.1454888 L114.592745,89.058055 C114.592745,84.6754335 118.290468,83.2546335 121.755034,82.2637166 L122.312425,82.092492 C124.837077,81.3165166 127.015637,80.6498336 127.015637,78.872012 L127.015637,78.7845782 C127.015637,77.1597659 125.598481,75.9502644 123.317914,75.9502644 C122.432647,75.9502644 119.609262,75.9684798 116.560007,77.8956674 C116.192056,78.110609 115.973471,78.2599751 115.696598,78.4384859 C115.601878,78.5004182 115.157422,78.6716428 115.004413,78.2016859 L113.969779,75.3309413 L113.969779,75.3309413 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(122.800843, 84.143544) scale(1, -1) translate(-122.800843, -84.143544) " />
                                                                <path
                                                                    d="M166.398769,84.1136744 C166.398769,81.5744499 165.925169,79.5744007 164.992541,78.1608868 C164.070843,76.7619453 162.675544,76.08069 160.730141,76.08069 C158.781095,76.08069 157.393083,76.7583022 156.485956,78.1608868 C155.567901,79.5707576 155.101587,81.5744499 155.101587,84.1136744 C155.101587,86.6492559 155.567901,88.6456621 156.485956,90.0446036 C157.393083,91.4289728 158.781095,92.102942 160.730141,92.102942 C162.675544,92.102942 164.070843,91.4289728 164.996184,90.0446036 C165.925169,88.6456621 166.398769,86.6492559 166.398769,84.1136744 M170.777747,88.8205297 C170.347864,90.2741174 169.677538,91.5564805 168.784984,92.623902 C167.89243,93.6949666 166.763076,94.5547327 165.422424,95.181342 C164.085415,95.8043081 162.504319,96.1212558 160.730141,96.1212558 C158.95232,96.1212558 157.371224,95.8043081 156.034215,95.181342 C154.693563,94.5547327 153.564209,93.6949666 152.668012,92.623902 C151.779101,91.5528374 151.108775,90.2704743 150.675249,88.8205297 C150.249009,87.3742282 150.034067,85.7931329 150.034067,84.1136744 C150.034067,82.434216 150.249009,80.8494776 150.675249,79.4068191 C151.108775,77.9568745 151.775458,76.6745115 152.671655,75.6034469 C153.564209,74.5323823 154.697206,73.6762592 156.034215,73.0678654 C157.374867,72.4594715 158.95232,72.14981 160.730141,72.14981 C162.504319,72.14981 164.081772,72.4594715 165.422424,73.0678654 C166.759433,73.6762592 167.89243,74.5323823 168.784984,75.6034469 C169.677538,76.6708684 170.347864,77.9532315 170.777747,79.4068191 C171.20763,80.8531206 171.422572,82.4378591 171.422572,84.1136744 C171.422572,85.7894898 171.20763,87.3742282 170.777747,88.8205297"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(160.728320, 84.135533) scale(1, -1) translate(-160.728320, -84.135533) " />
                                                                <path
                                                                    d="M206.737482,76.7251427 C206.591759,77.1513827 206.180091,76.9910873 206.180091,76.9910873 C205.542553,76.7470012 204.864941,76.5211304 204.143612,76.408195 C203.411353,76.2952596 202.606233,76.2369704 201.742824,76.2369704 C199.622553,76.2369704 197.939452,76.8672227 196.733593,78.113155 C195.524092,79.3590873 194.846479,81.3737088 194.853766,84.0987303 C194.861052,86.5796656 195.458516,88.444921 196.533224,89.8657209 C197.600645,91.2792348 199.225458,92.0042071 201.393088,92.0042071 C203.200055,92.0042071 204.577138,91.7965517 206.019796,91.3411671 C206.019796,91.3411671 206.365888,91.1918009 206.529827,91.6435424 C206.91235,92.7073209 207.19651,93.468724 207.604535,94.6381516 C207.721113,94.9696716 207.436953,95.1117516 207.334947,95.1518255 C206.766627,95.3740532 205.425975,95.7347178 204.413199,95.887727 C203.465999,96.0334501 202.358504,96.1099547 201.127144,96.1099547 C199.28739,96.1099547 197.648005,95.7966501 196.245421,95.1700409 C194.846479,94.5470747 193.658836,93.6873086 192.718922,92.616244 C191.779009,91.5451794 191.064966,90.2628163 190.587723,88.8128717 C190.114123,87.3665702 189.873679,85.7781887 189.873679,84.0987303 C189.873679,80.4665826 190.853667,77.5302627 192.788141,75.3808473 C194.726258,73.2241458 197.637076,72.1275797 201.433162,72.1275797 C203.677298,72.1275797 205.979722,72.5829643 207.633679,73.2350751 C207.633679,73.2350751 207.950627,73.3880843 207.81219,73.756035 L206.737482,76.7251427 L206.737482,76.7251427 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(198.860433, 84.118767) scale(1, -1) translate(-198.860433, -84.118767) " />
                                                                <path
                                                                    d="M214.399204,86.5520198 C214.606859,87.9618906 214.996668,89.1349613 215.597776,90.0493736 C216.504902,91.4373859 217.889271,92.198789 219.834675,92.198789 C221.780078,92.198789 223.066084,91.4337428 223.987782,90.0493736 C224.599819,89.1349613 224.865764,87.9108875 224.971413,86.5520198 L214.399204,86.5520198 L214.399204,86.5520198 Z M229.142736,89.6522783 C228.771142,91.0548629 227.849444,92.4720198 227.244693,93.1204874 C226.290207,94.1478351 225.357579,94.8655213 224.432238,95.2662597 C223.222736,95.7835766 221.772791,96.1260258 220.18441,96.1260258 C218.333727,96.1260258 216.654268,95.8163643 215.291758,95.1751828 C213.925604,94.5340013 212.778035,93.6596628 211.878195,92.5703828 C210.978355,91.4847459 210.300742,90.1914536 209.870859,88.7232937 C209.437333,87.2624198 209.218749,85.6703952 209.218749,83.9909368 C209.218749,82.2823338 209.444619,80.6903092 209.892718,79.25858 C210.344459,77.8159215 211.065789,76.5444877 212.042133,75.4916385 C213.014835,74.4315031 214.268053,73.6008816 215.769001,73.0216324 C217.259019,72.4460262 219.069628,72.1472939 221.149825,72.150937 C225.430441,72.1655093 227.685505,73.1199955 228.61449,73.6336693 C228.778428,73.7247462 228.935081,73.8850416 228.738354,74.3440693 L227.769296,77.0581615 C227.623573,77.4625431 227.211905,77.3131769 227.211905,77.3131769 C226.15177,76.9197246 224.643536,76.2129677 221.127967,76.2202539 C218.829185,76.2238969 217.124225,76.9015092 216.056804,77.9616446 C214.960238,79.0472815 214.424705,80.6429492 214.329985,82.8943707 L229.153665,82.8797984 C229.153665,82.8797984 229.543474,82.8870845 229.583548,83.2659645 C229.598121,83.4262599 230.093579,86.3115768 229.142736,89.6522783 L229.142736,89.6522783 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(219.472103, 84.138465) scale(1, -1) translate(-219.472103, -84.138465) " />
                                                                <path
                                                                    d="M95.6829901,86.5520198 C95.8942885,87.9618906 96.2804547,89.1349613 96.8815624,90.0493736 C97.7886885,91.4373859 99.1730577,92.198789 101.118461,92.198789 C103.063864,92.198789 104.34987,91.4337428 105.275211,90.0493736 C105.883605,89.1349613 106.14955,87.9108875 106.255199,86.5520198 L95.6829901,86.5520198 L95.6829901,86.5520198 Z M110.422879,89.6522783 C110.051285,91.0548629 109.13323,92.4720198 108.528479,93.1204874 C107.573993,94.1478351 106.641365,94.8655213 105.716024,95.2662597 C104.506522,95.7835766 103.056578,96.1260258 101.468196,96.1260258 C99.6211562,96.1260258 97.9380547,95.8163643 96.5755439,95.1751828 C95.2093901,94.5340013 94.0618209,93.6596628 93.1619809,92.5703828 C92.2621409,91.4847459 91.5845286,90.1914536 91.1546455,88.7232937 C90.7247625,87.2624198 90.5025348,85.6703952 90.5025348,83.9909368 C90.5025348,82.2823338 90.7284055,80.6903092 91.176504,79.25858 C91.6282455,77.8159215 92.3495747,76.5444877 93.3259193,75.4916385 C94.2986209,74.4315031 95.5518393,73.6008816 97.052787,73.0216324 C98.5428054,72.4460262 100.353415,72.1472939 102.433612,72.150937 C106.714227,72.1655093 108.969291,73.1199955 109.898276,73.6336693 C110.062214,73.7247462 110.218867,73.8850416 110.022141,74.3440693 L109.056725,77.0581615 C108.907359,77.4625431 108.495691,77.3131769 108.495691,77.3131769 C107.435556,76.9197246 105.930965,76.2129677 102.40811,76.2202539 C100.112972,76.2238969 98.4080116,76.9015092 97.3405901,77.9616446 C96.2440239,79.0472815 95.7084916,80.6429492 95.6137716,82.8943707 L110.437451,82.8797984 C110.437451,82.8797984 110.827261,82.8870845 110.867334,83.2659645 C110.881907,83.4262599 111.377365,86.3115768 110.422879,89.6522783 L110.422879,89.6522783 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(100.755643, 84.138465) scale(1, -1) translate(-100.755643, -84.138465) " />
                                                                <path
                                                                    d="M63.6417638,76.8187739 C63.0625146,77.2814447 62.9823669,77.3980231 62.7856408,77.6967554 C62.4941946,78.15214 62.3448285,78.8006077 62.3448285,79.6239431 C62.3448285,80.9281646 62.7747115,81.8644354 63.6672654,82.4946877 C63.6563361,82.4910446 64.9423423,83.6058261 67.9660961,83.5657523 C70.0900099,83.5366076 71.9880529,83.223303 71.9880529,83.223303 L71.9880529,76.4836108 L71.991696,76.4836108 C71.991696,76.4836108 70.1082253,76.0792293 67.9879545,75.9517216 C64.9714869,75.7695678 63.6308346,76.822417 63.6417638,76.8187739 M69.5399053,87.2343307 C68.9387976,87.2780476 68.1591792,87.3035491 67.2265515,87.3035491 C65.9551176,87.3035491 64.7274007,87.1432537 63.5761885,86.8335922 C62.41769,86.5239307 61.37577,86.0394014 60.4795731,85.3982199 C59.5797331,84.7533953 58.8547608,83.9300599 58.3301578,82.9537153 C57.8055547,81.9773707 57.5396101,80.8261584 57.5396101,79.5365092 C57.5396101,78.2250016 57.7654809,77.0847185 58.2172224,76.1520908 C58.6689639,75.2158201 59.3210747,74.4362016 60.1516962,73.8350939 C60.9750316,73.2339863 61.99145,72.793174 63.1718069,72.5272294 C64.3339484,72.2612847 65.6527423,72.1264909 67.0954007,72.1264909 C68.6145638,72.1264909 70.1300837,72.2503555 71.5982437,72.5017278 C73.0518314,72.749457 74.836939,73.1101217 75.3323975,73.223057 C75.8242129,73.3396355 76.3706744,73.4890016 76.3706744,73.4890016 C76.7386252,73.5800786 76.7094806,73.9735309 76.7094806,73.9735309 L76.7021944,87.5294199 C76.7021944,90.5021706 75.9080036,92.7062321 74.3451237,94.0723859 C72.7895298,95.4348967 70.4980345,96.1234382 67.536213,96.1234382 C66.4250746,96.1234382 64.6363238,95.970429 63.5652592,95.7554874 C63.5652592,95.7554874 60.3265639,95.1288782 58.9931978,94.0869582 C58.9931978,94.0869582 58.7017516,93.9048044 58.862047,93.4967798 L59.9112531,90.6770383 C60.0424039,90.3127306 60.3957824,90.4365952 60.3957824,90.4365952 C60.3957824,90.4365952 60.5087177,90.4803121 60.6398685,90.5568168 C63.4923977,92.1087675 67.0990438,92.0614075 67.0990438,92.0614075 C68.7019976,92.0614075 69.9333576,91.7408167 70.7639791,91.1032783 C71.5727422,90.4839552 71.9844099,89.5476845 71.9844099,87.5731368 L71.9844099,86.9465276 C70.709333,87.1286814 69.5399053,87.2343307 69.5399053,87.2343307"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(67.124818, 84.124965) scale(1, -1) translate(-67.124818, -84.124965) " />
                                                                <path
                                                                    d="M189.099133,94.6589745 C189.212069,94.9941376 188.975269,95.1544329 188.876906,95.1908637 C188.625533,95.2892268 187.365029,95.5551714 186.392327,95.6171037 C184.530715,95.7300391 183.496081,95.4167345 182.57074,95.0014237 C181.652684,94.586113 180.632623,93.9157868 180.064303,93.1543837 L180.064303,94.9577068 C180.064303,95.2090791 179.885792,95.4094483 179.638063,95.4094483 L175.838334,95.4094483 C175.590604,95.4094483 175.412094,95.2090791 175.412094,94.9577068 L175.412094,72.8478733 C175.412094,72.6001441 175.616106,72.3961318 175.863835,72.3961318 L179.758284,72.3961318 C180.006014,72.3961318 180.206383,72.6001441 180.206383,72.8478733 L180.206383,83.8936824 C180.206383,85.3764146 180.370321,86.8555038 180.698198,87.7844884 C181.018789,88.7025438 181.455958,89.4384453 181.995134,89.9666915 C182.537952,90.4912946 183.153632,90.8592453 183.827601,91.0669007 C184.516143,91.2781992 185.277546,91.3474176 185.816721,91.3474176 C186.592697,91.3474176 187.445177,91.1470484 187.445177,91.1470484 C187.729337,91.1142607 187.889632,91.2891284 187.984352,91.5477868 C188.239367,92.2253991 188.960697,94.254593 189.099133,94.6589745"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(182.270544, 84.018248) scale(1, -1) translate(-182.270544, -84.018248) " />
                                                                <path
                                                                    d="M152.543767,105.761574 C152.070167,105.907297 151.640284,106.00566 151.07925,106.111309 C150.51093,106.213316 149.833318,106.264319 149.064629,106.264319 C146.383324,106.264319 144.270339,105.506559 142.787607,104.012897 C141.312161,102.526522 140.310315,100.264171 139.80757,97.2877773 L139.625416,96.2859312 L136.259213,96.2859312 C136.259213,96.2859312 135.851189,96.3005035 135.763755,95.8560481 L135.21365,92.770362 C135.173577,92.4789159 135.301084,92.2931189 135.694537,92.2931189 L138.969663,92.2931189 L135.647177,73.7425715 C135.388518,72.24891 135.089786,71.0211931 134.758266,70.0885655 C134.434032,69.1705101 134.117084,68.4819686 133.723632,67.9792239 C133.344752,67.4983378 132.98773,67.1413163 132.368407,66.9336609 C131.858377,66.7624363 131.268198,66.6822886 130.623374,66.6822886 C130.266352,66.6822886 129.789109,66.7405778 129.43573,66.8134393 C129.085995,66.8826578 128.900198,66.9591624 128.634254,67.0720978 C128.634254,67.0720978 128.251731,67.2178209 128.098721,66.8352978 C127.9785,66.5183501 127.104161,64.1175625 126.998512,63.8224732 C126.896506,63.527384 127.042229,63.2978702 127.228026,63.2286517 C127.665195,63.0756425 127.989429,62.9736363 128.583251,62.8315563 C129.406586,62.6384733 130.102414,62.627544 130.754524,62.627544 C132.117035,62.627544 133.362967,62.8206271 134.393958,63.1922209 C135.428592,63.5674579 136.332075,64.2195686 137.133552,65.1011932 C137.996961,66.0556794 138.53978,67.0538824 139.057096,68.4200362 C139.57077,69.7679747 140.011583,71.44379 140.361318,73.3964792 L143.702019,92.2931189 L148.583742,92.2931189 C148.583742,92.2931189 148.99541,92.2785466 149.079201,92.7266451 L149.632949,95.8086881 C149.669379,96.1037773 149.545515,96.2859312 149.148419,96.2859312 L144.408776,96.2859312 C144.434278,96.3915804 144.649219,98.0601096 145.192038,99.6302757 C145.425195,100.296959 145.862364,100.839777 146.230315,101.211371 C146.594623,101.575679 147.013576,101.834337 147.472604,101.983703 C147.942561,102.136713 148.478093,102.209574 149.064629,102.209574 C149.509084,102.209574 149.949896,102.158571 150.281416,102.089353 C150.740444,101.99099 150.918955,101.939986 151.039176,101.903556 C151.523706,101.757833 151.589281,101.899913 151.684001,102.13307 L152.816998,105.244257 C152.933576,105.57942 152.645773,105.7215 152.543767,105.761574"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(139.904621, 84.445931) scale(1, -1) translate(-139.904621, -84.445931) " />
                                                                <path
                                                                    d="M86.3217408,63.553237 C86.3217408,63.3055078 86.14323,63.1051385 85.8955008,63.1051385 L81.9646209,63.1051385 C81.7168916,63.1051385 81.542024,63.3055078 81.542024,63.553237 L81.542024,95.1897165 C81.542024,95.4374457 81.7168916,95.6378149 81.9646209,95.6378149 L85.8955008,95.6378149 C86.14323,95.6378149 86.3217408,95.4374457 86.3217408,95.1897165 L86.3217408,63.553237 L86.3217408,63.553237 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(83.931882, 79.371477) scale(1, -1) translate(-83.931882, -79.371477) " />
                                                            </g>
                                                        </svg><a href="salesforce-consulting.htm">Salesforce Consulting</a>
                                                    </li>
                                                    <li><svg class="mr-2" width="23px" height="23px"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 -38 256 256" version="1.1"
                                                            preserveAspectRatio="xMidYMid">
                                                            <g>
                                                                <path
                                                                    d="M106.553203,159.610976 C114.801129,168.204994 126.284107,173.534815 138.983873,173.534815 C155.865892,173.534815 170.594851,164.121105 178.438396,150.146262 C185.254593,153.191874 192.799405,154.885905 200.737669,154.885905 C231.186506,154.885905 255.871995,129.985475 255.871995,99.2706935 C255.871995,68.5522694 231.186506,43.651839 200.737669,43.651839 C197.021731,43.651839 193.389583,44.0234329 189.877657,44.7338328 C182.970383,32.4129469 169.807947,24.0885163 154.700107,24.0885163 C148.375726,24.0885163 142.393793,25.5493901 137.067615,28.1469039 C130.065621,11.6765534 113.751923,0.127999726 94.7387049,0.127999726 C74.9385822,0.127999726 58.0638501,12.6565411 51.5864595,30.2271008 C48.7557888,29.6259931 45.8231119,29.3126885 42.8139304,29.3126885 C19.23958,29.3126885 0.127998772,48.6209959 0.127998772,72.4430755 C0.127998772,88.4070383 8.71473094,102.34545 21.4727861,109.802829 C18.8461277,115.846693 17.3852539,122.517167 17.3852539,129.53009 C17.3852539,156.926028 39.6262381,179.134225 67.0586069,179.134225 C83.1646497,179.134225 97.4782987,171.476477 106.553203,159.610976"
                                                                    fill="#00A1E0"
                                                                    transform="translate(127.999997, 89.631112) scale(1, -1) translate(-127.999997, -89.631112) " />
                                                                <path
                                                                    d="M37.1700744,75.3309413 C37.009779,74.9119875 37.2283636,74.8245536 37.2793667,74.7516921 C37.7602528,74.4019567 38.2484251,74.1505844 38.7402405,73.8700675 C41.3486835,72.4856983 43.8114035,72.0813168 46.3870588,72.0813168 C51.6330895,72.0813168 54.8900002,74.8719136 54.8900002,79.3638274 L54.8900002,79.4512613 C54.8900002,83.6043689 51.2141357,85.1126027 47.7641419,86.2018827 L47.3160434,86.3476058 C44.7148866,87.1927996 42.4707512,87.921415 42.4707512,89.6336611 L42.4707512,89.724738 C42.4707512,91.1892549 43.7822589,92.2676057 45.8150958,92.2676057 C48.0738034,92.2676057 50.755108,91.5171318 52.4819264,90.5626457 C52.4819264,90.5626457 52.9883141,90.2347688 53.174111,90.7265842 C53.2761172,90.9888857 54.1504556,93.3423133 54.2415326,93.5973287 C54.3398956,93.8742026 54.1650279,94.0782149 53.9865172,94.1875072 C52.0156126,95.3860795 49.2905911,96.2057718 46.4708496,96.2057718 L45.9462465,96.2021287 C41.1446712,96.2021287 37.7930405,93.3022395 37.7930405,89.1454888 L37.7930405,89.058055 C37.7930405,84.6754335 41.4907635,83.2546335 44.9553296,82.2637166 L45.5127204,82.092492 C48.0373727,81.3165166 50.2122895,80.6498336 50.2122895,78.872012 L50.2122895,78.7845782 C50.2122895,77.1597659 48.7987757,75.9502644 46.5182096,75.9502644 C45.6329419,75.9502644 42.8095574,75.9684798 39.760302,77.8956674 C39.3923513,78.110609 39.1774097,78.2672613 38.8932497,78.4384859 C38.7438836,78.5332059 38.3686467,78.6971444 38.2047082,78.2016859 L37.1700744,75.3309413 L37.1700744,75.3309413 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(46.001138, 84.143544) scale(1, -1) translate(-46.001138, -84.143544) " />
                                                                <path
                                                                    d="M113.969779,75.3309413 C113.809484,74.9119875 114.028068,74.8245536 114.079072,74.7516921 C114.559958,74.4019567 115.04813,74.1505844 115.539945,73.8700675 C118.148388,72.4856983 120.611108,72.0813168 123.186764,72.0813168 C128.432794,72.0813168 131.689705,74.8719136 131.689705,79.3638274 L131.689705,79.4512613 C131.689705,83.6043689 128.013841,85.1126027 124.563847,86.2018827 L124.115748,86.3476058 C121.514591,87.1927996 119.270456,87.921415 119.270456,89.6336611 L119.270456,89.724738 C119.270456,91.1892549 120.581964,92.2676057 122.614801,92.2676057 C124.873508,92.2676057 127.554813,91.5171318 129.281631,90.5626457 C129.281631,90.5626457 129.788019,90.2347688 129.973816,90.7265842 C130.075822,90.9888857 130.95016,93.3423133 131.041237,93.5973287 C131.1396,93.8742026 130.964733,94.0782149 130.786222,94.1875072 C128.815317,95.3860795 126.090296,96.2057718 123.270554,96.2057718 L122.745951,96.2021287 C117.944376,96.2021287 114.592745,93.3022395 114.592745,89.1454888 L114.592745,89.058055 C114.592745,84.6754335 118.290468,83.2546335 121.755034,82.2637166 L122.312425,82.092492 C124.837077,81.3165166 127.015637,80.6498336 127.015637,78.872012 L127.015637,78.7845782 C127.015637,77.1597659 125.598481,75.9502644 123.317914,75.9502644 C122.432647,75.9502644 119.609262,75.9684798 116.560007,77.8956674 C116.192056,78.110609 115.973471,78.2599751 115.696598,78.4384859 C115.601878,78.5004182 115.157422,78.6716428 115.004413,78.2016859 L113.969779,75.3309413 L113.969779,75.3309413 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(122.800843, 84.143544) scale(1, -1) translate(-122.800843, -84.143544) " />
                                                                <path
                                                                    d="M166.398769,84.1136744 C166.398769,81.5744499 165.925169,79.5744007 164.992541,78.1608868 C164.070843,76.7619453 162.675544,76.08069 160.730141,76.08069 C158.781095,76.08069 157.393083,76.7583022 156.485956,78.1608868 C155.567901,79.5707576 155.101587,81.5744499 155.101587,84.1136744 C155.101587,86.6492559 155.567901,88.6456621 156.485956,90.0446036 C157.393083,91.4289728 158.781095,92.102942 160.730141,92.102942 C162.675544,92.102942 164.070843,91.4289728 164.996184,90.0446036 C165.925169,88.6456621 166.398769,86.6492559 166.398769,84.1136744 M170.777747,88.8205297 C170.347864,90.2741174 169.677538,91.5564805 168.784984,92.623902 C167.89243,93.6949666 166.763076,94.5547327 165.422424,95.181342 C164.085415,95.8043081 162.504319,96.1212558 160.730141,96.1212558 C158.95232,96.1212558 157.371224,95.8043081 156.034215,95.181342 C154.693563,94.5547327 153.564209,93.6949666 152.668012,92.623902 C151.779101,91.5528374 151.108775,90.2704743 150.675249,88.8205297 C150.249009,87.3742282 150.034067,85.7931329 150.034067,84.1136744 C150.034067,82.434216 150.249009,80.8494776 150.675249,79.4068191 C151.108775,77.9568745 151.775458,76.6745115 152.671655,75.6034469 C153.564209,74.5323823 154.697206,73.6762592 156.034215,73.0678654 C157.374867,72.4594715 158.95232,72.14981 160.730141,72.14981 C162.504319,72.14981 164.081772,72.4594715 165.422424,73.0678654 C166.759433,73.6762592 167.89243,74.5323823 168.784984,75.6034469 C169.677538,76.6708684 170.347864,77.9532315 170.777747,79.4068191 C171.20763,80.8531206 171.422572,82.4378591 171.422572,84.1136744 C171.422572,85.7894898 171.20763,87.3742282 170.777747,88.8205297"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(160.728320, 84.135533) scale(1, -1) translate(-160.728320, -84.135533) " />
                                                                <path
                                                                    d="M206.737482,76.7251427 C206.591759,77.1513827 206.180091,76.9910873 206.180091,76.9910873 C205.542553,76.7470012 204.864941,76.5211304 204.143612,76.408195 C203.411353,76.2952596 202.606233,76.2369704 201.742824,76.2369704 C199.622553,76.2369704 197.939452,76.8672227 196.733593,78.113155 C195.524092,79.3590873 194.846479,81.3737088 194.853766,84.0987303 C194.861052,86.5796656 195.458516,88.444921 196.533224,89.8657209 C197.600645,91.2792348 199.225458,92.0042071 201.393088,92.0042071 C203.200055,92.0042071 204.577138,91.7965517 206.019796,91.3411671 C206.019796,91.3411671 206.365888,91.1918009 206.529827,91.6435424 C206.91235,92.7073209 207.19651,93.468724 207.604535,94.6381516 C207.721113,94.9696716 207.436953,95.1117516 207.334947,95.1518255 C206.766627,95.3740532 205.425975,95.7347178 204.413199,95.887727 C203.465999,96.0334501 202.358504,96.1099547 201.127144,96.1099547 C199.28739,96.1099547 197.648005,95.7966501 196.245421,95.1700409 C194.846479,94.5470747 193.658836,93.6873086 192.718922,92.616244 C191.779009,91.5451794 191.064966,90.2628163 190.587723,88.8128717 C190.114123,87.3665702 189.873679,85.7781887 189.873679,84.0987303 C189.873679,80.4665826 190.853667,77.5302627 192.788141,75.3808473 C194.726258,73.2241458 197.637076,72.1275797 201.433162,72.1275797 C203.677298,72.1275797 205.979722,72.5829643 207.633679,73.2350751 C207.633679,73.2350751 207.950627,73.3880843 207.81219,73.756035 L206.737482,76.7251427 L206.737482,76.7251427 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(198.860433, 84.118767) scale(1, -1) translate(-198.860433, -84.118767) " />
                                                                <path
                                                                    d="M214.399204,86.5520198 C214.606859,87.9618906 214.996668,89.1349613 215.597776,90.0493736 C216.504902,91.4373859 217.889271,92.198789 219.834675,92.198789 C221.780078,92.198789 223.066084,91.4337428 223.987782,90.0493736 C224.599819,89.1349613 224.865764,87.9108875 224.971413,86.5520198 L214.399204,86.5520198 L214.399204,86.5520198 Z M229.142736,89.6522783 C228.771142,91.0548629 227.849444,92.4720198 227.244693,93.1204874 C226.290207,94.1478351 225.357579,94.8655213 224.432238,95.2662597 C223.222736,95.7835766 221.772791,96.1260258 220.18441,96.1260258 C218.333727,96.1260258 216.654268,95.8163643 215.291758,95.1751828 C213.925604,94.5340013 212.778035,93.6596628 211.878195,92.5703828 C210.978355,91.4847459 210.300742,90.1914536 209.870859,88.7232937 C209.437333,87.2624198 209.218749,85.6703952 209.218749,83.9909368 C209.218749,82.2823338 209.444619,80.6903092 209.892718,79.25858 C210.344459,77.8159215 211.065789,76.5444877 212.042133,75.4916385 C213.014835,74.4315031 214.268053,73.6008816 215.769001,73.0216324 C217.259019,72.4460262 219.069628,72.1472939 221.149825,72.150937 C225.430441,72.1655093 227.685505,73.1199955 228.61449,73.6336693 C228.778428,73.7247462 228.935081,73.8850416 228.738354,74.3440693 L227.769296,77.0581615 C227.623573,77.4625431 227.211905,77.3131769 227.211905,77.3131769 C226.15177,76.9197246 224.643536,76.2129677 221.127967,76.2202539 C218.829185,76.2238969 217.124225,76.9015092 216.056804,77.9616446 C214.960238,79.0472815 214.424705,80.6429492 214.329985,82.8943707 L229.153665,82.8797984 C229.153665,82.8797984 229.543474,82.8870845 229.583548,83.2659645 C229.598121,83.4262599 230.093579,86.3115768 229.142736,89.6522783 L229.142736,89.6522783 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(219.472103, 84.138465) scale(1, -1) translate(-219.472103, -84.138465) " />
                                                                <path
                                                                    d="M95.6829901,86.5520198 C95.8942885,87.9618906 96.2804547,89.1349613 96.8815624,90.0493736 C97.7886885,91.4373859 99.1730577,92.198789 101.118461,92.198789 C103.063864,92.198789 104.34987,91.4337428 105.275211,90.0493736 C105.883605,89.1349613 106.14955,87.9108875 106.255199,86.5520198 L95.6829901,86.5520198 L95.6829901,86.5520198 Z M110.422879,89.6522783 C110.051285,91.0548629 109.13323,92.4720198 108.528479,93.1204874 C107.573993,94.1478351 106.641365,94.8655213 105.716024,95.2662597 C104.506522,95.7835766 103.056578,96.1260258 101.468196,96.1260258 C99.6211562,96.1260258 97.9380547,95.8163643 96.5755439,95.1751828 C95.2093901,94.5340013 94.0618209,93.6596628 93.1619809,92.5703828 C92.2621409,91.4847459 91.5845286,90.1914536 91.1546455,88.7232937 C90.7247625,87.2624198 90.5025348,85.6703952 90.5025348,83.9909368 C90.5025348,82.2823338 90.7284055,80.6903092 91.176504,79.25858 C91.6282455,77.8159215 92.3495747,76.5444877 93.3259193,75.4916385 C94.2986209,74.4315031 95.5518393,73.6008816 97.052787,73.0216324 C98.5428054,72.4460262 100.353415,72.1472939 102.433612,72.150937 C106.714227,72.1655093 108.969291,73.1199955 109.898276,73.6336693 C110.062214,73.7247462 110.218867,73.8850416 110.022141,74.3440693 L109.056725,77.0581615 C108.907359,77.4625431 108.495691,77.3131769 108.495691,77.3131769 C107.435556,76.9197246 105.930965,76.2129677 102.40811,76.2202539 C100.112972,76.2238969 98.4080116,76.9015092 97.3405901,77.9616446 C96.2440239,79.0472815 95.7084916,80.6429492 95.6137716,82.8943707 L110.437451,82.8797984 C110.437451,82.8797984 110.827261,82.8870845 110.867334,83.2659645 C110.881907,83.4262599 111.377365,86.3115768 110.422879,89.6522783 L110.422879,89.6522783 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(100.755643, 84.138465) scale(1, -1) translate(-100.755643, -84.138465) " />
                                                                <path
                                                                    d="M63.6417638,76.8187739 C63.0625146,77.2814447 62.9823669,77.3980231 62.7856408,77.6967554 C62.4941946,78.15214 62.3448285,78.8006077 62.3448285,79.6239431 C62.3448285,80.9281646 62.7747115,81.8644354 63.6672654,82.4946877 C63.6563361,82.4910446 64.9423423,83.6058261 67.9660961,83.5657523 C70.0900099,83.5366076 71.9880529,83.223303 71.9880529,83.223303 L71.9880529,76.4836108 L71.991696,76.4836108 C71.991696,76.4836108 70.1082253,76.0792293 67.9879545,75.9517216 C64.9714869,75.7695678 63.6308346,76.822417 63.6417638,76.8187739 M69.5399053,87.2343307 C68.9387976,87.2780476 68.1591792,87.3035491 67.2265515,87.3035491 C65.9551176,87.3035491 64.7274007,87.1432537 63.5761885,86.8335922 C62.41769,86.5239307 61.37577,86.0394014 60.4795731,85.3982199 C59.5797331,84.7533953 58.8547608,83.9300599 58.3301578,82.9537153 C57.8055547,81.9773707 57.5396101,80.8261584 57.5396101,79.5365092 C57.5396101,78.2250016 57.7654809,77.0847185 58.2172224,76.1520908 C58.6689639,75.2158201 59.3210747,74.4362016 60.1516962,73.8350939 C60.9750316,73.2339863 61.99145,72.793174 63.1718069,72.5272294 C64.3339484,72.2612847 65.6527423,72.1264909 67.0954007,72.1264909 C68.6145638,72.1264909 70.1300837,72.2503555 71.5982437,72.5017278 C73.0518314,72.749457 74.836939,73.1101217 75.3323975,73.223057 C75.8242129,73.3396355 76.3706744,73.4890016 76.3706744,73.4890016 C76.7386252,73.5800786 76.7094806,73.9735309 76.7094806,73.9735309 L76.7021944,87.5294199 C76.7021944,90.5021706 75.9080036,92.7062321 74.3451237,94.0723859 C72.7895298,95.4348967 70.4980345,96.1234382 67.536213,96.1234382 C66.4250746,96.1234382 64.6363238,95.970429 63.5652592,95.7554874 C63.5652592,95.7554874 60.3265639,95.1288782 58.9931978,94.0869582 C58.9931978,94.0869582 58.7017516,93.9048044 58.862047,93.4967798 L59.9112531,90.6770383 C60.0424039,90.3127306 60.3957824,90.4365952 60.3957824,90.4365952 C60.3957824,90.4365952 60.5087177,90.4803121 60.6398685,90.5568168 C63.4923977,92.1087675 67.0990438,92.0614075 67.0990438,92.0614075 C68.7019976,92.0614075 69.9333576,91.7408167 70.7639791,91.1032783 C71.5727422,90.4839552 71.9844099,89.5476845 71.9844099,87.5731368 L71.9844099,86.9465276 C70.709333,87.1286814 69.5399053,87.2343307 69.5399053,87.2343307"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(67.124818, 84.124965) scale(1, -1) translate(-67.124818, -84.124965) " />
                                                                <path
                                                                    d="M189.099133,94.6589745 C189.212069,94.9941376 188.975269,95.1544329 188.876906,95.1908637 C188.625533,95.2892268 187.365029,95.5551714 186.392327,95.6171037 C184.530715,95.7300391 183.496081,95.4167345 182.57074,95.0014237 C181.652684,94.586113 180.632623,93.9157868 180.064303,93.1543837 L180.064303,94.9577068 C180.064303,95.2090791 179.885792,95.4094483 179.638063,95.4094483 L175.838334,95.4094483 C175.590604,95.4094483 175.412094,95.2090791 175.412094,94.9577068 L175.412094,72.8478733 C175.412094,72.6001441 175.616106,72.3961318 175.863835,72.3961318 L179.758284,72.3961318 C180.006014,72.3961318 180.206383,72.6001441 180.206383,72.8478733 L180.206383,83.8936824 C180.206383,85.3764146 180.370321,86.8555038 180.698198,87.7844884 C181.018789,88.7025438 181.455958,89.4384453 181.995134,89.9666915 C182.537952,90.4912946 183.153632,90.8592453 183.827601,91.0669007 C184.516143,91.2781992 185.277546,91.3474176 185.816721,91.3474176 C186.592697,91.3474176 187.445177,91.1470484 187.445177,91.1470484 C187.729337,91.1142607 187.889632,91.2891284 187.984352,91.5477868 C188.239367,92.2253991 188.960697,94.254593 189.099133,94.6589745"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(182.270544, 84.018248) scale(1, -1) translate(-182.270544, -84.018248) " />
                                                                <path
                                                                    d="M152.543767,105.761574 C152.070167,105.907297 151.640284,106.00566 151.07925,106.111309 C150.51093,106.213316 149.833318,106.264319 149.064629,106.264319 C146.383324,106.264319 144.270339,105.506559 142.787607,104.012897 C141.312161,102.526522 140.310315,100.264171 139.80757,97.2877773 L139.625416,96.2859312 L136.259213,96.2859312 C136.259213,96.2859312 135.851189,96.3005035 135.763755,95.8560481 L135.21365,92.770362 C135.173577,92.4789159 135.301084,92.2931189 135.694537,92.2931189 L138.969663,92.2931189 L135.647177,73.7425715 C135.388518,72.24891 135.089786,71.0211931 134.758266,70.0885655 C134.434032,69.1705101 134.117084,68.4819686 133.723632,67.9792239 C133.344752,67.4983378 132.98773,67.1413163 132.368407,66.9336609 C131.858377,66.7624363 131.268198,66.6822886 130.623374,66.6822886 C130.266352,66.6822886 129.789109,66.7405778 129.43573,66.8134393 C129.085995,66.8826578 128.900198,66.9591624 128.634254,67.0720978 C128.634254,67.0720978 128.251731,67.2178209 128.098721,66.8352978 C127.9785,66.5183501 127.104161,64.1175625 126.998512,63.8224732 C126.896506,63.527384 127.042229,63.2978702 127.228026,63.2286517 C127.665195,63.0756425 127.989429,62.9736363 128.583251,62.8315563 C129.406586,62.6384733 130.102414,62.627544 130.754524,62.627544 C132.117035,62.627544 133.362967,62.8206271 134.393958,63.1922209 C135.428592,63.5674579 136.332075,64.2195686 137.133552,65.1011932 C137.996961,66.0556794 138.53978,67.0538824 139.057096,68.4200362 C139.57077,69.7679747 140.011583,71.44379 140.361318,73.3964792 L143.702019,92.2931189 L148.583742,92.2931189 C148.583742,92.2931189 148.99541,92.2785466 149.079201,92.7266451 L149.632949,95.8086881 C149.669379,96.1037773 149.545515,96.2859312 149.148419,96.2859312 L144.408776,96.2859312 C144.434278,96.3915804 144.649219,98.0601096 145.192038,99.6302757 C145.425195,100.296959 145.862364,100.839777 146.230315,101.211371 C146.594623,101.575679 147.013576,101.834337 147.472604,101.983703 C147.942561,102.136713 148.478093,102.209574 149.064629,102.209574 C149.509084,102.209574 149.949896,102.158571 150.281416,102.089353 C150.740444,101.99099 150.918955,101.939986 151.039176,101.903556 C151.523706,101.757833 151.589281,101.899913 151.684001,102.13307 L152.816998,105.244257 C152.933576,105.57942 152.645773,105.7215 152.543767,105.761574"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(139.904621, 84.445931) scale(1, -1) translate(-139.904621, -84.445931) " />
                                                                <path
                                                                    d="M86.3217408,63.553237 C86.3217408,63.3055078 86.14323,63.1051385 85.8955008,63.1051385 L81.9646209,63.1051385 C81.7168916,63.1051385 81.542024,63.3055078 81.542024,63.553237 L81.542024,95.1897165 C81.542024,95.4374457 81.7168916,95.6378149 81.9646209,95.6378149 L85.8955008,95.6378149 C86.14323,95.6378149 86.3217408,95.4374457 86.3217408,95.1897165 L86.3217408,63.553237 L86.3217408,63.553237 Z"
                                                                    fill="#FFFFFF"
                                                                    transform="translate(83.931882, 79.371477) scale(1, -1) translate(-83.931882, -79.371477) " />
                                                            </g>
                                                        </svg><a href="salesforce-implementation.htm">Salesforce
                                                            Implementation</a></li>
                                                </ul>
                                            </div>
                                            <div class="pt-1">
                                                <label
                                                    class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                                        href="salesforce-development.htm" class="ml-3" title="">Read more
                                                        <img class="ml-3"
                                                            src="/frontend_assets/img/arrow-right-white.svg"
                                                            alt="right arrow"></a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3 p-md-3 p-lg-2  p-xl-0">
                                        <div class="content-right h-100 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="d-flex">
                                                    <img class="align-self-center mr-3"
                                                        src="/frontend_assets/img/services-we-offer/ai-and-ml-development.svg"
                                                        alt="ai and ml">
                                                    <h4 class="m-0 align-self-center">AI & ML</h4>
                                                </div>
                                                <ul class="list-unstyled mt-30">
                                                    <li><a href="text-to-speech/default.htm"><img class="mr-3" width="23px"
                                                                height="23px"
                                                                src="/frontend_assets/img/services-we-offer/text-to-speech.svg"
                                                                alt="text-to-speech">Text To Speech</a></li>
                                                    <li><a href="business-intelligence/default.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/business-intelligence.svg"
                                                                alt="business intelligence">Business Intelligence</a></li>
                                                    <li><a href="data-forecasting/default.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/business-intelligence.svg"
                                                                alt="data forecasting">Data Forecasting</a></li>
                                                    <li><a href="natural-language-processing/default.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/natural-language-processing.svg"
                                                                alt="natural language processing">Natural Language
                                                            Processing</a></li>
                                                    <li><a href="data-analytics/default.htm"><img class="mr-3" width="23px"
                                                                height="23px"
                                                                src="/frontend_assets/img/services-we-offer/data-analytics.svg"
                                                                alt="data analytics">Data Analytics</a></li>
                                                    <li><a href="alexa-skills-development.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/alexa-skills-development.svg"
                                                                alt="alexa skills development">Alexa Skills Development</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pt-1">
                                                <label
                                                    class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                                        href="artificial-intelligence-and-machine-learning/default.htm"
                                                        class="ml-3" title="">Read
                                                        more <img class="ml-3"
                                                            src="/frontend_assets/img/arrow-right-white.svg"
                                                            alt="right arrow"></a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3 p-md-3 p-lg-2  p-xl-0">
                                        <div class="content-right h-100 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="d-flex">
                                                    <img class="align-self-center mr-3"
                                                        src="/frontend_assets/img/services-we-offer/iot-and-embedded-development.svg"
                                                        alt="iot and embedded">
                                                    <h4 class="m-0 align-self-center">IoT & Embedded</h4>
                                                </div>
                                                <ul class="list-unstyled mt-30">
                                                    <li><a href="iot-app-development/default.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/iot-apps.svg"
                                                                alt="iot apps">IoT
                                                            Apps</a></li>
                                                    <li><a href="embedded-software/default.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/embedded-software.svg"
                                                                alt="embedded software">Embedded Software</a></li>
                                                    <li><a href="iot-hardware-prototyping/default.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/iot-hardware-prototyping.svg"
                                                                alt="iot hardware prototyping">IoT Hardware Prototyping</a>
                                                    </li>
                                                    <li><a href="iot-dashboard-and-analytics/default.htm"><img class="mr-3"
                                                                width="23px" height="23px"
                                                                src="/frontend_assets/img/services-we-offer/iot-dashboard-and-analytics.svg"
                                                                alt="iot dashboard and data analytics">IoT Dashboard and
                                                            Analytics</a></li>
                                                </ul>
                                            </div>
                                            <div class="pt-1">
                                                <label
                                                    class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                                        href="iot-development.htm" class="ml-3" title="">Read more <img
                                                            class="ml-3"
                                                            src="/frontend_assets/img/arrow-right-white.svg"
                                                            alt="right arrow"></a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3 p-md-3 p-lg-2  p-xl-0">
                                        <div class="content-right h-100 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="d-flex">
                                                    <img class="align-self-center mr-3"
                                                        src="/frontend_assets/img/services-we-offer/devops-development.svg"
                                                        alt="devops">
                                                    <h4 class="m-0 align-self-center">Devops</h4>
                                                </div>
                                                <ul class="list-unstyled mt-30">
                                                    <li><span class="devops-txt">We Adapt DevOps to Track<br>Development
                                                            Process For<br>Superior
                                                            Digital Solution.</span></li>
                                                </ul>
                                            </div>
                                            <div class="pt-1">
                                                <label
                                                    class="mb-0 d-inline-flex align-items-center read-more-btn mt-4 mt-md-2 mt-lg-4"><a
                                                        href="devops/default.htm" class="ml-3" title="">Read more <img
                                                            class="ml-3"
                                                            src="/frontend_assets/img/arrow-right-white.svg"
                                                            alt="right arrow"></a></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mob-clutch-swiper-pagination mt-3 d-flex justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="sect-pad-tb process-we-follow bg-light-gray d-none d-sm-none d-md-none d-lg-block d-xl-block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 left-content">
                            <h2 class="main-title mb-3 mt-60 title-process-we-follow">Process We Follow</h2>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3 mt-md-3 mt-lg-4">
                            <div class="card-box">
                                <div
                                    class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                    <div class="process-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            version="1.1" id="Capa_5" x="0px" y="0px" viewBox="0 0 496.941 496.941"
                                            style="enable-background:new 0 0 496.941 496.941" xml:space="preserve"
                                            width="50px" height="50px">
                                            <g id="requirement">
                                                <path
                                                    d="M475.299,106.918l-12.047-3.765c-3.012-0.753-6.024-1.506-9.788-1.506c-13.553,0-25.6,9.035-30.118,21.835l-6.776,20.329     v-15.059V128c0-2.259-1.506-4.518-3.012-6.024L290.076,2.259C288.57,0.753,286.311,0,284.805,0H43.111     c-4.518,0-7.529,3.012-7.529,7.529v23.341H7.723c-4.518,0-7.529,3.012-7.529,7.529v451.012c0,4.518,3.012,7.529,7.529,7.529     h365.929c4.518,0,7.529-3.012,7.529-7.529v-23.341h27.859c4.518,0,7.529-3.012,7.529-7.529V356.894l21.082-28.612l0.753-2.259     l56.471-179.953C500.899,129.506,491.864,112.188,475.299,106.918z M292.334,25.6l98.635,94.871h-98.635V25.6z M366.123,481.882     H15.252V45.929h20.329v412.612c0,4.518,3.012,7.529,7.529,7.529h323.012V481.882z M402.264,451.012h-0.753H50.64V15.059h226.635     V128c0,4.518,3.012,7.529,7.529,7.529h117.459V192l-35.388,111.435v2.259l1.506,95.624c0,3.012,2.259,6.024,5.271,6.776     c3.012,0.753,6.776,0,8.282-3.012l20.329-27.106V451.012z M382.687,377.976l-1.506-62.494l37.647,12.047L382.687,377.976z      M481.323,141.553l-54.212,172.424l-43.671-14.306L437.652,128c3.012-8.282,12.047-13.553,20.329-10.541l12.047,3.765     C479.064,123.482,484.334,133.271,481.323,141.553z"
                                                    fill="#a4c639"></path>
                                                <path
                                                    d="M86.782,206.306h228.894c4.518,0,7.529-3.012,7.529-7.529c0-4.518-3.012-7.529-7.529-7.529H86.782     c-4.518,0-7.529,3.012-7.529,7.529C79.252,203.294,82.264,206.306,86.782,206.306z"
                                                    fill="#a4c639"></path>
                                                <path
                                                    d="M347.299,411.106H233.605c-4.518,0-7.529,3.012-7.529,7.529s3.012,7.529,7.529,7.529h112.941     c4.518,0,7.529-3.012,7.529-7.529S351.064,411.106,347.299,411.106z"
                                                    fill="#a4c639"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <h3 class="h6 my-3 w-100"><b>1. Requirement Gathering</b></h3>
                                    <p class="desc m-0">We follow the first and foremost priority of gathering requirements,
                                        resources, and
                                        information to begin our project.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3 mt-md-3 mt-lg-4">
                            <div class="card-box">
                                <div
                                    class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                    <div class="process-icon"> <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_6" x="0px"
                                            y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" width="50px" height="50px">
                                            <g id="uiux">
                                                <g>
                                                    <path
                                                        d="M360,104h-80c-4.418,0-8,3.582-8,8v80c0,4.418,3.582,8,8,8h80c4.418,0,8-3.582,8-8v-80C368,107.582,364.418,104,360,104z     M288,184v-52.693L340.693,184H288z M352,172.68L299.32,120H352V172.68z"
                                                        fill="#1094f1"></path>
                                                </g>
                                                <g>
                                                    <path
                                                        d="M360,216h-80c-4.418,0-8,3.582-8,8v80c0,4.418,3.582,8,8,8h80c4.418,0,8-3.582,8-8v-80C368,219.582,364.418,216,360,216z     M288,296v-52.685L340.685,296H288z M352,284.688L299.312,232H352V284.688z"
                                                        fill="#1094f1"></path>
                                                </g>
                                                <g>
                                                    <rect x="272" y="328" width="64" height="16" fill="#1094f1"></rect>
                                                </g>
                                                <g>
                                                    <rect x="352" y="328" width="16" height="16" fill="#1094f1"></rect>
                                                </g>
                                                <g>
                                                    <rect x="272" y="360" width="96" height="16" fill="#1094f1"></rect>
                                                </g>
                                                <g>
                                                    <rect x="272" y="392" width="96" height="16" fill="#1094f1"></rect>
                                                </g>
                                                <g>
                                                    <rect x="136" y="184" width="80" height="16" fill="#1094f1"></rect>
                                                </g>
                                                <g>
                                                    <rect x="136" y="248" width="80" height="16" fill="#1094f1"></rect>
                                                </g>
                                                <g>
                                                    <rect x="136" y="312" width="80" height="16" fill="#1094f1"></rect>
                                                </g>
                                                <g>
                                                    <path
                                                        d="M464,56c-4.418,0-8,3.582-8,8v32h-48V16c0-8.837-7.163-16-16-16H120c-8.837,0-16,7.163-16,16v80H56V64    c0-4.418-3.582-8-8-8c-0.48,0-48,0.728-48,64v312c0,30.504,30.4,44.632,46.4,47.84c0.526,0.111,1.062,0.165,1.6,0.16h56v16    c0,8.837,7.163,16,16,16h272c8.837,0,16-7.163,16-16v-16h56c0.538,0.005,1.074-0.049,1.6-0.16c16-3.208,46.4-17.336,46.4-47.84    V120C512,56.728,464.48,56,464,56z M16,120c0-32.64,14.4-43.088,24-46.4v312.232c-8.773,2.722-16.927,7.139-24,13V120z M104,464    H48.88C44.104,462.856,16,455.128,16,432c0-24.96,32.248-31.88,33.6-32.16c3.725-0.76,6.401-4.038,6.4-7.84V112h48V464z M120,88    h92.12L120,145.543V88z M232,94.447V152h-92.136L232,94.447z M120,168h112v48H120V168z M120,232h112v48H120V232z M120,296h112v48    H120V296z M120,360h94.186L120,424.724V360z M232,367.172V432h-94.337L232,367.172z M392,496H120v-48h272V496z M392,432H248V88    h144V432z M392,72H120V16h272V72z M463.136,464H408V112h48v280c-0.001,3.802,2.675,7.08,6.4,7.84    c0.368,0.072,33.6,7.008,33.6,32.16C496,455.256,468.072,462.84,463.136,464z M496,398.832c-7.073-5.861-15.227-10.278-24-13V73.6    c9.496,3.32,24,13.776,24,46.4V398.832z"
                                                        fill="#1094f1"></path>
                                                </g>
                                                <g>
                                                    <rect x="200" y="40" width="64" height="16" fill="#1094f1"></rect>
                                                </g>
                                                <g>
                                                    <rect x="280" y="40" width="16" height="16" fill="#1094f1"></rect>
                                                </g>
                                                <g>
                                                    <rect x="312" y="40" width="16" height="16" fill="#1094f1"></rect>
                                                </g>
                                            </g>
                                        </svg> </div>
                                    <h3 class="h6 my-3 w-100"><b>2. UI/UX Design</b></h3>
                                    <p class="desc m-0">We create catchy and charming designs with the latest tools of
                                        designing to make it
                                        a best user-friendly experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3 mt-md-3 mt-lg-4">
                            <div class="card-box">
                                <div
                                    class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                    <div class="process-icon"> <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_9" x="0px"
                                            y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" width="50px" height="50px">
                                            <g id="prototype">
                                                <g>
                                                    <path
                                                        d="M379.853,228.907c14.329,0,25.987-11.658,25.987-25.987V25.987C405.84,11.658,394.183,0,379.853,0h-88.467    C277.057,0,265.4,11.658,265.4,25.987v53.659c-2.303-0.153-4.657,0.642-6.418,2.403c-3.239,3.239-3.239,8.491,0,11.728    l12.382,12.382H246.6V25.987C246.6,11.658,234.943,0,220.613,0h-88.467c-14.329,0-25.987,11.658-25.987,25.987V202.92    c0,14.329,11.658,25.987,25.987,25.987h35.94v54.186h-35.94c-14.329,0-25.987,11.658-25.987,25.987v176.933    c0,14.329,11.658,25.987,25.987,25.987h88.467c14.329,0,25.987-11.658,25.987-25.987V309.08c0-14.329-11.658-25.987-25.987-25.987    h-35.94v-54.186h35.94c14.329,0,25.987-11.658,25.987-25.987v-80.173h24.763l-12.382,12.382c-3.239,3.239-3.239,8.491,0,11.728    c1.62,1.619,3.743,2.43,5.865,2.43c0.185,0,0.368-0.014,0.553-0.027v53.659c0,14.329,11.658,25.987,25.987,25.987h35.94v54.186    h-35.94c-14.329,0-25.987,11.658-25.987,25.987v176.933c0,14.329,11.658,25.987,25.987,25.987h88.467    c14.329,0,25.987-11.658,25.987-25.987V309.08c0-14.329-11.658-25.987-25.987-25.987h-35.94v-54.186H379.853z M220.613,299.68    c5.183,0,9.4,4.216,9.4,9.4v176.933c0,5.183-4.217,9.4-9.4,9.4h-88.467c-5.183,0-9.4-4.217-9.4-9.4V309.08    c0-5.183,4.216-9.4,9.4-9.4h35.94v33.609l-12.381-12.382c-3.24-3.239-8.491-3.239-11.73,0s-3.239,8.491,0,11.728l26.54,26.54    c0.011,0.011,0.023,0.02,0.033,0.03c0.184,0.181,0.375,0.355,0.575,0.52c0.093,0.076,0.191,0.143,0.286,0.215    c0.122,0.091,0.24,0.185,0.367,0.27c0.113,0.075,0.23,0.141,0.346,0.21c0.116,0.07,0.23,0.143,0.349,0.207    c0.118,0.063,0.241,0.117,0.363,0.175c0.124,0.059,0.245,0.121,0.373,0.172c0.118,0.049,0.24,0.088,0.361,0.132    c0.135,0.049,0.268,0.1,0.405,0.142c0.122,0.036,0.244,0.063,0.367,0.094c0.139,0.035,0.278,0.074,0.419,0.103    c0.143,0.029,0.286,0.045,0.43,0.065c0.124,0.018,0.247,0.041,0.372,0.054c0.272,0.027,0.545,0.041,0.818,0.041    c0.273,0,0.546-0.014,0.818-0.041c0.126-0.012,0.248-0.035,0.372-0.054c0.144-0.021,0.288-0.038,0.43-0.065    c0.143-0.029,0.28-0.068,0.419-0.103c0.123-0.031,0.245-0.057,0.367-0.094c0.138-0.042,0.271-0.093,0.406-0.142    c0.12-0.043,0.241-0.083,0.359-0.132c0.127-0.053,0.25-0.115,0.374-0.174c0.121-0.057,0.243-0.111,0.362-0.174    c0.119-0.064,0.233-0.137,0.349-0.207c0.116-0.07,0.233-0.135,0.346-0.21c0.126-0.084,0.246-0.178,0.367-0.27    c0.095-0.072,0.193-0.138,0.286-0.214c0.2-0.164,0.391-0.337,0.575-0.52c0.011-0.011,0.023-0.02,0.033-0.03l26.54-26.54    c3.239-3.239,3.239-8.491,0-11.728c-3.24-3.239-8.491-3.239-11.73,0l-12.381,12.382V299.68H220.613z M176.38,123.853    c-5.183,0-9.4-4.217-9.4-9.4s4.217-9.4,9.4-9.4s9.4,4.216,9.4,9.4S181.563,123.853,176.38,123.853z M230.013,202.92    c0,5.183-4.217,9.4-9.4,9.4h-35.94v-73.244c7.667-2.59,13.739-8.662,16.329-16.329h29.01V202.92z M230.013,106.16h-29.01    c-3.47-10.273-13.193-17.693-24.622-17.693c-14.329,0-25.987,11.658-25.987,25.987c0,11.43,7.42,21.152,17.693,24.622v73.244    h-35.94c-5.183,0-9.4-4.217-9.4-9.4V25.987c0-5.183,4.216-9.4,9.4-9.4h88.467c5.183,0,9.4,4.217,9.4,9.4V106.16z M291.387,212.32    c-5.183,0-9.4-4.217-9.4-9.4v-67.337l15.265-15.265c3.239-3.239,3.239-8.491,0-11.728l-15.265-15.265V25.987    c0-5.183,4.216-9.4,9.4-9.4h88.467c5.183,0,9.4,4.217,9.4,9.4V202.92c0,5.183-4.216,9.4-9.4,9.4h-35.94v-73.244    c10.273-3.47,17.693-13.193,17.693-24.622c0-14.329-11.658-25.987-25.987-25.987c-14.329,0-25.987,11.658-25.987,25.987    c0,11.43,7.42,21.152,17.693,24.622v73.244H291.387z M379.853,299.68c5.183,0,9.4,4.216,9.4,9.4v176.933    c0,5.183-4.216,9.4-9.4,9.4h-88.467c-5.183,0-9.4-4.217-9.4-9.4V309.08c0-5.183,4.216-9.4,9.4-9.4h35.94v33.609l-12.381-12.382    c-3.24-3.239-8.491-3.239-11.729,0c-3.239,3.239-3.239,8.491,0,11.728l26.54,26.54c0.011,0.011,0.023,0.02,0.033,0.03    c0.184,0.181,0.375,0.355,0.575,0.52c0.093,0.076,0.191,0.143,0.286,0.215c0.122,0.091,0.24,0.185,0.367,0.27    c0.113,0.075,0.23,0.141,0.346,0.21c0.116,0.07,0.23,0.143,0.349,0.207c0.118,0.063,0.241,0.117,0.363,0.175    c0.124,0.059,0.245,0.121,0.373,0.172c0.118,0.049,0.24,0.088,0.361,0.132c0.135,0.049,0.268,0.1,0.405,0.142    c0.122,0.036,0.244,0.063,0.367,0.094c0.139,0.035,0.278,0.074,0.419,0.103c0.143,0.029,0.286,0.045,0.43,0.065    c0.124,0.018,0.247,0.041,0.372,0.054c0.272,0.027,0.545,0.041,0.818,0.041c0.273,0,0.546-0.014,0.818-0.041    c0.126-0.012,0.248-0.035,0.372-0.054c0.144-0.021,0.288-0.038,0.43-0.065c0.143-0.029,0.28-0.068,0.419-0.103    c0.123-0.031,0.245-0.057,0.367-0.094c0.138-0.042,0.271-0.093,0.406-0.142c0.121-0.043,0.241-0.083,0.359-0.132    c0.127-0.053,0.25-0.115,0.374-0.174c0.121-0.057,0.243-0.111,0.362-0.174c0.119-0.064,0.233-0.137,0.349-0.207    c0.116-0.07,0.233-0.135,0.346-0.21c0.126-0.084,0.245-0.178,0.367-0.27c0.095-0.072,0.193-0.138,0.286-0.214    c0.2-0.164,0.391-0.337,0.575-0.52c0.011-0.011,0.023-0.02,0.033-0.03l26.54-26.54c3.239-3.239,3.239-8.491,0-11.728    c-3.24-3.239-8.491-3.239-11.73,0l-12.381,12.382V299.68H379.853z M335.62,123.853c-5.183,0-9.4-4.217-9.4-9.4s4.217-9.4,9.4-9.4    s9.4,4.216,9.4,9.4S340.803,123.853,335.62,123.853z"
                                                        fill="#dc2d3c"></path>
                                                </g>
                                                <g>
                                                    <path
                                                        d="M335.62,371.559c-14.329,0-25.987,11.658-25.987,25.987c0,14.329,11.658,25.987,25.987,25.987    c14.329,0,25.987-11.658,25.987-25.987C361.607,383.217,349.949,371.559,335.62,371.559z M335.62,406.946    c-5.183,0-9.4-4.216-9.4-9.4s4.217-9.4,9.4-9.4s9.4,4.217,9.4,9.4S340.803,406.946,335.62,406.946z"
                                                        fill="#dc2d3c"></path>
                                                </g>
                                                <g>
                                                    <path
                                                        d="M176.38,371.559c-14.329,0-25.987,11.658-25.987,25.987c0,14.329,11.658,25.987,25.987,25.987    s25.987-11.658,25.987-25.987C202.367,383.217,190.71,371.559,176.38,371.559z M176.38,406.946c-5.183,0-9.4-4.216-9.4-9.4    s4.217-9.4,9.4-9.4s9.4,4.217,9.4,9.4S181.563,406.946,176.38,406.946z"
                                                        fill="#dc2d3c"></path>
                                                </g>
                                            </g>
                                        </svg> </div>
                                    <h3 class="h6 my-3 w-100"><b>3. Prototype</b></h3>
                                    <p class="desc m-0">After designing, you will get your prototype, which will be sent
                                        ahead for the
                                        development process for the product.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3 mt-md-3 mt-lg-4">
                            <div class="card-box">
                                <div
                                    class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                    <img class="img-fluid"
                                        src="/frontend_assets/img/process-we-follow/appdevelopment.svg"
                                        alt="development">
                                    <h3 class="h6 my-3 w-100"><b>4. Development</b></h3>
                                    <p class="desc m-0">Development of mobile application/web/blockchain started using
                                        latest tools and
                                        technologies with transparency.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3 mt-md-3 mt-lg-4">
                            <div class="card-box">
                                <div
                                    class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                    <div class="process-icon"> <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_8" x="0px"
                                            y="0px" viewBox="0 0 480.089 480.089"
                                            style="enable-background:new 0 0 480.089 480.089" xml:space="preserve"
                                            width="50px" height="50px">
                                            <g id="medal">
                                                <path
                                                    d="M471.1,4.224c-1.393-2.602-4.105-4.225-7.056-4.224h-112c-2.674,0-5.172,1.335-6.656,3.56L240.044,161.6L134.7,3.56     C133.216,1.335,130.718,0,128.044,0h-112c-4.418-0.001-8.001,3.581-8.001,7.999c0,1.581,0.468,3.126,1.345,4.441L120.044,178.4     V208c0,4.418,3.582,8,8,8h88v10.336c-69.439,13.255-114.985,80.291-101.73,149.73s80.291,114.985,149.73,101.73     c69.439-13.255,114.985-80.291,101.73-149.73c-9.842-51.562-50.168-91.887-101.73-101.73V216h88c4.418,0,8-3.582,8-8v-29.6     L470.7,12.44C472.339,9.985,472.493,6.827,471.1,4.224z M110.964,136h49.08v-16h-59.72L30.988,16h92.776L161.1,72h-57.056v16     h67.72l53.336,80h-92.8L110.964,136z M352.044,352c0,61.856-50.144,112-112,112s-112-50.144-112-112s50.144-112,112-112     C301.873,240.066,351.978,290.172,352.044,352z M232.044,224.408V216h16v8.408c-2.656-0.168-5.296-0.408-8-0.408     C237.34,224,234.7,224.24,232.044,224.408z M344.044,200h-208v-16h208V200z M379.764,120h-59.72v16H369.1l-21.336,32h-92.8     L308.3,88h67.744V72h-57.056l37.336-56h92.8L379.764,120z"
                                                    fill="#0caec1"></path>
                                                <path
                                                    d="M136.044,352c0,57.438,46.562,104,104,104s104-46.562,104-104s-46.562-104-104-104     C182.634,248.066,136.11,294.59,136.044,352z M328.044,352c0,48.601-39.399,88-88,88s-88-39.399-88-88c0-48.601,39.399-88,88-88     C288.621,264.057,327.987,303.423,328.044,352z"
                                                    fill="#0caec1"></path>
                                                <path
                                                    d="M64.044,224h-16c0,17.673-14.327,32-32,32v16c17.673,0,32,14.327,32,32h16c0-17.673,14.327-32,32-32v-16     C78.371,256,64.044,241.673,64.044,224z M56.044,277.496l-0.072-0.096c-3.528-5.272-8.056-9.8-13.328-13.328L42.548,264     c5.35-3.558,9.938-8.146,13.496-13.496c3.558,5.35,8.146,9.938,13.496,13.496C64.19,267.558,59.602,272.146,56.044,277.496z"
                                                    fill="#0caec1"></path>
                                                <path
                                                    d="M432.044,352h-16c0,17.673-14.327,32-32,32v16c17.673,0,32,14.327,32,32h16c0-17.673,14.327-32,32-32v-16     C446.371,384,432.044,369.673,432.044,352z M424.044,405.496l-0.072-0.096c-3.528-5.272-8.056-9.8-13.328-13.328L410.548,392     c5.35-3.558,9.938-8.146,13.496-13.496c3.558,5.35,8.146,9.938,13.496,13.496C432.19,395.558,427.602,400.146,424.044,405.496z"
                                                    fill="#0caec1"></path>
                                                <polygon
                                                    points="232.044,304 216.044,304 216.044,320 232.044,320 232.044,408 248.044,408 248.044,296 232.044,296    "
                                                    fill="#0caec1"></polygon>
                                            </g>
                                        </svg> </div>
                                    <h3 class="h6 my-3 w-100"><b>5. Quality Assurance</b></h3>
                                    <p class="desc m-0">Hyperlink values quality and provides 100% bug free application with
                                        no
                                        compromisation in it.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3 mt-md-3 mt-lg-4">
                            <div class="card-box">
                                <div
                                    class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                    <div class="process-icon"> <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_9" x="0px"
                                            y="0px" viewBox="0 0 488.003 488.003"
                                            style="enable-background:new 0 0 488.003 488.003" xml:space="preserve"
                                            width="50px" height="50px">
                                            <g class="deployment">
                                                <g>
                                                    <path
                                                        d="M256.003,323.999h-144v-48c-0.001-4.418-3.583-7.999-8.002-7.998c-2.121,0-4.154,0.843-5.654,2.342l-96,96    c-3.04,3.036-3.139,7.932-0.224,11.088l96,104c1.516,1.639,3.648,2.57,5.88,2.568c4.418,0,8-3.582,8-8v-48h144    c4.418,0,8-3.582,8-8v-88C264.003,327.581,260.421,323.999,256.003,323.999z M248.003,411.999h-144c-4.418,0-8,3.582-8,8v35.536    l-76.904-83.32l76.904-76.904v36.688c0,4.418,3.582,8,8,8h144V411.999z"
                                                        fill="#cb1ac5"></path>
                                                </g>
                                                <g>
                                                    <path
                                                        d="M478.397,111.198c-0.392-0.523-0.847-0.995-1.355-1.407h0l-128-104c-3.431-2.784-8.469-2.258-11.253,1.173    c-1.155,1.424-1.786,3.202-1.787,5.035v48h-112c-4.418,0-8,3.582-8,8v88c0,4.418,3.582,8,8,8h112v48c0,4.418,3.582,8,8,8    c1.731,0,3.415-0.561,4.8-1.6l128-96C480.336,119.746,481.05,114.732,478.397,111.198z M352.003,195.999v-40c0-4.418-3.582-8-8-8    h-112v-72h112c4.418,0,8-3.582,8-8v-39.2l107,86.952L352.003,195.999z"
                                                        fill="#cb1ac5"></path>
                                                </g>
                                                <g>
                                                    <rect x="136.003" y="59.999" width="64" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="104.003" y="59.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="32.003" y="107.999" width="56" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="168.003" y="147.999" width="32" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="88.003" y="147.999" width="48" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="56.003" y="147.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="24.003" y="147.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="128.003" y="107.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="160.003" y="107.999" width="40" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="0.003" y="107.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="280.003" y="323.999" width="80" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="376.003" y="323.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="392.003" y="371.999" width="56" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="280.003" y="411.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="368.003" y="411.999" width="48" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="432.003" y="411.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="472.003" y="411.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="344.003" y="371.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="280.003" y="371.999" width="48" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="464.003" y="371.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="312.003" y="411.999" width="16" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="432.003" y="323.999" width="48" height="16" fill="#cb1ac5">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="8.003" y="59.999" width="48" height="16" fill="#cb1ac5"></rect>
                                                </g>
                                            </g>
                                        </svg> </div>
                                    <h3 class="h6 my-3 w-100"><b>6. Deployment</b></h3>
                                    <p class="desc m-0">After trial and following all processes, your app is ready to launch
                                        on the App
                                        store or Play Store.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3 mt-md-3 mt-lg-4">
                            <div class="card-box">
                                <div
                                    class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                    <div class="process-icon"> <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_10" x="0px"
                                            y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480"
                                            xml:space="preserve" width="50px" height="50px">
                                            <g class="support">
                                                <path
                                                    d="M456,88H331.784C310.883,57.95,276.604,40.023,240,40V24c0-13.255-10.745-24-24-24H24C10.745,0,0,10.745,0,24v96    c0,13.255,10.745,24,24,24h17.6l24.264,29.128c2.827,3.395,7.871,3.856,11.267,1.029c0.374-0.311,0.718-0.656,1.029-1.029    L102.4,144h25.992c-0.192,2.656-0.408,5.296-0.408,8v16c-0.35,4.067,2.664,7.648,6.731,7.999c0.752,0.065,1.509,0.014,2.245-0.151    c2.374,20.028,9.473,39.205,20.712,55.952c-13.661-0.983-25.182-10.552-28.656-23.8H136v-16h-16c-4.418,0-8,3.582-8,8    c0.031,26.497,21.503,47.969,48,48h10.4c3.592,3.891,7.423,7.555,11.472,10.968c0.68,0.568,1.408,1.056,2.104,1.6v29.672    l-66.528,22.176c-2.975,0.993-5.096,3.633-5.424,6.752l-16,152c-0.459,4.394,2.73,8.329,7.125,8.789    c0.283,0.03,0.567,0.044,0.851,0.043h272c4.418-0.004,7.996-3.59,7.992-8.008c0-0.265-0.014-0.529-0.04-0.792l-16-152    c-0.328-3.119-2.449-5.759-5.424-6.752L296,290.24v-29.672c0.696-0.544,1.416-1.032,2.104-1.6    c18.567-15.484,32.337-35.939,39.696-58.968h7.8l24.264,29.128c2.827,3.395,7.871,3.856,11.267,1.029    c0.374-0.311,0.718-0.656,1.029-1.029L406.4,200H456c13.255,0,24-10.745,24-24v-64C480,98.745,469.255,88,456,88z M130.656,128    H98.664c-2.375-0.003-4.629,1.049-6.152,2.872L72,155.504l-20.512-24.632c-1.523-1.823-3.777-2.875-6.152-2.872H24    c-4.418,0-8-3.582-8-8V24c0-4.418,3.582-8,8-8h192c4.418,0,8,3.582,8,8v17.28C177.893,47.993,140.738,82.511,130.656,128z     M184,464h-71.12l14.536-138.04L184,307.104V464z M200,464V357.768l28.352-9.448l-20.072,73.6c-0.518,1.898-0.319,3.92,0.56,5.68    l18.216,36.4H200z M200,340.896v-15.952l19.144,9.6L200,340.896z M224.52,423.16L240,366.4l15.464,56.76L240,454.112    L224.52,423.16z M280,464h-27.056l18.208-36.424c0.879-1.76,1.078-3.782,0.56-5.68l-20.072-73.6l28.36,9.472V464z M280,340.896    l-19.144-6.4L280,324.944V340.896z M280,296v11.056l-40,20l-40-20V270.64c25.205,12.488,54.795,12.488,80,0V296z M352.584,325.96    L367.12,464H296V307.104L352.584,325.96z M287.848,246.672c-27.08,22.557-66.245,23.111-93.952,1.328H232v-16h-54.28    c-15.289-18.507-24.182-41.463-25.352-65.44c31.963-20.883,67.326-36.027,104.496-44.752c4.79,26.705,28.005,46.154,55.136,46.192    h15.616C325.777,198.586,311.387,227.055,287.848,246.672z M312,152c-22.08-0.026-39.974-17.92-40-40    c0.004-4.418-3.575-8.003-7.993-8.007c-0.586,0-1.17,0.063-1.743,0.191l-4.8,1.072c-40.374,8.922-78.809,25.046-113.464,47.6V152    c0-53.019,42.981-96,96-96s96,42.981,96,96H312z M464,176c0,4.418-3.582,8-8,8h-53.336c-2.375-0.003-4.629,1.049-6.152,2.872    L376,211.504l-20.512-24.624c-1.521-1.826-3.775-2.881-6.152-2.88h-7.592c0.96-5.289,1.585-10.633,1.872-16H344    c4.418,0,8-3.582,8-8v-8c-0.018-16.618-3.764-33.021-10.96-48H456c4.418,0,8,3.582,8,8V176z"
                                                    fill="#a241bb"></path>
                                            </g>
                                        </svg> </div>
                                    <h3 class="h6 my-3 w-100"><b>7. Support & Maintenance</b></h3>
                                    <p class="desc m-0">Our company offers you all support and the team is always ready to
                                        answer every
                                        query after deployment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sect-pad-tb process-we-follow bg-light-gray d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 left-content">
                            <h2 class="main-title mb-0 mt-60 title-process-we-follow">Process We Follow</h2>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 mt-md-3 mt-lg-4">
                            <div class="swiper-container process-we-follow-mob">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide p-3">
                                        <div class="card-box">
                                            <div
                                                class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                                <div class="process-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_5"
                                                        x="0px" y="0px" viewBox="0 0 496.941 496.941"
                                                        style="enable-background:new 0 0 496.941 496.941"
                                                        xml:space="preserve" width="50px" height="50px">
                                                        <g id="requirement">
                                                            <path
                                                                d="M475.299,106.918l-12.047-3.765c-3.012-0.753-6.024-1.506-9.788-1.506c-13.553,0-25.6,9.035-30.118,21.835l-6.776,20.329     v-15.059V128c0-2.259-1.506-4.518-3.012-6.024L290.076,2.259C288.57,0.753,286.311,0,284.805,0H43.111     c-4.518,0-7.529,3.012-7.529,7.529v23.341H7.723c-4.518,0-7.529,3.012-7.529,7.529v451.012c0,4.518,3.012,7.529,7.529,7.529     h365.929c4.518,0,7.529-3.012,7.529-7.529v-23.341h27.859c4.518,0,7.529-3.012,7.529-7.529V356.894l21.082-28.612l0.753-2.259     l56.471-179.953C500.899,129.506,491.864,112.188,475.299,106.918z M292.334,25.6l98.635,94.871h-98.635V25.6z M366.123,481.882     H15.252V45.929h20.329v412.612c0,4.518,3.012,7.529,7.529,7.529h323.012V481.882z M402.264,451.012h-0.753H50.64V15.059h226.635     V128c0,4.518,3.012,7.529,7.529,7.529h117.459V192l-35.388,111.435v2.259l1.506,95.624c0,3.012,2.259,6.024,5.271,6.776     c3.012,0.753,6.776,0,8.282-3.012l20.329-27.106V451.012z M382.687,377.976l-1.506-62.494l37.647,12.047L382.687,377.976z      M481.323,141.553l-54.212,172.424l-43.671-14.306L437.652,128c3.012-8.282,12.047-13.553,20.329-10.541l12.047,3.765     C479.064,123.482,484.334,133.271,481.323,141.553z"
                                                                fill="#a4c639"></path>
                                                            <path
                                                                d="M86.782,206.306h228.894c4.518,0,7.529-3.012,7.529-7.529c0-4.518-3.012-7.529-7.529-7.529H86.782     c-4.518,0-7.529,3.012-7.529,7.529C79.252,203.294,82.264,206.306,86.782,206.306z"
                                                                fill="#a4c639"></path>
                                                            <path
                                                                d="M347.299,411.106H233.605c-4.518,0-7.529,3.012-7.529,7.529s3.012,7.529,7.529,7.529h112.941     c4.518,0,7.529-3.012,7.529-7.529S351.064,411.106,347.299,411.106z"
                                                                fill="#a4c639"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <h3 class="h6 my-3 w-100"><b>1. Requirement Gathering</b></h3>
                                                <p class="desc m-0">We follow the first and foremost priority of gathering
                                                    requirements,
                                                    resources, and information to begin our project.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box">
                                            <div
                                                class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                                <div class="process-icon"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_6"
                                                        x="0px" y="0px" viewBox="0 0 512 512"
                                                        style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                        width="50px" height="50px">
                                                        <g id="uiux">
                                                            <g>
                                                                <path
                                                                    d="M360,104h-80c-4.418,0-8,3.582-8,8v80c0,4.418,3.582,8,8,8h80c4.418,0,8-3.582,8-8v-80C368,107.582,364.418,104,360,104z     M288,184v-52.693L340.693,184H288z M352,172.68L299.32,120H352V172.68z"
                                                                    fill="#1094f1"></path>
                                                            </g>
                                                            <g>
                                                                <path
                                                                    d="M360,216h-80c-4.418,0-8,3.582-8,8v80c0,4.418,3.582,8,8,8h80c4.418,0,8-3.582,8-8v-80C368,219.582,364.418,216,360,216z     M288,296v-52.685L340.685,296H288z M352,284.688L299.312,232H352V284.688z"
                                                                    fill="#1094f1"></path>
                                                            </g>
                                                            <g>
                                                                <rect x="272" y="328" width="64" height="16" fill="#1094f1">
                                                                </rect>
                                                            </g>
                                                            <g>
                                                                <rect x="352" y="328" width="16" height="16" fill="#1094f1">
                                                                </rect>
                                                            </g>
                                                            <g>
                                                                <rect x="272" y="360" width="96" height="16" fill="#1094f1">
                                                                </rect>
                                                            </g>
                                                            <g>
                                                                <rect x="272" y="392" width="96" height="16" fill="#1094f1">
                                                                </rect>
                                                            </g>
                                                            <g>
                                                                <rect x="136" y="184" width="80" height="16" fill="#1094f1">
                                                                </rect>
                                                            </g>
                                                            <g>
                                                                <rect x="136" y="248" width="80" height="16" fill="#1094f1">
                                                                </rect>
                                                            </g>
                                                            <g>
                                                                <rect x="136" y="312" width="80" height="16" fill="#1094f1">
                                                                </rect>
                                                            </g>
                                                            <g>
                                                                <path
                                                                    d="M464,56c-4.418,0-8,3.582-8,8v32h-48V16c0-8.837-7.163-16-16-16H120c-8.837,0-16,7.163-16,16v80H56V64    c0-4.418-3.582-8-8-8c-0.48,0-48,0.728-48,64v312c0,30.504,30.4,44.632,46.4,47.84c0.526,0.111,1.062,0.165,1.6,0.16h56v16    c0,8.837,7.163,16,16,16h272c8.837,0,16-7.163,16-16v-16h56c0.538,0.005,1.074-0.049,1.6-0.16c16-3.208,46.4-17.336,46.4-47.84    V120C512,56.728,464.48,56,464,56z M16,120c0-32.64,14.4-43.088,24-46.4v312.232c-8.773,2.722-16.927,7.139-24,13V120z M104,464    H48.88C44.104,462.856,16,455.128,16,432c0-24.96,32.248-31.88,33.6-32.16c3.725-0.76,6.401-4.038,6.4-7.84V112h48V464z M120,88    h92.12L120,145.543V88z M232,94.447V152h-92.136L232,94.447z M120,168h112v48H120V168z M120,232h112v48H120V232z M120,296h112v48    H120V296z M120,360h94.186L120,424.724V360z M232,367.172V432h-94.337L232,367.172z M392,496H120v-48h272V496z M392,432H248V88    h144V432z M392,72H120V16h272V72z M463.136,464H408V112h48v280c-0.001,3.802,2.675,7.08,6.4,7.84    c0.368,0.072,33.6,7.008,33.6,32.16C496,455.256,468.072,462.84,463.136,464z M496,398.832c-7.073-5.861-15.227-10.278-24-13V73.6    c9.496,3.32,24,13.776,24,46.4V398.832z"
                                                                    fill="#1094f1"></path>
                                                            </g>
                                                            <g>
                                                                <rect x="200" y="40" width="64" height="16" fill="#1094f1">
                                                                </rect>
                                                            </g>
                                                            <g>
                                                                <rect x="280" y="40" width="16" height="16" fill="#1094f1">
                                                                </rect>
                                                            </g>
                                                            <g>
                                                                <rect x="312" y="40" width="16" height="16" fill="#1094f1">
                                                                </rect>
                                                            </g>
                                                        </g>
                                                    </svg> </div>
                                                <h3 class="h6 my-3 w-100"><b>2. UI/UX Design</b></h3>
                                                <p class="desc m-0">We create catchy and charming designs with the latest
                                                    tools of designing to
                                                    make it a best user-friendly experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box">
                                            <div
                                                class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                                <div class="process-icon"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                        id="Layer_9" x="0px" y="0px" viewBox="0 0 512 512"
                                                        style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                        width="50px" height="50px">
                                                        <g id="prototype">
                                                            <g>
                                                                <path
                                                                    d="M379.853,228.907c14.329,0,25.987-11.658,25.987-25.987V25.987C405.84,11.658,394.183,0,379.853,0h-88.467    C277.057,0,265.4,11.658,265.4,25.987v53.659c-2.303-0.153-4.657,0.642-6.418,2.403c-3.239,3.239-3.239,8.491,0,11.728    l12.382,12.382H246.6V25.987C246.6,11.658,234.943,0,220.613,0h-88.467c-14.329,0-25.987,11.658-25.987,25.987V202.92    c0,14.329,11.658,25.987,25.987,25.987h35.94v54.186h-35.94c-14.329,0-25.987,11.658-25.987,25.987v176.933    c0,14.329,11.658,25.987,25.987,25.987h88.467c14.329,0,25.987-11.658,25.987-25.987V309.08c0-14.329-11.658-25.987-25.987-25.987    h-35.94v-54.186h35.94c14.329,0,25.987-11.658,25.987-25.987v-80.173h24.763l-12.382,12.382c-3.239,3.239-3.239,8.491,0,11.728    c1.62,1.619,3.743,2.43,5.865,2.43c0.185,0,0.368-0.014,0.553-0.027v53.659c0,14.329,11.658,25.987,25.987,25.987h35.94v54.186    h-35.94c-14.329,0-25.987,11.658-25.987,25.987v176.933c0,14.329,11.658,25.987,25.987,25.987h88.467    c14.329,0,25.987-11.658,25.987-25.987V309.08c0-14.329-11.658-25.987-25.987-25.987h-35.94v-54.186H379.853z M220.613,299.68    c5.183,0,9.4,4.216,9.4,9.4v176.933c0,5.183-4.217,9.4-9.4,9.4h-88.467c-5.183,0-9.4-4.217-9.4-9.4V309.08    c0-5.183,4.216-9.4,9.4-9.4h35.94v33.609l-12.381-12.382c-3.24-3.239-8.491-3.239-11.73,0s-3.239,8.491,0,11.728l26.54,26.54    c0.011,0.011,0.023,0.02,0.033,0.03c0.184,0.181,0.375,0.355,0.575,0.52c0.093,0.076,0.191,0.143,0.286,0.215    c0.122,0.091,0.24,0.185,0.367,0.27c0.113,0.075,0.23,0.141,0.346,0.21c0.116,0.07,0.23,0.143,0.349,0.207    c0.118,0.063,0.241,0.117,0.363,0.175c0.124,0.059,0.245,0.121,0.373,0.172c0.118,0.049,0.24,0.088,0.361,0.132    c0.135,0.049,0.268,0.1,0.405,0.142c0.122,0.036,0.244,0.063,0.367,0.094c0.139,0.035,0.278,0.074,0.419,0.103    c0.143,0.029,0.286,0.045,0.43,0.065c0.124,0.018,0.247,0.041,0.372,0.054c0.272,0.027,0.545,0.041,0.818,0.041    c0.273,0,0.546-0.014,0.818-0.041c0.126-0.012,0.248-0.035,0.372-0.054c0.144-0.021,0.288-0.038,0.43-0.065    c0.143-0.029,0.28-0.068,0.419-0.103c0.123-0.031,0.245-0.057,0.367-0.094c0.138-0.042,0.271-0.093,0.406-0.142    c0.12-0.043,0.241-0.083,0.359-0.132c0.127-0.053,0.25-0.115,0.374-0.174c0.121-0.057,0.243-0.111,0.362-0.174    c0.119-0.064,0.233-0.137,0.349-0.207c0.116-0.07,0.233-0.135,0.346-0.21c0.126-0.084,0.246-0.178,0.367-0.27    c0.095-0.072,0.193-0.138,0.286-0.214c0.2-0.164,0.391-0.337,0.575-0.52c0.011-0.011,0.023-0.02,0.033-0.03l26.54-26.54    c3.239-3.239,3.239-8.491,0-11.728c-3.24-3.239-8.491-3.239-11.73,0l-12.381,12.382V299.68H220.613z M176.38,123.853    c-5.183,0-9.4-4.217-9.4-9.4s4.217-9.4,9.4-9.4s9.4,4.216,9.4,9.4S181.563,123.853,176.38,123.853z M230.013,202.92    c0,5.183-4.217,9.4-9.4,9.4h-35.94v-73.244c7.667-2.59,13.739-8.662,16.329-16.329h29.01V202.92z M230.013,106.16h-29.01    c-3.47-10.273-13.193-17.693-24.622-17.693c-14.329,0-25.987,11.658-25.987,25.987c0,11.43,7.42,21.152,17.693,24.622v73.244    h-35.94c-5.183,0-9.4-4.217-9.4-9.4V25.987c0-5.183,4.216-9.4,9.4-9.4h88.467c5.183,0,9.4,4.217,9.4,9.4V106.16z M291.387,212.32    c-5.183,0-9.4-4.217-9.4-9.4v-67.337l15.265-15.265c3.239-3.239,3.239-8.491,0-11.728l-15.265-15.265V25.987    c0-5.183,4.216-9.4,9.4-9.4h88.467c5.183,0,9.4,4.217,9.4,9.4V202.92c0,5.183-4.216,9.4-9.4,9.4h-35.94v-73.244    c10.273-3.47,17.693-13.193,17.693-24.622c0-14.329-11.658-25.987-25.987-25.987c-14.329,0-25.987,11.658-25.987,25.987    c0,11.43,7.42,21.152,17.693,24.622v73.244H291.387z M379.853,299.68c5.183,0,9.4,4.216,9.4,9.4v176.933    c0,5.183-4.216,9.4-9.4,9.4h-88.467c-5.183,0-9.4-4.217-9.4-9.4V309.08c0-5.183,4.216-9.4,9.4-9.4h35.94v33.609l-12.381-12.382    c-3.24-3.239-8.491-3.239-11.729,0c-3.239,3.239-3.239,8.491,0,11.728l26.54,26.54c0.011,0.011,0.023,0.02,0.033,0.03    c0.184,0.181,0.375,0.355,0.575,0.52c0.093,0.076,0.191,0.143,0.286,0.215c0.122,0.091,0.24,0.185,0.367,0.27    c0.113,0.075,0.23,0.141,0.346,0.21c0.116,0.07,0.23,0.143,0.349,0.207c0.118,0.063,0.241,0.117,0.363,0.175    c0.124,0.059,0.245,0.121,0.373,0.172c0.118,0.049,0.24,0.088,0.361,0.132c0.135,0.049,0.268,0.1,0.405,0.142    c0.122,0.036,0.244,0.063,0.367,0.094c0.139,0.035,0.278,0.074,0.419,0.103c0.143,0.029,0.286,0.045,0.43,0.065    c0.124,0.018,0.247,0.041,0.372,0.054c0.272,0.027,0.545,0.041,0.818,0.041c0.273,0,0.546-0.014,0.818-0.041    c0.126-0.012,0.248-0.035,0.372-0.054c0.144-0.021,0.288-0.038,0.43-0.065c0.143-0.029,0.28-0.068,0.419-0.103    c0.123-0.031,0.245-0.057,0.367-0.094c0.138-0.042,0.271-0.093,0.406-0.142c0.121-0.043,0.241-0.083,0.359-0.132    c0.127-0.053,0.25-0.115,0.374-0.174c0.121-0.057,0.243-0.111,0.362-0.174c0.119-0.064,0.233-0.137,0.349-0.207    c0.116-0.07,0.233-0.135,0.346-0.21c0.126-0.084,0.245-0.178,0.367-0.27c0.095-0.072,0.193-0.138,0.286-0.214    c0.2-0.164,0.391-0.337,0.575-0.52c0.011-0.011,0.023-0.02,0.033-0.03l26.54-26.54c3.239-3.239,3.239-8.491,0-11.728    c-3.24-3.239-8.491-3.239-11.73,0l-12.381,12.382V299.68H379.853z M335.62,123.853c-5.183,0-9.4-4.217-9.4-9.4s4.217-9.4,9.4-9.4    s9.4,4.216,9.4,9.4S340.803,123.853,335.62,123.853z"
                                                                    fill="#dc2d3c"></path>
                                                            </g>
                                                            <g>
                                                                <path
                                                                    d="M335.62,371.559c-14.329,0-25.987,11.658-25.987,25.987c0,14.329,11.658,25.987,25.987,25.987    c14.329,0,25.987-11.658,25.987-25.987C361.607,383.217,349.949,371.559,335.62,371.559z M335.62,406.946    c-5.183,0-9.4-4.216-9.4-9.4s4.217-9.4,9.4-9.4s9.4,4.217,9.4,9.4S340.803,406.946,335.62,406.946z"
                                                                    fill="#dc2d3c"></path>
                                                            </g>
                                                            <g>
                                                                <path
                                                                    d="M176.38,371.559c-14.329,0-25.987,11.658-25.987,25.987c0,14.329,11.658,25.987,25.987,25.987    s25.987-11.658,25.987-25.987C202.367,383.217,190.71,371.559,176.38,371.559z M176.38,406.946c-5.183,0-9.4-4.216-9.4-9.4    s4.217-9.4,9.4-9.4s9.4,4.217,9.4,9.4S181.563,406.946,176.38,406.946z"
                                                                    fill="#dc2d3c"></path>
                                                            </g>
                                                        </g>
                                                    </svg> </div>
                                                <h3 class="h6 my-3 w-100"><b>3. Prototype</b></h3>
                                                <p class="desc m-0">After designing, you will get your prototype, which will
                                                    be sent ahead for the
                                                    development process for the product.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box">
                                            <div
                                                class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                                <img class="img-fluid"
                                                    src="/frontend_assets/img/process-we-follow/appdevelopment.svg"
                                                    alt="development">
                                                <h3 class="h6 my-3 w-100"><b>4. Development</b></h3>
                                                <p class="desc m-0">Development of mobile application/ web/blockchain
                                                    started using latest tools
                                                    and technology with transparency.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box">
                                            <div
                                                class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                                <div class="process-icon"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_8"
                                                        x="0px" y="0px" viewBox="0 0 480.089 480.089"
                                                        style="enable-background:new 0 0 480.089 480.089"
                                                        xml:space="preserve" width="50px" height="50px">
                                                        <g id="medal">
                                                            <path
                                                                d="M471.1,4.224c-1.393-2.602-4.105-4.225-7.056-4.224h-112c-2.674,0-5.172,1.335-6.656,3.56L240.044,161.6L134.7,3.56     C133.216,1.335,130.718,0,128.044,0h-112c-4.418-0.001-8.001,3.581-8.001,7.999c0,1.581,0.468,3.126,1.345,4.441L120.044,178.4     V208c0,4.418,3.582,8,8,8h88v10.336c-69.439,13.255-114.985,80.291-101.73,149.73s80.291,114.985,149.73,101.73     c69.439-13.255,114.985-80.291,101.73-149.73c-9.842-51.562-50.168-91.887-101.73-101.73V216h88c4.418,0,8-3.582,8-8v-29.6     L470.7,12.44C472.339,9.985,472.493,6.827,471.1,4.224z M110.964,136h49.08v-16h-59.72L30.988,16h92.776L161.1,72h-57.056v16     h67.72l53.336,80h-92.8L110.964,136z M352.044,352c0,61.856-50.144,112-112,112s-112-50.144-112-112s50.144-112,112-112     C301.873,240.066,351.978,290.172,352.044,352z M232.044,224.408V216h16v8.408c-2.656-0.168-5.296-0.408-8-0.408     C237.34,224,234.7,224.24,232.044,224.408z M344.044,200h-208v-16h208V200z M379.764,120h-59.72v16H369.1l-21.336,32h-92.8     L308.3,88h67.744V72h-57.056l37.336-56h92.8L379.764,120z"
                                                                fill="#0caec1"></path>
                                                            <path
                                                                d="M136.044,352c0,57.438,46.562,104,104,104s104-46.562,104-104s-46.562-104-104-104     C182.634,248.066,136.11,294.59,136.044,352z M328.044,352c0,48.601-39.399,88-88,88s-88-39.399-88-88c0-48.601,39.399-88,88-88     C288.621,264.057,327.987,303.423,328.044,352z"
                                                                fill="#0caec1"></path>
                                                            <path
                                                                d="M64.044,224h-16c0,17.673-14.327,32-32,32v16c17.673,0,32,14.327,32,32h16c0-17.673,14.327-32,32-32v-16     C78.371,256,64.044,241.673,64.044,224z M56.044,277.496l-0.072-0.096c-3.528-5.272-8.056-9.8-13.328-13.328L42.548,264     c5.35-3.558,9.938-8.146,13.496-13.496c3.558,5.35,8.146,9.938,13.496,13.496C64.19,267.558,59.602,272.146,56.044,277.496z"
                                                                fill="#0caec1"></path>
                                                            <path
                                                                d="M432.044,352h-16c0,17.673-14.327,32-32,32v16c17.673,0,32,14.327,32,32h16c0-17.673,14.327-32,32-32v-16     C446.371,384,432.044,369.673,432.044,352z M424.044,405.496l-0.072-0.096c-3.528-5.272-8.056-9.8-13.328-13.328L410.548,392     c5.35-3.558,9.938-8.146,13.496-13.496c3.558,5.35,8.146,9.938,13.496,13.496C432.19,395.558,427.602,400.146,424.044,405.496z"
                                                                fill="#0caec1"></path>
                                                            <polygon
                                                                points="232.044,304 216.044,304 216.044,320 232.044,320 232.044,408 248.044,408 248.044,296 232.044,296    "
                                                                fill="#0caec1"></polygon>
                                                        </g>
                                                    </svg> </div>
                                                <h3 class="h6 my-3 w-100"><b>5. Quality Assurance</b></h3>
                                                <p class="desc m-0">Hyperlink values quality and provides 100% bug free
                                                    application with no
                                                    compromisation in it.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box">
                                            <div
                                                class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                                <div class="process-icon"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_9"
                                                        x="0px" y="0px" viewBox="0 0 488.003 488.003"
                                                        style="enable-background:new 0 0 488.003 488.003"
                                                        xml:space="preserve" width="50px" height="50px">
                                                        <g class="deployment">
                                                            <g>
                                                                <path
                                                                    d="M256.003,323.999h-144v-48c-0.001-4.418-3.583-7.999-8.002-7.998c-2.121,0-4.154,0.843-5.654,2.342l-96,96    c-3.04,3.036-3.139,7.932-0.224,11.088l96,104c1.516,1.639,3.648,2.57,5.88,2.568c4.418,0,8-3.582,8-8v-48h144    c4.418,0,8-3.582,8-8v-88C264.003,327.581,260.421,323.999,256.003,323.999z M248.003,411.999h-144c-4.418,0-8,3.582-8,8v35.536    l-76.904-83.32l76.904-76.904v36.688c0,4.418,3.582,8,8,8h144V411.999z"
                                                                    fill="#cb1ac5"></path>
                                                            </g>
                                                            <g>
                                                                <path
                                                                    d="M478.397,111.198c-0.392-0.523-0.847-0.995-1.355-1.407h0l-128-104c-3.431-2.784-8.469-2.258-11.253,1.173    c-1.155,1.424-1.786,3.202-1.787,5.035v48h-112c-4.418,0-8,3.582-8,8v88c0,4.418,3.582,8,8,8h112v48c0,4.418,3.582,8,8,8    c1.731,0,3.415-0.561,4.8-1.6l128-96C480.336,119.746,481.05,114.732,478.397,111.198z M352.003,195.999v-40c0-4.418-3.582-8-8-8    h-112v-72h112c4.418,0,8-3.582,8-8v-39.2l107,86.952L352.003,195.999z"
                                                                    fill="#cb1ac5"></path>
                                                            </g>
                                                            <g>
                                                                <rect x="136.003" y="59.999" width="64" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="104.003" y="59.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="32.003" y="107.999" width="56" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="168.003" y="147.999" width="32" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="88.003" y="147.999" width="48" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="56.003" y="147.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="24.003" y="147.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="128.003" y="107.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="160.003" y="107.999" width="40" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="0.003" y="107.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="280.003" y="323.999" width="80" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="376.003" y="323.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="392.003" y="371.999" width="56" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="280.003" y="411.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="368.003" y="411.999" width="48" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="432.003" y="411.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="472.003" y="411.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="344.003" y="371.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="280.003" y="371.999" width="48" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="464.003" y="371.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="312.003" y="411.999" width="16" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="432.003" y="323.999" width="48" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                            <g>
                                                                <rect x="8.003" y="59.999" width="48" height="16"
                                                                    fill="#cb1ac5"></rect>
                                                            </g>
                                                        </g>
                                                    </svg> </div>
                                                <h3 class="h6 my-3 w-100"><b>6. Deployment</b></h3>
                                                <p class="desc m-0">After trial and following all processes, your app is
                                                    ready to launch on the
                                                    App store or Play Store.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box">
                                            <div
                                                class="title-box d-flex align-items-center flex-column justify-content-center text-center">
                                                <div class="process-icon"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                        id="Capa_10" x="0px" y="0px" viewBox="0 0 480 480"
                                                        style="enable-background:new 0 0 480 480" xml:space="preserve"
                                                        width="50px" height="50px">
                                                        <g class="support">
                                                            <path
                                                                d="M456,88H331.784C310.883,57.95,276.604,40.023,240,40V24c0-13.255-10.745-24-24-24H24C10.745,0,0,10.745,0,24v96    c0,13.255,10.745,24,24,24h17.6l24.264,29.128c2.827,3.395,7.871,3.856,11.267,1.029c0.374-0.311,0.718-0.656,1.029-1.029    L102.4,144h25.992c-0.192,2.656-0.408,5.296-0.408,8v16c-0.35,4.067,2.664,7.648,6.731,7.999c0.752,0.065,1.509,0.014,2.245-0.151    c2.374,20.028,9.473,39.205,20.712,55.952c-13.661-0.983-25.182-10.552-28.656-23.8H136v-16h-16c-4.418,0-8,3.582-8,8    c0.031,26.497,21.503,47.969,48,48h10.4c3.592,3.891,7.423,7.555,11.472,10.968c0.68,0.568,1.408,1.056,2.104,1.6v29.672    l-66.528,22.176c-2.975,0.993-5.096,3.633-5.424,6.752l-16,152c-0.459,4.394,2.73,8.329,7.125,8.789    c0.283,0.03,0.567,0.044,0.851,0.043h272c4.418-0.004,7.996-3.59,7.992-8.008c0-0.265-0.014-0.529-0.04-0.792l-16-152    c-0.328-3.119-2.449-5.759-5.424-6.752L296,290.24v-29.672c0.696-0.544,1.416-1.032,2.104-1.6    c18.567-15.484,32.337-35.939,39.696-58.968h7.8l24.264,29.128c2.827,3.395,7.871,3.856,11.267,1.029    c0.374-0.311,0.718-0.656,1.029-1.029L406.4,200H456c13.255,0,24-10.745,24-24v-64C480,98.745,469.255,88,456,88z M130.656,128    H98.664c-2.375-0.003-4.629,1.049-6.152,2.872L72,155.504l-20.512-24.632c-1.523-1.823-3.777-2.875-6.152-2.872H24    c-4.418,0-8-3.582-8-8V24c0-4.418,3.582-8,8-8h192c4.418,0,8,3.582,8,8v17.28C177.893,47.993,140.738,82.511,130.656,128z     M184,464h-71.12l14.536-138.04L184,307.104V464z M200,464V357.768l28.352-9.448l-20.072,73.6c-0.518,1.898-0.319,3.92,0.56,5.68    l18.216,36.4H200z M200,340.896v-15.952l19.144,9.6L200,340.896z M224.52,423.16L240,366.4l15.464,56.76L240,454.112    L224.52,423.16z M280,464h-27.056l18.208-36.424c0.879-1.76,1.078-3.782,0.56-5.68l-20.072-73.6l28.36,9.472V464z M280,340.896    l-19.144-6.4L280,324.944V340.896z M280,296v11.056l-40,20l-40-20V270.64c25.205,12.488,54.795,12.488,80,0V296z M352.584,325.96    L367.12,464H296V307.104L352.584,325.96z M287.848,246.672c-27.08,22.557-66.245,23.111-93.952,1.328H232v-16h-54.28    c-15.289-18.507-24.182-41.463-25.352-65.44c31.963-20.883,67.326-36.027,104.496-44.752c4.79,26.705,28.005,46.154,55.136,46.192    h15.616C325.777,198.586,311.387,227.055,287.848,246.672z M312,152c-22.08-0.026-39.974-17.92-40-40    c0.004-4.418-3.575-8.003-7.993-8.007c-0.586,0-1.17,0.063-1.743,0.191l-4.8,1.072c-40.374,8.922-78.809,25.046-113.464,47.6V152    c0-53.019,42.981-96,96-96s96,42.981,96,96H312z M464,176c0,4.418-3.582,8-8,8h-53.336c-2.375-0.003-4.629,1.049-6.152,2.872    L376,211.504l-20.512-24.624c-1.521-1.826-3.775-2.881-6.152-2.88h-7.592c0.96-5.289,1.585-10.633,1.872-16H344    c4.418,0,8-3.582,8-8v-8c-0.018-16.618-3.764-33.021-10.96-48H456c4.418,0,8,3.582,8,8V176z"
                                                                fill="#a241bb"></path>
                                                        </g>
                                                    </svg> </div>
                                                <h3 class="h6 my-3 w-100"><b>7. Support & Maintenance</b></h3>
                                                <p class="desc m-0">Our company offers you all support and the team is
                                                    always ready to answer
                                                    every query after deployment.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mob-clutch-swiper-pagination mt-3 d-flex justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="sect-pad-b partnership-models">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="main-title-box pt-md-0 pt-lg-5">
                                <h3 class="main-title mb-2 mt-60 title-partnership-models c-black">Partnership Models</h3>
                                <p class="desc mb-0">Hyperlink InfoSystem a leading mobile app development company in USA &
                                    India offers
                                    custom app development services to wide range of industries and businesses. Know more
                                    about our
                                    partnership models.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none d-sm-none d-md-none d-lg-flex d-xl-flex">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 mt-md-3">
                            <div class="card-box title-box bg-light-blue d-flex align-items-start flex-column">
                                <img class="img-fluid" src="/frontend_assets/img/fixed-price-model-new.png"
                                    alt="fixed price model">
                                <h3 class="h5 title w-100 my-3"><b>Fixed Price Model</b></h3>
                                <p class="desc mb-0">In this model, the project scope of work with its associated cost and
                                    timeline is
                                    defined before development starts. This is a preferred model for longer periods of
                                    engagement. Client
                                    always has peace of mind of knowing the project will remain on the same budget as
                                    agreed. This model
                                    suits best to clients who have a perfect vision of their requirement.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 mt-md-3">
                            <div class="card-box title-box bg-light-blue d-flex align-items-start flex-column">
                                <img class="img-fluid" src="/frontend_assets/img/hire-dedicated-model.png"
                                    alt="hire dedicated model">
                                <h3 class="h5 title w-100 my-3"><b>Hire Dedicated Model</b></h3>
                                <p class="desc mb-0">This is very classic and simple way of engagement wherein clients pay
                                    for the number
                                    of hours the app developer works on project. Clients easily start the project as they
                                    don't have to walk
                                    in with detailed specifications. This model also allows client to update new features
                                    any time and
                                    clients know exactly what they’re paying for. This drives a lot more trust and
                                    communication.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 mt-md-3">
                            <div class="card-box title-box bg-light-blue d-flex align-items-start flex-column">
                                <img class="img-fluid" src="/frontend_assets/img/on-site-development-model-new.png"
                                    alt="on site development model">
                                <h3 class="h5 title w-100 my-3"><b>On Site Development Model</b></h3>
                                <p class="desc mb-0">This model is preferred when clients want additional temporary
                                    resources for on-site
                                    development. This contract type ensures the engagement is cost-effective and a
                                    face-to-face interactions
                                    with developers. This model helps in achieving the deadline on time as there is
                                    continuous communication
                                    during the whole process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex d-sm-flex d-md-flex d-lg-none d-xl-none">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 mt-md-3">
                            <div class="swiper-container partnership-models-mob mt-3 w-100">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide p-3">
                                        <div class="card-box title-box bg-light-blue d-flex align-items-start flex-column">
                                            <img class="img-fluid"
                                                src="/frontend_assets/img/fixed-price-model-new.png"
                                                alt="fixed price model">
                                            <h3 class="h5 title w-100 my-3"><b>Fixed Price Model</b></h3>
                                            <p class="desc mb-0">In this model, the project scope of work with its
                                                associated cost and timeline
                                                is defined before development starts. This is a preferred model for longer
                                                periods of engagement.
                                                Client always has peace of mind of knowing the project will remain on the
                                                same budget as agreed.
                                                This model suits best to clients who have a perfect vision of their
                                                requirement.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box title-box bg-light-blue d-flex align-items-start flex-column">
                                            <img class="img-fluid" src="/frontend_assets/img/hire-dedicated-model.png"
                                                alt="hire dedicated model">
                                            <h3 class="h5 title w-100 my-3"><b>Hire Dedicated Model</b></h3>
                                            <p class="desc mb-0">This is very classic and simple way of engagement wherein
                                                clients pay for the
                                                number of hours the app developer works on project. Clients easily start the
                                                project as they don't
                                                have to walk in with detailed specifications. This model also allows client
                                                to update new features
                                                any time and clients know exactly what they’re paying for. This drives a lot
                                                more trust and
                                                communication.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box title-box bg-light-blue d-flex align-items-start flex-column">
                                            <img class="img-fluid"
                                                src="/frontend_assets/img/on-site-development-model-new.png"
                                                alt="on site development model">
                                            <h3 class="h5 title w-100 my-3"><b>On Site Development Model</b></h3>
                                            <p class="desc mb-0">This model is preferred when clients want additional
                                                temporary resources for
                                                on-site development. This contract type ensures the engagement is
                                                cost-effective and a
                                                face-to-face interactions with developers. This model helps in achieving the
                                                deadline on time as
                                                there is continuous communication during the whole process.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mob-clutch-swiper-pagination mt-3 d-flex justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="sect-pad-tb indus-we-serve bg-light-gray">
                <div class="container">
                    <h4 class="main-title mb-0 mt-60 title-indust c-black">Industries We Serve</h4>
                    <p class="desc mb-0">Here, we make almost every genre of applications. You name it and we build it.</p>
                </div>
                <div class="container">
                    <div class="row mt-4 d-none d-sm-none d-md-none d-lg-flex d-xl-flex justify-content-center">
                        <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mt-3 cust-col">
                            <div class="card-box bg-white bg-white text-center">
                                <svg width="50px" height="50px" fill="#dc2e3d" enable-background="new 0 0 496 496"
                                    version="1.1" viewBox="0 0 496 496" xml:space="preserve"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m488 56h-480c-4.418 0-8 3.582-8 8v320c0 4.418 3.582 8 8 8h169.06l-23.712 35.56c-2.452 3.675-1.461 8.643 2.215 11.095 1.315 0.877 2.86 1.345 4.441 1.345h160c4.418 1e-3 8.001-3.581 8.001-7.999 0-1.581-0.468-3.126-1.345-4.441l-23.712-35.56h185.06c4.418 0 8-3.582 8-8v-320c0-4.418-3.582-8-8-8zm-182.94 368h-130.11l21.336-32h87.44l21.336 32zm174.94-48h-464v-32h464v32zm0-48h-464v-256h464v256z" />
                                    <path
                                        d="m264 104h-208c-4.418 3e-3 -7.997 3.587-7.994 8.006 1e-3 0.931 0.164 1.855 0.482 2.73l32 88c1.15 3.159 4.151 5.262 7.512 5.264h120v16h-144c-4.418 0-8 3.582-8 8s3.582 8 8 8h11.056c-13.362 11.567-14.817 31.776-3.25 45.138s31.776 14.817 45.138 3.25 14.817-31.776 3.25-45.138c-1.004-1.16-2.09-2.246-3.25-3.25h62.112c-13.361 11.568-14.814 31.777-3.246 45.138s31.777 14.814 45.138 3.246 14.814-31.777 3.246-45.138c-1.355-1.565-2.859-2.995-4.49-4.27 2.618-1.345 4.273-4.033 4.296-6.976v-112h32v24c0 4.418 3.582 8 8 8s8-3.582 8-8v-32c0-4.418-3.582-8-8-8zm-168 176c-8.837 0-16-7.163-16-16s7.163-16 16-16 16 7.163 16 16-7.163 16-16 16zm-2.4-88-26.176-72h140.58v16h-104c-4.418 0-8 3.582-8 8s3.582 8 8 8h104v40h-114.4zm106.4 88c-8.837 0-16-7.163-16-16s7.163-16 16-16 16 7.163 16 16-7.163 16-16 16z" />
                                    <path
                                        d="m440 96h-112c-4.418 0-8 3.582-8 8v48c0 4.418 3.582 8 8 8h112c4.418 0 8-3.582 8-8v-48c0-4.418-3.582-8-8-8zm-8 48h-96v-32h96v32z" />
                                    <rect x="272" y="256" width="16" height="16" />
                                    <rect x="304" y="256" width="48" height="16" />
                                    <rect x="272" y="224" width="80" height="16" />
                                    <rect x="272" y="192" width="16" height="16" />
                                    <rect x="304" y="192" width="48" height="16" />
                                    <path
                                        d="m440 240h-40v-16h40c4.418 0 8-3.582 8-8s-3.582-8-8-8h-16v-8c0-4.418-3.582-8-8-8s-8 3.582-8 8v8h-16c-4.418 0-8 3.582-8 8v32c0 4.418 3.582 8 8 8h40v16h-40c-4.418 0-8 3.582-8 8s3.582 8 8 8h16v8c0 4.418 3.582 8 8 8s8-3.582 8-8v-8h16c4.418 0 8-3.582 8-8v-32c0-4.418-3.582-8-8-8z" />
                                </svg>
                                <h3 class="h6 mt-3"><b>Retail, Ecommerce</b></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mt-3 cust-col">
                            <div class="card-box bg-white text-center">
                                <svg width="50px" height="50px" fill="#1094f1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005"
                                    xml:space="preserve">
                                    <g>
                                        <path
                                            d="M307.204,255.997c17.237,0,31.394-12.894,33.664-29.525l31.189-23.381c3.772-2.825,4.54-8.175,1.707-11.947     c-2.825-3.772-8.175-4.548-11.947-1.707l-21.751,16.316c-3.251-10.402-12.86-18.022-24.328-18.022h-34.133     c-14.114,0-25.6,11.486-25.6,25.6c0-14.114-11.486-25.6-25.6-25.6H196.27c-11.469,0-21.077,7.62-24.329,18.022l-21.751-16.316     c-3.763-2.825-9.122-2.057-11.947,1.707c-2.833,3.772-2.065,9.122,1.707,11.947l31.189,23.381     c2.27,16.631,16.418,29.525,33.664,29.525h17.067c18.825,0,34.133-15.309,34.133-34.133c0,18.825,15.309,34.133,34.133,34.133     H307.204z M238.937,221.864c0,9.412-7.663,17.067-17.067,17.067h-17.067c-9.404,0-17.067-7.654-17.067-17.067v-8.533     c0-4.702,3.823-8.533,8.533-8.533h34.133c4.71,0,8.533,3.831,8.533,8.533V221.864z M273.07,221.864v-8.533     c0-4.702,3.823-8.533,8.533-8.533h34.133c4.71,0,8.533,3.831,8.533,8.533v8.533c0,9.412-7.663,17.067-17.067,17.067h-17.067     C280.733,238.93,273.07,231.276,273.07,221.864z">
                                        </path>
                                        <path
                                            d="M511.748,501.39l-8.721-34.756c-4.378-13.158-30.285-55.484-178.756-56.636v-8.934c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v17.067c0,0.06,0.034,0.111,0.034,0.171c0,0.051-0.034,0.094-0.034,0.154     c-0.034,5.205-1.749,50.876-51.2,50.876c-49.451,0-51.166-45.986-51.2-51.2v-17.067c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v8.619C77.162,410.553,21.789,428.2,8.793,467.257L0.26,501.39c-1.152,4.574,1.638,9.207,6.212,10.351     c4.557,1.161,9.199-1.638,10.342-6.204l8.346-33.51c9.916-29.739,63.317-44.595,163.14-45.338     c3.098,24.431,19.703,59.708,67.703,59.708c47.974,0,64.589-35.063,67.703-59.366c116.958,0.862,157.619,28.467,162.953,44.373     l8.533,34.133c0.973,3.874,4.446,6.46,8.269,6.46c0.683,0,1.382-0.077,2.074-0.256     C510.109,510.597,512.891,505.964,511.748,501.39z">
                                        </path>
                                        <path
                                            d="M58.636,42.595l196.267,25.6c0.367,0.043,0.734,0.068,1.101,0.068s0.734-0.026,1.101-0.068L443.737,43.85v29.628     c-5.35,6.016-17.067,21.026-17.067,37.453c0,18.782,15.309,25.6,25.6,25.6s25.6-6.818,25.6-25.6     c0-16.427-11.716-31.437-17.067-37.453V34.13c0-1.126-0.239-2.193-0.64-3.183c-0.145-0.35-0.393-0.623-0.58-0.947     c-0.333-0.597-0.666-1.186-1.126-1.681c-0.299-0.316-0.657-0.529-0.998-0.785c-0.486-0.393-0.964-0.768-1.527-1.041     c-0.418-0.205-0.862-0.29-1.314-0.418c-0.418-0.128-0.794-0.35-1.246-0.41l-196.267-25.6c-0.734-0.085-1.468-0.085-2.202,0     l-196.267,25.6c-4.25,0.555-7.432,4.181-7.432,8.465C51.204,38.414,54.387,42.041,58.636,42.595z M460.804,110.93     c0,6.81-4.617,8.405-8.533,8.533c-3.917-0.128-8.533-1.724-8.533-8.533c0-7.083,4.352-14.985,8.533-20.813     C456.452,95.946,460.804,103.848,460.804,110.93z M256.004,17.132L386.299,34.13L256.004,51.129L125.708,34.13L256.004,17.132z">
                                        </path>
                                        <path
                                            d="M275.673,309.603c-0.273,0.247-6.707,6.127-19.669,6.127c-12.774,0-19.209-5.709-19.652-6.118     c-3.319-3.251-8.67-3.226-11.981,0.085c-3.337,3.337-3.337,8.73,0,12.066c1.126,1.126,11.605,11.034,31.633,11.034     s30.507-9.907,31.633-11.034c3.294-3.294,3.285-8.567,0.051-11.913C284.437,306.506,279.078,306.412,275.673,309.603z">
                                        </path>
                                        <path
                                            d="M119.47,172.123c-9.933,3.524-17.067,13.013-17.067,24.141v34.133c0,11.904,8.166,21.939,19.2,24.789     c4.565,13.466,17.178,49.98,24.371,64.358c13.551,27.11,51.977,72.986,110.029,72.986c58.052,0,96.478-45.875,110.029-72.986     c7.194-14.379,19.806-50.893,24.371-64.358c11.034-2.85,19.2-12.885,19.2-24.789v-34.133c0-11.127-7.134-20.617-17.067-24.141     v-9.992c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v17.067c0,4.71,3.814,8.533,8.533,8.533     c4.71,0,8.533,3.831,8.533,8.533v34.133c0,4.702-3.823,8.533-8.533,8.533c-3.678,0-6.938,2.347-8.09,5.837     c-0.179,0.503-16.981,50.816-25.139,67.149c-1.306,2.594-32.495,63.548-94.771,63.548s-93.466-60.954-94.771-63.548     c-8.166-16.333-24.96-66.645-25.139-67.149c-1.161-3.49-4.412-5.837-8.09-5.837c-4.71,0-8.533-3.831-8.533-8.533v-34.133     c0-4.702,3.823-8.533,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533V162.13c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533V172.123z">
                                        </path>
                                        <path
                                            d="M128.004,59.73c-4.719,0-8.533,3.823-8.533,8.533v59.733c0,3.234,1.826,6.187,4.719,7.637     c2.167,1.075,53.896,26.496,131.814,26.496s129.647-25.421,131.814-26.496c2.893-1.451,4.719-4.403,4.719-7.637V68.264     c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v54.212c-14.114,5.982-58.778,22.588-119.467,22.588     s-105.353-16.606-119.467-22.588V68.264C136.537,63.553,132.723,59.73,128.004,59.73z">
                                        </path>
                                    </g>
                                </svg>
                                <h3 class="h6 mt-3"><b>Education & e-learning</b></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mt-3 cust-col">
                            <div class="card-box bg-white text-center">
                                <svg width="50px" height="50px" fill="#dc2d3c" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 480 480" style="enable-background:new 0 0 480 480" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M346.349,285.891c-2.961-2.945-6.264-5.526-9.837-7.688l-0.016-0.032c-20.485-12.399-46.796-9.156-63.656,7.848    l-1.2,1.208l-1.16-1.176c-20.237-20.377-53.161-20.491-73.539-0.254c-3.112,3.091-5.821,6.563-8.061,10.334    c-12.301,20.616-9.039,46.952,7.92,63.944l69.184,69.6c3.116,3.133,8.181,3.146,11.314,0.03c0.01-0.01,0.02-0.02,0.03-0.03    l69.224-69.6C366.981,339.533,366.891,306.32,346.349,285.891z M340.552,341.951c-1.505,2.486-3.302,4.784-5.352,6.844    l-63.552,63.888l-63.52-63.888c-11.788-11.846-14.029-30.184-5.44-44.52c10.184-17.076,32.282-22.664,49.358-12.481    c2.585,1.542,4.967,3.402,7.09,5.537l6.832,6.88c3.116,3.133,8.181,3.146,11.314,0.03c0.01-0.01,0.02-0.02,0.03-0.03l6.872-6.904    c11.666-11.773,29.88-14.019,44.056-5.432C345.468,302.303,350.981,324.723,340.552,341.951z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M472,199.995c-33.789-0.133-65.496,16.307-84.856,44c-35.427-18.839-75.022-28.467-115.144-28    c-44.36-0.638-87.991,11.315-125.832,34.472l-4.928-17.24c-8.294-29.044-6.707-60.02,4.512-88.064l3.664-9.168H232    c3.272,0.003,6.215-1.987,7.432-5.024l32-80c1.644-4.101-0.349-8.758-4.45-10.402c-0.082-0.033-0.164-0.064-0.246-0.094l-88-32    c-2.794-1.017-5.921-0.401-8.12,1.6l-88,80c-1.054,0.959-1.833,2.183-2.256,3.544l-75.608,243.2    c-3.15,9.156-4.756,18.773-4.752,28.456v58.72c-0.001,3.445,2.204,6.503,5.472,7.592c32.606,10.879,66.755,16.419,101.128,16.408    h57.888c33.508,16.182,70.304,24.396,107.512,24c69.768,0,133.36-27.4,164.392-70.312c11.404,4.187,23.459,6.324,35.608,6.312    c4.418,0,8-3.582,8-8v-192C480,203.576,476.418,199.995,472,199.995z M464,391.635c-9.45-0.866-18.697-3.266-27.376-7.104    c-3.61-1.586-7.837-0.306-9.96,3.016c-26.56,41.584-87.272,68.448-154.664,68.448c-35.33,0.422-70.26-7.5-101.952-23.12    c-1.129-0.578-2.379-0.88-3.648-0.88h-59.8c-30.726,0.01-61.275-4.651-90.6-13.824v-52.896c0.016-7.99,1.368-15.92,4-23.464    l75.032-241.36l82.776-75.288l44.856,16.312l-19.936,46.52H184v16h24c3.2,0,6.091-1.907,7.352-4.848l22.4-52.192l15.784,5.736    l-26.952,67.304H144c-3.272-0.003-6.215,1.987-7.432,5.024l-5.68,14.2c-12.527,31.338-14.297,65.948-5.032,98.4l8,27.88    c-1.6,1.96-3.112,4-4.52,6.12c-5.858,8.739-9.935,18.548-12,28.864l-5.176,25.912c-0.884,4.329,1.908,8.555,6.237,9.439    c0.001,0,0.002,0,0.003,0.001c0.526,0.11,1.063,0.164,1.6,0.16c3.799-0.003,7.072-2.678,7.832-6.4l5.192-25.936    c3.358-16.773,13.24-31.526,27.472-41.016l11.936-7.96c0.485-0.384,0.923-0.824,1.304-1.312    c30.761-14.334,64.328-21.636,98.264-21.376c39.819-0.609,79.054,9.623,113.504,29.6c3.767,2.309,8.692,1.127,11.001-2.64    c0.013-0.021,0.026-0.042,0.039-0.064c14.317-24.222,39.429-40.06,67.456-42.544V391.635z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <h3 class="h6 mt-3"><b>Healthcare & Fitness</b></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mt-3 cust-col">
                            <div class="card-box bg-white text-center">
                                <svg width="50px" height="50px" fill="#1d13ed" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 480 480" style="enable-background:new 0 0 480 480" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M458.504,401.912C461.968,396.8,464,390.632,464,384c0-17.648-14.352-32-32-32s-32,14.352-32,32    c0,6.632,2.032,12.8,5.496,17.912c-9.168,3.216-16.376,10.416-19.584,19.584c-2.264-1.536-4.784-2.664-7.416-3.584    C381.968,412.8,384,406.632,384,400c0-17.648-14.352-32-32-32s-32,14.352-32,32c0,6.632,2.032,12.8,5.496,17.912    c-2.624,0.92-5.152,2.048-7.416,3.584c-3.216-9.168-10.416-16.376-19.584-19.584C301.968,396.8,304,390.632,304,384    c0-17.648-14.352-32-32-32s-32,14.352-32,32c0,6.632,2.032,12.8,5.496,17.912C233.024,406.288,224,418.048,224,432v24    c0,4.424,3.576,8,8,8h72v8c0,4.424,3.576,8,8,8h80c4.424,0,8-3.576,8-8v-8h72c4.424,0,8-3.576,8-8v-24    C480,418.048,470.976,406.288,458.504,401.912z M272,368c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16c-8.824,0-16-7.176-16-16    C256,375.176,263.176,368,272,368z M304,448h-64v-16c0-8.824,7.176-16,16-16h32c8.824,0,16,7.176,16,16V448z M352,384    c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16c-8.824,0-16-7.176-16-16C336,391.176,343.176,384,352,384z M384,456v8h-64v-8v-8    c0-8.824,7.176-16,16-16h32c8.824,0,16,7.176,16,16V456z M432,368c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16    c-8.824,0-16-7.176-16-16C416,375.176,423.176,368,432,368z M464,448h-64v-16c0-8.824,7.176-16,16-16h32c8.824,0,16,7.176,16,16    V448z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M245.656,258.344l-40-40C204.16,216.84,202.128,216,200,216h-40v-40c0-4.424-3.576-8-8-8H8c-4.424,0-8,3.576-8,8v104v56    c0,4.424,3.576,8,8,8h25.136c3.576,13.768,15.992,24,30.864,24s27.288-10.232,30.864-24h66.272c3.576,13.768,15.992,24,30.864,24    s27.288-10.232,30.864-24H240c4.424,0,8-3.576,8-8v-72C248,261.872,247.16,259.84,245.656,258.344z M16,184h128v40v48H16V184z     M64,352c-8.824,0-16-7.176-16-16c0-8.824,7.176-16,16-16s16,7.176,16,16C80,344.824,72.824,352,64,352z M192,352    c-8.824,0-16-7.176-16-16c0-8.824,7.176-16,16-16c8.824,0,16,7.176,16,16C208,344.824,200.824,352,192,352z M232,328h-9.016    c-0.28-1.088-0.712-2.112-1.104-3.16c-0.192-0.512-0.32-1.04-0.536-1.544c-0.768-1.76-1.672-3.448-2.728-5.024    c-0.232-0.352-0.528-0.656-0.784-1c-0.872-1.208-1.8-2.36-2.832-3.432c-0.472-0.488-0.984-0.912-1.48-1.368    c-0.92-0.84-1.856-1.64-2.872-2.368c-0.592-0.432-1.2-0.824-1.824-1.208c-1.032-0.64-2.096-1.216-3.208-1.744    c-0.656-0.312-1.304-0.624-1.992-0.896c-1.224-0.48-2.496-0.848-3.784-1.176c-0.624-0.16-1.216-0.36-1.848-0.48    c-1.944-0.368-3.936-0.6-5.992-0.6c-2.056,0-4.048,0.232-6,0.608c-0.632,0.12-1.232,0.328-1.848,0.48    c-1.296,0.328-2.56,0.696-3.784,1.176c-0.68,0.272-1.328,0.584-1.992,0.896c-1.104,0.528-2.176,1.096-3.208,1.744    c-0.624,0.392-1.232,0.776-1.824,1.208c-1.008,0.728-1.952,1.528-2.872,2.368c-0.496,0.456-1.008,0.88-1.48,1.368    c-1.032,1.072-1.96,2.224-2.832,3.432c-0.248,0.344-0.544,0.648-0.784,1c-1.056,1.584-1.968,3.264-2.728,5.024    c-0.216,0.496-0.344,1.032-0.536,1.544c-0.392,1.04-0.824,2.064-1.104,3.16H94.976c-0.28-1.088-0.712-2.112-1.104-3.16    c-0.192-0.512-0.32-1.04-0.536-1.544c-0.768-1.76-1.672-3.448-2.728-5.024c-0.232-0.352-0.528-0.656-0.784-1    c-0.872-1.208-1.8-2.36-2.832-3.432c-0.472-0.488-0.984-0.912-1.48-1.368c-0.92-0.84-1.856-1.64-2.872-2.368    c-0.592-0.432-1.2-0.824-1.824-1.208c-1.032-0.64-2.096-1.216-3.208-1.744c-0.656-0.312-1.304-0.624-1.992-0.896    c-1.224-0.48-2.496-0.848-3.784-1.176c-0.624-0.16-1.216-0.36-1.848-0.48C68.048,304.232,66.056,304,64,304    c-2.056,0-4.048,0.232-6,0.608c-0.632,0.12-1.232,0.328-1.848,0.48c-1.296,0.328-2.56,0.696-3.784,1.176    c-0.68,0.272-1.328,0.584-1.992,0.896c-1.104,0.528-2.176,1.096-3.208,1.744c-0.624,0.392-1.232,0.776-1.824,1.208    c-1.008,0.728-1.952,1.528-2.872,2.368c-0.496,0.456-1.008,0.88-1.48,1.368c-1.032,1.072-1.96,2.224-2.832,3.432    c-0.248,0.344-0.544,0.648-0.784,1c-1.056,1.584-1.968,3.264-2.728,5.024c-0.216,0.496-0.344,1.032-0.536,1.544    c-0.384,1.04-0.816,2.064-1.096,3.152H16v-40h136c4.424,0,8-3.576,8-8v-48h36.688L232,267.312V328z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M472,0h-48c-4.424,0-8,3.576-8,8v91.568l-48,30V104c0-2.904-1.576-5.584-4.128-7c-2.528-1.4-5.648-1.336-8.12,0.216    L304,129.568V104c0-2.904-1.576-5.584-4.128-7c-2.536-1.4-5.648-1.336-8.12,0.216l-64,40C225.424,138.68,224,141.24,224,144v64    c0,4.424,3.576,8,8,8h64h64h64h48c4.424,0,8-3.576,8-8v-80V8C480,3.576,476.424,0,472,0z M288,144v56h-48v-51.56l48-30V144z     M352,144v56h-48v-51.56l48-30V144z M416,128v72h-48v-51.56l48-30V128z M464,200h-32v-64h32V200z M464,120h-32v-16V16h32V120z">
                                            </path>
                                        </g>
                                        <g>
                                            <rect x="320" y="160" width="16" height="24"></rect>
                                        </g>
                                        <g>
                                            <rect x="384" y="160" width="16" height="24"></rect>
                                        </g>
                                        <g>
                                            <rect x="256" y="160" width="16" height="24"></rect>
                                        </g>
                                        <g>
                                            <path
                                                d="M429.56,262.608c-0.8,5.056-1.824,10.128-3.032,15.048l15.544,3.8c1.304-5.344,2.408-10.832,3.288-16.304L429.56,262.608z    ">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M432,232c0,5.152-0.2,10.312-0.608,15.344l15.952,1.28C447.784,243.168,448,237.568,448,232H432z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M410.344,320.672c-2.344,4.512-4.912,8.992-7.64,13.32l13.544,8.512c2.952-4.696,5.744-9.544,8.28-14.44L410.344,320.672z    ">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M422.296,292.416c-1.608,4.84-3.432,9.672-5.416,14.368l14.736,6.232c2.152-5.08,4.128-10.32,5.864-15.568    L422.296,292.416z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M103.568,82.992c-4.176,3.64-8.248,7.48-12.096,11.4l11.424,11.2c3.552-3.624,7.312-7.168,11.184-10.536L103.568,82.992z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M306.296,42.792L301.2,57.96c4.816,1.608,9.632,3.456,14.336,5.472l6.312-14.704    C316.736,46.544,311.504,44.544,306.296,42.792z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M130.32,63.232c-4.672,2.904-9.304,6.048-13.776,9.344l9.512,12.872c4.12-3.048,8.392-5.952,12.696-8.624L130.32,63.232z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M61.104,133.84c-2.784,4.664-5.456,9.592-7.936,14.632l14.36,7.064c2.288-4.648,4.752-9.192,7.312-13.496L61.104,133.84z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M80.312,106.72c-3.576,4.28-6.992,8.712-10.152,13.176l13.064,9.248c2.92-4.136,6.072-8.224,9.368-12.176L80.312,106.72z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M240.904,32l-0.064,16c5.144,0.024,10.304,0.248,15.344,0.672l1.344-15.936C252.072,32.272,246.48,32.024,240.904,32z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M274.032,34.776l-2.608,15.784c5.08,0.84,10.136,1.88,15.032,3.112l3.872-15.528    C285.008,36.816,279.528,35.68,274.032,34.776z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M336.864,55.888l-7.472,14.16c4.488,2.36,8.96,4.952,13.296,7.704l8.56-13.512    C346.56,61.256,341.72,58.456,336.864,55.888z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M224.288,32.576c-5.544,0.424-11.104,1.064-16.512,1.896l2.456,15.816c5.008-0.784,10.144-1.368,15.264-1.76    L224.288,32.576z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M159.84,48.008c-5.08,2.128-10.152,4.496-15.072,7.032l7.328,14.216c4.544-2.344,9.232-4.52,13.912-6.48L159.84,48.008z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M191.456,37.696c-5.352,1.272-10.744,2.8-16.024,4.52l4.968,15.2c4.864-1.584,9.832-2.992,14.76-4.168L191.456,37.696z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M166.96,419.768l-5.64,14.968c5.176,1.952,10.496,3.72,15.808,5.232l4.408-15.376    C176.648,423.184,171.744,421.56,166.96,419.768z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M139.224,406.672l-7.968,13.872c4.816,2.76,9.776,5.344,14.752,7.696l6.832-14.472    C148.24,411.6,143.656,409.216,139.224,406.672z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M196.456,428.224l-3.16,15.688c5.44,1.096,10.96,1.984,16.424,2.64l1.904-15.888    C206.584,430.064,201.488,429.24,196.456,428.224z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M93.864,370.56l-11.736,10.872c2.96,3.2,6.04,6.312,9.2,9.328l11.032-11.592C99.44,376.392,96.608,373.512,93.864,370.56z    ">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M113.904,389.304l-10.064,12.44c4.328,3.504,8.808,6.848,13.328,9.944l9.048-13.184    C122.056,395.632,117.904,392.544,113.904,389.304z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <h3 class="h6 mt-3"><b>Logistics & Distribution</b></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mt-3 cust-col">
                            <div class="card-box bg-white text-center">
                                <svg width="50px" height="50px" fill="#0caec1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M113.057,41.398c-0.001,4.669-0.982,7.974-2.918,9.821c-4.088,3.9-26.873,2.828-29.196,2.828v16.168h21.996v17.723 c0,7.974-6.488,14.462-14.462,14.462h-0.18c-7.973,0-14.461-6.488-14.461-14.462V71.253H57.667v16.685 c0,16.89,13.741,30.631,30.631,30.631h0.18c16.89,0,30.631-13.741,30.631-30.63V64.751c0.755-0.564,1.491-1.165,2.194-1.836 c5.258-5.015,7.924-12.256,7.924-21.518H113.057z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M88.926,0C39.892,0,0,39.893,0,88.926s39.892,88.926,88.926,88.926s88.926-39.893,88.926-88.926S137.961,0,88.926,0z M143.744,136.687l-24.024-22.022l-10.926,11.918l22.999,21.083c-12.031,8.804-26.848,14.019-42.867,14.019 s-30.835-5.215-42.867-14.019l22.999-21.083l-10.926-11.918l-24.024,22.022c-11.158-12.791-17.94-29.493-17.94-47.76 c0-40.119,32.639-72.758,72.758-72.758s72.758,32.639,72.758,72.758C161.684,107.193,154.902,123.895,143.744,136.687z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M447.203,375.546c0,4.668-0.981,7.973-2.917,9.82c-4.088,3.9-26.873,2.828-29.196,2.828v16.337h21.996v17.556 c0,7.974-6.488,14.462-14.462,14.462h-0.18c-7.974,0-14.462-6.488-14.462-14.462v-16.685h-16.168v16.685 c0,16.89,13.741,30.631,30.631,30.631h0.18c16.89,0,30.631-13.741,30.631-30.631V398.9c0.755-0.564,1.491-1.165,2.193-1.836 c5.258-5.015,7.924-12.256,7.924-21.518H447.203z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M423.074,334.147c-49.034,0-88.926,39.893-88.926,88.926c0,49.033,39.892,88.926,88.926,88.926S512,472.107,512,423.074 C512,374.04,472.108,334.147,423.074,334.147z M477.891,470.834l-24.024-22.022l-10.925,11.918l22.999,21.083 c-12.031,8.804-26.848,14.019-42.867,14.019c-16.019,0-30.835-5.215-42.867-14.019l22.999-21.083l-10.926-11.918l-24.024,22.022 c-11.158-12.791-17.94-29.493-17.94-47.76c0-40.119,32.639-72.758,72.758-72.758c40.119,0,72.758,32.639,72.758,72.758 C495.832,441.341,489.049,458.043,477.891,470.834z">
                                            </path>
                                        </g>
                                        <g>
                                            <rect x="165.368" y="169.208"
                                                transform="matrix(0.6859 -0.7277 0.7277 0.6859 -74.5337 181.9086)"
                                                width="16.168" height="16.168"></rect>
                                        </g>
                                        <g>
                                            <rect x="205.085" y="206.634"
                                                transform="matrix(0.6859 -0.7277 0.7277 0.6859 -89.2933 222.5665)"
                                                width="16.168" height="16.168"></rect>
                                        </g>
                                        <g>
                                            <rect x="249.349" y="248.354"
                                                transform="matrix(0.6859 -0.7277 0.7277 0.6859 -105.7495 267.8814)"
                                                width="16.168" height="16.168"></rect>
                                        </g>
                                        <g>
                                            <rect x="337.862" y="331.81"
                                                transform="matrix(0.6859 -0.7277 0.7277 0.6859 -138.6779 358.5056)"
                                                width="16.169" height="16.168"></rect>
                                        </g>
                                        <g>
                                            <rect x="294.682" y="291.13"
                                                transform="matrix(0.686 -0.7276 0.7276 0.686 -122.6402 314.2463)"
                                                width="16.167" height="16.167"></rect>
                                        </g>
                                        <g>
                                            <path
                                                d="M318.251,453.981c-20.089,6.312-41.032,9.513-62.251,9.513c-17.675,0-34.84-2.227-51.232-6.406 c-12.188-16.892-22.546-39.048-30.611-64.735h135.738v-16.168H169.518c-8.847-33.644-14.022-72.143-14.639-112.101h70.733v-16.168 h-70.736c0.285-18.853,1.563-37.517,3.813-55.591l-16.044-1.996c-2.331,18.731-3.651,38.066-3.937,57.588H48.662 c0.709-18.449,3.848-36.633,9.357-54.165l-15.425-4.848C35.788,210.561,32.337,233.136,32.337,256 c0,123.328,100.335,223.663,223.663,223.663c22.863,0,45.439-3.45,67.099-10.257L318.251,453.981z M86.947,376.185 c-22.731-31.881-36.665-70.437-38.27-112.101h90.028c0.577,40.091,5.449,78.287,13.95,112.101H86.947z M99.732,392.354h57.358 c6.383,21.333,14.31,40.562,23.587,56.986C149.267,437.06,121.561,417.339,99.732,392.354z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M256,32.337c-22.863,0-45.439,3.45-67.097,10.255l4.846,15.426c20.089-6.312,41.032-9.512,62.251-9.512 c17.675,0,34.84,2.227,51.232,6.406c12.188,16.892,22.546,39.048,30.611,64.735H202.105v16.168h140.376 c8.847,33.644,14.022,72.143,14.639,112.101h-68.784v16.168h68.787c-0.285,18.841-1.565,37.503-3.817,55.589l16.044,1.998 c2.334-18.744,3.655-38.079,3.942-57.588h90.046c-0.708,18.463-3.842,36.648-9.344,54.167l15.426,4.844 c6.796-21.639,10.242-44.213,10.242-67.096C479.663,132.672,379.328,32.337,256,32.337z M354.91,119.646 c-6.382-21.333-14.309-40.562-23.586-56.986c31.41,12.279,59.116,32,80.945,56.986H354.91z M373.295,247.916 c-0.578-40.091-5.45-78.287-13.951-112.101h65.71c22.731,31.881,36.665,70.437,38.27,112.101H373.295z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <h3 class="h6 mt-3"><b>Social Networking</b></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mt-3 cust-col">
                            <div class="card-box bg-white text-center">
                                <svg width="50px" height="50px" fill="#cb1ac5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M506.552,317.933c-9.739-14.312-29.351-18.1-43.707-8.452l-65.34,43.728l-0.19-136.11l22.7,21.265 c4.827,4.521,11.121,7.009,17.729,7.009c0.012,0,0.026,0,0.039,0c7.134-0.01,14.022-3,18.898-8.205 c4.737-5.057,7.222-11.655,6.996-18.581c-0.226-6.926-3.136-13.349-8.193-18.086l-43.035-40.314 c-2.946-2.76-7.571-2.609-10.33,0.337c-2.759,2.946-2.608,7.57,0.337,10.33l43.035,40.314c2.208,2.068,3.478,4.872,3.577,7.895 c0.098,3.023-0.986,5.904-3.055,8.111c-2.16,2.306-5.09,3.578-8.252,3.582c-0.006,0-0.011,0-0.017,0 c-2.883,0-5.63-1.086-7.737-3.06c-0.001-0.001-0.001-0.001-0.001-0.001L259.124,67.616c-2.816-2.637-7.198-2.633-10.007,0.014 L78.679,228.188c-2.201,2.074-5.079,3.16-8.103,3.076c-3.024-0.09-5.831-1.353-7.905-3.556c-2.074-2.201-3.167-5.079-3.076-8.102 c0.09-3.024,1.353-5.831,3.554-7.905L246.326,39.143c4.342-4.091,11.154-4.101,15.507-0.021L369,139.514 c2.945,2.759,7.57,2.609,10.33-0.337c2.759-2.946,2.608-7.57-0.337-10.33L271.827,28.455c-9.973-9.344-25.576-9.323-35.523,0.049 l-58.639,55.24l-0.016-9.853c-0.004-3.106-1.218-6.024-3.417-8.216c-2.195-2.189-5.109-3.394-8.209-3.394 c-0.006,0-0.011,0-0.017,0l-41.947,0.059c-3.106,0.004-6.023,1.218-8.216,3.417c-2.192,2.199-3.398,5.12-3.393,8.227l0.116,71.087 l-59.439,55.993c-5.044,4.751-7.935,11.182-8.142,18.108c-0.207,6.926,2.296,13.518,7.047,18.56 c4.75,5.044,11.181,7.936,18.108,8.143c0.265,0.008,0.53,0.012,0.795,0.012c6.635,0,12.918-2.49,17.767-7.06l22.649-21.336 l0.09,64.291c-7.328-1.067-14.742-1.627-22.19-1.627H76.746v-4.382c0-14.711-11.969-26.68-26.68-26.68H26.68 C11.969,249.092,0,261.06,0,275.772V390.29c0,4.036,3.272,7.308,7.308,7.308s7.308-3.272,7.308-7.308V275.772 c0-6.652,5.412-12.064,12.064-12.064h23.385c6.652,0,12.064,5.412,12.064,12.064v11.69v149.796v11.575 c0,6.652-5.412,12.064-12.064,12.064H26.68c-6.652,0-12.064-5.412-12.064-12.064v-12.788c0-4.036-3.272-7.308-7.308-7.308 S0,432.009,0,436.045v12.788c0,14.711,11.969,26.68,26.68,26.68h23.385c14.711,0,26.68-11.968,26.68-26.68v-0.993l107.024,40.528 c0.198,0.075,0.399,0.141,0.603,0.198c4.653,1.314,9.304,1.973,13.896,1.973c2.484,0,4.951-0.193,7.393-0.579l157.281-22.672 c0.037-0.005,0.073-0.011,0.11-0.017c13.372-2.135,25.987-7.788,36.48-16.346c0.091-0.074,0.181-0.151,0.268-0.23l101.611-91.388 C513.244,348.802,515.453,331.015,506.552,317.933z M163.037,76.902l0.034,20.59l-35.912,33.83l-0.089-54.371L163.037,76.902z M254.141,82.976l128.538,120.412l0.223,159.593l-20.691,13.848L340.3,375.6l-0.579-5.82 c-2.039-20.498-17.171-36.987-37.18-40.922l-0.132-94.945c-0.01-7.286-5.942-13.207-13.227-13.207c-0.006,0-0.011,0-0.018,0 l-69.654,0.098c-3.533,0.005-6.853,1.385-9.347,3.887c-2.495,2.501-3.866,5.825-3.861,9.357l0.116,82.781 c-13.797-3.154-26.971-8.363-39.288-15.568c-1.537-0.899-3.089-1.767-4.654-2.611c-0.61-0.329-1.23-0.638-1.845-0.959 c-0.952-0.497-1.902-0.997-2.864-1.474c-0.766-0.38-1.541-0.74-2.313-1.107c-0.819-0.389-1.637-0.782-2.462-1.157 c-0.84-0.381-1.687-0.744-2.533-1.11c-0.773-0.334-1.546-0.67-2.324-0.991c-0.87-0.359-1.745-0.704-2.621-1.047 c-0.777-0.304-1.555-0.606-2.336-0.898c-0.867-0.324-1.738-0.637-2.611-0.944c-0.819-0.289-1.639-0.571-2.463-0.846 c-0.836-0.279-1.674-0.552-2.516-0.817c-0.897-0.283-1.798-0.553-2.7-0.82c-0.775-0.228-1.549-0.456-2.328-0.672 c-1.017-0.283-2.039-0.548-3.062-0.81c-0.479-0.123-0.955-0.262-1.437-0.381l-0.113-80.878L254.141,82.976z M287.923,327.029 l-61.125-7.037l-5.759-0.663l-0.118-83.911l66.874-0.094L287.923,327.029z M491.673,348.41l-101.511,91.298 c-8.459,6.859-18.606,11.396-29.361,13.122l-157.213,22.662c-0.033,0.005-0.065,0.01-0.098,0.015l-0.109,0.017 c-4.763,0.754-9.723,0.436-14.744-0.942L76.746,432.21V294.77h12.505c10.645,0,21.218,1.229,31.514,3.616 c0.383,0.089,0.765,0.18,1.147,0.272c1.265,0.305,2.527,0.619,3.783,0.959c0.11,0.03,0.219,0.062,0.329,0.092 c1.259,0.344,2.513,0.707,3.763,1.086c0.224,0.068,0.449,0.135,0.672,0.204c1.33,0.411,2.654,0.84,3.971,1.29 c0.136,0.047,0.271,0.095,0.407,0.142c2.743,0.947,5.459,1.98,8.141,3.098c0.146,0.061,0.292,0.122,0.438,0.184 c1.337,0.562,2.666,1.143,3.986,1.747c0.035,0.016,0.071,0.033,0.106,0.05c1.276,0.586,2.543,1.194,3.802,1.819 c0.148,0.073,0.297,0.145,0.445,0.219c1.23,0.615,2.45,1.252,3.663,1.904c0.229,0.123,0.457,0.249,0.686,0.373 c1.224,0.667,2.441,1.347,3.646,2.052c17.391,10.173,36.323,16.762,56.271,19.585c0.063,0.009,0.125,0.017,0.188,0.024 l81.881,9.427c0.453,0.065,0.903,0.14,1.35,0.224c12.054,2.264,21.568,11.171,24.751,22.77c0.472,1.718,0.804,3.496,0.986,5.319 l0.325,3.27l-153.46-13.445c-4.018-0.351-7.566,2.622-7.918,6.642c-0.353,4.021,2.622,7.566,6.642,7.918l162.242,14.215 c0.039,0.003,0.077,0.002,0.115,0.005c0.038,0.003,0.075,0.009,0.114,0.012l30.597,1.717c0.137,0.008,0.273,0.011,0.409,0.011 c0.145,0,0.288-0.023,0.432-0.032c0.163-0.01,0.326-0.016,0.488-0.036c0.218-0.028,0.431-0.075,0.645-0.122 c0.153-0.034,0.307-0.059,0.457-0.103c0.234-0.067,0.459-0.158,0.686-0.249c0.122-0.049,0.248-0.086,0.368-0.142 c0.341-0.158,0.673-0.34,0.989-0.552l25.972-17.381c0.001-0.001,0.002-0.002,0.003-0.003l76.702-51.332 c7.717-5.187,18.251-3.152,23.482,4.536C499.249,333.181,498.062,342.736,491.673,348.41z">
                                        </path>
                                    </g>
                                </svg>
                                <h3 class="h6 mt-3"><b>Real Estate</b></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mt-3 cust-col">
                            <div class="card-box bg-white text-center">
                                <svg width="50px" height="50px" fill="#a241bb" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M125.768,153.902c-69.22,0-125.535,56.315-125.535,125.535c0,42.977,20.444,89.185,60.765,137.341 c5.991,7.155,11.961,13.785,17.69,19.834c-26.034,7.106-41.665,19.873-41.665,34.774c0,26.379,45.722,40.613,88.741,40.613 c43.02,0,88.741-14.235,88.741-40.613c0-14.889-15.626-27.659-41.643-34.768c10.394-10.973,21.578-23.883,32.19-38.283 c2.46-3.339,1.748-8.038-1.59-10.498c-3.336-2.457-8.038-1.747-10.498,1.591c-12.812,17.387-26.68,32.667-38.781,44.804 c-1.387,0.708-2.547,1.832-3.274,3.249c-10.84,10.653-19.962,18.556-25.138,22.874c-5.119-4.276-14.102-12.072-24.803-22.586 c-0.768-1.683-2.117-3.003-3.763-3.739c-34.007-34.205-81.957-93.301-81.957-154.591c0-60.94,49.579-110.519,110.519-110.519 s110.519,49.579,110.519,110.519c0,26.613-9.068,55.353-26.952,85.422c-2.119,3.565-0.949,8.172,2.615,10.291 s8.172,0.949,10.291-2.615c19.284-32.424,29.062-63.746,29.062-93.098C251.303,210.217,194.988,153.902,125.768,153.902z M121.173,475.971c1.352,1.047,2.974,1.57,4.595,1.57c1.621,0,3.242-0.523,4.595-1.57c0.921-0.713,13.467-10.497,30.19-26.848 c25.322,5.164,38.938,15.107,38.938,22.264c0,5.345-7.326,11.651-19.119,16.456c-14.464,5.895-33.857,9.142-54.607,9.142 c-45.006,0-73.726-15.162-73.726-25.598c0-7.167,13.62-17.105,38.956-22.269C107.811,465.566,120.375,475.353,121.173,475.971z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M125.768,224.854c-11.875,0-23.167,3.749-32.655,10.842c-3.32,2.483-4,7.188-1.518,10.509 c2.484,3.32,7.189,3.999,10.509,1.518c6.871-5.137,15.054-7.853,23.663-7.853c21.817,0,39.566,17.749,39.566,39.567 c0,21.817-17.749,39.566-39.566,39.566s-39.566-17.75-39.566-39.566c0-3.723,0.515-7.404,1.53-10.938 c1.144-3.985-1.159-8.143-5.144-9.288c-3.984-1.14-8.143,1.16-9.288,5.145c-1.401,4.883-2.112,9.956-2.112,15.081 c0,30.096,24.485,54.582,54.582,54.582c30.096,0,54.582-24.485,54.582-54.582C180.35,249.34,155.864,224.854,125.768,224.854z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M452.958,218.121c3.82-4.099,7.755-8.515,11.701-13.229c31.258-37.333,47.107-73.222,47.107-106.673 C511.766,44.062,467.705,0,413.547,0c-39.563,0-75.086,23.546-90.497,59.986c-1.616,3.819,0.171,8.225,3.989,9.839 c3.818,1.614,8.225-0.171,9.839-3.989c13.058-30.872,43.152-50.821,76.669-50.821c45.879,0,83.204,37.326,83.204,83.205 c0,62.043-65.138,121.484-83.207,136.775c-3.982-3.365-10.25-8.873-17.599-16.077c-0.733-1.453-1.917-2.605-3.339-3.318 c-25.923-26.101-62.263-70.968-62.263-117.38c0-4.147-3.36-7.508-7.508-7.508c-4.146,0-7.508,3.361-7.508,7.508 c0,33.45,15.849,69.339,47.108,106.673c3.945,4.711,7.877,9.125,11.695,13.223c-19.354,5.815-30.527,15.713-30.527,27.632 c0,10.052,8.154,18.911,22.962,24.944c12.67,5.163,29.355,8.007,46.981,8.007c17.625,0,34.31-2.844,46.981-8.007 c14.805-6.034,22.959-14.893,22.959-24.945C483.485,233.85,472.304,223.943,452.958,218.121z M413.545,263.682 c-35.539,0-54.926-11.848-54.926-17.936c0-3.966,8.819-11.224,27.651-15.228c12.671,12.329,22.076,19.655,22.683,20.126 c1.353,1.047,2.974,1.57,4.595,1.57c1.621,0,3.241-0.523,4.595-1.57c0.607-0.469,10.01-7.796,22.681-20.124 c8.39,1.789,15.658,4.41,20.744,7.506c4.323,2.634,6.904,5.52,6.904,7.72C468.47,251.834,449.083,263.682,413.545,263.682z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M413.547,54.532c-24.089,0-43.688,19.598-43.688,43.689c0,24.089,19.598,43.687,43.688,43.687 s43.688-19.597,43.688-43.687C457.235,74.131,437.637,54.532,413.547,54.532z M413.548,126.892 c-15.812,0-28.673-12.862-28.673-28.672c0-15.81,12.862-28.673,28.673-28.673c15.81,0,28.673,12.862,28.673,28.673 C442.22,114.03,429.358,126.892,413.548,126.892z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M316.157,238.239h-3.428c-2.496,0-5.004,0.165-7.458,0.492c-4.109,0.547-6.998,4.321-6.452,8.433 c0.503,3.775,3.727,6.519,7.433,6.519c0.33,0,0.664-0.021,1-0.066c1.799-0.239,3.642-0.36,5.478-0.36h3.427v-0.001 c4.147,0,7.508-3.36,7.508-7.508S320.304,238.239,316.157,238.239z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M291.336,463.496c-0.012,0-0.023,0-0.035,0l-9.916,0.045c-4.146,0.019-7.492,3.396-7.474,7.542 c0.018,4.135,3.377,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542 C298.825,466.834,295.467,463.496,291.336,463.496z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M325.066,335.489h-9.916c-4.147,0-7.508,3.362-7.508,7.508c0,4.147,3.36,7.508,7.508,7.508h9.916 c4.147,0,7.508-3.36,7.508-7.508C332.574,338.851,329.214,335.489,325.066,335.489z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M285.284,253.536c-2.811-3.046-7.559-3.238-10.609-0.428c-2.799,2.581-5.345,5.458-7.567,8.552 c-2.419,3.369-1.649,8.06,1.719,10.479c1.325,0.952,2.857,1.41,4.374,1.41c2.335,0,4.637-1.087,6.104-3.129 c1.63-2.269,3.498-4.381,5.551-6.275C287.904,261.334,288.095,256.584,285.284,253.536z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M331.002,463.314c-0.012,0-0.023,0-0.035,0l-9.915,0.045c-4.146,0.018-7.492,3.396-7.474,7.542 c0.018,4.135,3.377,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.915-0.045c4.146-0.018,7.492-3.396,7.474-7.542 C338.49,466.653,335.132,463.314,331.002,463.314z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M251.671,463.675c-0.012,0-0.023,0-0.035,0l-9.916,0.045c-4.146,0.019-7.492,3.396-7.474,7.542 c0.019,4.135,3.375,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542 C259.16,467.013,255.802,463.675,251.671,463.675z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M290.829,329.178c-2.359-1.488-4.578-3.226-6.593-5.163c-2.989-2.875-7.743-2.78-10.616,0.206 c-2.875,2.988-2.782,7.741,0.206,10.615c2.748,2.643,5.773,5.012,8.991,7.042c1.244,0.785,2.629,1.159,3.999,1.159 c2.492,0,4.929-1.239,6.358-3.504C295.387,336.027,294.336,331.39,290.829,329.178z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M272.373,302.287c-0.504-2.588-0.76-5.25-0.76-7.914l0.002-0.417c0.049-4.146-3.273-7.546-7.42-7.594 c-0.029-0.001-0.059-0.001-0.089-0.001c-4.106,0-7.458,3.304-7.506,7.421l-0.003,0.592c0,3.626,0.349,7.255,1.037,10.786 c0.698,3.585,3.84,6.072,7.361,6.072c0.475,0,0.959-0.045,1.443-0.14C270.509,310.299,273.165,306.357,272.373,302.287z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M364.733,335.489h-9.916c-4.147,0-7.508,3.362-7.508,7.508c0,4.147,3.361,7.508,7.508,7.508h9.916 c4.147,0,7.508-3.36,7.508-7.508C372.241,338.851,368.88,335.489,364.733,335.489z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M485.274,350.775c-2.893-2.283-5.985-4.357-9.192-6.162c-3.609-2.036-8.19-0.757-10.226,2.856 c-2.035,3.612-0.757,8.192,2.856,10.226c2.53,1.427,4.972,3.063,7.255,4.866c1.38,1.089,3.018,1.616,4.648,1.616 c2.218,0,4.416-0.98,5.898-2.856C489.083,358.066,488.529,353.344,485.274,350.775z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M457.405,468.694c-0.57-4.107-4.366-6.982-8.465-6.41c-2.459,0.34-4.977,0.519-7.488,0.529l-1.405,0.007 c-4.147,0.021-7.492,3.399-7.472,7.544c0.021,4.134,3.378,7.472,7.507,7.472c0.013,0,0.025,0,0.037,0l1.402-0.007 c3.171-0.014,6.359-0.239,9.474-0.67C455.104,476.591,457.973,472.8,457.405,468.694z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M490.54,447.581c-2.861-3.004-7.614-3.119-10.614-0.258c-2.107,2.007-4.387,3.865-6.778,5.523 c-3.407,2.362-4.254,7.04-1.893,10.449c1.459,2.103,3.798,3.231,6.177,3.231c1.476,0,2.966-0.434,4.271-1.338 c3.026-2.099,5.913-4.451,8.58-6.992C493.286,455.335,493.4,450.582,490.54,447.581z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M505.152,411.118c-4.069-0.767-7.999,1.913-8.767,5.988c-0.539,2.857-1.305,5.692-2.28,8.428 c-1.392,3.905,0.645,8.2,4.551,9.593c0.833,0.297,1.685,0.438,2.522,0.438c3.084,0,5.976-1.916,7.072-4.988 c1.237-3.47,2.21-7.067,2.893-10.692C511.908,415.81,509.226,411.884,505.152,411.118z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M509.612,386.984c-1.018-3.545-2.324-7.037-3.886-10.384c-1.754-3.758-6.218-5.382-9.979-3.63 c-3.757,1.754-5.382,6.221-3.629,9.979c1.23,2.635,2.26,5.387,3.061,8.177c0.945,3.293,3.949,5.439,7.213,5.439 c0.687,0,1.383-0.095,2.075-0.293C508.452,395.127,510.755,390.969,509.612,386.984z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M404.399,335.489h-9.916c-4.147,0-7.508,3.362-7.508,7.508c0,4.147,3.36,7.508,7.508,7.508h9.916 c4.147,0,7.508-3.36,7.508-7.508C411.907,338.851,408.546,335.489,404.399,335.489z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M370.668,463.134c-0.012,0-0.023,0-0.035,0l-9.916,0.045c-4.146,0.018-7.492,3.396-7.474,7.542 c0.019,4.135,3.377,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542 C378.157,466.473,374.798,463.134,370.668,463.134z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M444.395,335.561c-1.062-0.048-2.138-0.071-3.196-0.071h-7.051c-4.147,0-7.508,3.362-7.508,7.508 c0,4.147,3.36,7.508,7.508,7.508h7.051v-0.001c0.849,0,1.693,0.019,2.532,0.056c0.113,0.006,0.226,0.008,0.338,0.008 c3.993,0,7.317-3.146,7.494-7.175C451.746,339.25,448.537,335.744,444.395,335.561z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M410.333,462.955c-0.012,0-0.023,0-0.035,0L400.382,463c-4.146,0.018-7.492,3.396-7.474,7.542 c0.019,4.135,3.377,7.474,7.507,7.474c0.012,0,0.024,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542 C417.822,466.293,414.464,462.955,410.333,462.955z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <h3 class="h6 mt-3"><b>Travel & Hospitality</b></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mt-3 cust-col">
                            <div class="card-box bg-white text-center">
                                <svg width="50px" height="50px" fill="#faca0a" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 480 480" style="enable-background:new 0 0 480 480" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M339.904,161.776l-5.136-16.904c-6.524-19.202-27.379-29.479-46.581-22.955c-10.802,3.67-19.285,12.153-22.955,22.955 l-5.136,16.904c-4.322,14.256-5.229,29.329-2.648,44c2.354,12.352,10.196,22.964,21.312,28.84L273.008,363.2 c-0.77,7.177,1.558,14.342,6.4,19.696c10.413,11.39,28.089,12.182,39.479,1.769c0.616-0.563,1.206-1.153,1.769-1.769 c4.734-5.202,7.058-12.157,6.4-19.16L321.272,234.6c11.101-5.879,18.93-16.484,21.28-28.824 C345.133,191.105,344.226,176.032,339.904,161.776z M326.792,202.992c-1.732,8.874-8.056,16.155-16.6,19.112 c-3.243,1.219-5.332,4.387-5.176,7.848L311.096,365c0.28,2.649-0.594,5.29-2.4,7.248c-4.817,4.769-12.575,4.769-17.392,0 c-1.896-2.116-2.757-4.964-2.352-7.776l6.032-134.52c0.156-3.461-1.933-6.629-5.176-7.848c-8.544-2.957-14.868-10.238-16.6-19.112 c-2.14-12.18-1.386-24.693,2.2-36.528l5.136-16.912c3.974-10.745,15.906-16.234,26.652-12.26c5.681,2.101,10.159,6.58,12.26,12.26 l5.136,16.912C328.174,178.3,328.928,190.812,326.792,202.992z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M216,120c-4.418,0-8,3.582-8,8v68.688l-21.656,21.656c-1.602,1.596-2.454,3.797-2.344,6.056l7,140 c0.167,3.019-0.929,5.972-3.024,8.152c-4.379,4.418-11.511,4.45-15.93,0.07c-0.024-0.023-0.047-0.047-0.07-0.07 c-2.096-2.18-3.191-5.133-3.024-8.152l7.048-140c0.112-2.258-0.737-4.458-2.336-6.056L152,196.688V128c0-4.418-3.582-8-8-8 s-8,3.582-8,8v72c0,2.122,0.844,4.156,2.344,5.656l21.488,21.496l-6.824,136.472c-0.726,14.907,10.77,27.581,25.677,28.307 c14.907,0.726,27.581-10.77,28.307-25.677c0.043-0.876,0.043-1.753,0-2.629l-6.824-136.472l21.488-21.496 c1.5-1.5,2.344-3.534,2.344-5.656v-72C224,123.582,220.418,120,216,120z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M168,120c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C176,123.582,172.418,120,168,120z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M192,120c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C200,123.582,196.418,120,192,120z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M240,0C107.452,0,0,107.452,0,240s107.452,240,240,240s240-107.452,240-240C479.85,107.514,372.486,0.15,240,0z M240,464 C116.288,464,16,363.712,16,240S116.288,16,240,16s224,100.288,224,224C463.859,363.653,363.653,463.859,240,464z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M265.969,390.172c-0.429-4.397-4.342-7.614-8.74-7.185c-0.103,0.01-0.206,0.022-0.309,0.036l0.032-0.008 c-11.263,1.308-22.641,1.308-33.904,0c-4.39-0.515-8.365,2.626-8.88,7.016c-0.515,4.39,2.626,8.365,7.016,8.88 c12.491,1.459,25.109,1.459,37.6,0C263.181,398.483,266.398,394.57,265.969,390.172z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M362.4,136.912c-2.839-3.385-7.885-3.828-11.27-0.988c-0.011,0.009-0.022,0.019-0.034,0.028 c-3.377,2.848-3.807,7.894-0.96,11.272c48.235,57.26,44.545,141.929-8.488,194.776c-3.13,3.119-3.139,8.186-0.02,11.316 c3.119,3.13,8.186,3.139,11.316,0.02C411.881,294.623,415.991,200.541,362.4,136.912z">
                                            </path>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M186.392,105.744c-0.005,0-0.01-0.001-0.015-0.001c-0.008,0-0.016,0.001-0.025,0.001H186.392z">
                                                </path>
                                                <path
                                                    d="M277.736,84.472c-31.265-7.493-64.055-5.479-94.168,5.784c-4.136,1.555-6.227,6.169-4.672,10.304 c1.172,3.117,4.152,5.18,7.481,5.183c0.957-0.005,1.905-0.18,2.799-0.519c27.118-10.141,56.646-11.952,84.8-5.2 c4.295,1.038,8.618-1.601,9.656-5.896C284.67,89.833,282.031,85.51,277.736,84.472z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <path
                                                d="M137.992,341.6C111.023,314.677,95.908,278.108,96,240c-0.079-30.446,9.565-60.122,27.528-84.704 c2.655-3.532,1.944-8.547-1.588-11.202s-8.547-1.944-11.202,1.588c-0.047,0.063-0.093,0.126-0.138,0.19 c-46.253,63.588-39.447,151.359,16.056,207.056c3.128,3.13,8.202,3.132,11.332,0.004C141.118,349.804,141.12,344.73,137.992,341.6 z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <h3 class="h6 mt-3"><b>Food & Restaurant</b></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mt-3 cust-col">
                            <div class="card-box bg-white text-center">
                                <svg width="50px" height="50px" fill="#4caf50" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 480.008 480.008" style="enable-background:new 0 0 480.008 480.008"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M431.24,216.155c-3.196-15.741-15.499-28.044-31.24-31.24v-88.8c0-13.255-10.745-24-24-24s-24,10.745-24,24v2.848 l-169.728,77.152H56c-30.927,0.21-55.828,25.452-55.618,56.38C0.57,260.041,20.763,283.36,48,287.483v120.632c0,4.418,3.582,8,8,8 h64c4.418,0,8-3.582,8-8v-64.152c22.44-1.22,40.008-19.775,40-42.248v-13.6h14.6l169.4,61.6v2.4c0,13.255,10.745,24,24,24 s24-10.745,24-24v-88.8C421.65,258.919,435.636,237.805,431.24,216.155z M112,400.115H64v-16h16v-16H64v-16h16v-16H64v-16h16v-16 H64v-16h48V400.115z M152,301.715c0.045,13.638-10.407,25.017-24,26.128v-39.728h24V301.715z M176,272.115H56 c-22.091-0.005-39.996-17.917-39.991-40.009c0.002-10.604,4.215-20.772,11.711-28.271c7.483-7.527,17.666-11.747,28.28-11.72h120 V272.115z M352,332.691l-160-58.176v-85.248l160-72.728V332.691z M384,352.115c0,4.418-3.582,8-8,8s-8-3.582-8-8v-8v-248 c0-4.418,3.582-8,8-8s8,3.582,8,8V352.115z M414.68,231.963c-2.396,6.877-7.802,12.284-14.68,14.68v-45.056 C412.442,205.921,419.014,219.521,414.68,231.963z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M88,208.115c-13.255,0-24,10.745-24,24s10.745,24,24,24s24-10.745,24-24S101.255,208.115,88,208.115z M88,240.115 c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S92.418,240.115,88,240.115z"
                                                fill="#FFFFFF"></path>
                                        </g>
                                        <g>
                                            <circle cx="224" cy="376.115" r="16"></circle>
                                        </g>
                                        <g>
                                            <path
                                                d="M478.657,51.677c0-0.001-0.001-0.001-0.001-0.002c-2.451-3.676-7.418-4.669-11.094-2.217 c-0.001,0-0.001,0.001-0.002,0.001l-48,32c-3.676,2.452-4.668,7.42-2.216,11.096c2.452,3.676,7.42,4.668,11.096,2.216l48-32 C480.116,60.319,481.109,55.352,478.657,51.677z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M479.548,158.331c-0.966-4.092-4.935-6.738-9.084-6.056H470.4l-40,8c-4.33,0.879-7.127,5.102-6.248,9.432 c0.758,3.731,4.04,6.412,7.848,6.408c0.537,0.003,1.074-0.051,1.6-0.16l40-8C477.9,166.94,480.563,162.631,479.548,158.331z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M473.6,280.275l-40-8c-4.3-1.015-8.609,1.648-9.624,5.948c-1.015,4.3,1.648,8.609,5.948,9.624 c0.179,0.042,0.359,0.078,0.54,0.108l40,8c0.505,0.105,1.02,0.159,1.536,0.16c4.418,0.004,8.004-3.574,8.008-7.992 C480.012,284.315,477.331,281.033,473.6,280.275z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M475.576,368.955l-48-24c-3.954-1.975-8.761-0.37-10.736,3.584c-1.975,3.954-0.37,8.761,3.584,10.736l48,24 c3.954,1.975,8.761,0.37,10.736-3.584C481.135,375.737,479.53,370.93,475.576,368.955z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M85.459,74.459c-3.1-2.994-8.015-2.994-11.115,0l-72,72c-3.124,3.125-3.123,8.19,0.002,11.314 c1.5,1.499,3.534,2.342,5.654,2.342c2.122,0,4.156-0.844,5.656-2.344l72-72C88.725,82.593,88.637,77.528,85.459,74.459z">
                                            </path>
                                        </g>
                                        <g>
                                            <circle cx="72" cy="144.115" r="16"></circle>
                                        </g>
                                        <g>
                                            <circle cx="16" cy="88.115" r="16"></circle>
                                        </g>
                                        <g>
                                            <path
                                                d="M325.656,402.395l-72-72c-1.51-1.477-3.544-2.297-5.656-2.28h-64c-4.418,0-8,3.582-8,8l0.168,63.832 c0.013,2.101,0.852,4.113,2.336,5.6l72,72c3.122,3.126,8.188,3.129,11.314,0.006c0.002-0.002,0.004-0.004,0.006-0.006 l63.832-63.84C328.779,410.583,328.779,405.519,325.656,402.395z M256.168,460.635l-64-64L192,344.115h52.664l64,64 L256.168,460.635z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M280,48.115c4.418,0,8-3.582,8-8v-32c0-4.418-3.582-8-8-8H120c-4.418,0-8,3.582-8,8v32c0,4.418,3.582,8,8,8s8,3.582,8,8 s-3.582,8-8,8s-8,3.582-8,8v32c0,4.418,3.582,8,8,8h160c4.418,0,8-3.582,8-8v-32c0-4.418-3.582-8-8-8s-8-3.582-8-8 S275.582,48.115,280,48.115z M272,33.483c-12.499,4.411-19.056,18.12-14.645,30.619c2.416,6.845,7.8,12.229,14.645,14.645v17.368 h-40v-8h-16v8h-88V78.747c12.499-4.411,19.056-18.12,14.645-30.619c-2.416-6.845-7.8-12.229-14.645-14.645V16.115h144V33.483z">
                                            </path>
                                        </g>
                                        <g>
                                            <rect x="216" y="24.115" width="16" height="16"></rect>
                                        </g>
                                        <g>
                                            <rect x="216" y="56.115" width="16" height="16"></rect>
                                        </g>
                                    </g>
                                </svg>
                                <h3 class="h6 mt-3"><b>On-Demand Solutions</b></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mt-3 cust-col">
                            <div class="card-box bg-white text-center">
                                <svg width="50px" height="50px" fill="#ff9800" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M511.982,97.701c-0.51-43.455-22.748-67.388-62.619-67.388c-15.432,0-30.302,3.592-40.023,6.589 c0.968-17.762,0.983-28.726,0.983-29.271l0.001-7.604H101.683v7.603c0,0.26,0.026,11.397,1.005,29.281 c-9.72-2.999-24.604-6.598-40.051-6.598c-39.87,0-62.109,23.932-62.619,67.388c-0.502,42.75,9.248,80.804,28.977,113.107 c19.37,31.715,44.128,50.826,61.487,61.271c27.803,16.732,55.59,20.244,74.006,20.244c4.54,0,8.914-0.214,13.005-0.636 c0.271-0.028,0.522-0.06,0.787-0.089c8.904,9.589,18.503,17.27,28.76,22.978c7.561,4.207,12.82,11.544,14.622,19.977 c-10.195,3.173-17.618,12.698-17.618,23.923c0,11.477,7.763,21.17,18.31,24.12v31.91h-41.142v33.301h-40.6v64.167h230.781v-64.167 h-40.6v-33.301h-41.142v-31.91c10.548-2.951,18.311-12.643,18.311-24.12c0-11.226-7.423-20.75-17.618-23.923 c1.802-8.433,7.06-15.769,14.622-19.977c10.232-5.693,19.897-13.416,28.779-22.974c3.147,0.349,7.866,0.72,13.766,0.72 c0.002,0,0.001,0,0.004,0c18.414,0,46.2-3.514,74.001-20.244c17.358-10.446,42.117-29.556,61.487-61.271 C502.735,178.505,512.484,140.45,511.982,97.701z M394.992,15.233c-0.068,2.781-0.176,6.277-0.342,10.369H117.387 c-0.172-4.091-0.287-7.592-0.361-10.369H394.992z M405.334,85.046c10.302-3.429,23.654-6.887,35.615-6.887 c10.029,0,17.25,2.45,21.463,7.282c4.842,5.554,6.403,14.884,4.637,27.734c-7.353,53.526-30.562,95.308-65.354,117.647 c-12.119,7.782-25.171,10.997-36.109,12.139C388.723,194.33,399.921,133.314,405.334,85.046z M114.495,138.009 c7.479,40.115,17.805,74.563,30.693,102.386c0.399,0.864,0.805,1.715,1.209,2.566c-10.934-1.145-23.978-4.359-36.092-12.137 c-34.791-22.34-58.001-64.121-65.354-117.647c-1.765-12.851-0.205-22.182,4.638-27.734c4.213-4.832,11.435-7.281,21.463-7.281 c11.971,0,25.335,3.463,35.641,6.894C108.534,101.518,111.051,119.537,114.495,138.009z M164.488,277.117 c-16.488,0-41.353-3.135-66.164-18.066C72.949,243.781,14.054,197.507,15.224,97.88c0.414-35.233,15.923-52.36,47.413-52.36 c16.841,0,33.474,5.077,41.077,7.755c0.379,5.101,0.804,10.217,1.274,15.312c-10.335-3.036-22.512-5.634-33.936-5.634 c-14.618,0-25.695,4.203-32.925,12.493c-7.859,9.013-10.632,22.403-8.242,39.798c4.094,29.801,12.65,56.141,25.431,78.287 c12.201,21.142,27.938,37.994,46.772,50.086c18.396,11.813,38.293,14.792,52.486,15.077c0.048,0.084,0.097,0.164,0.145,0.247 c0.778,1.363,1.564,2.703,2.358,4.026c0.247,0.413,0.496,0.823,0.745,1.232c0.757,1.244,1.52,2.476,2.291,3.683 c0.29,0.454,0.584,0.897,0.876,1.347c0.525,0.807,1.053,1.607,1.585,2.398c0.514,0.765,1.03,1.522,1.549,2.271 c0.509,0.733,1.019,1.462,1.533,2.181c0.241,0.338,0.478,0.689,0.719,1.023C165.763,277.112,165.134,277.117,164.488,277.117z M356.188,463.015v33.753H155.82v-33.753h25.393h149.581H356.188z M289.653,429.714h25.934v18.094H196.42v-18.094h25.935H289.653z M237.561,414.507v-30.982h36.885v30.982H237.561z M292.757,358.476c0,5.427-4.416,9.842-9.842,9.842h-53.822 c-5.427,0-9.842-4.415-9.842-9.842s4.415-9.842,9.842-9.842h53.822C288.342,348.634,292.757,353.049,292.757,358.476z M330.791,271.552c-0.084,0.109-0.168,0.218-0.252,0.327c-0.748,0.968-1.502,1.912-2.26,2.843 c-0.186,0.227-0.369,0.458-0.556,0.684c-0.833,1.012-1.673,2.002-2.517,2.968c-0.041,0.046-0.079,0.094-0.12,0.14 c-8.479,9.673-17.735,17.334-27.512,22.774c-12.051,6.704-20.245,18.611-22.499,32.139h-38.142 c-2.255-13.529-10.449-25.435-22.5-32.139c-9.436-5.249-17.958-12.266-25.657-20.651l-1.86-2.122 c-7.56-8.622-14.686-19.068-21.179-31.045l-1.989-3.671c-32.697-63.177-42.587-154.488-45.569-202.991h275.705 c-0.127,2.11-0.266,4.289-0.42,6.552c-0.007,0.105-0.015,0.213-0.022,0.318c-0.168,2.452-0.348,4.911-0.539,7.372 c-0.005,0.072-0.011,0.144-0.016,0.217c-0.608,7.8-1.328,15.629-2.149,23.365l-0.497,4.678 c-5.525,49.528-17.194,112.625-41.801,160.153l-2.173,4.006C341.432,256.385,336.246,264.451,330.791,271.552z M413.677,259.051 c-24.813,14.932-49.673,18.066-66.16,18.066c-0.001,0-0.003,0-0.004,0c-0.647,0-1.276-0.005-1.889-0.015 c0.01-0.014,0.02-0.029,0.03-0.043c0.987-1.362,1.959-2.744,2.916-4.145c0.117-0.171,0.232-0.346,0.349-0.517 c0.809-1.192,1.606-2.4,2.394-3.62c0.203-0.313,0.406-0.627,0.607-0.942c0.872-1.369,1.735-2.747,2.581-4.149 c0.133-0.219,0.262-0.444,0.394-0.665c0.693-1.158,1.378-2.327,2.054-3.507c0.158-0.276,0.321-0.54,0.48-0.818 c14.193-0.285,34.09-3.264,52.486-15.077c18.834-12.094,34.571-28.946,46.772-50.086c12.78-22.146,21.336-48.486,25.431-78.287 c2.388-17.396-0.384-30.786-8.242-39.798c-7.229-8.291-18.307-12.494-32.925-12.494c-11.423,0-23.602,2.596-33.936,5.633 c0.479-5.195,0.89-10.178,1.242-14.914c0.01-0.132,0.021-0.265,0.031-0.396c7.605-2.679,24.237-7.755,41.077-7.755 c31.49,0,46.999,17.127,47.414,52.358C497.945,197.507,439.052,243.78,413.677,259.051z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M192.356,246.237l-12.7,8.367c4.336,6.583,8.996,12.564,13.851,17.776l11.128-10.366 C200.358,257.423,196.227,252.114,192.356,246.237z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M159.716,161.922l-14.826,3.382c7.292,31.965,17.027,58.799,28.933,79.756l13.222-7.512 C175.873,217.883,166.678,192.439,159.716,161.922z">
                                            </path>
                                        </g>
                                        <g>
                                            <polygon
                                                points="443.666,333.509 443.655,318.302 430.818,318.31 430.809,305.473 415.602,305.483 415.611,318.321 402.774,318.33 402.784,333.537 415.621,333.528 415.63,346.364 430.837,346.354 430.828,333.517 ">
                                            </polygon>
                                        </g>
                                        <g>
                                            <polygon
                                                points="112.785,412.475 112.769,397.268 101.997,397.279 101.986,386.506 86.779,386.522 86.79,397.294 76.016,397.305 76.033,412.512 86.805,412.501 86.816,423.275 102.023,423.259 102.012,412.486 ">
                                            </polygon>
                                        </g>
                                        <g>
                                            <rect x="48.845" y="288.161" width="14.345" height="15.207"></rect>
                                        </g>
                                        <g>
                                            <rect x="141.039" y="333.153" width="14.345" height="15.207"></rect>
                                        </g>
                                        <g>
                                            <rect x="372.254" y="378.905" width="14.345" height="15.207"></rect>
                                        </g>
                                    </g>
                                </svg>
                                <h3 class="h6 mt-3"><b>Gaming</b></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex d-sm-flex d-md-flex d-lg-none d-xl-none">
                        <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
                            <div class="swiper-container industries-we-serve-mob mt-3 w-100">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide p-3">
                                        <div class="card-box bg-white bg-white text-center">
                                            <svg width="50px" height="50px" fill="#dc2e3d"
                                                enable-background="new 0 0 496 496" version="1.1" viewBox="0 0 496 496"
                                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m488 56h-480c-4.418 0-8 3.582-8 8v320c0 4.418 3.582 8 8 8h169.06l-23.712 35.56c-2.452 3.675-1.461 8.643 2.215 11.095 1.315 0.877 2.86 1.345 4.441 1.345h160c4.418 1e-3 8.001-3.581 8.001-7.999 0-1.581-0.468-3.126-1.345-4.441l-23.712-35.56h185.06c4.418 0 8-3.582 8-8v-320c0-4.418-3.582-8-8-8zm-182.94 368h-130.11l21.336-32h87.44l21.336 32zm174.94-48h-464v-32h464v32zm0-48h-464v-256h464v256z" />
                                                <path
                                                    d="m264 104h-208c-4.418 3e-3 -7.997 3.587-7.994 8.006 1e-3 0.931 0.164 1.855 0.482 2.73l32 88c1.15 3.159 4.151 5.262 7.512 5.264h120v16h-144c-4.418 0-8 3.582-8 8s3.582 8 8 8h11.056c-13.362 11.567-14.817 31.776-3.25 45.138s31.776 14.817 45.138 3.25 14.817-31.776 3.25-45.138c-1.004-1.16-2.09-2.246-3.25-3.25h62.112c-13.361 11.568-14.814 31.777-3.246 45.138s31.777 14.814 45.138 3.246 14.814-31.777 3.246-45.138c-1.355-1.565-2.859-2.995-4.49-4.27 2.618-1.345 4.273-4.033 4.296-6.976v-112h32v24c0 4.418 3.582 8 8 8s8-3.582 8-8v-32c0-4.418-3.582-8-8-8zm-168 176c-8.837 0-16-7.163-16-16s7.163-16 16-16 16 7.163 16 16-7.163 16-16 16zm-2.4-88-26.176-72h140.58v16h-104c-4.418 0-8 3.582-8 8s3.582 8 8 8h104v40h-114.4zm106.4 88c-8.837 0-16-7.163-16-16s7.163-16 16-16 16 7.163 16 16-7.163 16-16 16z" />
                                                <path
                                                    d="m440 96h-112c-4.418 0-8 3.582-8 8v48c0 4.418 3.582 8 8 8h112c4.418 0 8-3.582 8-8v-48c0-4.418-3.582-8-8-8zm-8 48h-96v-32h96v32z" />
                                                <rect x="272" y="256" width="16" height="16" />
                                                <rect x="304" y="256" width="48" height="16" />
                                                <rect x="272" y="224" width="80" height="16" />
                                                <rect x="272" y="192" width="16" height="16" />
                                                <rect x="304" y="192" width="48" height="16" />
                                                <path
                                                    d="m440 240h-40v-16h40c4.418 0 8-3.582 8-8s-3.582-8-8-8h-16v-8c0-4.418-3.582-8-8-8s-8 3.582-8 8v8h-16c-4.418 0-8 3.582-8 8v32c0 4.418 3.582 8 8 8h40v16h-40c-4.418 0-8 3.582-8 8s3.582 8 8 8h16v8c0 4.418 3.582 8 8 8s8-3.582 8-8v-8h16c4.418 0 8-3.582 8-8v-32c0-4.418-3.582-8-8-8z" />
                                            </svg>
                                            <h3 class="h6 mt-3"><b>Retail, Ecommerce</b></h3>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box bg-white text-center">
                                            <svg width="50px" height="50px" fill="#1094f1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                                viewBox="0 0 512.005 512.005"
                                                style="enable-background:new 0 0 512.005 512.005" xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M307.204,255.997c17.237,0,31.394-12.894,33.664-29.525l31.189-23.381c3.772-2.825,4.54-8.175,1.707-11.947     c-2.825-3.772-8.175-4.548-11.947-1.707l-21.751,16.316c-3.251-10.402-12.86-18.022-24.328-18.022h-34.133     c-14.114,0-25.6,11.486-25.6,25.6c0-14.114-11.486-25.6-25.6-25.6H196.27c-11.469,0-21.077,7.62-24.329,18.022l-21.751-16.316     c-3.763-2.825-9.122-2.057-11.947,1.707c-2.833,3.772-2.065,9.122,1.707,11.947l31.189,23.381     c2.27,16.631,16.418,29.525,33.664,29.525h17.067c18.825,0,34.133-15.309,34.133-34.133c0,18.825,15.309,34.133,34.133,34.133     H307.204z M238.937,221.864c0,9.412-7.663,17.067-17.067,17.067h-17.067c-9.404,0-17.067-7.654-17.067-17.067v-8.533     c0-4.702,3.823-8.533,8.533-8.533h34.133c4.71,0,8.533,3.831,8.533,8.533V221.864z M273.07,221.864v-8.533     c0-4.702,3.823-8.533,8.533-8.533h34.133c4.71,0,8.533,3.831,8.533,8.533v8.533c0,9.412-7.663,17.067-17.067,17.067h-17.067     C280.733,238.93,273.07,231.276,273.07,221.864z">
                                                    </path>
                                                    <path
                                                        d="M511.748,501.39l-8.721-34.756c-4.378-13.158-30.285-55.484-178.756-56.636v-8.934c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v17.067c0,0.06,0.034,0.111,0.034,0.171c0,0.051-0.034,0.094-0.034,0.154     c-0.034,5.205-1.749,50.876-51.2,50.876c-49.451,0-51.166-45.986-51.2-51.2v-17.067c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v8.619C77.162,410.553,21.789,428.2,8.793,467.257L0.26,501.39c-1.152,4.574,1.638,9.207,6.212,10.351     c4.557,1.161,9.199-1.638,10.342-6.204l8.346-33.51c9.916-29.739,63.317-44.595,163.14-45.338     c3.098,24.431,19.703,59.708,67.703,59.708c47.974,0,64.589-35.063,67.703-59.366c116.958,0.862,157.619,28.467,162.953,44.373     l8.533,34.133c0.973,3.874,4.446,6.46,8.269,6.46c0.683,0,1.382-0.077,2.074-0.256     C510.109,510.597,512.891,505.964,511.748,501.39z">
                                                    </path>
                                                    <path
                                                        d="M58.636,42.595l196.267,25.6c0.367,0.043,0.734,0.068,1.101,0.068s0.734-0.026,1.101-0.068L443.737,43.85v29.628     c-5.35,6.016-17.067,21.026-17.067,37.453c0,18.782,15.309,25.6,25.6,25.6s25.6-6.818,25.6-25.6     c0-16.427-11.716-31.437-17.067-37.453V34.13c0-1.126-0.239-2.193-0.64-3.183c-0.145-0.35-0.393-0.623-0.58-0.947     c-0.333-0.597-0.666-1.186-1.126-1.681c-0.299-0.316-0.657-0.529-0.998-0.785c-0.486-0.393-0.964-0.768-1.527-1.041     c-0.418-0.205-0.862-0.29-1.314-0.418c-0.418-0.128-0.794-0.35-1.246-0.41l-196.267-25.6c-0.734-0.085-1.468-0.085-2.202,0     l-196.267,25.6c-4.25,0.555-7.432,4.181-7.432,8.465C51.204,38.414,54.387,42.041,58.636,42.595z M460.804,110.93     c0,6.81-4.617,8.405-8.533,8.533c-3.917-0.128-8.533-1.724-8.533-8.533c0-7.083,4.352-14.985,8.533-20.813     C456.452,95.946,460.804,103.848,460.804,110.93z M256.004,17.132L386.299,34.13L256.004,51.129L125.708,34.13L256.004,17.132z">
                                                    </path>
                                                    <path
                                                        d="M275.673,309.603c-0.273,0.247-6.707,6.127-19.669,6.127c-12.774,0-19.209-5.709-19.652-6.118     c-3.319-3.251-8.67-3.226-11.981,0.085c-3.337,3.337-3.337,8.73,0,12.066c1.126,1.126,11.605,11.034,31.633,11.034     s30.507-9.907,31.633-11.034c3.294-3.294,3.285-8.567,0.051-11.913C284.437,306.506,279.078,306.412,275.673,309.603z">
                                                    </path>
                                                    <path
                                                        d="M119.47,172.123c-9.933,3.524-17.067,13.013-17.067,24.141v34.133c0,11.904,8.166,21.939,19.2,24.789     c4.565,13.466,17.178,49.98,24.371,64.358c13.551,27.11,51.977,72.986,110.029,72.986c58.052,0,96.478-45.875,110.029-72.986     c7.194-14.379,19.806-50.893,24.371-64.358c11.034-2.85,19.2-12.885,19.2-24.789v-34.133c0-11.127-7.134-20.617-17.067-24.141     v-9.992c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v17.067c0,4.71,3.814,8.533,8.533,8.533     c4.71,0,8.533,3.831,8.533,8.533v34.133c0,4.702-3.823,8.533-8.533,8.533c-3.678,0-6.938,2.347-8.09,5.837     c-0.179,0.503-16.981,50.816-25.139,67.149c-1.306,2.594-32.495,63.548-94.771,63.548s-93.466-60.954-94.771-63.548     c-8.166-16.333-24.96-66.645-25.139-67.149c-1.161-3.49-4.412-5.837-8.09-5.837c-4.71,0-8.533-3.831-8.533-8.533v-34.133     c0-4.702,3.823-8.533,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533V162.13c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533V172.123z">
                                                    </path>
                                                    <path
                                                        d="M128.004,59.73c-4.719,0-8.533,3.823-8.533,8.533v59.733c0,3.234,1.826,6.187,4.719,7.637     c2.167,1.075,53.896,26.496,131.814,26.496s129.647-25.421,131.814-26.496c2.893-1.451,4.719-4.403,4.719-7.637V68.264     c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v54.212c-14.114,5.982-58.778,22.588-119.467,22.588     s-105.353-16.606-119.467-22.588V68.264C136.537,63.553,132.723,59.73,128.004,59.73z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <h3 class="h6 mt-3"><b>Education & e-learning</b></h3>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box bg-white text-center">
                                            <svg width="50px" height="50px" fill="#dc2d3c"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                                viewBox="0 0 480 480" style="enable-background:new 0 0 480 480"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M346.349,285.891c-2.961-2.945-6.264-5.526-9.837-7.688l-0.016-0.032c-20.485-12.399-46.796-9.156-63.656,7.848    l-1.2,1.208l-1.16-1.176c-20.237-20.377-53.161-20.491-73.539-0.254c-3.112,3.091-5.821,6.563-8.061,10.334    c-12.301,20.616-9.039,46.952,7.92,63.944l69.184,69.6c3.116,3.133,8.181,3.146,11.314,0.03c0.01-0.01,0.02-0.02,0.03-0.03    l69.224-69.6C366.981,339.533,366.891,306.32,346.349,285.891z M340.552,341.951c-1.505,2.486-3.302,4.784-5.352,6.844    l-63.552,63.888l-63.52-63.888c-11.788-11.846-14.029-30.184-5.44-44.52c10.184-17.076,32.282-22.664,49.358-12.481    c2.585,1.542,4.967,3.402,7.09,5.537l6.832,6.88c3.116,3.133,8.181,3.146,11.314,0.03c0.01-0.01,0.02-0.02,0.03-0.03l6.872-6.904    c11.666-11.773,29.88-14.019,44.056-5.432C345.468,302.303,350.981,324.723,340.552,341.951z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M472,199.995c-33.789-0.133-65.496,16.307-84.856,44c-35.427-18.839-75.022-28.467-115.144-28    c-44.36-0.638-87.991,11.315-125.832,34.472l-4.928-17.24c-8.294-29.044-6.707-60.02,4.512-88.064l3.664-9.168H232    c3.272,0.003,6.215-1.987,7.432-5.024l32-80c1.644-4.101-0.349-8.758-4.45-10.402c-0.082-0.033-0.164-0.064-0.246-0.094l-88-32    c-2.794-1.017-5.921-0.401-8.12,1.6l-88,80c-1.054,0.959-1.833,2.183-2.256,3.544l-75.608,243.2    c-3.15,9.156-4.756,18.773-4.752,28.456v58.72c-0.001,3.445,2.204,6.503,5.472,7.592c32.606,10.879,66.755,16.419,101.128,16.408    h57.888c33.508,16.182,70.304,24.396,107.512,24c69.768,0,133.36-27.4,164.392-70.312c11.404,4.187,23.459,6.324,35.608,6.312    c4.418,0,8-3.582,8-8v-192C480,203.576,476.418,199.995,472,199.995z M464,391.635c-9.45-0.866-18.697-3.266-27.376-7.104    c-3.61-1.586-7.837-0.306-9.96,3.016c-26.56,41.584-87.272,68.448-154.664,68.448c-35.33,0.422-70.26-7.5-101.952-23.12    c-1.129-0.578-2.379-0.88-3.648-0.88h-59.8c-30.726,0.01-61.275-4.651-90.6-13.824v-52.896c0.016-7.99,1.368-15.92,4-23.464    l75.032-241.36l82.776-75.288l44.856,16.312l-19.936,46.52H184v16h24c3.2,0,6.091-1.907,7.352-4.848l22.4-52.192l15.784,5.736    l-26.952,67.304H144c-3.272-0.003-6.215,1.987-7.432,5.024l-5.68,14.2c-12.527,31.338-14.297,65.948-5.032,98.4l8,27.88    c-1.6,1.96-3.112,4-4.52,6.12c-5.858,8.739-9.935,18.548-12,28.864l-5.176,25.912c-0.884,4.329,1.908,8.555,6.237,9.439    c0.001,0,0.002,0,0.003,0.001c0.526,0.11,1.063,0.164,1.6,0.16c3.799-0.003,7.072-2.678,7.832-6.4l5.192-25.936    c3.358-16.773,13.24-31.526,27.472-41.016l11.936-7.96c0.485-0.384,0.923-0.824,1.304-1.312    c30.761-14.334,64.328-21.636,98.264-21.376c39.819-0.609,79.054,9.623,113.504,29.6c3.767,2.309,8.692,1.127,11.001-2.64    c0.013-0.021,0.026-0.042,0.039-0.064c14.317-24.222,39.429-40.06,67.456-42.544V391.635z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h3 class="h6 mt-3"><b>Healthcare & Fitness</b></h3>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box bg-white text-center">
                                            <svg width="50px" height="50px" fill="#cb1ac5"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                                xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M506.552,317.933c-9.739-14.312-29.351-18.1-43.707-8.452l-65.34,43.728l-0.19-136.11l22.7,21.265 c4.827,4.521,11.121,7.009,17.729,7.009c0.012,0,0.026,0,0.039,0c7.134-0.01,14.022-3,18.898-8.205 c4.737-5.057,7.222-11.655,6.996-18.581c-0.226-6.926-3.136-13.349-8.193-18.086l-43.035-40.314 c-2.946-2.76-7.571-2.609-10.33,0.337c-2.759,2.946-2.608,7.57,0.337,10.33l43.035,40.314c2.208,2.068,3.478,4.872,3.577,7.895 c0.098,3.023-0.986,5.904-3.055,8.111c-2.16,2.306-5.09,3.578-8.252,3.582c-0.006,0-0.011,0-0.017,0 c-2.883,0-5.63-1.086-7.737-3.06c-0.001-0.001-0.001-0.001-0.001-0.001L259.124,67.616c-2.816-2.637-7.198-2.633-10.007,0.014 L78.679,228.188c-2.201,2.074-5.079,3.16-8.103,3.076c-3.024-0.09-5.831-1.353-7.905-3.556c-2.074-2.201-3.167-5.079-3.076-8.102 c0.09-3.024,1.353-5.831,3.554-7.905L246.326,39.143c4.342-4.091,11.154-4.101,15.507-0.021L369,139.514 c2.945,2.759,7.57,2.609,10.33-0.337c2.759-2.946,2.608-7.57-0.337-10.33L271.827,28.455c-9.973-9.344-25.576-9.323-35.523,0.049 l-58.639,55.24l-0.016-9.853c-0.004-3.106-1.218-6.024-3.417-8.216c-2.195-2.189-5.109-3.394-8.209-3.394 c-0.006,0-0.011,0-0.017,0l-41.947,0.059c-3.106,0.004-6.023,1.218-8.216,3.417c-2.192,2.199-3.398,5.12-3.393,8.227l0.116,71.087 l-59.439,55.993c-5.044,4.751-7.935,11.182-8.142,18.108c-0.207,6.926,2.296,13.518,7.047,18.56 c4.75,5.044,11.181,7.936,18.108,8.143c0.265,0.008,0.53,0.012,0.795,0.012c6.635,0,12.918-2.49,17.767-7.06l22.649-21.336 l0.09,64.291c-7.328-1.067-14.742-1.627-22.19-1.627H76.746v-4.382c0-14.711-11.969-26.68-26.68-26.68H26.68 C11.969,249.092,0,261.06,0,275.772V390.29c0,4.036,3.272,7.308,7.308,7.308s7.308-3.272,7.308-7.308V275.772 c0-6.652,5.412-12.064,12.064-12.064h23.385c6.652,0,12.064,5.412,12.064,12.064v11.69v149.796v11.575 c0,6.652-5.412,12.064-12.064,12.064H26.68c-6.652,0-12.064-5.412-12.064-12.064v-12.788c0-4.036-3.272-7.308-7.308-7.308 S0,432.009,0,436.045v12.788c0,14.711,11.969,26.68,26.68,26.68h23.385c14.711,0,26.68-11.968,26.68-26.68v-0.993l107.024,40.528 c0.198,0.075,0.399,0.141,0.603,0.198c4.653,1.314,9.304,1.973,13.896,1.973c2.484,0,4.951-0.193,7.393-0.579l157.281-22.672 c0.037-0.005,0.073-0.011,0.11-0.017c13.372-2.135,25.987-7.788,36.48-16.346c0.091-0.074,0.181-0.151,0.268-0.23l101.611-91.388 C513.244,348.802,515.453,331.015,506.552,317.933z M163.037,76.902l0.034,20.59l-35.912,33.83l-0.089-54.371L163.037,76.902z M254.141,82.976l128.538,120.412l0.223,159.593l-20.691,13.848L340.3,375.6l-0.579-5.82 c-2.039-20.498-17.171-36.987-37.18-40.922l-0.132-94.945c-0.01-7.286-5.942-13.207-13.227-13.207c-0.006,0-0.011,0-0.018,0 l-69.654,0.098c-3.533,0.005-6.853,1.385-9.347,3.887c-2.495,2.501-3.866,5.825-3.861,9.357l0.116,82.781 c-13.797-3.154-26.971-8.363-39.288-15.568c-1.537-0.899-3.089-1.767-4.654-2.611c-0.61-0.329-1.23-0.638-1.845-0.959 c-0.952-0.497-1.902-0.997-2.864-1.474c-0.766-0.38-1.541-0.74-2.313-1.107c-0.819-0.389-1.637-0.782-2.462-1.157 c-0.84-0.381-1.687-0.744-2.533-1.11c-0.773-0.334-1.546-0.67-2.324-0.991c-0.87-0.359-1.745-0.704-2.621-1.047 c-0.777-0.304-1.555-0.606-2.336-0.898c-0.867-0.324-1.738-0.637-2.611-0.944c-0.819-0.289-1.639-0.571-2.463-0.846 c-0.836-0.279-1.674-0.552-2.516-0.817c-0.897-0.283-1.798-0.553-2.7-0.82c-0.775-0.228-1.549-0.456-2.328-0.672 c-1.017-0.283-2.039-0.548-3.062-0.81c-0.479-0.123-0.955-0.262-1.437-0.381l-0.113-80.878L254.141,82.976z M287.923,327.029 l-61.125-7.037l-5.759-0.663l-0.118-83.911l66.874-0.094L287.923,327.029z M491.673,348.41l-101.511,91.298 c-8.459,6.859-18.606,11.396-29.361,13.122l-157.213,22.662c-0.033,0.005-0.065,0.01-0.098,0.015l-0.109,0.017 c-4.763,0.754-9.723,0.436-14.744-0.942L76.746,432.21V294.77h12.505c10.645,0,21.218,1.229,31.514,3.616 c0.383,0.089,0.765,0.18,1.147,0.272c1.265,0.305,2.527,0.619,3.783,0.959c0.11,0.03,0.219,0.062,0.329,0.092 c1.259,0.344,2.513,0.707,3.763,1.086c0.224,0.068,0.449,0.135,0.672,0.204c1.33,0.411,2.654,0.84,3.971,1.29 c0.136,0.047,0.271,0.095,0.407,0.142c2.743,0.947,5.459,1.98,8.141,3.098c0.146,0.061,0.292,0.122,0.438,0.184 c1.337,0.562,2.666,1.143,3.986,1.747c0.035,0.016,0.071,0.033,0.106,0.05c1.276,0.586,2.543,1.194,3.802,1.819 c0.148,0.073,0.297,0.145,0.445,0.219c1.23,0.615,2.45,1.252,3.663,1.904c0.229,0.123,0.457,0.249,0.686,0.373 c1.224,0.667,2.441,1.347,3.646,2.052c17.391,10.173,36.323,16.762,56.271,19.585c0.063,0.009,0.125,0.017,0.188,0.024 l81.881,9.427c0.453,0.065,0.903,0.14,1.35,0.224c12.054,2.264,21.568,11.171,24.751,22.77c0.472,1.718,0.804,3.496,0.986,5.319 l0.325,3.27l-153.46-13.445c-4.018-0.351-7.566,2.622-7.918,6.642c-0.353,4.021,2.622,7.566,6.642,7.918l162.242,14.215 c0.039,0.003,0.077,0.002,0.115,0.005c0.038,0.003,0.075,0.009,0.114,0.012l30.597,1.717c0.137,0.008,0.273,0.011,0.409,0.011 c0.145,0,0.288-0.023,0.432-0.032c0.163-0.01,0.326-0.016,0.488-0.036c0.218-0.028,0.431-0.075,0.645-0.122 c0.153-0.034,0.307-0.059,0.457-0.103c0.234-0.067,0.459-0.158,0.686-0.249c0.122-0.049,0.248-0.086,0.368-0.142 c0.341-0.158,0.673-0.34,0.989-0.552l25.972-17.381c0.001-0.001,0.002-0.002,0.003-0.003l76.702-51.332 c7.717-5.187,18.251-3.152,23.482,4.536C499.249,333.181,498.062,342.736,491.673,348.41z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <h3 class="h6 mt-3"><b>Real Estate</b></h3>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box bg-white text-center">
                                            <svg width="50px" height="50px" fill="#1d13ed"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                                viewBox="0 0 480 480" style="enable-background:new 0 0 480 480"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M458.504,401.912C461.968,396.8,464,390.632,464,384c0-17.648-14.352-32-32-32s-32,14.352-32,32    c0,6.632,2.032,12.8,5.496,17.912c-9.168,3.216-16.376,10.416-19.584,19.584c-2.264-1.536-4.784-2.664-7.416-3.584    C381.968,412.8,384,406.632,384,400c0-17.648-14.352-32-32-32s-32,14.352-32,32c0,6.632,2.032,12.8,5.496,17.912    c-2.624,0.92-5.152,2.048-7.416,3.584c-3.216-9.168-10.416-16.376-19.584-19.584C301.968,396.8,304,390.632,304,384    c0-17.648-14.352-32-32-32s-32,14.352-32,32c0,6.632,2.032,12.8,5.496,17.912C233.024,406.288,224,418.048,224,432v24    c0,4.424,3.576,8,8,8h72v8c0,4.424,3.576,8,8,8h80c4.424,0,8-3.576,8-8v-8h72c4.424,0,8-3.576,8-8v-24    C480,418.048,470.976,406.288,458.504,401.912z M272,368c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16c-8.824,0-16-7.176-16-16    C256,375.176,263.176,368,272,368z M304,448h-64v-16c0-8.824,7.176-16,16-16h32c8.824,0,16,7.176,16,16V448z M352,384    c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16c-8.824,0-16-7.176-16-16C336,391.176,343.176,384,352,384z M384,456v8h-64v-8v-8    c0-8.824,7.176-16,16-16h32c8.824,0,16,7.176,16,16V456z M432,368c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16    c-8.824,0-16-7.176-16-16C416,375.176,423.176,368,432,368z M464,448h-64v-16c0-8.824,7.176-16,16-16h32c8.824,0,16,7.176,16,16    V448z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M245.656,258.344l-40-40C204.16,216.84,202.128,216,200,216h-40v-40c0-4.424-3.576-8-8-8H8c-4.424,0-8,3.576-8,8v104v56    c0,4.424,3.576,8,8,8h25.136c3.576,13.768,15.992,24,30.864,24s27.288-10.232,30.864-24h66.272c3.576,13.768,15.992,24,30.864,24    s27.288-10.232,30.864-24H240c4.424,0,8-3.576,8-8v-72C248,261.872,247.16,259.84,245.656,258.344z M16,184h128v40v48H16V184z     M64,352c-8.824,0-16-7.176-16-16c0-8.824,7.176-16,16-16s16,7.176,16,16C80,344.824,72.824,352,64,352z M192,352    c-8.824,0-16-7.176-16-16c0-8.824,7.176-16,16-16c8.824,0,16,7.176,16,16C208,344.824,200.824,352,192,352z M232,328h-9.016    c-0.28-1.088-0.712-2.112-1.104-3.16c-0.192-0.512-0.32-1.04-0.536-1.544c-0.768-1.76-1.672-3.448-2.728-5.024    c-0.232-0.352-0.528-0.656-0.784-1c-0.872-1.208-1.8-2.36-2.832-3.432c-0.472-0.488-0.984-0.912-1.48-1.368    c-0.92-0.84-1.856-1.64-2.872-2.368c-0.592-0.432-1.2-0.824-1.824-1.208c-1.032-0.64-2.096-1.216-3.208-1.744    c-0.656-0.312-1.304-0.624-1.992-0.896c-1.224-0.48-2.496-0.848-3.784-1.176c-0.624-0.16-1.216-0.36-1.848-0.48    c-1.944-0.368-3.936-0.6-5.992-0.6c-2.056,0-4.048,0.232-6,0.608c-0.632,0.12-1.232,0.328-1.848,0.48    c-1.296,0.328-2.56,0.696-3.784,1.176c-0.68,0.272-1.328,0.584-1.992,0.896c-1.104,0.528-2.176,1.096-3.208,1.744    c-0.624,0.392-1.232,0.776-1.824,1.208c-1.008,0.728-1.952,1.528-2.872,2.368c-0.496,0.456-1.008,0.88-1.48,1.368    c-1.032,1.072-1.96,2.224-2.832,3.432c-0.248,0.344-0.544,0.648-0.784,1c-1.056,1.584-1.968,3.264-2.728,5.024    c-0.216,0.496-0.344,1.032-0.536,1.544c-0.392,1.04-0.824,2.064-1.104,3.16H94.976c-0.28-1.088-0.712-2.112-1.104-3.16    c-0.192-0.512-0.32-1.04-0.536-1.544c-0.768-1.76-1.672-3.448-2.728-5.024c-0.232-0.352-0.528-0.656-0.784-1    c-0.872-1.208-1.8-2.36-2.832-3.432c-0.472-0.488-0.984-0.912-1.48-1.368c-0.92-0.84-1.856-1.64-2.872-2.368    c-0.592-0.432-1.2-0.824-1.824-1.208c-1.032-0.64-2.096-1.216-3.208-1.744c-0.656-0.312-1.304-0.624-1.992-0.896    c-1.224-0.48-2.496-0.848-3.784-1.176c-0.624-0.16-1.216-0.36-1.848-0.48C68.048,304.232,66.056,304,64,304    c-2.056,0-4.048,0.232-6,0.608c-0.632,0.12-1.232,0.328-1.848,0.48c-1.296,0.328-2.56,0.696-3.784,1.176    c-0.68,0.272-1.328,0.584-1.992,0.896c-1.104,0.528-2.176,1.096-3.208,1.744c-0.624,0.392-1.232,0.776-1.824,1.208    c-1.008,0.728-1.952,1.528-2.872,2.368c-0.496,0.456-1.008,0.88-1.48,1.368c-1.032,1.072-1.96,2.224-2.832,3.432    c-0.248,0.344-0.544,0.648-0.784,1c-1.056,1.584-1.968,3.264-2.728,5.024c-0.216,0.496-0.344,1.032-0.536,1.544    c-0.384,1.04-0.816,2.064-1.096,3.152H16v-40h136c4.424,0,8-3.576,8-8v-48h36.688L232,267.312V328z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M472,0h-48c-4.424,0-8,3.576-8,8v91.568l-48,30V104c0-2.904-1.576-5.584-4.128-7c-2.528-1.4-5.648-1.336-8.12,0.216    L304,129.568V104c0-2.904-1.576-5.584-4.128-7c-2.536-1.4-5.648-1.336-8.12,0.216l-64,40C225.424,138.68,224,141.24,224,144v64    c0,4.424,3.576,8,8,8h64h64h64h48c4.424,0,8-3.576,8-8v-80V8C480,3.576,476.424,0,472,0z M288,144v56h-48v-51.56l48-30V144z     M352,144v56h-48v-51.56l48-30V144z M416,128v72h-48v-51.56l48-30V128z M464,200h-32v-64h32V200z M464,120h-32v-16V16h32V120z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <rect x="320" y="160" width="16" height="24"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="384" y="160" width="16" height="24"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="256" y="160" width="16" height="24"></rect>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M429.56,262.608c-0.8,5.056-1.824,10.128-3.032,15.048l15.544,3.8c1.304-5.344,2.408-10.832,3.288-16.304L429.56,262.608z    ">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M432,232c0,5.152-0.2,10.312-0.608,15.344l15.952,1.28C447.784,243.168,448,237.568,448,232H432z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M410.344,320.672c-2.344,4.512-4.912,8.992-7.64,13.32l13.544,8.512c2.952-4.696,5.744-9.544,8.28-14.44L410.344,320.672z    ">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M422.296,292.416c-1.608,4.84-3.432,9.672-5.416,14.368l14.736,6.232c2.152-5.08,4.128-10.32,5.864-15.568    L422.296,292.416z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M103.568,82.992c-4.176,3.64-8.248,7.48-12.096,11.4l11.424,11.2c3.552-3.624,7.312-7.168,11.184-10.536L103.568,82.992z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M306.296,42.792L301.2,57.96c4.816,1.608,9.632,3.456,14.336,5.472l6.312-14.704    C316.736,46.544,311.504,44.544,306.296,42.792z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M130.32,63.232c-4.672,2.904-9.304,6.048-13.776,9.344l9.512,12.872c4.12-3.048,8.392-5.952,12.696-8.624L130.32,63.232z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M61.104,133.84c-2.784,4.664-5.456,9.592-7.936,14.632l14.36,7.064c2.288-4.648,4.752-9.192,7.312-13.496L61.104,133.84z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M80.312,106.72c-3.576,4.28-6.992,8.712-10.152,13.176l13.064,9.248c2.92-4.136,6.072-8.224,9.368-12.176L80.312,106.72z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M240.904,32l-0.064,16c5.144,0.024,10.304,0.248,15.344,0.672l1.344-15.936C252.072,32.272,246.48,32.024,240.904,32z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M274.032,34.776l-2.608,15.784c5.08,0.84,10.136,1.88,15.032,3.112l3.872-15.528    C285.008,36.816,279.528,35.68,274.032,34.776z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M336.864,55.888l-7.472,14.16c4.488,2.36,8.96,4.952,13.296,7.704l8.56-13.512    C346.56,61.256,341.72,58.456,336.864,55.888z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M224.288,32.576c-5.544,0.424-11.104,1.064-16.512,1.896l2.456,15.816c5.008-0.784,10.144-1.368,15.264-1.76    L224.288,32.576z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M159.84,48.008c-5.08,2.128-10.152,4.496-15.072,7.032l7.328,14.216c4.544-2.344,9.232-4.52,13.912-6.48L159.84,48.008z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M191.456,37.696c-5.352,1.272-10.744,2.8-16.024,4.52l4.968,15.2c4.864-1.584,9.832-2.992,14.76-4.168L191.456,37.696z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M166.96,419.768l-5.64,14.968c5.176,1.952,10.496,3.72,15.808,5.232l4.408-15.376    C176.648,423.184,171.744,421.56,166.96,419.768z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M139.224,406.672l-7.968,13.872c4.816,2.76,9.776,5.344,14.752,7.696l6.832-14.472    C148.24,411.6,143.656,409.216,139.224,406.672z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M196.456,428.224l-3.16,15.688c5.44,1.096,10.96,1.984,16.424,2.64l1.904-15.888    C206.584,430.064,201.488,429.24,196.456,428.224z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M93.864,370.56l-11.736,10.872c2.96,3.2,6.04,6.312,9.2,9.328l11.032-11.592C99.44,376.392,96.608,373.512,93.864,370.56z    ">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M113.904,389.304l-10.064,12.44c4.328,3.504,8.808,6.848,13.328,9.944l9.048-13.184    C122.056,395.632,117.904,392.544,113.904,389.304z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h3 class="h6 mt-3"><b>Logistics & Distribution</b></h3>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box bg-white text-center">
                                            <svg width="50px" height="50px" fill="#0caec1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M113.057,41.398c-0.001,4.669-0.982,7.974-2.918,9.821c-4.088,3.9-26.873,2.828-29.196,2.828v16.168h21.996v17.723 c0,7.974-6.488,14.462-14.462,14.462h-0.18c-7.973,0-14.461-6.488-14.461-14.462V71.253H57.667v16.685 c0,16.89,13.741,30.631,30.631,30.631h0.18c16.89,0,30.631-13.741,30.631-30.63V64.751c0.755-0.564,1.491-1.165,2.194-1.836 c5.258-5.015,7.924-12.256,7.924-21.518H113.057z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M88.926,0C39.892,0,0,39.893,0,88.926s39.892,88.926,88.926,88.926s88.926-39.893,88.926-88.926S137.961,0,88.926,0z M143.744,136.687l-24.024-22.022l-10.926,11.918l22.999,21.083c-12.031,8.804-26.848,14.019-42.867,14.019 s-30.835-5.215-42.867-14.019l22.999-21.083l-10.926-11.918l-24.024,22.022c-11.158-12.791-17.94-29.493-17.94-47.76 c0-40.119,32.639-72.758,72.758-72.758s72.758,32.639,72.758,72.758C161.684,107.193,154.902,123.895,143.744,136.687z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M447.203,375.546c0,4.668-0.981,7.973-2.917,9.82c-4.088,3.9-26.873,2.828-29.196,2.828v16.337h21.996v17.556 c0,7.974-6.488,14.462-14.462,14.462h-0.18c-7.974,0-14.462-6.488-14.462-14.462v-16.685h-16.168v16.685 c0,16.89,13.741,30.631,30.631,30.631h0.18c16.89,0,30.631-13.741,30.631-30.631V398.9c0.755-0.564,1.491-1.165,2.193-1.836 c5.258-5.015,7.924-12.256,7.924-21.518H447.203z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M423.074,334.147c-49.034,0-88.926,39.893-88.926,88.926c0,49.033,39.892,88.926,88.926,88.926S512,472.107,512,423.074 C512,374.04,472.108,334.147,423.074,334.147z M477.891,470.834l-24.024-22.022l-10.925,11.918l22.999,21.083 c-12.031,8.804-26.848,14.019-42.867,14.019c-16.019,0-30.835-5.215-42.867-14.019l22.999-21.083l-10.926-11.918l-24.024,22.022 c-11.158-12.791-17.94-29.493-17.94-47.76c0-40.119,32.639-72.758,72.758-72.758c40.119,0,72.758,32.639,72.758,72.758 C495.832,441.341,489.049,458.043,477.891,470.834z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <rect x="165.368" y="169.208"
                                                            transform="matrix(0.6859 -0.7277 0.7277 0.6859 -74.5337 181.9086)"
                                                            width="16.168" height="16.168"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="205.085" y="206.634"
                                                            transform="matrix(0.6859 -0.7277 0.7277 0.6859 -89.2933 222.5665)"
                                                            width="16.168" height="16.168"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="249.349" y="248.354"
                                                            transform="matrix(0.6859 -0.7277 0.7277 0.6859 -105.7495 267.8814)"
                                                            width="16.168" height="16.168"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="337.862" y="331.81"
                                                            transform="matrix(0.6859 -0.7277 0.7277 0.6859 -138.6779 358.5056)"
                                                            width="16.169" height="16.168"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="294.682" y="291.13"
                                                            transform="matrix(0.686 -0.7276 0.7276 0.686 -122.6402 314.2463)"
                                                            width="16.167" height="16.167"></rect>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M318.251,453.981c-20.089,6.312-41.032,9.513-62.251,9.513c-17.675,0-34.84-2.227-51.232-6.406 c-12.188-16.892-22.546-39.048-30.611-64.735h135.738v-16.168H169.518c-8.847-33.644-14.022-72.143-14.639-112.101h70.733v-16.168 h-70.736c0.285-18.853,1.563-37.517,3.813-55.591l-16.044-1.996c-2.331,18.731-3.651,38.066-3.937,57.588H48.662 c0.709-18.449,3.848-36.633,9.357-54.165l-15.425-4.848C35.788,210.561,32.337,233.136,32.337,256 c0,123.328,100.335,223.663,223.663,223.663c22.863,0,45.439-3.45,67.099-10.257L318.251,453.981z M86.947,376.185 c-22.731-31.881-36.665-70.437-38.27-112.101h90.028c0.577,40.091,5.449,78.287,13.95,112.101H86.947z M99.732,392.354h57.358 c6.383,21.333,14.31,40.562,23.587,56.986C149.267,437.06,121.561,417.339,99.732,392.354z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M256,32.337c-22.863,0-45.439,3.45-67.097,10.255l4.846,15.426c20.089-6.312,41.032-9.512,62.251-9.512 c17.675,0,34.84,2.227,51.232,6.406c12.188,16.892,22.546,39.048,30.611,64.735H202.105v16.168h140.376 c8.847,33.644,14.022,72.143,14.639,112.101h-68.784v16.168h68.787c-0.285,18.841-1.565,37.503-3.817,55.589l16.044,1.998 c2.334-18.744,3.655-38.079,3.942-57.588h90.046c-0.708,18.463-3.842,36.648-9.344,54.167l15.426,4.844 c6.796-21.639,10.242-44.213,10.242-67.096C479.663,132.672,379.328,32.337,256,32.337z M354.91,119.646 c-6.382-21.333-14.309-40.562-23.586-56.986c31.41,12.279,59.116,32,80.945,56.986H354.91z M373.295,247.916 c-0.578-40.091-5.45-78.287-13.951-112.101h65.71c22.731,31.881,36.665,70.437,38.27,112.101H373.295z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h3 class="h6 mt-3"><b>Social Networking</b></h3>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box bg-white text-center">
                                            <svg width="50px" height="50px" fill="#a241bb"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                                viewBox="0 0 511.999 511.999"
                                                style="enable-background:new 0 0 511.999 511.999" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M125.768,153.902c-69.22,0-125.535,56.315-125.535,125.535c0,42.977,20.444,89.185,60.765,137.341 c5.991,7.155,11.961,13.785,17.69,19.834c-26.034,7.106-41.665,19.873-41.665,34.774c0,26.379,45.722,40.613,88.741,40.613 c43.02,0,88.741-14.235,88.741-40.613c0-14.889-15.626-27.659-41.643-34.768c10.394-10.973,21.578-23.883,32.19-38.283 c2.46-3.339,1.748-8.038-1.59-10.498c-3.336-2.457-8.038-1.747-10.498,1.591c-12.812,17.387-26.68,32.667-38.781,44.804 c-1.387,0.708-2.547,1.832-3.274,3.249c-10.84,10.653-19.962,18.556-25.138,22.874c-5.119-4.276-14.102-12.072-24.803-22.586 c-0.768-1.683-2.117-3.003-3.763-3.739c-34.007-34.205-81.957-93.301-81.957-154.591c0-60.94,49.579-110.519,110.519-110.519 s110.519,49.579,110.519,110.519c0,26.613-9.068,55.353-26.952,85.422c-2.119,3.565-0.949,8.172,2.615,10.291 s8.172,0.949,10.291-2.615c19.284-32.424,29.062-63.746,29.062-93.098C251.303,210.217,194.988,153.902,125.768,153.902z M121.173,475.971c1.352,1.047,2.974,1.57,4.595,1.57c1.621,0,3.242-0.523,4.595-1.57c0.921-0.713,13.467-10.497,30.19-26.848 c25.322,5.164,38.938,15.107,38.938,22.264c0,5.345-7.326,11.651-19.119,16.456c-14.464,5.895-33.857,9.142-54.607,9.142 c-45.006,0-73.726-15.162-73.726-25.598c0-7.167,13.62-17.105,38.956-22.269C107.811,465.566,120.375,475.353,121.173,475.971z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M125.768,224.854c-11.875,0-23.167,3.749-32.655,10.842c-3.32,2.483-4,7.188-1.518,10.509 c2.484,3.32,7.189,3.999,10.509,1.518c6.871-5.137,15.054-7.853,23.663-7.853c21.817,0,39.566,17.749,39.566,39.567 c0,21.817-17.749,39.566-39.566,39.566s-39.566-17.75-39.566-39.566c0-3.723,0.515-7.404,1.53-10.938 c1.144-3.985-1.159-8.143-5.144-9.288c-3.984-1.14-8.143,1.16-9.288,5.145c-1.401,4.883-2.112,9.956-2.112,15.081 c0,30.096,24.485,54.582,54.582,54.582c30.096,0,54.582-24.485,54.582-54.582C180.35,249.34,155.864,224.854,125.768,224.854z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M452.958,218.121c3.82-4.099,7.755-8.515,11.701-13.229c31.258-37.333,47.107-73.222,47.107-106.673 C511.766,44.062,467.705,0,413.547,0c-39.563,0-75.086,23.546-90.497,59.986c-1.616,3.819,0.171,8.225,3.989,9.839 c3.818,1.614,8.225-0.171,9.839-3.989c13.058-30.872,43.152-50.821,76.669-50.821c45.879,0,83.204,37.326,83.204,83.205 c0,62.043-65.138,121.484-83.207,136.775c-3.982-3.365-10.25-8.873-17.599-16.077c-0.733-1.453-1.917-2.605-3.339-3.318 c-25.923-26.101-62.263-70.968-62.263-117.38c0-4.147-3.36-7.508-7.508-7.508c-4.146,0-7.508,3.361-7.508,7.508 c0,33.45,15.849,69.339,47.108,106.673c3.945,4.711,7.877,9.125,11.695,13.223c-19.354,5.815-30.527,15.713-30.527,27.632 c0,10.052,8.154,18.911,22.962,24.944c12.67,5.163,29.355,8.007,46.981,8.007c17.625,0,34.31-2.844,46.981-8.007 c14.805-6.034,22.959-14.893,22.959-24.945C483.485,233.85,472.304,223.943,452.958,218.121z M413.545,263.682 c-35.539,0-54.926-11.848-54.926-17.936c0-3.966,8.819-11.224,27.651-15.228c12.671,12.329,22.076,19.655,22.683,20.126 c1.353,1.047,2.974,1.57,4.595,1.57c1.621,0,3.241-0.523,4.595-1.57c0.607-0.469,10.01-7.796,22.681-20.124 c8.39,1.789,15.658,4.41,20.744,7.506c4.323,2.634,6.904,5.52,6.904,7.72C468.47,251.834,449.083,263.682,413.545,263.682z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M413.547,54.532c-24.089,0-43.688,19.598-43.688,43.689c0,24.089,19.598,43.687,43.688,43.687 s43.688-19.597,43.688-43.687C457.235,74.131,437.637,54.532,413.547,54.532z M413.548,126.892 c-15.812,0-28.673-12.862-28.673-28.672c0-15.81,12.862-28.673,28.673-28.673c15.81,0,28.673,12.862,28.673,28.673 C442.22,114.03,429.358,126.892,413.548,126.892z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M316.157,238.239h-3.428c-2.496,0-5.004,0.165-7.458,0.492c-4.109,0.547-6.998,4.321-6.452,8.433 c0.503,3.775,3.727,6.519,7.433,6.519c0.33,0,0.664-0.021,1-0.066c1.799-0.239,3.642-0.36,5.478-0.36h3.427v-0.001 c4.147,0,7.508-3.36,7.508-7.508S320.304,238.239,316.157,238.239z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M291.336,463.496c-0.012,0-0.023,0-0.035,0l-9.916,0.045c-4.146,0.019-7.492,3.396-7.474,7.542 c0.018,4.135,3.377,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542 C298.825,466.834,295.467,463.496,291.336,463.496z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M325.066,335.489h-9.916c-4.147,0-7.508,3.362-7.508,7.508c0,4.147,3.36,7.508,7.508,7.508h9.916 c4.147,0,7.508-3.36,7.508-7.508C332.574,338.851,329.214,335.489,325.066,335.489z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M285.284,253.536c-2.811-3.046-7.559-3.238-10.609-0.428c-2.799,2.581-5.345,5.458-7.567,8.552 c-2.419,3.369-1.649,8.06,1.719,10.479c1.325,0.952,2.857,1.41,4.374,1.41c2.335,0,4.637-1.087,6.104-3.129 c1.63-2.269,3.498-4.381,5.551-6.275C287.904,261.334,288.095,256.584,285.284,253.536z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M331.002,463.314c-0.012,0-0.023,0-0.035,0l-9.915,0.045c-4.146,0.018-7.492,3.396-7.474,7.542 c0.018,4.135,3.377,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.915-0.045c4.146-0.018,7.492-3.396,7.474-7.542 C338.49,466.653,335.132,463.314,331.002,463.314z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M251.671,463.675c-0.012,0-0.023,0-0.035,0l-9.916,0.045c-4.146,0.019-7.492,3.396-7.474,7.542 c0.019,4.135,3.375,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542 C259.16,467.013,255.802,463.675,251.671,463.675z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M290.829,329.178c-2.359-1.488-4.578-3.226-6.593-5.163c-2.989-2.875-7.743-2.78-10.616,0.206 c-2.875,2.988-2.782,7.741,0.206,10.615c2.748,2.643,5.773,5.012,8.991,7.042c1.244,0.785,2.629,1.159,3.999,1.159 c2.492,0,4.929-1.239,6.358-3.504C295.387,336.027,294.336,331.39,290.829,329.178z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M272.373,302.287c-0.504-2.588-0.76-5.25-0.76-7.914l0.002-0.417c0.049-4.146-3.273-7.546-7.42-7.594 c-0.029-0.001-0.059-0.001-0.089-0.001c-4.106,0-7.458,3.304-7.506,7.421l-0.003,0.592c0,3.626,0.349,7.255,1.037,10.786 c0.698,3.585,3.84,6.072,7.361,6.072c0.475,0,0.959-0.045,1.443-0.14C270.509,310.299,273.165,306.357,272.373,302.287z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M364.733,335.489h-9.916c-4.147,0-7.508,3.362-7.508,7.508c0,4.147,3.361,7.508,7.508,7.508h9.916 c4.147,0,7.508-3.36,7.508-7.508C372.241,338.851,368.88,335.489,364.733,335.489z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M485.274,350.775c-2.893-2.283-5.985-4.357-9.192-6.162c-3.609-2.036-8.19-0.757-10.226,2.856 c-2.035,3.612-0.757,8.192,2.856,10.226c2.53,1.427,4.972,3.063,7.255,4.866c1.38,1.089,3.018,1.616,4.648,1.616 c2.218,0,4.416-0.98,5.898-2.856C489.083,358.066,488.529,353.344,485.274,350.775z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M457.405,468.694c-0.57-4.107-4.366-6.982-8.465-6.41c-2.459,0.34-4.977,0.519-7.488,0.529l-1.405,0.007 c-4.147,0.021-7.492,3.399-7.472,7.544c0.021,4.134,3.378,7.472,7.507,7.472c0.013,0,0.025,0,0.037,0l1.402-0.007 c3.171-0.014,6.359-0.239,9.474-0.67C455.104,476.591,457.973,472.8,457.405,468.694z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M490.54,447.581c-2.861-3.004-7.614-3.119-10.614-0.258c-2.107,2.007-4.387,3.865-6.778,5.523 c-3.407,2.362-4.254,7.04-1.893,10.449c1.459,2.103,3.798,3.231,6.177,3.231c1.476,0,2.966-0.434,4.271-1.338 c3.026-2.099,5.913-4.451,8.58-6.992C493.286,455.335,493.4,450.582,490.54,447.581z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M505.152,411.118c-4.069-0.767-7.999,1.913-8.767,5.988c-0.539,2.857-1.305,5.692-2.28,8.428 c-1.392,3.905,0.645,8.2,4.551,9.593c0.833,0.297,1.685,0.438,2.522,0.438c3.084,0,5.976-1.916,7.072-4.988 c1.237-3.47,2.21-7.067,2.893-10.692C511.908,415.81,509.226,411.884,505.152,411.118z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M509.612,386.984c-1.018-3.545-2.324-7.037-3.886-10.384c-1.754-3.758-6.218-5.382-9.979-3.63 c-3.757,1.754-5.382,6.221-3.629,9.979c1.23,2.635,2.26,5.387,3.061,8.177c0.945,3.293,3.949,5.439,7.213,5.439 c0.687,0,1.383-0.095,2.075-0.293C508.452,395.127,510.755,390.969,509.612,386.984z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M404.399,335.489h-9.916c-4.147,0-7.508,3.362-7.508,7.508c0,4.147,3.36,7.508,7.508,7.508h9.916 c4.147,0,7.508-3.36,7.508-7.508C411.907,338.851,408.546,335.489,404.399,335.489z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M370.668,463.134c-0.012,0-0.023,0-0.035,0l-9.916,0.045c-4.146,0.018-7.492,3.396-7.474,7.542 c0.019,4.135,3.377,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542 C378.157,466.473,374.798,463.134,370.668,463.134z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M444.395,335.561c-1.062-0.048-2.138-0.071-3.196-0.071h-7.051c-4.147,0-7.508,3.362-7.508,7.508 c0,4.147,3.36,7.508,7.508,7.508h7.051v-0.001c0.849,0,1.693,0.019,2.532,0.056c0.113,0.006,0.226,0.008,0.338,0.008 c3.993,0,7.317-3.146,7.494-7.175C451.746,339.25,448.537,335.744,444.395,335.561z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M410.333,462.955c-0.012,0-0.023,0-0.035,0L400.382,463c-4.146,0.018-7.492,3.396-7.474,7.542 c0.019,4.135,3.377,7.474,7.507,7.474c0.012,0,0.024,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542 C417.822,466.293,414.464,462.955,410.333,462.955z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h3 class="h6 mt-3"><b>Travel & Hospitality</b></h3>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box bg-white text-center">
                                            <svg width="50px" height="50px" fill="#faca0a"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                                viewBox="0 0 480 480" style="enable-background:new 0 0 480 480"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M339.904,161.776l-5.136-16.904c-6.524-19.202-27.379-29.479-46.581-22.955c-10.802,3.67-19.285,12.153-22.955,22.955 l-5.136,16.904c-4.322,14.256-5.229,29.329-2.648,44c2.354,12.352,10.196,22.964,21.312,28.84L273.008,363.2 c-0.77,7.177,1.558,14.342,6.4,19.696c10.413,11.39,28.089,12.182,39.479,1.769c0.616-0.563,1.206-1.153,1.769-1.769 c4.734-5.202,7.058-12.157,6.4-19.16L321.272,234.6c11.101-5.879,18.93-16.484,21.28-28.824 C345.133,191.105,344.226,176.032,339.904,161.776z M326.792,202.992c-1.732,8.874-8.056,16.155-16.6,19.112 c-3.243,1.219-5.332,4.387-5.176,7.848L311.096,365c0.28,2.649-0.594,5.29-2.4,7.248c-4.817,4.769-12.575,4.769-17.392,0 c-1.896-2.116-2.757-4.964-2.352-7.776l6.032-134.52c0.156-3.461-1.933-6.629-5.176-7.848c-8.544-2.957-14.868-10.238-16.6-19.112 c-2.14-12.18-1.386-24.693,2.2-36.528l5.136-16.912c3.974-10.745,15.906-16.234,26.652-12.26c5.681,2.101,10.159,6.58,12.26,12.26 l5.136,16.912C328.174,178.3,328.928,190.812,326.792,202.992z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M216,120c-4.418,0-8,3.582-8,8v68.688l-21.656,21.656c-1.602,1.596-2.454,3.797-2.344,6.056l7,140 c0.167,3.019-0.929,5.972-3.024,8.152c-4.379,4.418-11.511,4.45-15.93,0.07c-0.024-0.023-0.047-0.047-0.07-0.07 c-2.096-2.18-3.191-5.133-3.024-8.152l7.048-140c0.112-2.258-0.737-4.458-2.336-6.056L152,196.688V128c0-4.418-3.582-8-8-8 s-8,3.582-8,8v72c0,2.122,0.844,4.156,2.344,5.656l21.488,21.496l-6.824,136.472c-0.726,14.907,10.77,27.581,25.677,28.307 c14.907,0.726,27.581-10.77,28.307-25.677c0.043-0.876,0.043-1.753,0-2.629l-6.824-136.472l21.488-21.496 c1.5-1.5,2.344-3.534,2.344-5.656v-72C224,123.582,220.418,120,216,120z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M168,120c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C176,123.582,172.418,120,168,120z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M192,120c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C200,123.582,196.418,120,192,120z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M240,0C107.452,0,0,107.452,0,240s107.452,240,240,240s240-107.452,240-240C479.85,107.514,372.486,0.15,240,0z M240,464 C116.288,464,16,363.712,16,240S116.288,16,240,16s224,100.288,224,224C463.859,363.653,363.653,463.859,240,464z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M265.969,390.172c-0.429-4.397-4.342-7.614-8.74-7.185c-0.103,0.01-0.206,0.022-0.309,0.036l0.032-0.008 c-11.263,1.308-22.641,1.308-33.904,0c-4.39-0.515-8.365,2.626-8.88,7.016c-0.515,4.39,2.626,8.365,7.016,8.88 c12.491,1.459,25.109,1.459,37.6,0C263.181,398.483,266.398,394.57,265.969,390.172z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M362.4,136.912c-2.839-3.385-7.885-3.828-11.27-0.988c-0.011,0.009-0.022,0.019-0.034,0.028 c-3.377,2.848-3.807,7.894-0.96,11.272c48.235,57.26,44.545,141.929-8.488,194.776c-3.13,3.119-3.139,8.186-0.02,11.316 c3.119,3.13,8.186,3.139,11.316,0.02C411.881,294.623,415.991,200.541,362.4,136.912z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M186.392,105.744c-0.005,0-0.01-0.001-0.015-0.001c-0.008,0-0.016,0.001-0.025,0.001H186.392z">
                                                            </path>
                                                            <path
                                                                d="M277.736,84.472c-31.265-7.493-64.055-5.479-94.168,5.784c-4.136,1.555-6.227,6.169-4.672,10.304 c1.172,3.117,4.152,5.18,7.481,5.183c0.957-0.005,1.905-0.18,2.799-0.519c27.118-10.141,56.646-11.952,84.8-5.2 c4.295,1.038,8.618-1.601,9.656-5.896C284.67,89.833,282.031,85.51,277.736,84.472z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M137.992,341.6C111.023,314.677,95.908,278.108,96,240c-0.079-30.446,9.565-60.122,27.528-84.704 c2.655-3.532,1.944-8.547-1.588-11.202s-8.547-1.944-11.202,1.588c-0.047,0.063-0.093,0.126-0.138,0.19 c-46.253,63.588-39.447,151.359,16.056,207.056c3.128,3.13,8.202,3.132,11.332,0.004C141.118,349.804,141.12,344.73,137.992,341.6 z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h3 class="h6 mt-3"><b>Food & Restaurant</b></h3>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box bg-white text-center">
                                            <svg width="50px" height="50px" fill="#4caf50"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                                viewBox="0 0 480.008 480.008"
                                                style="enable-background:new 0 0 480.008 480.008" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M431.24,216.155c-3.196-15.741-15.499-28.044-31.24-31.24v-88.8c0-13.255-10.745-24-24-24s-24,10.745-24,24v2.848 l-169.728,77.152H56c-30.927,0.21-55.828,25.452-55.618,56.38C0.57,260.041,20.763,283.36,48,287.483v120.632c0,4.418,3.582,8,8,8 h64c4.418,0,8-3.582,8-8v-64.152c22.44-1.22,40.008-19.775,40-42.248v-13.6h14.6l169.4,61.6v2.4c0,13.255,10.745,24,24,24 s24-10.745,24-24v-88.8C421.65,258.919,435.636,237.805,431.24,216.155z M112,400.115H64v-16h16v-16H64v-16h16v-16H64v-16h16v-16 H64v-16h48V400.115z M152,301.715c0.045,13.638-10.407,25.017-24,26.128v-39.728h24V301.715z M176,272.115H56 c-22.091-0.005-39.996-17.917-39.991-40.009c0.002-10.604,4.215-20.772,11.711-28.271c7.483-7.527,17.666-11.747,28.28-11.72h120 V272.115z M352,332.691l-160-58.176v-85.248l160-72.728V332.691z M384,352.115c0,4.418-3.582,8-8,8s-8-3.582-8-8v-8v-248 c0-4.418,3.582-8,8-8s8,3.582,8,8V352.115z M414.68,231.963c-2.396,6.877-7.802,12.284-14.68,14.68v-45.056 C412.442,205.921,419.014,219.521,414.68,231.963z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M88,208.115c-13.255,0-24,10.745-24,24s10.745,24,24,24s24-10.745,24-24S101.255,208.115,88,208.115z M88,240.115 c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S92.418,240.115,88,240.115z"
                                                            fill="#FFFFFF"></path>
                                                    </g>
                                                    <g>
                                                        <circle cx="224" cy="376.115" r="16"></circle>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M478.657,51.677c0-0.001-0.001-0.001-0.001-0.002c-2.451-3.676-7.418-4.669-11.094-2.217 c-0.001,0-0.001,0.001-0.002,0.001l-48,32c-3.676,2.452-4.668,7.42-2.216,11.096c2.452,3.676,7.42,4.668,11.096,2.216l48-32 C480.116,60.319,481.109,55.352,478.657,51.677z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M479.548,158.331c-0.966-4.092-4.935-6.738-9.084-6.056H470.4l-40,8c-4.33,0.879-7.127,5.102-6.248,9.432 c0.758,3.731,4.04,6.412,7.848,6.408c0.537,0.003,1.074-0.051,1.6-0.16l40-8C477.9,166.94,480.563,162.631,479.548,158.331z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M473.6,280.275l-40-8c-4.3-1.015-8.609,1.648-9.624,5.948c-1.015,4.3,1.648,8.609,5.948,9.624 c0.179,0.042,0.359,0.078,0.54,0.108l40,8c0.505,0.105,1.02,0.159,1.536,0.16c4.418,0.004,8.004-3.574,8.008-7.992 C480.012,284.315,477.331,281.033,473.6,280.275z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M475.576,368.955l-48-24c-3.954-1.975-8.761-0.37-10.736,3.584c-1.975,3.954-0.37,8.761,3.584,10.736l48,24 c3.954,1.975,8.761,0.37,10.736-3.584C481.135,375.737,479.53,370.93,475.576,368.955z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M85.459,74.459c-3.1-2.994-8.015-2.994-11.115,0l-72,72c-3.124,3.125-3.123,8.19,0.002,11.314 c1.5,1.499,3.534,2.342,5.654,2.342c2.122,0,4.156-0.844,5.656-2.344l72-72C88.725,82.593,88.637,77.528,85.459,74.459z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <circle cx="72" cy="144.115" r="16"></circle>
                                                    </g>
                                                    <g>
                                                        <circle cx="16" cy="88.115" r="16"></circle>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M325.656,402.395l-72-72c-1.51-1.477-3.544-2.297-5.656-2.28h-64c-4.418,0-8,3.582-8,8l0.168,63.832 c0.013,2.101,0.852,4.113,2.336,5.6l72,72c3.122,3.126,8.188,3.129,11.314,0.006c0.002-0.002,0.004-0.004,0.006-0.006 l63.832-63.84C328.779,410.583,328.779,405.519,325.656,402.395z M256.168,460.635l-64-64L192,344.115h52.664l64,64 L256.168,460.635z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M280,48.115c4.418,0,8-3.582,8-8v-32c0-4.418-3.582-8-8-8H120c-4.418,0-8,3.582-8,8v32c0,4.418,3.582,8,8,8s8,3.582,8,8 s-3.582,8-8,8s-8,3.582-8,8v32c0,4.418,3.582,8,8,8h160c4.418,0,8-3.582,8-8v-32c0-4.418-3.582-8-8-8s-8-3.582-8-8 S275.582,48.115,280,48.115z M272,33.483c-12.499,4.411-19.056,18.12-14.645,30.619c2.416,6.845,7.8,12.229,14.645,14.645v17.368 h-40v-8h-16v8h-88V78.747c12.499-4.411,19.056-18.12,14.645-30.619c-2.416-6.845-7.8-12.229-14.645-14.645V16.115h144V33.483z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <rect x="216" y="24.115" width="16" height="16"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="216" y="56.115" width="16" height="16"></rect>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h3 class="h6 mt-3"><b>On-Demand Solutions</b></h3>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-3">
                                        <div class="card-box bg-white text-center">
                                            <svg width="50px" height="50px" fill="#ff9800"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M511.982,97.701c-0.51-43.455-22.748-67.388-62.619-67.388c-15.432,0-30.302,3.592-40.023,6.589 c0.968-17.762,0.983-28.726,0.983-29.271l0.001-7.604H101.683v7.603c0,0.26,0.026,11.397,1.005,29.281 c-9.72-2.999-24.604-6.598-40.051-6.598c-39.87,0-62.109,23.932-62.619,67.388c-0.502,42.75,9.248,80.804,28.977,113.107 c19.37,31.715,44.128,50.826,61.487,61.271c27.803,16.732,55.59,20.244,74.006,20.244c4.54,0,8.914-0.214,13.005-0.636 c0.271-0.028,0.522-0.06,0.787-0.089c8.904,9.589,18.503,17.27,28.76,22.978c7.561,4.207,12.82,11.544,14.622,19.977 c-10.195,3.173-17.618,12.698-17.618,23.923c0,11.477,7.763,21.17,18.31,24.12v31.91h-41.142v33.301h-40.6v64.167h230.781v-64.167 h-40.6v-33.301h-41.142v-31.91c10.548-2.951,18.311-12.643,18.311-24.12c0-11.226-7.423-20.75-17.618-23.923 c1.802-8.433,7.06-15.769,14.622-19.977c10.232-5.693,19.897-13.416,28.779-22.974c3.147,0.349,7.866,0.72,13.766,0.72 c0.002,0,0.001,0,0.004,0c18.414,0,46.2-3.514,74.001-20.244c17.358-10.446,42.117-29.556,61.487-61.271 C502.735,178.505,512.484,140.45,511.982,97.701z M394.992,15.233c-0.068,2.781-0.176,6.277-0.342,10.369H117.387 c-0.172-4.091-0.287-7.592-0.361-10.369H394.992z M405.334,85.046c10.302-3.429,23.654-6.887,35.615-6.887 c10.029,0,17.25,2.45,21.463,7.282c4.842,5.554,6.403,14.884,4.637,27.734c-7.353,53.526-30.562,95.308-65.354,117.647 c-12.119,7.782-25.171,10.997-36.109,12.139C388.723,194.33,399.921,133.314,405.334,85.046z M114.495,138.009 c7.479,40.115,17.805,74.563,30.693,102.386c0.399,0.864,0.805,1.715,1.209,2.566c-10.934-1.145-23.978-4.359-36.092-12.137 c-34.791-22.34-58.001-64.121-65.354-117.647c-1.765-12.851-0.205-22.182,4.638-27.734c4.213-4.832,11.435-7.281,21.463-7.281 c11.971,0,25.335,3.463,35.641,6.894C108.534,101.518,111.051,119.537,114.495,138.009z M164.488,277.117 c-16.488,0-41.353-3.135-66.164-18.066C72.949,243.781,14.054,197.507,15.224,97.88c0.414-35.233,15.923-52.36,47.413-52.36 c16.841,0,33.474,5.077,41.077,7.755c0.379,5.101,0.804,10.217,1.274,15.312c-10.335-3.036-22.512-5.634-33.936-5.634 c-14.618,0-25.695,4.203-32.925,12.493c-7.859,9.013-10.632,22.403-8.242,39.798c4.094,29.801,12.65,56.141,25.431,78.287 c12.201,21.142,27.938,37.994,46.772,50.086c18.396,11.813,38.293,14.792,52.486,15.077c0.048,0.084,0.097,0.164,0.145,0.247 c0.778,1.363,1.564,2.703,2.358,4.026c0.247,0.413,0.496,0.823,0.745,1.232c0.757,1.244,1.52,2.476,2.291,3.683 c0.29,0.454,0.584,0.897,0.876,1.347c0.525,0.807,1.053,1.607,1.585,2.398c0.514,0.765,1.03,1.522,1.549,2.271 c0.509,0.733,1.019,1.462,1.533,2.181c0.241,0.338,0.478,0.689,0.719,1.023C165.763,277.112,165.134,277.117,164.488,277.117z M356.188,463.015v33.753H155.82v-33.753h25.393h149.581H356.188z M289.653,429.714h25.934v18.094H196.42v-18.094h25.935H289.653z M237.561,414.507v-30.982h36.885v30.982H237.561z M292.757,358.476c0,5.427-4.416,9.842-9.842,9.842h-53.822 c-5.427,0-9.842-4.415-9.842-9.842s4.415-9.842,9.842-9.842h53.822C288.342,348.634,292.757,353.049,292.757,358.476z M330.791,271.552c-0.084,0.109-0.168,0.218-0.252,0.327c-0.748,0.968-1.502,1.912-2.26,2.843 c-0.186,0.227-0.369,0.458-0.556,0.684c-0.833,1.012-1.673,2.002-2.517,2.968c-0.041,0.046-0.079,0.094-0.12,0.14 c-8.479,9.673-17.735,17.334-27.512,22.774c-12.051,6.704-20.245,18.611-22.499,32.139h-38.142 c-2.255-13.529-10.449-25.435-22.5-32.139c-9.436-5.249-17.958-12.266-25.657-20.651l-1.86-2.122 c-7.56-8.622-14.686-19.068-21.179-31.045l-1.989-3.671c-32.697-63.177-42.587-154.488-45.569-202.991h275.705 c-0.127,2.11-0.266,4.289-0.42,6.552c-0.007,0.105-0.015,0.213-0.022,0.318c-0.168,2.452-0.348,4.911-0.539,7.372 c-0.005,0.072-0.011,0.144-0.016,0.217c-0.608,7.8-1.328,15.629-2.149,23.365l-0.497,4.678 c-5.525,49.528-17.194,112.625-41.801,160.153l-2.173,4.006C341.432,256.385,336.246,264.451,330.791,271.552z M413.677,259.051 c-24.813,14.932-49.673,18.066-66.16,18.066c-0.001,0-0.003,0-0.004,0c-0.647,0-1.276-0.005-1.889-0.015 c0.01-0.014,0.02-0.029,0.03-0.043c0.987-1.362,1.959-2.744,2.916-4.145c0.117-0.171,0.232-0.346,0.349-0.517 c0.809-1.192,1.606-2.4,2.394-3.62c0.203-0.313,0.406-0.627,0.607-0.942c0.872-1.369,1.735-2.747,2.581-4.149 c0.133-0.219,0.262-0.444,0.394-0.665c0.693-1.158,1.378-2.327,2.054-3.507c0.158-0.276,0.321-0.54,0.48-0.818 c14.193-0.285,34.09-3.264,52.486-15.077c18.834-12.094,34.571-28.946,46.772-50.086c12.78-22.146,21.336-48.486,25.431-78.287 c2.388-17.396-0.384-30.786-8.242-39.798c-7.229-8.291-18.307-12.494-32.925-12.494c-11.423,0-23.602,2.596-33.936,5.633 c0.479-5.195,0.89-10.178,1.242-14.914c0.01-0.132,0.021-0.265,0.031-0.396c7.605-2.679,24.237-7.755,41.077-7.755 c31.49,0,46.999,17.127,47.414,52.358C497.945,197.507,439.052,243.78,413.677,259.051z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M192.356,246.237l-12.7,8.367c4.336,6.583,8.996,12.564,13.851,17.776l11.128-10.366 C200.358,257.423,196.227,252.114,192.356,246.237z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M159.716,161.922l-14.826,3.382c7.292,31.965,17.027,58.799,28.933,79.756l13.222-7.512 C175.873,217.883,166.678,192.439,159.716,161.922z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <polygon
                                                            points="443.666,333.509 443.655,318.302 430.818,318.31 430.809,305.473 415.602,305.483 415.611,318.321 402.774,318.33 402.784,333.537 415.621,333.528 415.63,346.364 430.837,346.354 430.828,333.517 ">
                                                        </polygon>
                                                    </g>
                                                    <g>
                                                        <polygon
                                                            points="112.785,412.475 112.769,397.268 101.997,397.279 101.986,386.506 86.779,386.522 86.79,397.294 76.016,397.305 76.033,412.512 86.805,412.501 86.816,423.275 102.023,423.259 102.012,412.486 ">
                                                        </polygon>
                                                    </g>
                                                    <g>
                                                        <rect x="48.845" y="288.161" width="14.345" height="15.207"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="141.039" y="333.153" width="14.345" height="15.207"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="372.254" y="378.905" width="14.345" height="15.207"></rect>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h3 class="h6 mt-3"><b>Gaming</b></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="mob-clutch-swiper-pagination mt-3 d-flex justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="case-studies sect-pad-tb">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 col-md-12 col-lg-12 mb-3">
                <h4 class="main-title mb-0 mt-60 title-case-studies c-black">Case Studies</h4>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
                <p class="desc mb-0">We shed a light on our work and what goes behind the development.</p>
            </div>
            <div
                class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-7 text-right align-self-center d-none d-sm-none d-md-block">
                <label class="mb-0 d-flex align-items-center read-more-btn float-right"><a
                        href="/case-study" class="ml-3 c-white"
                        style="color: #fff !important">View All <img class="ml-3"
                            src="/frontend_assets/img/arrow-right-white.svg"
                            alt="arrow right"></a></label>
            </div>
        </div>
        <div class="row d-none d-sm-none d-md-none d-lg-flex d-xl-flex">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                <a href="/case-study/papa-johns-on-demand-food-delivery-app">
                    <div class="d-flex flex-column position-relative mb-0">
                        <img class="img-fluid"
                            src="/assets/case-study/delviy/case-study-delviy.jpg"
                            alt="pizza delivery app">
                        <div class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                            <h3 class="h6 m-0 align-self-center"><b>Papa John's Pizza Delivery App</b></h3>
                            <div class="d-flex justify-content-center mt-3">
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Node js</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                <a href="/case-study/resiwood-winners-circle-loyalty-program-app">
                    <div class="d-flex flex-column position-relative mb-0">
                        <img class="img-fluid"
                            src="/assets/case-study/astral-adhesives/resiwood-winners-circle-loyalty-program-app.png"
                            alt="astral adhesives">
                        <div class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                            <h3 class="h6 m-0 align-self-center"><b>Astral Adhesives - Resiwood Winners' Circle Loyalty
                                    Program App</b></h3>
                            <div class="d-flex justify-content-center mt-3">
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Node js</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">MySQL</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                <a href="/case-study/art-of-living-a-meditation-app">
                    <div class="d-flex flex-column position-relative mb-0">
                        <img class="img-fluid"
                            src="/assets/case-study/aol/art-of-living.jpg"
                            alt="art of living">
                        <div class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                            <h3 class="h6 m-0 align-self-center"><b>Art of Living A Meditation App</b></h3>
                            <div class="d-flex justify-content-center mt-3">
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Flutter</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Node js</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                <a href="/case-study/tata-power-skill-development-institute">
                    <div class="d-flex flex-column position-relative mb-0">
                        <img class="img-fluid"
                            src="/assets/case-study/tata/tata-power-skill-development-institute.png"
                            alt="tata power">
                        <div class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                            <h3 class="h6 m-0 align-self-center"><b>Tata Power Skill Development Institute App</b></h3>
                            <div class="d-flex justify-content-center mt-3">
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Laravel</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                <a href="/case-study/vocal-coach-online-vocal-exercise-app">
                    <div class="d-flex flex-column position-relative mb-0">
                        <img class="img-fluid"
                            src="/assets/case-study/vocalcoach/vocal-coach-online-vocal-exercise-app.jpg"
                            alt="vocal coach">
                        <div class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                            <h3 class="h6 m-0 align-self-center"><b>Vocal Coach - Online Vocal Exercise App</b></h3>
                            <div class="d-flex justify-content-center mt-3">
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Node js</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
                <a href="/case-study/digital-banking-solution">
                    <div class="d-flex flex-column position-relative mb-0">
                        <img class="img-fluid"
                            src="/assets/case-study/digitalbank/case-study-inclu.jpg"
                            alt="digital banking solution">
                        <div class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                            <h3 class="h6 m-0 align-self-center"><b>Digital Banking Solution</b></h3>
                            <div class="d-flex justify-content-center mt-3">
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row d-flex d-sm-flex d-md-flex d-lg-none d-xl-none">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="swiper-container case-studies-mob mt-3 w-100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a
                                href="/case-study/papa-johns-on-demand-food-delivery-app">
                                <div class="d-flex flex-column position-relative mb-0">
                                    <img class="img-fluid"
                                        src="/assets/case-study/delviy/case-study-delviy.jpg"
                                        alt="pizza delivery app">
                                    <div
                                        class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                                        <h3 class="h6 m-0 align-self-center"><b>Papa John's Pizza Delivery App</b></h3>
                                        <div class="d-flex justify-content-center mt-3">
                                            <span
                                                class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Node
                                                js</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a
                                href="/case-study/resiwood-winners-circle-loyalty-program-app">
                                <div class="d-flex flex-column position-relative mb-0">
                                    <img class="img-fluid"
                                        src="/assets/case-study/astral-adhesives/resiwood-winners-circle-loyalty-program-app.png"
                                        alt="astral adhesives">
                                    <div
                                        class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                                        <h3 class="h6 m-0 align-self-center"><b>Astral Adhesives - Resiwood Winners'
                                                Circle Loyalty Program App</b></h3>
                                        <div class="d-flex justify-content-center mt-3">
                                            <span
                                                class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Node
                                                js</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">MySQL</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/case-study/art-of-living-a-meditation-app">
                                <div class="d-flex flex-column position-relative mb-0">
                                    <img class="img-fluid"
                                        src="/assets/case-study/aol/art-of-living.jpg"
                                        alt="art of living">
                                    <div
                                        class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                                        <h3 class="h6 m-0 align-self-center"><b>Art of Living A Meditation App</b></h3>
                                        <div class="d-flex justify-content-center mt-3">
                                            <span
                                                class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                            <span
                                                class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Flutter</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Node
                                                js</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a
                                href="/case-study/tata-power-skill-development-institute">
                                <div class="d-flex flex-column position-relative mb-0">
                                    <img class="img-fluid"
                                        src="/assets/case-study/tata/tata-power-skill-development-institute.png"
                                        alt="tata power">
                                    <div
                                        class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                                        <h3 class="h6 m-0 align-self-center"><b>Tata Power Skill Development Institute
                                                App</b></h3>
                                        <div class="d-flex justify-content-center mt-3">
                                            <span
                                                class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                            <span
                                                class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Laravel</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a
                                href="/case-study/vocal-coach-online-vocal-exercise-app">
                                <div class="d-flex flex-column position-relative mb-0">
                                    <img class="img-fluid"
                                        src="/assets/case-study/vocalcoach/vocal-coach-online-vocal-exercise-app.jpg"
                                        alt="vocal coach">
                                    <div
                                        class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                                        <h3 class="h6 m-0 align-self-center"><b>Vocal Coach - Online Vocal Exercise
                                                App</b></h3>
                                        <div class="d-flex justify-content-center mt-3">
                                            <span
                                                class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Node
                                                js</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/case-study/digital-banking-solution">
                                <div class="d-flex flex-column position-relative mb-0">
                                    <img class="img-fluid"
                                        src="/assets/case-study/digitalbank/case-study-inclu.jpg"
                                        alt="digital banking solution">
                                    <div
                                        class="card-box px-3 py-4 text-center d-flex flex-column justify-content-center">
                                        <h3 class="h6 m-0 align-self-center"><b>Digital Banking Solution</b></h3>
                                        <div class="d-flex justify-content-center mt-3">
                                            <span
                                                class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">Android</span>
                                            <span class="tech-chip d-inline-flex mr-1 mt-1 text-capitalize">iOS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mob-clutch-swiper-pagination mt-0 d-flex justify-content-center"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sect-pad-tb who-work-with">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 align-self-center">
                <h4 class="main-title mb-0 mt-60 title-who-work-with c-white">Who We Work With</h4>
                <p class="desc mb-0 mt-3 pr-0 pr-md-0 pr-lg-5 mr-0 mr-md-0 mr-lg-4 c-white">As a leading mobile app
                    development company in USA and India, we worked with 2000+ businesses either it is a start-up or
                    enterprise and delivers the best solution in the industry. At Hyperlink InfoSystem, we offer a broad
                    range of app development services based on business requirements.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7 mt-3">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6 my-3">
                        <div class="card-box p-3 p-md-4 text-center">
                            <svg class="mb-3" version="1.1" id="Capa_81" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" height="60px"
                                width="60px" fill="#1d13ed">
                                <g>
                                    <g>
                                        <path
                                            d="M351.117,288.678l-69.513-42.712c-0.847-0.521-1.821-0.874-2.804-1.028l-21.763-3.84c-4.026-0.712-7.98,2.058-8.69,6.084 s2.057,7.98,6.083,8.69l20.537,3.624l68.297,41.965c3.334,2.049,7.907,1.054,10.12-2.166 C355.758,295.839,354.686,290.873,351.117,288.678z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M509.513,291.083c-2.83-3.027-7.576-3.187-10.603-0.359l-30.409,28.42L329.163,181.662L509.161,12.974 c3.022-2.833,3.176-7.58,0.344-10.602c-2.832-3.022-7.58-3.176-10.602-0.344l-185.69,174.022 c-3.062,2.869-3.126,7.865-0.139,10.813l12.325,12.159l-3.934,3.474l-82.381-7.094c-1.271-0.108-2.592,0.111-3.752,0.647 l-65.273,29.728c-0.19-0.049-0.38-0.097-0.577-0.132l-37.546-6.626l3.036-7.761c1.501-3.838-0.374-8.168-4.2-9.697L10.756,153.555 c-3.848-1.541-8.212,0.332-9.75,4.179c-1.539,3.846,0.332,8.212,4.179,9.75l113.103,45.242L51.636,383.055l-41.162-14.579 c-3.906-1.382-8.192,0.661-9.575,4.567c-1.383,3.905,0.662,8.192,4.567,9.575l48.006,17.002c3.768,1.335,8.034-0.618,9.489-4.338 L74.1,366.816l29.187,16.356l-3.219,5.218c-9.121,14.783-4.516,34.231,10.268,43.353c7.818,4.824,17.523,5.968,26.259,3.14 c1.401,9.104,6.751,17.228,14.596,22.068c7.818,4.824,17.522,5.968,26.259,3.14c1.402,9.104,6.75,17.227,14.595,22.068 c7.842,4.839,17.496,5.978,26.261,3.149c1.404,9.1,6.751,17.22,14.594,22.059c11.399,7.033,26.487,5.982,36.762-2.63 c2.59-2.171,4.819-4.762,6.593-7.638l5.117-8.292l4.213,2.588c11.414,7.013,26.498,5.933,36.757-2.698 c2.586-2.176,4.81-4.771,6.579-7.65c3.516-5.723,4.971-12.137,4.587-18.381c2.382,0.573,4.82,0.881,7.28,0.881 c10.894,0,21.199-5.745,26.9-15.023c3.434-5.59,5.003-11.963,4.605-18.378c2.376,0.57,4.809,0.876,7.261,0.876 c10.894,0,21.2-5.745,26.9-15.023c3.437-5.594,5.005-11.971,4.604-18.391c2.402,0.572,4.841,0.871,7.269,0.871 c10.594,0,20.953-5.334,26.894-15.003c9.094-14.801,4.452-34.24-10.349-43.334l-5.14-3.158l17.239-18.012l16.125,15.91 c2.828,2.789,7.489,2.851,10.39,0.141l35.671-33.337C512.182,298.857,512.342,294.11,509.513,291.083z M140.923,413.597 c-4.779,7.743-14.966,10.155-22.71,5.379c-7.744-4.778-10.156-14.965-5.379-22.709l42.014-68.091 c4.689-7.6,14.751-10.085,22.434-5.546c7.95,4.7,10.144,15.599,5.371,23.336L140.923,413.597z M181.776,438.805 c-4.777,7.743-14.965,10.156-22.708,5.379c-7.65-4.721-10.107-15.047-5.379-22.709l33.61-54.473 c4.689-7.599,14.751-10.085,22.434-5.546c7.95,4.7,10.144,15.599,5.37,23.336L181.776,438.805z M222.634,464.013 c-2.316,3.751-5.954,6.377-10.242,7.393c-4.291,1.017-8.718,0.3-12.469-2.014c-7.649-4.721-10.106-15.048-5.378-22.709 l25.208-40.855c4.689-7.6,14.752-10.085,22.434-5.546c7.95,4.7,10.144,15.599,5.371,23.336L222.634,464.013z M280.01,462.446 l-16.522,26.776c-4.721,7.65-15.047,10.105-22.71,5.378c-7.649-4.72-10.105-15.048-5.378-22.709l16.805-27.236 c4.689-7.598,14.752-10.087,22.434-5.545C282.589,443.809,284.783,454.709,280.01,462.446z M416.654,328.948l-37.182-22.847 c-3.448-2.119-8.199-0.984-10.317,2.464c-2.119,3.448-0.984,8.199,2.464,10.317l55.397,34.039 c7.752,4.764,10.184,14.946,5.421,22.699c-4.764,7.752-14.947,10.184-22.7,5.421l-59.413-36.508 c-3.529-2.17-8.149-1.065-10.317,2.464c-2.168,3.529-1.065,8.149,2.464,10.317l45.78,28.13 c7.659,4.706,10.134,15.029,5.421,22.699c-4.706,7.659-15.029,10.133-22.699,5.421l-41.488-25.493 c-3.53-2.169-8.149-1.065-10.317,2.464c-2.168,3.529-1.065,8.149,2.464,10.317l27.854,17.115 c7.658,4.707,10.134,15.028,5.421,22.699c-4.706,7.658-15.029,10.134-22.699,5.421c0,0-24.496-15.037-24.725-15.147 c-3.425-1.654-7.613-0.477-9.645,2.831c-2.168,3.529-1.065,8.149,2.464,10.317l10.419,6.402 c7.752,4.764,10.183,14.946,5.42,22.699c-4.706,7.659-15.029,10.133-22.699,5.421l-4.188-2.574l3.527-5.717 c4.509-7.308,5.908-16.308,3.838-24.692c-2.042-8.274-7.136-15.176-14.341-19.435c-5.622-3.322-11.911-4.668-18.035-4.255 c1.15-4.94,1.156-10.146-0.076-15.137c-2.042-8.274-7.136-15.176-14.341-19.435c-5.622-3.323-11.911-4.669-18.035-4.256 c3.093-13.288-2.601-27.585-14.417-34.571c-5.622-3.322-11.911-4.668-18.035-4.256c3.093-13.288-2.601-27.585-14.417-34.571 c-14.669-8.671-33.884-3.922-42.834,10.582l-30.91,50.096L79.62,352.711l46.738-119.442l25.448,4.491 c-7.238,8.99-9.273,21.647-4.173,32.848c5.278,11.588,16.744,18.445,28.718,18.444c4.361,0,8.79-0.91,13.011-2.832l43.928-20.008 c3.72-1.694,5.412-6.215,3.717-9.935c-1.694-3.719-6.215-5.413-9.935-3.717l-43.929,20.007 c-8.279,3.772-18.086,0.103-21.858-8.178c-3.771-8.281-0.103-18.086,8.178-21.858l70.294-32.015l83.618,7.201 c0.215,0.019,0.43,0.028,0.644,0.028c1.82,0,3.587-0.663,4.964-1.877l7.118-6.285l100.186,98.849L416.654,328.948z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <h3 class="work-title h5 mb-0"><b>Start Up Business</b></h3>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6 my-3">
                        <div class="card-box p-3 p-md-4 text-center">
                            <svg class="mb-3" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" height="60px"
                                width="60px" fill="#4caf50">
                                <g>
                                    <g>
                                        <path
                                            d="M488.399,492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823,0-26.882,12.06-26.882,26.882V492 h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823,0-26.882,12.06-26.882,26.882V492h-55.692v-90.204 c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823,0-26.882,12.06-26.882,26.882V492H23.601c-5.523,0-10,4.477-10,10 s4.477,10,10,10h464.798c5.523,0,10-4.477,10-10S493.922,492,488.399,492z M129.504,492H66.716v-90.204 c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z M287.985,492h-62.788V317.825 c0-3.795,3.087-6.882,6.882-6.882h49.024c3.794,0,6.882,3.087,6.882,6.882V492z M446.466,492h-62.788V173.536 c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M466.442,10.516c0.14-2.729-0.82-5.504-2.904-7.588c-2.084-2.084-4.859-3.045-7.588-2.904 C455.789,0.017,455.63,0,455.466,0h-60.5c-5.523,0-10,4.477-10,10s4.477,10,10,10h37.357l-98.857,98.858l-37.28-37.28 c-1.875-1.875-4.419-2.929-7.071-2.929c-2.652,0-5.196,1.054-7.071,2.929l-179.769,179.77c-3.905,3.905-3.905,10.237,0,14.143 c1.953,1.951,4.512,2.927,7.071,2.927s5.119-0.976,7.071-2.929L289.115,102.79l37.28,37.28c3.905,3.905,10.237,3.905,14.143,0 L446.466,34.143v33.81c0,5.523,4.477,10,10,10s10-4.477,10-10V11C466.466,10.837,466.449,10.678,466.442,10.516z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <circle cx="75.64" cy="303.31" r="10"></circle>
                                    </g>
                                </g>
                            </svg>
                            <h3 class="work-title h5 mb-0"><b>Small & Medium Business</b></h3>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6 my-3">
                        <div class="card-box p-3 p-md-4 text-center">
                            <svg class="mb-3" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480"
                                style="enable-background:new 0 0 480 480" xml:space="preserve" height="60px"
                                width="60px" fill="#cb1ac5">
                                <g>
                                    <g>
                                        <rect x="168" y="160" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="168" y="192" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="168" y="224" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="168" y="256" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="200" y="160" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="200" y="192" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="200" y="224" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="200" y="256" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="232" y="160" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="232" y="192" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="232" y="224" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="232" y="256" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="264" y="160" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="200" y="128" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="232" y="128" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="264" y="128" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="264" y="192" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="264" y="224" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="264" y="256" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="296" y="160" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="296" y="192" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="296" y="224" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="296" y="256" width="16" height="16"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M472.009,120c-0.003,0-0.006,0-0.009,0H352V8c0.003-4.416-3.575-7.997-7.991-8c-0.003,0-0.006,0-0.009,0H136 c-4.416-0.003-7.997,3.575-8,7.991c0,0.003,0,0.006,0,0.009v112H8c-4.416-0.003-7.997,3.575-8,7.991c0,0.003,0,0.006,0,0.009v288 c-0.003,4.416,3.575,7.997,7.991,8c0.003,0,0.006,0,0.009,0h16.723c-0.464,2.642-0.706,5.318-0.723,8v40 c-0.003,4.416,3.575,7.997,7.991,8c0.003,0,0.006,0,0.009,0h416c4.416,0.003,7.997-3.575,8-7.991c0-0.003,0-0.006,0-0.009v-40 c-0.016-2.682-0.258-5.358-0.723-8H472c4.416,0.003,7.997-3.575,8-7.991c0-0.003,0-0.006,0-0.009V128 C480.003,123.584,476.425,120.003,472.009,120z M344,344c0,8.837-7.163,16-16,16s-16-7.163-16-16s7.163-16,16-16 C336.832,328.011,343.989,335.168,344,344z M152,328c8.837,0,16,7.163,16,16s-7.163,16-16,16s-16-7.163-16-16 C136.011,335.168,143.168,328.011,152,328z M104,464H40v-32c0-17.673,14.327-32,32-32s32,14.327,32,32V464z M56,368 c0-8.837,7.163-16,16-16s16,7.163,16,16s-7.163,16-16,16C63.168,383.989,56.011,376.832,56,368z M105.212,397.425 c-3.017-2.91-6.4-5.414-10.064-7.449c12.202-12.784,11.731-33.04-1.053-45.243s-33.04-11.731-45.243,1.053 c-11.803,12.365-11.803,31.824,0,44.189c-7.636,4.238-13.98,10.467-18.358,18.024H16V136h112v187.056 c-10.986,12.327-10.615,31.039,0.852,42.92C116.852,372.613,108.253,384.053,105.212,397.425z M184,464h-64v-56 c0-17.673,14.327-32,32-32s32,14.327,32,32V464z M280,464h-80v-56c0-22.091,17.909-40,40-40c22.091,0,40,17.909,40,40V464z M216,328c0-13.255,10.745-24,24-24s24,10.745,24,24s-10.745,24-24,24C226.751,351.986,216.014,341.249,216,328z M288.722,380.495 c-5.357-9.444-13.327-17.139-22.953-22.16c16.897-14.232,19.057-39.467,4.826-56.364c-14.232-16.897-39.467-19.057-56.364-4.826 c-16.897,14.232-19.057,39.467-4.826,56.364c1.468,1.743,3.082,3.357,4.826,4.826c-9.626,5.021-17.596,12.716-22.953,22.16 c-4.206-6-9.722-10.965-16.13-14.519c12.265-12.547,12.037-32.662-0.511-44.927c-8.079-7.898-19.744-10.91-30.637-7.913V16h192 v297.136c-2.607-0.719-5.296-1.101-8-1.136c-17.626-0.047-31.953,14.204-32,31.831c-0.022,8.248,3.151,16.185,8.852,22.145 C298.444,369.53,292.928,374.495,288.722,380.495z M360,432v32h-64v-56c0-17.673,14.327-32,32-32c17.673,0,32,14.327,32,32V432z M440,464h-64v-32c0-17.673,14.327-32,32-32c17.673,0,32,14.327,32,32V464z M392,368c0-8.837,7.163-16,16-16s16,7.163,16,16 s-7.163,16-16,16C399.168,383.989,392.011,376.832,392,368z M464,408h-14.494c-4.378-7.557-10.722-13.786-18.358-18.024 c12.202-12.784,11.731-33.04-1.053-45.243c-12.784-12.202-33.04-11.731-45.243,1.053c-11.803,12.365-11.803,31.824,0,44.189 c-3.664,2.035-7.048,4.539-10.064,7.449c-3.04-13.372-11.64-24.812-23.64-31.449c11.467-11.881,11.839-30.593,0.853-42.92V136h112 V408z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="376" y="184" width="16" height="128"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="424" y="184" width="16" height="128"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="40" y="184" width="16" height="128"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="88" y="184" width="16" height="128"></rect>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M288.009,32c-0.003,0-0.006,0-0.009,0h-96c-4.416-0.003-7.997,3.575-8,7.991c0,0.003,0,0.006,0,0.009v64 c-0.003,4.416,3.575,7.997,7.991,8c0.003,0,0.006,0,0.009,0h96c4.416,0.003,7.997-3.575,8-7.991c0-0.003,0-0.006,0-0.009V40 C296.003,35.584,292.425,32.003,288.009,32z M280,96h-80V48h80V96z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <h3 class="work-title h5 mb-0"><b>Enterprise</b></h3>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6 my-3">
                        <div class="card-box p-3 p-md-4 text-center">
                            <svg class="mb-3" version="1.1" id="Capa_83" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480"
                                style="enable-background:new 0 0 480 480" xml:space="preserve" height="60px"
                                width="60px" fill="#ff9800">
                                <g>
                                    <g>
                                        <path
                                            d="M72.004,120c-0.001,0-0.003,0-0.004,0H40c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C80.001,123.583,76.421,120.001,72.004,120z M64,152H48v-16h16V152z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M168.004,120c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C176.001,123.583,172.421,120.001,168.004,120z M160,152h-16v-16h16V152z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M264.004,120c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C272.001,123.583,268.421,120.001,264.004,120z M256,152h-16v-16h16V152z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M72.004,208c-0.001,0-0.003,0-0.004,0H40c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C80.001,211.583,76.421,208.001,72.004,208z M64,240H48v-16h16V240z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M168.004,208c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C176.001,211.583,172.421,208.001,168.004,208z M160,240h-16v-16h16V240z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M264.004,208c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C272.001,211.583,268.421,208.001,264.004,208z M256,240h-16v-16h16V240z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M72.004,296c-0.001,0-0.003,0-0.004,0H40c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C80.001,299.583,76.421,296.001,72.004,296z M64,328H48v-16h16V328z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M168.004,296c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C176.001,299.583,172.421,296.001,168.004,296z M160,328h-16v-16h16V328z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M264.004,296c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C272.001,299.583,268.421,296.001,264.004,296z M256,328h-16v-16h16V328z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M72.004,384c-0.001,0-0.003,0-0.004,0H40c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C80.001,387.583,76.421,384.001,72.004,384z M64,416H48v-16h16V416z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M264.004,384c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32 C272.001,387.583,268.421,384.001,264.004,384z M256,416h-16v-16h16V416z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M472.004,200c-0.001,0-0.003,0-0.004,0h-80v-40.047c7.235,4.076,15.31,6.436,23.602,6.898 c0.84,0.047,1.68,0.062,2.512,0.062c13.377-0.028,26.183-5.427,35.542-14.984c3.124-3.122,3.125-8.186,0.003-11.309 c-0.001-0.001-0.002-0.002-0.003-0.003l-27.48-27.48l19.48-19.481l-11.312-11.312l-19.481,19.48l-27.48-27.48 c-3.174-3-8.138-3-11.312,0c-19.92,20.148-19.952,52.564-0.07,72.75V200h-72V96c0.001-4.417-3.579-7.999-7.996-8 c-0.001,0-0.003,0-0.004,0h-8V64c0.001-4.417-3.579-7.999-7.996-8c-0.001,0-0.003,0-0.004,0h-24V8 c0.001-4.417-3.579-7.999-7.996-8c-0.001,0-0.003,0-0.004,0H56c-4.417-0.001-7.999,3.579-8,7.996C48,7.997,48,7.999,48,8v48H24 c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v24H8c-4.417-0.001-7.999,3.579-8,7.996C0,95.997,0,95.999,0,96v376 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h464c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004V208 C480.001,203.583,476.421,200.001,472.004,200z M64,16h176v40H64V16z M32,72h240v16H32V72z M144,464h-32v-57.539 c0.007-7.982,6.475-14.452,14.457-14.461H144V464z M192,464h-32v-72h17.543c7.982,0.009,14.45,6.479,14.457,14.461V464z M288,464 h-80v-57.539c-0.018-16.814-13.643-30.441-30.457-30.461h-51.086c-16.814,0.02-30.439,13.647-30.457,30.461V464H16V104h272V464z M382.336,91.922l53.754,53.758c-5.847,3.777-12.743,5.596-19.691,5.195c-10.16-0.716-19.691-5.182-26.742-12.531 C376.352,126.653,373.275,107.139,382.336,91.922z M408,464h-48v-43.305c0.009-7.009,5.69-12.689,12.699-12.695h22.602 c7.009,0.006,12.691,5.686,12.699,12.695V464z M464,464h-40v-43.305c-0.02-15.841-12.858-28.677-28.699-28.695h-22.602 c-15.841,0.018-28.679,12.854-28.699,28.695V464h-40V216h160V464z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M408.004,232c-0.001,0-0.003,0-0.004,0h-48c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v48 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h48c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-48 C416.001,235.583,412.421,232.001,408.004,232z M400,280h-32v-32h32V280z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M408.004,312c-0.001,0-0.003,0-0.004,0h-48c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v48 c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h48c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-48 C416.001,315.583,412.421,312.001,408.004,312z M400,360h-32v-32h32V360z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <h3 class="work-title h5 mb-0"><b>Agencies</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-latest-podcast sect-pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 class="main-title mb-3 mt-60 title-our-latest-podcast c-black">Our Latest Podcast</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
                <p class="desc mb-0">Listen Technology Based Podcast Hosted By Hyperlink InfoSystem.</p>
            </div>
            <div
                class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-7 text-right align-self-center d-none d-sm-none d-md-block">
                <label class="mb-0 d-flex align-items-center read-more-btn float-right"><a
                        href="/podcast" class="ml-3" title="">View All <img
                            class="ml-3"
                            src="/frontend_assets/img/arrow-right-white.svg"
                            alt="arrow right"></a></label>
            </div>
        </div>
        <div
            class="row mob-row flex-nowrap flex-sm-nowrap flex-md-wrap flex-lg-nowrap flex-xl-wrap mt-3 pb-3 lst-podcast">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 podcast-slider mb-0 mb-md-3 mb-lg-0">
                <div class="card-box d-flex justify-content-between flex-column"
                    style="background-image: url(/uploads/podcast/cover_art/1634101335.webp)">
                    <div><label class="mb-0 text-capitalize c-white py-4 px-3 h5 w-100 c-white">Blockchain</label></div>
                    <div class="content p-3 align-items-end">
                        <h4 class="mb-2 c-white">Is BlockChain Technology Worth The H ...</h4>
                        <p class="desc mb-0 c-white">Unfolds The Revolutionary & Versatility Of Blockchain Technology
                            ...</p>
                        <div class="d-flex mt-4 justify-content-between">
                            <div class="align-items-center">
                                <img class="play-podcast-btn" id="play-podcast_0"
                                    src="/frontend_assets/img/play-btn.svg"
                                    alt="play podcast">
                                <img class="pause-podcast-btn" id="pause-podcast_0"
                                    src="/frontend_assets/img/stop-btn.svg"
                                    alt="pause podcast">
                            </div>
                            <div class="align-items-center gap_class" id="gap-example_0">
                                <audio class="audio_control" id="audio-podcast_0">
                                    <source type="audio/mpeg"
                                        src="/uploads/podcast/audio_file/1634008816.mp3">
                                    </source>
                                </audio>
                            </div>
                            <div class="align-self-center" id="learn_more_0">
                                <label class="mb-0 d-flex align-items-center read-more-btn"><a
                                        href="/podcast/is-blockchain-technology-worth-the-hype"
                                        class="ml-3" title="">Learn more <img class="ml-3"
                                            src="/frontend_assets/img/arrow-right-white.svg"
                                            alt=""></a></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 podcast-slider mb-0 mb-md-3 mb-lg-0">
                <div class="card-box d-flex justify-content-between flex-column"
                    style="background-image: url(/uploads/podcast/cover_art/1633579997.webp)">
                    <div><label class="mb-0 text-capitalize c-white py-4 px-3 h5 w-100 c-white">IoT</label></div>
                    <div class="content p-3 align-items-end">
                        <h4 class="mb-2 c-white">IoT Technology - A Future In Making ...</h4>
                        <p class="desc mb-0 c-white">Everything You Need To Know About IoT Technology ...</p>
                        <div class="d-flex mt-4 justify-content-between">
                            <div class="align-items-center">
                                <img class="play-podcast-btn" id="play-podcast_1"
                                    src="/frontend_assets/img/play-btn.svg"
                                    alt="play podcast">
                                <img class="pause-podcast-btn" id="pause-podcast_1"
                                    src="/frontend_assets/img/stop-btn.svg"
                                    alt="pause podcast">
                            </div>
                            <div class="align-items-center gap_class" id="gap-example_1">
                                <audio class="audio_control" id="audio-podcast_1">
                                    <source type="audio/mpeg"
                                        src="/uploads/podcast/audio_file/1633579011.mp3">
                                    </source>
                                </audio>
                            </div>
                            <div class="align-self-center" id="learn_more_1">
                                <label class="mb-0 d-flex align-items-center read-more-btn"><a
                                        href="/podcast/iot-technology-a-future-in-making-or-speculating"
                                        class="ml-3" title="">Learn more <img class="ml-3"
                                            src="/frontend_assets/img/arrow-right-white.svg"
                                            alt=""></a></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 podcast-slider mb-0 mb-md-3 mb-lg-0">
                <div class="card-box d-flex justify-content-between flex-column"
                    style="background-image: url(/uploads/podcast/cover_art/1633308647.webp)">
                    <div><label class="mb-0 text-capitalize c-white py-4 px-3 h5 w-100 c-white">Mobile Apps</label>
                    </div>
                    <div class="content p-3 align-items-end">
                        <h4 class="mb-2 c-white">Flutter Vs. React Native - Which One ...</h4>
                        <p class="desc mb-0 c-white">Unfolding The Confusion Of Which One Is Better ...</p>
                        <div class="d-flex mt-4 justify-content-between">
                            <div class="align-items-center">
                                <img class="play-podcast-btn" id="play-podcast_2"
                                    src="/frontend_assets/img/play-btn.svg"
                                    alt="play podcast">
                                <img class="pause-podcast-btn" id="pause-podcast_2"
                                    src="/frontend_assets/img/stop-btn.svg"
                                    alt="pause podcast">
                            </div>
                            <div class="align-items-center gap_class" id="gap-example_2">
                                <audio class="audio_control" id="audio-podcast_2">
                                    <source type="audio/mpeg"
                                        src="/uploads/podcast/audio_file/1633308647.mp3">
                                    </source>
                                </audio>
                            </div>
                            <div class="align-self-center" id="learn_more_2">
                                <label class="mb-0 d-flex align-items-center read-more-btn"><a
                                        href="/podcast/flutter-vs-react-native"
                                        class="ml-3" title="">Learn more <img class="ml-3"
                                            src="/frontend_assets/img/arrow-right-white.svg"
                                            alt=""></a></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 podcast-slider mb-0 mb-md-3 mb-lg-0">
                <div class="card-box d-flex justify-content-between flex-column"
                    style="background-image: url(/uploads/podcast/cover_art/1633308100.webp)">
                    <div><label class="mb-0 text-capitalize c-white py-4 px-3 h5 w-100 c-white">About Us</label></div>
                    <div class="content p-3 align-items-end">
                        <h4 class="mb-2 c-white">Journey of Hyperlink InfoSystem - A ...</h4>
                        <p class="desc mb-0 c-white">From Startup To Successful Thriving IT Provider ...</p>
                        <div class="d-flex mt-4 justify-content-between">
                            <div class="align-items-center">
                                <img class="play-podcast-btn" id="play-podcast_3"
                                    src="/frontend_assets/img/play-btn.svg"
                                    alt="play podcast">
                                <img class="pause-podcast-btn" id="pause-podcast_3"
                                    src="/frontend_assets/img/stop-btn.svg"
                                    alt="pause podcast">
                            </div>
                            <div class="align-items-center gap_class" id="gap-example_3">
                                <audio class="audio_control" id="audio-podcast_3">
                                    <source type="audio/mpeg"
                                        src="/uploads/podcast/audio_file/1633307346.mp3">
                                    </source>
                                </audio>
                            </div>
                            <div class="align-self-center" id="learn_more_3">
                                <label class="mb-0 d-flex align-items-center read-more-btn"><a
                                        href="/podcast/journey-of-hyperlink-infosystem"
                                        class="ml-3" title="">Learn more <img class="ml-3"
                                            src="/frontend_assets/img/arrow-right-white.svg"
                                            alt=""></a></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sect-pad-tb media-coverage">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-5 mb-sm-5 mb-md-0">
                <h4 class="mb-4 h3 text-center"><b>Media Coverage</b></h4>
                <div class="row no-gutters">
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right border-bottom text-center">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/forbes-logo.svg"
                                alt="forbes">
                        </div>
                    </div>
                    <div
                        class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right border-bottom text-center m-border-right-none">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/cnbc-logo.svg"
                                alt="cnbc">
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-bottom text-center m-border-right">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/marketwatch-logo.svg"
                                alt="marketwatch">
                        </div>
                    </div>
                    <div
                        class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right text-center m-border-right-none m-border-bottom">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/the-street-logo.svg"
                                alt="the street">
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right text-center">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/yahoo-finance-logo.svg"
                                alt="yahoo finance">
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/entrepreneur-logo.svg"
                                alt="entrepreneur">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h4 class="mb-4 h3 text-center"><b>Our Esteemed Clients</b></h4>
                <div class="row no-gutters">
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right border-bottom text-center">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/cartoon-network-logo.svg"
                                alt="cartoon network">
                        </div>
                    </div>
                    <div
                        class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right border-bottom text-center m-border-right-none">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/google-m-logo.svg"
                                alt="google">
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-bottom text-center m-border-right">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/disney-m-logo.svg"
                                alt="disney">
                        </div>
                    </div>
                    <div
                        class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right text-center m-border-right-none m-border-bottom">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/viacom-logo.svg"
                                alt="viacom">
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right text-center">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/sbs-discovery-logo.svg"
                                alt="sbs discovery">
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                        <div class="p-3">
                            <img class="img-fluid"
                                src="/frontend_assets/img/papa-johns-logo.svg"
                                alt="papa johns">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sect-pad-tb clients-say position-relative overflow-hidden bg-light-gray">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="title-box">
                    <h2 class="main-title mb-0 title-clients-say mt-5 mt-md-5">What Our Clients Say</h2>
                    <p class="desc mb-0 mt-3">Here, We make almost every genre of applications. You name it and we build
                        it.</p>
                </div>
            </div>
        </div>
        <div class="swiper-container clients-say-slider py-4">
            <div class="swiper-wrapper mb-3">
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"Hyperlink Infosystem is dependable and responsive to client's request.
                            Always easy and convenient to communicate with them for any issues and support. Gladly
                            recommend them to anyone who wants to build ideas into real products."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/neighbor-shopper.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/neighbor-shopper.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/neighbor-shopper.webp"
                                    alt="neighbor shopper">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">James<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center justify-content-xl-start">Neighbor
                                        Shopper</span><span><img class="align-self-center mr-1" width="20"
                                            src="/frontend_assets/img/us-flag.svg"
                                            alt="usa"> Massachusetts, USA</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"Discovering Hyperlink Infosystem is no doubt one of the highlights of my
                            2018. They took my idea and brought it to life, beautifully. The team assigned to me was
                            diligent, responsive &amp; patient. They did not try to rush the process so that they could
                            quickly jump onto a new client, instead they treated my app with care as if it was their
                            own. I would highly recommend Hyperlink Infosystem to anyone looking to build something
                            special."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/smyllo.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/smyllo.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/smyllo.webp"
                                    alt="smyllo">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Founder<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">Social
                                        Media App</span><span><img class="align-self-center mr-1" width="20" height="20"
                                            src="/frontend_assets/img/our-client-say/kenya.svg"
                                            alt="kenya">Kenya</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"To the teams of Hyperlink Infosystem - excellent job done with very smooth
                            and responsive communication! The teams are very knowledgeable and had given us lots of
                            valuable advices."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/oh-my-help.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/oh-my-help.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/oh-my-help.webp"
                                    alt="oh-my-help">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Ivan Lau<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">CEO &
                                        Founder - OhMyHelp</span><span><img class="align-self-center mr-1" width="20"
                                            height="20"
                                            src="/frontend_assets/img/our-client-say/hong-kong.svg"
                                            alt="hong kong">Hong Kong</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"Thoughtfully integrating consumer feedback to improve the UX/UI, Hyperlink
                            InfoSystem
                            has developed a series of consistently improved mobile app iterations. Their competitive
                            pricing structure pairs value with cost savings. The project manager was exceptionally
                            skilled and communicative."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/skkyn.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/skkyn.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/skkyn.webp"
                                    alt="skkyn">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Sujai Soy<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">Skkyn
                                        Technologies - Owner</span><span><img class="align-self-center mr-1" width="20"
                                            height="20"
                                            src="/frontend_assets/img/our-client-say/united-arab-emirates.svg"
                                            alt="uae"> Dubai, UAE</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"The founder of Hyperlink Infosystem and the rest of his project team have
                            placed
                            customer service through responsiveness and proper communication above all else, leading to
                            a strong initial product and the opportunity to continue the partnership through multiple
                            iterations and enhancements."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/coolcharm.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/coolcharm.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/coolcharm.webp"
                                    alt="coolcharm">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Brendan Buchholz<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">Founder,
                                        Cool Charm Friends</span><span><img class="align-self-center mr-1" width="20"
                                            height="20"
                                            src="/frontend_assets/img/our-client-say/australia.svg"
                                            alt="australia"> Brisbane, Australia</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"The client appreciates being able to speak in layman terms to Hyperlink's
                            project
                            manager. Their technical knowledge and suggestions influenced the evolution of the client's
                            vision."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/delviy.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/delviy.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/delviy.webp"
                                    alt="delviy">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Arhad Khwaja<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">President,
                                        Fast Food Franchisee</span><span><img class="align-self-center mr-1" width="20"
                                            src="/frontend_assets/img/us-flag.svg"
                                            alt="usa"> New York, USA</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"Hyperlink InfoSystem has been professional, communicative, and
                            understanding throughout this partnership, and their mobile apps have received very positive
                            feedback from users,
                            who note that it is much nicer and more user friendly than others of its kind."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/buuurp.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/buuurp.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/buuurp.webp"
                                    alt="buuurp">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Matthew Berwick<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">CoFounder,
                                        Buuurp!</span><span><img class="align-self-center mr-1" width="20"
                                            src="/frontend_assets/img/uk-flag.svg"
                                            alt="uk"> UK</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"Hyperlink InfoSystem was diligent and responsive in solving any issues
                            that came up
                            throughout the development process and still provides excellent support when they are
                            needed. The client feels that Hyperlink has really gone above and beyond with their
                            service."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/jincky.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/jincky.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/jincky.webp"
                                    alt="jincky">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Omar Boyd </h4>
                                <span class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">CoFounder,
                                    OanZ Holdings</span><span><img class="align-self-center mr-1" width="20" height="20"
                                        src="/frontend_assets/img/our-client-say/canada.svg"
                                        alt="canada">Canada</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"Hyperlink InfoSystem was able to communicate effectively with the client,
                            despite the
                            fact that both parties were using a second language, delivering on all project requirements.
                            The client notes that Hyperlink works well as a team and is very responsive."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/funcom.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/funcom.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/funcom.webp"
                                    alt="funcom">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Sumood Almesallam <span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">General
                                        Manager, Al Salam, Kuwait City</span><span><img class="align-self-center mr-1"
                                            width="20" height="20"
                                            src="/frontend_assets/img/our-client-say/united-arab-emirates.svg"
                                            alt="kuwait"> Kuwait</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"Hyperlink InfoSystem met all of the client's requirements for the
                            application and made suggestions for improvement when possible. The client describes
                            Hyperlink as flexible, knowledgeable, and understanding."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/todotix.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/todotix.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/todotix.webp"
                                    alt="todotix">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Jorge Mealla <span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">CEO,
                                        Ticketing Startup</span><span><img class="align-self-center mr-1" width="20"
                                            height="20"
                                            src="/frontend_assets/img/our-client-say/bolivia.svg"
                                            alt="bolivia"> Bolivia</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"Users have reviewed the app positively. Hyperlink InfoSystem was
                            responsive and provided excellent support. Their follow-up is particularly noteworthy."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/021-food.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/021-food.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/021-food.webp"
                                    alt="021-food">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Owner<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center justify-content-xl-start">Food
                                        Ordering App</span><span><img class="align-self-center mr-1" width="20"
                                            height="20"
                                            src="/frontend_assets/img/our-client-say/united-arab-emirates.svg"
                                            alt="uae"> United Arab Emirates</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"Hyperlink InfoSystem went above and beyond. Their accommodating and
                            adaptable approach supplemented their professional management style. Hyperlink InfoSystem
                            takes scope changes in stride. Customers can expect a flexible and communicative team that
                            delivers on time and within budget."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/auto-cam.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/auto-cam.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/auto-cam.webp"
                                    alt="auto-cam">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Co-Founder<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">Motor Video
                                        Company</span><span><img class="align-self-center mr-1" width="20"
                                            src="/frontend_assets/img/uk-flag.svg"
                                            alt="uk"> London, UK</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"The apps meet high-quality standards and include many robust features.
                            HyperLink is
                            clearly invested in the project's success. The team suggests creative ideas, shares detailed
                            progress reports, and always delivers on time."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/ay5edmm.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/ay5edmm.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/ay5edmm.webp"
                                    alt="ay5edmm">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Tarek Oraby,<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center">
                                        Click4Services - Owner</span><span><img class="align-self-center mr-1"
                                            width="20" height="20"
                                            src="/frontend_assets/img/our-client-say/egypt.svg"
                                            alt="egypt"> Cairo, Egypt</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-box bg-white text-center d-flex flex-column justify-content-between">
                        <p class="desc mb-0">"Hyperlink InfoSystem's team was responsive, professional, and
                            accommodating to
                            concerns. They delivered a high-quality game that surpassed all expectations; it achieved
                            1,700 downloads on Android in 3 weeks and 500 iOS downloads in only a week without much
                            marketing."</p>
                        <div class="d-flex app-desc text-left flex-column flex-lg-row mt-3 mt-md-3 mt-lg-0">
                            <picture>
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/virtuhunt.png"
                                    type="image/png">
                                <source
                                    srcset="/frontend_assets/img/our-client-say/client-icon/virtuhunt.webp"
                                    type="image/webp">
                                <img loading="lazy"
                                    src="/frontend_assets/img/our-client-say/client-icon/virtuhunt.webp"
                                    alt="virtuhunt">
                            </picture>
                            <div class="ml-0 ml-md-0 ml-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <h4 class="client-nm text-capitalize">Dwayne Van Tonder<br><span
                                        class="d-flex mt-1 desc mb-0 text-capitalize justify-content-center justify-content-xl-start">Founder,
                                        Van Holdings</span><span><img class="align-self-center mr-1" width="20"
                                            height="20"
                                            src="/frontend_assets/img/our-client-say/south-africa.svg"
                                            alt="south africa"> Johannesburg, South Africa</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
</section>

<section class="sect-pad-tb position-relative">
    <div class="container">
        <div class="latest-blogs row px-0 px-md-4 px-lg-0 justify-content-md-center justify-content-lg-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12 text-center mb-40">
                        <h2 class="main-title mb-3 mt-4 title-latest-blogs c-black">Latest Blogs</h2>
                        <p class="desc mb-0">Explore the Latest Blogs on Trends and Technology.</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="d-flex flex-row align-items-stretch mob-box-main">
                            <div class="mob-box">
                                <a class="d-flex flex-column"
                                    href="/blog/ultimate-reactjs-development-tutorial">
                                    <img loading="lazy" class="img-fluid"
                                        src="/uploads/blog/1678168205.jpg"
                                        srcset="/uploads/blog/1678168205.jpg"
                                        alt="latest blog">
                                    <div class="inner-content">
                                        <h4 class="mb-3">Ultimate ReactJS Development Tutorial for 2023</h4>
                                        <span>07 / 03 / 2023</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="d-flex flex-row align-items-stretch mob-box-main">
                            <div class="mob-box">
                                <a class="d-flex flex-column"
                                    href="/blog/how-to-find-and-hire-the-best-unity-3d-developers">
                                    <img loading="lazy" class="img-fluid"
                                        src="/uploads/blog/1677799964.jpg"
                                        srcset="/uploads/blog/1677799964.jpg"
                                        alt="latest blog">
                                    <div class="inner-content">
                                        <h4 class="mb-3">How To Find and Hire the Best Unity 3D Developers in 2023?</h4>
                                        <span>03 / 03 / 2023</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="d-flex flex-row align-items-stretch mob-box-main">
                            <div class="mob-box">
                                <a class="d-flex flex-column"
                                    href="/blog/how-to-create-an-online-laundry-app">
                                    <img loading="lazy" class="img-fluid"
                                        src="/uploads/blog/1677540725.jpg"
                                        srcset="/uploads/blog/1677540725.jpg"
                                        alt="latest blog">
                                    <div class="inner-content">
                                        <h4 class="mb-3">How To Create An Online Laundry App In 2023</h4>
                                        <span>28 / 02 / 2023</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 mb-5">
                <h2 class="main-title mb-3 mt-60 title-our-latest-glimpse c-black">Glimpse of our Work and Presence</h2>
                <div class="hlis-counter row mt-5 mt-md-4 mt-lg-5 no-gutters">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-3 mb-md-3 mb-lg-0">
                        <div class="content-box content-box-pink">
                            <div class="d-inline-flex">
                                <h4>4500+</h4>
                            </div>
                            <p class="mb-0">Apps Developed</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-3 mb-md-3 mb-lg-0">
                        <div class="content-box">
                            <div class="d-inline-flex">
                                <h4>2200+</h4>
                            </div>
                            <p class="mb-0">Website Designed</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-3 mb-md-3 mb-lg-0">
                        <div class="content-box content-box-pink">
                            <div class="d-inline-flex">
                                <h4>2700+</h4>
                            </div>
                            <p class="mb-0">Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-3 mb-md-3 mb-lg-0">
                        <div class="content-box">
                            <div class="d-inline-flex">
                                <h4>1000+</h4>
                            </div>
                            <p class="mb-0">Developers</p>
                        </div>
                    </div>
                </div>
                <div class="hlis-counter row mt-3 mt-md-4 mt-lg-5 no-gutters">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-3 mb-md-3 mb-lg-0">
                        <div class="content-box ">
                            <div class="d-inline-flex">
                                <h4>120+</h4>
                            </div>
                            <p class="mb-0">AI & IoT Solutions</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-3 mb-md-3 mb-lg-0">
                        <div class="content-box content-box-pink">
                            <div class="d-inline-flex">
                                <h4>140+</h4>
                            </div>
                            <p class="mb-0">Games Developed</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-3 mb-md-3 mb-lg-0">
                        <div class="content-box">
                            <div class="d-inline-flex">
                                <h4>120+</h4>
                            </div>
                            <p class="mb-0">Salesforce Solutions</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-3 mb-md-3 mb-lg-0">
                        <div class="content-box content-box-pink">
                            <div class="d-inline-flex">
                                <h4>40+</h4>
                            </div>
                            <p class="mb-0">Data Science</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="latest-blogs row px-0 px-md-4 px-lg-0 justify-content-md-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12 text-center mb-40">
                        <h2 class="main-title mb-3 mt-4 title-research c-black">Research</h2>
                        <p class="desc mb-0">A Well-Detailed Research About The Innovative Topics.</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="d-flex flex-row align-items-stretch mob-box-main">
                            <div class="mob-box">
                                <a class="d-flex flex-column" target="_blank"
                                    href="/research/hire-iphone-app-developers">
                                    <picture>
                                        <source
                                            srcset="/uploads/blog/1677014232.jpg"
                                            type="image/png">
                                        <img loading="lazy" class="img-fluid"
                                            src="/uploads/blog/1677014232.jpg"
                                            alt="research">
                                    </picture>
                                    <div class="inner-content">
                                        <h4 class="mb-3">Hire iPhone App Developers: The Most Researched and Ultimate
                                            Guide for 2023</h4>
                                        <span>Harnil Oza</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="d-flex flex-row align-items-stretch mob-box-main">
                            <div class="mob-box">
                                <a class="d-flex flex-column" target="_blank"
                                    href="/research/hire-flutter-developers">
                                    <picture>
                                        <source
                                            srcset="/uploads/blog/1677189614.jpg"
                                            type="image/png">
                                        <img loading="lazy" class="img-fluid"
                                            src="/uploads/blog/1677189614.jpg"
                                            alt="research">
                                    </picture>
                                    <div class="inner-content">
                                        <h4 class="mb-3">Hire Flutter Developers in 2023 With A Comprehensive Guide
                                            Researched by Hyperlink InfoSystem</h4>
                                        <span>Harnil Oza</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="d-flex flex-row align-items-stretch mob-box-main">
                            <div class="mob-box">
                                <a class="d-flex flex-column" target="_blank"
                                    href="/research/hire-python-developers">
                                    <picture>
                                        <source
                                            srcset="/uploads/blog/1676851543.jpg"
                                            type="image/png">
                                        <img loading="lazy" class="img-fluid"
                                            src="/uploads/blog/1676851543.jpg"
                                            alt="research">
                                    </picture>
                                    <div class="inner-content">
                                        <h4 class="mb-2">Hire Python Developers - Research on How To Hire Python Experts
                                            in 2023?</h4>
                                        <span>Harnil Oza</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

@include('footer')

