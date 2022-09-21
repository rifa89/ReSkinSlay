<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinSlay.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('style/index.css') }}">

</head>

<body>

    @extends('layouts.template')
    @section('content')
    <br><br><br><br>

    <div class="carousel">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    Diskon bla bla
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
                                <img src="{{ asset ('images/meong.jpeg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('images/prod1.jpeg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('images/meong.jpeg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-3">
                    Diskon blaa blaa
                </div>
            </div>
        </div>
    </div>

    <div class="all">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                        <h5 class="text-center mt-2">SkinSlay.id</h5>
                        <p class="mt-2">
                            Toko adalah demo membangun toko online menggunakan laravel framework. Di dalam demo ini
                            terdapat user bisa menginput data kategori, produk dan transaksi.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum aliquam dolorum sequi
                            nulla maiores quos incidunt veritatis numquam suscipit. Cumque dolore rem obcaecati. Eos
                            quod ad non veritatis assumenda.
                        </p>
                        <p>
                            Toko adalah demo membangun toko online menggunakan laravel framework. Di dalam demo ini
                            terdapat user bisa menginput data kategori, produk dan transaksi.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum aliquam dolorum sequi
                            nulla maiores quos incidunt veritatis numquam suscipit. Cumque dolore rem obcaecati. Eos
                            quod ad non veritatis assumenda.
                        </p>
                        <p class="text-center">
                            <a href="" class="btn btn-outline-primary">
                                Baca Selengkapnya
                            </a>
                        </p>
                    </div>
                </div>
                <!-- produk Promo-->
                <div class="row mt-4 p-5 ">
                    <!-- produk pertama -->
                    <div class="col-md-3 card-prod">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{ URL::to('produk/satu') }}">
                                <img src="{{asset('images/prod1.jpeg') }}" alt="foto produk" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
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
                    <div class="col-md-3 card-prod">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{ URL::to('produk/satu') }}">
                                <img src="{{asset('images/meong.jpeg') }}" alt="foto produk" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
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
                    <div class="col-md-3 card-prod">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{ URL::to('produk/satu') }}">
                                <img src="{{asset('images/prod1.jpeg') }}" alt="foto produk" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
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
                    <div class="col-md-3 card-prod">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{ URL::to('produk/satu') }}">
                                <img src="{{asset('images/prod1.jpeg') }}" alt="foto produk" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
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


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
