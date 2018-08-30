Material Design
===============
Testing

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

run

```
composer require irrahub/materaildesign:dev-master

```

Usage
-----

in your layouts/main.php include followin code


```

<?php

if (class_exists('material\design\web\MaterialAsset')) {
    material\design\web\MaterialAsset::register($this);
}
?>
<?php $this->beginPage() ?>


```

