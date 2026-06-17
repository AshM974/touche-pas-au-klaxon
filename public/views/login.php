<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/style/login.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecran de Connexion</title>
</head>
<body>
    
    <header></header>

    <main>
    <section class="w-25 p-3 mx-auto ">
<div class="mt-200" style="margin-top:200px;">

    <h1 class="fs-3">Veuillez vous connecter :</h1>

<!-- Formulaire de Connexion -->

  <div class="border-color rounded-3 p-3">
    <form method="POST" action="/login">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="xxxxx">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-connexion btn-connexion:hover">Se Connecter</button>
        </div>
    </form>
  </div>

</div>

</section>    

    </main>
    <footer>
            <p class="text-center">© 2024 - CENEF - MVC PHP</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>