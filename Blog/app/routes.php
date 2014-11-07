 <?php

 Route::group(array('before'=>'auth'),function(){

Route::get('/',array('uses'=>'AuthController@index'));


Route::get('detail/{id?}',array('as'=>'detail','uses'=>'AuthController@detail'))->where('id','[0-9]+');




 });

Route::get('login',array('as'=>'login','uses'=>'AuthController@login'));

Route::post('login',array('uses'=>'AuthController@validation'));

Route::get('register',array('as'=>'register','uses'=>'AuthController@register'));

 Route::post('register',array('uses'=>'AuthController@save'));


