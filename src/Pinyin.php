<?php

namespace xiaodi\ThinkPinyin;

use think\Facade;
use Overtrue\Pinyin\Pinyin as Accessor;

class Pinyin extends Facade
{
    protected static function getFacadeClass()
    {
        return Accessor::class;
    }
}
