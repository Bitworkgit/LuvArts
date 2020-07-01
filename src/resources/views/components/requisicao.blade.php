<div>
    <form action="{{ $action }}" method="POST">
        @csrf
        @if($metodo == "PUT" || $metodo == "put")
            @method('PUT')
        @else
            @method('DELETE')
        @endif
        <div class="btn-group">
            <button type="submit" style="{{ $estilo }}" class="{{ $classe }}">
                {{ $slot }}
            </button>
        </div>
    </form>
</div>