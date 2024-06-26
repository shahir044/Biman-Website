<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\fileUpload;
use App\Models\Advisory;
use App\Models\files;
use App\Models\FromAirport;
use App\Models\InternationalSchedule;
use App\Models\InternationalScheduleFile;
use App\Models\News;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
/*Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});*/

//Route cache:
/*Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});*/

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
/* ROUTES CACHE E*/

// Route::get('/sso/token',[App\Http\Controllers\SSOController::class, 'createSession'])->name('sso.token');
// Route::get('/sso/getToken', function () {
//     $ssoToken = request()->cookie('sso_token');
//     return 'Welcome to the subdomain!: '.''.$ssoToken;
// });

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
// Route::get('/cert/BGDX/index', [App\Http\Controllers\IndexController::class, 'certIndex'])->name('cert-index');
// Route::get('/index2', [App\Http\Controllers\IndexController::class, 'index2'])->name('index2');

Route::post('api/fetch-toAirport', [App\Http\Controllers\DropdownController::class, 'fetchToAirport']);


// Route::get('/home', function () {
//     return view('index');
// })->name('home');

//***Widget*****///
Route::get('/flight-oneway', [App\Http\Controllers\IndexController::class, 'flightOneWay'])->name('flight-oneWay');
Route::get('/flight-roundtrip', [App\Http\Controllers\IndexController::class, 'flightRoundTrip'])->name('flightRoundTrip');
Route::get('/manage-booking', [App\Http\Controllers\IndexController::class, 'manageBooking'])->name('manage-booking');
Route::get('/flightstatus-route', [App\Http\Controllers\IndexController::class, 'flightStatusRoute'])->name('flightstatus-route');
Route::get('/flightstatus-flightno', [App\Http\Controllers\IndexController::class, 'flightStatusFlightno'])->name('flightstatus-flightno');
Route::get('/flight-schedule', [App\Http\Controllers\IndexController::class, 'flightSchedule'])->name('flight-schedule');
Route::get('/flight-multicity', [App\Http\Controllers\IndexController::class, 'flightMulticity'])->name('flight-multicity');

Route::get('/checkin-booking-reference', [App\Http\Controllers\IndexController::class, 'checkinBookingReference'])->name('checkin-booking-reference');
Route::get('/checkin-ticket-number', [App\Http\Controllers\IndexController::class, 'checkinTicket'])->name('checkin-ticket-number');

// ****** OFFER section ****** //
Route::get('/offers', function(){
    return view('offers');
})->name('offers');

// ****** WHY BIMAN section ****** //
// Route::get('/in-flight-services', function(){
//     return view('in-flight-services');
// })->name('in-flight-services');
// Route::get('/inflight-services', function(){
//     return view('inflight-services');
// })->name('inflight-services');


// ****** TRavel Advisory Page ****** //
Route::get('/travelAdvisory', [App\Http\Controllers\TravelAdvisoryController::class, 'showAdvisory'])->name('travel-advisory');

// ****** subscription ************* //
// Route::post('/addSubscriber', [App\Http\Controllers\FeedbackController::class, 'addsubscriber'])->name('addsubscriber');


// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/admpolicy', function () {
//     return view('admpolicy');
// })->name('admpolicy');

// Route::get('/agents', function () {
//     return view('agents');
// })->name('agents');

// Route::get('/airport', function () {
//     return view('airport');
// })->name('airport');

// Route::get('/asia', function () {
//     return view('asia');
// })->name('asia');

// Route::get('/baggage', function () {
//     return view('baggage');
// })->name('baggage');

Route::get('/baggageAll', function () {
    return view('baggage-all');
})->name('baggageAll');

// Route::get('/BaggageDetails', function () {
//     return view('BaggageDetails');
// })->name('BaggageDetails');

// Route::get('/bangladesh', function () {
//     return view('bangladesh');
// })->name('bangladesh');

// Route::get('/bimanphotos', function () {
//     return view('bimanphotos');
// })->name('bimanphotos');

