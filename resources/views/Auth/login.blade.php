<html>
<head>
    <title>Product Management</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <style type="text/css">
 @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
/* Import de la police Raleway */
@import url('https://fonts.googleapis.com/css?family=Raleway:300,400,600');

/* Style général pour le corps de la page */
body {
    font-family: 'Raleway', sans-serif;
    background: linear-gradient(90deg, rgba(193,189,113,1) 0%, rgba(234,236,190,1) 30%, rgba(147,164,167,1) 76%, rgba(249,249,249,1) 100%);
    margin: 0;
    padding: 0;
}

/* Style pour le formulaire de login */
.login-form {
    margin-top: 50px;
    align-items: center
}

/* Style pour le conteneur principal */
.container {
    width: 100%;
    margin: auto;
    justify-content: center
}

/* Style pour la carte de login */
.card {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    justify-content: center;
    align-content: center;
    width: 600px;
    margin-left: 100px;
    margin-top: 40px
}

/* Style pour l'en-tête de la carte */
.header {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center
}

/* Style pour les étiquettes des champs */
.username,
.pass {
    font-weight: bold;
    text-align: center
}

/* Style pour les champs de saisie */
.usernamein,
.password {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
    margin-left: 160px;
    background-color: #ffffff
}

/* Style pour le bouton de soumission */


/* Style pour le lien "Remember Me" */
.rememberme {
    margin-bottom: 15px;
    justify-content: space-between

}

/* Style pour les erreurs de validation */
.text-danger {
    color: #dc3545;
    font-size: 14px;
}

/* Style pour le bouton de soumission */
.btn {
    margin-left: 210px;
    background-color: #aba599;
    color: #0b0b0b;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    width: 150px;
    height: 40px;
    transition: background-color 0.3s ease;
}
.re{margin-left: 300px;
color: black;
}
.btn:hover {
    background-color: #000000;
    color: #fff
}


    </style>
</head>
<body>
   
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">Login</div><hr>
                        <div class="cabody">

                            <form action="{{ route('login.post') }}" method="POST">
                                @csrf
                                <div class=" row">
                                    <label for="username" class="username">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" id="username" class="usernamein" name="username" required autofocus>
                                        @if ($errors->has('username'))
                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="password" class="pass">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="password" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class=" row">
                                    <div class="rememberme">
                                        <div class="checkbox">
                                            <label class="me">
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                            <label for="" class="re"> <a href="./registation.blade.php">S'inscrire</a></label>
                                        </div>
                                    </div>
                                </div>

                             
                                    <button type="submit" class="btn">
                                        Login
                                    </button>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </main>
</body>
</html>