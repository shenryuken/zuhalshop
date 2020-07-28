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
})->name('/');



// Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::post('notifyme', 'NotifymeController@notifyme');

//Banks
Route::get('banks', 'BankController@index');
Route::get('banks/create', 'BankController@create');
Route::post('banks', 'BankController@store')->name('banks');
Route::get('banks/{id}/edit', 'BankController@edit');
Route::put('banks/{id}', 'BankController@update');
Route::delete('banks/{id}', 'BankController@destroy');
//END Bank
Route::get('members', 'UserController@index');


//Referral
Route::get('/referral-link', 'HomeController@referral');
Route::get('/referrals', 'HomeController@referrals');
Route::get('/referrer', 'HomeController@referrer');
//END Referral
//Profiles
Route::get('profiles/create', 'ProfileController@create');
Route::get('profiles/{id}', 'ProfileController@show');
Route::post('profiles', 'ProfileController@store');
Route::get('profiles/{id}/edit', 'ProfileController@edit');
Route::put('profiles/{id}', 'ProfileController@update');
Route::post('profiles/about-me', 'ProfileController@aboutMe');
Route::post('profiles/inline-update', 'ProfileController@inlineUpdate');
Route::get('profiles/account/create', 'AccountController@create');
Route::post('profiles/account', 'AccountController@store');
//END Profiles
//Wallets
Route::get('wallets/mywallet', 'WalletController@mywallet');
Route::get('wallet/withdraws', 'WalletController@withdraws');
Route::get('wallet/request_withdrawal', 'WalletController@requestWithdrawal');
Route::post('wallet/request_withdrawal', 'WalletController@postRequestWithdrawal');
//Route::post('wallet/withraw', 'WalletController@withraw');
//END Wallets

// Withdraw
Route::get('withdraws', 'WithdrawController@index');
Route::get('withdraws/{id}/edit', 'WithdrawController@edit');
Route::get('withdraws/{id}', 'WithdrawController@show');
Route::put('withdraws/{id}', 'WithdrawController@update');
// END Withdraw

//Products

Route::get('products/create', 'ProductController@create');
Route::get('products/cards', 'ProductController@cards');
Route::get('products', 'ProductController@index');
Route::get('products/{id}/edit', 'ProductController@edit');
Route::post('products', 'ProductController@store')->name('products');
Route::put('products/{id}', 'ProductController@update');
Route::get('products/{id}', 'ProductController@show');
Route::get('products/{id}/details', 'ProductController@details')->name('product-details');
Route::get('products/buynow/{id}', 'ProductController@buyNow');
Route::get('products/{id}/promo{ref?}', 'ProductController@promolink');
Route::delete('products/{id}', 'ProductController@destroy');
// Route::get('product/payments', 'PaymentController@payment');

//END Products
//Invoices
Route::get('invoices/checkout', 'InvoiceController@checkout');
//END Invoice

//Payment (Paypal)
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('buyNow/{id}', 'PayPalController@payment')->name('buynow');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');
Route::get('payment/fail', 'PayPalController@fail')->name('payment.fail');
//END Payment (Paypal)

//Orders
Route::get('orders', 'OrderController@index');
Route::get('orders/checkout', 'OrderController@checkout');
Route::get('orders/delivered', 'OrderController@delivered');
//END Orders

//Webstore
# Default route when accessing the store
Route::get('store', 'WebstoreController@index');
# Adding a product to the shopping cart
Route::get('add/{product}', 'WebstoreController@addToCart')->name('add');
# Removing an product from the shopping cart
Route::get('/remove/{productId}', 'WebstoreController@removeProductFromCart')->name('remove');
# Clearing all products from the shopping cart
Route::get('/empty', 'WebstoreController@destroyCart')->name('empty');
# PayPal checkout
Route::get('store/mycart', 'WebstoreController@mycart')->name('mycart');
Route::get('store/checkout', 'WebstoreController@checkout')->name('checkout');
# PayPal status callback
Route::get('status', 'PaypalController@getPaymentStatus');
//END Webstore

//Address
Route::get('address/create', 'AddressController@create');
Route::post('address', 'AddressController@store');
Route::get('address/{id}/edit', 'AddressController@edit');
Route::put('address/{id}', 'AddressController@update');
//END Address

//Dropdown
Route::get('dropdown', 'DropdownController@index');
Route::get('getCountries', 'DropdownController@getCountries');
Route::get('getStates/{country_id}', 'DropdownController@getStates');
Route::get('getCities/{state_id}', 'DropdownController@getCities');
//End Dropdown