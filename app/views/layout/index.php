<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/TUX-G2-SVG.svg/610px-TUX-G2-SVG.svg.png">
    <title>Ejemplo MVC</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <!-- Font Awesome -->
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- Google Fonts Roboto -->
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="public/assets/css/general.css">
    <link rel="stylesheet" href="public/assets/css/menu.css">
    <?php if(isset($headers)){ echo $headers; } ?>
</head>
<body>
    <div class="before-page" id="before-page">
      <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden"></span>
      </div>
    </div>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="/home"><h3>Ejemplo MVC</h3></a>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">General</a>
                    <ul class="list-unstyled show" id="homeSubmenu">
                        <li>
                            <a href="/persona">Crud Persona</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn text-light">
                    <i class="fa-solid fa-bars"></i>
                    </button>
                    <span style="overflow:hidden;width:90%;white-space:nowrap;text-overflow:ellipsis">OBREGON RAMOS, MAXIMO</span>
                    <li class="nav-item dropdown menu-rol">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;" >
                            <span class="dropdown-header">Roles</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> Crud Persona
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> Segundo Rol
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> Tercer Rol
                            </a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-footer">
                                <a href="#" class="dropdown-item"> Mi informacion</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Cerrar Sesión</a>
                            </div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                </div>
            </nav>
           <main class="contenido">
                <?php if(isset($contenido)){ echo $contenido; } ?>
           </main>
        </div>
    </div>
    <?php if(isset($modals)){ echo $modals; } ?>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <script src="public/assets/js/menu.js"></script>
    <?php if(isset($scripts)){ echo $scripts; } ?>
    <script>
        document.getElementById('before-page').setAttribute('style', 'display:none');
    </script>
</body>

</html>