<form id="formProduct" enctype="multipart/form-data" method="POST" action="{{route('storeProduct')}}">
    @csrf
    <div class="mb-3">
      <label for="image" class="form-label">Foto Produk</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Harga Produk</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Kategori Produk</label>
      <select class="form-select" id="category" name="category">
        <option selected>Pilih Kategori</option>
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
      </select>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Example textarea</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