// Route::get('/BoardofDirectors', function () {
//     return view('BoardofDirectors');
// })->name('BoardofDirectors');

// Route::get('/book-flight', function () {
//     return view('book-flight');
// })->name('book-flight');

// Route::get('/bookingpolicy', function () {
//     return view('bookingpolicy');
// })->name('bookingpolicy');

// Route::get('/chartered', function () {
//     return view('cargo');
// })->name('chartered');

Route::get('/ceo-message', function () {
    return view('ceo-message');
})->name('ceo-message');

// Route::get('/ChairmansMessage', function () {
//     return view('ChairmansMessage');
// })->name('ChairmansMessage');

Route::get('/contactus', function () {
    return view('contact');
})->name('contact');

// Route::get('/Corporate', function () {
//     return view('Corporate');
// })->name('Corporate');

// Route::get('/corporateprofile', function () {
//     return view('corporateprofile');
// })->name('corporateprofile');

// Route::get('/creditauthorization', function () {
//     return view('creditauthorization');
// })->name('creditauthorization');

// Route::get('/customerservice', function () {
//     return view('customerservice');
// })->name('customerservice');

Route::get('/destinations', function () {
    return view('destinations');
})->name('destinations');

Route::get('/destinations-domestic', function () {
    return view('destinations-domestic');
})->name('destinations-domestic');

Route::get('/destinations-asia', function () {
    return view('destinations-asia');
})->name('destinations-asia');

Route::get('/destinations-europe', function () {
    return view('destinations-europe');
})->name('destinations-europe');

Route::get('/destinations-middle-east', function () {
    return view('destinations-middle-east');
})->name('destinations-middle-east');

Route::get('/destinations-subcontinent', function () {
    return view('destinations-subcontinent');
})->name('destinations-subcontinent');

Route::get('/destinations-list', function () {
    return view('destinations-list');
})->name('destinations-list');



// Route::get('/dutyfee', function () {
//     return view('dutyfee');
// })->name('dutyfee');

// Route::get('/earn', function () {
//     return view('earn');
// })->name('earn');

// Route::get('/europe', function () {
//     return view('europe');
// })->name('europe');

// Route::get('/executive', function () {
//     return view('Executive Directors');
// })->name('executive');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Route::get('/feedback', function () {
//     return view('feedback');
// })->name('feedback');

// Route::get('/cargofeedback', function () {
//     return view('feedbackCargo');
// })->name('cargofeedback');

Route::get('/fleet', function () {
    return view('fleet');
})->name('fleet');

Route::get('/fleet-787', function () {
    return view('fleet-787');
})->name('fleet-787');

Route::get('/fleet-777', function () {
    return view('fleet-777');
})->name('fleet-777');

Route::get('/fleet-737', function () {
    return view('fleet-737');
})->name('fleet-737');

Route::get('/fleet-dash8', function () {
    return view('fleet-dash8');
})->name('fleet-dash8');

Route::get('/flight', function () {
    return view('flight');
})->name('flight');

Route::get('/flightinfo', function () {
    return view('flightinfo');
})->name('flightinfo');

// Route::get('/flight-single', function () {
//     return view('flight-single');
// })->name('flight-single');

// Route::get('/groundHandling', function () {
//     return view('groundHandling');
// })->name('groundHandling');

// ******* hajj page ************ //
Route::get('/hajj', function () {
    return view('hajj');
})->name('hajj');

Route::get('/hajj-info', 'App\Http\Controllers\HajjController@index')->name('hajj-info');
Route::get('/search-hajj-sch', 'App\Http\Controllers\HajjController@hajjSchSearch')->name('search.hajj-sch');

Route::get('/hazmat', function () {
    return view('hazmat');
})->name('hazmat');

// Route::get('/hpm', function () {
//     return view('hpm');
// })->name('hpm');

// Route::get('/inflightmagazine', function () {
//     return view('inflightmagazine');
// })->name('inflightmagazine');

Route::get('/info', function () {
    return view('info');
})->name('info');

// Route::get('/internationalschedule', function () {
//     return view('internationalschedule');
// })->name('internationalschedule');

Route::get('/accessibility-plan', function () {
    return view('accessibility-plan');
})->name('accessibility-plan');

Route::get('/accessibility', function () {
    return view('accessibility');
})->name('accessibility');

Route::get('/accessibility-progress', function () {
    return view('accessibility-progress');
})->name('accessibility-progress');


Route::get('/manualrefund', function () {
    return view('manualrefund');
})->name('manualrefund');


Route::get('/refund-request','App\Http\Controllers\RefundController@initiateRequest')->name('refund-form');

Route::post('/refund-request','App\Http\Controllers\RefundController@sendRequest')->name('refund-request');

Route::post('/refund_status-request','App\Http\Controllers\RefundController@checkRequest')->name('refund_status-request');



// Route::get('/medical', function () {
//     return view('medical');
// })->name('medical');

// Route::get('/mideast', function () {
//     return view('mideast');
// })->name('mideast');

Route::get('/news', function () {
    $news = News::latest()->paginate(6);
    return view('news-list',compact('news'));
})->name('news-list');

Route::get('/news-details/{id}', function (Request $request, $id) {
    $news = News::where('id',$id)->orderBy('created_at', 'DESC')->get(['id','news_title','news_description','news_category','news_image','news_pdf','created_at','status']);
    return view('news-details',compact('news'));
})->name('news-details');

// Route::get('/travelAdvisory', function () {
//     $advisories = Advisory::join('users','user_id','=','users.id')->orderBy('advisories.created_at','desc')->get(['status','name','advisory_title','file_name','advisories.created_at']);
//     return view('news',compact('advisories'));
// })->name('news');

// Route::get('/officedirectory', function () {
//     return view('officedirectory');
// })->name('officedirectory');

// Route::get('/optiontown', function () {
//     return view('optiontown');
// })->name('optiontown');

Route::get('/ota', function () {
    return view('ota');
})->name('ota');



Route::get('/privacyPolicy', function () {
    return view('privacyPolicy');
})->name('privacyPolicy');

Route::get('/prohibitedarticles', function () {
    return view('prohibitedarticles');
})->name('prohibitedarticles');

// Route::get('/redeem', function () {
//     return view('redeem');
// })->name('redeem');

// Route::get('/refundpolicy', function () {
//     return view('refundpolicy');
// })->name('refundpolicy');

// Route::get('/reportingtime', function () {
//     return view('reportingtime');
// })->name('reportingtime');

// Route::get('/schedule', function () {
//     return view('schedule');
// })->name('schedule');

// Route::get('/sitemap', function () {
//     return view('sitemap');
// })->name('sitemap');

// Route::get('/sitting', function () {
//     return view('sitting');
// })->name('sitting');

// Route::get('/subcontinent', function () {
//     return view('subcontinent');
// })->name('subcontinent');

Route::get('/termsConditions', function () {
    return view('termsConditions');
})->name('termsConditions');

// Route::get('/787', function () {
//     return view('787');
// })->name('787');

// Route::get('/777', function () {
//     return view('777');
// })->name('777');

// Route::get('/737', function () {
//     return view('737');
// })->name('737');

// Route::get('/dash8', function () {
//     return view('dash8');
// })->name('dash8');

// Route::get('/insideAircraft', function () {
//     return view('insideAircraft');
// })->name('insideAircraft');

// Route::get('/counterCheckIN', function () {
//     return view('counterCheckIN');
// })->name('counterCheckIN');

// Route::get('/bfcc', function () {
//     return view('bfcc');
// })->name('bfcc');



/// Feedback submit
Route::post('/submitFeedback',[FeedbackController::class, 'submitFeedback'])->name('submitFeedback');

// Route::post('/submitCargoFeedback',[FeedbackController::class, 'submitCargoFeedback'])->name('submitCargoFeedback');

// ADMIN ROUTES


Route::get('/home',[App\Http\Controllers\Admin\UserController::class, 'index'])->name('home');

Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'ScheduleUpdate'])->name('schedule');

