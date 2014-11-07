 <?php

Route::group(array('before'=>'auth'),function(){
	
	Route::get('detail/delete',array('as'=>'delete','uses'=>'AuthController@delete'));

	Route::get('detail/update',array('as'=>'update','uses'=>'AuthController@update'));
});

Route::get('/',array('uses'=>'AuthController@index'));

Route::get('detail/{id?}',array('as'=>'detail','uses'=>'AuthController@detail'))->where('id','[0-9]+');

Route::get('list',array('as'=>'list','uses'=>'AuthController@lists'));

Route::post('detail/{id?}',array('as'=>'detail','uses'=>'AuthController@replysave'))->where('id','[0-9]+');

Route::get('login',array('as'=>'login','uses'=>'AuthController@login'));

Route::post('login',array('uses'=>'AuthController@validation'));

Route::get('register',array('as'=>'register','uses'=>'AuthController@register'));

 Route::post('register',array('uses'=>'AuthController@save'));

 Route::get('logout',array('as'=>'logout','uses'=>'AuthController@logout'));


