@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="flex-column">
            <div class="pt-3 pb-3 my-2 font-weight-bold text-white shadow">
                <h1>Update user {{ $user->name }}</h1>
            </div>

            <div>
                <div class="container">
                    {!! Form::open(['method' => 'put', 'action' => ['AdminUserController@update', $user->id], 'files' => true]) !!}
                    <div class="row">
                        <div class="col-2">
                            <img src="{{ !empty($user->image) ? $user->image : '' }}" alt="image avatar" style="max-width:100%" height="200px" width="200px">
                        </div>

                        <div class="col-10 row">
                            <div class="form-group col-md-12">
                                {!! Form::label('name', 'User Name') !!}
                                {!! Form::text('name', $user->name, ['placeholder' => 'Enter the category name here', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group col-md-12">
                                {!! Form::label('password', 'User password') !!}
                                {!! Form::text('password', $user->password, ['placeholder' => '', 'class' => 'form-control', 'readonly']) !!}
                            </div>

                            <div class="form-group col-md-12">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::email('email', $user->email, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                            </div>

{{--                            <div class="form-group col-md-12">--}}
{{--                                {!! Form::label('image', 'Avatar') !!}--}}
{{--                                {!! Form::file('image', $user->image, ['class' => 'form-control d-flex align-item-center']) !!}--}}
{{--                            </div>--}}

                            <div class="form-group col-md-6">
                                {!! Form::label('role_id', 'Role') !!}
                                {!! Form::select('role_id', $roles, $user->role_id, ['placeholder' => 'Select status of user', 'class' => 'form-control custom-select']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('isActive', 'Status') !!}
                                {!! Form::select('isActive', array(1 => 'Active', 0 => 'DeActive'), $user->isActive, ['placeholder' => 'Select status of user', 'class' => 'form-control custom-select']) !!}
                            </div>
                            <div class="form-group col-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary col-12']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
