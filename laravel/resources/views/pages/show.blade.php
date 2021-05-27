@extends('layouts.main-layout')

@section('return-home')
    Home    
@endsection

@section('page-logo')
    {{ $employee -> firstname }} {{ $employee -> lastname }}
@endsection

@section('content')
    
    <main>

        <section id="show-employee">

            <div class="container">

                <div class="data-row">
                    <span>
                        {{ $employee -> role }}
                    </span>
                </div>

                <div class="data-row">
                    <span>
                        {{ $employee -> ral }}
                    </span>
                </div>

                <div class="delete">
                    <a href="{{ route('destroy', $employee -> id) }}">
                    Delete this employee  <i class="far fa-trash-alt"></i>
                    </a>
                </div>
            </div>


        </section>

    </main>

@endsection