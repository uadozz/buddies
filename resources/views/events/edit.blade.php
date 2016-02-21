@extends('layouts.app')

@section('title', "Edit: " . $event->name)

@section('content')
<div class="page-header">
	<h1>Edit: {{ $event->name }}</h1>
</div>

<div id="confirmModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    {!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id]]) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <strong>{{ $event->name }}</strong>?</p>
                <p class="text-warning"><small>This action is irreversible. Deleted events could not be restored.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger btn-primary">Delete</button>
            </div>
        </div>
    {!! Form::close() !!}
    </div>
</div>

    {!! Form::model($event, ['method' => 'PUT', 'route' => ['events.update', $event->id]]) !!}
        @include('events._form', ['submitButtonText' => 'Save Event'])
    {!! Form::close() !!}
    
    @include('errors.list')

@stop
