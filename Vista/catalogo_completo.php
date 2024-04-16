<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--BOOTSTRAP 5-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <!--CSS-->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/catalogo_completo.css">
    <title>Catalogo</title>
</head>
<body>

  <!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/img/1.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top font">
        MIDGARD
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalogo.html">Inmuebles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Acerca de...</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   
<!--CLOSE BUTTON + IMAGEN BASE DEL EXPAND IMAGE NO BORRAR!  -->
    <div class="ful-img" id="fulimgbox">
        <img src="img/Fondo1.jpg" id="fulimg" alt="">
        <span onclick="closeimg()">X</span>
    </div>
<!--BARRA DE AYUDA-->

     <div class="container-helpbar" id="containerHelbar">
        <div class="helpbar">
            <div class="Locales button"><a href="#depart">DEPARTAMENTOS</a></div>
            <div class="Dispo button"><a href="#edif">EDIFICIOS</a></div>
            <div class="Otro button"><a href="#local">LOCALES</a></div>        
        </div>
    </div> 

<!-- PAGINATION
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav> -->


<!--TARJETAS -->


<h1 id="depart"><span><i class='bx bx-door-open' ></i> DEPARTAMENTOS</span></h1>
<div class="img-gallery">
    <div class="seccion s1"> 
        <div class="seccion-img">
            <img src="img/depa1.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        
        <div class="info">
              <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s2">
        <div class="seccion-img">
            <img src="img/depa2.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s3">
        <div class="seccion-img">
            <img src="img/depa3.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>

        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
            </ul>
        </div>
    </div>
    <div class="seccion s4">    
        <div class="seccion-img">
            <img src="img/depa4.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
            </ul>
        </div>
    </div>
    <div class="seccion s5">
        <div class="seccion-img">
            <img src="img/depa5.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s6">
        <div class="seccion-img">
            <img src="img/depa6.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
</div>


<h1 id="edif"><span><i class='bx bxs-buildings' ></i> EDIFICIOS RESIDENCIALES</span></h1>

<div class="img-gallery" >
    <div class="seccion s1"> 
        <div class="seccion-img">
            <img src="img/edi5.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s2">
        <div class="seccion-img">
            <img src="img/edi6.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s3">
        <div class="seccion-img">
            <img src="img/edi7.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>

        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s4">    
        <div class="seccion-img">
            <img src="img/edi8.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s4">
        <div class="seccion-img">
            <img src="img/edi9.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s5">
        <div class="seccion-img">
            <img src="img/edi10.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
</div>


<h1 id="local"><span><i class='bx bxs-bank' ></i> PARA TU NEGOCIO</span></h1>

<div class="img-gallery" >
    <div class="seccion s1"> 
        <div class="seccion-img">
            <img src="img/local1.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s2">
        <div class="seccion-img">
            <img src="img/local2.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s3">
        <div class="seccion-img">
            <img src="img/local3.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>

        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s4">    
        <div class="seccion-img">
            <img src="img/local4.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s5">
        <div class="seccion-img">
            <img src="img/local5.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>
    </div>
    <div class="seccion s6">
        <div class="seccion-img">
            <img src="img/local6.jpeg" onclick="OpenFullClick(this.src)" width="640" height="427">
        </div>
        <div class="info">
            <ul>
                <li><p><box-icon name='bed'></box-icon> CUARTOS</p></li>
                <li><p><box-icon name='bath'> </box-icon>BAÑOS</p></li>
                <li><p><box-icon name='grid' > </box-icon>DIMENSIONES</p></li>
                <li><p><box-icon name='map' ></box-icon> PAIS:</p></li>
                <li><p><box-icon name='dollar'></box-icon> PRECIO:</p></li>
              </ul>
        </div>nombre
    </div>
    <a class="btn btn-primary" href="#depart" role="button"><i class='bx bx-up-arrow-alt' ></i> IR ARRIBA</a>
</div>




    <footer>
        <p>&copy JOHAN DANIEL DOMINGUEZ ULLOA</p>
        <img src="img/John Constantine.jpg" alt="">
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <!--BOXICONS-->
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="/js/script.js"></script>
</html>