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

//Dropdown
Route::get('dropdown', 'DropdownController@index');
Route::get('getCountries', 'DropdownController@getCountries');
Route::get('getStates/{country_id}', 'DropdownController@getStates');
Route::get('getCities/{state_id}', 'DropdownController@getCities');
//End Dropdown

//Banks
Route::resource('/banks', 'BankController');
//END Bank

//Accounts
Route::resource('/accounts', 'AccountController');
//End Accounts

//Products
Route::resource('/products', 'ProductController');
//END Products

Route::resource('invoices', 'InvoiceController');

//Webstore
# Default route when accessing the store
Route::get('store', 'WebstoreController@index');
Route::get('store/{product}/buynow', 'WebstoreController@buyNow');
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

//Payment Order
Route::get('pay', 'PayOrderController@pay')->name('pay');

Route::get('payment-status', 'PayOrderController@paymentStatus')->name('payment-status');
// Route::get('payment-status-paypal', 'PayOrderController@paymentStatus')->name('payment-status');
Route::get('payment-callback', 'PayOrderController@callback')->name('payment-callback');
//END Payment Order

//Orders
Route::get('orders', 'OrderController@index');
// Route::get('orders/checkout', 'OrderController@checkout');
Route::get('orders/delivered', 'OrderController@delivered');
//END Orders


Route::group(['prefix'=>'programs'], function()
{
	//Zes
	Route::get('/zes', 'ZesController@index');
	Route::get('/zes/create-node', 'ZesController@createNode');
	Route::get('/zes/{id}/create-child', 'ZesController@createChild');
	Route::get('/zes/{id}', 'ZesController@show');
	Route::get('zes/getAncestors/{id}/{depth?}', 'ZesController@getAncestors');
	Route::get('zes/checkAncestors2/{id}', 'ZesController@checkAncestors2');

	//End Zes
	//Zeb
	Route::get('/zeb', 'ZebController@index');
	Route::get('/zeb/create-node', 'ZebController@createNode');
	Route::get('/zeb/{id}/create-child', 'ZebController@createChild');
	Route::get('/zeb/{id}', 'ZebController@show');
	Route::get('zeb/getAncestors/{id}/{depth?}', 'ZebController@getAncestors');
	Route::get('zeb/checkAncestors2/{id}', 'ZebController@checkAncestors2');
	//End Zeb
});
//END Program

//Wallets
Route::get('wallets/mywallet', 'WalletController@mywallet');
Route::get('wallet/withdraws', 'WalletController@withdraws');
Route::get('wallet/request_withdrawal', 'WalletController@requestWithdrawal');
Route::post('wallet/request_withdrawal', 'WalletController@postRequestWithdrawal');
Route::get('wallet/transfer', 'WalletController@transfer');
Route::post('wallet/transfer', 'WalletController@postTransfer');
//Route::post('wallet/withraw', 'WalletController@withraw');
//END Wallets

// Withdraw
Route::get('withdraws', 'WithdrawController@index');
Route::get('withdraws/{id}/edit', 'WithdrawController@edit');
Route::get('withdraws/{id}', 'WithdrawController@show');
Route::put('withdraws/{id}', 'WithdrawController@update');
// END Withdraw

// Transactions
Route::get('transactions', 'TransactionController@index');
// END Transactions