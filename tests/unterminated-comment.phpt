--TEST--
Warning message on unterminated comment
--FILE--
<?php

$js = <<<JS
/* Deliberate unterminated comment

alert('test');
JS;

echo jsmin($js);

--EXPECTF--
Warning: jsmin() unterminated comment in %s on line %d