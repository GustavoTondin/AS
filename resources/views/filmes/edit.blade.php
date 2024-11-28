<form action="{{ url('filmes/'.$filme->id) }}" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto ">
        @csrf
        @method('PUT')
        <div class="mb-5 ">
            <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titulo</label>
            <input type="text" placeholder="titulo" value="{{$filme -> titulo}}" name="titulo" id="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5 ">
            <label for="genero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">genero</label>
            <input type="text" placeholder="genero" value="{{$filme -> genero}}" name="genero" id="genero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5 ">
            <label for="ano" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ano</label>
            <input type="text" placeholder="ano" value="{{$filme -> ano}}" name="ano" id="ano" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update filme</button>
</form>