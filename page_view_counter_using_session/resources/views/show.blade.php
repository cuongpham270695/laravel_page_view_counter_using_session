@extends('layouts.master')
@section('content')
    <div class="title m-b-md">Detail of product</div>
    <div class="row">
        @if(!isset($product))
            <p class="text-danger">Don't have any product</p>
        @else
            <div class="col-12">
                <div class="card text-left" style="width: 100%;">
                    <div class="card-body">
                        <h3 class="card-title">{{$product->name}}</h3>
                        <p class="card-text">{{$product->description}}</p>
                        <p class="card-text text-dark">${{$product->price}}</p>
                        <p class="card-text text-danger">View count: {{$product->view_count}}</p>
                        <a href="{{route('index')}}" class="btn btn-primary">Return</a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
