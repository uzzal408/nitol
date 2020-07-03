<?php

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



//Route::get('/categories', function () {
//    return view('admin.category.categories');
//});
//Route::get('/',[
//    'uses'=>'HomeController@index',
//    'as'=>'/'
//]);


Auth::routes();


Route::get('/admin-home', 'OrderController@manageOrderInfo')->name('admin.home');


//****************************Employee management***************************************//


Route::get('/all-employees',[
    'uses'=>'EmployeeController@index',
    'as'=>'employees'
]);
Route::post('/employee/save',[
    'uses'=>'EmployeeController@saveEmployee',
    'as'=>'save-employee'
]);
Route::get('/employee/edit/{id}',[
    'uses'=>'EmployeeController@editEmployee',
    'as'=>'edit-employee'
]);
Route::post('/employee/update',[
    'uses'=>'EmployeeController@updateEmployee',
    'as'=>'update-employee'
]);
Route::get('employee/delete/{id}',[
    'uses'=>'EmployeeController@deleteEmployee',
    'as'=>'delete-employee'
]);


//****************************Category management***************************************//


Route::get('/all-categories',[
    'uses'=>'CategoryController@index',
    'as'=>'categories'
]);
Route::post('/category/save',[
    'uses'=>'CategoryController@saveCategory',
    'as'=>'save-category'
]);
Route::get('/category/edit/{id}',[
    'uses'=>'CategoryController@editCategory',
    'as'=>'edit-category'
]);
Route::post('/category/update',[
    'uses'=>'CategoryController@updateCategory',
    'as'=>'update-category'
]);
Route::get('category/delete/{id}',[
    'uses'=>'CategoryController@deleteCategory',
    'as'=>'delete-category'
]);

//****************************Adminview management***************************************//

Route::get('/corporate/sales',      'AdminviewController@corporateSales');
Route::get('/customers',            'AdminviewController@customers');
Route::get('/product/review',       'AdminviewController@productReview');
Route::get('/reviewDelete/{id}',    'AdminviewController@reviewDelete');
Route::get('/customerDelete/{id}',  'AdminviewController@customerDelete');
Route::get('/corporateSalesDelete/{id}',  'AdminviewController@corporateSalesDelete');

//****************************Ingredient management***************************************//


Route::get('/all-ingredients',[
    'uses'=>'IngredientController@index',
    'as'=>'ingredients'
]);
Route::post('/ingredient/save',[
    'uses'=>'IngredientController@saveIngredient',
    'as'=>'save-ingredient'
]);
Route::get('/ingredient/edit/{id}',[
    'uses'=>'IngredientController@editIngredient',
    'as'=>'edit-ingredient'
]);
Route::post('/ingredient/update',[
    'uses'=>'IngredientController@updateIngredient',
    'as'=>'update-ingredient'
]);
Route::get('/ingredient/delete/{id}/{is_active}',[
    'uses'=>'IngredientController@deleteIngredient',
    'as'=>'delete-ingredient'
]);


Route::get('/all-products',[
    'uses'=>'ProductController@index',
    'as'=>'all-products'
]);
Route::get('/product/new',[
    'uses'=>'ProductController@newProduct',
    'as'=>'new-product'
]);
Route::post('/product/save',[
    'uses'=>'ProductController@saveProduct',
    'as'=>'save-product'
]);
Route::get('/product/edit/{id}',[
    'uses'=>'ProductController@editProduct',
    'as'=>'edit-product'
]);
Route::post('/product/update',[
    'uses'=>'ProductController@updateProduct',
    'as'=>'update-product'
]);
Route::get('product/delete/{id}',[
    'uses'=>'ProductController@deleteProduct',
    'as'=>'delete-product'
]);
Route::get('product/publication/{id}',[
    'uses'=>'ProductController@publication',
    'as'=>'publication-product'
]);


Route::get('/allProducts/{id}',            'ProductTypeController@index');



//****************************Product management***************************************//

Route::get('/',[
    'uses'=>'NitolElectronicsController@index',
    'as'=>'/'
]);
Route::get('/home',[
    'uses'=>'NitolElectronicsController@index',
    'as'=>'home'
]);

