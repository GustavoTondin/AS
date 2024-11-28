<form action="{{ url('filmes') }}" method="POST">
    @csrf
    <input type="text" name="titulo" placeholder="titulo" required>
    <input type="text" name="genero" placeholder="genero" required>
    <input type="numeric" name="ano" placeholder="ano" required>
    <button type="submit">Create Filme</button>
    <div>
        <label for="diretor_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diretor</label>
            <select name="diretor_id" id="diretor_id" required>
                <option value="">Select a diretor</option>
                @foreach ($diretores as $diretor)
                    <option value="{{ $diretor->id }}">{{ $diretor->name }}</option>
                @endforeach
        </div>

</form>