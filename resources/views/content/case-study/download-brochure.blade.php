<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')
@include('header-menu')
<div class="cd-main-content"></div> 
<main>
<section class="sect-pad-tb digital-brochure-sect pt-4">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-md-12 col-lg-12 text-right mb-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb d-inline-flex">
<li class="breadcrumb-item"><a href="../" class="c-blue">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Digital Brochure</li>
</ol>
</nav>
</div>
</div>
<div class="row">
<div class="col-12 col-md-12 col-lg-12 col-xl-12 align-self-center text-center mb-5">
<h1 class="main-title mb-3 mt-60 digital-brochure-title c-black">Digital Brochure</h1>
</div>
<div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center mb-3 mb-md-0 mb-lg-0">
<picture>
<source srcset="https://www.hyperlinkinfosystem.com/frontend_assets/img/ebrochure.jpg" type="image/jpg">
<img loading="lazy" class="img-fluid" src="../frontend_assets/img/ebrochure.jpg" alt="ebrochure">
</picture>
</div>
<div class="col-12 col-md-12 col-lg-8 col-xl-8 align-self-center">
<p class="desc mb-0">Hyperlink InfoSystem is an India based popular app development company having offices in the USA and UK, a most trusted name for any tech requirement. With 10+ years of experience in the industry, company has served more than 2300 clients globally and delivered numerous solutions using latest technologies on custom apps for both Android & iOS platforms, Websites, Salesforce solutions, AI & ML solutions, Mobile Games, AR/VR, IoT, and many more. The company has a team of 400+ highly skilled developers who are always ready to build the most complex solutions that help clients to achieve their business goals. To know more about Hyperlink InfoSystem, download e-brochure now! </p>
</div>
</div>
<div class="row download-pdf mt-5">
<div class="col-12 col-md-12 col-xl-12">
<div class="get-qoute-sect">
<form name="inquiry" id="inquiry" action="inquiry/broucherdownload/" method="POST" enctype="multipart/form-data" novalidate="novalidate">
<div class="row">
<div class="col-12 col-md-12 col-lg-12 mb-3">
<h2 class="text-capitalize">Get Brochure</h2>
</div>
<div class="col-12 col-md-12 col-lg-4">
<div class="input-group">
<div class="input-group-prepend">
<img src="../frontend_assets/img/profile.svg" alt="full name">
</div>
<input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" aria-label="Your Full Name">
</div>
<label for="name" class="validation_errors name-error mb-0" style="color: red"> </label>
</div>
<div class="col-12 col-md-12 col-lg-4">
<div class="input-group">
<div class="input-group-prepend">
<img src="../frontend_assets/img/qmsg.svg" alt="email">
</div>
<input type="email" class="form-control" id="email" name="email" required="" minlength="4" placeholder="Business Email" aria-label="Your Email">
</div>
<label for="email" class="validation_errors email-error mb-0" style="color: red"> </label>
</div>
<div class="col-12 col-md-12 col-lg-4">
<div class="input-group">
<div class="input-group-prepend">
<img src="../frontend_assets/img/call.svg" alt="call">
</div>
<input type="text" class="form-control" id="phone1" maxlength="15" name="phone" required value="" onkeypress="if (!window.__cfRLUnblockHandlers) return false; return isNumberKey(event);" placeholder="Your Contact Number" aria-label="Your Contact Number" data-cf-modified-923a8f60635b32c961d2cf1e-="">
</div>
<label for="phone1" class="validation_errors phone-error mb-0" style="color: red"> </label>
</div>

<div class="col-12 col-md-12 col-lg-12 text-right">
<div class="d-inline-flex">
<div class="slider-left-right-btn d-flex">
<button class="nxt text-center" style="min-width: 160px" type="submit">Download <img src="../frontend_assets/img/slider-arrow-blue.svg" alt=""></button>
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

