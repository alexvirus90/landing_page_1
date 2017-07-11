<?php

	$request = xss($_REQUEST);
	if (isset($request["order"])) {
		$data = array();
		$data["phone"] = $request["phone"];
		$data["date_order"] = time();
		$data["camp_id"] = (isset($_SESSION["camp_id"]) && $_SESSION["camp_id"])? $_SESSION["camp_id"] : null;
		if (addOrder($data)) {
			redirect("/order.php");
		}
		else $message = "Произошла ошибка при отправке формы! Повторите попытку или обратитесь к администрации.";
	}
	
?>