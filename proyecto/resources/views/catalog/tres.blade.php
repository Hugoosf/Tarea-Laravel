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
        <h1>Ver agenda</h1>
        @if(session('mensaje'))
        <div class="alert alert-success" role="alert">
            {{ session('mensaje') }}
        </div>
        @endif
        <form action="{{url('/tres')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>
            
            
            <div class="mb-3">
                <label for="id_persona">Persona:</label>
                <select name="id_persona" class="form-control" required>
                    @foreach($personas as $persona)
                        <option value="{{ $persona->idpersona }}">{{ $persona->nombre }}</option>
                    @endforeach
                </select>
            </div>
            
            
            
            <button type="submit" class="btn btn-primary mt-3">Mostrar agenda</button>
        </form>
        <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Volver al listado</a>
    </div>
</x-layout>