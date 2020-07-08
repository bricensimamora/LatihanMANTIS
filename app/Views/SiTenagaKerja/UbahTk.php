<?= $this->extend('layout/template');?>


use Config\Validation;

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"> Ubah Tenaga Kerja </h2>
            <?= $validation ->listErrors() ; ?>
            <form action="/TkController/update/<?= $tenagakerja['tk_id']; ?>" method="post">
                <?= csrf_field();?>
                <div class="form-group row">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama" name="tk_name" value="<?= $tenagakerja['tk_name']; ?>" autofocus required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="Alamat" name="tk_alamat" value="<?= $tenagakerja['tk_alamat']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="Alamat" name="tk_agama" value="<?= $tenagakerja['tk_agama']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggalLahir" name="tk_tanggalLahir"  value="<?= $tenagakerja['tk_tanggalLahir']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </div>
  
            </form>
        </div>
    </div>
</div>


<?= $this->endsection();?>