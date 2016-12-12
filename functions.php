<?php

function get_events(){
	global $db;
	$query = "SELECT * FROM events";
	$res = mysqli_query($db, $query);
	$fetch = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $fetch;
}

function get_json($arr){
	$data = '[';
	foreach($arr as $item){
		$data .= '{ "date": "' . $item['date'] . '", "title": "' . $item['title'] . '", "description": "' . $item['description'] . '", "url": "' . $item['url_s'] . '" },';
	}
	$data .= ']';
	return $data;
}

function print_arr($arr){
	echo '<pre>' . print_r($arr, true) . '</pre>';
}