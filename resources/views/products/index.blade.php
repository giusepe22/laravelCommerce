@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Products</h1>
            <br>
            <a href="{{route('products.create')}}" class="btn btn-info">New Product</a>
            <br>
            <br>
            {{--<div class="col-md-10 col-md-offset-1">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Categories</div>--}}
                    <!--<div class="panel-body">-->

                        <table class="table table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Featured</th>
                                <th>Recommended</th>
                                <th>Action</th>
                            </tr>
                            @foreach($products as $product)
                            <tr>
                                <th>{{$product->id}}</th>
                                <th>{{$product->name}}</th>
                                <th>{{$product->description}}</th>
                                <th>{{$product->price}}</th>
                                <th>{{$product->featured}}</th>
                                <th>{{$product->recommended}}</th>
                                <th>
                                    <a href="{{ route('products.edit', ['id' => $product->id]) }}">Edit</a>|
                                    <a href="{{ route('products.destroy', ['id' => $product->id]) }}">Delete</a>
                                </th>
                            </tr>
                             @endforeach

                        </table>
                    {{--<!--</div>-->--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection