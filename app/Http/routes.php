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
use App\Http\Middleware\RolesMiddleware;

Route::get('/', 'WelcomeController@show');
Route::get('/home', [
	'uses' => 'HomeController@show',
	'middleware' => 'client'	
]);

Route::get('/leads', 'LeadController@showLeads');


Route::get('/trend', [
	'uses' => 'HomeController@showTrend',
]);

// Route::get('/home', 'HomeController@show')->middleware('check_role');
Route::get('/leads', 'LeadController@showLeads');
Route::get('/detail', 'LeadDetailController@showDetails');
Route::get('/content', 'LeadDetailController@showContent');
Route::get('/allcontents', 'ContentsController@showAllContents');

Route::post('/leads_filtertopcontent', 'LeadController@topcontentfilter');

//Controllers for Sidebar

Route::get('/portfolio', 'PortfolioController@show');

Route::get('/demo', 'PortfolioController@showdemo');

Route::get('/details/{portfolio_id}', 'PortfolioController@showdetail');

Route::get('/portfolio/switch/{portfolio_id}', 'PortfolioController@switchActivePortfolio');

Route::get('/portfolio/add', 'PortfolioController@addportfolio');

Route::post('/portfolio/add', 'PortfolioController@addport');

Route::get('/portfolio/edit/{portfolio_id}', 'PortfolioController@edit');

Route::post('/portfolio/edit/{portfolio_id}', 'PortfolioController@editPortfolio');

Route::get('/portfolio/settings', 'PortfolioController@settingsportfolio');

Route::get('/portfolio/settings/{portfolio_id}', 'PortfolioController@settingsportfolio');

Route::get('/campaign', 'CampaignController@show');

Route::get('/campaign/switch/{campaign_id}', 'CampaignController@switchActiveCampaign');

Route::get('/campaign/clear', 'CampaignController@clearActiveCampaign');

Route::get('/campaign/add', 'CampaignController@add');

Route::get('/campaign/settings', 'CampaignController@camsettings');

Route::get('/report', 'ReportsController@show');

//Signup Tokens

Route::get('/tokens/manage', 'SignupController@manage_tokens');

Route::get('/signup/{token}', ['as' => 'signup', 'uses' => 'SignupController@check_token']);

Route::post('/test', 'SignupController@signup_user');

Route::post('/tokens/create', 'SignupController@create_token');

Route::get('/tokens/delete/{token_id}', 'SignupController@delete_token');

// User Management

Route::get('/users/manage', 'UserController@manage_users');

Route::get('/users/delete/{user_id}', 'UserController@delete_user');

//Route::get('/settings', 'SettingsController@show');

Route::get('/logout', 'LogoutController@show');

//Controllers for Content
Route::get('/content/1', 'ContentController@show');
Route::get('/content/2', 'ContentController@two');
Route::get('/content/3', 'ContentController@three');
Route::get('/content/4', 'ContentController@four');

//API Controller
Route::resource('userdetail', 'APIController');
Route::get('/profile', 'HomeController@createApiToken');
Route::get('/api/{email}/{token}', 'APIController@apiauthenticate');

?>