@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="flex-column">
            <div class="pt-3 pb-3 my-2 font-weight-bold text-white shadow">
                <h1>Product Management</h1>
            </div>
            <div>
                {!! Form::open(['method' => 'get', 'action' => 'AdminProductController@create', 'class' => 'form-group']) !!}
                {!! Form::submit('Create a new user', ['class' => 'btn btn-primary form-control']);  !!}
                {!! Form::close() !!}

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Function</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{!empty($product->category) ? $product->category->name : ''}}</td>
                            <td>
                                <div class="d-flex">
                                    {!! Form::open(['method' => 'get', 'action' => ['AdminProductController@edit', $product->id], 'class' => 'form-group']) !!}
                                    {!! Form::submit('Edit', ['class' => 'btn btn-primary form-control']);  !!}
                                    {!! Form::close() !!}

                                    {!! Form::open(['method' => 'delete', 'action' => ['AdminProductController@destroy', $product->id], 'class' => 'form-group']) !!}
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
