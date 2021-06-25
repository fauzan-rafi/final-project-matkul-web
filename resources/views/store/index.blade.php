@extends('layouts.app',['title' => 'Home'])

@section('content')
<!-- Banner Starts Here -->
<div class="banner header-text">
  <div class="owl-banner owl-carousel">
    <div class="banner-item-01">
      <div class="text-content">
        <h4>Best Offer</h4>
        <h2>New Arrivals On Sale</h2>
      </div>
    </div>
    <div class="banner-item-02">
      <div class="text-content">
        <h4>Flash Deals</h4>
        <h2>Get your best products</h2>
      </div>
    </div>
    <div class="banner-item-03">
      <div class="text-content">
        <h4>Last Minute</h4>
        <h2>Grab last minute deals</h2>
      </div>
    </div>
  </div>
</div>
<!-- Banner Ends Here -->

<!-- content -->
<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          @isset($tag)
          <h2>Tag : {{ $tag->name}}</h2>
          @else
          <h2>All Product</h2>
          @endisset
          <a href="/product">view all products <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      @forelse($posts as $post)
      <div class="col-md-4">
        <div class="product-item">
          <a href="{{ URL::to('/show/'.$post->slug) }}"><img src="{{ $post->takeImage }}"  style="width: 320px; height: 200px; object-fit: cover ; object-position:center; "></a>
          <div class="down-content">
            <a href="{{ URL::to('/show/'.$post->slug)}}">
              <h4>{{ $post->title }}</h4>
            </a>
            <h6>IDR {{ $post->price }} </h6>
            <p> {{ Str::limit($post->description,20,'') }} </p>
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
<!-- content ends -->

<!-- Section 1 -->
<div class="best-features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>About EXPO'S Clothing</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="left-content">
          <h4>Looking for the best products?</h4>
          <p><a rel="nofollow" href="https://fauzan.divistant.com" target="_parent">This Website</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit metus nec lectus rhoncus ultricies. Morbi a libero nec augue rhoncus maximus. Vivamus blandit risus a ex ultrices luctus. <a rel="nofollow" href="/contact">Contact us</a> for more info.</p>
          <ul class="featured-list">
            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            <li><a href="#">Consectetur an adipisicing elit</a></li>
            <li><a href="#">It aquecorporis nulla aspernatur</a></li>
            <li><a href="#">Corporis, omnis doloremque</a></li>
            <li><a href="#">Non cum id reprehenderit</a></li>
          </ul>
          <a href="/about" class="filled-button">Read More</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-image">
          <img src="assets/images/feature-image.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of section 1 -->

<!-- Section 2 -->
<div class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <div class="row">
            <div class="col-md-8">
              <h4>Creative &amp; Unique <em>EXPO'S</em> Products</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
            </div>
            <div class="col-md-4">
              <a href="#" class="filled-button">Purchase Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Of Section 2 -->
@stop