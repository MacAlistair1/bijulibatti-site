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
                                <div class="card-header lead">Manage Category</div>
                                <div class="card-content">
                                    @if (count($categories) > 0)
                                        <table class="table table-striped">
                                            <tr>
                                                <?php $i =1; ?>
                                                <th>S.No.</th>
                                                <th>Category Name</th>
                                                <th>Category Slug</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td><a href="/categories/{{ $category->id }}/edit" class="btn btn-primary">Edit</a></td>
                                                <td>
                                                {!! Form::open(['action' => ['CategoryController@destroy', $category->id], 'method' => 'POST']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                {!! Form::close() !!}
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            @endforeach
                                        </table>
                                    @else
                                        <h3><center>Category not Found!</center></h3>
                                    @endif
                                    {{ $categories->links() }}
                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection