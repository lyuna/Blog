{{Form::open()}}
{{$errors->has('email') ?$errors->first('email'):'' }}
{{$errors->has('password') ?$errors->first('password'):'' }}
  <div>{{$errors->has('password') ?$errors->first('password_confirmation'):'' }}</div>
{{Form::text('email','',array('placeholder'=>'email'))}} <br>
{{Form::password('password',array('placeholder'=>'password'))}} <br>
{{Form::password('password_confirmation',array('placeholder'=>'password'))}} <br>
{{Form::submit('register')}}
{{Form::close()}}