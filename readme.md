# Simple view component
A simple view component, easy to implement into any system

## Usage

```php
<?php

/*
 * index.php
 */


use \Morphable\SimpleView;
use \Morphable\SimpleView\ViewNotFound;

$instance = new SimpleView(__DIR__ . '/views');

/*
you can add anything inside the array in the second parameter, for instance a helper class
there is no template language, just write however you want inside the views
keep in mind the variables you set are usable in the included views after
*/

$result = $instance->serve("home.php", [
    "title" => "hello world",
    "helper" => new Helper()
]);


/*
 * /views/home.php
 */

<?
$data = $this->getData();
$helper = $data['helper'];
?>

<?= $this->include('components/header.php') ?>

<? if (isset($data['title'])): ?>

<h1><?= $helper->translate($data['title'], 'NL') ?></h1>

<? endif; ?>

<?= $this->include('components/footer.php') ?>
```

## Contributing
- Follow PSR-2 and the .editorconfig
- Start namespaces with \Morphable\SimpleView
- Make tests
