<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<div class="container">
<div class="mt-3">
    <div class="row">
        <div class="col">
        <h1>DAFTAR TENAGA KERJA</h1>
        <?php if(session()-> getFlashdata(('pesan')
        )) : ?>
            <div class="alert alert-success" role="alert">
               <?= session()-> getFlashdata('pesan'); ?>
            </div>
        <?php endif ?>
        <div class="mt-3">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Agama</th>
            <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php $k = 1;?>
            <?php foreach($tenagakerja as $i):?>
            <tr>
            <th scope="row"> <?= $k++; ?></th>
            <td><?= $i['tk_name'] ;?></td>
            <td><?= $i['tk_alamat'] ;?></td>
            <td><?= $i['tk_agama'] ;?></td>
            <td>
            <div class="btn-group btn-group-justified">
                <a type="button" href="/TkController/detailTK/<?= $i['tk_id']; ?>" class="btn btn-outline-primary btn-block">Lihat</a>
            </td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
        </table>
        <a href="/TkController/tambahTk" class="btn btn-primary mt-3" style="justify-content: center ;" >Tambah Tenaga Kerja</a>
        </div>
    </div>
</div>
</div>
<?= $this->endsection();?>
