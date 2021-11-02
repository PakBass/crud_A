<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
        <div class="row">
            <div class="col">
                <h1 class="my-3">Home Page</h1>
                <hr>
                Belajar Pemrograman Web &copy; <?= date('Y'); ?>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>