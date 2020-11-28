<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="index">Home</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>
            <li class="nav-item">
                <a href="dashboard" class="nav-link" href="dashboard">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login">Logout</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!-- end navbar -->
<!-- image circle -->
<div class="container">
    <div class="wadah text-center">
        <div class="col-6 mx-auto">
            <h1>About Me.</h1>
            <img src=<?= base_url("templates/fotoku.jpg") ?> class="rounded-circle" alt="foto ku" height="200px" width="200px">
            <p>
                Nama saya adalah Arbi Hidayatullah <br />
                Saya merupakan mahasiswa Jurusan Ilmu Komputer <br />
                Saya adalah developer dari web ini <br />
                sebagai sarana Tugas Kecil praktikum web lanjut<br />
                <br />
                <br />
                Email :
                <br />
                arbihidayatullah@gmail.com
                <br />
                ~
            </p>
        </div>

    </div>
</div>


<!-- footer 
<footer>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8">
                <p class="font-italic"></p>
            </div>
        </div>
    </div>
</footer> -->