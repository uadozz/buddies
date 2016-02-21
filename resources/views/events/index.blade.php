@extends('layouts.app')

@section('title', 'Events')

@section('content')
<div class="page-header">
	<h1>Events</h1>
</div>

@if(count($events))
    @foreach($events as $event)
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <div class="line"></div>
				<h3>
					<a href="{!! route('events.show', [$event->id]) !!}">
						{{ $event->title }}
                        {{-- <img src="/images/noimage-thumbnail.jpg" alt="{{ $event->name }}" class="img-thumbnail"> --}}
                    </a>
                </h3>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="row">
					<h3><a href="{{ route('events.show', [$event->id]) }}">{{ $event->name }}</a></h3>
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
        </div>
    @endforeach
@else
    <div class="alert alert-dismissible alert-info">
        <button type="button" class="close" data-dismiss="alert">&Cross;</button>
        <p>No suitable events founds.</p>
    </div>
@endif

@stop
