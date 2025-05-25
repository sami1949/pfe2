<!DOCTYPE html>
<html>
<head>
    <title>Nouvel avis client</title>
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
        .rating {
            color: #8B5A2B;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nouvel avis reçu !</h1>
    </div>
    
    <div class="content">
        <p><strong>Nom :</strong> {{ $avisData['name'] }}</p>
        <p><strong>Email :</strong> {{ $avisData['email'] }}</p>
        <p><strong>Note :</strong> <span class="rating">
            @for($i = 1; $i <= $avisData['rating']; $i++)
                ★
            @endfor
            @for($i = $avisData['rating'] + 1; $i <= 5; $i++)
                ☆
            @endfor
        </span></p>
        <p><strong>Message :</strong></p>
        <p>{{ $avisData['message'] }}</p>
    </div>
</body>
</html>