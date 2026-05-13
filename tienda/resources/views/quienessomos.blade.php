<x-layout>

    <x-slot:title>
        Quienes Somos
    </x-slot:title>

    <section class="quienes-somos-hero d-flex align-items-center justify-content-center">
    <div class="container">
        <h1 class="display-3 fw-bold text-white text-center">Quiénes Somos</h1>
    </div>
    </section>

    <section class="py-5">
        <div class="container text-center">

            <div class="row justify-content-center align-items-center">

                <div class="col-6 col-sm-4 mb-4">
                    <h4 class="fw-bold">De la Calle al Código</h4>
                    <p>
                        Nuestra historia no empezó en una oficina, sino en las veredas y el asfalto de la ciudad.
                        Nacimos como un colectivo de mentes creativas que buscaban algo más que simple vestimenta:
                        busábamos una armadura para el día a día urbano. Lo que comenzó como una serie de diseños
                        experimentales en un garaje, se transformó en un movimiento que celebra la autenticidad.
                    </p>
                </div>

                <div class="col-6 col-sm-4 mb-4">
                    <img src="{{ asset('images/tiendaurbana.png') }}" class="img-fluid rounded shadow" alt="Tienda">
                </div>

                <div class="w-100 d-none d-md-block"></div>

                <div class="col-6 col-sm-4 mb-4">
                    <img src="{{ asset('images/productotiendaurbana.png') }}" class="img-fluid rounded shadow"
                        alt="ProductoF">
                </div>

                <div class="col-6 col-sm-4 mb-4">
                    <p>
                        En <strong>Urban Sport</strong>, no seguimos tendencias; las hackeamos. Nuestra misión es
                        fusionar la comodidad del deporte con la sofisticación de la cultura underground. Cada
                        prenda que seleccionamos está diseñada para resistir el ritmo de la vida contemporánea,
                        priorizando la durabilidad y la expresión personal. No somos solo una marca de ropa.
                    </p>
                </div>

            </div>
        </div>
    </section>

</x-layout>