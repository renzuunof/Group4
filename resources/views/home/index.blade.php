<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Group4 Records</h1>
        <a href="{{ route('home.create') }}" class="btn btn-primary mb-3">Create New Record</a>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Contact Info</th>
                    <th>Marital Status</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->first_name }}</td>
                    <td>{{ $post->last_name }}</td>
                    <td>{{ $post->middle_name }}</td>
                    <td>{{ $post->contact_info }}</td>
                    <td>{{ $post->marital_status }}</td>
                    <td>{{ $post->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <a href="{{ route('home.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
