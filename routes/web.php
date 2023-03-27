<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('content.contact');
});

Route::post('/inquiry', [App\Http\Controllers\InquiryController::class, 'inquiry'])->name('inquiry');

Route::get('/research', function () {
    return view('research.impact-of-covid-19-on-the-app-development-industry');
});

Route::get('/press-releases', function () {
    return view('press-releases');
});

Route::get('/our-portfolio', function () {
    return view('content.about.portfolio');
});

Route::get('/who-we-are', function () {
    return view('content.about.who-we-are');
});

Route::get('/services', function () {
    return view('content.about.services');
});

Route::get('/career', function () {
    return view('content.about.career');
});

Route::get('/events', function () {
    return view('content.about.events');
});

// developement

Route::get('/mobile-app-development', function () {
    return view('content.development.mobile-app-development');
});
Route::get('/web-development', function () {
    return view('content.development.web-development');
});
Route::get('/ecommerce-development', function () {
    return view('content.development.ecommerce-development');
});
Route::get('/blockchain-development', function () {
    return view('content.development.blockchain-development');
});
Route::get('/game-development-company', function () {
    return view('content.development.game-development-company');
});
Route::get('/salesforce-development', function () {
    return view('content.development.salesforce-development');
});
Route::get('/artificial-intelligence-and-machine-learning', function () {
    return view('content.development.artificial-intelligence-and-machine-learning');
});
Route::get('/devops', function () {
    return view('content.development.devops');
});


Route::get('/android-app-development', function () {
    return view('content.development.android-app-development');
});
Route::get('/iphone-application-development', function () {
    return view('content.development.iphone-application-development');
});
Route::get('/hybrid-app-development', function () {
    return view('content.development.hybrid-app-development');
});
Route::get('/flutter-app-development', function () {
    return view('content.development.flutter-app-development');
});
Route::get('/react-native-app-development', function () {
    return view('content.development.react-native-app-development');
});
Route::get('/kotlin-app-development', function () {
    return view('content.development.kotlin-app-development');
});
Route::get('/ionic-app-development', function () {
    return view('content.development.ionic-app-development');
});
Route::get('/swift-development', function () {
    return view('content.development.swift-development');
});
Route::get('/xamarin-app-development', function () {
    return view('content.development.xamarin-app-development');
});

//languages

Route::get('/mobile-app-development', function () {
    return view('content.languages.mobile-app-development');
});
Route::get('/php-web-application-development', function () {
    return view('content.languages.php-web-application-development');
});
Route::get('/wordpress-development', function () {
    return view('content.languages.wordpress-development');
});
Route::get('/drupal-development', function () {
    return view('content.languages.drupal-development');
});
Route::get('/laravel-development', function () {
    return view('content.languages.laravel-development');
});
Route::get('/codeigniter-development', function () {
    return view('content.languages.codeigniter-development');
});
Route::get('/cakephp-development', function () {
    return view('content.languages.cakephp-development');
});
Route::get('/python-web-development', function () {
    return view('content.languages.python-web-development');
});
Route::get('/joomla-website-development', function () {
    return view('content.languages.joomla-website-development');
});
Route::get('/typescript', function () {
    return view('content.languages.typescript');
});
// Route::get('/joomla-website-development', function () {
//     return view('content.languages.joomla-website-development');
// });

// ecommerce
Route::get('/magento-development', function () {
    return view('content.ecommerce.magento-development');
});

Route::get('/bigcommerce', function () {
    return view('content.ecommerce.bigcommerce');
});

Route::get('/ubercart-development', function () {
    return view('content.ecommerce.ubercart-development');
});

Route::get('/cs-cart-development', function () {
    return view('content.ecommerce.cs-cart-development');
});

Route::get('/prestashop', function () {
    return view('content.ecommerce.prestashop');
});

Route::get('/virtuemart-development', function () {
    return view('content.ecommerce.virtuemart-development');
});

Route::get('/shopify-development', function () {
    return view('content.ecommerce.shopify-development');
});

Route::get('/woocommerce-development', function () {
    return view('content.ecommerce.woocommerce-development');
});

// cryptocurrency
Route::get('/cryptocurrency-wallet-development', function () {
    return view('content.cryptocurrency.cryptocurrency-wallet-development');
});
Route::get('/cryptocurrency-exchange-development', function () {
    return view('content.cryptocurrency.cryptocurrency-exchange-development');
});
Route::get('/ethereum-app-development', function () {
    return view('content.cryptocurrency.ethereum-app-development');
});
Route::get('/hyperledger-blockchain-development', function () {
    return view('content.cryptocurrency.hyperledger-blockchain-development');
});
Route::get('/smart-contracts-development', function () {
    return view('content.cryptocurrency.smart-contracts-development');
});
Route::get('/private-blockchain-development', function () {
    return view('content.cryptocurrency.private-blockchain-development');
});
Route::get('/nft-marketplace-development-company', function () {
    return view('content.cryptocurrency.nft-marketplace-development-company');
});

