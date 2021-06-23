<?php

use App\Parking;
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
/*register*/
Route::get('/register','UsersController@user');
Route::post('/register','UsersController@registerSave');

/*login*/
Route::get('/login','UsersController@login');
Route::post('/login','UsersController@submitlogin');

/*forgetpassword*/
Route::get('/forgetpassword','UsersController@forgetpassword');
Route::post('/password/sendOTP','UsersController@sendOTP')->name('sendOTP');
Route::post('/password/otp/verify','UsersController@verifyOTP')->name('verifyOTP');
Route::post('/password/set/new','UsersController@resetPassword');

Route::group(['middleware' => 'checkAuth'],function(){

	/*changepassword*/
	Route::get('/password/change','UsersController@changePwd');
	Route::post('/password/change','UsersController@changePassword');

	/*profileupdate*/
	Route::get('/profile/update','UsersController@profileUpdate');
	Route::post('/profile/update ','UsersController@update');
	Route::post('/pofile/image','UsersController@profileImage');
	Route::get('menubar','UsersController@userImage');

	Route::get('/user/review','UsersController@userReview');
	Route::post('/add/review','UsersController@addReview');

	/*addparking by vendor*/
	Route::get('/add/parking','VendorsController@addParking');

	Route::post('/add/parking','VendorsController@parkingDetailsSubmit');
	Route::post('/add/parking/details','VendorsController@parkingDetail');
	Route::post('/add/image','VendorsController@saveImage');

	Route::get('/features','UsersController@features');
	Route::get('/how/it/work','UsersController@work');

	Route::get('/review','UsersController@review');
// middleware over
});

Route::get('/usersorder','UsersController@orders');

Route::get('/get/direction/{id}','UsersController@getDirection');
Route::get('/direction','UsersController@Direction');

Route::get('/update/parking/{id}','VendorsController@updateParking');
Route::post('/update/parking','VendorsController@update');


Route::get('displayfloors','VendorsController@floorsDisplay');

Route::get('/customer','VendorsController@displaysearch');
Route::post('customer','VendorsController@map');

Route::get('delete/{id}','VendorsController@DeleteRecords');

Route::get('displayimage','VendorsController@displayimage');

Route::get('DisplayParkingDetails','VendorsController@DisplayParkingDetails');


Route::get('/', 'UsersController@index_page')->name('home');

Route::get('carwash','UsersController@carwash');
Route::get('/bill','UsersController@generate');
Route::get('/bill-test','UsersController@generatePDF');
/*logout*/
Route::get('/logout',function(){
	session()->forget('USER');
	session()->forget('VENDOR');
	return Redirect('/');
});

Route::post('/parking/get','ParkingController@getParkings');
Route::get('/parking/details/{id} ','ParkingController@parkingDetails');
Route::get('/services/{id} ','ParkingController@services');


Route::get('/get/parking/{id}','ParkingController@parkingFloors');

Route::post('/get/parking','ParkingController@Fparking');
Route::get('/parkingslots','ParkingController@dispalySlots');

Route::get('/user/booking/{id}','UsersController@userbooking')->name('booking');


Route::post('/user/booking','UsersController@booking');

Route::get('/floors','VendorsController@floorsDetail');

Route::get('/add/slots/{id}','VendorsController@addSlots');
Route::post('/add/slots','VendorsController@Slots');
Route::get('/add/feature/{id}','VendorsController@feature');
Route::post('/add/feature','VendorsController@addFeature');
Route::get('/contact/info/admin','AdminController@viewContact');
Route::get('delete/contact/{id}','AdminController@delContact');

Route::get('/forgetpwd','UsersController@forgetpwd');
Route::get('/notification','VendorsController@notification');

Route::get('/forgetpwd','UsersController@forgetpwd');
Route::get('/my/parking/orders/{id}','VendorsController@myParkingOrders');
Route::get('/view/feature/{id}','VendorsController@viewFeature');

Route::get('/qrcode','VendorsController@qrcode');

Route::post('vendor/search/parking','VendorsController@vendorSearch');
Route::post('vendor/search/orders','VendorsController@vendorSearchOrders');
Route::get('delete/vendor/order/{id}','VendorsController@deleteOrders');
Route::get('/delete/feature/{id}','VendorsController@deleteFeature');


/*Admin routs*/
Route::get('dashboard','AdminController@admin');
Route::get('/chart','AdminController@chart');
Route::get('/profile','AdminController@profile');
Route::post('/profileUp','AdminController@ProfileUp');
Route::post('/parking/image','AdminController@profileImage');


Route::get('user','AdminController@user');
Route::post('/search/user','AdminController@searchUser');
Route::post('/sort/user','AdminController@sortUser');

Route::post('/search/contact','AdminController@searchContact');
Route::post('/sort/contact','AdminController@sortContact');

Route::get('delete/user/{id}','AdminController@DeleteUser');

Route::get('/show/parking/{id}','AdminController@viewParking');
Route::get('/show/orders/{id}','AdminController@viewOrders');

Route::post('/search/parking','AdminController@searchParking');
Route::get('/delete/parking/{id}','AdminController@deleteParking');
Route::get('parking','AdminController@parking');
Route::post('/sort/parking','AdminController@sortParking');
Route::get('/delete/order/{id}','AdminController@deleteOrder');

Route::get('vendor','AdminController@vendor');
Route::post('vendor','AdminController@searchVendor');
Route::get('/delete/vendor/{id}','AdminController@deleteVendor');
Route::post('/sort/vendor','AdminController@sortVendor');

Route::get('adminchangepwd','AdminController@changePassword');
Route::post('adminchangepwd','AdminController@changePwd');

Route::get('/orders','AdminController@orders');
Route::post('/sort/orders','AdminController@sortOrders');
Route::post('/search/orders','AdminController@SearchOrders');


Route::get('/order/payment/cancel','UsersController@paymentCencel');
Route::get('/order/payment/success','UsersController@paymentSuccess');

Route::get('/contact','UsersController@contact');
Route::post('/contact/info','UsersController@contactInfo');
Route::get('/aboutus','UsersController@aboutUs');
Route::get('/notificationparking','AdminController@notifyParking');
Route::get('/delete/notification/{id}','AdminController@deleteRecord');
Route::get('/delete/parking/{id}','AdminController@deleteParkings');


?>
