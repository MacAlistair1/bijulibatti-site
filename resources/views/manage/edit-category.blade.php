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
                                <div class="card-header lead">Edit {{ $category->name }}</div>
                                <div class="card-content">
                                        {!! Form::open(['action' => ['CategoryController@update', $category->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                        <div class="form-group">
                                            {{ Form::label('title', "Category Name", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('name', $category->name, ['class' => 'form-control lead', 'placeholder' => 'Category Name', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-horizontal">
                                                {{ Form::label('title', "Choose Image For Category    (1060x267 px)", ['style' => 'color:black;font-weight:bold;']) }}
                                                <input type="file" class="btn btn-md btn-view" name="image"> 
                                         </div>
                                         {{ Form::hidden('_method', 'PUT') }}
                                        {{ Form::submit('Update', ['class' => 'btn btn-primary btn-lg']) }}   
                                        {!! Form::close() !!}
                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection