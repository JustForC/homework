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
        @foreach ($snapshots as $snapshot)
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h4 class="m-b-0 font-16">{{ $loop->index+1  }}</h4>
                        </div>
                    </div>
                </td>
                <td>{{ $snapshot->id }}</td>
                <td>{{ $snapshot->name }}</td>
                <td>
                    <button class="btn btn-warning" onClick="edit({{ $snapshot->id }})">Edit</button>
                    <button class="btn btn-danger" onClick="erase({{ $snapshot->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>