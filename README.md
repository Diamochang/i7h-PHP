# i7h-PHP
这个项目可以在 PHP 中实现[莉沫酱](https://github.com/RimoChan)自创的 [i18nglish](https://github.com/RimoChan/i7h)，且不用担心 XSS 攻击。
## 使用效果
示例文本取自 Richard M. Stallman 的[自由软件之歌英文歌词](https://www.gnu.org/music/free-software-song.en.html)。

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

（注：“We'll”中的撇号是我自己加的，原本这个撇号在转义过程中丢失了。）
## 使用方法
1. `git clone`整个仓库。如果速度缓慢，可以试着把 Git URL 中的`hub`改为`ee`以使用码云镜像。也可以使用 Composer，之后更新方法。
2. 将`i7h.php`移动到你的项目。
3. 在欲使用的代码中添加依赖：
```php
// 请以实际存放 i7h.php 的位置为准
require_once "i7h.php";
```
4. 使用以下代码调用：
```php
// 实例化 i7h 类
$i7h = new i7h();

// 调用 i18n 方法处理字符串，并输出结果
echo $i7h->i18n('你要转换的内容')
```
5. 大功告成。
## 已知问题
- [ ] 英文撇号在转义过程中可能会丢失
## 贡献
欢迎 PR，欢迎 Issues。
## 许可证
[MIT (Expat) License](https://github.com/Diamochang/i7h-PHP/blob/m2n/LICENSE)