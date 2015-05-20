<?php
class Rss_model extends CI_Model {

	public function __construct()
	{
			$this->load->database();
  }#end __construct

  public function get_news()
	{
      $request = "http://news.yahoo.com/rss";//model
      $response = file_get_contents($request);//model
      $data['xml'] = simplexml_load_string($response);//model

	}#end get_news()

