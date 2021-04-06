<section name="book-introduction" class="book-introduction">
    <p>
        <span style="font-weight: bold;">Title:</span>{{ $book->title }}<br>
        <br>
        <span style="font-weight: bold;">Body:</span>{{ $book->body }}
    </p>
</section>
<div>
    <a href="/book/{{ $book->id }}/edit">Edit</a>|<a href="/books">Back</a>
</div>