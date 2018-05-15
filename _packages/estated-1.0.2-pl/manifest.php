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
    'readme' => 'MODX-Estated

> A MODX Extra for www.estated.com real estate data service

Usage:
1. Install package
2. Go to System Settings; Update API Key and Templated ID used for Individual Listings
3. Go to Template used for Individual Listings and assign the Estated TVs
4. Create a resource for your listing. Info Required: Street, City, State, Zip
5. Go to `/estated-lookup.html`
6. Clear Cache to recache resources if necessary.
',
    'changelog' => '#Estated 1.0.2
- 2 Column List for all Parameters
- Resource to Refresh data

#Estated 1.0.1
- 20+ Template Variables and API Snippet

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
      'guid' => 'b986ac964bbd004163aaf11f7d89f434',
      'native_key' => 'estated',
      'filename' => 'modNamespace/4c14a3a76df4ab056a86d00aaed80b34.vehicle',
      'namespace' => 'estated',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7682133298eb8b789865fc02fc86d07f',
      'native_key' => 'estated.apikey',
      'filename' => 'modSystemSetting/db69befcca2923544eff3f0bc14f3f51.vehicle',
      'namespace' => 'estated',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2e27498fac38794c9028c7cda69c048f',
      'native_key' => 'estated.template',
      'filename' => 'modSystemSetting/a9e9a9a45ee0e8f776831ce053241fbc.vehicle',
      'namespace' => 'estated',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '4cbc054a25efbf0f5fb71ea94e93fffe',
      'native_key' => NULL,
      'filename' => 'modCategory/1c81d0c8dd56edeb17d0b4cd8f044305.vehicle',
      'namespace' => 'estated',
    ),
  ),
);