@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Editing Product: {{ $product->name }}</h1>

            @if($errors->any())

                <ul class="alert-danger">

                    @foreach($errors->all() as $erro)

                        <li>{{$erro}}</li>

                    @endforeach

                </ul>

            @endif

            {!! Form::open(['route' => ['products.update', $product->id], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', $product->name, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', $product->description, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::text('price', $product->price, ['class'=>'form-control']) !!}
                </div>

            <div class="form-group">
                {!! Form::label('featured', 'Featured:') !!}
                {!! Form::checkbox('featured', $product->featured, ['class' => 'form-control']) !!}

                {!! Form::label('recommend', 'Recommend:') !!}
                {!! Form::checkbox('recommend', $product->recommend, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Save Product', ['class'=>'btn btn-primary']) !!}

                <a href="{{route('products')}}" class="btn btn-default">Voltar</a>
            </div>


            {!! Form::close() !!}

        </div>
    </div>
@endsection