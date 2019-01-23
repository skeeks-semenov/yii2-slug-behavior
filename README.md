Yii2 slug behavior (Semantic URL)
===================================

This solution allows you to generate good slug urls. ([slug wiki](https://en.wikipedia.org/wiki/Semantic_URL)).

Direct generation is engaged in a proven solution [cocur/slugify](https://github.com/cocur/slugify).


[![Latest Stable Version](https://img.shields.io/packagist/v/skeeks/yii2-slug-behavior.svg)](https://packagist.org/packages/skeeks/yii2-slug-behavior)
[![Total Downloads](https://img.shields.io/packagist/dt/skeeks/yii2-slug-behavior.svg)](https://packagist.org/packages/skeeks/yii2-slug-behavior)

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
            'slugAttribute' => 'slug',                      //The attribute to be generated
            'attribute' => 'name',                          //The attribute from which will be generated
            // optional params
            'maxLength' => 64,                              //Maximum length of attribute slug
            'minLength' => 3,                               //Min length of attribute slug
            'ensureUnique' => true,
            'slugifyOptions' => [
                'lowercase' => true,
                'separator' => '-',
                'trim' => true
                //'regexp' => '/([^A-Za-z0-9]|-)+/',
                //'rulesets' => ['russian'],
                //@see all options https://github.com/cocur/slugify
            ]
        ]
    ];
}

```



Yandex translit http://translit-online.ru/yandex.html:

```php
public function behaviors()
{
    return [
        'slug' => [
            'class' => 'skeeks\yii2\slug\SlugBehavior',
            'slugAttribute' => 'slug',                      //The attribute to be generated
            'attribute' => 'name',                          //The attribute from which will be generated
            // optional params
            'slugifyOptions' => [
                'rulesets' => [
                    skeeks\yii2\slug\SlugRuleProvider::YANDEX, 
                    'default'
                ]
            ]
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

