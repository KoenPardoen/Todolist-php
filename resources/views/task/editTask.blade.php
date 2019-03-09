@extends("templates.layout")
@section("content")
<div class="container">

    <h1>Edit {{ $collection->title }}</h1>

    {{ Form::open(array('url' => 'collections')) }}
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
        {{ Form::text('description', Input::old('Description'), array('class' => 'form-control')) }}
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
@endsection
