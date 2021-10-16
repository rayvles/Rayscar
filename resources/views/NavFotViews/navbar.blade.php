<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="background-image: linear-gradient(to right, #45637d , black);">
  <div class="container-fluid">
    <a class="navbar-brand" href="home Page.php"><h3 class="text-warning">Rayscar</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home Page.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produk
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Produk Terbaru</a></li>
            <li><a class="dropdown-item" href="#">Produk lainnya</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="All-produk.php">Semua Produk</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item disabled" href="#">Login Sebagai Admin</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item disabled" href="All-produk.php">Coming Soon</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Search</button>
      </form>
      <li class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user-alt"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Edit profile</a></li>
            <li><a class="dropdown-item" href="cart.php">My Cart</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
            <form action="logout.php" method="post">
                <button type="submit" class="dropdown-item" name="logout" value="true">Logout</button></li>
              </form>
          </ul>
        </li>
    </div>
  </div>
</nav>