<section class="sect-pad-tb pb-0 pb-md-5">
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
<a class="d-flex flex-column" href="../blog/how-to-find-and-hire-the-best-unity-3d-developers/">
<img loading="lazy" class="img-fluid" src="..//uploads/blog/1677799964.jpg" srcset="..//uploads/blog/1677799964.jpg" alt="latest blog">
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
<a class="d-flex flex-column" href="../blog/how-to-create-an-online-laundry-app/">
<img loading="lazy" class="img-fluid" src="..//uploads/blog/1677540725.jpg" srcset="..//uploads/blog/1677540725.jpg" alt="latest blog">
<div class="inner-content">
<h4 class="mb-3">How To Create An Online Laundry App In 2023</h4>
<span>28 / 02 / 2023</span>
</div>
</a>
</div>
</div>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
<div class="d-flex flex-row align-items-stretch mob-box-main">
<div class="mob-box">
<a class="d-flex flex-column" href="../blog/mobile-game-development-ideas/">
<img loading="lazy" class="img-fluid" src="..//uploads/blog/1677116774.jpg" srcset="..//uploads/blog/1677116774.jpg" alt="latest blog">
<div class="inner-content">
<h4 class="mb-3">Top Mobile Game Development Ideas In 2023: Complete Guide</h4>
<span>22 / 02 / 2023</span>
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
 
<section class="our-latest-podcast sect-pad-tb">
<div class="container">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<h2 class="main-title mb-3 mt-60 title-our-latest-podcast c-black">Our Latest Podcast</h2>
</div>
<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
<p class="desc mb-0">Listen Technology Based Podcast Hosted By Hyperlink InfoSystem.</p>
</div>
<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-7 text-right align-self-center d-none d-sm-none d-md-block">
<label class="mb-0 d-flex align-items-center read-more-btn float-right"><a href="../podcast/" class="ml-3" title="">View All <img class="ml-3" src="../frontend_assets/img/arrow-right-white.svg" alt="arrow right"></a></label>
</div>
</div>
<div class="row mob-row flex-nowrap flex-sm-nowrap flex-md-wrap flex-lg-nowrap flex-xl-wrap mt-3 pb-3 lst-podcast">
<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 podcast-slider mb-0 mb-md-3 mb-lg-0">
<div class="card-box d-flex justify-content-between flex-column" style="background-image: url(../uploads/podcast/cover_art/1634101335.webp)">
<div><label class="mb-0 text-capitalize c-white py-4 px-3 h5 w-100 c-white">Blockchain</label></div>
<div class="content p-3 align-items-end">
<h4 class="mb-2 c-white">Is BlockChain Technology Worth The H ...</h4>
<p class="desc mb-0 c-white">Unfolds The Revolutionary & Versatility Of Blockchain Technology ...</p>
<div class="d-flex mt-4 justify-content-between">
<div class="align-items-center">
<img class="play-podcast-btn" id="play-podcast_0" src="../frontend_assets/img/play-btn.svg" alt="play podcast">
<img class="pause-podcast-btn" id="pause-podcast_0" src="../frontend_assets/img/stop-btn.svg" alt="pause podcast">
</div>
<div class="align-items-center gap_class" id="gap-example_0">
<audio class="audio_control" id="audio-podcast_0">
<source type="audio/mpeg" src="..//uploads/podcast/audio_file/1634008816.mp3"></source>
</audio>
</div>
<div class="align-self-center" id="learn_more_0">
<label class="mb-0 d-flex align-items-center read-more-btn"><a href="..podcast/is-blockchain-technology-worth-the-hype" class="ml-3" title="">Learn more <img class="ml-3" src="../frontend_assets/img/arrow-right-white.svg" alt=""></a></label>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 podcast-slider mb-0 mb-md-3 mb-lg-0">
<div class="card-box d-flex justify-content-between flex-column" style="background-image: url(../uploads/podcast/cover_art/1633579997.webp)">
<div><label class="mb-0 text-capitalize c-white py-4 px-3 h5 w-100 c-white">IoT</label></div>
<div class="content p-3 align-items-end">
  <h4 class="mb-2 c-white">IoT Technology - A Future In Making ...</h4>
