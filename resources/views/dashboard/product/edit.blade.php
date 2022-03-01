<form id="formProduct" enctype="multipart/form-data" method="POST" action="{{route('updateProduct',$product->id)}}">
    @csrf
    <input type="hidden" name="path" value="{{$product->path}}">
    <div class="mb-3">
      <label for="image" class="form-label">Foto Produk</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
        <img src="{{asset($product->path)}}" class="img-fluid">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Harga Produk</label>
      <input type="number" class="form-control" id="price" name="price" value={{$product->price}}>
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Kategori Produk</label>
      <select class="form-select" id="category" name="category">
        <option selected>Pilih Kategori</option>
        <option value="Makanan" @if($product->category == "Makanan") selected = "selected"@endif>Makanan</option>
        <option value="Minuman" @if($product->category == "Minuman") selected = "selected"@endif>Minuman</option>
      </select>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Example textarea</label>
        <textarea class="form-control" id="description" rows="3" name="description">{{$product->description}}</textarea>
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
