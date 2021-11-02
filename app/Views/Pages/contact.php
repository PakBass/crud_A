<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-3">Contact us</h1>
            <hr>
            <?php foreach($alamat as $data) : ?>
                <ul>
                    <li><?= $data['sekolah']; ?></li>
                    <li><?= $data['alamat']; ?></li>
                    <li><?= $data['kota']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>