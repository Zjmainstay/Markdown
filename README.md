Markdown
========

A PHP Markdown class which can parse markdown document and parse html as well.


#Usage:

```
require 'markdown.class.php';
$obj 			= new Markdown();

$mdFile 		= 'markdown_document.md';		//orig
$htmlFile		= 'markdown_html.html';

$html2mdFile	= 'html_2_md.md';				//parse
$md2htmlFile	= 'md_2_html.html';

$mdBackFile 	= 'markdown_back.md';			//parse and parse back
$htmlBackFile	= 'html_back.html';

$md 			= file_get_contents($mdFile);
$md2html		= $obj->parseMarkdown($md);
file_put_contents($md2htmlFile, $md2html);		//md => html

$html 			= file_get_contents($htmlFile);
$html2md		= $obj->parseHtml($html);
file_put_contents($html2mdFile, $html2md);		//html => md

$mdBack			= $obj->parseHtml($md2html);
file_put_contents($mdBackFile, $mdBack);		//md => html => md

$htmlBack		= $obj->parseMarkdown($html2md);
file_put_contents($htmlBackFile, $htmlBack);	//html => md => html
```