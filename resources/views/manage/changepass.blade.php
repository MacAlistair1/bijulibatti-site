@section('title')
{{ $title}}
@endsection
@extends('layouts.admin')

@section('content')
@include('admin-inc.message')
<div class="container">
        <div class="row">
                <div class="col-md-10">
                        <div class="card">
                                        <div class="card-header small"><h3>Change Password</h3></div>
                                        <hr>
                                <div class="card-content">
                                        {!! Form::open(['action' => 'AdminPasswordController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                        <div class="form-group">
                                            {{ Form::label('title','Old Password', ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::password('oldpassword', ['class' => 'form-control lead', 'placeholder' =>'Old Password','style' => 'color:black;']) }}
                                           
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('tel', "New Password", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::password('newpassword', ['class' => 'form-control', 'placeholder' => 'Choose New Password', 'style' => 'color:black;']) }}
                                        </div>
                                         </div>
                                        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}   
                                        {!! Form::close() !!}
                                </div>
                        </div>
                </div>
        </div>
</div>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection