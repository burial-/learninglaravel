<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <title>test</title>
</head>
<body>
<div class="container col-md-6 col-md-offset-3">
    <h3>Testing Page</h3>
    <!-- username Form Input -->
    <div class="form-group">
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username', null, ['class' => 'form-control']) }}
    </div>

    <!-- Email Form Input -->
    <div class="form-group">
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}
    </div>

    <!-- Password Form Input -->
    <div class="form-group">
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['class' => 'form-control']) }}
    </div>
</div>
</body>
</html>