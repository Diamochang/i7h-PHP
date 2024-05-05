# i7h-PHP
[![PHP CI](https://github.com/Diamochang/i7h-PHP/actions/workflows/php.yml/badge.svg?branch=m2n)](https://github.com/Diamochang/i7h-PHP/actions/workflows/php.yml) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Diamochang/i7h-PHP/badges/quality-score.png?b=m2n)](https://scrutinizer-ci.com/g/Diamochang/i7h-PHP/?branch=m2n) ![PHP Version Support](https://img.shields.io/packagist/php-v/diamochang/i7h-php) [![Packagist Stars](https://img.shields.io/packagist/stars/diamochang/i7h-php.svg)](https://packagist.org/packages/diamochang/i7h-php)

這個項目可以在 PHP 中實現[莉沫醬](https://github.com/RimoChan)自創的 [i18nglish](https://github.com/RimoChan/i7h)，且不用擔心 XSS 攻擊。
## 使用效果
示例文本取自 Richard M. Stallman 的[《自由軟件之歌》英文歌詞](https://www.gnu.org/music/free-software-song.en.html)。

Before:
```
When we have enough free software
At our call, hackers, at our call,
We'll kick out those dirty licenses
Ever more, hackers, ever more.
```

After:
```
W2n we h2e e4h f2e s6e
At o1r c2l, h5s, at o1r c2l,
We'll k2k o1t t3e d3y l6s
E2r m2e, h5s, e2r m2e.
```

（註：「We'll」中的撇號是我自己加的，原本這個撇號在轉義過程中丟失了。）
## 使用方法
1. `git clone`整個倉庫。如果速度緩慢，可以試着把 Git URL 中的`hub`改為`ee`以使用碼雲鏡像。也可以使用 Composer：`composer require diamochang/i7h-php`。
2. 將`i7h.php`移動到你的項目。如果你是用 Composer 安裝的，這步可以跳過。
3. 在欲使用的代碼中添加依賴：
```php
// 請以實際存放 i7h.php 的位置為準
require_once "i7h.php";
```
4. 使用以下代碼調用：
```php
// 實例化 i7h 類
$i7h = new i7h();

// 調用 i18n 方法處理字符串，並輸出結果
echo $i7h->i18n('你要轉換的內容')
```
5. 大功告成。
## 已知問題
- [ ] 英文撇號在轉義過程中可能會丟失
## 貢獻
歡迎 PR，歡迎 Issues。
## 許可證
[MIT (Expat) License](https://github.com/Diamochang/i7h-PHP/blob/m2n/LICENSE)