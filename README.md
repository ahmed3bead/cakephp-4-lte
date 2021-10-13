# CakePHP AdminLTE 3 Theme
[![Latest Stable Version](http://poser.pugx.org/ahmedebead/cakephp-4-lte/v)](https://packagist.org/packages/ahmedebead/cakephp-4-lte) [![Total Downloads](http://poser.pugx.org/ahmedebead/cakephp-4-lte/downloads)](https://packagist.org/packages/ahmedebead/cakephp-4-lte) [![Latest Unstable Version](http://poser.pugx.org/ahmedebead/cakephp-4-lte/v/unstable)](https://packagist.org/packages/ahmedebead/cakephp-4-lte) [![License](http://poser.pugx.org/ahmedebead/cakephp-4-lte/license)](https://packagist.org/packages/ahmedebead/cakephp-4-lte)

![RTL Support](https://github.com/ahmed3bead/cakephp-4-lte/blob/main/webroot/theme-images/ltr.png?raw=true)


**What's the news**

The CakephpLte was updated version to 3.1.0.

The CakePHP was updated version compatible to 4.2.0.


### Installation

You can install using [composer](http://getcomposer.org).

```
composer require ahmedebead/cakephp-4-lte
```
### Copy Assets

After above command Run this command


```
bin/cake plugin assets symlink
```


### Enable Plugin

```php
// src/Application.php

public function bootstrap()
{
    $this->addPlugin('CakephpLte', ['autoload' => true, 'bootstrap' => true, 'routes' => true]);
}
```

### Enable Theme

```php
// src/Controller/AppController.php
use Cake\Event\EventInterface;

public function beforeRender(EventInterface  $event)
{
    $this->viewBuilder()->setTheme('CakephpLte');
    $this->viewBuilder()->setClassName('CakephpLte.CakephpLte');
}
```

### Enable Form

```php
// src/View/AppView.php

public function initialize()
{
    $this->loadHelper('Form', ['className' => 'CakephpLte.Form']);
    $this->loadHelper('Paginator', ['templates' => 'CakephpLte.paginator-templates']);

}
```




### Configure

```php
// new config/cakephplte.php file

return [
    'CakephpLteTheme' => [
        'title' => 'CakephpLte',
        'logo' => [
            'mini' => '<b>AE</b>LT',
            'large' => '<b>Admin</b>LTE'
        ],
        'login' => [
            'show_remember' => true,
            'show_register' => true,
            'show_social' => true
        ],
        'folder' => ROOT,
        'skin' => 'blue'
    ]
];

// config/bootstrap.php

Configure::load('cakelte', 'default');
```
# RTL Support

![RTL Support](https://github.com/ahmed3bead/cakephp-4-lte/blob/main/webroot/theme-images/rtl.png?raw=true)


Just add rtl css and js to your layout (if you overwrite it )

```php
// Css
     <!-- Bootstrap 4 rtl -->
     echo $this->Html->css('CakephpLte./css/bootstrap.rtl.min.css'); 
     <!-- Custom CSS rtl -->
     echo $this->Html->css('CakephpLte./css/rtl.css'); 

// JS
     <!-- Bootstrap 4 rtl -->
     echo $this->Html->script('CakephpLte./js/bootstrap.rtl.min.js'); 

```

or use rtl layout

```php
$this->layout = 'CakephpLte.rtl';

```





# What's the features

### Layouts

There are 2 layout files.


- default **it's the main layout**
- rtl

### RTL Support

### View Blocks

There are 3 Blocks where you can extend your CakephpLteTheme.

- **css**

```php
<?php echo $this->fetch('css'); ?>
```

One example is `src/Template/Pages/home.ctp`:

```php
<?php echo $this->Html->css('CakephpLte./bower_components/morris.js/morris', ['block' => 'css']); ?>
```

- **script**

```php
<?php echo $this->fetch('script'); ?>
```

One example is `src/Template/Pages/home.ctp`:

```php
<?php echo $this->Html->script('CakephpLte./bower_components/morris.js/morris.min', ['block' => 'script']); ?>
```

- **scriptBottom**

```php
<?php echo $this->fetch('scriptBottom'); ?>
```

One example is `src/Template/Pages/home.ctp`:

```php
<?php $this->start('scriptBottom'); ?>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
<?php  $this->end(); ?>
```

### Elements

There are 7 element files.

- Element/
    - aside/
        - form
        - sidebar-menu
        - user-panel
    - aside-control-sidebar
    - aside-main-sidebar
    - breadcrumb
    - footer
    - nav-top

### Flash Message

The theme is prepared to show Flash Messages.

```php
<?php echo $this->Flash->render(); ?>
<?php echo $this->Flash->render('auth'); ?>
```

### Bake

One of the better Cake features. The theme is prepared to use Bake. 

```
bin/cake bake all user --theme CakephpLte
```

### View

- **CakephpLteView**

This is one the better theme feature. It change the pattern how Cake show view files.

Basically, you overwrite any theme, plugin and prefix files.

1. src/Template/Plugin/$theme/Plugin/$plugin/$prefix/
2. src/Template/Plugin/$theme/Plugin/$plugin/
3. src/Template/Plugin/$theme/$prefix/
4. src/Template/Plugin/$theme/

### FormHelper

FormHelper by default has format template based on Foundation template. This helper overwrite these templates.

### Behavior

- **DatepickerBehavior**

When you configure `App.defaultLocale` to `pt_BR` this Behavior is util.

### Locale

When you configure `App.defaultLocale` to `pt_BR` this Locale is util.

### Page debug

Added link to default page of CakePHP.

![Depug page](https://github.com/ahmed3bead/cakephp-4-lte/blob/main/webroot/theme-images/debug.png?raw=true)


# Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request
