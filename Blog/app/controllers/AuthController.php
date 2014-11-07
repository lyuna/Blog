<?php

class AuthController extends \BaseController {

	/**
	* Display a listing of the resource.
	* GET /auth
	*
	* @return Response
	*/

	public function register(){
		return View::make('register');
	}
	
	public function save(){
		$input=Input::all();
		$rules=array('email'=>'required|email|unique:users','password'=>'required|min:8|max:15|confirmed','password_confirmation'=>'required|same:password');
		$message=array('required'=>'The :attribute fields is required','same'=>'The :attribute must be same','unique'=>'Tht :attribute is unique');
		$validator=Validator::make($input,$rules,$message);
		// var_dump($validator->fails());
		if($validator->fails())
		{
			return Redirect::to('register')->withErrors($validator);
		}
		$email=Input::get('email');
		$password=Hash::make($input['password']);
		$articles=Article::with('user')->get();
		$user=new User;
		$user->email=$email;
		$user->password=$password;
		if($user->save()){
			return View::make('lists')->withArticles($articles);
		}
	}
	public function login(){

		return View::make('login');
	}

	public function validation(){
		$articles=Article::with('user')->get();
		$email=Input::get('email');
		$password=Input::get('password');
		if(Auth::attempt(array('email'=>$email,'password'=>$password))){
			return View::make('lists')->withArticles($articles);
		}
	}

	public function detail($id){
		$articles=Article::find($id);
		return View::make('detail')->withArticles($articles);
	}


	public function index()
	{
		//
	}

	/**
	* Show the form for creating a new resource.
	* GET /auth/create
	*
	* @return Response
	*/
	public function create()
	{
		//
	}

	/**
	* Store a newly created resource in storage.
	* POST /auth
	*
	* @return Response
	*/
	public function store()
	{
		//
	}

	/**
	* Display the specified resource.
	* GET /auth/{id}
	*
	* @param  int  $id
	* @return Response
	*/
	public function show($id)
	{
		//
	}

	/**
	* Show the form for editing the specified resource.
	* GET /auth/{id}/edit
	*
	* @param  int  $id
	* @return Response
	*/
	public function edit($id)
	{
		//
	}

	/**
	* Update the specified resource in storage.
	* PUT /auth/{id}
	*
	* @param  int  $id
	* @return Response
	*/
	public function update($id)
	{
		//
	}

	/**
	* Remove the specified resource from storage.
	* DELETE /auth/{id}
	*
	* @param  int  $id
	* @return Response
	*/
	public function destroy($id)
	{
		//
	}

}