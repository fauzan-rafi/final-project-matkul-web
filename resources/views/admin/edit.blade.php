@extends('layouts.dashboard.panel',['title' => 'Insert'])

@section('content')
<div class="container bg-white">
      <div class="d-flex justify-content-between align-items-center">
            <div>
                  <h1 class="text-2xl font-light px-10 py-5">Update Data</h1>
            </div>
            <div>
                  <a class="btn btn-success items-center" role="button" href="/dashboard">Back to dashboard</a>
            </div>
      </div>
</div>
<div class="container bg-white">
      <div class="row mt-4">
            <div class="col-md-8">
                  <div class="card">
                        <div class="card-header">
                              <h3>Silahkan masukan data</h3>
                        </div>
                        <div class="card-body">
                              <form action="/admin/{{ $store->slug }}/edit" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    @include('layouts.partial.form-control',['submit' => 'Insert'])
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>

@stop