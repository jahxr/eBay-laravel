<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/54de7e7a33.js" crossorigin="anonymous"></script>
    <title>eBay</title>
</head>
<body>
    <div class="container">
        <div class="search-container">
          <input class="input" type="text">
          <svg viewBox="0 0 24 24" class="search__icon">
            <g>
              <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
              </path>
            </g>
        </svg>
    </div>
        <div class="cart-icon">
            <button><i class="fa-solid fa-cart-shopping"></i></button>
        </div>
        </div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <span class="boton-categoria" onclick="laptopsclick()">Computadoras y accesorios</span>
            </li>
            <li class="nav-item">
                <span  class="boton-categoria" onclick="calzadoclick()">Calzado</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>
          <div class="container-categories">
            <div class="container-laptops categorie" id="laptops">
                <div class="card" style="width: 18rem;">
                    <img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">$200</h5>
                      <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                      <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">$200</h5>
                      <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                      <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">$200</h5>
                      <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                      <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="categorie-calzado categorie" id="calzado">
                    <div class="card" style="width: 18rem;">
                        <img src="https://th.bing.com/th/id/OIP.Fr2Bnn6IHEDC0BX5nm89BwHaFM?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">$200</h5>
                          <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                          <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <img src="https://th.bing.com/th/id/OIP.Fr2Bnn6IHEDC0BX5nm89BwHaFM?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">$200</h5>
                          <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                          <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <img src="https://th.bing.com/th/id/OIP.Fr2Bnn6IHEDC0BX5nm89BwHaFM?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">$200</h5>
                          <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                          <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                      </div>
                </div>
          </div>
        </div>
    </div>
</body>
<script src="JS/home.js"></script>
</html>