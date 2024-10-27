<!DOCTYPE html>
<html>
<head>
    <title>Appointment Cancelled</title>
</head>
<body>
<p>Dear {{ $appointment->first_name }},</p>

<p>We regret to inform you that your appointment has been cancelled.</p>

<p>Details:</p>
<ul>
    <li><strong>First Name:</strong> {{ $appointment->first_name }}</li>
    <li><strong>Last Name:</strong> {{ $appointment->last_name }}</li>
    <li><strong>Email:</strong> {{ $appointment->email }}</li>
    <li><strong>Phone Number:</strong> {{ $appointment->phone_number }}</li>
    <li><strong>Subject:</strong> {{ $appointment->subject }}</li>
    <li><strong>Description:</strong> {{ $appointment->description }}</li>
</ul>

<p>We apologize for any inconvenience this may cause.</p>
</body>
</html>
