@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
    @foreach ($viewData["products"] as $product)
    <div class="card">
        <img src="{{ asset('/img/'.$product["image"])}}" class="card-img-top img-card">
        <div class="card-body text-center">
            <a href="{{route('product.show', ['id'=>$product["id"]])}}" class="btn bg-primary text-white">{{$product["name"]}}</a>
</div>
</div>
</div>
@endforeach
</div>
@endsection