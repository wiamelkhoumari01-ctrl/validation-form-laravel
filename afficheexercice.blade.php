<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body {
        background-color: #f4f6f9;
        margin: 0;
        padding: 30px;
    }
    h2, h3 {
        color: #333;
        margin-bottom: 10px;
    }
    .container {
        max-width: 700px;
        margin: auto;
        background: white;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }
    p {
        font-size: 16px;
        color: #444;
        margin: 6px 0;
        line-height: 1.4;
    }
    strong {
        color: #000;
    }
    hr {
        margin: 20px 0;
        border: none;
        border-top: 1px solid #ccc;
    }
</style>

</head>
<body>
<div class="container">

  <h2>Données du candidat</h2>

  <p><strong>CIN :</strong> {{ $cin }}</p>
  <p><strong>Nom :</strong> {{ $nom }}</p>
  <p><strong>Prénom :</strong> {{ $prenom }}</p>
  <p><strong>Email :</strong> {{ $email }}</p>
  <p><strong>Mot de passe :</strong> {{ $password }}</p>
  <p><strong>Age :</strong> {{ $age }}</p>
  <p><strong>Date entretien :</strong> {{ $date_entretien }}</p>

  <hr>

  <h3>CV :</h3>
  <p><strong>Nom du CV :</strong> {{ $cv_name }}</p>
  <p><strong>Type du CV :</strong> {{ $cv_type }}</p>
  <p><strong>Taille du CV :</strong> {{ round($cv_size/1024, 2) }} Ko</p>

  <hr>

  <h3>Photo :</h3>
  <p><strong>Nom de la photo :</strong> {{ $photo_name }}</p>
  <p><strong>Type de la photo :</strong> {{ $photo_type }}</p>
  <p><strong>Taille de la photo :</strong> {{ round($photo_size/1024, 2) }} Ko</p>

</div>
</body>

</html>