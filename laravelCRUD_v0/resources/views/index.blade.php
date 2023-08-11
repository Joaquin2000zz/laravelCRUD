@extends('layout/template')

@section('pageTitle', 'Laravel 8 CRUD')

@section('content')
    <div class="row">
        <h1>Laravel CRUD</h1>
        <div class="card">
            <div class="card-header">
                <h5>Employees' Register</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Birth</th>
                            <th>Create / Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tr>
                        <form method="POST" action="{{ route('employee.create') }}" id="create_employee">
                            @csrf
                            <td><input required type="text" name="first_name"></td>
                            <td><input required type="text" name="last_name"></td>
                            <td><input required type="date" name="birth"></td>
                            <td>
                                <button class="btn btn-primary" id="create_employee">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </td>
                            <td></td>
                        </form>
                    </tr>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->birth }}</td>
                            <td>
                                <a onclick="editEmployee('{{ $employee->first_name }}', '{{ $employee->last_name }}', '{{ $employee->birth }}', '{{ route('employee.edit', $employee->id) }}')"
                                    href="#editEmployee" class="btn btn-primary"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a onclick="deleteEmployee()" class="btn btn-primary"><i
                                        class="fa-solid fa-user-minus"></i></a>
                                <form method="POST" action="{{ route('employee.delete', $employee->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button id="deleteEmployee" style="display: none;"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
