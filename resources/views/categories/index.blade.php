@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Categories</h1>
            <br>
            <a href="{{route('categories.create')}}" class="btn btn-info">New Category</a>
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
                                <th>Action</th>
                            </tr>
                            @foreach($categories as $category)
                            <tr>
                                <th>{{$category->id}}</th>
                                <th>{{$category->name}}</th>
                                <th>{{$category->description}}</th>
                                <th>
                                    <a href="{{ route('categories.edit', ['id' => $category->id]) }}">Edit</a>|
                                    <a href="{{ route('categories.destroy', ['id' => $category->id]) }}">Delete</a>
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