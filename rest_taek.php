<?php
ini_set('display_errors', 1);
require_once('https://raw.githack.com/pamanbobb/jajanriyoyo/master/endpoint.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "1300120702645755905-ss335ZToQApWS1MUPAwb7csCda3Y77",
    'oauth_access_token_secret' => "yPOyfDx8xfwq5KSe8jdK8thvR1tWFmnTbJgAScuJ3FZOG",
    'consumer_key' => "xCP2fiKRoxPjorwKoghD5tZ3f",
    'consumer_secret' => "tXdElh7pH62TSKnKp9xiE4sqJOWuHbs15gg7BrL3RLeSltWDMP"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

/** Perform a POST request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=J7mbo';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>
