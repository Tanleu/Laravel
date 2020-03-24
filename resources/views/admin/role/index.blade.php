@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="flex-column">
            <div class="pt-3 pb-3 my-2 font-weight-bold text-white shadow">
                <h1>Role Management</h1>
            </div>
            <div>
                {!! Form::open(['method' => 'get', 'action' => 'AdminRoleController@create', 'class' => 'form-group']) !!}
                {!! Form::submit('Create a new Role', ['class' => 'btn btn-primary form-control']);  !!}
                {!! Form::close() !!}

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Function</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Roles as $Role)
                        <tr>
                            <th scope="row">{{$Role->id}}</th>
                            <td>{{$Role->name}}</td>
                            <td>
                                <div class="d-flex">
                                    {!! Form::open(['method' => 'get', 'action' => ['AdminRoleController@edit', $Role->id], 'class' => 'form-group']) !!}
                                    {!! Form::submit('Edit', ['class' => 'btn btn-primary form-control']);  !!}
                                    {!! Form::close() !!}

                                    {!! Form::open(['method' => 'delete', 'action' => ['AdminRoleController@destroy', $Role->id], 'class' => 'form-group']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger  form-control']);  !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
