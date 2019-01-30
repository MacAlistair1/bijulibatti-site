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
                                <div class="card-header lead">Add New Category</div>
                                <div class="card-content">
                                        {!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                        <div class="form-group">
                                            {{ Form::label('title', "Category Name *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('name', '', ['class' => 'form-control lead', 'placeholder' => 'Category Name', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-horizontal">
                                            {{ Form::label('title', "Choose Image For Category    (1060x267 px) *", ['style' => 'color:black;font-weight:bold;']) }}
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