Route::get('/internationalschedule', [App\Http\Controllers\InternationalScheduleController::class, 'index'])->name('internationalschedule');




Route::middleware('auth')->group(function (){

    Route::get('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'index']);

    Route::get('/flightSchedule', function () {

        $domesticFiles = files::join('users','user_id','=','users.id')->orderBy('files.created_at','desc')->get();
        // return $domesticFiles;

        return view('admin.flightSchedule',compact('domesticFiles'));

    })->name('flightSchedule')->middleware('auth.isSchedule');

    Route::get('/internationalFlightSchedule', function () {

        $internationalFiles = InternationalScheduleFile::join('users','user_id','=','users.id')->orderBy('international_schedule_files.created_at','desc')->get();

        return view('admin.internationalFlightSchedule',compact('internationalFiles'));

    })->name('internationalFlightSchedule')->middleware('auth.isSchedule');

    Route::get('/passenger-feedback', [App\Http\Controllers\Admin\FeedbackController::class, 'index'])->name('feedback-controller');

    Route::get('/admin/refund-portal','App\Http\Controllers\Admin\RefundController@index')->name('admin-refund-portal');
    Route::put('/refund-approve/{refund}','App\Http\Controllers\Admin\RefundController@approveRefund')->name('refund-approve');
    Route::post('/refund-decline/{refund}','App\Http\Controllers\Admin\RefundController@declineRefund')->name('refund-decline');

    Route::post('/refund-done/{refund}','App\Http\Controllers\Admin\RefundController@approveResolvedRefund')->name('refund-done');
    Route::post('/refund-decline-revenue/{refund}','App\Http\Controllers\Admin\RefundController@declineResolvedRefund')->name('refund-decline-revenue');

    Route::get('/search','App\Http\Controllers\Admin\RefundController@searchPNR')->name('search-pnr');
    Route::get('/searchID','App\Http\Controllers\Admin\RefundController@searchID')->name('search-id');

    Route::get('/advisory', function () {

        $advisories = Advisory::join('users','user_id','=','users.id')->orderBy('advisories.created_at','desc')
        ->select('advisories.id', 'advisories.user_id','country_name','advisory_title','file_name','delete_by','status','advisories.created_at','advisories.updated_at','name')
        ->get();

        return view('admin.adminAdvisory',compact('advisories'));


    })->name('advisoryUpload')->middleware('auth.isAdvisory');

    Route::post('/delete-advisory/{id}','App\Http\Controllers\Admin\AdvisoryController@delete')->name('delete-advisory');
    Route::post('/delete-news/{id}','App\Http\Controllers\Admin\NewsController@delete')->name('delete-news');

    Route::get('/newsUpload', function () {

        $items = News::join('users','user_id','=','users.id')->select('users.name','news.id','news.user_id','news_title','news_category','delete_reason','status','delete_by','news.created_at','news.updated_at')->get();

        return view('admin.newsUpload',compact('items'));

    })->name('newsUpload')->middleware('auth.isNews');

    Route::get('/main', function () {
        return view('admin.main');
    })->name('main');


    Route::get('/changePassword',[App\Http\Controllers\Admin\UserController::class, 'changePassword'])->name('changePassword');


    /// POST

    Route::post('/changePasswordSubmit',[App\Http\Controllers\Admin\UserController::class, 'changePasswordSubmit'])->name('changePasswordSubmit');

    Route::post('/submitFile',[fileUpload::class, 'submitFile'])->name('submitFile');

    Route::post('/submitFileInternational',[fileUpload::class, 'submitFileInternational'])->name('submitFileInternational');

    Route::post('/submitAdvisory',[fileUpload::class, 'submitAdvisory'])->name('submitAdvisory');

    Route::post('/publishNews',[fileUpload::class, 'publishNews'])->name('publishNews');

    // file

    Route::get('/getDownload/{file}',[fileUpload::class, 'getDownload'])->name('getDownload');

});


// file download

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/getDownloadAdvisory/{file}',[fileUpload::class, 'getDownloadAdvisory'])->name('getDownloadAdvisory');

Route::get('image/{filename}', [fileUpload::class, 'getNewsImage'])->name('image.displayImage');


// loyalty
Route::get('/loyalty-club', function () {
    return view('loyalty.loyaltyclub');
})->name('loyalty.home');


Route::post('/register/generate-token', 'App\Http\Controllers\Loyalty\RegisterController@tokenGenerate')->name('generateToken');

Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {

    Route::get('/loyalty-member/register', function () {
        return view('loyalty.register', ['countries' => \App\Models\Country::all()]);
    })->middleware(['guest:' . config('fortify.guard')])->name('loyalty.register');

    Route::get('/loyalty-club/account/verify', 'App\Http\Controllers\Loyalty\RegisterController@verifyAccount')
        ->middleware(['guest:'.config('fortify.guard')])
        ->name('loyalty.account.verify');
    Route::post('/loyalty-club/account/verify', 'App\Http\Controllers\Loyalty\RegisterController@submitOTP')
        ->middleware(['guest:'.config('fortify.guard')])
        ->name('loyalty.account.otp');

    Route::get('/loyalty-club/account/profile', 'App\Http\Controllers\Loyalty\RegisterController@profile')
        ->middleware(['guest:'.config('fortify.guard')])
        ->name('loyalty.account.profile');
    Route::post('/loyalty-club/account/profile', 'App\Http\Controllers\Loyalty\RegisterController@submitProfile')
        ->middleware(['guest:'.config('fortify.guard')])
        ->name('loyalty.account.submitProfile');

    Route::get('/loyalty-member/forgot-password','App\Http\Controllers\Loyalty\PasswordResetController@create')
        ->middleware(['guest:'.config('fortify.guard')])
        ->name('loyalty.forgot-password-view');

    Route::post('/loyalty-member/forgot-password','App\Http\Controllers\Loyalty\PasswordResetController@store')
        ->middleware(['guest:'.config('fortify.guard')])
        ->name('loyalty.forgot-password');

    Route::get('/loyalty-member/account/verify', 'App\Http\Controllers\Loyalty\PasswordResetController@verifyAccount')
        ->middleware(['guest:'.config('fortify.guard')])
        ->name('loyalty.fgp.verify');
    Route::post('/loyalty-member/account/verify', 'App\Http\Controllers\Loyalty\PasswordResetController@submitOTP')
        ->middleware(['guest:'.config('fortify.guard')])
        ->name('loyalty.fgp.otp');
});


