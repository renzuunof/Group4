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
        <form method="GET" action="{{ route('home.index') }}" class="row g-2 mb-3">
            <div class="col-md-4">
                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Search name, contact, status..."
                    value="{{ request('search') }}"
                >
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-secondary">Search</button>
                <a href="{{ route('home.index') }}" class="btn btn-outline-secondary">Reset</a>
            </div>
        </form>

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
                    <th>Actions</th>
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
                            <form action="{{ route('home.destroy', $post->id) }}" method="POST"
                                 onsubmit="return confirm('Are you sure you want to delete this?');">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('home.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('home.show', $post->id) }}" class="btn btn-info btn-sm">View Records</a>
                            
                             <button type="submit" class="btn btn-danger">
                             Delete
                            </button>
                            
                            </form>
                        </td>
                

                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
