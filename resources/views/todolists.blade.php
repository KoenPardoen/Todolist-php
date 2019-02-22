@extends("templates.layout")
@section("content")

@foreach($collections as $collection) 
<h1>{{$collection->title}}</h1>
<h2>{{$collection->description}}</h2>
@foreach($collection->tasks as $task) 
<h1>{{$task->title}}</h1>
<h2>{{$task->description}}</h2>
@endforeach

@endforeach



@endsection