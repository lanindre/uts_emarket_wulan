<div class="modal fade" id="barangFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action={{ route('barang.store') }}>
                    @csrf
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-4 col-form-label">Kode Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputEmail13" value=""
                                placeholder="Kode Barang" name="kode_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_barang" class="col-sm-4 col-form-label">Nama Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputEmail13" placeholder="Nama Barang"
                                name="nama_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_barang" class="col-sm-4 col-form-label">ID Produk</label>
                        <div class="col-sm-8">
                            <select name="produk_id" id="">
                                @foreach ($produk as $p => $label)
                                    <option value="{{ $p }}">{{ $label }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" id="inputEmail13" placeholder="Jenis Barang"
                                name="produk_id"> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_barang" class="col-sm-4 col-form-label">Satuan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputEmail13" placeholder="Kategori Barang"
                                name="satuan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_barang" class="col-sm-4 col-form-label">Harga Jual</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputEmail13" placeholder="Kategori Barang"
                                name="harga_jual">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_barang" class="col-sm-4 col-form-label">Stok Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputEmail13" placeholder="Kategori Barang"
                                name="stok_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_barang" class="col-sm-4 col-form-label">Di Tarik</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputEmail13" placeholder="Kategori Barang"
                                name="ditarik">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_barang" class="col-sm-4 col-form-label">ID User</label>
                        <div class="col-sm-8">
                            <select name="user_id">
                                @foreach ($users as $u => $label)
                                    <option value="{{ $u }}">{{ $label }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" id="inputEmail13" placeholder="Kategori Barang"
                                name="user_id""> --}}
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