Route::get('/product/{id}',[
    'uses'=>'NitolElectronicsController@showProduct',
    'as'=>'show-product'
]);

Route::get('/products/{id?}',[
    'uses'=>'NitolElectronicsController@allProducts',
    'as'=>'products'
]);

Route::get('/search-location/{type}',[
    'uses'=>'NitolElectronicsController@detectLocation',
    'as'=>'search-location'
]);

Route::post('/searchProduct',  'NitolElectronicsController@searchProduct');

Route::get('/bestSellerProduct/{id}',  'NitolElectronicsController@bestSellerProduct');


Route::get('/location/save/{location}/{store}/{mode}',[
    'uses'=>'NitolElectronicsController@saveLocation',
    'as'=>'save-location'
]);

Route::get('/all-stores/{storeTags}',[
    'uses'=>'NitolElectronicsController@allStores',
    'as'=>'stores'
]);

Route::get('/stores/save/{storeID}',[
    'uses'=>'NitolElectronicsController@saveStore',
    'as'=>'save-store'
]);


Route::get('/category-product/{id}',[
    'uses'=>'NitolElectronicsController@categoryProduct',
    'as'=>'category-product'
]);

Route::any('/price/priceFilter/{id}/{colorId?}',         'NitolElectronicsController@priceFilter');

Route::get('/ac_ton_calculation',[
    'uses'=>'NitolElectronicsController@acTonCalculation',
    'as'=>'acTonCalculation'
]);

Route::post('/ac_ton_calculation/recommend',[
    'uses'=>'NitolElectronicsController@tonCalculationRecommend',
    'as'=>'tonCalculationRecommend'
]);


Route::get('/customer/orderDetails/{id}', 'CustomerLoginController@orderDetails');



//****************************Cart management***************************************//


Route::post('cart/add-to-card',[
    'uses'=>'CartController@addToCard',
    'as'=>'add-to-card'
]);

Route::post('cart/update-cart-product',[
    'uses'=>'CartController@updateCard',
    'as'=>'update-cart-product'
]);

Route::post('cart/update/{id}',[
    'uses'=>'CartController@updateCardAjax',
    'as'=>'update-cart'
]);

Route::post('cart/delete-cart-product/{id}',[
    'uses'=>'CartController@deleteCart',
    'as'=>'delete-cart-product'
]);

Route::get('cart/show',[
    'uses'=>'CartController@showCart',
    'as'=>'cart'
]);
//Cutomer

Route::post('/productReview/store/{id}',        'CustomerFrontController@reviewStore');
Route::get('/cardDelete/{id}/{product_id?}',    'CustomerFrontController@cardDelete');
Route::get('/customer/customerInfomation',      'CustomerFrontController@customerInfomation');
Route::get('/customerProfile/{id}',             'CustomerFrontController@customerProfile');
Route::get('/customerProfileEdit/{id}',         'CustomerFrontController@customerProfileEdit');
Route::post('/customerProfileupdate',[
    'uses'=>'CustomerFrontController@customerProfileupdate',
    'as'=>'customerProfileupdate'
]);

Route::get('/customer/orderDetails/{id}', 'CustomerFrontController@orderDetails');

//****************************Checkout management***************************************//

Route::get('checkout',[
    'uses'=>'CheckoutController@index',
    'as'=>'checkout'
]);

Route::post('/paymentMethod',           'CheckoutController@paymentMethod');

//Route::post('/success',                  'CheckoutController@success');

Route::post('/order/save',[
    'uses'=>'CheckoutController@saveOrderInfo',
    'as'=>'save-order'
]);

Route::get('/send-mail',[
    'uses'=>'CheckoutController@sendMail',
    'as'=>'send-mail'
]);

Route::get('/checkoutProceed',    'CheckoutController@checkoutProceed');








//****************************Static Page management***************************************//



Route::get('/about/us',[
    'uses'=>'NitolElectronicsController@aboutUs',
    'as'=>'about-us'
]);
Route::get('/privacy',[
    'uses'=>'NitolElectronicsController@privacy',
    'as'=>'privacy'
]);


