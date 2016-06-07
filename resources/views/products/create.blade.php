@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Create Product</h1>

        @if($errors->any())
        <ul class="alert-danger">
            @foreach($errors->all() as $erro)

            <li>{{$erro}}</li>

            @endforeach
        </ul>

        @endif

        {!! Form::open(['route'=>'products.store', 'method'=>'post']) !!}

        <div class="form-group">
            {!! Form::label('category', 'Category:') !!}
            {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('featured', 'Featured:') !!}
            {!! Form::checkbox('featured', null, ['class' => 'form-control']) !!}

            {!! Form::label('recommend', 'Recommend:') !!}
            {!! Form::checkbox('recommend', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Product', ['class'=>'btn btn-primary']) !!}
            <a href="{{ route('products') }}" class="btn btn-default">Voltar</a>
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection