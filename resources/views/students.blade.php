<!DOCTYPE html>
<html>
<head>
    <title>Student Scores</title>
</head>
<body>
    <h1>Student Score Management</h1>

    <h3>Add New Student</h3>
    <form action="/students" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="number" name="score" placeholder="Score" required>
        <button type="submit">Add</button>
    </form>

    <hr>

    <h3>Student List</h3>
    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Score</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <form action="/students/update" method="POST">
                @csrf
                <td>{{ $student->name }}</td>
                <td>
                    <input type="hidden" name="id" value="{{ $student->id }}">
                    <input type="number" name="score" value="{{ $student->score }}" required>
                </td>
                <td><button type="submit">Update</button></td>
            </form>
            <form action="/students/delete" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $student->id }}">
                <td><button type="submit">Delete</button></td>
            </form>
        </tr>
        @endforeach
    </table>
</body>
</html>
