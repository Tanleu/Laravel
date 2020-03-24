@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="flex-column">
            <div class="pt-3 pb-3 my-2 font-weight-bold text-white shadow">
                <h1>Update user {{ $product->name }}</h1>
            </div>

            <div>
                <div class="container">
                    {!! Form::open(['method' => 'put', 'action' => ['AdminProductController@update', $product->id], 'files' => true]) !!}
                    <div class="row">

                        <div class="col-10 row">
                            <div class="form-group col-md-12">
                                {!! Form::label('name', 'Product name') !!}
                                {!! Form::text('name', $product->name, ['placeholder' => 'Enter the product name here', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('category_id', 'Category') !!}
                                {!! Form::select('category_id', $categories, $product->category_id, ['placeholder' => 'Select category of product', 'class' => 'form-control custom-select']) !!}
                            </div>

                            <div class="form-group col-12 mt-2">
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
