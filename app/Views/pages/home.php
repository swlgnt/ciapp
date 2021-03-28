<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Home Page</h1>
            test
            <?php 
      d($test);
            ?>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>