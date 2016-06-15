@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Images of {{ $product->name }}</h1>
            <br>
            <a href="#" class="btn btn-info">New Image</a>
            <br>
            <br>
            {{--<div class="col-md-10 col-md-offset-1">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Categories</div>--}}
                    <!--<div class="panel-body">-->

                        <table class="table table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Extension</th>
                                 <th>Action</th>
                            </tr>
                            
                            @foreach($product->images as $image)
                            <tr>
                                <td>{{ $image->id }}</td>
                                 <td></td>
                               <td>{{ $image->extension }}</td>

                               <td>
                                   
                               </td>
                            </tr>
                             @endforeach

                        </table>
                    
                 <!--    {!! $product->images()->paginate()->render() !!}  ajutando o paginate com render -->
                    {{--<!--</div>-->--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection