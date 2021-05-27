@extends('layouts.main-layout')

@section('page-logo')
    Hotel Employees
@endsection

@section('content')

    <main>

        <section id="all-employees">

            <div class="container hor-flex">

                <div class="data-col">
                    <ul>
                        <li>
                            Employee
                        </li>

                        @foreach ($all_employees as $employee)
                            <li>
                                <a href="{{ route('show', $employee -> id) }}">
                                    {{ $employee -> firstname }} {{ $employee -> lastname }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="data-col">
                    <ul>
                        <li>
                            Edit
                        </li>

                        @foreach ($all_employees as $employee)
                            <li>
                                <a href="{{ route('edit', $employee -> id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="data-col">
                    <ul>
                        <li>
                            Delete
                        </li>

                        @foreach ($all_employees as $employee)
                        <li>
                            <a href="{{ route('destroy', $employee -> id) }}">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </section>
    </main>

@endsection