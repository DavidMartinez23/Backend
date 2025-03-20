<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto</title>

    <!-- CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }

        .navbar {
            background-color: #ff6f00;
            /* Naranja más cálido */
        }

        .navbar a {
            color: white !important;
        }

        .footer {
            background-color: #ff6f00;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .category-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .category-box:hover {
            transform: translateY(-10px);
        }

        .category-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .category-box h3 {
            color: #ff6f00;
            margin-top: 15px;
        }

        .carousel-inner img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Proyecto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider -->
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a Mi Proyecto</h5>
                    <p>Explora nuestras categorías y descubre contenido increíble.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" alt="Imagen 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ofrecemos lo mejor</h5>
                    <p>Conoce lo que tenemos para ti.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Categorías -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="category-box">
                    <img src="{{ asset('images/ropa.jpg') }}" alt="Ropa">
                    <h3>Categoría Ropa</h3>
                    <p>Descubre los productos más populares en esta categoría.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-box">
                    <img src="{{ asset('images/zapatos.jpg') }}" alt="Zapatos">
                    <h3>Zapatos</h3>
                    <p>Una selección variada para todos los gustos y necesidades.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-box">
                    <img src="{{ asset('images/accesorios.jpg') }}" alt="Accesorios">
                    <h3>Accesorios</h3>
                    <p>Encuentra lo mejor en esta categoría, ideal para ti.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Mi Proyecto. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
