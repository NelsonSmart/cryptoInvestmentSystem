<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('pages.index');
});
Route::get('about_us/', function(){
    return view('pages.about');

});
Route::get('trade/currency_converter/', function(){
    return view('pages.currency_converter');

});  
Route::get('contact/', function(){
    return view('pages.contact_us');
});
Route::get('faqs/', function(){
    return view('pages.faqs');
});
Route::get('/login', function () {
    $user = Auth::User();
    if (!empty($user)) {
        return redirect('/' . $user->username . '/dashboard');
    } else {
        return redirect('/login');
    }
})->name('login');


Route::post('contact_mail', function(Request $req){
           $req->validate([
                  'name'     =>  'required',
                  'email'  =>  'required|email',
                  'message' =>  'required'
                 ]);

        $data = array(
            'name'      =>  $req->name ." ". $req->lname,
            'message'   =>   $req->message,
            'email'     =>   $req->email,
            'phone'     =>   $req->phone,
            'subject'   =>  $req->subject
        );
       Mail::to(env('SUPPORT_EMAIL'))->send(new ContactMail($data));
            return redirect() ->back()->with('success', 'Thanks for contacting us!');

});



// ///////////////////   user routes  ///////////////////////

Auth::routes();

Route::get('/{username}/xpack', function () {
    return view('user.bonus_pack');
})->middleware('auth');

Route::get('/{username}/investments', function () {
    return view('user.my_investment');
})->middleware('auth');

Route::get('/{username}/profile', function () {
    return view('user.profile');
})->middleware('auth');


Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return Redirect::to('/login');
});

Route::get('/{username}/dashboard', function () {
    return view('user.index');
})->middleware('auth');

Route::get('/{username}/withdrawal', function () {
    return view('user.withdrawal');
})->middleware('auth');

Route::get('/{username}/downlines', function () {
    return view('user.downlines');
})->middleware('auth');

Route::get('/register/{usn}', function ($username) {
    Session::put('ref', $username);
    return redirect('/register');
});



Route::get('/{username}/wallet', function () {
    return view('user.load_wallet');
})->middleware('auth')->name('wallet');

Route::get('/{username}/send_money', function () {
    return view('user.send_money');
})->middleware('auth');

Route::get('/{username}/btc/pay', function () {
    return view('user.btc_pay');
})->middleware('auth');

Route::get('/user/payment/failed', function () {
    Session::put('status', "payment failed! Try again");
    Session::put('msgType', "err");
    Session::put('payment_complete', "yes");
    return view('user.load_wallet');
})->middleware('auth');

Route::get('/withdrawal/request/form', function () {
    return view('user.wd_req_form');
});

Route::get('/notifications', 'App\Http\Controllers\userController@notifications');
Route::get('/notification/{id}', 'App\Http\Controllers\userController@notifications_read');


Route::get('/user/verify/btc/payment', 'App\Http\Controllers\userController@btc_payment_suc');
Route::get('/reset/password/{username}/{token}', 'App\Http\Controllers\userController@pwd_req_verify');
Route::get('/registration/confirm/{usr}/{code}', 'App\Http\Controllers\userController@verify_reg');
Route::get('/user/payment/{payAmt}/successful', 'App\Http\Controllers\userController@payment_suc')->middleware('auth');
Route::get('/user/update/readmsg/{id}', 'App\Http\Controllers\userController@readmsg_up')->middleware('auth');
Route::get('/user/get/states/{id}', 'App\Http\Controllers\userController@states');
Route::get('/user/get/countryCode/{id}', 'App\Http\Controllers\userController@countryCode');
Route::get('/user/remove/bankaccount/{id}', 'App\Http\Controllers\userController@deleteBankAccount')->middleware('auth');
Route::get('/user/home/login', 'App\Http\Controllers\userController@home_login')->name('home_login');
Route::get('/activate', 'App\Http\Controllers\userController@homelogin')->name('homelogin');

