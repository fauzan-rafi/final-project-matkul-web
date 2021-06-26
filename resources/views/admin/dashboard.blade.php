@extends('layouts.dashboard.panel',['title' => 'Dashboard'])

@section('content')
<ol class="breadcrumb mb-4" style="z-index:1; margin-top:-25px;">
    <li class="breadcrumb-item active" style="color: black; font-weight: bold;">
        Sistem Input data
    </li>
</ol>

<div class="container bg-white ">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h1 class="text-2xl font-light px-10 py-5">Hello {{ Auth::user()->name }}</h1>
        </div>
        <div>
            <a class="btn btn-primary rounded-pill" role="button" href="/admin/create">Insert data</a>
        </div>
    </div>
</div>

<br>

@include('alert')
<!-- Card -->
<div class="container ">
    <div class="flex flex-col bg-white m-auto p-auto">
        <div class="flex overflow-x-scroll pb-10 hide-scroll-bar">
            <div class="flex flex-nowrap ml-10 ">
                <!-- First card -->
                <div class="inline-block">
                    <div class=" px-8 py-8 bg-white w-96 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="{{ asset('assets/images/tshirt.svg') }}" alt="..." class="logo-area h-4">
                        <h3 class="py-2 text-4xl font-bold font-mono"> {{ $posts->count() }}</h3>
                        <p class="text-xs">Available item : 10<br>Sell item : 20</p>
                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                                Shirt
                            </span>
                            <span class=" inline-flex items-center leading-none text-sm">
                                View number
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Second card -->
                <div class="inline-block">
                    <div class=" px-8 py-8 bg-white w-96 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="{{ asset('assets/images/jeans.svg') }}" class="logo-area h-4">
                        <h3 class="py-2 text-4xl font-bold font-mono">$105</h3>
                        <p class="text-xs">Available item : 10<br>Sell item : 20</p>
                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                                Pants
                            </span>
                            <span class=" inline-flex items-center leading-none text-sm">
                                View number
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Third card -->
                <div class="inline-block">
                    <div class=" px-8 py-8 bg-white w-96 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="{{ asset('assets/images/money.svg') }}" class="logo-area h-4">
                        <h3 class="py-2 text-4xl font-bold font-mono">$105</h3>
                        <p class="text-xs">Last month's total charge : $900<br>Lastly used by : $30 - Fortnite</p>
                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                                Income
                            </span>
                            <span class=" inline-flex items-center leading-none text-sm">
                                View number
                            </span>
                        </div>
                    </div>
                </div>

                <!-- End of third card -->
            </div>
        </div>
    </div>
</div>


<!-- End card -->
<br>
<div class="container bg-white">
    @if($posts->count())
    <table class="table table-bordered pd-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Desc</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Kategori</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i = 1
            @endphp
            @foreach($posts as $post )
            <tr>
                <td> {{ $i }} </thd>
                <td> {{ $post->title }} </td>
                <td>
                    <img class="img-thumbnail" src="{{ $post->takeImage }}" style="width: 100px; object-fit: cover ; object-position:center; ">
                </td>

                <td>
                    {{ $post->description }}
                </td>

                <td>IDR {{ $post->price }}</td>

                <td> {{ $post->stock }} </td>

                <td> {{ $post->category->name }} </td>

                <td>
                    <a role="button" class="btn btn-sm btn-success text-light" href="/admin/{{$post->slug}}/edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                        </svg>
                    </a>
                </td>
                <td>
                    <form action="/admin/{{ $post->slug }}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('yakin dihapus')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
            @php
            $i++
            @endphp
            @endforeach
        </tbody>
        {{ $posts->links() }}
    </table>
    @else
    <div class="col-md-6">
        <div class="alert alert-info">
            There's no post
        </div>
    </div>
    @endif
</div>

@stop