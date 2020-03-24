@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="flex-column">
            <div class="pt-3 pb-3 my-2 font-weight-bold text-white shadow">
                <h1>Category Management</h1>
            </div>
            <div>
                {!! Form::open(['method' => 'get', 'action' => 'AdminCategoryController@create', 'class' => 'form-group']) !!}
                {!! Form::submit('Create a new category', ['class' => 'btn btn-primary form-control']);  !!}
                {!! Form::close() !!}

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        @foreach(\App\Helper::getColumnList('Categories') as $col_name)
                            <th scope="col">{{$col_name}}</th>
                        @endforeach
                        <th scope="col">Function</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td>
                                <div class="d-flex">
                                    {!! Form::open(['method' => 'get', 'action' => ['AdminCategoryController@edit', $category->id], 'class' => 'form-group']) !!}
                                    {!! Form::submit('Edit', ['class' => 'btn btn-primary form-control']);  !!}
                                    {!! Form::close() !!}

                                    {!! Form::open(['method' => 'delete', 'action' => ['AdminCategoryController@destroy', $category->id], 'class' => 'form-group']) !!}
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
