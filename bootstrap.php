<?php

//test adding alambic configs
$currentPaths=config("alambicConfigPaths");
$currentPaths[]=realpath(__DIR__.'/alambicConfig/');
config(["alambicConfigPaths"=>$currentPaths]);

//test resource integration
$currentResources=config("resourceNamespaces");
$currentResources["test"]=["path"=>realpath(__DIR__.'/resources/')];
config(["resourceNamespaces"=>$currentResources]);

//test provider integration
$app->register(App\Extensions\ExtensionTest\Providers\ExtensionProvider::class);

//test controller integration
$app->get('/test', 'App\Extensions\ExtensionTest\Controllers\TestController@index');