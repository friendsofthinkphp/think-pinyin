<?php
namespace xiaodi\ThinkPinyin;

use think\Service;
use Overtrue\Pinyin\Pinyin;

class PinyinService extends Service
{
    public function register()
    {
        $this->app->bind('pinyin', Pinyin::class);
    }
}
