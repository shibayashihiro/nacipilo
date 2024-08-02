<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['waste-management'] = 'home/wasteManagement';
$route['about-us'] = 'home/aboutUs';
$route['radiological'] = 'home/radiological';
$route['normtenorm'] = 'home/normtenorm';
$route['technology'] = 'home/technology';
$route['technologynew'] = 'home/technologynew';
$route['resource'] = 'home/resource';
$route['careers'] = 'home/careers';
$route['contact-us'] = 'home/contactUs';

//Admin Page

$route['admin'] = 'manageLogin';
$route['admin/home/summary'] = 'manageHome';
$route['admin/home/services'] = 'manageHome/services';
$route['admin/home/log'] = 'manageHome/log';
$route['admin/about-us/summary'] = 'manageAboutUs/summary';
$route['admin/about-us/portfolios'] = 'manageAboutUs/portfolios';
$route['admin/about-us/clients'] = 'manageAboutUs/clients';
$route['admin/waste-management/summary'] = 'manageWaste/summary';
$route['admin/waste-management/services'] = 'manageWaste/services';
$route['admin/waste-management/streams'] = 'manageWaste/streams';
$route['admin/waste-management/portfolios'] = 'manageWaste/portfolios';
$route['admin/radiological/summary'] = 'manageRadiological/summary';
$route['admin/radiological/capabilities'] = 'manageRadiological/capabilities';
$route['admin/norm/summary'] = 'manageNorm/summary';
$route['admin/norm/solutions'] = 'manageNorm/solutions';
$route['admin/resources'] = 'manageResource';
$route['admin/career/summary'] = 'manageCareer/summary';
$route['admin/career/benefits'] = 'manageCareer/benefits';
$route['admin/career/jobs'] = 'manageCareer/jobs';
$route['admin/career/job/edit/(:num)'] = 'manageCareer/job_edit/$1';
$route['admin/contact-us'] = 'manageContactUs';

$route['admin/about-us'] = 'manageAboutUs';
$route['admin/blog'] = 'manageBlog';
$route['admin/blog/edit/(:num)'] = 'manageBlog/edit/$1';
$route['admin/join-us'] = 'manageJoinUs';
$route['admin/join-us/edit/(:num)'] = 'manageJoinUs/edit/$1';
$route['admin/logout'] = 'manageLogin/logout';


// Apis

$route['api/home/updateSummary'] = 'manageHome/updateSummary';
$route['api/aboutus/updateSummary'] = 'manageAboutUs/updateSummary';
$route['api/waste-management/updateSummary'] = 'manageWaste/updateSummary';
$route['api/radiological/updateSummary'] = 'manageRadiological/updateSummary';
$route['api/norm/updateSummary'] = 'manageNorm/updateSummary';
$route['api/career/updateSummary'] = 'manageCareer/updateSummary';
$route['api/contactus/updateSummary'] = 'manageContactUs/updateSummary';

$route['api/service/get'] = 'manageHome/getService';
$route['api/service/add'] = 'manageHome/addService';
$route['api/service/update'] = 'manageHome/updateService';
$route['api/service/delete'] = 'manageHome/deleteService';

$route['api/resource/add'] = 'manageHome/addResource';
$route['api/resource/get'] = 'manageHome/getResource';
$route['api/resource/update'] = 'manageHome/updateResource';
$route['api/resource/delete'] = 'manageHome/deleteResource';

$route['api/whatwedo/add'] = 'manageWhatWeDo/addNewService';
$route['api/whatwedo/edit'] = 'manageWhatWeDo/updateService';
$route['api/whatwedo/delete'] = 'manageWhatWeDo/deleteService';
$route['api.whatwedo/get'] = 'manageWhatWeDo/getService';

$route['api/job/delete'] = 'manageCareer/deleteJob';
$route['api/job/update'] = 'manageCareer/updateJob';
$route['api/job/get'] = 'manageCareer/getJob';

$route['api/sendEmail'] = 'manageContactUs/sendEmail';
$route['api/addLog'] = 'manageHome/addLog';
