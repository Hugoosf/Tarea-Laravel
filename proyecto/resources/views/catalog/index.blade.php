<x-layout>
<nav class="navbar navbar-expand-lg navbar-light bg-light border">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AGENDA TEA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">📂 Catálogo pictogramas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dos">🆕 Nueva entrada en agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tres">🗑️ Mostrar agenda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        
        <h1>Listado pictogramas</h1>
        @foreach($imgs as $fotillo)
        <div class="text-center col-3"><br><img src="{{asset($fotillo->imagen)}}" class="imgs" alt=""><p>{{$fotillo->imagen}}</p></div>
        @endforeach
    </div>
</x-layout>