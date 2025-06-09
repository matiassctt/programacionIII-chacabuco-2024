<?php

readonly class SessionController {
	public function login(int $id): void 
	{
		$_SESSION["user_id"] = $id;
		header("Location: /admin/");
		die();
	}

	public function logout(): void 
	{
		unset($_SESSION["user_id"]);
		header("Location: /admin/");
		die();
	}

	public function validateUser(): void 
	{
		if (
			!isset($_SESSION["user_id"]) ||
			empty($_SESSION["user_id"])
		) {
			header("Location: /admin/");
			die();
		}
	}
}