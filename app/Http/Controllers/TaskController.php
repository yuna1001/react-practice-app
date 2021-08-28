<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Task一覧
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Task::orderBy('id', 'desc')->get();
    }
}
