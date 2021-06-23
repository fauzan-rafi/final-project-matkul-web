<?php

namespace App\Http\Controllers;

use App\Store;
use App\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Tag;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store.index',[
            'posts' => Store::latest()->paginate(6),
        ]);
    }

    /* * 
    * Display listing in dashboard
    */
    public function dashboard()
    {
        return view('admin.dashboard',[
            'posts' => Store::latest()->paginate(6),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create',[
            'store' => new Store(),
            'categories' => Category::get(),
            'tags' => Tag::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // simple version
        $attr = $request->all();

        $attr['slug'] = \Str::slug(request('title'));

        $attr['category_id'] = request('category');

        $store = Store::create($attr);
        $store->tags()->attach(request('tags'));
        // flash message
        session()->flash('success','The post was created');

        // redirect to dashboard
        return redirect()->to('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return view('store.detail', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        return view('admin.edit',[
            'store' => $store,
            'categories' => Category::get(),
            'tags' => Tag::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Store $store)
    {

        $attr = $request->all();

        $attr['category_id'] = request('category');
        // upload in database with modified name
        // $attr['image'] = $imgName;

        $store->update($attr);

        $store->tags()->sync(request('tags'));
        // flash message
        session()->flash('success','The post was edited');

        // redirect to dashboard
        return redirect()->to('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        $store->delete();

        session()->flash('success','The post was deleted');

        return redirect()->to('dashboard');
    }

    public function validateImage()
    {
        if (!request('image')) {

            // to set name image, menghindari duplikasi file
            $imgName = 'default.png';
        } else {
            // to set name image, menghindari duplikasi file
            $imgName = request('image')->getClientOriginalName() . '-' . time() . '.' . request('image')->extension();

            // merubah direktori penyimpanan
            request('image')->move(public_path('assets/images'), $imgName);
        }

        // upload in database with modified name
        $attr['image'] = $imgName;
    }
}
