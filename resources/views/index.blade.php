@extends('layouts.front')

@section('content')
<div class="row mt-4">

  @foreach($products as $product)
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="{{ $product->photo->url ?? 'http://placehold.it/525x300' }}" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">{{ $product->name }}</a>
          </h4>
          <h5>${{ $product->price }}</h5>
          <p class="card-text">{{ Str::limit($product->description, 75) }}</p>
        </div>
      </div>
    </div>
  @endforeach

</div>
@endsection
