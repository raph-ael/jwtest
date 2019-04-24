<form action="{{url('restaurant-added')}}" method="post">
    @csrf
    <input type="Name" name="Name" placeholder="Name">
    <input type="text" name="Stadt" placeholder="Stadt">
    <input type="text" name="Beschreibung" placeholder="Beschreibung">
    <input type="submit" name="submit" placeholder="submit" value="submit">
</form>

<a href="{{URL::to('/')}}">back</a>