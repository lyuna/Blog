@foreach($articles as $article)
 <a href="{{route('detail',$article->id)}}"><h1>{{$article->title}}</h1></a>
{{Form::hidden('id',$article->id)}}
  <p>body: {{$article->body}}</p>
 <p>author: {{$article->user['username']}}</p>
 <p>time: {{$article->created_at}}</p>

<hr>
@endforeach