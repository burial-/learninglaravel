<?php

class TasksController extends BaseController {

    public function index()
    {
        $tasks = Task::with('user')->get();

        return View::make('tasks.index', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = Task::find($id);

        return View::make('tasks.show', ['task' => $task]);
    }

}