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

    public function show($id) {

        $employee = Employee::findOrFail($id);

        return view('pages.show', compact('employee'));
    }

    public function destroy($id) {

        $employee = Employee::findOrFail($id);

        $employee -> delete();

        return redirect() -> route('home');
    }

    public function edit($id) {

        $employee = Employee::findOrFail($id);

        return view('pages.edit', compact('employee'));

    }
    public function update(Request $request, $id) {

        $validated = $request -> validate ([

            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|string',
            'ral' => 'numeric'
        ]);

        $employee = Employee::findOrFail($id);

        $employee -> update($validated);

        return redirect() -> route('show', $employee -> id);
    }
}
