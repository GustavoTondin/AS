

    @foreach($diretores as $diretor)
        <div>
            <h3>{{ $diretor->name }}</h3>
            <p>{{ $diretor->description }}</p>
            <p>{{ $diretor->date }}</p>
            <a href="{{ url('diretores/'.$diretor->id.'/edit') }}">Edit</a>
            <form action="{{ url('diretores/'.$diretor->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach

