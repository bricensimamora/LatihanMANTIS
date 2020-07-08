<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<div class="container">
<div class="mt-3">
    <div class="row">
        <div class="col">
        <h1>DAFTAR TENAGA KERJA</h1>
        <div class="mt-3">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kehadiran</th>
            <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;?>
            <tr>
            <th scope="row"><?= $i++ ; ?></th>
            <td><img src="/image/enginer.png" alt="" class="profil"> </td>
            <td> </td>
            <td>
            <div class="btn-group btn-group-justified">
                <a type="button" href="/SiTenagaKerja/" class="btn btn-info">Lihat</a>
            </td>
            </tr>
        </tbody>
        </table>
        <a href="/SiTenagaKerja/TambahTenagaKerja" class="btn btn-primary mt-3" style="justify-content: center ;" >Tambah Tenaga Kerja</a>
        </div>
    </div>
</div>
</div>
<?= $this->endsection();?>
