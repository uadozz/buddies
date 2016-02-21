@extends('layouts.app')

@section('title', "Create New Event")

@section('content')
<div class="page-header">
	<h1>Create New Event</h1>
</div>

    {!! Form::model(
        $event = new \App\Event(),
        ['route' => 'events.index'])
    !!}
        @include('events._form', ['submitButtonText' => 'Create Event'])
    {!! Form::close() !!}

			{{--
            'date_start' => Carbon\Carbon::parse('+1 day 18:00:00'),
            'date_end' => Carbon\Carbon::parse('+1 day 20:00:00'),
            --}}
    
    @include('errors.list')
@stop
