<?php $this->Html->addCrumb($category['title'], null) ?>

<?php $this->set('title_for_layout', $category['title']) ?>

<h1><?= $category['title'] ?></h1>

<?php if (empty($this->request->data)): ?>
	<p>No Articles Found</p>
<?php else: ?>
	<ul>
		<?php foreach($this->request->data as $data): ?>
			<li>
				<?= $this->Html->link($data['Article']['title'], array(
						'controller' => 'articles',
						'action' => 'view',
		            	'slug' => $data['Article']['slug'],
		            	'id' => $data['Article']['id']
				)) ?> @ 
				<?= $this->Admin->time($data['Article']['created']) ?>
			</li>
		<?php endforeach ?>
	</ul>
<?php endif ?>

<?= $this->element('admin_pagination') ?>