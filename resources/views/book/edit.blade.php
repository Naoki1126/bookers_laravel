<h1>Editing Book</h1>

<form action = "/book/{{$book->id}}" method="post">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="title">Title</label><br>
    <input type="text" name="title" value="{{ $book->title }}">
    <br>
    <label for="body">body</label><br>
    <input type="textarea" name="body" value="{{ $book->body }}"><br>
    <br>
    <button type="submit">Update Book</button>
</form>