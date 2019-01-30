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
                                <div class="card-header lead">Edit SubCategory</div>
                                <div class="card-content">
                                        {!! Form::open(['action' => ['SubCategoryController@update', $subcategory->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                        <div class="form-group">
                                                {{ Form::label('title', "Category *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                               <br> 
                                                <select name="category">
                                                    @foreach ($categories as $category)
                                                    @if ($subcategory->category_id == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                    @elseif ($subcategory->category_id != $category->id)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>                                                    
                                                    @endif
                                                    @endforeach
                                                </select>
                                             </div>
                                        <div class="form-group">
                                            {{ Form::label('title', "SubCategory Name *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('name', $subcategory->name, ['class' => 'form-control lead', 'placeholder' => 'Category Name', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-horizontal">
                                            {{ Form::label('title', "Choose Image For SubCategory    (500x230 px) ", ['style' => 'color:black;font-weight:bold;']) }}
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