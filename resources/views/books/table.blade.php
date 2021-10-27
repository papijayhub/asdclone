<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Publish Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->publish_date }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('books.show', [$book->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('books.edit', [$book->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
