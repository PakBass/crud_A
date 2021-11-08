<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="rorw">
        <div class="col">
            <h1 class="my-3">Data Buku</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul Novel</th>
                        <th scope="col">Judul Novel</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($buku as $b) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><img src="/img/<?= $b['sampul']; ?>" alt=""></td>
                        <td><?= $b['judul']; ?></td>
                        <td>
                            <a href="" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>