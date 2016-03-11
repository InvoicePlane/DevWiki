<?php $this->layout('theme::layout/00_layout') ?>

<div class="main-content">

    <?php $this->insert('theme::partials/no_js_info'); ?>

    <?= $this->section('content'); ?>

</div>
