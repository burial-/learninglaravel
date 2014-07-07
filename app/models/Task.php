<?php

class Task extends BaseModel {

    protected $guarded = [
        'id'
    ];

    protected static $rules = [
        'title' => 'required',
        'body'  => 'required'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public static function byUsername($username)
    {
        return User::byUsername($username)->tasks;
    }

    public static function byUsernameAndId($username, $taskId)
    {
        return User::byUsername($username)->tasks()->findOrFail($taskId);
    }

}