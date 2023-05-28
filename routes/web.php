<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Employee\EmployeeDashboardComponent;
//use App\Http\livewire\Employee\EmployeeAsideComponent;
use App\Http\Livewire\Master\MasterDashboardComponent;


use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SectorComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CheckoutComponent;

use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CareerComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\TeamComponent;
use App\Http\Livewire\WishlistDetailsComponent;
use App\Http\Livewire\BuyabrandlicenseComponent;
//membership
use App\Http\Livewire\MembershipComponent;


use App\Http\Livewire\AwardComponent;
use App\Http\Livewire\MagazineComponent;

//Event
use App\Http\Livewire\EventComponent;
use App\Http\Livewire\EventDetailsComponent;

//blog
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\BlogAuthorComponent;
use App\Http\Livewire\BlogCategoryComponent;
use App\Http\Livewire\BlogDetailComponent;
use App\Http\Livewire\SellyourbusinessComponent;
use App\Http\Livewire\ExpandyourbusinessComponent;
use App\Http\Livewire\BusinessDesignStrategyComponent;
use App\Http\Livewire\LikeComponent;

//User
use App\Http\Livewire\User\UserBlogComponent;
use App\Http\Livewire\User\MybrandComponent;
use App\Http\Livewire\User\UserAccountComponent;

//Master
use App\Http\Livewire\Master\MasterBlogComponent;

//Employee
use App\Http\Livewire\Employee\EmployeeBlogComponent;

//Seller
use App\Http\Livewire\Seller\SellerMybrandComponent;
use App\Http\Livewire\Seller\SellerBrandComponent;
use App\Http\Livewire\Seller\SellerFranchiseComponent;
use App\Http\Livewire\Seller\SellerContactComponent;
use App\Http\Livewire\Seller\SellerProfileComponent;
use App\Http\Livewire\Seller\SellerDashboardComponent;
use App\Http\Livewire\Seller\SellerBlogComponent;

use App\Http\Livewire\Seller\SellerAccountComponent;

//Admin
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminCategoryAddComponent;
use App\Http\Livewire\Admin\AdminCategoryEditComponent;
use App\Http\Livewire\Admin\AdminBrandComponent;

//Franchise
//use App\Http\Livewire\Admin\AdminFranchiseComponent;
use App\Http\Livewire\Admin\AdminFranchiseAddComponent;
use App\Http\Livewire\Admin\AdminFranchiseEditComponent;

//Attribute
use App\Http\Livewire\Admin\AdminAttributesComponent;
use App\Http\Livewire\Admin\AdminAttributesAddComponent;
use App\Http\Livewire\Admin\AdminAttributesEditComponent;

use App\Http\Livewire\Admin\AdminUserComponent;
use App\Http\Livewire\Admin\AdminTicketComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminInfoComponent;
use App\Http\Livewire\Admin\AdminInfoAddComponent;
use App\Http\Livewire\Admin\AdminJobApplicationComponent;

use App\Http\Livewire\Admin\AdminCareerComponent;
use App\Http\Livewire\Admin\AdminCareerAddComponent;

//QRcode
use App\Http\Livewire\Qrcode\GeneratorComponent;
use App\Http\Livewire\Qrcode\TrackComponent;

//Event
use App\Http\Livewire\Admin\AdminEventAddComponent;


use App\Http\Livewire\Admin\AdminBlogComponent;
use App\Http\Livewire\Admin\AdminCouponAddComponent;
use App\Http\Livewire\Admin\AdminCouponEditComponent;
use App\Http\Livewire\Admin\AdminOptioAddComponent;
use App\Http\Livewire\Admin\AdminOptioEditComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\BlogDashboardComponent;
use App\Http\Livewire\Admin\BlogCategoryEditComponent;
use App\Http\Livewire\CoicartComponent;
use App\Http\Livewire\CoiReviewComponent;
use App\Http\Livewire\ConferenceComponent;
use App\Http\Livewire\ContactusComponent;

