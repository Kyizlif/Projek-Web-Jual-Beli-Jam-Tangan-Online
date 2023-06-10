<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login Admin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdaKita.Com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <body class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="halaman.php">AdaKita.Com</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">    
                        <li class="nav-item dropdown">
                            </ul>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
</head>
<body>
    <h2>Halaman Login</h2>
    <form action="loginprogres.php" method="post">
        <div class="mb-3 row">
        <label for="Username" class="col-sm-2 col-form-label">Username:</label>
        <input type="text" name="username"><br><br>
        <div class="col-sm-10">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="Password" class="col-sm-2 col-form-label">Password:</label>
        <input type="password" name="password"><br><br>
        <div class="col-sm-10">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="No HP" class="col-sm-2 col-form-label">No HP:</label>
        <input type="number" name="NoHP"><br><br>
        <div class="col-sm-10">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="Alamat" class="col-sm-2 col-form-label">Alamat:</label>
        <input type="text" name="Alamat"><br><br>
        <div class="col-sm-10">
        </div>
        </div>
        <button type="submit" class="btn btn-primary"name="daftar">Daftar</button>
<a href="halaman.php">
        <input type="button" class="btn btn-primary" value="Login">
        <a href="HalamanAwal.php">
        <input type="button" class="btn btn-primary" value="Kembali ke halaman awal">
    </a>
    </form>
</body>
</html>