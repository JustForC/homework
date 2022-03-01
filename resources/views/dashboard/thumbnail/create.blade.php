<form id="formThumbnail" enctype="multipart/form-data" method="POST" action="{{route('storeThumbnail')}}">
    @csrf
    <div class="mb-3">
      <label for="image" class="form-label">Foto Thumbnail</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Nama Thumbnail</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
