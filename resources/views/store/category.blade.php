
@extends('store.store') <!-- herdando o template principal la no store-->

@section('categories')

@include('store.partial.categories') <!-- herdando o template da parte de categorias la no store-->

@stop

@section('content')  <!-- herdando o content do store-->

<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">{{ $category->name }} </h2>

        @include('store.partial.product', ['products' => $products])


    </div><!--features_items-->



</div>

@stop