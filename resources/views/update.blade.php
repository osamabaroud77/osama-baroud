<h1>Update </h1>
<form action="/update" method="POST">
    @csrf
    @method('patch')
    <input type="hidden" name="id"  value="{{$task['id']}}"> <br> <br>
    <input type="text" name="name"  value="{{$task['name']}}"> <br> <br>
    <button type="submit" >UPDATE</button>
</form>
