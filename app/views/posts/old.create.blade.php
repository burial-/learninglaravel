@extends('layouts.layout')

@section('header')
<link rel="stylesheet" href="../css/summernote.css" />
<title>Create new post</title>
@stop

@section('content')
<h2>My jrnl</h2>
{{ Form::open(array('route' => 'posts.store')) }}
<!-- Title Form Input -->
<div class="form-group">
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Content:') }}
    {{ Form::textarea('body', null, ['id' => 'summernote']) }}
</div>

{{ Form::submit('Save Post', array('class' => 'btn btn-primary', 'id' => 'form-submit')) }}

<p> {{ link_to('posts', 'Go Back') }} </p>
@stop

@section('scripts')
<script src="../js/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                //[groupname, [button list]]

                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['picture','link','hr']],
                ['misc', ['undo','redo']]
            ],
            height: 300,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: true

        });
    });
</script>
@stop