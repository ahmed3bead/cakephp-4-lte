<?php
use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Core\Plugin;

if (!Configure::check('CakephpLteTheme.title')) {
    Configure::write('CakephpLteTheme.title', 'CakephpLte');
}

if (!Configure::check('CakephpLteTheme.logo.mini')) {
    Configure::write('CakephpLteTheme.logo.mini', '<b>A</b>LT');
}

if (!Configure::check('CakephpLteTheme.logo.large')) {
    Configure::write('CakephpLteTheme.logo.large', '<b>Admin</b>LTE');
}

if (!Configure::check('CakephpLteTheme.login.show_remember')) {
    Configure::write('CakephpLteTheme.login.show_remember', true);
}

if (!Configure::check('CakephpLteTheme.login.show_register')) {
    Configure::write('CakephpLteTheme.login.show_register', true);
}

if (!Configure::check('CakephpLteTheme.login.show_social')) {
    Configure::write('CakephpLteTheme.login.show_social', true);
}

if (!Configure::check('CakephpLteTheme.folder')) {
    Configure::write('CakephpLteTheme.folder', ROOT);
}

if (!Configure::check('CakephpLteTheme.skin')) {
    Configure::write('CakephpLteTheme.skin', 'blue');
}
