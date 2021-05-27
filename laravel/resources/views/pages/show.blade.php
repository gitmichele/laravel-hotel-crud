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
            </div>

        </section>

    </main>

@endsection