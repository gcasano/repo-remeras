<header class="cabeza2">
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h5 class="text-white h4">Menu</h5>
        <span class="text-muted">
          <ul class="navbar">
            <li><a href="home.php">Home</a></li>
            <li><a href="FQP.php">F.A.Q</a></li>
            <li><?php if (isset($_SESSION["logeado"]) && $_SESSION["logeado"] == true) {

            }else{ ?>
            <a  href="registro.php">Registro</a>
          <?php } ?></li>
            <li><?php if (isset($_SESSION["logeado"]) && $_SESSION["logeado"] == true) {

            }else{ ?>
            <a  href="login.php">Login</a>
          <?php } ?></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li> <?php if (isset($_SESSION["logeado"])){
                        if ($_SESSION["logeado"] == true){ ?>
                            <a href="perfil.php"><?php echo $_SESSION["name"]; ?></a>
                  <?php }else {

                              }
                      }else{
                              
                            }?></li>
          </ul>
        </span>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
</header>
