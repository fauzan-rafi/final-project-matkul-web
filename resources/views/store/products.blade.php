@extends('layouts.app',['title' => 'Products'])

@section('content')
<div class="page-heading products-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>new arrivals</h4>
          <h2>expo's products</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filters">
          <ul>
            <li class="active" data-filter="*">
              <a href="/product"> All </a>
            </li>
            <li data-filter=".des">
              <a href="/product/celana"> Celana </a>
            </li>
            <li data-filter=".dev">
              <a href="/product/sepatu"> Sepatu </a>
            </li>
            <li data-filter=".gra">
              <a href="/product/pakaian"> Pakaian </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-12">
        <div class="filters-content">
          <div class="row grid">
            @forelse($posts as $post)
            @if($post->category->slug == 'celana')
            <div class="col-lg-4 col-md-4 all des">
              @elseif($post->category->slug == 'sepatu')
              <div class="col-lg-4 col-md-4 all dev">
                @elseif($post->category->slug == 'pakaian')
                <div class="col-lg-4 col-md-4 all gra">
                  @endif
                  <div class="product-item">
                    <a href="#"><img src="{{ $post->takeImage }}" style="width: 320px; height: 200px; object-fit: cover ; object-position:center; "></a>
                    <div class="down-content">
                      <a href="/show/{{ $post->slug }}">
                        <h4>{{ $post->title }}</h4>
                      </a>
                      <h6>IDR {{ $post->price }} </h6>
                      <p> {{ Str::limit($post->description,90,'') }} </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <span>Reviews (24)</span>
                    </div>
                  </div>
                </div>
                @empty
                <div class="col-md-6">
                  <div class="alert alert-info">
                    There's no post
                  </div>
                </div>
                @endforelse
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="d-flex justify-content-center">
              <div>
                {{ $posts->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @stop