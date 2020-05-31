<div>
    <form action="{{ $action }}" method="POST">
        @csrf
        @if($metodo == "PUT" || $metodo == "put")
            @method('PUT')
        @else
            @method('DELETE')
        @endif
        <div class="btn-group">
            <button type="submit" class="{{ $classe }}">
                {{ $slot }}
            </button>
        </div>
    </form>
</div>