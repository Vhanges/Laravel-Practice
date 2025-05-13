<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 bg-light text-dark">
    <div class="bg-white p-4 rounded shadow text-center w-100" style="max-width: 400px;">
        <h1 class="h4 mb-3">Form Result</h1>
        <p class="mb-3">Your form has been submitted successfully!</p>
        <div class="text-start">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Message:</strong> {{ $message }}</p>
        </div>
        <a href="/" class="btn btn-primary">Go Back</a>
    </div>
</body>
</html>
