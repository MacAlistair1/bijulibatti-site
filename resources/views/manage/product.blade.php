@extends('layouts.admin')

@section('title')
    E-commerce | Product
@endsection

@section('content')
@include('admin-inc.message')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                        <div class="card-header lead">Manage All Products</div>
                    <div class="card-body">
                            @if (count($products) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                               
                                
                                    @foreach ($products as $product)
                                    <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->subcategory->name }}</td>
                                    <td><a href="/our-products/{{ $product->id }}/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                            {!! Form::open(['action' => ['ProductController@destroy', $product->id], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                            {!! Form::close() !!}
                                    </td>
                                    </tr>
                                    @endforeach                               
                                   @else
                                       <h3><center>Products Not Found!</center></h3>
                                   @endif
                                   <tr>
                                       <td>{{ $products->links() }}</td>
                                   </tr>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection