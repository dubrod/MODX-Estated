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

    //Required Fields
    $address = $resource->getTVValue('estated_street');
    $address = str_replace(" ","+",$address);
    $city = $resource->getTVValue('estated_city');
    $state = $resource->getTVValue('estated_state');
    $zip = $resource->getTVValue('estated_zip');

    if(empty($address) || empty($city) || empty($state) || empty($zip)){
      continue;
    }

    //Address Lookup
    $url = 'https://estated.com/api/property?token='.$key.'&address='.$address.'&city='.$address.'&state='.$state.'&zip='.$zip.'';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $estated_output = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($estated_output);

    if($data->status == "success"){
        $resource->setTVValue('estated_lat', $data->data->property->address->latitude);
        $resource->setTVValue('estated_long', $data->data->property->address->longitude);
        $resource->setTVValue('estated_zoning_category', $data->data->property->site->zoning_category);
        $resource->setTVValue('estated_zoning_description', $data->data->property->site->zoning_description);
        $resource->setTVValue('estated_acres', $data->data->property->site->acres);
        $resource->setTVValue('estated_year', $data->data->property->structures[0]->year_built);
        $resource->setTVValue('estated_beds', $data->data->property->structures[0]->beds_count);
        $resource->setTVValue('estated_baths', $data->data->property->structures[0]->baths_count);
        $resource->setTVValue('estated_total_size', $data->data->property->structures[0]->total_size);
        $resource->setTVValue('estated_garage_size', $data->data->property->structures[0]->garage_size);
        $resource->setTVValue('estated_arch_type', $data->data->property->structures[0]->architecture_type);
        $resource->setTVValue('estated_ext_type', $data->data->property->structures[0]->exterior_wall_type);
        $resource->setTVValue('estated_ac_type', $data->data->property->structures[0]->air_conditioning_type);
        $resource->setTVValue('estated_structures_category', $data->data->property->structures[0]->category);
        $resource->setTVValue('estated_condition', $data->data->property->structures[0]->condition);
        $resource->setTVValue('estated_pool_type', $data->data->property->structures[0]->pool_type);
        $resource->setTVValue('estated_quality', $data->data->property->structures[0]->quality);
        $resource->setTVValue('estated_roof_type', $data->data->property->structures[0]->roof_type);
        $resource->setTVValue('estated_value', $data->data->property->valuation->value);
    }

    echo "- Updated ".$title."(".$id.")<br>";

}