Route::post('/user/wallet/bank_deposit', 'App\Http\Controllers\userController@bank_deposit')->middleware('auth');
Route::post('/user/send/fund', 'App\Http\Controllers\userController@user_send_fund')->middleware('auth');
Route::post('/user/update/pwd', 'App\Http\Controllers\userController@reset_pwd');
Route::post('/user/upload/profile_pic', 'App\Http\Controllers\userController@uploadProfilePic')->middleware('auth');
Route::post('/user/change/pwd', 'App\Http\Controllers\userController@changePwd')->middleware('auth');
Route::post('/user/update/profile', 'App\Http\Controllers\userController@updateProfile')->middleware('auth');
Route::post('/user/add/bank', 'App\Http\Controllers\userController@addbank')->middleware('auth');
Route::post('/user/invest/packages', 'App\Http\Controllers\userController@invest')->middleware('auth');
Route::post('/user/wdraw/earning', 'App\Http\Controllers\userController@wd_invest')->middleware('auth');
Route::post('/user/wallet/wd', 'App\Http\Controllers\userController@user_wallet_wd')->middleware('auth');
Route::post('/user/ref/wd', 'App\Http\Controllers\userController@user_ref_wd')->middleware('auth');
Route::post('/activate', 'App\Http\Controllers\userController@login_system')->name('login_system');
Route::post('/user/deposit/fund', 'App\Http\Controllers\userController@user_deposit_trans')->middleware('auth');
Route::post('/user/add/btc_wallet', 'App\Http\Controllers\userController@addBtcWallet')->middleware('auth');

Route::post('/user/request/change/pwd', 'App\Http\Controllers\userController@user_req_pwd');


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////  admin /////////////////////////////////////////////////////////////////////

Route::get('/back-end', 'App\Http\Controllers\adminController@backLogin');

Route::get('/admin/home', function () {
    if (Session::has('adm')) {
        return view('admin.dashboard');
    } else {
        return redirect('/back-end');
    }
})->name('adm_dash');

Route::get('/admin/manage/users', function () {
    if (Session::has('adm')) {
        return view('admin.manage_users');
    } else {
        return redirect('/back-end');
    }
});


Route::get('/admin/manage/xpack_investments', function () {
    if (Session::has('adm')) {
        return view('admin.xpack_inv');
    } else {
        return redirect('/back-end');
    }
});

Route::get('/admin/view/userdetails/{id}', function ($id) {
    if (Session::has('adm')) {
        return view('admin.user_details', ['id' => $id]);
    } else {
        return redirect('/back-end');
    }
});

Route::get('/admin/manage/investments', function () {
    if (Session::has('adm')) {
        return view('admin.manage_inv');
    } else {
        return redirect('/back-end');
    }
});

Route::get('/admin/manage/deposits', function () {
    if (Session::has('adm')) {
        return view('admin.user_deposit');
    } else {
        return redirect('/back-end');
    }
});

Route::get('/admin/manage/withdrawals', function () {
    if (Session::has('adm')) {
        return view('admin.user_withdrawals');
    } else {
        return redirect('/back-end');
    }
});

Route::get('/admin/manage/packages', function () {
    if (Session::has('adm')) {
        return view('admin.inv_packages');
    } else {
        return redirect('/back-end');
    }
});

Route::get('/admin/manage/adminUsers', function () {
    if (Session::has('adm')) {
        return view('admin.manage_adm');
    } else {
        return redirect('/back-end');
    }
});

Route::get('/admin/viewlogs', function () {
    if (Session::has('adm')) {
        return view('admin.user_log');
    } else {
        return redirect('/back-end');
    }
});

Route::get('/admin/send/msg', function () {
    if (Session::has('adm')) {
        return view('admin.send_notification');
    } else {
        return redirect('/back-end');
    }
});

Route::get('/admin/change/pwd', function () {
    if (Session::has('adm')) {
        return view('admin.change_pwd');
    } else {
        return redirect('/back-end');
    }
});

Route::get('/admin/delete/pack/{id}', 'App\Http\Controllers\adminController@adminDeletePack');
Route::get('/admin/create/package', 'App\Http\Controllers\adminController@create_package');
Route::post('/admin/create/package', 'App\Http\Controllers\adminController@create_package_post');

Route::get('/admin/act_deact/pack/{id}', 'App\Http\Controllers\adminController@switch_pack');

