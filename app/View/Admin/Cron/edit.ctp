<?php $this->Html->addCrumb('Admin', '/admin') ?>
<?php $this->Html->addCrumb('Tools', array('controller' => 'tools', 'action' => 'index')) ?>
<?php $this->Html->addCrumb('Cron Jobs', array('action' => 'index')) ?>
<?php $this->Html->addCrumb('Edit Cron Job', null) ?>

<div class="pull-right admin-edit-options clearfix">
    <?= $this->Html->link(
        '<i class="icon-chevron-left"></i> Return to Index',
        array('action' => 'index'),
        array('class' => 'btn', 'escape' => false
    )) ?>
    <?= $this->Html->link(
        '<i class="icon-trash icon-white"></i> Delete',
        array('action' => 'delete', $this->request->data['Cron']['id'], $this->request->data['Cron']['title']),
        array('class' => 'btn btn-danger', 'escape' => false, 'onclick' => "return confirm('Are you sure you want to delete this cron entry?')"));
    ?>
</div>

<?= $this->Form->create('Cron', array('class' => 'well admin-validate')) ?>
	<h2>Edit Cron Job</h2>

	<?= $this->Form->input('title', array('type' => 'text', 'class' => 'required')) ?>
	<?= $this->Form->input('module_id', array(
		'empty' => '- Choose Component -',
		'class' => 'required'
	)) ?>
	<?= $this->Form->input('function', array(
		'class' => 'required'
	)) ?>
	<?= $this->Form->input('period_amount', array(
		'class' => 'required',
		'options' => $period_amount,
		'empty' => '- choose -'
	)) ?>
	<?= $this->Form->input('period_type', array(
		'class' => 'required',
		'options' => array(
			'minute' => 'Minute(s)',
			'hour' => 'Hour(s)',
			'day' => 'Day(s)',
			'week' => 'Week(s)'
		),
		'empty' => '- choose -'
	)) ?>

    <?= $this->Form->input('active') ?>

	<?= $this->Form->hidden('id') ?>

<?= $this->Form->end(array(
	'label' => 'Submit',
	'class' => 'btn btn-primary'
)) ?>