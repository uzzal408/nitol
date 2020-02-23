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

//Route::get('/home', 'HomeController@index')->name('/home');
Route::get('/home', 'OrderController@manageOrderInfo')->name('/home');


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

//****************************Addons management***************************************//


Route::get('/all-addons',[
    'uses'=>'AddonController@index',
    'as'=>'addons'
]);
Route::post('/addon/save',[
    'uses'=>'AddonController@saveAddon',
    'as'=>'save-addon'
]);
Route::get('/addon/edit/{id}',[
    'uses'=>'AddonController@editAddon',
    'as'=>'edit-addon'
]);
Route::post('/addon/update',[
    'uses'=>'AddonController@updateAddon',
    'as'=>'update-addon'
]);
Route::get('/addon/delete/{id}/{is_active}',[
    'uses'=>'AddonController@deleteAddon',
    'as'=>'delete-addon'
]);

//****************************Product management***************************************//

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


//////////// Product Type ////////////
//Route::get('/applicantLogin/store',            'ApplicantLoginController@store');

Route::get('/allProducts/{id}',            'ProductTypeController@index');

// Route::get('/all-products/{id}',[
//     'uses'=>'ProductTypeController@index',
//     'as'=>'products-type'
// ]);


//****************************Product management***************************************//

Route::get('/',[
    'uses'=>'NitolElectronicsController@index',
    'as'=>'/'
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

//Route::any('/customer/customerLogin',         'CustomerLoginController@customerLogin');

Route::get('/customerLogin',                    'CustomerLoginController@login');
Route::get('/customer/register',                'CustomerLoginController@register');
Route::post('/customer/authenticate',           'CustomerLoginController@authenticate');
Route::post('/customerLogin/store',             'CustomerLoginController@store');
Route::get('/customer/request',                 'CustomerLoginController@request');
Route::get('/customer/logout',                  'CustomerLoginController@logout');
Route::post('/productReview/store/{id}',        'CustomerLoginController@reviewStore');
Route::get('/cardDelete/{id}/{product_id?}',    'CustomerLoginController@cardDelete');
Route::get('/customer/customerInfomation',      'CustomerLoginController@customerInfomation');
Route::get('/customerProfile/{id}',             'CustomerLoginController@customerProfile');
Route::get('/customerProfileEdit/{id}',         'CustomerLoginController@customerProfileEdit');
Route::post('/customerProfileupdate',[
    'uses'=>'CustomerLoginController@customerProfileupdate',
    'as'=>'customerProfileupdate'
]);

Route::get('/customer/orderDetails/{id}', 'CustomerLoginController@orderDetails');



// Route::get('/product-details/{id}',[
//     'uses'=>'PizzaHutController@ajaxProductDetails',
//     'as'=>'product-details'
// ]);

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




//****************************Customer management***************************************//

Route::get('/customer/registration/form',[
    'uses'=>'CustomerController@customerRegistrationForm',
    'as'=>'register-customer'
]);
Route::post('/customer/otp/send',[
    'uses'=>'CustomerController@sendOtpToCustomer',
    'as'=>'send-otp-to-customer'
]);

Route::get('/customer/otp/verification',[
    'uses'=>'CustomerController@verifyCustomerOTP',
    'as'=>'verify-customer-otp'
]);

Route::post('/customer/save',[
    'uses'=>'CustomerController@saveCustomer',
    'as'=>'save-customer'
]);

//Route::get('/customer/track/registration',[
//    'uses'=>'CustomerController@trackRegistration',
//    'as'=>'track_registration'
//]);

Route::get('/customer/track/order',[
    'uses'=>'CustomerController@trackOrder',
    'as'=>'track_order'
]);

Route::get('/customer/login',[
    'uses'=>'CustomerController@customerLoginForm',
    'as'=>'login-customer'
]);

Route::get('/customer/logout',[
    'uses'=>'CustomerController@customerLogout',
    'as'=>'logout-customer'
]);
Route::post('/customer/sign-in/email',[
    'uses'=>'CustomerController@customerLoginByEmail',
    'as'=>'login-customer-by-email'
]);
Route::post('/customer/sign-in/mobile',[
    'uses'=>'CustomerController@customerLoginFormByMobile',
    'as'=>'login-customer-by-mobile'
]);




//****************************Static Page management***************************************//



Route::get('/about/us',[
    'uses'=>'NitolElectronicsController@aboutUs',
    'as'=>'about-us'
]);

// Route::get('/dealer/locator/{id}',[
//     'uses'=>'PizzaHutController@dealerLocator',
//     'as'=>'dealer-locator'
// ]);


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



