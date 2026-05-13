<x-layout>

    <x-slot:title>
        Home
    </x-slot:title>


    <section>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/banner1.png" class="d-block w-100" alt="botines puma">
                </div>
                <div class="carousel-item">
                    <img src="/images/banner2.png" class="d-block w-100" alt="camiseta retro argentina 2006">
                </div>
                <div class="carousel-item">
                    <img src="/images/banner3.png" class="d-block w-100" alt="envios gratis">
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
    </section>

    <section class="container mb-5 py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">
                Productos Destacados
            </h2>
        </div>

        <div class="row">

            @foreach($productos as $producto)

                <article class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm border-0">

                        <img src="{{ url('images/' . $producto->imagen) }}" class="card-img-top"
                            alt="{{ $producto->nombre }}" style="height: 350px; object-fit: cover;">

                        <div class="card-body">

                            <span class="badge bg-dark mb-2">
                                {{ $producto->categoria }}
                            </span>

                            <h3 class="h5 card-title">
                                {{ $producto->nombre }}
                            </h3>

                            <p class="card-text text-muted">
                                {{ $producto->descripcion }}
                            </p>

                        </div>

                        <div class="card-footer bg-white border-0">

                            <div class="d-flex justify-content-between align-items-center">

                                <span class="fw-bold fs-5">
                                    ${{ $producto->precio }}
                                </span>

                                <button class="btn btn-dark">
                                    Comprar
                                </button>

                            </div>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </section>

    <section class="secction-mundial rounded p-5">

        <div class="row align-items-center">

            <div class="col-md-6">

                <h2 class="fw-bold mb-3">
                    ¡Preparate para el Mundial!
                </h2>

                <p class="text-muted">
                    En Tienda Urbana ofrecemos camisetas de la selección argentina, perfectas para los fanáticos del
                    fútbol que quieren mostrar su pasión por el equipo nacional. Diseñadas con materiales de alta
                    calidad y cuentan con detalles auténticos que rinden homenaje a los momentos históricos del fútbol
                    argentino.
                </p>

            </div>

            <div class="col-md-6 text-center">

                <img src="{{ url('images/banner4.png') }}" alt="Camiseta de Argentina 2026" class="img-fluid rounded">

            </div>

        </div>

    </section>

</x-layout>