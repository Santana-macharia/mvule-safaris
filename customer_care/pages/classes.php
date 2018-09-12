<?php

class user{
	 private $UserId,$UserName,$UserMail,$UserPassword;

	 public function getUserId(){
	 	return $this->UserId;
	 }
	 public function setUserId($UserId){
	 	$this->UserId=$UserId;
	 }
	 public function getUserName(){
	 	$this->UserName;
	 }
	 public function setUserName($UserName){
	 	$this->UserName=$UserName;
	 }
	 public function getUserMail(){
	 	return $this->UserMail;
	 }
	 public function setUserMail($UserMail){
	 	$this->UserMail=$UserMail;
	 }
	 public function getUserPassword(){
	 	return $this->UserPassword;
	 }
	 public function setUserPassword($UserPassword){
	 	$this->UserPassword=$UserPassword;
	 }


        public function InsertUser(){
        	include "conn.php";
        	$req=$bdd->prepare("INSERT INTO users(Username,UserMail,UserPassword) VALUES(:Username,:UserMail,:UserPassword)  ");

        	$req->execute(array(
        		
        		'UserName'=>$this->getUserName(),
        		'UserMail'=>$this->getUserMail(),
        		'UserPassword'=>$this->getUserPassword()
        		));
     }

   }

class chat{
	private $ChatID,$ChatuserId,$ChatText;

	public function getChatId(){

		return $this->ChatId;
	}

	public function setChatId(){
		$this->ChatId = $ChatId;
	}

	public function getChatUserId(){

		return $this->ChatUserId;
	}

	public function setChatUserId(){
		$this->ChatUserId = $ChatUserId;
	}
	public function getChatText(){

		return $this->ChatText;
	}

	public function setChatText(){
		$this->ChatText = $ChatText;
	}


	public function InsertChatMessage(){
		include "conn.php";

		$req=$bdd->prepare("INSERT INTO chats(ChatUserId,ChatText) VALUES(ChatUserId,ChatText)");
		$req->execute(array(
			'ChatUserId'=>$this->getChatUserId(),
			'ChatText'=>$this->getChatText()
			));
	}



}












?>