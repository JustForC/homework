<table class="table mb-0 table-hover align-middle text-nowrap">
    <thead>
        <tr>
            <th class="border-top-0">Number</th>
            <th class="border-top-0">Id</th>
            <th class="border-top-0">Name</th>
            <th class="border-top-0">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($thumbnails as $thumbnail)
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h4 class="m-b-0 font-16">{{ $loop->index+1  }}</h4>
                        </div>
                    </div>
                </td>
                <td>{{ $thumbnail->id }}</td>
                <td>{{ $thumbnail->name }}</td>
                <td>
                    <button class="btn btn-warning" onClick="edit({{ $thumbnail->id }})">Edit</button>
                    <button class="btn btn-danger" onClick="erase({{ $thumbnail->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>