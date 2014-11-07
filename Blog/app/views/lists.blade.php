<link rel="stylesheet" href="{{asset('CSS/index.css')}}">
@if(Auth::check())
<p>{{Auth::user()->username}}</p>
<a href="{{route('logout')}}">logout</a>
@else
<a href="{{route('login')}}">login</a><a href="{{route('register')}}">register</a>
@endif

<div class="article-body">
	@foreach($articles as $article)
	<div class="article-list">
		<a href="{{route('detail',$article->id)}}"><h1>{{$article->title}}</h1></a>
		{{Form::hidden('id',$article->id)}}
		<p>body: {{$article->body}}</p>
		<p>author: {{$article->user['username']}}</p>
		<p>time: {{$article->created_at}}</p>
	</div>
	<hr>
	@endforeach
	{{$articles->links()}}
</div>