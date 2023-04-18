<div class="page-header">
    <h2><?= t('Calendar settings') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('ConfigController', 'save', array('plugin' => 'Calendar')) ?>" autocomplete="off">

    <?= $this->form->csrf() ?>

    <fieldset>
        <legend><?= t('Project calendar view') ?></legend>
        <?= $this->form->radios('calendar_project_tasks', array(
                'date_creation' => t('Show tasks based on the creation date'),
                'date_started' => t('Show tasks based on the start date'),
            ),
            $values
        ) ?>
    </fieldset>

    <fieldset>
        <legend><?= t('User calendar view') ?></legend>
        <?= $this->form->radios('calendar_user_tasks', array(
                'date_creation' => t('Show tasks based on the creation date'),
                'date_started' => t('Show tasks based on the start date'),
            ),
            $values
        ) ?>
    </fieldset>

    <div class="form-actions">
        <button type="submit" class="btn btn-blue"><?= t('Save') ?></button>
    </div>
</form>
