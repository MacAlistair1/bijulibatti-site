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
                                <div class="card-header lead">Add New Ads</div>
                                <div class="card-content">
                                        {!! Form::open(['action' => 'AdViewController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                        
                                        <div class="form-group">
                                                {{ Form::label('title', "Ad Title *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::text('title', '', ['class' => 'form-control lead', 'placeholder' => 'Ad Title', 'style' => 'color:black;']) }}
                                        </div>

                                        <div class="form-group">
                                                {{ Form::label('title', "Choose a Page for current Ad *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                <select class="form-control" name="page">
                                                        <option selected disabled class="form-control">Select Page</option>
                                                        <option value="1" class="form-control">Landing Page Ad 1 &nbsp; [420x700px]</option>
                                                        <option value="2" class="form-control">Landing Page Ad 2 &nbsp; [1440x1080px]</option>
                                                        <option value="3" class="form-control">Landing Page Ad 3 &nbsp; [720x540px]</option>
                                                        <option value="4" class="form-control">Landing Page Ad 4 &nbsp; [720x540px]</option>
                                                        <option value="5" class="form-control">Landing Page Ad 5 &nbsp; [420x700px]</option>
                                                    </select>
                                        </div>
                                        <br>
                                        
                                        <div class="form-horizontal">
                                                {{ Form::label('title', "Choose an Image *", ['style' => 'color:black;font-weight:bold;']) }}
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