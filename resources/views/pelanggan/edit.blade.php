<div class="modal fade" id="editPelangganModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="pelanggan" class="form-edit">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="kode_pelanggan" class="col-sm-4 col-form-label">Nama pelanggan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_pelanggan" placeholder="Nama pelanggan"
                                name="nama_pelanggan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_pelanggan" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="alamat"
                                placeholder="Kategori pelanggan" name="alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_pelanggan" class="col-sm-4 col-form-label">No Telepon</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="no_hp"
                                placeholder="Kategori pelanggan" name="no_hp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <select id="jjenis_kelamin" placeholder="Kategori pelanggan" name="jenis_kelamin"
                            class="col-sm-8 form-control">
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
