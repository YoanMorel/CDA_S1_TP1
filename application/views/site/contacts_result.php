<div class="container-fluid">
    <div class="row no-gutters">
        <?= heading('TP1 - Validation et enregistrement de données de formulaire', 3); ?>
    </div>
    <div class="row no-gutters m-4">
        <div class="alert alert-success mx-auto" role="alert">
            <?= heading('Les données ont été enregistrées', 4, ['class' => 'alert-heading']); ?>
            <p>
                Pour consulter la liste des utilisateurs ou pour supprimer un utilisateur, cliquez sur ce lien :<br />
                <?= anchor('index', 'Acceuil'); ?>
            </p>
            <p>
                Pour enregistrer de nouvelles données utilisateur, cliquez sur ce lien :<br />
                <?= anchor('contacts', 'Nouvel utilisateur'); ?>
            </p>
            <hr>
            <p class="mb-0">A bientôt !</p>
        </div>
    </div>
</div>