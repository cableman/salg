/* $Id: README.txt,v 1.1 2009/07/02 20:51:49 haffmans Exp $ */

tContact allows you to make a fully translated site-wide contact form on
multilingual sites. Each category can now be assigned a language, and if one
is set the category will only appear on the contact form in the set language.
Common categories can be set "Language neutral" and will appear anywhere.

For a full description of the module, visit the project page:
  http://drupal.org/project/tcontact

To submit bug reports and feature suggestions, or to track changes:
  http://drupal.org/project/issues/tcontact

Requirements:
-------------
Drupal 6.x, Contact module enabled.
Compatible with contributed Contact Forms module.

Installation:
-------------
1. Enable to core Contact module.
2. Extract the files to your sites/default/modules or sites/all/modules
directory. A 'tContact' subdirectory will be created by default.
3. Enable the module in Admin -> Site Building -> Modules.
4. Run update.php.

Usage:
------
Go to Admin -> Site Building -> Contact Form and adjust the categories to your
liking. Add categories for each language as you wish.

You can also choose one default category ("Selected") per language. A language
default category will always take precedense over the Language Neutral
selected option.

To enable translation of the "Additional Information" text (Contact Form
Settings), add the following line to your site's settings.php file:

$conf['i18n_variables'][] = 'contact_form_information';

You can now enter a translated text in all available languages as follows by
configuring the setting with each available language selected. For more
information, see http://drupal.org/node/67824.

Author:
-------
Wouter Haffmans (haffmans) - http://drupal.org/user/107698
