<?php
/**
 * Helpers for the template file.
 */

/**
 * Add static entries in the template file. 
 */
$ly->data['header'] = '<h1>Header: Dylan</h1>';
$ly->data['footer'] = <<<EOD

<p>Tools: 
<a href="http://validator.w3.org/check/referer">html5</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">css3</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css21">css21</a>
<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">unicorn</a>
<a href="http://validator.w3.org/checklink?uri={$ly->request->current_url}">links</a>
<a href="http://qa-dev.w3.org/i18n-checker/index?async=false&amp;docAddr={$ly->request->current_url}">i18n</a>

</p>

EOD;