Route::get('/admin/ban/admuser/{id}', 'App\Http\Controllers\adminController@admin_ban_user');
Route::get('/admin/activate/admuser/{id}', 'App\Http\Controllers\adminController@admin_activate_user');
Route::get('/admin/delete/admuser/{id}', 'App\Http\Controllers\adminController@dadmin_delete_user');

Route::get('/admin/reject/user/wd/{id}', 'App\Http\Controllers\adminController@rejectWD');
Route::get('/admin/approve/user/wd/{id}', 'App\Http\Controllers\adminController@approveWD');
Route::get('/admin/delete/user/wd/{id}', 'App\Http\Controllers\adminController@deleteWD');

Route::get('/admin/reject/user/payment/{id}', 'App\Http\Controllers\adminController@rejectDep');
Route::get('/admin/approve/user/payment/{id}', 'App\Http\Controllers\adminController@approveDep');
Route::get('/admin/delete/user/payment/{id}', 'App\Http\Controllers\adminController@deleteDep');

Route::get('/admin/pause/user_inv/{id}', 'App\Http\Controllers\adminController@pauseInv');
Route::get('/admin/activate/user_inv/{id}', 'App\Http\Controllers\adminController@activateInv');
Route::get('/admin/delete/user_inv/{id}', 'App\Http\Controllers\adminController@deleteInv');

Route::get('/admin/pause/x_inv/{id}', 'App\Http\Controllers\adminController@xpauseInv');
Route::get('/admin/activate/x_inv/{id}', 'App\Http\Controllers\adminController@xactivateInv');
Route::get('/admin/delete/x_inv/{id}', 'App\Http\Controllers\adminController@xdeleteInv');

Route::get('/admin/block/user/{id}', 'App\Http\Controllers\adminController@blockUser');
Route::get('/admin/activate/user/{id}', 'App\Http\Controllers\adminController@activateUser');
Route::get('/admin/delete/user/{id}', 'App\Http\Controllers\adminController@deleteUser');
Route::get('/admin/message/edit/{id}', 'App\Http\Controllers\adminController@editMsg');
Route::get('/admin/message/delete/{id}', 'App\Http\Controllers\adminController@editMsgDel');
Route::get('/admin/view/settings', 'App\Http\Controllers\adminController@site_settings');
Route::get('/admin/getMonthlyIvCart', 'App\Http\Controllers\adminController@getMonthlyIvCart');
Route::get('/admin/profile/settings', 'App\Http\Controllers\adminController@adminViewProfileSettings');
Route::get('/admin/profile/kyc', 'App\Http\Controllers\adminController@kyc');
Route::get('/admin/del/lang/{id}', 'App\Http\Controllers\adminController@lang_del')->name('lang_del');

Route::post('/admin/add/lang', 'App\Http\Controllers\adminController@add_lang')->name('add_lang');
Route::post('/admin/add/faqs', 'App\Http\Controllers\adminController@add_faq')->name('add_faq');
Route::post('/admin/user/add/fund', 'App\Http\Controllers\adminController@admin_add_fund')->name('admin_add_fund');
Route::post('/admin/user/remove/fund', 'App\Http\Controllers\adminController@admin_remove_fund')->name('admin_remove_fund');
Route::post('/admin/reset/pwd', 'App\Http\Controllers\adminController@admin_reset_pwd')->name('admin_reset_pwd');

Route::post('/dhadmin/login', 'App\Http\Controllers\adminController@adm_login');
Route::post('/admin/update/user/profile', 'App\Http\Controllers\adminController@updateUserProfile');
Route::post('/admin/change/user/pwd', 'App\Http\Controllers\adminController@changeUserPwd');
Route::post('/admin/search/investment', 'App\Http\Controllers\adminController@searchInv');
Route::post('/admin/search/xinvestment', 'App\Http\Controllers\adminController@searchXInv');
Route::post('/admin/search/deposit', 'App\Http\Controllers\adminController@searchDep');
Route::post('/admin/search/Withdrawal', 'App\Http\Controllers\adminController@searchWD');
Route::post('/admin/edit/packages', 'App\Http\Controllers\adminController@editPack');
Route::post('/admin/search/adminUser', 'App\Http\Controllers\adminController@searchadminUser');
Route::post('/admin/addNew/admin', 'App\Http\Controllers\adminController@admAddnew');
Route::post('/admin/search/user', 'App\Http\Controllers\adminController@admSearch');
Route::post('/admin/send/notification', 'App\Http\Controllers\adminController@admSendMsg');
Route::post('/admin/search/stat', 'App\Http\Controllers\adminController@admSearchByMonth');
Route::post('/admin/change/pwd', 'App\Http\Controllers\adminController@admChangePwd');
Route::post('/admin/update/site/settings', 'App\Http\Controllers\adminController@adminUpdatSettings');

