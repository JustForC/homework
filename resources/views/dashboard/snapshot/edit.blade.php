<form id="formSnapshot" enctype="multipart/form-data" method="POST" action="{{route('updateSnapshot',$snapshot->id)}}">
    @csrf
    <input type="hidden" name="path" value="{{$snapshot->path}}">
    <div class="mb-3">
      <label for="image" class="form-label">Foto Snapshot</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
        <img src="{{asset($snapshot->path)}}" class="img-fluid">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Nama Snapshot</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$snapshot->name}}">
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
