<div class="jumbotron jumbotron-fluid bg-secondary">
  <div class="container">
    <h1><?= $title ?></h1>
    <p>Liste des utilisateurs</p>
  </div>
</div>
<div class="container-fluid">
  <div class="row no-gutters">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Date de naissance</th>
          <th scope="col">Adresse</th>
          <th scope="col">Ville</th>
          <th scope="col">Code Postal</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Service</th>
          <th class="text-center" scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if(!empty($users)):
          foreach($users as $user):
        ?>
        <tr>
          <th scope="row"><?= $user->USE_ID; ?></th>
          <td><?= $user->USE_LAST_NAME; ?></td>
          <td><?= $user->USE_FIRST_NAME; ?></td>
          <td><?= $user->bDay; ?></td>
          <td><?= $user->USE_ADRESS; ?></td>
          <td><?= $user->USE_CITY; ?></td>
          <td><?= $user->USE_ZIP_CODE; ?></td>
          <td><?= $user->USE_PHONE; ?></td>
          <td><?= $user->DEP_DEPARTMENT; ?></td>
          <td class="text-center"><?= anchor('delete/' . $user->USE_ID, '<i class="fas fa-fw fa-trash"></i>', ['class' => 'btn btn-danger']); ?></td>
        </tr>
        <?php
            endforeach;
          else :
        ?>
        <tr>
          <th scope="row">N/A</th>
          <td colspan="9" class="text-center">Pas d'utilisateur dans le service/la base de données</td>
        </tr>
        <?php
          endif;
        ?>
      </tbody>
    </table>
    <div class="col-md-6 ml-auto text-right">Nombre total d'utilisateurs : <?= $nbUsers; ?></div>
  </div>
</div>