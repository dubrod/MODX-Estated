<?php
/*
* Created by Wayne Roddy (wayne@modx.com) May 2018
* Look up and return result from https://estated.com/api/
* Usage: [[!Estated]]
* Requirements: API Key in Parameters
*/

$key = $modx->getOption('estated.apikey');
$tpl = $modx->getOption('estated.template');
echo "Estated Resource Updates:<br>";

if(empty($key) || empty($tpl)){
  return false;
}

$resources = $modx->getCollection('modResource', array('published'=>'1','template'=>$tpl));

foreach($resources as $resource) {
    $id = $resource->get('id');
    $title = $resource->get('pagetitle');
    $estated_skip = $resource->getTVValue('estated_skip');

    if($estated_skip=="True"){
      continue;
    }

    $address = $resource->getTVValue('estated_street');
    $city = $resource->getTVValue('estated_city');
    $state = $resource->getTVValue('estated_state');
    $zip = $resource->getTVValue('estated_zip');

    if(empty($address) || empty($city) || empty($state) || empty($zip)){
      return false;
    }

    //Address Lookup
    $url = 'https://estated.com/api/property?token='.$key.'&address='.$address.'&city='.$address.'&state='.$state.'&zip='.$zip.'';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $estated_output = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($estated_output);

    if($data['status'] == "succes"){
        $resource->getTVValue('estated_long') = $data['data']['property']['address']['latitude'];
        echo "- Updated ".$title."(".$id.")<br>";
    }


}
