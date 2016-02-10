<?php $this->layout('theme::layout/00_layout') ?>

<?php $this->insert('theme::partials/header_bar', [['page' => $page], ['base_page' => $base_page]]); ?>

<div class="main-content">

    <?php $this->insert('theme::partials/no_js_info'); ?>

    <?= $this->section('content'); ?>

</div>
