<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'WebsiteCon';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//website


$route['img-captcha'] = 'WebsiteCon/captcha';
$route['Home'] = 'WebsiteCon/index';
$route['Contact'] = 'WebsiteCon/contact';
$route['About'] = 'WebsiteCon/about';
$route['Blogs'] = 'WebsiteCon/blogs';
$route['Gallery'] = 'WebsiteCon/gallery';
$route['Services'] = 'WebsiteCon/services';
$route['Our-team'] = 'WebsiteCon/ourteam';
$route['Cities'] = 'WebsiteCon/cities';
$route['Blogs'] = 'WebsiteCon/blogs';
$route['Enquery'] = 'WebsiteCon/enquery';
$route['Checkout'] = 'WebsiteCon/checkout';
$route['Product'] = 'WebsiteCon/products';
$route['View-product/(:any)'] = 'WebsiteCon/viewproducts/$1';
$route['Cart'] = 'WebsiteCon/productcart';
$route['Order-success/(:any)'] = 'WebsiteCon/ordersuccess/$1';

$route['View-cities/(:any)'] = 'WebsiteCon/viewcites/$1';
$route['View-services/(:any)'] = 'WebsiteCon/viewservies/$1';
$route['View-blogs/(:any)'] = 'WebsiteCon/viewblogs/$1';

// $route['Sign'] = 'WebsiteCon/sign';
// $route['SignIn'] = 'WebsiteCon/signin';

// $route['Log'] = 'WebsiteCon/log';
// $route['Login'] = 'WebsiteCon/Login';


$route['Logout'] = 'WebsiteCon/logout';

$route['Sign-in'] = 'LoginCon/index';
$route['Sign-up'] = 'LoginCon/register';
$route['Sign-up-refer/(:any)'] = 'LoginCon/register/$1';
$route['Success/(:any)'] = 'LoginCon/success/$1';

$route['search'] = 'WebsiteCon/search';



// Main admin panal start -------------------------------------------------------------->
// =====================================================================================>

$route['Adminpanal'] = 'AdminDash/index';


$route['Adminpanal/Log-out'] = 'AdminDash/logout';
$route['Adminpanal'] = 'AdminDash/index';

$route['Adminpanal/Delete']="AdminDash/Del";



$route['Adminpanal/Customer'] = 'AdminDash/customer';
$route['Adminpanal/View-enquery/(:any)'] = 'AdminDash/viewenquiery/$1';



$route['Adminpanal/getcate/(:any)'] = 'AdminDash/getcate/$1';

$route['Adminpanal/getform/(:any)'] = 'AdminDash/getcate1/$1';



$route['Adminpanal/getcate1/(:any)'] = 'AdminDash/getcate1/$1';


$route['Adminpanal/uploadimage'] = 'AdminDash/uploadimage';


$route['Adminpanal/Blogs'] = 'AdminDash/blogs';
$route['Adminpanal/Add-blogs'] = 'AdminDash/addblogs';
$route['Adminpanal/Update-blogs/(:any)'] = 'AdminDash/updateblogs/$1';

$route['Adminpanal/Slider'] = 'AdminDash/slider';
$route['Adminpanal/Add-slider'] = 'AdminDash/addslider';
$route['Adminpanal/Update-slider/(:any)'] = 'AdminDash/updateslider/$1';

$route['Adminpanal/Gallery'] = 'AdminDash/gallery';
$route['Adminpanal/Add-gallery'] = 'AdminDash/addgallery';
$route['Adminpanal/Update-gallery/(:any)'] = 'AdminDash/updategallery/$1';


$route['Adminpanal/Brand-icon'] = 'AdminDash/brandcion';
$route['Adminpanal/Add-brandcion'] = 'AdminDash/addbrandcion';
$route['Adminpanal/Update-brandcion/(:any)'] = 'AdminDash/updatebrandcion/$1';


$route['Adminpanal/Cities'] = 'AdminDash/cities';
$route['Adminpanal/Add-cities'] = 'AdminDash/addcities';
$route['Adminpanal/Update-cities/(:any)'] = 'AdminDash/updatecities/$1';



$route['Adminpanal/Category'] = 'AdminDash/category';
$route['Adminpanal/Add-category'] = 'AdminDash/addcategory';
$route['Adminpanal/Update-category/(:any)'] = 'AdminDash/updatecategory/$1';

$route['Adminpanal/Product'] = 'AdminDash/product';
$route['Adminpanal/Add-product'] = 'AdminDash/addproduct';
$route['Adminpanal/Update-product/(:any)'] = 'AdminDash/updateproduct/$1';


// Main admin panal end -------------------------------------------------------------->
// ===================================================================================>

$route['Admin/Sign'] = 'AdminloginCon/sign';
$route['Admin/Sign-In'] = 'AdminloginCon/signin';

$route['Admin/Login'] = 'AdminloginCon/index';


// -------------------------------------------------------------------------

$route['Partner/Log-out'] = 'PartnerDash/logout';
$route['Partner'] = 'PartnerDash/index';

$route['Partner/Delete']="PartnerDash/Del";



$route['Partner/Customer'] = 'PartnerDash/customer';
$route['Partner/View-enquery/(:any)'] = 'PartnerDash/viewenquiery/$1';



$route['Partner/getcate/(:any)'] = 'PartnerDash/getcate/$1';

$route['Partner/getform/(:any)'] = 'PartnerDash/getcate1/$1';



$route['Partner/getcate1/(:any)'] = 'PartnerDash/getcate1/$1';


$route['Partner/uploadimage'] = 'PartnerDash/uploadimage';


$route['Partner/Blogs'] = 'PartnerDash/blogs';
$route['Partner/Add-blogs'] = 'PartnerDash/addblogs';
$route['Partner/Update-blogs/(:any)'] = 'PartnerDash/updateblogs/$1';

$route['Partner/Slider'] = 'PartnerDash/slider';
$route['Partner/Add-slider'] = 'PartnerDash/addslider';
$route['Partner/Update-slider/(:any)'] = 'PartnerDash/updateslider/$1';

$route['Partner/Gallery'] = 'PartnerDash/gallery';
$route['Partner/Add-gallery'] = 'PartnerDash/addgallery';
$route['Partner/Update-gallery/(:any)'] = 'PartnerDash/updategallery/$1';


$route['Partner/Brand-icon'] = 'PartnerDash/brandcion';
$route['Partner/Add-brandcion'] = 'PartnerDash/addbrandcion';
$route['Partner/Update-brandcion/(:any)'] = 'PartnerDash/updatebrandcion/$1';


$route['Partner/Cities'] = 'PartnerDash/cities';
$route['Partner/Add-cities'] = 'PartnerDash/addcities';
$route['Partner/Update-cities/(:any)'] = 'PartnerDash/updatecities/$1';



$route['Partner/Category'] = 'PartnerDash/category';
$route['Partner/Add-category'] = 'PartnerDash/addcategory';
$route['Partner/Update-category/(:any)'] = 'PartnerDash/updatecategory/$1';



$route['Partner/Product'] = 'PartnerDash/product';
$route['Partner/Add-product'] = 'PartnerDash/addproduct';
$route['Partner/Update-product/(:any)'] = 'PartnerDash/updateproduct/$1';


$route['Partner/Customer-order'] = 'PartnerDash/customerorder';
$route['Partner/View-customer-order/(:any)'] = 'PartnerDash/viewcustomerorder/$1';
$route['Partner/Update-product/(:any)'] = 'PartnerDash/updateproduct/$1';

