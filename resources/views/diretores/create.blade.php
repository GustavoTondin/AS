<form action="{{ url('diretores') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="date" placeholder="date" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit">Create Director</button>
</form>