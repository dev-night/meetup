<?php declare(strict_types=1);

define('MEETUP_NAME', 'dev_night');
define('API_URL', 'https://api.meetup.com/'.MEETUP_NAME.'/events?scroll=future_or_past&page=1');
define('MEETUP_URL', 'https://www.meetup.com/'.MEETUP_NAME);

function getMeetupUrl(): string
{
    $json = file_get_contents(API_URL);
    if (false === $json) {
        return MEETUP_URL;
    }

    $data = json_decode($json, true);
    if (
        JSON_ERROR_NONE !== json_last_error()
        || !is_array($data)
        || !array_key_exists(0, $data)
        || !is_array($data[0])
        || !array_key_exists('link', $data[0])
        || empty($data[0]['link'])
    ) {
        return MEETUP_URL;
    }

    return $data[0]['link'];
}

function sendResponse($link)
{
    header('Content-Type: text/html', true, 200);
    echo <<<EOD
        <html>
            <head>
                <meta http-equiv="refresh" content="0; url=$link" />
            </head>
        </html>
        EOD;
}

sendResponse(getMeetupUrl());