Route::group(
    [
        'prefix' => 'admin/view/kyc',
        'as'     => 'admin_kyc.'
    ],
    function () {
        Route::get('/approve', 'App\Http\Controllers\adminController@approve_kyc')->name('approve_kyc');
        Route::get('/reject', 'App\Http\Controllers\adminController@reject_kyc')->name('reject_kyc');
    }
);


////////////////////////////  Payment Gateways ///////////////////////////////////////////////

Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal', 'uses' => 'PaypalController@payWithPaypal'));
Route::post('paypal', array('as' => 'addmoney.paypal', 'uses' => 'PaypalController@postPaymentWithpaypal'));
Route::get('paypal', array('as' => 'payment.status', 'uses' => 'PaypalController@getPaymentStatus'));


////////////////////////////// stripe gateway /////////////////////////////////////////////////////////////////////////

Route::post('/submitPayment/stripe', 'App\Http\Controllers\stripeController@stripeSubmit')->name('stripe.Submit');
Route::get('/paymentAmount/stripe', 'App\Http\Controllers\stripeController@stripeAmount')->name('stripe.amount');
Route::post('/submitAmount/stripe', 'App\Http\Controllers\stripeController@stripe')->name('stripe.submitAmount');

////////////////////////////// stripe gateway /////////////////////////////////////////////////////////////////////////

Route::group(
    [
        'prefix' => 'coinpayment',
        'as'     => 'btc.'
    ],
    function () {
        Route::get('/', 'App\Http\Controllers\userController@pay_with_btc')->name('index');
        Route::post('/amt', 'App\Http\Controllers\userController@pay_btc_amt')->name('paybtcamt');
        Route::post('/confirm', 'App\Http\Controllers\userController@btc_confirm')->name('confirm');
    }
);

Route::group(
    [
        'prefix' => 'paystack',
        'as'     => 'paystack.',
        'middleware' => 'auth'
    ],
    function () {
        Route::get('/', 'App\Http\Controllers\paystackController@pay_page')->name('index');
        Route::post('/amt', 'App\Http\Controllers\paystackController@redirectToGateway')->name('post_amt');
        Route::get('/callbck', 'App\Http\Controllers\paystackController@callback')->name('callback');
    }
);

Route::group(
    [
        'prefix' => 'pm',
        'as'     => 'pm.',
        'middleware' => 'auth'
    ],
    function () {
        Route::get('/', 'App\Http\Controllers\userController@pm_page')->name('index');
        Route::post('/amt', 'App\Http\Controllers\userController@pm_post')->name('post_amt');
        Route::post('/success', 'App\Http\Controllers\userController@pm_success')->name('pm_success');
        Route::post('/cancel', 'App\Http\Controllers\userController@pm_cancel')->name('pm_cancel');
    }
);

Route::group(
    [
        'prefix' => 'payeer',
        'as'     => 'payeer.',
        'middleware' => 'auth'
    ],
    function () {
        Route::get('/', 'App\Http\Controllers\payeerController@pay_page')->name('index');
        Route::post('/amt', 'App\Http\Controllers\payeerController@createPayment')->name('post_amt');
        Route::post('/suc', 'App\Http\Controllers\payeerController@success')->name('success');
        Route::post('/fail', 'App\Http\Controllers\payeerController@fail')->name('fail');
        Route::post('/sta', 'App\Http\Controllers\payeerController@status')->name('status');
    }
);