use App\Http\Livewire\Document\ExpandComponent;

use App\Http\Livewire\Employee\EmployeeAddExhibitorComponent;
use App\Http\Livewire\Employee\EmployeeAddPartnerComponent;
use App\Http\Livewire\Employee\EmployeeAddSpeakerComponent;

use App\Http\Livewire\Employee\EmployeeAddSponsershipComponent;

use App\Http\Livewire\EventRateNowComponent;
use App\Http\Livewire\ExhibitComponent;
use App\Http\Livewire\ExhibitionCategoryComponent;
use App\Http\Livewire\ExhibitionComponent;
use App\Http\Livewire\LeadComponent;
use App\Http\Livewire\LeadOtherComponent;
use App\Http\Livewire\PaymentComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\ProductReviewComponent;
use App\Http\Livewire\Seller\HastagComponent;
use App\Http\Livewire\Seller\LeadPoolComponent;
use App\Http\Livewire\Seller\PavillionComponent;
use App\Http\Livewire\Seller\SellerEventAttributeComponent;
use App\Http\Livewire\Seller\SellerEventComponent;
use App\Http\Livewire\Seller\SellerEventIdeComponent;
use App\Http\Livewire\Seller\SellerEventTicketComponent;
use App\Http\Livewire\Seller\SellerOrderComponent;
use App\Http\Livewire\Seller\SellerOrderDetailsComponent;
use App\Http\Livewire\Seller\SellerPostOpportunityComponent;
use App\Http\Controllers\SitemapController;
use App\Http\Livewire\Admin\AdminAccountComponent;
use App\Http\Livewire\Admin\AdminClientComponent;
use App\Http\Livewire\Admin\AdminDetailComponent;
use App\Http\Livewire\Admin\AdminEventEditComponent;
use App\Http\Livewire\Admin\AdminEventMultiDetailComponent;
use App\Http\Livewire\Admin\AdminEventMultiParticipantsComponent;
use App\Http\Livewire\Admin\AdminEventMultipleAddComponent;
use App\Http\Livewire\Admin\AdminLandingComponent;
use App\Http\Livewire\AwardsComponent;
use App\Http\Livewire\ExhibitionTimeComponent;
use App\Http\Livewire\Seller\SellerSponsershipComponent;

use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserReviewComponent;
use App\Mail\ContactMail;
use App\Mail\PostMail;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/user/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

//resend email
 Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
 })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Route for Mailing
    Route::get('/enco/emal', function() {
    return new PostMail();
    });

    Route::get('/contact', [ContactusComponent::class,'sendEmail']);

//pages Routes
Route::get('/downloadExpand', [ExpandyourbusinessComponent::class, 'index']);
Route::get('/downloadSell', [SellyourbusinessComponent::class, 'index']);
Route::get('/downloadBuy', [BuyabrandlicenseComponent::class, 'index']);
Route::get('/downloadOpportunity', [UserOrderDetailsComponent::class, 'index'])->name('user.opportunity');

//Route::get('/', HomeComponent::class)->name('front.home');
//Route::get('/opportunities', shopComponent::class)->name('franchise.Coi');

//Route::get('/opportunity/{slug}', DetailsComponent::class)->name('franchise.details');
//Route::get('/opportunity-category/{category_slug}', CategoryComponent::class)->name('franchise.category');
//Route::get('/opportunity-sector/{sector_slug}', SectorComponent::class)->name('franchise.sector');
//Route::get('/document/expand', ExpandComponent::class)->name('document.expand');


//Route::get('/cartzilla-cart', CartzillaCartComponent::class)->name('product.cart');
//Route::get('/cartzilla-payment', CartzillaPaymentComponent::class)->name('payment');
//Route::get('/cartzilla-transaction', CartzillaTransactionComponent::class)->name('transaction');

Route::get('/blog', BlogComponent::class)->name('blog.Coi');
Route::get('/blog/{slug}', BlogDetailComponent::class)->name('blog.details');
Route::get('/blog-category/{category_slug}', BlogCategoryComponent::class)->name('blog.category');
Route::get('/author/{slug}', BlogAuthorComponent::class)->name('blog.author');

