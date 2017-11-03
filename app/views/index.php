<?php $this->view('partials/header'); ?>
    <h1>INDEX</h1>
    <ul>
    <?php foreach ($data as $onedata): ?>
        <li><?php echo $onedata->title; ?></li>
    <?php endforeach; ?>
    </ul>
<?php $this->view('partials/footer'); ?>