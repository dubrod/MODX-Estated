<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2015 MODX Systems, LLC (hello@modx.com)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
',
    'readme' => '# MODX-Estated

> A MODX Extra for www.estated.com real estate data service

##Features:
1. Estated Address Look up via PHP Snippet


## Dependencies:
1. www.Estated.com API Key
',
    'changelog' => '#Estated 1.0.0
- Installer Ready
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '06833c8fce5207e20b59e2ca2caa7182',
      'native_key' => 'estated',
      'filename' => 'modNamespace/1eac5f503c6e8bd90ea9ab6ce862612f.vehicle',
      'namespace' => 'estated',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '64ded0a43c249f8b010e1e53103e51f0',
      'native_key' => 'estated.apikey',
      'filename' => 'modSystemSetting/54a48869d2b4187989e2580b2209e76d.vehicle',
      'namespace' => 'estated',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '71ea2378779790ba7f8037947a430b80',
      'native_key' => 'estated.template',
      'filename' => 'modSystemSetting/04499c9522d20878e4c40370bc59ce10.vehicle',
      'namespace' => 'estated',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '87c21d0f06e8110752940d0baf36534c',
      'native_key' => NULL,
      'filename' => 'modCategory/ca28ee668920038dfa6478c46326bdb0.vehicle',
      'namespace' => 'estated',
    ),
  ),
);