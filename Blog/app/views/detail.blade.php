<link rel="stylesheet" href="{{asset('CSS/index.css')}}">
<p>{{$articles->title}}</p>
<p>{{$articles->user['username']}}</p>
<p>{{$articles->body}}</p>
<p>{{$articles->created_at}}
@if(Auth::check())
<a href="{{route('delete')}}">delete this article</a>  <a href="{{route('update')}}">update this article</a>
@endif
</p>
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
