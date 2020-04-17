<form action="/edit/{{$iid}}" method="Post">
    @csrf
    <div id="myDIV" class="header">
        <input type="hidden" name="id" value="{{$iid}}">
        <h2>My To Do List</h2>
        <input type="text" name="title" placeholder="Title...">
        <button type="submit" class="addBtn">Edit</button>
    </div>
</form>