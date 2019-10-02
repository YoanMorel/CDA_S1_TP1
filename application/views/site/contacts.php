<div class="container">
    <div class="row no-gutters">
        <?= heading($title); ?>
    </div>
    <div class="row no-gutters">
        <?= form_open('contacts'); ?>
        <div class="form-row mx-auto">
            <div class="col-md-6 mb-3">
                <?php $lastNameError = empty(form_error('lastName')) ? '' : ' is-invalid'; ?>
                <?= form_label('Nom&nbsp;:', 'lastName'); ?>
                <?= form_input(['name' => 'lastName', 'id' => 'lastName', 'placeholder' => 'Nom', 'class' => 'form-control'.$lastNameError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez le nom
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <?php $firstNameError = empty(form_error('firstName')) ? '' : ' is-invalid'; ?>   
                <?= form_label('Prénom&nbsp;:', 'firstName'); ?>
                <?= form_input(['name' => 'firstName', 'id' => 'firstName', 'placeholder' => 'Prénom', 'class' => 'form-control'.$firstNameError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez le prénom
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <?php $birthDateError = empty(form_error('birthDate')) ? '' : ' is-invalid'; ?>
                <?= form_label('Date de naissance&nbsp;:', 'birthDate'); ?>
                <?= form_input(['name' => 'birthDate', 'id' => 'birthDate', 'type' => 'date', 'class' => 'form-control'.$birthDateError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez la date de naissance
                </div>
            </div>
        </div>
        <div class="form-row mx-auto">
            <div class="col-md-12 mb-3">
                <?php $adressError = empty(form_error('adress')) ? '' : ' is-invalid'; ?>
                <?= form_label('Adresse', 'adress'); ?>
                <?= form_input(['name' => 'adress', 'id' => 'adress', 'placeholder' => 'Adresse', 'class' => 'form-control'.$adressError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez une adresse.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <?php $cityError = empty(form_error('city')) ? '' : ' is-invalid'; ?>
                <?= form_label('Ville', 'city'); ?>
                <?= form_input(['name' => 'city', 'id' => 'city', 'placeholder' => 'Ville', 'class' => 'form-control'.$cityError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez la ville.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <?php $zipError = empty(form_error('zip')) ? '' : ' is-invalid'; ?>
                <?= form_label('Code Postal', 'zip'); ?>
                <?= form_input(['name' => 'zip', 'id' => 'zip', 'placeholder' => 'Code Postal', 'class' => 'form-control'.$zipError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez le code postal.
                </div>
            </div>
        </div>
        <div class="form-row mx-auto">
            <div class="col-md-6 mb-3">
                <?php $phoneError = empty(form_error('phone')) ? '' : ' is-invalid'; ?>
                <?= form_label('Téléphone', 'phone'); ?>
                <?= form_input(['name' => 'phone', 'id' => 'phone', 'placeholder' => 'Téléphone', 'class' => 'form-control'.$phoneError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez un numéro de tél.
                </div>
            </div>
        </div>
        <div class="form-row mx-auto">
            <div class="col-md-6 mb-3">
                <?php $departmentError = empty(form_error('department')) ? '' : ' is-invalid'; ?>
                <?= form_label('Service', 'department'); ?>
                <?= form_dropdown('department', $options, '0',['id' => 'department', 'class' => 'custom-select form-control'.$departmentError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez le service.
                </div>
            </div>
        </div>
        <div class="form-row mx-auto">
            <?= form_submit('send', 'Créer l\'utilisateur', ['class' => 'btn btn-primary']); ?>
        </div>
        <?= form_close(); ?>
    </div>
</div>