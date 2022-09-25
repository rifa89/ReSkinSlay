<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinSlay.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('style/index.css') }}">
    <script src="https://kit.fontawesome.com/15ab4f5b8b.js" crossorigin="anonymous"></script>


</head>

<body>

    @extends('layouts.template')
    @section('content')
    <div class="all">
        <div class="carousel">
            <div class="container">
                <i class="fa-solid fa-cart-shopping fixed-bottom cart"></i>
                <div class="row">
                    <div class="col-3">
                        <!-- Button trigger modal -->
                        <a href="#">
                        <div data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="{{ asset ('images/modal1.jpg') }}" class="promo" alt="">
                        </div>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <img src="{{ asset ('images/modal1.jpg') }}" class="promodetails mx-auto" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img src="{{ asset ('images/banner1.jpg') }}" class="d-block w-100" alt="...">
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset ('images/banner1.jpg') }}" class="d-block w-100" alt="...">
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset ('images/banner1.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>


                    <div class="col-3">
                        <!-- Button trigger modal -->
                        <a href="#">
                        <div data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <img src="{{ asset ('images/modal2.jpg') }}" class="promo" alt="">
                        </div>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        </div>
                                    <div class="modal-body">
                                    <img src="{{ asset ('images/modal2.jpg') }}" class="promodetails mx-auto" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        <div class="container">
            <div class="row">
                <!-- produk Promo-->
                <div class="row mt-4 p-5 ">
                    <!-- produk pertama -->
                    <div class="col-md-3 card-prod">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{ URL::to('detail') }}">
                                <img src="{{asset('images/skinslay02.jpg') }}" alt="foto produk" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <a href="{{ URL::to('detail') }}" class="text-decoration-none">
                                    <p class="card-text text-center">
                                        SkinSlayProduct
                                    </p>
                                </a>
                                <div class="row mt-2">
                                    <div class="col">
                                        <button class="btn btn-success text-center" style="margin-left: 25px;">
                                            <i class="text-center">Details</i>
                                        </button>

                                        <button class="btn btn-warning">
                                            <i class="text-center">Cart</i>
                                        </button>
                                    </div>
                                    <div class="col-auto p-3">
                                        <p>
                                            <del>Rp. 15.000,00</del>
                                            <br />
                                            Rp. 10.000,00
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
