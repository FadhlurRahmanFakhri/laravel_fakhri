

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="col">
        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title">Tambah Data lokasi</h3>
            </div>
            <form action="{{ route('lokasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>jam</label>
                            <input type="text" class="form-control" id="jam" name="jam" placeholder="Masukkan jam">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>isi</label>
                            <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan isi">
                        </div>
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>


