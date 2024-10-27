<!DOCTYPE html>
<html>
<head>
    <title>Appointment Approved</title>
</head>
<body>
<p>Dear {{ $appointment->first_name }},</p>

<p>Your appointment has been approved!</p>

<p>Details:</p>
<ul>
    <li><strong>First Name:</strong> {{ $appointment->first_name }}</li>
    <li><strong>Last Name:</strong> {{ $appointment->last_name }}</li>
    <li><strong>Email:</strong> {{ $appointment->email }}</li>
    <li><strong>Phone Number:</strong> {{ $appointment->phone_number }}</li>
    <li><strong>Subject:</strong> {{ $appointment->subject }}</li>
    <li><strong>Description:</strong> {{ $appointment->description }}</li>
</ul>

<p>Thank you!</p>
</body>
</html>
