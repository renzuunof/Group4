<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Record Details</h5>
                </div>

                <div class="card-body">

                    <div class="row mb-2">
                        <div class="col-5 fw-bold">ID:</div>
                        <div class="col-7">{{ $post->id }}</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-5 fw-bold">First Name:</div>
                        <div class="col-7">{{ $post->first_name }}</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-5 fw-bold">Last Name:</div>
                        <div class="col-7">{{ $post->last_name }}</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-5 fw-bold">Middle Name:</div>
                        <div class="col-7">{{ $post->middle_name }}</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-5 fw-bold">Contact Info:</div>
                        <div class="col-7">{{ $post->contact_info }}</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-5 fw-bold">Marital Status:</div>
                        <div class="col-7">{{ $post->marital_status }}</div>
                    </div>

                </div>

                <div class="card-footer text-end">
                    <a href="{{ route('home.index') }}" class="btn btn-secondary btn-sm">
                        ← Back
                    </a>
                     
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
