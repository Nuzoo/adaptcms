<?php $this->Html->addCrumb('Admin', '/admin') ?>
<?php $this->Html->addCrumb('Media', null) ?>

<div class="pull-left">
    <h1>Media Libraries<?php if (!empty($this->request->named['trash'])): ?> - Trash<?php endif ?></h1>
</div>
<div class="btn-group pull-right" style="margin-bottom:10px">
    <?php if ($this->Admin->hasPermission($permissions['related']['media']['admin_add'])): ?>
        <?= $this->Html->link('Add Library <i class="icon icon-plus icon-white"></i>', array('action' => 'add'), array(
            'class' => 'btn btn-info',
            'escape' => false
        )) ?>
    <?php endif ?>
    <a class="btn dropdown-toggle" data-toggle="dropdown">
    View <i class="icon-picture"></i>
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu view">
    <li>
        <?= $this->Html->link('<i class="icon-ok"></i> Active', array(
            'admin' => true,
            'action' => 'index'
        ), array('escape' => false)) ?>
    </li>
    <li>
        <?= $this->Html->link('<i class="icon-trash"></i> Trash', array(
            'admin' => true,
            'action' => 'index',
            'trash' => 1
        ), array('escape' => false)) ?>
    </li>
    </ul>
</div>
<div class="clearfix"></div>

<?php if (empty($this->request->data)): ?>
    <div class="clearfix"></div>
    <div class="well">
        No Items Found
    </div>
<?php else: ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th># of Images</th>
                <th class="hidden-phone"><?= $this->Paginator->sort('User.username', 'Author') ?></th>
                <th class="hidden-phone"><?= $this->Paginator->sort('created') ?></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->request->data as $data): ?>
                <tr>
                    <td>
                        <?php if ($this->Admin->hasPermission($permissions['related']['media']['admin_edit'], $data['User']['id'])): ?>
                            <?= $this->Html->link($data['Media']['title'], array(
                                'action' => 'edit',
                                $data['Media']['id']
                            )) ?>
                        <?php else: ?>
                            <?= $data['Media']['title'] ?>
                        <?php endif ?>
                    </td>
                    <td>
                        <?= $data['Media']['file_count'] ?>
                    </td>
                    <td class="hidden-phone">
                        <?php if ($this->Admin->hasPermission($permissions['related']['users']['profile'], $data['User']['id'])): ?>
                            <?= $this->Html->link($data['User']['username'], array(
                                'controller' => 'users',
                                'action' => 'profile',
                                $data['User']['username']
                            )) ?>
                        <?php endif ?>
                    </td>
                    <td class="hidden-phone">
                        <?= $this->Admin->time($data['Media']['created']) ?>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if ($this->Admin->hasPermission($permissions['related']['media']['view'], $data['User']['id'])): ?>
                                    <li>
                                        <?= $this->Admin->view(
                                            $data['Media']['slug']
                                        ) ?>
                                    </li>
                                <?php endif ?>

                                <?php if (empty($this->request->named['trash'])): ?>
                                    <?php if ($this->Admin->hasPermission($permissions['related']['media']['admin_edit'], $data['User']['id'])): ?>
                                        <li>
                                            <?= $this->Admin->edit(
                                                $data['Media']['id']
                                            ) ?>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($this->Admin->hasPermission($permissions['related']['media']['admin_delete'], $data['User']['id'])): ?>
                                        <li>
                                            <?= $this->Admin->remove(
                                                $data['Media']['id'],
                                                $data['Media']['title']
                                            ) ?>
                                        </li>
                                    <?php endif ?>
                                <?php else: ?>
                                    <?php if ($this->Admin->hasPermission($permissions['related']['media']['admin_restore'], $data['User']['id'])): ?>
                                        <li>
                                            <?= $this->Admin->restore(
                                                $data['Media']['id'],
                                                $data['Media']['title']
                                            ) ?>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($this->Admin->hasPermission($permissions['related']['media']['admin_delete'], $data['User']['id'])): ?>
                                        <li>
                                            <?= $this->Admin->remove(
                                                $data['Media']['id'],
                                                $data['Media']['title'],
	                                            true
                                            ) ?>
                                        </li>
                                    <?php endif ?>
                                <?php endif ?>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>

<?= $this->element('admin_pagination') ?>