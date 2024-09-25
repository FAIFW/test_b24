<?
require_once (__DIR__.'/crest.php');

//that was working:
$result = 'hello world';


$result = CRest::call(
		'crm.lead.add',
		{{query[params][PARAMS]}}
	);




echo '<pre>';
	print_r($result);
echo '</pre>';