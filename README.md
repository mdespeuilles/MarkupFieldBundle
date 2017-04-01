MarkupFieldBundle
==================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/f7a88ff5-e1e1-47c9-9c15-571c16115b98/mini.png)](https://insight.sensiolabs.com/projects/f7a88ff5-e1e1-47c9-9c15-571c16115b98)

This bundle provides a markup form field for Symfony.
This bundle is useful to create fake field wich contains text or HTML.

## Installation

### Installation

To install MarkupFieldBundle with Composer just type in your terminal:

```bash
php composer.phar require mdespeuilles/markupfieldbundle
```

Now update your ``AppKernel.php`` file, and
register the new bundle:

```php
<?php

// in AppKernel::registerBundles()
$bundles = array(
    // ...
    new Mdespeuilles\MarkupFieldBundle\MdespeuillesMarkupFieldBundle(),
    // ...
);
```

## Usage

When creating a new form class add the following line to create the field:

``` php
<?php

use Mdespeuilles\MarkupFieldBundle\Form\Type\MarkupType;

public function buildForm(FormBuilder $builder, array $options)
{
    // ...
    $builder->add('markup', MarkupType::class, [
        'markup' => 'hello word !'
    ]);
    // ...
}
```
