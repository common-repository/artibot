<?php

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
  exit();

delete_option('artibot_widget_code');
delete_option('artibot_widget_name');
delete_option('artibot_plugin_ver');

?>
