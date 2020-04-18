<form action="{{ route('menu.update',$meal->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="title" value="{{ $meal->title }}" required><br><br>
    <input type="text" name="price" value="{{ $meal->price }}" required><br><br>
    <input type="text" name="describe" value="{{ $meal->describe }}" required><br><br>
    <input type="text" name="image" value="{{ $meal->image }}"><br><br>
    <input type="submit" value="save">
</form>
