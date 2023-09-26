<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>ID Produk</th>
            <th>Satuan</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Di Tarik</th>
            <th>ID User</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $p)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $p->kode_barang }}</td>
                <td>{{ $p->nama_barang }}</td>
                <td>{{ $p->produk_id }}</td>
                <td>{{ $p->satuan }}</td>
                <td>{{ $p->harga_jual }}</td>
                <td>{{ $p->stok_barang }}</td>
                <td>{{ $p->ditarik }}</td>
                <td>{{ $p->user_id }}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-edit" data-toggle="modal"
                        data-target="#editBarangModal"data-mode="edit" data-id="{{ $p->id }}"
                        data-json="{{ json_encode($p) }}" data-nama="{{ $p->nama_barang }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form action="{{ route('barang.destroy', $p->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-delete"><i class="fas fa-trash"></i></button>
                </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>
