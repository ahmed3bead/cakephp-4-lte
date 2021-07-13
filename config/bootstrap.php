<?php
use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Core\Plugin;

if (!Configure::check('CakeLteTheme.title')) {
    Configure::write('CakeLteTheme.title', 'CakeLte');
}

if (!Configure::check('CakeLteTheme.logo.mini')) {
    Configure::write('CakeLteTheme.logo.mini', '<b>A</b>LT');
}

if (!Configure::check('CakeLteTheme.logo.large')) {
    Configure::write('CakeLteTheme.logo.large', '<b>Admin</b>LTE');
}

if (!Configure::check('CakeLteTheme.login.show_remember')) {
    Configure::write('CakeLteTheme.login.show_remember', true);
}

if (!Configure::check('CakeLteTheme.login.show_register')) {
    Configure::write('CakeLteTheme.login.show_register', true);
}

if (!Configure::check('CakeLteTheme.login.show_social')) {
    Configure::write('CakeLteTheme.login.show_social', true);
}

if (!Configure::check('CakeLteTheme.folder')) {
    Configure::write('CakeLteTheme.folder', ROOT);
}

if (!Configure::check('CakeLteTheme.skin')) {
    Configure::write('CakeLteTheme.skin', 'blue');
}
