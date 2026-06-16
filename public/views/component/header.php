<header class=" container mt-3">

    <nav class="navbar border border-dark rounded-4 px-3 py-2"> 
    <h1>Touche pas au klaxon</h1>

    <div class="d-flex align-items-center gap-3">

        <?php if (isset($_SESSION['id_users'])) : ?>

            <?php if ($_SESSION['role'] === 'admin') : ?>

            <!-- Action Admin -->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#detailsUsers">
                Utilisateurs
            </button>

            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#detailsAgences">
                Agences
            </button>

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
        <button class="btn btn-dark ">
            <a href="/logout" class="text-decoration-none text-white">
                Déconnexion
            </a>
        </button>

    <?php else : ?>

        <!-- Bouton Connexion -->
        <button class="btn btn-dark" onclick="window.location.href='/login'">
            Connexion
        </button>

    <?php endif; ?>
    </div>
    </nav>
</header>






