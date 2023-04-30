@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-3 h-100">
                    <div class="card">
                        <img src="{{asset($product->image)}}"alt=""width=""height="170"/>
                        <div class="card-body">
                            <h3>{{$product->name}}</h3>
                            <p>{{$product->description}}</p>
                            <hr/>
                            <a href=""class="btn btn-outline-danger">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection