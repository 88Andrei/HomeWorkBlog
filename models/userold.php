<?php

class User
{
	const UserFilePath = './models/users.txt';

	private function getUsers()
	{
		$userString = file_get_contents (self::UserFilePath);
		return unserialize ($userString);
	}

	private function saveUser ($user)
	{
		$users = $this->getUsers();
		$users [] = $user;
		$this->writeUsers ($users);
	}

	private function writeUsers ($users)
	{
		$userString = serialize ($users);
		file_put_contents(self::UserFilePath , $userString);
	}
	//создает и сохраняет нового пользователя
	public function save($login , $password)
	{
		$user = [
		'login' => $login,
		'password' => hash('sha256' , $password)
		];
		$this->saveUser ($user);
	}

	public function login($login , $password)
	{
		$users = $this->getUsers();
		foreach ($users as $user){
		if ($user ['login'] == $login && $user ['password'] == hash ('sha256' , $password)){
		return true;
      }
    }
    return false;
	}

	public function checkLogin($login)
	{
		$users = $this->getUsers();
		foreach ($users as $user){
		if ($user ['login'] == $login){
		return false;
     }
    }
    return true;
	}

}
