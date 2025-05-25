<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #8B5A2B;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nouveau message de contact</h1>
    </div>
    
    <div class="content">
        <p><strong>Nom :</strong> {{ $contactData['name'] }}</p>
        <p><strong>Email :</strong> {{ $contactData['email'] }}</p>
        <p><strong>Sujet :</strong> {{ $contactData['subject'] }}</p>
        <p><strong>Message :</strong></p>
        <p>{{ $contactData['message'] }}</p>
    </div>
</body>
</html> 