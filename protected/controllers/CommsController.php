<?php
//date_default_timezone_set('Asia/Kolkata');
class CommsController extends Controller
{
	public function actionIndex() {
		$this->render('index');
	}
	
	public function actionAppOpen() {
		$res = array();
		
		$AppID = isset($_REQUEST['AppID']) ? $_REQUEST['AppID'] : '';
		$AppVersion = isset($_REQUEST['AppVersion']) ? $_REQUEST['AppVersion'] : '';
		$ScreenWidth = isset($_REQUEST['ScreenWidth']) ? $_REQUEST['ScreenWidth'] : '';
		$ScreenHeight = isset($_REQUEST['ScreenHeight']) ? $_REQUEST['ScreenHeight'] : '';
		$AppOS = isset($_REQUEST['AppOS']) ? $_REQUEST['AppOS'] : '';
		
		if($AppID == 0) {
			
		}
		header("Content-type: application/json");
		echo json_encode($res);
	}
}

?>