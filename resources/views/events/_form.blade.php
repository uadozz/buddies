        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Event name"]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('activity_id', 'Activity (id - FIXME!):') !!}
            {{-- {!! Form::select('activity_id', null, ['class' => 'form-control', 'placeholder' => "Activity"]) !!} --}}
            {!! Form::text('activity_id', null, ['class' => 'form-control', 'placeholder' => "Activity"]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => "Short description of the event"]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('date_start', 'Event starts:') !!}
            {!! Form::input('text', 'date_start', null, ['class' => 'form-control', 'placeholder' => "Event starting date and time"]) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('date_end', 'Event ends:') !!}
            {!! Form::input('text', 'date_end', null, ['class' => 'form-control', 'placeholder' => "Event ending date and time"]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('location_id', 'Location (id - FIXME!):') !!}
            {{-- {!! Form::select('location_id', null, ['class' => 'form-control', 'placeholder' => "Event location"]) !!} --}}
            {!! Form::text('location_id', null, ['class' => 'form-control', 'placeholder' => "Event location"]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
        </div>
{{--
	    'activity_id',
        'location_id',
        'user_id',
--}}
