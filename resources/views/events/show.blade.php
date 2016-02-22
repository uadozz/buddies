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
		<div class="participation">
			@if ($event->hasParticipantUser(Auth::user()->id))
				{!! Form::open(['route' => ['events.unjoin', $event->id]]) !!}
					<div class="form-group">
						{!! Form::submit("Cancel participation", ['class' => 'btn btn-primary form-control']) !!}
					</div>
				{!! Form::close() !!}
            @else
				{!! Form::open(['route' => ['events.join', $event->id]]) !!}
					<div class="form-group">
						{!! Form::submit("Join", ['class' => 'btn btn-primary form-control']) !!}
					</div>
				{!! Form::close() !!}
            @endif
        </div>
		<div class="row">
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
        </div>
        {{-- social buttons go here --}}
    </div>

    <div class="col-sm-12">
		<h2>Event description</h2>
        <div class="event-info">
			{!! $event->description !!}
        </div>
	</div>
	
    <div class="col-sm-12">
        <h2>Participants</h2>
        <ul>
            {{-- @foreach($event->participants()->with('user_id')->orderBy('user.name', 'asc')->get() as $participant) --}}
            @foreach($event->participants()->get() as $participant)
                <li>{{ $participant->user->name }}</li>
            @endforeach
        </ul>
        
        {{--
        <table class="table table-condensed table-striped event-participants">
            <thead>
                <tr>
                    <th>№ заявки</th>
                    <th>Учасник</th>
                    <th>Дата/час надходження заявки</th>
                    <th>Стан заявки</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lot->bidders()->with('user')->orderBy('created_at', 'asc')->get() as $bidder)
                    <tr>
                        <td>{{ $bidder->index }}</td>
                        <td>
                            @if(Auth::user() && Auth::user()->id === $bidder->user->id)
                                {{ $bidder->user->name }}
                            @else
                                Учасник {{ $bidder->index }}
                            @endif
                        </td>
                        <td>{{ $bidder->created_at->format('d.m.Y H:i') }}</td>
                        <td>{{ $bidder_statuses[$bidder->status] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        --}}
</div>
@stop
