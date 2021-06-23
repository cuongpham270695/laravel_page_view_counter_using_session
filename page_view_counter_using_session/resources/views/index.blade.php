@extends('layouts.master')
@section('content')
    <div class="title m-b-md">Product list</div>
    <div class="row">
        @if(!isset($products)||count($products) === 0)
            <p class="text-danger">Don't have any product</p>
        @else
            @foreach($products as $key => $product)
                <div class="col-4">
                    <div class="card text-left" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <p class="card-text text-dark">${{$product->price}}</p>
                            <p class="card-text text-danger">View count: {{$product->view_count}}</p>
                            <a href="{{route('show',$product->id)}}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
