<?php

/**
*  ___       _____      ________      ________       ________      ___           ___      ________       ___  ___          ___       __       ___      _________    ___  ___          ________    ___  ___      ________   
* |\  \     / __  \    |\   __  \    |\   ___  \    |\   ____\    |\  \         |\  \    |\   ____\     |\  \|\  \        |\  \     |\  \    |\  \    |\___   ___\ |\  \|\  \        |\   __  \  |\  \|\  \    |\   __  \  
* \ \  \   |\/_|\  \   \ \  \|\  \   \ \  \\ \  \   \ \  \___|    \ \  \        \ \  \   \ \  \___|_    \ \  \\\  \       \ \  \    \ \  \   \ \  \   \|___ \  \_| \ \  \\\  \       \ \  \|\  \ \ \  \\\  \   \ \  \|\  \ 
*  \ \  \  \|/ \ \  \   \ \   __  \   \ \  \\ \  \   \ \  \  ___   \ \  \        \ \  \   \ \_____  \    \ \   __  \       \ \  \  __\ \  \   \ \  \       \ \  \   \ \   __  \       \ \   ____\ \ \   __  \   \ \   ____\
*   \ \  \      \ \  \   \ \  \|\  \   \ \  \\ \  \   \ \  \|\  \   \ \  \____    \ \  \   \|____|\  \    \ \  \ \  \       \ \  \|\__\_\  \   \ \  \       \ \  \   \ \  \ \  \       \ \  \___|  \ \  \ \  \   \ \  \___|
*    \ \__\      \ \__\   \ \_______\   \ \__\\ \__\   \ \_______\   \ \_______\   \ \__\    ____\_\  \    \ \__\ \__\       \ \____________\   \ \__\       \ \__\   \ \__\ \__\       \ \__\      \ \__\ \__\   \ \__\   
*     \|__|       \|__|    \|_______|    \|__| \|__|    \|_______|    \|_______|    \|__|   |\_________\    \|__|\|__|        \|____________|    \|__|        \|__|    \|__|\|__|        \|__|       \|__|\|__|    \|__|   
*                                                                                           \|_________|                                                                                                                   
*                                                                                                                                                                                                                          
* 在 PHP 中实现莉沫酱自创的 i18nglish，且不用担心 XSS 攻击。
* Implement RimoChan's own i18nglish in PHP without worrying about XSS attacks.
* 
* @package i7h-PHP
* @author Mike Wang (Diamochang)
* @license MIT
*/
class i7h {

    /**
     * 这是一个构造函数。
     * 目前未包含特定初始化逻辑，可扩展以适应未来需求。
     * 
     * This is just a constructor.
     * It does not currently contain specific initialization logic and can be extended to accommodate future needs.
     */
    public function __construct() {
    }

    /**
     * 处理并返回安全的 i18nglish 字符串。
     * Processes and returns a safe i18nglish string.
     *
     * 此方法首先对输入字符串进行 XSS 防护处理，然后转换成 i18nglish 并输出。
     * This method first XSS-protects the input string, then converts it to i18nglish and outputs it.
     * 
     * @param string $str 待处理的原始字符串。The original string to be processed.
     * @return string 经过 XSS 过滤及 i18nglish 转换后的安全字符串。Safe strings after XSS filtering and i18nglish conversion.
     */
    public function i18n($str) {
        // 使用 htmlspecialchars 函数转义 HTML 实体，防止 XSS 攻击
        // Prevent XSS attacks by escaping HTML entities with the htmlspecialchars function
        $safeStr = htmlspecialchars($str, ENT_QUOTES, 'UTF-8');

        // 正则表达式匹配单词，对匹配到的每个单词应用转换逻辑
        // The regular expression matches words and applies conversion logic to each word it matches
        $pattern = '/\b(?![\'-])\w+(?<![\'-])\b/u'; // 'u'修饰符用于支持 Unicode 字符 The 'u' modifier is used to support Unicode characters
        $callback = function ($matches) {
            $match = $matches[0];
            // 若单词长度超过2，则进行转换
            // If the word length is more than 2, the conversion is performed
            if (strlen($match) > 2) {
                return $match[0] . (strlen($match) - 2) . $match[-1];
            }
            return $match; // 单词长度小于等于2，直接返回原单词 If the length of the word is less than or equal to 2, return the original word directly
        };
        
        // 应用转换逻辑 Apply conversion logic
        $i7hResult = preg_replace_callback($pattern, $callback, $safeStr);

        return $i7hResult;
    }
}

?>