<div class="container">
    <div class="row no-gutters">
        <?= heading($title); ?>
    </div>
    <div class="row no-gutters">
        <?= form_open('contacts'); ?>
        <div class="form-row mx-auto">
            <div class="col-md-6 mb-3">
                <?php $lastNameError = empty(form_error('last_name')) ? '' : ' is-invalid'; ?>
                <?= form_label('Nom&nbsp;:', 'last_name'); ?>
                <?= form_input(['name' => 'last_name', 'id' => 'last_name', 'placeholder' => 'Nom', 'class' => 'form-control'.$lastNameError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez le nom
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <?php $firstNameError = empty(form_error('first_name')) ? '' : ' is-invalid'; ?>   
                <?= form_label('Prénom&nbsp;:', 'first_name'); ?>
                <?= form_input(['name' => 'first_name', 'id' => 'first_name', 'placeholder' => 'Prénom', 'class' => 'form-control'.$firstNameError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez le prénom
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <?php $birthDateError = empty(form_error('birth_date')) ? '' : ' is-invalid'; ?>
                <?= form_label('Date de naissance&nbsp;:', 'birth_date'); ?>
                <?= form_input(['name' => 'birth_date', 'id' => 'birth_date', 'type' => 'date', 'class' => 'form-control'.$birthDateError]); ?>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    S'il vous plait, renseignez la date de naissance
                </div>
            </div>
        </div>
        <div class="form-row mx-auto">
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
                <?= form_input(['name' => 'department', 'id' => 'department', 'placeholder' => 'Service', 'class' => 'form-control'.$departmentError]); ?>
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