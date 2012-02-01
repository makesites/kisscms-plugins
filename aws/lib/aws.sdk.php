<?php 

// Location of the AWS SDK
// - optionally define a different location for localhost and production
if(IS_LOCALHOST){
	include_once( realpath("../../") ."/aws_sdk/sdk.class.php");
} else {
	include_once( realpath("../../") ."/aws_sdk/sdk.class.php");	
}

?>