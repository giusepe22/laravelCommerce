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
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ str_limit($product->description, $limit = 100, $end = '...') }}</th>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>
                                    <a href="{{ route('products.edit', ['id' => $product->id]) }}">Edit</a>|
                                    <a href="{{ route('products.destroy', ['id' => $product->id]) }}">Delete</a>
                                </td>
                            </tr>
                             @endforeach

                        </table>
                    
                    {!! $products->render() !!}<!-- ajutando o paginate com render -->
                    {{--<!--</div>-->--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection