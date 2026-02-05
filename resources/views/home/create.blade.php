<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Add Person</h1>
        <form action="{{ route('home.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="mb-3">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name">
            </div>
            <div class="mb-3">
                <label for="contact_info" class="form-label">Contact Info</label>
                <input type="text" class="form-control" id="contact_info" name="contact_info" required>
            </div>
            <div class="mb-3">
                <label for="marital_status" class="form-label">Marital Status</label>
                <select class="form-control" id="marital_status" name="marital_status" required>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Person</button>
            <a href="{{ route('home.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
