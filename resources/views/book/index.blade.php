<h2>Books</h2>
<table name="all_books">
    <tr>
        <th>Title</th>
        <th>body</th>
    </tr>
    <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->body }}</td>
                <td><a href="/book/{{ $book->id }}">Show</a></td>
                <td><a href="/book/{{ $book->id }}/edit">Edit</a></td>
                <td>
                    <form action="/book/{{ $book->id }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type='submit'><span>delete</span></button>
                    </form>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
<section name="registration-book-form">
    <h3>New book</h3>
    <form action = "/book" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <p>Title</p>
        <input type="text" name="title" value="{{ $newbook->title }}">
        <br>
        <p>body</p>
        <input type="textarea" name="body" value="{{ $newbook->body }}"><br>
        <br>
        <button type="submit">Create Book</button>
    </form>
</section>