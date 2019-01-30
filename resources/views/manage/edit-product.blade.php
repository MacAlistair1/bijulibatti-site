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
                                    <div class="card-header lead">Edit Product</div>
                                    <div class="card-content">
                                            {!! Form::open(['action' => ['ProductController@update', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                            <div class="form-group">
                                                    {{ Form::label('title', "Category - SubCategory *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                    <br>
                                                    <select  name="subcategory">
                                                            <option selected value="{{ $product->subcategory->id }}" class="form-control">{{ $product->category->name }} - {{ $product->subcategory->name }}</option>
                                                            @foreach ($subcategories as $subcategory)
                                                            @if ($product->subcategory->id != $subcategory->id)
                                                            <option value="{{ $subcategory->id }}" class="form-control">{{ $subcategory->category->name }} - {{ $subcategory->name }}</option>
                                                            @endif
                                                            @endforeach
                                                        
                                                        </select>
                                                 </div>
                                               
                                    
                                             <div class="form-group">
                                                    {{ Form::label('title', "Product Name *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                    {{ Form::text('name', $product->name, ['class' => 'form-control lead', 'placeholder' => 'Product Name', 'style' => 'color:black;']) }}
                                             </div>
                                             <div class="form-group">
                                                    {{ Form::label('title', "Price *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                    {{ Form::text('price', $product->price, ['class' => 'form-control lead', 'placeholder' => 'Product Price', 'style' => 'color:black;']) }}
                                             </div>
                                             <div class="form-group">
                                                    {{ Form::label('title', "Company Name *", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                    {{ Form::text('company_name', $product->company_name, ['class' => 'form-control lead', 'placeholder' => 'Company Name', 'style' => 'color:black;']) }}
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
                                                            <input type="checkbox" value="1" name="bestseller" <?php if($product->bestseller == 1) { echo 'checked'; } ?> >Best Seller                                                           
                                                            <input type="checkbox" value="1" name="popular" <?php if($product->popular == 1) { echo 'checked'; } ?> >Popular
                                                            <input type="checkbox" value="1" name="seasonal" <?php if($product->seasonal == 1) { echo 'checked'; } ?> >Seasonal
                                                            </td>
                                                     </tr>
                                                     <tr></tr>
                                                     <tr></tr>
                                                     <tr></tr>
                                                     <tr>
                                                                <td>
                                                                <input type="checkbox" value="1" name="highprice" <?php if($product->highprice == 1) { echo 'checked'; } ?> >High Price
                                                                <input type="checkbox" value="1" name="featured" <?php if($product->featured == 1) { echo 'checked'; } ?> >Featured
                                                                <input type="checkbox" value="1" name="branding" <?php if($product->latest == 1) { echo 'checked'; } ?> >Latest
                                                                </td>
                                                     </tr>
                                                    </table>
                                                    
                                             </div>
                                             <div class="form-horizontal">
                                                    {{ Form::label('title', "Choose an Image", ['style' => 'color:black;font-weight:bold;']) }}
                                                    <input type="file" class="btn btn-md btn-view" name="image"  multiple> 
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