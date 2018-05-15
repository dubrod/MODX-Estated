<?php
/*
* Created by Wayne Roddy (wayne@modx.com) May 2018
* Look up and return result from https://estated.com/api/
* Usage: [[!Estated]]
* Requirements: API Key in Parameters
*/

$key = $modx->getOption('estated.apikey');
$tpl = $modx->getOption('estated.template');
$report = "";

if(empty($key) || empty($tpl)){
  return false;
}

$resources = $modx->getCollection('modResource', array('published'=>'1','template'=>$tpl));

foreach($resources as $resource) {
    $id = $resource->get('id');
    $title = $resource->get('pagetitle');
    $estated_skip = $resource->getTVValue('estated_skip');
    $estated_street = $resource->getTVValue('estated_street');

    if($estated_skip){
      return false;
    }

    $report .= "Updated ".$title."(".$id.")";
}

return $report;
