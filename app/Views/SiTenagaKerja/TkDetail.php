<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center mt-5">
            <div class="card-header">
                DATA DIRI
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b> Nama : </b> <?= $tenagakerja['tk_name']; ?>
                </p>
                <p class="card-text">
                    <b> Alamat : </b> <?= $tenagakerja['tk_alamat']; ?>
                </p>
                <p class="card-text">
                    <b> Agama : </b> <?= $tenagakerja['tk_agama']; ?>
                </p>
                <p class="card-text">
                    <b> Tanggal lahir : </b> <?= $tenagakerja['tk_tanggalLahir']; ?>
                </p>
                <a href="/TkController/ubahTk/<?= $tenagakerja['tk_id']; ?>" class="btn btn-primary"> Ubah</a>
                <!-- coba spoofing -->
                <form class="d-inline" action="/TkController/hapusTk/<?= $tenagakerja['tk_id']; ?>" method="post">
                <?= csrf_field();?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm ('Anda akan Menghapus data ini?');"> Hapus </button>
                </form>
            </div>
            <div class="card-footer text-muted">
                Nice
            </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection();?>