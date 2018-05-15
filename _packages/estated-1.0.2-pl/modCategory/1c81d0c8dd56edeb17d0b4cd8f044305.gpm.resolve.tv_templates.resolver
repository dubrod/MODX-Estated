<?php
/**
 * Resolve linking TVs and Templates
 *
 * THIS RESOLVER IS AUTOMATICALLY GENERATED, NO CHANGES WILL APPLY
 *
 * @package estated
 * @subpackage build
 */

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            /* list of tvs and templates for each */
            $tvs = array (
  'estated_street' => 
  array (
  ),
  'estated_city' => 
  array (
  ),
  'estated_state' => 
  array (
  ),
  'estated_zip' => 
  array (
  ),
  'estated_lat' => 
  array (
  ),
  'estated_long' => 
  array (
  ),
  'estated_zoning_category' => 
  array (
  ),
  'estated_zoning_description' => 
  array (
  ),
  'estated_acres' => 
  array (
  ),
  'estated_year' => 
  array (
  ),
  'estated_beds' => 
  array (
  ),
  'estated_baths' => 
  array (
  ),
  'estated_total_size' => 
  array (
  ),
  'estated_garage_size' => 
  array (
  ),
  'estated_arch_type' => 
  array (
  ),
  'estated_ext_type' => 
  array (
  ),
  'estated_ac_type' => 
  array (
  ),
  'estated_structures_category' => 
  array (
  ),
  'estated_condition' => 
  array (
  ),
  'estated_pool_type' => 
  array (
  ),
  'estated_quality' => 
  array (
  ),
  'estated_roof_type' => 
  array (
  ),
  'estated_value' => 
  array (
  ),
  'estated_price' => 
  array (
  ),
  'estated_status' => 
  array (
  ),
  'estated_skip' => 
  array (
  ),
);
            foreach ($tvs as $tvName => $templateNames) {
                if (!is_array($templateNames) || empty($templateNames)) continue;
                $tv = $modx->getObject('modTemplateVar',array('name' => $tvName));
                if (empty($tv)) {
                    $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find TV: '.$tvName.' to associate to Templates.');
                    continue;
                }
                $rank = 0;
                foreach ($templateNames as $templateName) {
                    $template = $modx->getObject('modTemplate',array('templatename' => $templateName));
                    if (!empty($template)) {
                        $templateVarTemplate = $modx->getObject('modTemplateVarTemplate',array(
                            'tmplvarid' => $tv->get('id'),
                            'templateid' => $template->get('id'),
                        ));
                        if (!$templateVarTemplate) {
                            $templateVarTemplate = $modx->newObject('modTemplateVarTemplate');
                            $templateVarTemplate->fromArray(array(
                                'tmplvarid' => $tv->get('id'),
                                'templateid' => $template->get('id'),
                                'rank' => $rank,
                            ),'',true,true);
                            if ($templateVarTemplate->save() == false) {
                                $modx->log(xPDO::LOG_LEVEL_ERROR,'An unknown error occurred while trying to associate the TV '.$tvName.' to the Template '.$templateName);
                            }
                        }
                    } else {
                        $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find Template '.$templateName);
                    }
                    $rank++;
                }
            }
            break;
    }
}
return true;