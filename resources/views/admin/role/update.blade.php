@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="flex-column">
            <div class="pt-3 pb-3 my-2 font-weight-bold text-white shadow">
                <h1>Update role {{ $role->name }}</h1>
            </div>

            <div>
                <div class="container">
                    {!! Form::open(['method' => 'put', 'action' => ['AdminRoleController@update', $role->id], 'files' => true]) !!}
                    <div class="row">

                        <div class="col-10 row">
                            <div class="form-group col-md-12">
                                {!! Form::label('name', 'Role Name') !!}
                                {!! Form::text('name', $role->name, ['placeholder' => 'Enter the category name here', 'class' => 'form-control']) !!}
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
