@extends("templates.layout")
@section("content")

<div class="container">
  <h2>{{$collection->title}}</h2> 
  <p>{{$collection->description}}</p>          
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
    @foreach($collection->tasks as $task) 
      <tr>
        <td>{{$task->title}}</td>
        <td>{{$task->description}}</td>
        <td>{{$task->status}}</td>
        <td style="width: 20%;">
        {{$task->duration}}
        <span style="float: right; padding-right: 15px;"><a data-toggle="modal" data-target="#addTaskModal" style="color:#3490DC"><i class="fas fa-pencil-alt"></i></a></span>
				<span style="float: right; padding-right: 15px;"><a href="#" style="color:#E3342F"><i class="fas fa-trash-alt"></i></a></span>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a  href="{{URL::to('task/create/' . $collection->id)}}" class="btn btn-outline-secondary btn-lg btn-block">ADD TASK</a>
</div>
@endsection