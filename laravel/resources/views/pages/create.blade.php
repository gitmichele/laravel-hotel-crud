@extends('layouts.special-layout')

@section('page-title')
    Add new Employee
@endsection

@section('content')

    <form method="POST" action="{{ route('store') }}">

        @csrf
        @method('POST')

        <div class="form-container">
            <div class="fields-container col-flex">

                <label for="firstname">Firstname</label>
                <input type="text" name="firstname">
            
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname">
            
                <label for="role">Role</label>
                <input type="text" name="role">
            
                <label for="ral">Ral</label>
                <input type="number" name="ral">
            
            </div>
        
            <div class="button-container">
                <button type="submit">
                    Add Employee
                </button>
            </div>
        
        </div>
    </form>

@endsection
