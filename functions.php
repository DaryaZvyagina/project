<?php

function get_events(){
	global $db;
	// $query = "SELECT * FROM events";
	$query = "SELECT * FROM events";
	$res = mysqli_query($db, $query);
	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function get_json($arr){
	$data = '[';
	foreach($arr as $item){
		$data .= '{ "date": "' . $item['date'] . '", "title": "' . $item['title'] . '", "description": "' . $item['description'] . '", "url": "?id=' . $item['id'] . '" },';
	}
	$data .= ']';
	return $data;
}

function print_arr($arr){
	echo '<pre>' . print_r($arr, true) . '</pre>';
}