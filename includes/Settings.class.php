<?php

class Settings extends ActiveCampaign
{

    public $version;
    public $url_base;
    public $url;
    public $api_key;

    public function __construct($version, $url_base, $url, $api_key)
    {
        $this->version = $version;
        $this->url_base = $url_base;
        $this->url = $url;
        $this->api_key = $api_key;
    }

    public function edit($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=settings_edit&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }
}
