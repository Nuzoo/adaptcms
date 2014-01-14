<?php
$system_config = '{"helpers":[],"components":[]}';

$configuration = array();
$configuration['system'] = json_decode($system_config, true);

Configure::write('internal', $configuration );

$global = '[{"tag":"{{ sitename }}","value":"Nuzoo\'s schr\u00e4ge Schichten"},{"tag":"{{ description }}","value":"Ein kleiner Blog f\u00fcr zwischen durch"}]';

Configure::write('global_vars', json_decode($global, true));
Configure::write('standard_global_vars', json_decode($global, true));