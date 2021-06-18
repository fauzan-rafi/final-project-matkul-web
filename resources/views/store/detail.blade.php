@extends('layouts.app',['title' => 'Detail' ])

@section('content')
<div class="banner">
      <div class="container mt-4 justify-content-center">
            <div class="row">
                  <div class="card mb-3" style="max-width: 600px;">
                        <div class="row no-gutters">
                              <div class="col-md-6">
                                    <img src="{{ asset('assets/images/'. $store->image)}}" class="card-img-top" alt="..." height="200" width="300">
                              </div>
                              <div class="col-md-6">
                                    <div class="card-body">
                                          <h5 class="card-title">{{ $store->title }} </h5>
                                          <div class=" card-text text-secondary">
                                                <a href="/product/{{ $store->category->slug }}" class="btn btn-default btn-sm"> {{ $store->category->name }} </a> &middot; {{ $store->created_at->format("d F, Y") }}
                                                <br>
                                                Tag :
                                                @foreach($store->tags as $tag)
                                                <small>
                                                      <a href="/tags/{{ $tag->slug }}" class="btn btn-secondary btn-sm"> {{ $tag->name }} </a>
                                                </small>
                                                @endforeach
                                          </div>
                                          <p class="card-text">Desc : {{ $store->description }}</p>
                                          <p class="card-text">Price : {{ $store->price }}</p>
                                          <p class="card-text">Stok : {{ $store->stock }}</p>
                                          <p class="card-text"><small class="text-muted">Last updated {{ $store->created_at->diffForHumans() }} </small></p>
                                          <a class="btn btn-success btn-sm" role="button" href="/">Back to main page</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
@stop