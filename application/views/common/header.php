<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>
  <script src="https://kit.fontawesome.com/eaadffbb2b.js"></script>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![ endif ] -->
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= site_url('index'); ?>">TP1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= $this->uri->segment(1) == 'index' ? 'active' : ''; ?>">
          <?= anchor('index', 'Accueil', ['class' => 'nav-link']); ?>
        </li>
        <li class="nav-item <?= $this->uri->segment(1) == 'contacts' ? 'active' : ''; ?>">
          <?= anchor('contacts', 'Contacts', ['class' => 'nav-link']); ?>
        </li>
      </ul>
      <?php
        if($this->uri->segment(1) == 'index') :
      ?>
      <?= form_open('index', ['class' => 'form-inline my-2 my-lg-0']); ?>
      <?= form_dropdown('departmentsFilter', $departments, 'all', ['id' => 'department', 'class' => 'custom-select form-control']); ?>
      <?= form_submit('send', 'Filtrer', ['class' => 'btn btn-outline-success my-2 my-sm-0']); ?>
      <?= form_close(); ?>
      <?php
        endif;
      ?>
    </div>
  </nav>