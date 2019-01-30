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
                                <div class="card-header lead">Manage Site Content</div>
                                <div class="card-content">
                                        {!! Form::open(['action' => ['SiteController@update', $site->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                        <div class="form-group">
                                            {{ Form::label('title', "Site Name *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('name', $site->name, ['class' => 'form-control lead', 'placeholder' => 'Site Name', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                            {{ Form::label('title', "Contact 1 *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('contact', $site->contact, ['class' => 'form-control lead', 'placeholder' => 'Contact 1', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                            {{ Form::label('title', "Contact 2", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('contact1', $site->contact1, ['class' => 'form-control lead', 'placeholder' => 'Contact 2', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                            {{ Form::label('title', "Address *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('address', $site->address, ['class' => 'form-control lead', 'placeholder' => 'Site Name', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                            {{ Form::label('title', "E-mail 1 *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('email', $site->email, ['class' => 'form-control lead', 'placeholder' => 'E-mail 1', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                            {{ Form::label('title', "E-mail 2", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('email1', $site->email1, ['class' => 'form-control lead', 'placeholder' => 'E-mail 2', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                            {{ Form::label('title', "Facebook URL", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('fb_url', $site->fb_url, ['class' => 'form-control lead', 'placeholder' => 'Facebook URL', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                            {{ Form::label('title', "Twitter URL", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('twitter_url', $site->twitter_url, ['class' => 'form-control lead', 'placeholder' => 'Twitter URL', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                            {{ Form::label('title', "Instagram URL", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('insta_url', $site->insta_url, ['class' => 'form-control lead', 'placeholder' => 'Instagram URL', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                            {{ Form::label('title', "GooglePlus URL", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('gplus_url', $site->gplus_url, ['class' => 'form-control lead', 'placeholder' => 'GooglePlus URL', 'style' => 'color:black;']) }}
                                         </div>
                                         <div class="form-group">
                                             {{ Form::label('about', "About Site *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                             <textarea class="form-control lead" placeholder="About Site" name="about" rows="3" cols="2" id="article-ckeditor">{{ $site->about }}</textarea>
                                            </div>
                                        <div class="form-horizontal">
                                        {{ Form::label('title', "Choose Logo *", ['style' => 'color:black;font-weight:bold;']) }}
                                        <input type="file" class="btn btn-md btn-view" name="logo"> 
                                    </div>
                                    {{ Form::hidden('_method', 'PUT') }}
                                        {{ Form::submit('Update', ['class' => 'btn btn-primary btn-lg']) }}   
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