//blockchain
Route::get('/blockchain-development', function () {
    return view('content.blockchain.blockchain-development');
});

// game
Route::get('/unity3d-game-development', function () {
    return view('content.game.unity3d-game-development');
});
Route::get('/metaverse-development-company', function () {
    return view('content.game.metaverse-development-company');
});
Route::get('/augmented-reality-app-development-company', function () {
    return view('content.game.augmented-reality-app-development-company');
});
Route::get('/unreal-engine-game-development', function () {
    return view('content.game.unreal-engine-game-development');
});
Route::get('/virtual-reality-mobile-game-application-development-company-oculus-vr', function () {
    return view('content.game.virtual-reality-mobile-game-application-development-company-oculus-vr');
});
Route::get('/casual-game-development', function () {
    return view('content.game.casual-game-development');
});
Route::get('/game-development-company', function () {
    return view('content.game.game-development-company');
});

// salesforce`
Route::get('/salesforce-development', function () {
    return view('content.salesforce.salesforce-development');
});
Route::get('/salesforce-consulting', function () {
    return view('content.salesforce.salesforce-consulting');
});
Route::get('/salesforce-implementation', function () {
    return view('content.salesforce.salesforce-implementation');
});

// artificial-intelligence
Route::get('/object-recognition', function () {
    return view('content.artificial-intelligence.object-recognition');
});
Route::get('/text-to-speech', function () {
    return view('content.artificial-intelligence.text-to-speech');
});
Route::get('/business-intelligence', function () {
    return view('content.artificial-intelligence.business-intelligence');
});
Route::get('/natural-language-processing', function () {
    return view('content.artificial-intelligence.natural-language-processing');
});
Route::get('/recommendation-engine', function () {
    return view('content.artificial-intelligence.recommendation-engine');
});
Route::get('/data-analytics', function () {
    return view('content.artificial-intelligence.data-analytics');
});
Route::get('/sentimental-analysis', function () {
    return view('content.artificial-intelligence.sentimental-analysis');
});
Route::get('/artificial-intelligence-and-machine-learning', function () {
    return view('content.artificial-intelligence.artificial-intelligence-and-machine-learning');
});


// Embedded
Route::get('/iot-app-development', function () {
    return view('content.embedded.iot-app-development');
});
Route::get('/embedded-software', function () {
    return view('content.embedded.embedded-software');
});
Route::get('/iot-hardware-prototyping', function () {
    return view('content.embedded.iot-hardware-prototyping');
});
Route::get('/iot-dashboard-and-analytics', function () {
    return view('content.embedded.iot-dashboard-and-analytics');
});
Route::get('/smart-home-home-automation', function () {
    return view('content.embedded.smart-home-home-automation');
});
Route::get('/iot-development', function () {
    return view('content.embedded.iot-development');
});

// Hire Developers
Route::get('/hire-developers', function () {
    return view('content.hire-developers.hire-dedicated-developers');
});
Route::get('/app-developers-for-hire', function () {
    return view('content.hire-developers.app-developers-for-hire');
});
Route::get('/hire-web-developers', function () {
    return view('content.hire-developers.hire-web-developers');
});
Route::get('/hire-software-developers', function () {
    return view('content.hire-developers.hire-software-developers');
});
Route::get('/hire-full-stack-developer', function () {
    return view('content.hire-developers.hire-full-stack-developer');
});
Route::get('/hire-front-end-developers', function () {
    return view('content.hire-developers.hire-front-end-developers');
});
Route::get('/hire-backend-developers', function () {
    return view('content.hire-developers.hire-backend-developers');
});
Route::get('/hire-ui-ux-designer', function () {
    return view('content.hire-developers.hire-ui-ux-designer');
});
Route::get('/hire-iot-solution-architect', function () {
    return view('content.hire-developers.hire-iot-solution-architect');
});
Route::get('/hire-data-scientist', function () {
    return view('content.hire-developers.hire-data-scientist');
});
Route::get('/hire-salesforce-developers', function () {
    return view('content.hire-developers.hire-salesforce-developers');
});
Route::get('/hire-blockchain-developers', function () {
    return view('content.hire-developers.hire-blockchain-developers');
});
Route::get('/hire-android-app-developer', function () {
    return view('content.hire-developers.hire-android-app-developer');
});
Route::get('/hire-ios-developers', function () {
    return view('content.hire-developers.hire-ios-developers');
});
Route::get('/hire-iphone-app-developer', function () {
    return view('content.hire-developers.hire-iphone-app-developer');
});
Route::get('/hire-flutter-developers', function () {
    return view('content.hire-developers.hire-flutter-developers');
});
Route::get('/hire-react-native-app-developers', function () {
    return view('content.hire-developers.hire-react-native-app-developers');
});
Route::get('/hire-swift-developer', function () {
    return view('content.hire-developers.hire-swift-developer');
});
Route::get('/hire-ionic-developer', function () {
    return view('content.hire-developers.hire-ionic-developer');
});
Route::get('/hire-kotlin-developers', function () {
    return view('content.hire-developers.hire-kotlin-developers');
});
Route::get('/hire-java-developers', function () {
    return view('content.hire-developers.hire-java-developers');
});
Route::get('/hire-angularjs-developers', function () {
    return view('content.hire-developers.hire-angularjs-developers');
});
Route::get('/hire-reactjs-developers', function () {
    return view('content.hire-developers.hire-reactjs-developers');
});
Route::get('/hire-nodejs-developers', function () {
    return view('content.hire-developers.hire-nodejs-developers');
});
Route::get('/hire-vuejs-developers', function () {
    return view('content.hire-developers.hire-vuejs-developers');
});


