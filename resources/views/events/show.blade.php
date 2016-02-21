@extends('layouts.app')

@section('title', $event->name)

@section('head')
{{--
    <style>
        dt .dl-horizontal .details  {
            min-width: 240px;
        }
    </style>
--}}
@endsection


@section('content')
<div class="page-header">
	<h1>{{ $event->name }}</h1>
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

<div class="row">
    <div class="col-xs-6 col-sm-4">
        <div class="event-map"> {{-- Event map or image --}}
			<h3>
				<a href="{!! route('events.show', [$event->id]) !!}">
					{{ $event->title }}
                    {{-- <img src="/images/noimage-thumbnail.jpg" alt="{{ $event->name }}" class="img-thumbnail"> --}}
                </a>
            </h3>
        </div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <dl class="col-sm-12 details inline">
            <dt>Activity:</dt>
            <dd>{{ $event->activity->name }}</dd>
            <dt>Location:</dt>
            <dd>{{ $event->location->name }}</dd>
            <dt>Region:</dt>
            <dd>{{ $event->location->region->name }}, {{ $event->location->region->country }}</dd>
            <dt>Event starts:</dt>
            <dd>{{ $event->date_start->format('d.m.Y H:i') }}</dd>
            <dt>Event ends:</dt>
            <dd>{{ $event->date_end->format('d.m.Y H:i') }}</dd>
        </dl>
        {{-- social buttons go here --}}
    </div>
</div>
@stop
