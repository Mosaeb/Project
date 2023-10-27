<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PORTFOLIO</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <div class="container">
        <a href="web.php?page=home" class="navbar-brand text-warning"><h4>PORTFOLIO</h4></a>
        <button type="button" class="navbar-toggler text-warning" data-bs-target="#menu" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto">
                <li ><a href="web.php?page=home" class="nav-link text-warning nav1 active">Home</a></li>
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <li ><a href="web.php?page=about" class="nav-link text-warning nav1">About</a></li>
                    <li ><a href="web.php?page=cv" class="nav-link text-warning nav1">Resume</a></li>
                    <li ><a href="web.php?page=project"   class="nav-link text-warning nav1">Project</a></li>
                    <li ><a href="web.php?page=calculator"  class="nav-link text-warning nav1">FunGame</a></li>
                <?php }?>
            </ul>
            <ul class="navbar-nav ms-auto">

                <?php if (isset($_SESSION['user_id'])) { ?>

                    <li class="dropdown">
                        <a href=""  class="nav-link text-warning dropdown-toggle " data-bs-toggle="dropdown">
                            <?php echo $_SESSION['user_name']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a href="web.php?page=about" class="dropdown-item text-warning">About</a></li>
                            <li><a href="web.php?page=logout" class="dropdown-item text-warning">Logout</a></li>

                        </ul>
                    </li>

                <?php } else { ?>

                    <li><a href="web.php?page=login"  class="nav-link text-warning ">Login</a></li>

                <?php }?>
            </ul>
        </div>
    </div>
</nav>