Route::get('/hire-vuejs-developers', function () {
    return view('content.hire-developers.hire-vuejs-developers');
});

Route::get('/hire-php-developer', function () {
    return view('content.hire-developers.hire-php-developer');
});

Route::get('/hire-wordpress-developer', function () {
    return view('content.hire-developers.hire-wordpress-developer');
});

Route::get('/hire-cakephp-developer', function () {
    return view('content.hire-developers.hire-cakephp-developer');
});

Route::get('/hire-codeigniter-developers', function () {
    return view('content.hire-developers.hire-codeigniter-developers');
});

Route::get('/hire-laravel-developers', function () {
    return view('content.hire-developers.hire-laravel-developers');
});

Route::get('/hire-yii-developers', function () {
    return view('content.hire-developers.hire-yii-developers');
});

Route::get('/hire-magento-developer', function () {
    return view('content.hire-developers.hire-magento-developer');
});

Route::get('/hire-shopify-developer', function () {
    return view('content.hire-developers.hire-shopify-developer');
});

Route::get('/hire-drupal-developer', function () {
    return view('content.hire-developers.hire-drupal-developer');
});

Route::get('/hire-woocommerce-developers', function () {
    return view('content.hire-developers.hire-woocommerce-developers');
});

Route::get('/hire-python-developers', function () {
    return view('content.hire-developers.hire-python-developers');
});

Route::get('/hire-golang-developers', function () {
    return view('content.hire-developers.hire-golang-developers');
});

Route::get('/hire-solidity-developer', function () {
    return view('content.hire-developers.hire-solidity-developer');
});

Route::get('/hire-dart-developer', function () {
    return view('content.hire-developers.hire-dart-developer');
});

Route::get('/hire-spring-boot-developers', function () {
    return view('content.hire-developers.hire-spring-boot-developers');
});

Route::get('/hire-django-developer', function () {
    return view('content.hire-developers.hire-django-developer');
});

// Case study
Route::get('/case_study', function () {
    return view('content.case-study.case-study');
});
Route::get('/case-study', function () {
    return view('content.case-study.case-study');
});
Route::get('/blog', function () {
    return view('content.case-study.blog');
});

Route::get('/media-coverage', function () {
    return view('content.case-study.media-coverage');
});

Route::get('/press-releases', function () {
    return view('content.case-study.press-releases');
});

Route::get('/technews', function () {
    return view('content.case-study.technews');
});

Route::get('/1whitepaper', function () {
    return view('content.case-study.1whitepaper');
});

Route::get('/podcast', function () {
    return view('content.case-study.podcast');
});

Route::get('/download-brochure', function () {
    return view('content.case-study.download-brochure');
});

Route::get('/case-study/papa-johns-on-demand-food-delivery-app', function () {
    return view('content.case-study.papa-johns-on-demand-food-delivery-app');
});

Route::get('/case-study/resiwood-winners-circle-loyalty-program-app', function () {
    return view('content.case-study.resiwood-winners-circle-loyalty-program-app');
});

Route::get('/case-study/art-of-living-a-meditation-app', function () {
    return view('content.case-study.art-of-living-a-meditation-app');
});

Route::get('/case-study/tata-power-skill-development-institute', function () {
    return view('content.case-study.tata-power-skill-development-institute');
});

Route::get('/case-study/vocal-coach-online-vocal-exercise-app', function () {
    return view('content.case-study.vocal-coach-online-vocal-exercise-app');
});

Route::get('/case-study/blockchain-based-nft-marketplace', function () {
    return view('content.case-study.blockchain-based-nft-marketplace');
});

