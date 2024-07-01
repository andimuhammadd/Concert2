<!-- header.php -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Concert</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="icon" href="assets/images/vinyl-fill.svg" type="image/x-icon">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light p-3" id="headerNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><i class="bi bi-music-note-beamed" style="font-size: 2rem; font-weight:bold; color:#3399FF"> Concert</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#news">News</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn me-2" href="index.php">Sign up</a>
                    <a class="btn text-light" style="border-radius: 20px; height:37px; width: 90px; font-weight: bold; background-color:#3399FF;" href="index.php">Log in</a>
                </div>
            </div>
        </div>
    </nav>