Route::get('/store/locator/{id?}',      'NitolElectronicsController@storeLocator');
Route::get('/dealer/locator/{id?}',     'NitolElectronicsController@dealerLocator');
Route::get('/serviceCenter/locator',    'NitolElectronicsController@serviceCenter');
Route::get('/corporateInfo',            'NitolElectronicsController@corporateInfo');
Route::get('/companyOverView',          'NitolElectronicsController@companyOverView');

Route::post('/corporate/sales/store',[
    'uses'=>'NitolElectronicsController@corporateInfoStore',
    'as'=>'corporateSalesStore'
]);




Route::get('/termrAndConditions',       'NitolElectronicsController@returnsContact');
Route::get('/warrantyPolicy',           'NitolElectronicsController@warrantyPolicy');



Route::get('/contactUs',[
    'uses'=>'NitolElectronicsController@contactUs',
    'as'=>'contact-us'
]);

Route::post('/customerComment',[
    'uses'=>'NitolElectronicsController@customerComments',
    'as'=>'customerComment'
]);



Route::get('checkout/complete-order',[
    'uses'=>'CheckoutController@completeOrder',
    'as'=>'complete-order'
]);

////////////////////////////////OrderController//////////////////////////////////


Route::get('/manage-order', [
    'uses'  =>  'OrderController@manageOrderInfo',
    'as'    =>  'manage-order'
]);

Route::get('/edit-order-status/{id}/{status}', [
    'uses'  =>  'OrderController@editOrderStatus',
    'as'    =>  'edit-order-status'
]);

Route::post('/delete/order', [
    'uses'  =>  'OrderController@deleteOrder',
    'as'    =>  'delete-order'
]);


Route::get('/view-order-details/{id}', [
    'uses'  =>  'OrderController@viewOrderInfo',
    'as'    =>  'view-order-details'
]);



#SSLCOMMERZ

// Route::post('/pay', 'SslCommerzPaymentController@index');
// Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'CheckoutController@success');
Route::post('/fail', 'CheckoutController@fail');
Route::post('/cancel', 'CheckoutController@cancel');
Route::post('/ipn', 'CheckoutController@ipn');

#SETTINGS
//Brotuiar

Route::get('admin/settings/{name}','SettingController@edit')->name('admin.settings.edit');
Route::post('admin/settings','SettingController@upload')->name('admin.settings.upload');

Route::get('brotuiar/download','NitolElectronicsController@DownloadBrotuiar')->name('front.download.brotuiar');

//Export Excel
Route::get('exports/customer/information','CustomerController@export')->name('admin.exports.customer-information');

Route::get('exports/corporate/sales','CustomerController@exportCorporate')->name('admin.exports.corporate-sale');
Route::get('exports/customer/review','CustomerController@exportReview')->name('admin.exports.review');

//Coupon
Route::get('/all-coupons',[
    'uses'=>'CouponController@index',
    'as'=>'admin.coupons.all'
]);
Route::post('/coupon/save',[
    'uses'=>'CouponController@store',
    'as'=>'admin.coupons.store'
]);
Route::get('/coupon/edit/{id}',[
    'uses'=>'CouponController@edit',
    'as'=>'admin.coupons.edit'
]);
Route::post('/coupon/update',[
    'uses'=>'CouponController@update',
    'as'=>'admin.coupons.update'
]);
Route::get('/coupon/delete/{id}',[
    'uses'=>'CouponController@delete',
    'as'=>'admin.coupons.delete'
]);
Route::post('/check-coupon-discount',[
    'uses'=>'CheckoutController@checkCouponDiscount',
    'as'=>'front.coupon.check'
]);
//Customer Login

Route::get('customer/login','CustomerLoginController@showLoginForm')->name('customer.login-form');
Route::get('customer/registration','CustomerRegistrationController@registrationForm')->name('customer.registration-form');
Route::post('customer/registration/create','CustomerRegistrationController@create')->name('customer.registration-create');
Route::post('customer/login','CustomerLoginController@login')->name('customer.login');
Route::get('customer/logout','CustomerLoginController@logout')->name('customer.logout');

//Socialite
Route::get('redirect/{provider}', 'SocialLoginController@redirect');
Route::get('login/{provider}/callback','SocialLoginController@Callback');

//Clear By artisan

Route::get('cache-clear','ClearController@cacheClear');
Route::get('config-clear','ClearController@configClear');



