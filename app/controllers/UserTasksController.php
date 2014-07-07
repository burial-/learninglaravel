<?php

/**
 * Created by PhpStorm.
 * User: burial
 * Date: 7/07/14
 * Time: 3:19 PM
 */
class UserTasksController extends BaseController {

    public function index($username)
    {
        $tasks = Task::byUsername($username);

        return View::make('tasks.index', compact('tasks'));
    }

    public function show($username, $taskId)
    {
        $task = Task::byUsernameAndId($username, $taskId);

        return View::make('tasks.show', compact('task'));
    }
}