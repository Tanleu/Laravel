@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="flex-column">
            <div class="pt-3 pb-3 my-2 font-weight-bold text-white shadow">
                <h1>Add a new Role</h1>
            </div>
            <div>
                <div class="container">
                    {!! Form::open(['method' => 'post', 'action' => 'AdminRoleController@store', 'files' => true]) !!}
                    <div class="row">
                            <div class="form-group col-md-12">
                                {!! Form::label('name', 'Role Name') !!}
                                {!! Form::text('name', null, ['placeholder' => 'Enter the role name here', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group col-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary col-12']) !!}
                            </div>
                            {!! Form::close() !!}
                    </div>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger font-weight-bold text-white shadow">
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
