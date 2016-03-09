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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Index_controller';
$route['404_override'] = '';
$route['manage-school'] = "MngSchool_controller";
$route['admin-book-mng'] = "Admin_controller";
$route['admin/([0-9]+)'] = "admin/index/$1";
$route['ebook/([0-9]+)'] = "ebook/index/$1";
$route['event/([0-9]+)'] = "event/index/$1";
$route['showcase/([0-9]+)'] = "showcase/index/$1";
$route['imageshowcase/([0-9]+)'] = "imageshowcase/index/$1";
$route['composition/([0-9]+)'] = "composition/index/$1";
$route['profile'] = "Profile_controller";
$route['upload/ebook-file'] = "File_controller/ebook_file";
$route['profile_info'] = "Profile_controller/profile_session";
$route['authors/([0-9]+)'] = "authors/index/$1";
$route['profile-image'] = "Profile_controller/profile_image";
$route['profile-image-2'] = "Image_controller";
$route['image/upload/(:any)/(:num)'] = "Image_controller/image/$1/$2";
$route['image/upload/(:num)'] = "Image_controller/image/$1";
$route['ebook-cover-image-2'] = "File_controller/ebook_cover_page";
$route['ebook-file-upload'] = "File_controller/ebook_file";
$route['logout']="Logout_controller";
$route['translate_uri_dashes'] = FALSE;