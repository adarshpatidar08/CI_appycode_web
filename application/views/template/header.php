<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front_assets/css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>front_assets/images/favicon.ico" type="image/x-icon">
    <title>AppiyCode</title>
</head>

<body>
    <div id="root">
        <header id="header">
            <div class="px-lg-5 px-md-5 px-2">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="navbar-brand align-self-center">
                            <a class="navbar-brand" href="javascript:void(0);">appiyCode</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                                <li class="nav-item px-2">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#">Service</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#">Work</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-search"></i>
                                </a>
                                <form class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>