Route::get('/leadership', TeamComponent::class)->name('team');

//Start
Route::get('/sell-your-business', SellyourbusinessComponent::class)->name('sell.business');
Route::get('/expand-your-business', ExpandyourbusinessComponent::class)->name('expand.business');
Route::get('/buy-a-brand-license', BuyabrandlicenseComponent::class)->name('buy.license');
Route::get('/business-design-strategy', BusinessDesignStrategyComponent::class)->name('design.strategy');

Route::get('/career', CareerComponent::class)->name('career');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/about', AboutComponent::class)->name('about');

Route::get('/', EventComponent::class)->name('business.exhibition');
Route::get('/ex/{slug}', EventDetailsComponent::class)->name('event.details');
Route::get('/exhibit', ExhibitComponent::class)->name('event.exhibit');

Route::get('/pass/{slug}', ProductComponent::class)->name('event.product');
Route::get('/pass/es/{slug}/ticket', ProductReviewComponent::class)->name('event.productreview');

Route::get('/space/{eventype}', ExhibitionComponent::class)->name('coi.exhibition');
Route::get('/schedule/{eventype}/{time}', ExhibitionTimeComponent::class)->name('coi.exhibitiontime');
Route::get('/exhibition/{eventype}/{categry_id}', ExhibitionCategoryComponent::class)->name('coi.exhibitioncategory');

Route::get('/magazineo', MagazineComponent::class)->name('business.magazine');

//catch exhibition data
Route::get('/add-your-event/{board}', AwardsComponent::class)->name('coievent.add');


//need to delete
Route::get('/award', AwardComponent::class)->name('business.award');
Route::get('/conference', ConferenceComponent::class)->name('coi.conference');
Route::get('/rating/{slug}', EventRateNowComponent::class)->name('coi.ratenow');

//lead
Route::get('/coi/expand-your-business/{slug}', LeadComponent::class)->name('lead.business');
Route::get('/coi/sell-your-business/{slug}/{type}', LeadOtherComponent::class)->name('lead.business.other');

Route::get('/cart', CheckoutComponent::class)->name('checkout');
Route::get('/checkout', CoicartComponent::class)->name('coicart');
Route::get('/payment', PaymentComponent::class)->name('payment');
Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');
Route::get('/review', CoiReviewComponent::class)->name('review');
Route::get('/partner', MembershipComponent::class)->name('business.membership');

//track
Route::get('/COIbusiness',TrackComponent::class)->name('admin.track');
Route::get('/wishlist', WishlistDetailsComponent::class)->name('franchise.wishlist');

