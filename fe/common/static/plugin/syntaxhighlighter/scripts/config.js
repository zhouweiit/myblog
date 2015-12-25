$(function(){  
    SyntaxHighlighter.autoloader(
         ['js','jscript','javascript','{%uri name="common:static/plugin/syntaxhighlighter/scripts/shBrushJScript.js"%}'],
         ['bash','shell','scripts/shBrushBash.js'],
         ['css','scripts/shBrushCss.js'],
         ['xml','html','scripts/shBrushXml.js'],
         ['sql','scripts/shBrushSql.js'],
         ['php','scripts/shBrushPhp.js'],
         ['java','scripts/shBrushJava.js'],
         ['c','scripts/shBrushCpp.js']
     ); 
     SyntaxHighlighter.all();
 }); 