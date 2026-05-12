<x-layout>

<x-slot:title>
    Noticias
</x-slot:title>

<section class="text-center mb-5">

    <h1 class="display-5 fw-bold">
        Últimas Noticias
    </h1>

    <p class="text-muted">
        Enterate de las últimas novedades y tendencias de moda urbana.
    </p>

</section>

<section class="row">

@foreach($noticias as $noticia)

<article class="col-md-6 mb-4">

    <div class="card h-100 shadow-sm">

        <img 
            src="{{ url('images/' . $noticia->imagen) }}" 
            class="card-img-top"
            alt="{{ $noticia->titulo }}"
        >

        <div class="card-body">

            <span class="badge bg-dark mb-2">
                {{ $noticia->categoria }}
            </span>

            <h2 class="h4 card-title">
                {{ $noticia->titulo }}
            </h2>

            <p class="card-text">
                {{ $noticia->contenido }}
            </p>

        </div>

        <div class="card-footer bg-white border-0">

            <small class="text-muted">
                Publicado el {{ $noticia->fecha_publicacion }}
            </small>

        </div>

    </div>

</article>

@endforeach

</section>

</x-layout>