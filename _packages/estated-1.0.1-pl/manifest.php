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

##Usage:
1. Install package
2. Go to System Settings; Update API Key and Templated ID used for Individual Listings
3. Go to Template used for Individual Listings and assign the `Estated` TVs
4. Create a resource for your listing. Info Required: Street, City, State, Zip
5. Go to `/estated-lookup`
6. Clear Cache to recache resources if necessary.
',
    'changelog' => '#Estated 1.0.1
- Template Variable option to exclude resource from lookup so you don\'t burn up API queries.

#Estated 1.0.0
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
      'guid' => '17114b3984457d96a02f3048bb3765d7',
      'native_key' => 'estated',
      'filename' => 'modNamespace/f660d1b75fe67b0241c73f75117ecc2c.vehicle',
      'namespace' => 'estated',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6ee6857d76649ead784e8b93d5d254d3',
      'native_key' => 'estated.apikey',
      'filename' => 'modSystemSetting/cd32763babf0a7f67ef3267723c06a01.vehicle',
      'namespace' => 'estated',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b01525c54f3a4bc22e993ed93ec762b',
      'native_key' => 'estated.template',
      'filename' => 'modSystemSetting/f94695b5efe5aa10373270cbea7b961a.vehicle',
      'namespace' => 'estated',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '0c9ace9d537717225718e2f635b32e75',
      'native_key' => NULL,
      'filename' => 'modCategory/d2b22748a91fb87ef42c937d6fc6cab0.vehicle',
      'namespace' => 'estated',
    ),
  ),
);