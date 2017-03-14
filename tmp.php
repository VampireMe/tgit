<?php

$content = '<a href="http://www.comjia.com" target="_blank" looyu_bound="1">侃家网</a>';


$content = strip_tags($content, '<p><a><img><br>');

//2、过滤掉 当前留存标签的 style、width、height 样式
$patterns = [
    /*'/(?<!\<a)\s+(style(\s*)=(\s*)\".*?\")/',
    '/(?<!\<a)\s+(width(\s*)=(\s*)\".*?\")/',
    '/(?<!\<a)\s+(height(\s*)=(\s*)\".*?\")/',
    '/\<p\s*\>[\s\t\r\n]*\<\/p\>/',*/
    '/target(\s*)=(\s*)\"_blank\"/',
];

/*$patterns = '/\(\?\<\=\<\a\s+\)(style(\s*)=(\s*)\".*?\")/';
$patterns = '/(?<=\<a\s)(style(\s*)=\2\".*?\")/';
$patterns = '/(?<!\<a\s)(style(\s*)=(\s*)\".*?\")/';*/

preg_match('/target(\s*)=(\s*)\"_blank\"/', $content, $matches);

print_r($matches);

//$content = preg_replace($patterns, '', $content);

//echo preg_replace($patterns, '', $content);

