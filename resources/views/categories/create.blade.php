@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Create Category</h1>

            @if($errors->any())
                <ul class="alert-danger">
                    @foreach($errors->all() as $erro)

                        <li>{{$erro}}</li>

                    @endforeach
                </ul>

            @endif

            {!! Form::open(['route'=>'categories.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add Category', ['class'=>'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}

        </div>
    </div>
@endsection