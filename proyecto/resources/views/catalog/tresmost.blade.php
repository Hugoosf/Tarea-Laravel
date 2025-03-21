<x-layout>
    <h1>Agenda del día</h1>
    <div class="row">
    @foreach($agenda as $fotina)
    <div class=" col-3"><br><img src="{{asset($fotina->imagen)}}" class="imgs" alt=""><p>{{$fotina->imagen}} {{$fotina->hora}}</p></div>
    @endforeach
    </div>

    
</x-layout>