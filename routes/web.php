<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/id{id}', [
	'uses' => 'ProfileController@show',
	'as' => 'profile'
]);

Route::get('id{id}/about', [
	'uses' => 'ProfileController@about',
	'as' => 'about'
]);

Route::get('id{id}/friends', [
	'uses' => 'ProfileController@allFriends',
	'as' => 'friends.all'
]);

Route::get('/id{id}/photos', [
	'uses' => 'ProfileController@photos',
	'as' => 'profile.photos'
]);

Route::get('/id{id}/videos', [
	'uses' => 'ProfileController@videos',
	'as' => 'profile.videos'
]);

Route::post('id{id}/create_post', [
	'uses' => 'PostsController@create'
]);

Route::get('id{id}/profile_feeds', [
	'uses' => 'PostsController@profileFeeds',
	'as' => 'profile.feeds'
]);

Route::get('like/{id}', [
	'uses' => 'LikesController@like'
]);

Route::get('unlike/{id}', [
	'uses' => 'LikesController@unlike'
]);

Route::get('/check_relationship_status/{id}', [
	'uses' => 'ProfileController@checkRelationshipStatus',
	'as' => 'check'
]);

Route::get('/add_friend/{id}', [
	'uses' => 'ProfileController@addFriend',
	'as' => 'add_friend'
]);

Route::get('/accept_friend/{id}', [
	'uses' => 'ProfileController@acceptFriend',
	'as' => 'accept_friend'
]);

Route::get('/settings/personal', [
	'uses' => 'ProfileController@showPersonalSettings',
	'as' => 'settings.personal',
	'middleware' => 'auth'
]);

Route::post('/settings/personal', [
	'uses' => 'ProfileController@savePersonalSettings',
	'as' => 'settings.personal.save',
	'middleware' => 'auth'
]);

Route::get('settings/friends_request', [
	'uses' => 'ProfileController@allFriendsRequest',
	'as' => 'settings.friends.request'
]);

Route::get('get_auth_user_data', [
	'uses' => 'HomeController@init',
	'as' => 'init'
]);

Route::get('api', function() {
	return view('api');
});

Route::get('get_unread_user_requests', [
	'uses' => 'NotificationsController@getUnreadUserRequests'
]);

Route::get('mark_read_friends_request', [
	'uses' => 'NotificationsController@markReadFriendsRequest'
]);

Route::get('/id{id}/music', [
	'uses' => 'ProfileController@music',
	'as' => 'music'
]);

Route::get('feed', [
	'uses' => 'PostsController@allFeeds',
	'as' => 'feed',
	'middleware' => 'auth'
]);