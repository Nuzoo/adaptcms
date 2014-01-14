<script type="text/javascript">
$(document).ready(function() {
    $(".plugin-info").popover({
        trigger: 'hover',
        placement: 'left'
    });
});
</script>

<?php $this->Html->addCrumb('Admin', '/admin') ?>
<?php $this->Html->addCrumb('Plugins', null) ?>

<h1>Plugins</h1>

<?= $this->Html->link('Get More Plugins <i class="icon-search"></i>', $this->Api->url() . 'plugins', array(
    'class' => 'btn btn-info pull-right admin-edit-options',
    'target' => '_blank',
    'escape' => false
)) ?>

<?php if (empty($plugins)): ?>
    <div class="clearfix"></div>
    <div class="well">
        No Plugins - <?= $this->Html->link('Click here', $this->Api->url() . 'plugins', array(
            'target' => '_blank',
        )) ?> to look for Plugins on the official website.
    </div>
<?php else: ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Plugin Name</th>
                <th>Status</th>
                <th class="hidden-phone">Current Version</th>
                <th class="hidden-phone">Details</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($plugins as $key => $plugin): ?>
                <?php if (!empty($plugin['current_version'])): ?>
                    <?php if (!empty($plugin['data'])): ?>
                        <?php if ($plugin['data']['current_version'] == $plugin['current_version']): ?>
                            <tr class="plugin-info" data-title="<?= $plugin['data']['title'] ?>" data-content="Plugin is up to date">
                        <?php else: ?>
                            <tr class="plugin-info" data-title="<?= $plugin['data']['title'] ?>" data-content="Plugin is out of date, newest version is <?= $plugin['data']['current_version'] ?>">
                        <?php endif ?>
                    <?php else: ?>
                        <tr>
                    <?php endif ?>
                <?php else: ?>
                    <tr>
                <?php endif ?>
                    <td style="width:30%">
                        <?php if (!empty($plugin['data']['short_description'])): ?>
	                        <?php if ($plugin['status'] == 1): ?>
                                <strong><?= $plugin['title'] ?></strong>
	                        <?php else: ?>
                                <span class="disabled"><?= $plugin['title'] ?></span>
	                        <?php endif ?>

                            <div class="span12 no-marg-left">
                                <?= $plugin['data']['short_description'] ?>
                            </div>
                        <?php else: ?>
	                        <?php if ($plugin['status'] == 1): ?>
		                        <strong><?= $plugin['title'] ?></strong>
	                        <?php else: ?>
		                        <span class="disabled"><?= $plugin['title'] ?></span>
	                        <?php endif ?>
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($plugin['status'] == 1): ?>
                            Active
                        <?php else: ?>
                            In-Active
                        <?php endif ?>
                    </td>
                    <?php if (!empty($plugin['current_version'])): ?>      
                        <?php if (!empty($plugin['data'])): ?>
                            <?php if ($plugin['data']['current_version'] == $plugin['current_version']): ?>
                                <td class="hidden-phone">
                                    <?= $plugin['current_version'] ?> 
                                    <i class="icon icon-ok info"></i>
                                </td>
                            <?php else: ?>
                                <td class="hidden-phone">
                                    <?= $plugin['current_version'] ?> 
                                    <i class="icon icon-ban-circle"></i>

                                    <?= $this->Html->link('Download Latest Version <i class="icon icon-download-alt"></i>', 
                                        $this->Api->url() . 'plugin/' . $plugin['data']['slug'],
                                        array('target' => '_blank', 'class' => 'btn btn-primary pull-right', 'escape' => false)
                                    ) ?>
                                </td>
                            <?php endif ?>
                        <?php else: ?>
                            <td class="hidden-phone">
                                <?= $plugin['current_version'] ?>
                            </td>
                        <?php endif ?>
                    <?php else: ?>
                        <td class="hidden-phone"></td>
                    <?php endif ?>
                    <td class="hidden-phone">
                        <?php if (!empty($plugin['data'])): ?>
                            <?php if (!empty($plugin['data']['author_url'])): ?>
                                <?= $this->Html->link($plugin['data']['author_name'], $plugin['data']['author_url'], array('target' => '_blank')) ?> | 
                            <?php endif ?>
                            
                            <?= $this->Html->link('Plugin Page',
                                $this->Api->url() . 'plugin/' . $plugin['data']['slug'],
                                array('target' => '_blank')
                            ) ?>
                        <?php endif ?>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <?php if ($plugin['status'] == 1): ?>
                                    <?php if (!empty($plugin['upgrade'])): ?>
                                        <li>
                                            <?= $this->Html->link(
                                                '<i class="icon-upload"></i> Upgrade',
                                                array(
                                                    'admin' => false,
                                                    'controller' => 'install',
                                                    'action' => 'upgrade_plugin', 
                                                    $key
                                                ),
                                                array(
                                                    'escape' => false
                                                ));
                                            ?>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($plugin['config'] == 1): ?>
                                        <li>
                                            <?= $this->Html->link(
                                                '<i class="icon-cog"></i> Settings',
                                                array(
                                                    'action' => 'settings',
                                                    $key
                                                ),
                                                array(
                                                    'escape' => false
                                                ));
                                            ?>
                                        </li>
                                    <?php endif ?>
                                        <li>
                                            <?= $this->Html->link(
                                                '<i class="icon-picture"></i> Files',
                                                array(
                                                    'action' => 'assets',
                                                    $key
                                                ),
                                                array(
                                                    'escape' => false
                                                ));
                                            ?>
                                        </li>
                                        <li>
                                            <?= $this->Html->link(
                                                '<i class="icon-group"></i> Permissions',
                                                array(
                                                    'action' => 'permissions',
                                                    $key
                                                ),
                                                array(
                                                    'escape' => false
                                                ));
                                            ?>
                                        </li>
                                    <li>
                                        <?= $this->Html->link(
                                            '<i class="icon-trash"></i> Un-Install',
                                            array(
                                                'admin' => false,
                                                'controller' => 'install',
                                                'action' => 'uninstall_plugin',
                                                $key
                                            ),
                                            array(
                                                'escape' => false, 
                                                'onclick' => "return confirm('Are you sure you want to uninstall this plugin? This is permanent.')"
                                            ));
                                        ?>
                                    </li>
                                <?php else: ?>
                                    <li>
                                        <?= $this->Html->link(
                                            '<i class="icon-plus"></i> Install',
                                            array(
                                                'admin' => false,
                                                'controller' => 'install',
                                                'action' => 'install_plugin', 
                                                $key
                                            ),
                                            array(
                                                'escape' => false
                                            ));
                                        ?>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>