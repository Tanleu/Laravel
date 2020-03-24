@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="flex-column">
            <div class="pt-3 pb-3 my-2 font-weight-bold text-white shadow">
                <h1>Editing Category</h1>
            </div>
            <div>
                <div class="container">
                    {!! Form::open(['method' => 'post', 'action' => 'AdminCategoryController@store']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Category Name') !!}
                        {{Form::text('name', null, ['placeholder' => 'Enter the category name here', 'class' => 'form-control'])}}
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {!! Form::label('created_at', 'Created at') !!}
                            {!! Form::date('created_at', \Carbon\Carbon::now(), ['class' => 'form-control', 'readonly']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('updated_at', 'Updated at') !!}
                            {!! Form::text('updated_at', null, ['class' => 'form-control' , 'readonly']) !!}
                        </div>
                            {!! Form::submit('Save', ['class' => 'btn btn-primary col-12']) !!}
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
