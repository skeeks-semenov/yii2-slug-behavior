Yii2 slug behavior (Semantic URL)
===================================

This solution allows you to generate good slug urls. ([slug wiki](https://en.wikipedia.org/wiki/Semantic_URL)).

Direct generation is engaged in a proven solution [cocur/slugify](https://github.com/cocur/slugify).

[![Latest Stable Version](https://poser.pugx.org/skeeks/yii2-slug-behavior/v/stable.png)](https://packagist.org/packages/skeeks/yii2-slug-behavior)
[![Total Downloads](https://poser.pugx.org/skeeks/yii2-slug-behavior/downloads.png)](https://packagist.org/packages/skeeks/yii2-slug-behavior)
[![GPL-3.0 License](https://img.shields.io/packagist/l/skeeks/yii2-slug-behavior.svg)](https://opensource.org/licenses/GPL-3.0)
[![Reference Status](https://www.versioneye.com/php/skeeks:yii2-slug-behavior/reference_badge.svg)](https://www.versioneye.com/php/skeeks:yii2-slug-behavior/references)
[![Dependency Status](https://www.versioneye.com/php/skeeks:yii2-slug-behavior/dev-master/badge.png)](https://www.versioneye.com/php/skeeks:yii2-slug-behavior/dev-master)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist skeeks/yii2-slug-behavior "*"
```

or add

```
"skeeks/yii2-slug-behavior": "*"
```


How to use
----------

Attach the behavior in your model:

```php
public function behaviors()
{
    return [
        'slug' => [
            'class' => 'skeeks\yii2\slug\SlugBehavior',
            'slugAttribute' => 'slug',
            'attribute' => 'name',
            // optional params
            'ensureUnique' => true,
        ]
    ];
}

```


Links
----------
* [Github](https://github.com/skeeks-semenov/yii2-slug-behavior)
* [Changelog](https://github.com/skeeks-semenov/yii2-slug-behavior/blob/master/CHANGELOG.md)
* [Issues](https://github.com/skeeks-semenov/yii2-slug-behavior/issues)
* [Packagist](https://packagist.org/packages/skeeks/yii2-slug-behavior)


Demo (view urls)
----------
* [https://skeeks.com](https://skeeks.com)

___

> [![skeeks!](https://skeeks.com/img/logo/logo-no-title-80px.png)](https://skeeks.com)  
<i>SkeekS CMS (Yii2) — fast, simple, effective!</i>  
[skeeks.com](https://skeeks.com) | [cms.skeeks.com](https://cms.skeeks.com)

