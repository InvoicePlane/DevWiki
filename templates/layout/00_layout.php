<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>
        <?= ucwords($page['title']); ?><?php if ($page['title'] != $params['title']) {
            echo " - " . $params['title'];
        } ?>
    </title>
    <meta name="description" content="<?= $params['tagline']; ?>"/>
    <meta name="author" content="<?= $params['author']; ?>">
    <meta charset="UTF-8">
    <link rel="icon" href="<?= $params['theme']['favicon']; ?>" type="image/x-icon">

    <!-- Mobile -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <?php foreach ($params['theme']['css'] as $css) {
        echo "<link href='$css' rel='stylesheet' type='text/css'>";
    } ?>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="<?= $params['html']['float'] ? 'with-float' : ''; ?>">

<div id="app">

    <div id="sidebar">
        <?php $this->insert('theme::partials/sidebar'); ?>
    </div>

    <?php $this->insert('theme::partials/sidebar_toggle'); ?>

    <div id="main">

        <?= $this->section('content'); ?>

    </div>

</div>
    
<?php foreach ($params['theme']['js'] as $script) {
    echo "<script src='$script'></script>";
} ?>

</body>
</html>
