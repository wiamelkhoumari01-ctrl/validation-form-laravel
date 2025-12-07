<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{ padding:20px; min-height:90vh; background: linear-gradient(135deg, #ffffff, #ffffff); font-family: "Segoe UI", sans-serif; } h3{ text-align:center; color:rgb(0, 0, 0); letter-spacing:1px; font-size: 19px; margin-bottom:15px; } .section{ border-radius: 18px; padding:25px 30px; background: rgba(255,255,255,0.95); box-shadow: 0 20px 40px rgba(0,0,0,0.4); animation: fadeIn 1s ease; }#btn{ border-radius:20px; background: linear-gradient(45deg, #00b09b, #96c93d); color:white; border: none; height:38px; width: 120px; cursor: pointer; font-weight: bold; font-size:12px; box-shadow: 0 8px 20px rgba(0,0,0,0.3); transition: all 0.3s ease; } #btn:hover{ transform: scale(1.05); box-shadow: 0 10px 25px rgba(0,0,0,0.4); opacity:0.95; } #btn:active{ transform: scale(0.95); opacity:0.8; }input{ padding:8px 10px; border-radius:8px; border:1px solid #ccc; outline:none; transition: all 0.3s ease; background-color: #f7f7f7; font-size:13px; margin-bottom: 5px; } input:focus{ border-color:#4ca1af; box-shadow: 0 0 8px rgba(76,161,175,0.8); background-color:white; } label::before{ margin-right:5px; }span{ display:inline-block; background: linear-gradient(45deg, #ff416c, #ff4b2b); color:white; padding:3px 10px; border-radius: 20px; font-size:10px; margin-bottom:5px; animation: shake 0.3s ease; box-shadow: 0 0 8px rgba(255,0,0,0.5); } @keyframes fadeIn { from { opacity:0; transform:translateY(20px); } to { opacity:1; transform:translateY(0); } } @keyframes shake{ 0%{transform:translateX(0)} 25%{transform:translateX(3px)} 50%{transform:translateX(-3px)} 75%{transform:translateX(3px)} 100%{transform:translateX(0)} }
    </style>
</head>
<body>
    <div class="container">
    <h3>Informations personnelles :</h3>
    <div class="page">
        <div class="section">
    <form action="trait" method="POST" enctype="multipart/form-data">
        @csrf
        CIN: <input type="text" name='cin' value="{{ old('cin') }}" /><br>
        @error('cin')
            <span >{{ $message }}</span><br>
        @enderror
        Nom: <input type="text" name='nom' value="{{ old('nom') }}" /><br>
        @error('nom')
            <span >{{ $message }}</span><br>
        @enderror
        Prenom: <input type="text" name='prenom' value="{{ old('prenom') }}" /><br>
        @error('prenom')
            <span >{{ $message }}</span><br>
        @enderror
        Email: <input type="text" name='email' value="{{ old('email') }}" /><br>
        @error('email')
            <span >{{ $message }}</span><br>
        @enderror
        Password: <input type="text" name='mdp' value="{{ old('mdp') }}" /><br>
        @error('mdp')
            <span >{{ $message }}</span><br>
        @enderror
        Confirmer le mot de passe: <input type="text" name='mdp_confirmation' value="{{ old('mdp_confirmation') }}" /><br>
        @error('mdp_confirmation')
            <span >{{ $message }}</span><br>
        @enderror
        Age: <input type="text" name='age' value="{{ old('age') }}" /><br>
       @error('age')
            <span >{{ $message }}</span><br>
        @enderror
        date entretien: <input type="date" name='date' value="{{ old('date') }}" /><br><br>
       @error('date')
        <span >{{ $message }}</span><br>
        @enderror
      
        Attacher votre CV:
        <input type="file" name="cv"  ><br><br>
        Attacher votre photo:
        <input type="file" name="photo" id="photo"><br><br>

        <input type="submit" value="envoyer" id="btn">
        <input type="reset" value="renitialiser" id="btn">
    </form>
        </div>
    </div>
    </div>    
</body>
</html>