<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'WebsiteCon';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//website


$route['Home'] = 'WebsiteCon/index';
$route['Contact'] = 'WebsiteCon/contact';
$route['About'] = 'WebsiteCon/about';
$route['Gallery'] = 'WebsiteCon/gallery';
$route['Services'] = 'WebsiteCon/services';
$route['Our-team'] = 'WebsiteCon/ourteam';
$route['Cities'] = 'WebsiteCon/cities';
$route['Blogs'] = 'WebsiteCon/blogs';
$route['Enquery'] = 'WebsiteCon/enquery';
$route['Termicon-services'] = 'WebsiteCon/termiconservices';

$route['View-cities/(:any)'] = 'WebsiteCon/viewcites/$1';
$route['View-services/(:any)'] = 'WebsiteCon/viewservies/$1';
$route['View-blogs/(:any)'] = 'WebsiteCon/viewblogs/$1';






// $route['Log-out'] = 'WebsiteCon/logout';
// $route['Home'] = 'WebsiteCon/index';
// $route['Account'] = 'WebsiteCon/profile';
// $route['Wallet'] = 'WebsiteCon/wallet';
// $route['Provide-help'] = 'WebsiteCon/providehelp';
// $route['Receive-help'] = 'WebsiteCon/receivehelp';
// $route['My-token'] = 'WebsiteCon/mytoken';
// $route['My-team'] = 'WebsiteCon/myteam';
// $route['Add-wallet'] = 'WebsiteCon/addwallet';






$route['Sign-in'] = 'LoginCon/index';
$route['Sign-up'] = 'LoginCon/register';
$route['Sign-up-refer/(:any)'] = 'LoginCon/register/$1';
$route['Success/(:any)'] = 'LoginCon/success/$1';




$route['Admin/Log-out'] = 'AdminCon/logout';
$route['Admin'] = 'AdminCon/index';
$route['Admin/Login'] = 'AdminloginCon/index';


$route['Admin/Customer'] = 'AdminCon/customer';

$route['Admin/Services'] = 'AdminCon/services';
$route['Admin/Add-services'] = 'AdminCon/addservices';
$route['Admin/Update-services/(:any)'] = 'AdminCon/updateservices/$1';


$route['Admin/Blogs'] = 'AdminCon/blogs';
$route['Admin/Add-blogs'] = 'AdminCon/addblogs';
$route['Admin/Update-blogs/(:any)'] = 'AdminCon/updateblogs/$1';

$route['Admin/Slider'] = 'AdminCon/slider';
$route['Admin/Add-slider'] = 'AdminCon/addslider';
$route['Admin/Update-slider/(:any)'] = 'AdminCon/updateslider/$1';

$route['Admin/Gallery'] = 'AdminCon/gallery';
$route['Admin/Add-gallery'] = 'AdminCon/addgallery';
$route['Admin/Update-gallery/(:any)'] = 'AdminCon/updategallery/$1';


$route['Admin/Brand-icon'] = 'AdminCon/brandcion';
$route['Admin/Add-brandcion'] = 'AdminCon/addbrandcion';
$route['Admin/Update-brandcion/(:any)'] = 'AdminCon/updatebrandcion/$1';


$route['Admin/Cities'] = 'AdminCon/cities';
$route['Admin/Add-cities'] = 'AdminCon/addcities';
$route['Admin/Update-cities/(:any)'] = 'AdminCon/updatecities/$1';





$route['Admin/Add-utr-fund'] = 'AdminCon/utrfund';
$route['Admin/User-token'] = 'AdminCon/usertoker';