//likesor dislikes
Route::post('/like-post/{mag}', 'App\Http\Livewire\BlogComponent@likepost')->name('post.like')->middleware('auth');
Route::post('/likes-post/{mag}', 'App\Http\Livewire\BlogDetailComponent@likepost')->name('postdetail.like')->middleware('auth');
Route::post('/like-business/{franchise}', 'App\Http\Livewire\DetailsComponent@likepost')->name('detail.like')->middleware('auth');
    //likes
    //Route::post('/like-post/{mag}', 'LikeComponent@likepost')->name('post.like')->middleware('auth');
    //Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

  //User
  Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::get('/user/dashboard/{board}', UserDashboardComponent::class)->name('user.dashboard');
    
    Route::get('/user/orders', UserOrdersComponent::class)->name('user.Orders');
    Route::get('/user/orders/{order_id}', UserOrderDetailsComponent::class)->name('user.orderDetails');
    Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
    Route::get('/user/mybrand', MybrandComponent::class)->name('user.mybrand');
    
    Route::get('/user/blog', UserBlogComponent::class)->name('user.blog');
    Route::get('/user/account', UserAccountComponent::class)->name('user.account');
    Route::get('/user/review/{order_item_id}', UserReviewComponent::class)->name('user.review');
  });

  //Admin-ADM
  Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group( function () {
    Route::get('/admin/global', AdminLandingComponent::class)->name('admin.global');
    Route::get('/admin/dashboard/{board}', AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin/event/add', AdminEventAddComponent::class)->name('admin.eventadd');
    Route::get('/admin/event/{event_id}/edit/{board}', AdminEventEditComponent::class)->name('admin.eventEdit');

    Route::get('/admin/multi/{event_id}/detail/{formm}', AdminEventMultipleAddComponent::class)->name('admin.eventMultiEdit');

    Route::get('/admin/participants/{event_id}/add/{formm}', AdminEventMultiParticipantsComponent::class)->name('admin.multipartners');

    Route::get('/admin/sub-details/{event_id}/add/{id}/business/{formm}', AdminEventMultiDetailComponent::class)->name('admin.multiSubDetails');


    Route::get('/admin/event/{slug}', AdminDetailComponent::class)->name('adminevent.detail');
    Route::get('/admin/edit/{event_id}', AdminCategoryEditComponent::class)->name('admin.editcategories');

    Route::get('/admin/ticket/{event_id}/business/{board}', AdminTicketComponent::class)->name('admincheck.ticket');



    Route::get('/admin/business-mail', AdminClientComponent::class)->name('admin.clientmail');

    
    //Route::get('/oemail', 'App\Http\Controllers\AdminDashboardComponent')->name('admin.email');
    Route::get('/admin/account', AdminAccountComponent::class)->name('admin.account');
    

    Route::get('/admin/franchises/edit/{franchise_id}', AdminFranchiseEditComponent::class)->name('admin.editfranchise');

    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminCategoryAddComponent::class)->name('admin.addcategories');
    

    Route::get('/admin/brands', AdminBrandComponent::class)->name('admin.brand');

    
    Route::get('/admin/users', AdminUserComponent::class)->name('admin.user');

    //Route::get('/admin/franchises', AdminFranchiseComponent::class)->name('admin.franchise');
    Route::get('/admin/franchises/add', AdminFranchiseAddComponent::class)->name('admin.addfranchise');
    Route::get('/admin/franchises/edit/{franchise_id}', AdminFranchiseEditComponent::class)->name('admin.editfranchise');
    
    
    //Franchise Attributes
    Route::get('/admin/attributes', AdminAttributesComponent::class)->name('admin.attributes');
    Route::get('/admin/attributes/add', AdminAttributesAddComponent::class)->name('admin.addattributes');
    Route::get('/admin/attributes/edit/{attribute_id}', AdminAttributesEditComponent::class)->name('admin.editattributes');
    
    //coupons
    Route::get('/admin/coupons/add', AdminCouponAddComponent::class)->name('admin.addCoupons');
    Route::get('/admin/coupons/edit/{coupon_id}', AdminCouponEditComponent::class)->name('admin.editCoupon');

    //response
    Route::get('/admin/optios/add', AdminOptioAddComponent::class)->name('admin.addoptios');
    Route::get('/admin/optios/edit/{optio_id}', AdminOptioEditComponent::class)->name('admin.editoptio');


    Route::get('/admin/contacts', AdminContactComponent::class)->name('admin.contact');  
    Route::get('/admin/entity', AdminInfoComponent::class)->name('admin.info');
    Route::get('/admin/entity/add', AdminInfoAddComponent::class)->name('admin.infoadd');

    
    Route::get('/admin/The-Exhibition-Network/opportunity/{slug}', AdminCareerComponent::class)->name('admin.job');
    Route::get('/admin/job/applicat', AdminJobApplicationComponent::class)->name('admin.resume');
    Route::get('/admin/opportunity/add', AdminCareerAddComponent::class)->name('admin.jobCreate'); 



    //Qrcode
    Route::get('/admin/QrCode', GeneratorComponent::class)->name('admin.qrcode');
  
    //blog
    Route::get('/admin/blog/dashboard', BlogDashboardComponent::class)->name('admin.blogdashboard');
    //post all new  post
    Route::get('/admin/blog/add/{blog_id}/business/{board}', AdminBlogComponent::class)->name('admin.blogpost');
   // Route::get('/admin/blog/category/add', BlogCategoryEditCompopnent::class)->name('admin.blogadd');

   //event--add--status--list--edit
   
   
   //Order_details
   Route::get('/admin/order/{order_id}',AdminOrderDetailsComponent::class)->name('admin.orderdetails');

  });

   //Master-MSR
  Route::middleware(['auth:sanctum', 'verified', 'authmaster'])->group( function () {
    Route::get('/master/dashboard', MasterDashboardComponent::class)->name('master.dashboard');
    Route::get('/master/blog', MasterBlogComponent::class)->name('master.blog');
  });

  //Employee-EMP
  Route::middleware(['auth:sanctum', 'verified', 'authemp'])->group( function () {
    Route::get('/exhibitor/dashboard', EmployeeDashboardComponent::class)->name('employee.dashboard');
    Route::get('/exhibitor/blog', EmployeeBlogComponent::class)->name('employee.blog');
    Route::get('/exhibitor/add/partner' , EmployeeAddPartnerComponent::class)->name('employee.addPartner');
    Route::get('/exhibitor/add/speaker' , EmployeeAddSpeakerComponent::class)->name('employee.addSpeaker');
    Route::get('/exhibitor/add/exhibitor' , EmployeeAddExhibitorComponent::class)->name('employee.addExhibitor');
    Route::get('/exhibitor/add/sponsership' , EmployeeAddSponsershipComponent::class)->name('employee.addSponsership');
    //Route::get('/aside', EmployeeAsideComponent::class)->name('aside');
  });

  //Seller-SLR
  Route::middleware(['auth:sanctum', 'verified', 'authseller'])->group( function () {
    Route::get('/partner/account', SellerAccountComponent::class)->name('seller.account');
    
    Route::get('/partner/dashboard', SellerDashboardComponent::class)->name('seller.dashboard');
    Route::get('/partner/add', SellerEventComponent::class)->name('event.add');
    Route::get('/partner/ticket/add', SellerEventTicketComponent::class)->name('ticket.add');
    Route::get('/partner/sponser/add', SellerSponsershipComponent::class)->name('seller.sponser.add');
    Route::get('/partner/hastag/add', HastagComponent::class)->name('seller.hastag.add');
    Route::get('/partner/pavillion/add', PavillionComponent::class)->name('seller.pavillion.add');
    Route::get('/partner/portfolio/{slug}', SellerEventIdeComponent::class)->name('seller.portfolio');

    Route::get('/partner/attribute', SellerEventAttributeComponent::class)->name('seller.event.attribute');
    Route::get('/partner/attribute/{event_id}', SellerEventAttributeComponent::class)->name('seller.event');
    
    //lead
    Route::get('/partner/business/pool', LeadPoolComponent::class)->name('seller.business.pool');

    Route::get('/mybrand', SellerMybrandComponent::class)->name('seller.mybrand');

    Route::get('/seller/profile', SellerProfileComponent::class)->name('seller.profile');
    Route::get('/seller/brand', SellerBrandComponent::class)->name('seller.brand');
    Route::get('/seller/franchise', SellerFranchiseComponent::class)->name('seller.franchise');
    Route::get('/seller/contact', SellerContactComponent::class)->name('seller.contact');
    Route::get('/seller/blog', SellerBlogComponent::class)->name('seller.blog');

    Route::get('/seller/order', SellerOrderComponent::class)->name('seller.order');
    Route::get('/seller/order/{order_id}', SellerOrderDetailsComponent::class)->name('seller.orderDetails');

    //trial
    Route::get('/seller/opportunity', SellerPostOpportunityComponent::class)->name('seller.opportunity');
  });

  //sitemap
  Route::get('siteemap.xml', 'App\Http\Controllers\SitemapController@index');
  
  