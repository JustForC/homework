<table class="table mb-0 table-hover align-middle text-nowrap">
    <thead>
        <tr>
            <th class="border-top-0">Number</th>
            <th class="border-top-0">Id</th>
            <th class="border-top-0">Name</th>
            <th class="border-top-0">Category</th>
            <th class="border-top-0">Jumlah Terjual/Minggu</th>
            <th class="border-top-0">Price</th>
            <th class="border-top-0">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h4 class="m-b-0 font-16">{{ $loop->index+1  }}</h4>
                        </div>
                    </div>
                </td>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->count }}</td>
                <td>
                    <h5 class="m-b-0">Rp. {{ $product->price }}</h5>
                </td>
                <td>
                    <button class="btn btn-warning" onClick="edit({{ $product->id }})">Edit</button>
                    <button class="btn btn-danger" onClick="erase({{ $product->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>