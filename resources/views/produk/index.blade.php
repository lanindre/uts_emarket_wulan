@extends('templates.layout')

@push('style')
@endpush

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Produk</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times</span>
                        </button>
                    </div>
                @endif
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#produkFormModal">
                    Tambah Produk
                </button>

                {{-- <table class="table table-sm table-hover table-stripped table-bordered" id="tbl-produk">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $prod)
                    <tr>
                        <th scope="row">{{ $i = (!isset($i)?1:++$i) }}</th>
                        <td class="produk{{ $prod->id }}">{{ $prod->nama_produk }}</td>
                        <td>
                            <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
                            <form action="{{ route('produk.destroy', $prod) }}" method="post" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-delete " data-id="{{ $prod->id }}"><i class="fas fa-trash"></i></button>
                            </td>
                            </form>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}
                <div class="mt-3">
                    @include('produk.data')
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            @include('produk.form')
            @include('produk.edit')
    </section>
@endsection
@push('script')
    <script>
        $('.alert-success').fadeTo(2000, 500).slideUp(500, function() {
            $('.alert-success').slideUp(500)
        })

        $('.alert-danger').fadeTo(2000, 500).slideUp(500, function() {
            $('.alert-danger').slideUp(500)
        })

        $(function() {

            // dialog hapus data
            $('.btn-delete').on('click', function(e) {
                let nama_produk = $(".produk" + $(this).attr('data-id')).text()
                console.log(nama_produk)
                Swal.fire({
                    icon: 'error',
                    title: 'Hapus Data',
                    html: `Apakah data <b> ${nama_produk} </b> akan dihapus?`,
                    confirmButtonText: 'Ya',
                    denyButtonText: 'Tidak',
                    showDenyButton: true,
                    focusConfirm: false
                }).then((result) => {
                    if (result.isConfirmed) $(e.target).closest('form').submit()
                    else swal.close()
                })
            })
        })
    </script>
    <script>
        let table = new DataTable('#myTable');
    </script>
    <script>
        $(document).ready(function() {

            $('#editProdukModal').on('show.bs.modal', function(e) {
                let button = $(e.relatedTarget)
                let id = button.data('id')
                let nama = button.data('nama')
                $('#nama_produk_edit').val(nama)
                $('.form-edit').attr('action', `/produk/${id}`)
            })
        })
    </script>
@endpush
