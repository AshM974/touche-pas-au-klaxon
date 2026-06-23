<header class="container mt-3">
    <nav class="navbar  border border-dark rounded-4 px-3 py-3">        
        <h1 class="navbar-brand mb-0 fs-3 fw-bold text-dark">
            Touche pas au klaxon
        </h1>

        <div class="ms-auto d-flex align-items-center gap-3">

            <?php if (isset($_SESSION['id_users'])) : ?>

                <?php if ($_SESSION['role'] === 'admin') : ?>

                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#detailsUsers">
                        Utilisateurs
                    </button>

                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#detailsAgences">
                        Agences
                    </button>

                <?php endif; ?>

                <a href="/touche_pas_au_klaxon/create_trajet" class="btn btn-outline-dark">
                    Créer un trajet
                </a>

                <p class="mb-0 text-dark">
                    Bonjour <?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?>
                </p>

                <a href="/touche_pas_au_klaxon/logout" class="btn btn-danger">
                    Déconnexion
                </a>

            <?php else : ?>

                <a href="/touche_pas_au_klaxon/login" class="btn btn-dark">
                    Connexion
                </a>

            <?php endif; ?>

        </div>
    </nav>
</header>