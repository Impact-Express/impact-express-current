<?php

class Twitter
{
	private static $token = TWITTER_BEARER_KEY;
	private static $api_endpoint = 'https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=IMPACTEXPRESS';


	public static function latestTweet()
	{
		$data = self::send();
		if (!is_array($data)) return;
		$rawTweet = $data[0]->text;

		$linkifiedTweet = preg_replace_callback('/#[a-zA-Z0-9_]+/', function($match) {
		    return '<a href="https://twitter.com/hashtag/'.ltrim($match[0], '#').'?src=hash" target="_blank">'.$match[0].'</a>';
		},
		$rawTweet);

		return $linkifiedTweet;
	}

	private static function send() {
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, self::$api_endpoint);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.self::$token));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$data = json_decode(curl_exec($ch));
		curl_close($ch);

		return $data;
		
	}
}
