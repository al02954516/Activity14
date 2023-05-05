<!DOCTYPE html>
<html>
    <head>
        <title>Note App</title>
    </head>
    <body>
        <h1>Note App</h1>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Body</th>
                    <th>Classification</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $note)
                    <tr>
                        <td>{{ $note->title }}</td>
                        <td>{{ $note->author }}</td>
                        <td>{{ $note->body }}</td>
                        <td>{{ $note->classification }}</td>
                        <td>
                            <button onclick="location.href='{{ route('note.edit', $note->id) }}'">Edit</button>
                            <form method="POST" action="{{ route('note.destroy', $note->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button onclick="location.href='{{ route('note.create') }}'">Create New Note</button>
    </body>
</html>