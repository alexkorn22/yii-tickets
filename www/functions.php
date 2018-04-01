<?php

use GuzzleHttp\Client;

function debug($v, $die = true) {
    echo '<pre style="    z-index: 100029;
    background-color: white;
    position: absolute;">';
    var_dump($v);
    echo'</pre>';
    if ($die) {
        die();
    }
}

function getRequestOdata($url, $params = []) {

    $client = new Client();
    $params['$format'] = 'json';
    $url = Yii::$app->params['odataUrl'] . $url;
    $url .= '?' .http_build_query($params);
    $url = urldecode($url);
    debug($params);
    $res = $client->get($url,
        [
            'auth' => [Yii::$app->params['login1c'],Yii::$app->params['pass1c']],
        ]

    );
    $answer = $res->getBody()->getContents();
    $result = json_decode($answer,true);

    return $result;
}