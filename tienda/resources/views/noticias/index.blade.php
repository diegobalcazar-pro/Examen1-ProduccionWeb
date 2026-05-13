<x-layout>

    <x-slot:title>
        Noticias
    </x-slot:title>

    <section class="noticias-hero d-flex align-items-center justify-content-center">
    <div class="container text-center">
        <h1 class="display-3 fw-bold text-white">Últimas Noticias</h1>
        <p class="text-muted">
            Enterate de las últimas novedades y tendencias de moda urbana.
        </p>
    </div>
</section>

<main class="container mt-5"> 
    <div class="row">
        @foreach($noticias as $noticia)
        <article class="col-12 mb-4">
            <div class="card shadow-sm card-noticia overflow-hidden" 
                 style="border: 1.5px solid #495057; border-radius: 4px; background: none;">
                
                <div class="row g-0">
                    
                    <div class="col-md-3">
                        <img src="{{ url('images/' . $noticia->imagen) }}" 
                             class="img-fluid h-100 object-fit-cover" 
                             alt="{{ $noticia->titulo }}"
                             style="min-height: 160px; max-height: 180px; width: 100%; border-right: 1.5px solid #495057;">
                    </div>

                    <div class="col-md-9" style="background-color: #f1f3f5;"> 
                        <div class="card-body d-flex flex-column justify-content-center h-100 p-3">
                            <div>
                                <span class="badge mb-2" style="background-color: #495057;">
                                    {{ $noticia->categoria }}
                                </span>

                                <h2 class="h5 card-title fw-bold mb-2 text-uppercase" style="font-family: 'Anton', sans-serif; color: #343a40;">
                                    {{ $noticia->titulo }}
                                </h2>

                                <p class="card-text mb-0" style="font-size: 0.9rem; color: #495057;">
                                    {{ Str::limit($noticia->contenido, 180) }}
                                </p>
                            </div>

                            <div class="mt-3">
                                <small class="fw-bold" style="font-size: 0.75rem; text-transform: uppercase; color: #6c757d;">
                                    Publicado: {{ $noticia->fecha_publicacion }}
                                </small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </article>
        @endforeach
    </div>
</main>
</x-layout>