<p class="desc mb-0 c-white">Everything You Need To Know About IoT Technology ...</p>
<div class="d-flex mt-4 justify-content-between">
<div class="align-items-center">
<img class="play-podcast-btn" id="play-podcast_1" src="../frontend_assets/img/play-btn.svg" alt="play podcast">
<img class="pause-podcast-btn" id="pause-podcast_1" src="../frontend_assets/img/stop-btn.svg" alt="pause podcast">
</div>
<div class="align-items-center gap_class" id="gap-example_1">
<audio class="audio_control" id="audio-podcast_1">
<source type="audio/mpeg" src="..//uploads/podcast/audio_file/1633579011.mp3"></source>
</audio>
</div>
<div class="align-self-center" id="learn_more_1">
<label class="mb-0 d-flex align-items-center read-more-btn"><a href="../podcast/iot-technology-a-future-in-making-or-speculating" class="ml-3" title="">Learn more <img class="ml-3" src="../frontend_assets/img/arrow-right-white.svg" alt=""></a></label>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 podcast-slider mb-0 mb-md-3 mb-lg-0">
<div class="card-box d-flex justify-content-between flex-column" style="background-image: url(../uploads/podcast/cover_art/1633308647.webp)">
<div><label class="mb-0 text-capitalize c-white py-4 px-3 h5 w-100 c-white">Mobile Apps</label></div>
<div class="content p-3 align-items-end">
<h4 class="mb-2 c-white">Flutter Vs. React Native - Which One ...</h4>
<p class="desc mb-0 c-white">Unfolding The Confusion Of Which One Is Better ...</p>
<div class="d-flex mt-4 justify-content-between">
<div class="align-items-center">
<img class="play-podcast-btn" id="play-podcast_2" src="../frontend_assets/img/play-btn.svg" alt="play podcast">
<img class="pause-podcast-btn" id="pause-podcast_2" src="../frontend_assets/img/stop-btn.svg" alt="pause podcast">
</div>
<div class="align-items-center gap_class" id="gap-example_2">
<audio class="audio_control" id="audio-podcast_2">
<source type="audio/mpeg" src="..//uploads/podcast/audio_file/1633308647.mp3"></source>
</audio>
</div>
<div class="align-self-center" id="learn_more_2">
<label class="mb-0 d-flex align-items-center read-more-btn"><a href="../podcast/flutter-vs-react-native" class="ml-3" title="">Learn more <img class="ml-3" src="../frontend_assets/img/arrow-right-white.svg" alt=""></a></label>
 </div>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 podcast-slider mb-0 mb-md-3 mb-lg-0">
<div class="card-box d-flex justify-content-between flex-column" style="background-image: url(../uploads/podcast/cover_art/1633308100.webp)">
<div><label class="mb-0 text-capitalize c-white py-4 px-3 h5 w-100 c-white">About Us</label></div>
<div class="content p-3 align-items-end">
<h4 class="mb-2 c-white">Journey of Hyperlink InfoSystem - A ...</h4>
<p class="desc mb-0 c-white">From Startup To Successful Thriving IT Provider ...</p>
<div class="d-flex mt-4 justify-content-between">
<div class="align-items-center">
<img class="play-podcast-btn" id="play-podcast_3" src="../frontend_assets/img/play-btn.svg" alt="play podcast">
<img class="pause-podcast-btn" id="pause-podcast_3" src="../frontend_assets/img/stop-btn.svg" alt="pause podcast">
</div>
<div class="align-items-center gap_class" id="gap-example_3">
<audio class="audio_control" id="audio-podcast_3">
<source type="audio/mpeg" src="..//uploads/podcast/audio_file/1633307346.mp3"></source>
</audio>
</div>
<div class="align-self-center" id="learn_more_3">
<label class="mb-0 d-flex align-items-center read-more-btn"><a href="../podcast/journey-of-hyperlink-infosystem" class="ml-3" title="">Learn more <img class="ml-3" src="../frontend_assets/img/arrow-right-white.svg" alt=""></a></label>
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