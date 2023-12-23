<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .card:hover {
            transform: scale(1.03);
        }

        .photoSize {
            height: 400px;

        }
    </style>
</head>

<body>
    <!-- for navbar menu -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand border-bottom border-dark border-2">Welcome</a>
            <button class="navbar-toggler" type="button" data-bs-target="#supportItem" data-bs-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="supportItem">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="navbar-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li class="navbar-item ms-2 d-none d-md-block">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control me-3 rounded-pill border-dark border-2">
                                <button class="btn border-dark rounded-pill border-2">Search</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- for carousel slide -->
    <div class="container">
        <div class="row mt-2 justify-content-center">
            <div class="col-md-6 col-12">
                <div class="carousel slide" data-bs-ride="carousel" id="slide">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#slide" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#slide" data-bs-slide-to="1"></li>
                        <li data-bs-target="#slide" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="photoSize"
                                src="https://cdn.pixabay.com/photo/2023/06/14/17/55/nature-8063737_1280.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="photoSize"
                                src="https://cdn.pixabay.com/photo/2023/07/23/20/44/pastry-shop-8145805_1280.jpg"
                                alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="photoSize"
                                src="https://cdn.pixabay.com/photo/2023/06/29/12/22/snow-leopard-8096293_1280.png"
                                alt="">
                        </div>
                    </div>
                    <a href="#slide" class="carousel-control-prev" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#slide" class="carousel-control-next" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- for card -->
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-6 col-sm-12 mb-2">
                <div class="card shadow transition">
                    <div class="card-body">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, at, ab in culpa aut nisi odit
                            accusantium enim alias totam quod laboriosam odio adipisci voluptates impedit praesentium
                            blanditiis obcaecati perspiciatis.</p>
                        <div class="card-title">Bootstrap</div>
                        <a href="#" class="card-link">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-2">
                <div class="card shadow transition">
                    <div class="card-body">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, at, ab in culpa aut nisi odit
                            accusantium enim alias totam quod laboriosam odio adipisci voluptates impedit praesentium
                            blanditiis obcaecati perspiciatis.</p>
                        <div class="card-title">Bootstrap</div>
                        <a href="#" class="card-link">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-2">
                <div class="card shadow transition">
                    <div class="card-body">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, at, ab in culpa aut nisi odit
                            accusantium enim alias totam quod laboriosam odio adipisci voluptates impedit praesentium
                            blanditiis obcaecati perspiciatis.</p>
                        <div class="card-title">Bootstrap</div>
                        <a href="#" class="card-link">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-2">
                <div class="card shadow transition">
                    <div class="card-body">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, at, ab in culpa aut nisi odit
                            accusantium enim alias totam quod laboriosam odio adipisci voluptates impedit praesentium
                            blanditiis obcaecati perspiciatis.</p>
                        <div class="card-title">Bootstrap</div>
                        <a href="#" class="card-link">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- for feedback button and modal box -->
    <div class="container">
        <div class="row justify-content-md-end justify-content-center">
            <div class="col-auto">
                <p>
                    <a class="btn btn-outline-dark mt-2 fw-bolder" data-bs-toggle="modal" href="#item">
                        Feedback
                    </a>
                </p>
                <div class="modal fade" id="item">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-title">Feedback</div>
                                <button class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-dark">Send Feedback</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- for footer -->
    <footer class="container-fluid">
        <div class="text-center border-top border-top-2 py-3 text-muted">&copy; 2023 Copyright</div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
