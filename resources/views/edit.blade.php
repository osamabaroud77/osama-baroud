
<h1>Update </h1>
<form action="/edit" method="POST">
    @csrf
    @method('put')
    <input type="hidden" name="id"  value="{{$task['id']}}"> <br> <br>
    <input type="text" name="name"  value="{{$task['name']}}"> <br> <br>
    <button type="submit" >UPDATE</button>
</form>

