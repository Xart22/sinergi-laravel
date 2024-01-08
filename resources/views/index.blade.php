@extends('layout ') @section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css" />

@endsection @section('content')

<form action="{{ route('send-email') }}" method="post">
    @csrf
    <div class="row mt-5">
        <div class="col">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Kirim Emal From</label>
                <select class="form-select" id="inputGroupSelect01" name="from">
                    <option value="adit">aditri@sinergisertifikasi.com</option>
                    <option value="lukman">lukman@sinergisertifikasi.com</option>
                </select>
            </div>

        </div>
        <div class="col"></div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addData">
                Tambah Data
            </button>

            <button type="submit" class="btn btn-success" id="toast">
                Kirim Email
            </button>
            <a href="{{ route('reset-email') }}">
                <button type="button" class="btn btn-secondary" id="toast">
                    Reset Email
                </button></a>
        </div>
        <div class="col"></div>
    </div>
</form>
<div class="row mt-5">
    <div class="col">
        <table id="example" class="display" style="width: 100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis Usaha</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No. Tlp</th>
                    <th>Last Send Email</th>
                    <th>Action</th>

                </tr>
            </thead>

        </table>
    </div>
</div>
<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('create') }}" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataLabel">
                        Tambah Data Badan Usaha
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" />
                    </div>
                    <div class="form-group">
                        <label for="jenis_usaha">Jenis Usaha</label>
                        <input type="text" class="form-control" name="jenis_usaha" placeholder="Jenis Usaha" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <label for="no_tlp">No. Tlp</label>
                        <input type="text" class="form-control" name="no_tlp" placeholder="No. Tlp" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="updateData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="" method="post" id="form-update">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataLabel">
                        Update Data Badan Usaha
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" />
                    </div>
                    <div class="form-group">
                        <label for="jenis_usaha">Jenis Usaha</label>
                        <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" placeholder="Jenis Usaha" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <label for="no_tlp">No. Tlp</label>
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="No. Tlp" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDataLabel">
                    Delete Data Badan Usaha
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <a href="" id="deleteUrl">
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button></a>
            </div>
        </div>
    </div>
</div>
@endsection @section('script')

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $("#example").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('get-data') }}",
            columns: [{
                    data: "nama",
                    name: "nama"
                },
                {
                    data: "jenis_usaha",
                    name: "jenis_usaha",

                },
                {
                    data: "alamat",
                    name: "alamat",
                    orderable: false,
                    searchable: false,
                },
                {
                    data: "email",
                    name: "email"
                },
                {
                    data: "no_tlp",
                    name: "no_tlp",
                    orderable: false,
                    searchable: false,
                },
                {
                    data: "last_send_email",
                    name: "last_send_email",
                    orderable: false,
                    searchable: false,
                }, {
                    data: "id",
                    name: "action",
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateData" onclick="updateData(this)" data-data='${JSON.stringify(row)}'>
                        Update Data </button> 
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteData" onclick="deleteData(this)" data-data='${data}'>
                        Delete Data </button>`;

                    }
                }

            ]
        });
    });

    function updateData(el) {
        const data = $(el).data("data");
        let url = '{{route("badan-usaha.update", ":id")}}';
        url = url.replace(':id', data.id);
        console.log(data);
        $("#nama").val(data.nama);
        $("#updateData #jenis_usaha").val(data.jenis_usaha);
        $("#updateData #alamat").val(data.alamat);
        $("#email").val(data.email);
        $("#no_tlp").val(data.no_tlp);
        $("#form-update").attr("action", url);
    }

    function deleteData(el) {
        let url = '{{ route("badan-usaha.delete",":id") }}';
        url = url.replace(':id', $(el).data("data"));
        $("#deleteUrl").attr("href", url);
    }
</script>
@endsection