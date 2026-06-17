<header class=" container mt-3">

    <nav class="navbar border border-light rounded-4 px-3 py-2"> 
    <h1 class="titre">Touche pas au klaxon</h1>

    <div class="d-flex align-items-center gap-3">

        <?php if (isset($_SESSION['id_users'])) : ?>

            <?php if ($_SESSION['role'] === 'admin') : ?>

            <!-- Action Admin -->
            <div class="d-flex gap-2">

            <button type="button" class="btn btn-outline-secondary flex-fill" data-bs-toggle="modal" data-bs-target="#detailsUsers">
                Utilisateurs
            </button>

            <button type="button" class="btn btn-outline-secondary flex-fill" data-bs-toggle="modal" data-bs-target="#detailsAgences">
                Agences
            </button>

            <a href="/create_trajet" class="btn btn-outline-light flex-fill">
                Créer un trajet
            </a>


            </div>

            <?php else : ?>
        
            <!-- Action Users --> 
            <button class="btn btn-dark">
                <a href="/create_trajet" class="btn btn-dark text-white text-decoration-none">
                    Créer un trajet
                </a>
            </button> 

            <?php endif; ?>

        <p class="mb-0">Bonjour 
            <?= $_SESSION['prenom'] ?> 
            <?= $_SESSION['nom'] ?>
        </p>

        <!-- Bouton Déconnexion -->
        <a href="/logout" class="btn btn-outline-danger">
            Déconnexion
        </a>

    <?php else : ?>

        <!-- Bouton Connexion -->
        <button class="btn btn-connexion btn-connexion:hover" onclick="window.location.href='/login'">
            Connexion
        </button>

    <?php endif; ?>
    </div>
    </nav>
</header>




