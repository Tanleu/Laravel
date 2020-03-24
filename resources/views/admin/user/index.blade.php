@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="flex-column">
            <div class="pt-3 pb-3 my-2 font-weight-bold text-white shadow">
                <h1>User Management</h1>
            </div>
            <div>
                {!! Form::open(['method' => 'get', 'action' => 'AdminUserController@create', 'class' => 'form-group']) !!}
                {!! Form::submit('Create a new user', ['class' => 'btn btn-primary form-control']);  !!}
                {!! Form::close() !!}

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role</th>
                        <th scope="col">Active</th>
                        <th scope="col">Function</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td><img src="/{{ $user->image }}" width="50" height="50"></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{!empty($user->role) ? $user->role->name : ''}}</td>
                            <td>{{$user->isActive == 1 ? 'Active' : 'DeActive'}}</td>
                            <td>
                                <div class="d-flex">
                                    {!! Form::open(['method' => 'get', 'action' => ['AdminUserController@edit', $user->id], 'class' => 'form-group']) !!}
                                    {!! Form::submit('Edit', ['class' => 'btn btn-primary form-control']);  !!}
                                    {!! Form::close() !!}

                                    {!! Form::open(['method' => 'delete', 'action' => ['AdminUserController@destroy', $user->id], 'class' => 'form-group']) !!}
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
    </div>
@endsection
