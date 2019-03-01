@extends("templates.layout")
@section("content")

<div class="container">
  <h2>{{$collections[0]->title}}</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>Task</th>
        <th>Description</th>
        <th>Status</th>
        <th>Duration</th>
      </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task) 
      <tr>
        <td>{{$task->title}}</td>
        <td>{{$task->description}}</td>
        <td>{{$task->status}}</td>
        <td>{{$task->duration}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection



<!-- @foreach($collections as $collection) 
<h1>{{$collection->title}}</h1>
<h2>{{$collection->description}}</h2>
@foreach($collection->tasks as $task) 
<h1>{{$task->title}}</h1>
<h2>{{$task->description}}</h2>
@endforeach
@endforeach -->