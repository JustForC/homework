<form id="formSnapshot" enctype="multipart/form-data" method="POST" action="{{route('storeSnapshot')}}">
    @csrf
    <div class="mb-3">
      <label for="image" class="form-label">Foto Snapshot</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
