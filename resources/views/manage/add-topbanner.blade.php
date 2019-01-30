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
                                <div class="card-header lead">Add New Top Banner</div>
                                <div class="card-content">
                                        {!! Form::open(['action' => 'TopBannerController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                        <div class="form-group">
                                            {{ Form::label('title', "Title *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('title', '', ['class' => 'form-control lead', 'placeholder' => 'Banner Title', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                                {{ Form::label('title', "Heading *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::text('heading', '', ['class' => 'form-control lead', 'placeholder' => 'Banner Heading', 'style' => 'color:black;']) }}
                                             </div>
                                         <div class="form-horizontal">
                                            {{ Form::label('title', "Choose Image For Category    (1200x675 px) *", ['style' => 'color:black;font-weight:bold;']) }}
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