Route::get('/case-study/digital-banking-solution', function () {
    return view('content.case-study.digital-banking-solution');
});

Route::get('/case-study/zydus-cadila-iot-solution-for-counterfeit-medicines', function () {
    return view('content.case-study.zydus-cadila-iot-solution-for-counterfeit-medicines');
});

Route::get('/case-study/salesforce-insurance-management-system', function () {
    return view('content.case-study.salesforce-insurance-management-system');
});

Route::get('/case-study/scan-to-go-document-scanner-app', function () {
    return view('content.case-study.scan-to-go-document-scanner-app');
});

Route::get('/case-study/smart-traffic-rule-violation-detection-system', function () {
    return view('content.case-study.smart-traffic-rule-violation-detection-system');
});

Route::get('/case-study/pet-universe-metaverse-game', function () {
    return view('content.case-study.pet-universe-metaverse-game');
});

Route::get('/case-study/voicem-memory-recording-app', function () {
    return view('content.case-study.voicem-memory-recording-app');
});

Route::get('/case-study/foodini-meal-ordering-app', function () {
    return view('content.case-study.foodini-meal-ordering-app');
});

Route::get('/case-study/digieyez-cyber-security-tech-app', function () {
    return view('content.case-study.digieyez-cyber-security-tech-app');
});

Route::get('/case-study/yuv-tv-ott-platform-development', function () {
    return view('content.case-study.yuv-tv-ott-platform-development');
});

Route::get('/case-study/caby-ride-hailing-mobile-application', function () {
    return view('content.case-study.caby-ride-hailing-mobile-application');
});

Route::get('/case-study/uptime-on-demand-truck-repair-service-app', function () {
    return view('content.case-study.uptime-on-demand-truck-repair-service-app');
});

Route::get('/case-study.on-demand-service-providers-app', function () {
    return view('content.case-study.on-demand-service-providers-app');
});

Route::get('/case-study/flashmeet-meet-new-people-in-flash', function () {
    return view('content.case-study.flashmeet-meet-new-people-in-flash');
});

Route::get('/case-study/prestoeat-food-delivery-app', function () {
    return view('content.case-study.prestoeat-food-delivery-app');
});


Route::get('/case-study/bid-to-stay-home-rental-marketplace', function () {
    return view('content.case-study.bid-to-stay-home-rental-marketplace');
});

Route::get('/case-study/rummy-card-game-development', function () {
    return view('content.case-study.rummy-card-game-development');
});

Route::get('/case-study/nft-marketplace-blockchain-solution', function () {
    return view('content.case-study.nft-marketplace-blockchain-solution');
});

Route::get('/case-study/precious-stone-verification-blockchain', function () {
    return view('content.case-study.precious-stone-verification-blockchain');
});

Route::get('/case-study/t75-online-short-video-making-app', function () {
    return view('content.case-study.t75-online-short-video-making-app');
});

Route::get('/case-study/net-social-app', function () {
    return view('content.case-study.net-social-app');
});

Route::get('/case-study/poker-online-casino-game', function () {
    return view('content.case-study.case-study/poker-online-casino-game');
});

Route::get('/case-study/phanziety-a-social-media-app', function () {
    return view('content.case-study.phanziety-a-social-media-app');
});

Route::get('/case-study/deals-on-demand-deals-finder-app', function () {
    return view('content.case-study./deals-on-demand-deals-finder-app');
});

Route::get('/case-study/worldtalks2-translation-app', function () {
    return view('content.case-study.worldtalks2-translation-app');
});

Route::get('/case-study/paid-workout-on-demand-fitness-app', function () {
    return view('content.case-study.paid-workout-on-demand-fitness-app');
});

Route::get('/case-study/tell99-social-app-for-crime-reporting', function () {
    return view('content.case-study.tell99-social-app-for-crime-reporting');
});

Route::get('/case-study/village-on-demand-hire-and-sell-services', function () {
    return view('content.case-study.village-on-demand-hire-and-sell-services');
});

Route::get('/case-study/wastee-food-sharing-app', function () {
    return view('content.case-study.wastee-food-sharing-app');
});

Route::get('/case-study/on-demand-food-delivery-app', function () {
    return view('content.case-study.on-demand-food-delivery-app');
});

Route::get('/case-study/fatebox-online-thinkers-app', function () {
    return view('content.case-study.fatebox-online-thinkers-app');
});

//blog/how-to-find-and-hire-the-best-unity-3d-developers
Route::get('/blog/how-to-find-and-hire-the-best-unity-3d-developers', function () {
    return view('content.hire-developers.how-to-find-and-hire-the-best-unity-3d-developers');
});

Route::get('/podcast/why-your-business-needs-a-website', function () {
    return view('content.hire-developers.podcast/why-your-business-needs-a-website');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
