<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class WorkersController extends Controller
{
    public function index() {

        $all_employees = Employee::all();

        return view('pages.home', compact('all_employees'));
    }
}
