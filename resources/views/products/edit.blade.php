@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Editing Product: {{ $products->name }}</h1>

            @if($errors->any())

                <ul class="alert-danger">
                    @foreach($errors->all() as $erro)
                        <li>{{$erro}}</li>
                    @endforeach
                </ul>

            @endif

            {!! Form::open(['route' => ['products.update', $products->id], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('category', 'Category:') !!}
                {!! Form::select('category_id', $categories, $products->category->id, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', $products->name, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', $products->description, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::text('price', $products->price, ['class'=>'form-control']) !!}
                </div>

            <div class="form-group">
                {!! Form::label('featured', 'Featured:') !!}
                {!! Form::checkbox('featured', 'featured', $products->featured) !!}

                {!! Form::label('recommend', 'Recommend:') !!}
                {!! Form::checkbox('recommend', 'recommend', $products->recommend) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Save Product', ['class'=>'btn btn-primary']) !!}

                <a href="{{route('products')}}" class="btn btn-default">Voltar</a>
            </div>


            {!! Form::close() !!}

        </div>
    </div>
@endsection