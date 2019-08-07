# ThinkPHP-Pinyin
ThinkPHP版 中文转拼音扩展包 只支持ThinkPHP6

## 安装
```sh
composer require "xiaodi/think-pinyin"
```
**使用包**
* [overtrue/pinyin](https://github.com/overtrue/pinyin) `安正超`

## 快捷使用

|  助手函数      | 方法调用                                                |
| -------------  | --------------------------------------------------- |
| `pinyin()`     | `app('pinyin')->convert()`                              |
| `pinyin_abbr()`     | `app('pinyin')->abbr()`                                        |
| `pinyin_permalink()` | `app('pinyin')->permalink()`                         |
| `pinyin_sentence()` | `app('pinyin')->sentence()`                         |

```php
var_dump(pinyin('带着希望去旅行，比到达终点更美好'));
// ["dai", "zhe", "xi", "wang", "qu", "lv", "xing", "bi", "dao", "da", "zhong", "dian", "geng", "mei", "hao"]

var_dump(pinyin_abbr('带着希望去旅行，比到达终点更美好'));
// dzxwqlxbddzdgmh

var_dump(pinyin_permalink('带着希望去旅行，比到达终点更美好'))
// dai-zhe-xi-wang-qu-lyu-xing-bi-dao-da-zhong-dian-geng-mei-hao

var_dump(pinyin_sentence('带着希望去旅行，比到达终点更美好'))
// daizhexiwangqulyuxing,bidaodazhongdiangengmeihao
```

## 门面调用
```php
use xiaodi\ThinkPinyin\Pinyin;

Pinyin::convert();
Pinyin::abbr();
Pinyin::permalink();
Pinyin::sentence();
```
