<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        section{
            padding:60px 0;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="navbar navbar-expand-md navbar-light">
        <div class="container-xxl">
            <a href="#intro" class="navbar-brand">
                <span class="fw-bold text-secondary">
                    <i class="bi bi-cup-hot"></i>
                    CoffeeBlends
                </span>
            </a>
            <!-- toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#reviews" class="nav-link">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Get in Touch</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a href="#topics" class="nav-link">About Coffee</a>
                    </li>
                    <li class="nav-item ms-2 d-none d-md-inline">
                        <a href="" class="btn btn-secondary" href="#pricing">Buy Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- intro -->
    <section id="intro">
        <div class="container-lg">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 text-center text-md-start">
                    <h1>
                        <div class="display-2">Cappuccino</div>
                        <div class="display-5 text-muted">Costumer's Favorite</div>
                    </h1>
                    <p class="lead my-4 text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#pricing" class="btn btn-secondary btn-lg">Buy Now</a>
                </div>
                <div class="col-md-5 text-center d-none d-md-block">
                    <img class="img-fluid" src="coffee.png" alt="coffee">
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="bg-body-secondary mt-5">
        <div class="container-lg"> 
            <div class="text-center">
                <h2 class="fw-bold text-muted"><i class="bi bi-cup-hot"></i> CoffeeBlends Product</h2>
                <p class="lead text-muted">Choose a product that you want</p>
            </div>
            <div class="row my-5 align-items-center justify-content-center">
                <div class="col-sm-4 mb-4 col-lg-3">
                    <div class="card">
                        <img src="coffee1.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title">Amerikano</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-secondary">Buy This</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-4 mb-4 col-lg-3">
                    <div class="card border-3 border-secondary">
                        <div class="card-header text-center fw-bold text-muted">BEST SELLER</div>
                        <img src="coffee.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title">Cappuccino</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-secondary">Buy This</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="card">
                        <img src="coffee2.png" class="card-img-top" alt="..." >
                        <div class="card-body text-center">
                          <h5 class="card-title">Expresso</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-secondary">Buy This</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews">
        <div class="container-lg">
            <div class="text-center">
                <h2 class="fw-bold text-muted"><i class="bi bi-stars"></i> CoffeeBlends Reviews</h2>
                <p class="lead text-muted">What customer have said about the CoffeeBlend...</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="list-group">
                        <div class="list-group-item py-3 mb-1 border-2">
                            <div class="pb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h5 class="mb-1">CoffeBlend is lit!..</h5>
                            <p class="mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus similique omnis hic consequuntur sed modi. Molestiae in sint ipsum maiores? Minima, commodi! Odio labore quia quidem dolorum similique? Tempore voluptas aliquam iure!</p>
                            <small>Review by Mario</small>
                        </div>
                        <div class="list-group-item py-3 mb-1 border-2">
                            <div class="pb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h5 class="mb-1">CoffeBlend is lit!..</h5>
                            <p class="mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus similique omnis hic consequuntur sed modi. Molestiae in sint ipsum maiores? Minima, commodi! Odio labore quia quidem dolorum similique? Tempore voluptas aliquam iure!</p>
                            <small>Review by Mario</small>
                        </div>
                        <div class="list-group-item py-3 mb-1 border-2">
                            <div class="pb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h5 class="mb-1">CoffeBlend is lit!..</h5>
                            <p class="mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus similique omnis hic consequuntur sed modi. Molestiae in sint ipsum maiores? Minima, commodi! Odio labore quia quidem dolorum similique? Tempore voluptas aliquam iure!</p>
                            <small>Review by Mario</small>
                        </div>
                        <div class="list-group-item py-3 mb-1 border-2">
                            <div class="pb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h5 class="mb-1">CoffeBlend is lit!..</h5>
                            <p class="mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus similique omnis hic consequuntur sed modi. Molestiae in sint ipsum maiores? Minima, commodi! Odio labore quia quidem dolorum similique? Tempore voluptas aliquam iure!</p>
                            <small>Review by Mario</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="bg-body-secondary mt-5">
        <div class="container-lg">
            <div class="text-center">
                <h2 class="fw-bold text-muted"><i class="bi bi-chat-right-dots-fill"></i> Get in Touch</h2>
                <p class="lead text-muted">Got a Question to ask? Fill out this form to contact us....</p>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <!-- ADDING ICON BEFORE THE INPUT using input group & input group text -->
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                          </div>
                          <div class="form-floating mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" style="height: 140px;"></textarea>
                            <label for="exampleFormControlTextarea1">Say something...</label>
                          </div>
                          <div class="mb-4 text-center">
                            <button type="button" class="btn btn-secondary">Submit</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>