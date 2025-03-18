<!DOCTYPE html>
<html>
<head>
    <title>Appointment Confirmation</title>
</head>
<body>
    <h2>Hello {{ $appointment->name }},</h2>
    <p>Thank you for booking an appointment.</p>
    <p><strong>Date:</strong> {{ $appointment->date }}</p>
    <p><strong>Message:</strong> {{ $appointment->message }}</p>
    <p>We look forward to seeing you!</p>
</body>
</html>
