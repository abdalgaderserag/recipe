<form action="{{ route('menu.put') }}" method="post">
    @csrf
    <input type="text" name="title" required><br><br>
    <input type="text" name="price" required><br><br>
    <input type="text" name="describe" required><br><br>
    <input type="text" name="image"><br><br>
    <input type="submit" value="save">
</form>
