
<p>{{$articles->title}}</p>
<p>{{$articles->user['username']}}</p>
<p>{{$articles->body}}</p>
<p>{{$articles->created_at}}</p>
<div>
	@foreach($articles->comments as $comment)
	<p>{{$comment->body}}</p>
	@endforeach
</div>
{{Form::open()}}
<div id="hidden">
	{{Form::textarea('body')}}
</div>
	{{Form::submit('reply')}}
{{Form::close()}}
