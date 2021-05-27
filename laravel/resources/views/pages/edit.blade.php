@extends('layouts.special-layout')

@section('page-title')
    Edit data for {{ $employee -> firstname }} {{$employee -> lastname  }}
@endsection

@section('content')

    <form method="POST" action="{{ route('update', $employee -> id) }}">

        @csrf
        @method('POST')

        <div class="form-container">
            <div class="fields-container col-flex">

                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" value="{{$employee -> firstname }}">
            
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" value="{{$employee -> lastname }}">
            
                <label for="role">Role</label>
                <input type="text" name="role" value="{{$employee -> role }}">
            
                <label for="ral">Ral</label>
                <input type="number" name="ral" value="{{$employee -> ral }}">
            
            </div>
        
            <div class="button-container">
                <button type="submit">
                    Edit Employee
                </button>
            </div>
        
        </div>
    </form>

@endsection
