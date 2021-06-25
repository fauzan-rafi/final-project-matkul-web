@extends('layouts.app',['title' => 'Detail' ])

@section('costum-css')
<link rel="stylesheet" href="{{ asset('assets/css/costum-card.css') }}">

@stop

@section('content')
<div class="banner">
      <div class="container mt-5 mb-5">
            <div class="row p-4 bg-white border rounded">
                  <div class="col-md-6 d-flex align-items-center">
                        <img class="card-img-top" src="{{ $store->takeImage }}" style="width: 350px; object-fit: cover ; object-position:center; ">
                  </div>
                  <hr>
                  <div class="col-md-6">
                        <h5>{{ $store->title }}</h5>
                        <br>
                        <div class="text-secondary">
                              <a href="/product/{{ $store->category->slug }}">{{ $store->category->name }}</a> <span class="dot"></span> {{ $store->created_at->format("d F, Y") }}
                        </div>
                        <br>
                        <div>
                              Tag :
                              @foreach($store->tags as $tag)
                              <small>
                                    <a class="btn btn-sm btn-secondary" href="/tags/{{ $tag->slug }}"> {{ $tag->name }} </a>
                              </small>
                              @endforeach
                        </div>
                        <br>
                        <p>
                              Description : {{ $store->description }}
                              <br><br>
                        </p>
                        <div class="">
                              <h4 class="mr-1">Rp. {{ $store->price }}</h4>
                              <p class=""> Stock : {{ $store->stock }}</p>
                        </div>
                        <br>
                        <div>
                              <a href="{{ route('store.product') }}" class="btn btn-success btn-sm"> Back to Main</a>
                        </div>
                        <br>
                        @auth
                        <div class="">
                              <a role="button" class="btn btn-sm btn-success text-light" href="/admin/{{$store->slug}}/edit">Edit</a>

                              <form action="/admin/{{ $store->slug }}/delete" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm mt-2" type="submit" onclick="return confirm('yakin dihapus')">Delete</button>
                              </form>
                        </div>
                        @endauth


                  </div>
            </div>
      </div>
</div>
@stop