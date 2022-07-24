    <?php
    
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers;

    //front-end route
    Route::get('/', [
        'uses'=> 'App\Http\Controllers\ChoiceOnlineController@index',
        'as'=> '/'
    ]);
    Route::get('/category-product/{id}/{name}', [
        'uses'=> 'App\Http\Controllers\ChoiceOnlineController@categoryProduct',
        'as'=> 'category-product'
    ]);
    Route::get('/view-list-product', [
        'uses'=> 'App\Http\Controllers\ChoiceOnlineController@viewListProduct',
        'as'=> 'view-list-product'
    ]);
    Route::get('/product-details/{id}/{name}', [
        'uses'=> 'App\Http\Controllers\ChoiceOnlineController@productDetails',
        'as'=> 'product-details'
    ]);
    //cart controller
    Route::post('/cart/add',[
        'uses'=>'App\Http\Controllers\CartController@addToCart',
        'as' =>'add-to-cart'
    ]);
    Route::get('/cart/show',[
        'uses'=>'App\Http\Controllers\CartController@showCart',
        'as' =>'show-cart'
    ]);
    Route::post('/cart/update',[
        'uses'=>'App\Http\Controllers\CartController@updateCart',
        'as' =>'update-cart'
    ]);
    Route::get('/cart/delete/{rowId}',[
        'uses'=>'App\Http\Controllers\CartController@deleteCart',
        'as' =>'delete-cart-item'
    ]);
    //checkout
    Route::get('/checkout',[
        'uses'=>'App\Http\Controllers\CheckoutController@index',
        'as' =>'checkout'
    ]);
    Route::post('/customer/registration',[
        'uses'=>'App\Http\Controllers\CheckoutController@customerSignUP',
        'as' =>'customer-sign-up'
    ]);
    Route::get('/checkout/shipping',
        [App\Http\Controllers\CheckoutController::class,'shippingForm'])->name('checkout-shipping');
    Route::post('/shipping/save',
        [App\Http\Controllers\CheckoutController::class,'saveShippingInfo'])->name('new-shipping');
    Route::get('/checkout/payment',
        [App\Http\Controllers\CheckoutController::class,'paymentForm'])->name('checkout-payment');
    Route::post('/checkout/order',
        [App\Http\Controllers\CheckoutController::class,'newOrder'])->name('new-order');
    Route::get('/complete/order',
        [App\Http\Controllers\CheckoutController::class,'completeOrder'])->name('complete-order');

    //customer login check
    Route::post('/checkout/customer-login',
        [App\Http\Controllers\CheckoutController::class,'customerLoginCheck'])->name('customer-login');
    //top header new customer login
    Route::get('/checkout/new-customer-login',
        [App\Http\Controllers\CheckoutController::class,'newCustomerLogin'])->name('new-customer-login');
    Route::post('/checkout/customer-logout',
        [App\Http\Controllers\CheckoutController::class,'customerLogout'])->name('customer-logout');
		
    //ajax email check controller
    Route::get('/ajax-email-check/{email}',
        [ App\Http\controllers\CheckoutController::class,'ajaxEmailCheck'] )->name('ajax-email-check');


    //Dashboard route
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //middleware
    Route::group(['middleware'=>'login.check'],function(){
        
        //Category section
        Route::get('/category/add-category',
            [ App\Http\controllers\CategoryController::class,'addCategory'] )->name('add-category');
        Route::post('/save/new-category',
            [ App\Http\controllers\CategoryController::class,'saveCategoryInfo'] )->name('new-category');
        Route::get('/category/manage-category',
            [ App\Http\controllers\CategoryController::class,'manageCategoryInfo'] )->name('manage-category');
        Route::get('/category/unpublished/{id}',
            [ App\Http\controllers\CategoryController::class,'unpublishedCategory'] )->name('unpublished-category');
        Route::get('/category/published/{id}',
            [ App\Http\controllers\CategoryController::class,'publishedCategory'])->name('published-category');
        Route::get('/category/edit-category/{id}',
            [ App\Http\controllers\CategoryController::class,'editCategory'] )->name('edit-category');
        Route::post('/category/update-category',
            [ App\Http\controllers\CategoryController::class,'updateCategory'] )->name('update-category');
        Route::get('/category/delete-category/{id}',
            [ App\Http\controllers\CategoryController::class,'deleteCategory'] )->name('delete-category');

        //Brand Section
        Route::get('/brand/add-brand',
            [ App\Http\controllers\BrandController::class,'addBrand'] )->name('add-brand');
        Route::post('/brand/save-brand',
            [ App\Http\controllers\BrandController::class,'saveBrand'] )->name('new-brand');
        Route::get('/brand/manage-brand',
            [ App\Http\controllers\BrandController::class,'manageBrand'] )->name('manage-brand');
        Route::get('/brand/unpublished/{id}',
            [ App\Http\controllers\BrandController::class,'unpublishedBrand'] )->name('unpublished-brand');
        Route::get('/brand/published/{id}',
            [ App\Http\controllers\BrandController::class,'publishedBrand'] )->name('published-brand');
        Route::get('/brand/edit-brand/{id}',
            [ App\Http\controllers\BrandController::class,'editBrand'] )->name('edit-brand');
        Route::post('/brand/update-brand',
            [ App\Http\controllers\BrandController::class,'updateBrand'] )->name('update-brand');
        Route::get('/brand/delete-brand/{id}',
            [ App\Http\controllers\BrandController::class,'deleteBrand'] )->name('delete-brand');

        //User Section
        Route::get('manage-user',
            [ App\Http\controllers\UserController::class,'manageUser'] )->name('manage-user');

        //Product Section
        Route::get('/product/add',
            [ App\Http\controllers\ProductController::class,'index'] )->name('add-product');
        Route::post('/product/save',
            [ App\Http\controllers\ProductController::class,'saveProduct'] )->name('new-product');
        Route::get('/product/manage',
            [ App\Http\controllers\ProductController::class,'manageProduct'] )->name('manage-product');
        Route::get('/product/unpublished/{id}',
            [ App\Http\controllers\ProductController::class,'unpublishedProduct'] )->name('unpublished-product');
        Route::get('/product/published/{id}',
            [ App\Http\controllers\ProductController::class,'publishedProduct'] )->name('published-product');
        Route::get('/product/edit/{id}',
            [ App\Http\controllers\ProductController::class,'editProduct'] )->name('edit-product');
        Route::post('/product/update',
            [ App\Http\controllers\ProductController::class,'updateProduct'] )->name('update-product');
        Route::post('/product/delete/{id}',
            [ App\Http\controllers\ProductController::class,'deleteProduct'] )->name('delete-product');
        //    Route::get('/product/show-details/{id}',
        //        [ App\Http\controllers\ProductController::class,'ShowDetailsProduct'] )->name('show-details-product');
        //manage order section
        Route::get('/order/manage',
            [ App\Http\controllers\OrderController::class,'manageOrderInfo'] )->name('manage-order');
        Route::get('/order/view-order-detail/{id}',
            [ App\Http\controllers\OrderController::class,'viewOrderDetail'] )->name('view-order');
        Route::get('/order/view-order-invoice/{id}',
            [ App\Http\controllers\OrderController::class,'viewOrderInvoice'] )->name('view-order-invoice');
        Route::get('/order/download-order-invoice/{id}',
            [ App\Http\controllers\OrderController::class,'downloadOrderInvoice'] )->name('download-order-invoice');

        Route::get('/chart',
            [ App\Http\controllers\ChartController::class,'userChart'] )->name('chart');
    });


