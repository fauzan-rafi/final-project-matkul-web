<div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $store->title }}">
      @error('title')
      <div class="invalid-feedback">
            {{ $message }}
      </div>
      @enderror
</div>

<!-- Uploaded Image -->
<!-- <div class="form-group">
      <label for="image">Choose file</label>
      <img src="{{ asset('assets/images/'.$store->image) }}" width="150">
      <input type="file" class="form-control" id="image" name="image">
</div>
<input type="hidden" name="old-image" value="{{ $store->image }}"> -->
<!-- End of uploaded image -->

<div class="form-group">
      <label for="description">Description</label>
      <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"> {{ old('description') ?? $store->description }} </textarea>
      @error('description')
      <div class="invalid-feedback">
            {{ $message }}
      </div>
      @enderror
</div>

<div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') ?? $store->price }}">
      @error('price')
      <div class="invalid-feedback">
            {{ $message }}
      </div>
      @enderror
</div>
<div class="form-group">
      <label for="stock">Stock</label>
      <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ old('stock') ?? $store->stock }}">
      @error('stock')
      <div class="invalid-feedback">
            {{ $message }}
      </div>
      @enderror

</div>
<button type="submit" class="btn btn-primary">{{ $submit ?? 'Update' }}</button>