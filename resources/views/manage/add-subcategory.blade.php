@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
@include('admin-inc.message')

<div class="container">
        <div class="row">
                <div class="col-md-10">
                        <div class="card">
                                <div class="card-header lead">Add New SubCategory</div>
                                <div class="card-content">
                                        {!! Form::open(['action' => 'SubCategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                        <div class="form-group">
                                                {{ Form::label('title', "Category *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                               <br> 
                                                <select name="category">
                                                    <option disabled selected>-------------------------Choose Category-------------------------</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                             </div>
                                        <div class="form-group">
                                            {{ Form::label('title', "SubCategory Name *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('name', '', ['class' => 'form-control lead', 'placeholder' => 'Category Name', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-horizontal">
                                            {{ Form::label('title', "Choose Image For SubCategory    (500x230 px) *", ['style' => 'color:black;font-weight:bold;']) }}
                                            <input type="file" class="btn btn-md btn-view" name="image"> 
                                     </div>
                                        {{ Form::submit('Add', ['class' => 'btn btn-primary btn-lg']) }}   
                                        {!! Form::close() !!}
                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection