@foreach($menu as $meal)
    {{ $meal }}
    <a href="{{ route('menu.edit',$meal->id) }}"><button>Edit</button></a>
    <button onclick="remove({{ $meal->id }})">delete</button>
    <br>
    <br>
@endforeach
<a href="{{ route('menu.create') }}">
    { create }
</a>
<form id="del-meal" action="{{ route('menu.destroy','') }}" method="post">
    @csrf
    @method('delete')
</form>

<script>
    var form1 = document.getElementById('del-meal');

    function remove(meal) {
        form1.action = form1.action + '/' + meal;
        form1.submit();
    }

</script>