<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 08.11.2017
 */
namespace skeeks\yii2\slug;
use Cocur\Slugify\RuleProvider\DefaultRuleProvider;

/**
 * Class SlugRuleProvider
 * @package skeeks\yii2\slug
 */
class SlugRuleProvider extends DefaultRuleProvider
{
    /**
     * @see http://translit-online.ru/yandex.html
     */
    CONST YANDEX = 'yandex';

    /**
     * @param string $ruleset
     *
     * @return array
     */
    public function getRules($ruleset)
    {
        if ($ruleset == self::YANDEX) {

            $russianRules = parent::getRules('russian');
            /**
             * @see http://translit-online.ru/yandex.html
             */
            return array_merge($russianRules, [
                //kh после букв c,s,e,h ; в остальных случаях - h
                'цх' => 'ckh',
                'ЦХ' => 'CKh',
                'Цх' => 'Ckh',
                'цХ' => 'cKh',

                'сх'  => 'skh',
                'СХ'  => 'SKh',
                'Сх'  => 'Skh',
                'сХ'  => 'sKh',

                //TODO: доделать комбинации больших маленьких букв
                'ех'  => 'еkh',
                'ёх'  => 'еkh',
                'эх'  => 'еkh',

                'чх' => 'chkh',
                'хх' => 'khkh',
                'шх' => 'shkh',
                'щх' => 'shchkh',
                'жх' => 'zhkh',


                'ё' => 'yo',
                'Ё' => 'Yo',

                'й' => 'j',
                'Й' => 'J',

                'х' => 'h',
                'Х' => 'H',

                'ц' => 'c',
                'Ц' => 'C',

                'щ' => 'shch',
                'Щ' => 'Shch',

                'э' => 'eh',
                'Э' => 'Eh',
            ]);
        }

        return parent::getRules($ruleset);
    }
}