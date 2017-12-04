<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    <?php $theme = $this->config->item('admin_theme'); ?>
    <!-- The styles -->
    <link id="bs-css" href="<?= base_url() ?>assets/admin/<?= $theme ?>/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/admin/<?= $theme ?>/css/charisma-app.css" rel="stylesheet">
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/css/uploadify.css' rel='stylesheet'>
    <link href='<?= base_url() ?>assets/admin/<?= $theme ?>/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/admin/<?= $theme ?>/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
