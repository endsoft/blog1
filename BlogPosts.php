<?php
include_once('DBConfig.php');
class BlogPosts extends DBConfig {
	public function __construct() {
		parent::__construct();
	}
	public function getPosts($query) {
		$result=$this->conn->query($query);

		if ($result == false ) {
			return false;
		}
		$rows= array();

		while($row = $result->fetch_assoc()) {
			$rows[]= $row;
		}
		return $rows;
	}
	public function getDate($month) {
		switch ($month) {
		case "01":
			$month="Janary";
			break;
		case "02":
			$month="February";
			break;
		case "03":
			$month="March";
			break;
		case "04":
			$month="April";
			break;
		case "05":
			$month="May";
			break;
		case "06":
			$month="June";
			break;
		case "07":
			$month="July";
			break;
		case "08":
			$month="August";
			break;
		case "09":
			$month="September";
			break;
		case "10";
			$month="October";
			break;
		case "11";
			$month="November";
			break;
		case "12";
			$month="December";
			break;

		default:
			# code...
			break;
	}
	return $month;

	}
}