/*Route::get('/loyalty-member/login',function (){
    return view('loyalty.login');
})->name('loyalty.login');*/

Route::get('/loyalty-club/terms-and-conditions', function () {
    return view('loyalty.terms');
})->name('loyalty.tc');

Route::get('/loyalty-club/earn', function () {
    return view('loyalty.earn');
})->name('loyalty.earn');

Route::get('/loyalty-club/redeem', function () {
    return view('loyalty.redeem');
})->name('loyalty.redeem');

Route::get('/loyalty-club/faq', function () {
    return view('loyalty.faq');
})->name('loyalty.faq');

Route::get('/loyalty-club/lounges', function () {
    return view('loyalty.lounges');
})->name('loyalty.lounge');


Route::get('/loyalty-club/my-account', 'App\Http\Controllers\Loyalty\LoyaltyController@getUser')->name('loyalty.member.test')->middleware('auth');
Route::post('/loyalty-club/my-account/update-profile', 'App\Http\Controllers\Loyalty\UpdateProfileController@updateProfile')->name('loyalty.member.update-profile')->middleware('auth');
Route::post('/loyalty-club/my-account/claim-mileage','App\Http\Controllers\Loyalty\LoyaltyController@claimMileage')->name('loyalty.member.claim-mileage')->middleware('auth');
Route::get('/loyalty-club/my-account/get-transaction-history','App\Http\Controllers\Loyalty\ActivityHistoryController@getHistory')->name('loyalty.member.get-transaction-history')->middleware('auth');
// loyalty end


//Route::get('test-mail','App\Http\Controllers\Email\EmailController@testMail');
