@foreach($filmes as $filme)
    <div>
        <h3>TITULO:{{ $filme->titulo }}</h3>
        <p>Ano: {{ $filme->ano }}</p>
        <p>Genero: {{ $filme->genero }}</p>
        <p>Nome do diretor: {{ $filme->diretor->name }}</p>
        <a href="{{ url('filmes/'.$filme->id.'/edit') }}">Edit</a>
        <form action="{{ url('filmes/'.$filme->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach