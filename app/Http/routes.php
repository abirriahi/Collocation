<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::group(['middleware' => 'admin'],function(){
    #admin
    Route::get('/adminpanel/contact/data', ['as' => 'adminpanel.contact.data' , 'uses' => 'ContactController@anyData'] );

    #admin
    Route::get('/adminpanel/users/data', ['as' => 'adminpanel.users.data' , 'uses' => 'UserController@anyData'] );
    Route::get('/adminpanel', 'AdminController@index');
#adminpanel

    Route::get('/adminpanel', 'AdminController@index');

    #users
    Route::resource('/adminpanel/users', 'UserController');
    Route::post('/adminpanel/user/changePassword/', 'UserController@updatePassword');
    Route::get('/adminpanel/users/{id}/delete', 'UserController@destroy');

    #bu
    Route::get('/adminpanel/articles/data', ['as' => 'adminpanel.articles.data' , 'uses' => 'BuController@anyData'] );
    Route::resource('/adminpanel/articles','BuController');
    Route::get('/adminpanel/articles/{id}/delete', 'BuController@destroy');

    Route::get('/adminpanel/change_status/{id}/{status}' , 'BuController@changeStatus');

    #sitesetting
    Route::get('/adminpanel/sitesetting', 'SitesettingController@index');
    Route::post('/adminpanel/siteseting', 'SitesettingController@store');

    #contact
    Route::resource('/adminpanel/contact' , 'ContactController');
    Route::get('/adminpanel/contact/{id}/delete' , 'ContactController@destroy');

    #statistique
    Route::get('/adminpanel/buYear/statics' , 'AdminController@showYearStatics');
    Route::post('/adminpanel/buYear/statics' , 'AdminController@showThisYear');

    #logout from adminpanel
    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'logout'
    ]);

    // show markers on map
    Route::get('/adminpanel/gmaps', 'AdminController@gmaps');
    
});




Route::group(['prefix' => 'articles'], function () {
    Route::get('/', 'ArticleController@index');

    Route::get('type/{id}', 'ArticleController@byType');

    Route::get('category/{id}', 'ArticleController@byCategory');

    Route::get('search', 'ArticleController@search');
   // #WS public/articles/wsview?art_ville=&art_type=&prix_de=&prix_a=
   // Route::get('wsview', 'ArticleController@wsview');

    Route::get('{article}', 'ArticleController@show');
    #WS /public/articles/ws/128
    Route::get('/ws/{article}', 'ArticleController@wsshow');
});

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/addprojet','ArticleController@clientaddarticle')->middleware('auth');
Route::post('/articles',['as'=>'projet_add','uses'=>'ArticleController@store']);

//Route::post('/projets','ArticleController@storeprojet');
// Route::post('/articles','ArticleController@clientaddarticle');
Route::get('/home', 'HomeController@index');
#message
//Route::resource('/sendmessage','MessagesController');
//Route::resource('/messages', 'BoitMessageController');
Route::get('/envoyer','MessagesController@envoyer');

Route::get('/message/{id}', 'MessagesController@showrecu');

Route::resource('/messages', 'MessagesController');




#contact
Route::get('/contact' , 'ContactController@contact');
Route::post('/contact' , 'ContactController@store');

#updateprofil personel
Route::get('/editEmail' , 'ProfilController@userEmail')->middleware('auth');
Route::patch('/editEmail' , ['as' => 'editEmail' , 'uses' => 'ProfilController@userUpdateEmail'])->middleware('auth');
Route::get('/settings' , 'ProfilController@userSettings')->middleware('auth');
Route::patch('/settings' , ['as' => 'settings' , 'uses' => 'ProfilController@userUpdateSettings'])->middleware('auth');

Route::get('/editName' , 'ProfilController@usereditName')->middleware('auth');
Route::patch('/editName' , ['as' => 'editName' , 'uses' => 'ProfilController@userUpdateName'])->middleware('auth');

Route::get('/changePassword' , 'ProfilController@passwordInfo')->middleware('auth');
Route::patch('/changePassword' , ['as' => 'changePassword' , 'uses' => 'ProfilController@changePassword'])->middleware('auth');

#mes annaonces

Route::get('/mesAnnonces' , 'ArticleController@mesannonces')->middleware('auth');
Route::get('/mesAnnoncesenattente' , 'ArticleController@mesAnnoncesenattente')->middleware('auth');
Route::get('/mesAnnoncesrefusees' , 'ArticleController@mesAnnoncesrefuse')->middleware('auth');

Route::get('/mesAnnonces/{id}/delete', 'ArticleController@destroy');

#modifier mes articles non valider
Route::get('/editAnnonce/{id}' , 'ArticleController@editAnnonce')->middleware('auth');
Route::patch('/editAnnonce' , ['as' => 'editAnnonce' , 'uses' => 'ArticleController@updateAnnonce'])->middleware('auth');


Route::auth();
Route::get('/home', 'HomeController@index');
