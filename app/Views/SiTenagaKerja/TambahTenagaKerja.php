<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"> Tambah Tenaga Kerja </h2>
            <form action="#" method="POST">
                <?= csrf_field();?>
                <div class="form-group row">
                    <label for="Nama" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggalLahir" name="birthday">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
  
            </form>
        </div>
    </div>
</div>


<?= $this->endsection();?>