<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Email</title>
</head>
<body>
    <h2>Contact Form Submission</h2>
    <p><strong>Subject:</strong> {{ $subject }}</p>
    <p><strong>Name:</strong> {{ $fullname }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Phone Number:</strong> {{ $phone_number }}</p>
    <p><strong>Message:</strong> {{ $message }}</p>
</body>
</html>
