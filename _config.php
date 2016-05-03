<?php


global $project; $project = 'mysite';
global $database; $database  = 'silverstripe_webdevelopment_com';
require_once("conf/ConfigureFromEnv.php");




date_default_timezone_set('Pacific/Auckland');

//set cache to 72 hours
SS_Cache::set_cache_lifetime('any', 60*60*72);

if(Director::isLive()) {
	SS_Log::add_writer(new SS_LogEmailWriter('ssuerrors@gmail.com'), SS_Log::ERR);
}
else {
	//BasicAuth::protect_entire_site(); see config.yml
}

HtmlEditorConfig::get('cms')->setOption(
    'valid_styles',
    array('*' => 'width,height,color,font-size,font-weight,font-style,text-decoration')
);
