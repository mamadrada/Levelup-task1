<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';
require_once dirname(__FILE__) . '/src/TextPurifier.php';
require_once dirname(__FILE__) . '/src/ApiClient.php';
function sanitizeAndStoreInput()
{
    $inputStr = readline("your string to send : ");
    try {
    	
    	$textPurifier = new TextPurifier();
    	$purifiedText = $textPurifier->purify($inputStr);
    	$apiClient = new ApiClient('post');
    	return "your text : '".$purifiedText."' successfully send to endpoint";

    } catch (Exception $e) {
    	return $e->getMessage();
    }
   
}

echo sanitizeAndStoreInput();