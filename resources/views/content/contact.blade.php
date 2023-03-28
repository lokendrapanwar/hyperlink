<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')

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
        <a class="mr-0 c-black d-inline-flex shadow-btn" href="press-releases">Press Release</a>
        <a class="mr-2 c-black d-inline-flex shadow-btn" href="our-portfolio/">Our Fresh Work</a>
    </div>
</div>
@include('header-menu')
<div class="cd-main-content"></div>
<main>
    <section class="sect-pad-tb contact-us pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 text-right mb-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-inline-flex">
                            <li class="breadcrumb-item"><a href="default.htm" class="c-blue">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-md-12 col-lg-12 text-center">
                    <div class="row h-100 justify-content-between">
                        <div class="col-12 col-md-12 col-lg-12">
                            <h1 class="main-title mb-3 mt-60 contact-title c-black">Contact Us</h1>
                            <p class="desc mb-0">We would be happy to hear from you, please fill in the form below or
                                mail us your requirements on<br><span class="c-pink">info AT
                                    hyperlinkinfosystem.com</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12 get-qoute-sect align-self-center mt-4">
                    <div class="card-box mt-0 bg-white p-4 p-md-5 p-lg-5">
                        <form action="{{route('inquiry')}}" id="inquiry" name="inquiry"
                            enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            @csrf()

                            <input type="hidden" name="ContactForm" value="ContactForm" />
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="input-group mb-3 mb-md-4 mb-lg-3">
                                        <div class="input-group-prepend">
                                            <img src="/frontend_assets/img/profile.svg" alt="profile">
                                        </div>
                                        <input type="text" class="form-control" id="name" placeholder="Your Full Name*"
                                            aria-label="Your Full Name" name="name"
                                            data-msg-required="Please enter your name." value="">
                                    </div>
                                    <div> <span class="name-error"> </span> </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="input-group mb-3 mb-md-4 mb-lg-3">
                                        <div class="input-group-prepend">
                                            <img src="/frontend_assets/img/qmsg.svg" alt="email">
                                        </div>
                                        <input type="text" name="email" required minlength="4" class="form-control"
                                            id="email" placeholder="Your Email*" aria-label="Your Email" value="">
                                    </div>
                                    <div> <span class="email-error"> </span> </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="input-group mb-3 mb-md-4 mb-lg-3 d-flex">
                                        <div class="input-group-prepend">
                                            <img src="/frontend_assets/img/call.svg" alt="call">
                                        </div>
                                        <span class="ml-2 mr-0 align-self-center">+</span>
                                        <input type="text" class="form-control c-code px-1"
                                            style="max-width:60px;min-width:60px" id="phone_cc" placeholder="1"
                                            aria-label="code" name="phone" maxlength="4" minlength="1" value=""
                                            onkeypress="if (!window.__cfRLUnblockHandlers) return false; return isNumberKey(event);"
                                            data-cf-modified-9f9818f75635cf9190ff6ff5-="">
                                        <input type="text" class="form-control" id="phone1" placeholder="Contact No.*"
                                            aria-label="Contact No." maxlength="15" name="phone" required value=""
                                            onkeypress="if (!window.__cfRLUnblockHandlers) return false; return isNumberKey(event);"
                                            data-cf-modified-9f9818f75635cf9190ff6ff5-="">
                                    </div>
                                    <div> <span class="phone-error"> </span> </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="input-group mb-3 mb-md-4 mb-lg-3">
                                        <div class="input-group-prepend">
                                            <img src="/frontend_assets/img/whatsapp-contact.svg" alt="whatsapp">
                                        </div>
                                        <input type="text" class="form-control" id="whatsapp1" placeholder="WhatsApp"
                                            aria-label="WhatsApp" name="whatsapp" value=""
                                            onkeypress="if (!window.__cfRLUnblockHandlers) return false; return isNumberKey1(event);"
                                            data-cf-modified-9f9818f75635cf9190ff6ff5-="">
                                    </div>
                                    <div> <span class="whatsapp-error"> </span> </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-4">
                                    <div class="input-group mb-3 mb-md-4 mb-lg-3">
                                        <div class="input-group-prepend">
                                            <img src="/frontend_assets/img/skype-contact.svg" alt="skype">
                                        </div>
                                        <input type="text" class="form-control" id="skype-id" placeholder="Skype"
                                            aria-label="Skype" name="im_skype" minlength="4" value="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="input-group mb-3 mb-md-4 mb-lg-3">
                                        <div class="input-group-prepend">
                                            <img src="/frontend_assets/img/location.svg" alt="location">
                                        </div>
                                        <input type="text" class="form-control" id="location"
                                            placeholder="Your address / location" aria-label="Your Address / Location"
                                            name="location" value="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="input-group mb-3 mb-md-4 mb-lg-3">
                                        <input type="file" id="files_doc" class="form-control" name="files_doc">
                                        <small>(Max Size 20MB)</small>
                                    </div>
                                    <span class="files_doc-error"></span>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="mb-3 mb-md-4 mb-lg-3">
                                        <label for="budget" class="price-label"> Project Budget :
                                            <span class="text-red numbers" id="ex6CurrentSliderValLabel">$ 100</span>
                                        </label>
                                        <input type="hidden" name="budget" id="budget" value="100" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="input-group mb-3 mb-md-4 mb-lg-3">
                                        <div class="input-group-prepend align-items-start pt-2">
                                            <img src="/frontend_assets/img/msg.svg" alt="message">
                                        </div>
                                        <textarea class="form-control" id="message" placeholder="Your Message*" rows="4"
                                            name="message" minlength="10"></textarea>
                                    </div>
                                    <div> <span class="message-error"> </span> </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="input-group mb-3 mb-md-4 mb-lg-3">
                                        <div class="d-block w-100">
                                            Please enter sum:
                                        </div>
                                        <div class="input-group-prepend">
                                            <span
                                                class="lead f-w-600 align-self-center">4&nbsp;+&nbsp;3&nbsp;=&nbsp;</span>
                                            <input name="captcha" maxlength="2" class="form-control p-r-0"
                                                onkeypress="if (!window.__cfRLUnblockHandlers) return false; return isNumberKey(event);"
                                                id="captchacode" placeholder="Write Answer..." required=""
                                                aria-required="true" type="text"
                                                data-cf-modified-9f9818f75635cf9190ff6ff5-="">
                                        </div>
                                        <div> <span class="captchacode-error"> </span> </div>
                                    </div>
                                    <span class="cnt-bottom-title">We sign NDA for all our projects.</span>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12 text-right mt-3">
                                    <div class="d-inline-flex">
                                        <div class="slider-left-right-btn d-flex">
                                            <button class="nxt text-center" type="submit">Send <img
                                                    src="/frontend_assets/img/slider-arrow-blue.svg" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                                <img src="/frontend_assets/img/sbs-discovery-media-hlis.png" alt="sbs discovery media">
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

    <section class="sect-pad-tb locateus-sect">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="main-title mb-0 mt-60 title-locate-us2 c-black">Locate Us</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div
                        class="content-box text-center position-relative ind-office p-4 p-md-4 p-xl-5 d-flex flex-column justify-content-between">
                        <div>
                            <div class="card-box p-3 bg-white d-inline-block">
                                <img src="/frontend_assets/img/india.svg" alt="india Office">
                            </div>
                            <h3 class="title mt-5 mb-3 d-flex w-100 justify-content-center"><img
                                    class="mr-2 align-self-center" src="/frontend_assets/img/ind-flag.svg" alt="india">
                                INDIA (HQ)</h3>
                            <p class="desc mb-4">Block C, 106/B Ganesh Meridian, Near Sola Bridge, Opp Gujarat High
                                Court, S.G. Highway, Ahmedabad- 380061. Gujarat, India.</p>
                        </div>
                        <a href="tel:+918000161161">+91 8000-161-161</a>
                    </div>
                </div>
                <div
                    class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-0 mt-md-0 mt-lg-5 mt-xl-5 d-flex flex-column h-100 justify-content-between">
                    <div class="content-box text-center position-relative usa-office p-4 p-md-4 p-xl-5">
                        <div>
                            <div class="card-box p-3 bg-white d-inline-block">
                                <img src="/frontend_assets/img/usa.svg" alt="usa Office">
                            </div>
                            <h3 class="title mt-5 mb-3 d-flex w-100 justify-content-center"><img
                                    class="mr-2 align-self-center" src="/frontend_assets/img/us-flag.svg" alt="usa"> USA
                                Office</h3>
                            <p class="desc mb-4">One World Trade Center, 285 Fulton Street suite 8500, New York, NY
                                10007, United States & Sunnyvale, CA, United States</p>
                        </div>
                        <a href="tel:+13097914105">+1 309 791 4105</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-0 mt-md-0 mt-lg-5 mt-xl-5">
                    <div
                        class="content-box text-center position-relative uk-office p-5 p-md-4 p-lg-5 mt-0 mt-md-0 mt-lg-5 mt-xl-5 d-flex flex-column h-100 justify-content-between">
                        <div>
                            <div class="card-box p-3 bg-white d-inline-block">
                                <img src="/frontend_assets/img/uk.svg" alt="uk Office">
                            </div>
                            <h3 class="title mt-5 mb-3 d-flex w-100 justify-content-center"><img
                                    class="mr-2 align-self-center" src="/frontend_assets/img/uk-flag.svg" alt="uk"> UK
                                Office</h3>
                            <p class="desc mb-4">Level 30, The Leadenhall Building, 122 Leadenhall Street, London EC3V
                                4AB</p>
                        </div>
                        <a href="tel:+442081338639">+44 20 8133 8639</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div
                        class="content-box text-center position-relative mumbai-office h-100 p-4 p-md-4 p-xl-5 d-flex flex-column justify-content-between">
                        <div>
                            <div class="card-box p-3 bg-white d-inline-block">
                                <img src="/frontend_assets/img/mumbai.svg" alt="mumbai Office">
                            </div>
                            <h3 class="title mt-5 mb-3 d-flex w-100 justify-content-center"><img
                                    class="mr-2 align-self-center" src="/frontend_assets/img/ind-flag.svg" alt="india">
                                Mumbai Office</h3>
                            <p class="desc mb-4">Level 8, Vibgyor Towers, G Block, C62 Bandra Kurla Complex, Mumbai 400
                                098, India</p>
                        </div>
                        <a href="tel:+918000161161">+91 8000-161-161</a>
                    </div>
                </div>
                <div
                    class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-0 mt-md-0 mt-lg-5 mt-xl-5 d-flex flex-column justify-content-end">
                    <div
                        class="content-box text-center position-relative email-box pt-5 pt-md-3 pt-xl-5 px-5 px-md-3 px-lg-4">
                        <div>
                            <div class="card-box p-3 bg-white d-inline-flex align-items-center">
                                <img src="/frontend_assets/img/email-icon.svg" alt="email">
                            </div>
                            <h3 class="title mt-5 mb-3">Email Us</h3>
                            <p class="desc mb-5"><a
                                    href="mailto:info@hyperlinkinfosystem.com">info@hyperlinkinfosystem.com</a></p>
                        </div>
                        <img class="img-fluid" src="/frontend_assets/img/email-img.png" alt="email img">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-0 mt-md-5 mt-lg-5 mt-xl-5 align-self-end">
                    <div
                        class="content-box text-center position-relative skype-box pt-5 pt-md-3 pt-xl-0 px-5 px-md-3 px-lg-4 mt-0 mt-md-0 mt-lg-5 mt-xl-5 d-flex flex-column justify-content-between">
                        <div>
                            <div class="card-box p-3 bg-white d-inline-flex align-items-center">
                                <img src="/frontend_assets/img/skype-icon.svg" width="70" alt="skype">
                            </div>
                            <h3 class="title mt-5 mb-3">Skype</h3>
                            <p class="desc mb-4"><a href="Skype:hyperlink.infosystem">hyperlink.infosystem</a></p>
                        </div>
                        <img class="img-fluid px-4 px-md-3 px-lg-5" src="/frontend_assets/img/skype.png" alt="skype">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect-pad-tb d-none">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3 mb-sm-3 mb-md-0">
                    <div class="p-3 bg-light-gray">
                        <div style="width: 100%"><iframe width="100%" height="340" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=One%20World%20Trade%20Center,%20285%20Fulton%20Street%20suite%208500,%20New%20York,%20NY%2010007,%20United%20States+(USA%20office)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3 mb-sm-3 mb-md-0">
                    <div class="p-3 bg-light-gray">
                        <div style="width: 100%"><iframe width="100%" height="340" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Level%2030,%20The%20Leadenhall%20Building,%20122%20Leadenhall%20Street,%20London%20EC3V%204AB+(Hyperlink%20InfoSystem)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3 mb-sm-3 mb-md-0">
                    <div class="p-3 bg-light-gray">
                        <div style="width: 100%"><iframe width="100%" height="340" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Block%20C,%20106/B%20Ganesh%20Meredian,%20Near%20Sola%20Bridge,%20Opp%20Gujarat%20High%20Court,%20380061%20Ahmedabad+(Hyperlink%20InfoSystem)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3 mb-sm-3 mb-md-0">
                    <div class="p-3 bg-light-gray">
                        <div style="width: 100%"><iframe width="100%" height="340" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Level%208,%20Vibgyor%20Towers,%20G%20Block,%20C62%20Bandra%20Kurla%20Complex,%20Mumbai%20400%20098,%20India+(Hyperlink%20InfoSystem)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
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
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right border-bottom text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/forbes-logo.svg" alt="forbes">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right border-bottom text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/cnbc-logo.svg" alt="cnbc">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-bottom text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/marketwatch-logo.svg"
                                    alt="marketwatch">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/the-street-logo.svg" alt="the street">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/yahoo-finance-logo.svg"
                                    alt="yahoo finance">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/entrepreneur-logo.svg"
                                    alt="entrepreneur">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h4 class="mb-4 h3 text-center"><b>Our Esteemed Clients</b></h4>
                    <div class="row no-gutters">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right border-bottom text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/cartoon-network-logo.svg"
                                    alt="cartoon network">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right border-bottom text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/google-m-logo.svg" alt="google">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-bottom text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/disney-m-logo.svg" alt="disney">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/viacom-logo.svg" alt="viacom">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 border-right  text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/sbs-discovery-logo.svg"
                                    alt="sbs discovery">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                            <div class="p-3">
                                <img class="img-fluid" src="/frontend_assets/img/papa-johns-logo.svg" alt="papa johns">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

@include('footer')