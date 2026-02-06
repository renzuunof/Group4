<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Records</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $post->id }}</p>
                <p><strong>First Name:</strong> {{ $post->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $post->last_name }}</p>
                <p><strong>Middle Name:</strong> {{ $post->middle_name }}</p>
                <p><strong>Contact Info:</strong> {{ $post->contact_info }}</p>
                <p><strong>Marital Status:</strong> {{ $post->marital_status }}</p>
            </div>
        </div>
    </div>
</body>
</html>