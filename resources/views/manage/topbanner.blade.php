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
                                <div class="card-header lead">Manage Top Banner</div>
                                <div class="card-content">
                                    @if (count($banners) > 0)
                                        <table class="table table-striped">
                                            <tr>
                                                <?php $i =1; ?>
                                                <th>S.No.</th>
                                                <th>Banner Title</th>
                                                <th>Banner Heading</th>
                                                <th></th>
                                                <th>Banner Image</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            @foreach ($banners as $banner)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $banner->title }}</td>
                                                <td>{{ $banner->heading }}</td>
                                                <td></td>
                                                <td><img src="/img/site/topbanner/{{ $banner->image }}" style="width:50%;"></td>
                                                <td>
                                                {!! Form::open(['action' => ['TopBannerController@destroy', $banner->id], 'method' => 'POST']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                {!! Form::close() !!}
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            @endforeach
                                        </table>
                                    @else
                                        <h3><center>Top Banner not Found!</center></h3>
                                    @endif
                                    {{ $banners->links() }}
                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection