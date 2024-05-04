# i7h-PHP
[简体中文](README_zh-hans.md)

![CI](https://github.com/Diamochang/i7h-PHP/workflows/CI/badge.svg) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Diamochang/i7h-PHP/badges/quality-score.png?b=m2n)](https://scrutinizer-ci.com/g/Diamochang/i7h-PHP/?branch=m2n) ![PHP Version Support](https://img.shields.io/packagist/php-v/diamochang/i7h-php) [![Packagist](https://img.shields.io/packagist/diamochang/i7h-php.svg)](https://packagist.org/packages/diamochang/i7h-php)

This project can implement [i18nglish](https://github.com/RimoChan/i7h), which was created by [RimoChan](https://github.com/RimoChan), in PHP without worrying about XSS attacks.
## How it works
The example text is taken from Richard M. Stallman's [*Free Software Song* lyrics](https://www.gnu.org/music/free-software-song.en.html).

Before.
```
When we have enough free software
At our call, hackers, at our call,
We'll kick out those dirty licenses
Ever more, hackers, ever more.
```

After.
```
W2n we h2e e4h f2e s6e
At o1r c2l, h5s, at o1r c2l,
We'll k2k o1t t3e d3y l6s
E2r m2e, h5s, e2r m2e.
```

(Note: I added the apostrophe in "We'll" myself, it was originally lost in the escaping process.)
## How to use it
1. `git clone` the entire repository. If it's slow, try changing `hub` to `ee` in the Git URL to use the code cloud mirror. You can also use Composer: `composer require diamochang/i7h-php`.
2. Move `i7h.php` to your project. If you installed it with Composer, this step can be skipped.
3. Add the dependency to the code you want to use:
```php
// Please refer to the actual location of i7h.php.
require_once "i7h.php";
```
4. Call it with the following code:
```php
// Instantiate the i7h class
$i7h = new i7h();

// Call the i18n method to process the string and output the result.
echo $i7h->i18n('what you want to convert')
```
5. The job is done.
## Known Issues
- [ ] English apostrophe may be lost in the escape process
## Contributions
PRs are welcome, Issues are welcome.
## License
[MIT (Expat) License](https://github.com/Diamochang/i7h-PHP/blob/m2n/LICENSE)