<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .email-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .email-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .email-list {
            list-style: none;
            padding: 0;
        }
        .email-list li {
            padding: 8px 0;
        }
    </style>
</head>
<body>

<div class="email-container">
    <p class="email-header">New appointment pending:</p>
    <ul class="email-list">
        <li><strong>First Name:</strong> {{ $appointment->first_name }}</li>
        <li><strong>Last Name:</strong> {{ $appointment->last_name }}</li>
        <li><strong>Email:</strong> {{ $appointment->email }}</li>
        <li><strong>Phone Number:</strong> {{ $appointment->phone_number }}</li>
        <li><strong>Subject:</strong> {{ $appointment->subject }}</li>
        <li><strong>Description:</strong> {{ $appointment->description }}</li>
    </ul>
</div>

</body>
</html>
