<link rel="stylesheet" href="{{asset('CSS/index.css')}}">
<a href="{{route('logout')}}">logout</a>
<div class="article-list">
	@foreach($articles as $article)
	<a href="{{route('detail',$article->id)}}"><h1>{{$article->title}}</h1></a>
	{{Form::hidden('id',$article->id)}}
	<p>body: {{$article->body}}</p>
	<p>author: {{$article->user['username']}}</p>
	<p>time: {{$article->created_at}}</p>
	<hr>
	@endforeach
	{{$articles->links()}}
</div>