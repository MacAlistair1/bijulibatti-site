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
                                    <div class="card-header lead">Add New Product</div>
                                    <div class="card-content">
                                            {!! Form::open(['action' => 'ProductController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                            <div class="form-group">
                                                    {{ Form::label('title', "Category - SubCategory *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                    <br>
                                                    <select name="subcategory">
                                                            <option selected disabled class="form-control">-------------Select Category - Sub Category-------------</option>
                                                            @foreach ($subcategories as $subcategory)
                                                            <option value="{{ $subcategory->id }}" class="form-control">{{ $subcategory->category->name }} - {{ $subcategory->name }}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                 </div>
                                            
                                             <div class="form-group">
                                                    {{ Form::label('title', "Product Name *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                    {{ Form::text('name', '', ['class' => 'form-control lead', 'placeholder' => 'Product Name', 'style' => 'color:black;']) }}
                                             </div>
                                            
                                             <div class="form-group">
                                                    {{ Form::label('title', "Price *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                    {{ Form::text('price', '', ['class' => 'form-control lead', 'placeholder' => 'Product Price', 'style' => 'color:black;']) }}
                                             </div>
                                             <div class="form-group">
                                                    {{ Form::label('title', "Company Name *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                    {{ Form::text('company_name', '', ['class' => 'form-control lead', 'placeholder' => 'Company Name', 'style' => 'color:black;']) }}
                                             </div>
                                           

                                             <div class="form-group">
                                                 <table>
                                                     <tr>
                                                         <td>
                                                             {{ Form::label('title', "Select (can select multiple)", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                            <td>
                                                            <input type="checkbox" value="1" name="bestseller">Best Seller                                                           
                                                            <input type="checkbox" value="1" name="popular">Popular
                                                            <input type="checkbox" value="1" name="seasonal">Seasonal
                                                            </td>
                                                     </tr>
                                                     <tr></tr>
                                                     <tr></tr>
                                                     <tr></tr>
                                                     <tr>
                                                                <td>
                                                                <input type="checkbox" value="1" name="highprice">High Price
                                                                <input type="checkbox" value="1" name="featured">Featured
                                                                <input type="checkbox" value="1" name="latest">Latest
                                                                </td>
                                                     </tr>
                                                    </table>
                                                    
                                             </div>
                                             <div class="form-horizontal">
                                                    {{ Form::label('title', "Choose an Image", ['style' => 'color:black;font-weight:bold;']) }}
                                                    <input type="file" class="btn btn-md btn-view" name="image"> 
                                             </div>


                                            {{ Form::submit('Add', ['class' => 'btn btn-primary btn-lg']) }}   
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