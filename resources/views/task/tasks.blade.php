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
  <button type="button" data-toggle="modal" data-target="#addTaskModal" class="btn btn-outline-secondary btn-lg btn-block">ADD TASK</button>
</div>

<!-- add task -->
<div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ Form::open(array('url' => 'collections/' . $collection->id)) }}
                    <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('description', 'Description') }}
                        {{ Form::text('description', Input::old('Description'), array('class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('duration', 'Duration') }}
                        {{ Form::text('duration', Input::old('Description'), array('class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('status', 'Status') }}
                        {{ Form::select('size', array('P' => 'Progress', 'I' => 'Incompleet', 'C' => 'Completed'), 'P') }}
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        {{ Form::submit('Create list', array('class' => 'btn btn-primary')) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection