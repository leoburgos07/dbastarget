<div id="botones" class="text-center">
    <a href="{{route('inicio')}}">
        <button class="boton">
            Inicio
        </button>
    </a>

    <a href="https://wa.me/573187640713" target="blank">
        <button class="boton">WhatsApp</button>
    </a>

    <a href="{{route('agenda')}}">
        <button class="boton">Agenda</button>
    </a>
    <input type="hidden" id="serverEnlace" value="{{Request::getSchemeAndHttpHost()}}">
    @if (Route::currentRouteName() == "inicio")
        <a href="#" onclick="compartirEnlace()">
            <button class="boton">Compartír</button>
        </a>
    @else
    <a href="{{ URL::previous() }}">
            <button class="boton btn-danger bg-danger">Volver</button>
        </a>
    @endif
    
    
</div>