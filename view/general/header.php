<!DOCTYPE html>
<html>

<head>
    <title>
        <?=$title?>
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- navbar -->
    <nav>
        <div class="nav-wrapper headNav navbar-fixed-top ">
            <a href="?url=anasehife" class="brand-logo"><img src="img/logo.png" class="logoImg" alt=""></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down ">
                <li><a href="?url=meqaleler&page=1">Məqalələr<i class="material-icons right">subject</i></a></li>
                <li><a href="?url=blog/yeni">Yeni Məqalə <i class="material-icons right">mode_edit</i></a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="?url=meqaleler&page=1">Məqalələr</a></li>
        <li><a href="?url=blog/yeni">Yeni Məqalə</a></li>
    </ul>
    <!-- navbar  end-->
