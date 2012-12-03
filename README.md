DokuWiki-Plugin-Rigrr
=====================

Rigrr BPMN Plugin for DokuWiki



Known Issues:

For this plugin to work, the rigrr library needs to be loaded. At there moment, there seems to be a namingclash (or something that produces similar symptoms).

The issue is in the top of our todo list, but until that is resolved the following work-around is needed.

1) Find the main.php in the current template

Open the main.php in the current DokuWiki template. For the Default template the main.php is located at \lib\tpl\default\main.php

2) 

Find the </header> html tag and copy the folling html on the line before the closing tag. 

  <script src="/lib/plugins/rigrr/rigrrlibrary/rigrrlibrary.nocache.js" ></script>

So that the end result looks like this:

<header>
  ...
  ...
  ...
  <script src="/lib/plugins/rigrr/rigrrlibrary/rigrrlibrary.nocache.js" ></script>
</header>

Save the file and clear the chache directory (data\cache) and all browser caches 

