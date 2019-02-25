@foreach ($artical as $abc)
    <h1>{{$abc->title}}<small> post by..{{$abc->user}}</small></h1>
    <p>{{$abc->body}}</p>
    @endforeach
