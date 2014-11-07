 <p >用户名或密码错误</p>
{{Form::open()}}
<div>{{Form::text('email','',array('placeholder'=>'email'))}}</div>
<div>{{Form::password('password',array('placeholder'=>'password'))}}</div>
{{Form::submit('login')}}
<a href="register">register</a>
{{Form::close()}}
