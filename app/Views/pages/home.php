<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Home Page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio corrupti dolorum alias officiis ab
                accusantium, tempore accusamus assumenda maxime, ut in dolor quos aliquam rem vel neque repellat maiores
                sequi.</p>
            <?php 
      d($test);
            ?>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>