<div class="panel panel-default">
    <div class="panel-body">
        {{ Form::open(['url' => '/tasks', 'class' => 'form']) }}

        <!-- Title Form Input -->
        <div class="form-group">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
            <em><small>{{ $errors->first('title') }}</small></em>
        </div>

        <!-- Body Form Input -->
        <div class="form-group">
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
            <em><small>{{ $errors->first('body') }}</small></em>
        </div>

        <!-- User Form Input -->
        <div class="form-group">
            {{ Form::label('user_id', 'Assign To', ['class' => 'control-label']) }}
            {{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
        </div>

        <!-- Submit Form Input -->
        <div class="form-group">
            {{ Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) }}
        </div>

        {{ Form::close() }}
    </div>
</div>