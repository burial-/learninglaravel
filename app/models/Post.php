<?php

class Post extends Eloquent {

    protected $fillable = ['title', 'body'];

    public static $rules = array(
        'title' => 'required',
        'body' => 'required'
    );

}