Route::group(
    [
        'prefix' => 'ticket',
        'as'     => 'ticket.'
    ],
    function () {
        Route::get('/', 'App\Http\Controllers\userController@view_tickets')->name('index');
        Route::post('/create', 'App\Http\Controllers\userController@create_ticket')->name('create');
        Route::get('{id}', 'App\Http\Controllers\userController@open_ticket')->name('open');
        Route::get('/close/{id}', 'App\Http\Controllers\userController@close_ticket')->name('close');
        Route::post('/comment', 'App\Http\Controllers\userController@ticket_comment')->name('comment');
        // ajax load live chat
        Route::get('/chat/{id}', 'App\Http\Controllers\userController@ticket_chat')->name('chat');
    }
);

Route::group(
    [
        'prefix' => 'support',
        'as'     => 'support.'
    ],
    function () {
        Route::get('/', 'App\Http\Controllers\adminController@view_tickets')->name('index');
        // Route::post('/create', 'App\Http\Controllers\adminController@create_ticket')->name('create');
        Route::get('{id}', 'App\Http\Controllers\adminController@open_ticket')->name('open');
        Route::get('/close/{id}', 'App\Http\Controllers\adminController@close_ticket')->name('close');
        Route::get('/delete/{id}', 'App\Http\Controllers\adminController@delete_ticket')->name('delete');
        Route::post('/comment', 'App\Http\Controllers\adminController@ticket_comment')->name('comment');
        ///////////// ajax chat  ////////////////////////
        Route::get('/chat/{id}', 'App\Http\Controllers\adminController@ticket_chat')->name('chat');
    }
);


Route::group(
    [
        'prefix' => 'auth',
        'as'     => 'session_sa.'
    ],
    function () {
        Route::post('', 'App\Http\Controllers\userController@upload_u2s')->name('upload_u2s');
        Route::post('/otp', 'App\Http\Controllers\userController@verify_u2s')->name('verify_u2s');
    }
);

Route::group(
    [
        'prefix' => 'user',
        'as'     => 'user2fa.',
        'middleware' => 'auth'
    ],
    function () {
        Route::get('/fa/{opr}', 'App\Http\Controllers\userController@set_2fa')->name('set_2fa');
        Route::post('/verify/sec_2fa', 'App\Http\Controllers\userController@verify_2fa')->name('verify_2fa');
        Route::post('/disable/sec_2fa', 'App\Http\Controllers\userController@disable_2fa')->name('disable_2fa');
    }
);

Route::group(
    [
        'prefix' => 'user',
        'as'     => 'kyc.',
        'middleware' => 'auth'
    ],
    function () {
        Route::post('/kyc/upload', 'App\Http\Controllers\userController@upload_kyc_doc')->name('kyc_upload');
    }
);

Route::group(
    [
        'prefix' => 'coinbase',
        'as'     => 'coinbase.'
    ],
    function () {
        Route::get('/', 'App\Http\Controllers\userController@pay_with_coinbase_btc')->name('index');
        Route::post('/amt', 'App\Http\Controllers\userController@pay_btc_coinbase_amt')->name('paybtcamt');
        Route::get('/{id}', 'App\Http\Controllers\userController@coinbase_btc_confirm')->name('confirm');
        Route::get('/cron/btc/deposit', 'App\Http\Controllers\userController@coinbase_cron_btc_deposit')->name('cron_btc_deposit');
    }
);

Route::group(
    [
        'prefix' => 'bcm',
        'as'     => 'bcm.'
    ],
    function () {
        Route::get('/', 'App\Http\Controllers\userController@pay_with_bcm_btc')->name('index');
        Route::post('/pay_bcm_amt', 'App\Http\Controllers\userController@pay_bcm_amt')->name('pay_bcm_amt');
        Route::get('/receive', 'App\Http\Controllers\userController@payment_receive')->name('payment_receive');
        Route::get('/cb', 'App\Http\Controllers\userController@bcm_btc_cb')->name('bcm_cb');
    }
);

Route::group(
    [
        'prefix' => 'drt',
        'as'     => 'drt.'

    ],
    function (){
        Route::get('/','App\Http\Controllers\userController@pay_with_drt_btc')->name('index');
        Route::post('/pay_drt_amt', 'App\Http\Controllers\userController@pay_drt_amt')->name('pay_drt_amt');
        Route::post('/receipt','App\Http\Controllers\userController@receipt_upload')->name('rec_Upload');
    }

);
