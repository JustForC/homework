<form id="formThumbnail" enctype="multipart/form-data" method="POST" action="{{route('updateThumbnail',$thumbnail->id)}}">
    @csrf
    <input type="hidden" name="path" value="{{$thumbnail->path}}">
    <div class="mb-3">
      <label for="image" class="form-label">Foto Thumbnail</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
        <img src="{{asset($thumbnail->path)}}" class="img-fluid">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Nama Thumbnail</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$thumbnail->name}}">
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
