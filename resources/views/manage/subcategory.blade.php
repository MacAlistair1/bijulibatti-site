
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
                                <div class="card-header lead">Manage SubCategory</div>
                                <div class="card-content">
                                    @if (count($subcategories) > 0)
                                        <table class="table table-stripped">
                                            <tr>
                                                <?php $i =1; ?>
                                                <th>S.No.</th>
                                                <th>SubCategory Name</th>
                                                <th>SubCategory Slug</th>
                                                <th>Category Name</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            @foreach ($subcategories as $subcategory)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $subcategory->name }}</td>
                                                <td>{{ $subcategory->slug }}</td>
                                                <td>{{ $subcategory->category->name }}</td>
                                                <td><a href="/sub-categories/{{ $subcategory->id }}/edit" class="btn btn-primary">Edit</a></td>
                                                <td>
                                                {!! Form::open(['action' => ['SubCategoryController@destroy', $subcategory->id], 'method' => 'POST']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                {!! Form::close() !!}
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            @endforeach
                                        </table>
                                    @else
                                        <h3><center>Subcategory not Found!</center></h3>
                                    @endif
                                    {{ $subcategories->links() }}
                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection