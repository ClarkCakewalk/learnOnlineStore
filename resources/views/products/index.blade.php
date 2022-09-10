@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
    @foreach ($viewData["products"] as $product)
    <div class="card">
        <img src="{{ asset('/img/'.$product->getImage())}}" class="card-img-top">
        <div class="card-body text-center">
            <a href="{{route('product.show', ['id'=>$product->getId()])}}" class="btn bg-primary text-white">{{$product->getName()}}</a>
</div>
</div>
</div>
@endforeach
</div>
@endsection