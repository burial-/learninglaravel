@extends('layouts.layout')

@section('header')
<title>Posts</title>
@stop

@section('content')
<h1>my jrnl</h1>
<table class="table table-bordered table-striped sortable">
    <thead>
        <tr>
            <th class="col-md-2" data-defaultsort='disabled'>Created</th>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td class="col-md-2"> {{ $post->created_at->diffForHumans() }} </td>
            <td>{{ link_to("posts/$post->id", $post->title) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ link_to('posts/create', 'Create Post', array('class' => 'btn btn-primary')) }}
{{ $posts->links() }}
@stop

@section('scripts')
<!--
<link rel="stylesheet" href="../css/bootstrap-sortable.css">
<script src="../js/bootstrap-sortable.js"></script>
-->
@stop