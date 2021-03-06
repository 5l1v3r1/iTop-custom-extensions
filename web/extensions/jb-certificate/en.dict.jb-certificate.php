<?php
/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2020-04-09 17:01:06
 *
 * Localized data
 */

Dict::Add('EN US', 'English', 'English', array(

	//	'Class:SomeClass' => 'Class name',
	//	'Class:SomeClass+' => 'More info on class name',
	//	'Class:SomeClass/Attribute:some_attribute' => 'your translation for the label',
    //	'Class:SomeClass/Attribute:some_attribute/Value:some_value' => 'your translation for a value',
    //	'Class:SomeClass/Attribute:some_attribute/Value:some_value+' => 'your translation for more info on the value',
	
	'Class:Certificate' => 'Certificate',
	'Class:Certificate/Attribute:name' => 'Name',
	'Class:Certificate/Attribute:org_id' => 'Organization',
	'Class:Certificate/Attribute:creator_id' => 'Requested by',
	'Class:Certificate/Attribute:provider_org_id' => 'Provider organization',
	'Class:Certificate/Attribute:date_creation' => 'Created on',
	'Class:Certificate/Attribute:date_expiration' => 'Expires on',
	'Class:Certificate/Attribute:description' => 'Description',
	'Class:Certificate/Attribute:certificate' => 'Certificate',
	'Class:Certificate/Attribute:password' => 'Password',
	'Class:Certificate/Attribute:renewal' => 'Renewal',
	'Class:Certificate/Attribute:renewal/Value:automatically' => 'Automatically',
	'Class:Certificate/Attribute:renewal/Value:manually' => 'Manually',
	'Class:Certificate/Attribute:functionalcis_list' => 'CIs',
	'Class:Certificate/Attribute:webservers_list' => 'WebServers',
	
	'Class:Server/Attribute:certificates_list' => 'Certificates',
	'Class:VirtualMachine/Attribute:certificates_list' => 'Certificates',
	'Class:WebServer/Attribute:certificates_list' => 'Certificates',
	
	'Class:lnkCertificateToFunctionalCI' => 'Link Certificate / FunctionalCI',
	'Class:lnkCertificateToWebServer' => 'Link Certificate / WebServer',
	
));

