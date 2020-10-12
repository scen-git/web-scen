<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>SCeN</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection">
    <link href="<?= base_url('assets/css/style.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="light-blue darken-2" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">SCeN</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?= base_url(); ?>">Beranda</a></li>
                <li><a href="<?= base_url('tentang'); ?>">Tentang</a></li>
                <li><a href="<?= base_url('kontak'); ?>">Kontak</a></li>
                <li><a class="waves-effect waves-light btn yellow darken-1 grey-text text-darken-4" href="#">Blog</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="<?= base_url(); ?>">Beranda</a></li>
                <li><a href="#">Pelayanan</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>