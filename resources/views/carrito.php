<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css'); }} ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


@include("plantillas.nav")
    
<header>
        <div class="container">
            <h1 class="text-center">TIENDA</h1>
            <hr>
        </div>
    </header>
    <!-- START SECTION STORE -->
    <section class="store">
        <div class="container">
            <div class="items">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Teclado</h3>
                            <img class="item-image" src="https://es.yamaha.com/es/files/Image-Index_cfx_02_2000x2000_d740a547463978cbb72ccfcf5ae91f7b.jpg?impolicy=resize&imwid=396&imhei=396">

                            <div class="item-details">
                                <h4 class="item-price">$4</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Teclado</h3>

                            <img class="item-image" src="https://m.media-amazon.com/images/I/711+znsvk9L._AC_SX425_.jpg">

                            <div class="item-details">
                                <h4 class="item-price">$6</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Teclado</h3>

                            <img class="item-image" src="https://m.media-amazon.com/images/I/71DVn9oI+EL._AC_SX425_.jpg">

                            <div class="item-details">
                                <h4 class="item-price">$299</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Teclado</h3>

                            <img class="item-image" src="https://ss631.liverpool.com.mx/xl/7552.jpg">

                            <div class="item-details">
                                <h4 class="item-price">$349</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Teclado</h3>

                            <img class="item-image" src="https://m.media-amazon.com/images/I/81a+qouQNmL._AC_SX425_.jpg">
                            <div class="item-details">
                                <h4 class="item-price">$6</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Letras LED</h3>

                            <img class="item-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiXHgkYGsQphOw2kDCdP02U_oW552vZXzdgA&usqp=CAU">
                            <div class="item-details">
                                <h4 class="item-price">$285</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Maquina de humo</h3>

                            <img class="item-image" src="https://i.ytimg.com/vi/xX4uG6r4uUA/sddefault.jpg">
                            <div class="item-details">
                                <h4 class="item-price">$249</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Luces</h3>

                            <img class="item-image" src="https://smart-lighting.es/wp-content/uploads/2013/11/LaserInvestigaPodria-reemplazarLED11.jpg">
                            <div class="item-details">
                                <h4 class="item-price">$6</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Luces</h3>

                            <img class="item-image" src="https://1.bp.blogspot.com/-U8TR7tT9wKU/XcbFYrT62sI/AAAAAAAAEWg/50BulgZaXSI3Hkij3-uQdlS-QAjAKPAPwCLcBGAsYHQ/s1600/ilumnotxt.jpg">
                            <div class="item-details">
                                <h4 class="item-price">$190</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Luces</h3>

                            <img class="item-image" src="https://i.pinimg.com/236x/e3/fe/58/e3fe58060b7b739a446561b552d76293--event-lighting-concert-stage-lighting.jpg">
                            <div class="item-details">
                                <h4 class="item-price">$6</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Saxofon</h3>

                            <img class="item-image" src="https://cdn.shopify.com/s/files/1/0061/8984/2496/products/4100290_sax_alto_blessing_1.jpg?v=1571764581">
                            <div class="item-details">
                                <h4 class="item-price">$6</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title"> Acordeon</h3>

                            <img class="item-image" src="https://m.media-amazon.com/images/I/61+RpRz7RpL._AC_SX466_.jpg">
                            <div class="item-details">
                                <h4 class="item-price">$349</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title"> Acordeon</h3>

                            <img class="item-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGcxtFVSL0JFGZheDN_Yq-gjnjUpyyeeIpY5LNNXIiw_Mj8SBHijV9bbplswHohsMCHMQ&usqp=CAU">
                            <div class="item-details">
                                <h4 class="item-price">$399</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title"> Acordeon</h3>

                            <img class="item-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyfVsQLU1IYkrotWxSZfKERq131hrKxuLRIhNDmlDtTQZTs7-N2mnp5fYqwCLjsRf0cV0&usqp=CAU">
                            <div class="item-details">
                                <h4 class="item-price">$6</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title"> Acordeon</h3>

                            <img class="item-image" src="https://http2.mlstatic.com/D_NQ_NP_817213-MLM43944421729_102020-V.jpg">
                            <div class="item-details">
                                <h4 class="item-price">$299</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Bateria</h3>

                            <img class="item-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5A5kRY66ELc5sz3HQCJNMCA5JS5d90SzU7Q&usqp=CAU">
                            <div class="item-details">
                                <h4 class="item-price">$55</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Bateria</h3>

                            <img class="item-image" src="https://m.media-amazon.com/images/I/71xO5KU73tL._AC_SX425_.jpg">
                            <div class="item-details">
                                <h4 class="item-price">$6</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Bateria</h3>

                            <img class="item-image" src="https://i.pinimg.com/550x/e7/3f/22/e73f224b2de7661768371fa83ee0b92b.jpg">
                            <div class="item-details">
                                <h4 class="item-price">$190</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION STORE -->
    <!-- START SECTION SHOPPING CART -->
    <section class="shopping-cart">
        <div class="container">
            <h1 class="text-center">CARRITO</h1>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="shopping-cart-header">
                        <h6>Producto</h6>
                    </div>
                </div>
                <div class="col-2">
                    <div class="shopping-cart-header">
                        <h6 class="text-truncate">Precio</h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shopping-cart-header">
                        <h6>Cantidad</h6>
                    </div>
                </div>
            </div>
            <!-- ? START SHOPPING CART ITEMS -->
            <div class="shopping-cart-items shoppingCartItemsContainer">
            </div>
            <!-- ? END SHOPPING CART ITEMS -->

            <!-- START TOTAL -->
            <div class="row">
                <div class="col-12">
                    <div class="shopping-cart-total d-flex align-items-center">
                        <p class="mb-0">Total</p>
                        <p class="ml-4 mb-0 shoppingCartTotal">$0</p>
                        <div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true"
                            data-delay="2000">
                            <div class="toast-header">
                                <span>✅</span>
                                <strong class="mr-auto ml-1 text-secondary">Elemento en el carrito</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body text-white">
                                Se aumentó correctamente la cantidad
                            </div>
                        </div>
                        <button class="btn btn-success ml-auto comprarButton" type="button" data-toggle="modal"
                            data-target="#comprarModal">Comprar</button>
                    </div>
                </div>
            </div>

            <!-- END TOTAL -->

            <!-- START MODAL COMPRA -->
            <div class="modal fade" id="comprarModal" tabindex="-1" aria-labelledby="comprarModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="comprarModalLabel">Gracias por su compra</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Pronto recibirá su pedido</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL COMPRA -->


        </div>

    </section>
    <!-- END SECTION SHOPPING CART -->


    <br><br><br><br><br><br><br>
    @include("plantillas.footer")





    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <script src="./tienda.js"></script>

</body>

</html>