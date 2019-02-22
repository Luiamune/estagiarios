<?php
	class usuario {
		private $nome;
		private $email;
		
		public function __construct(){
			$this->nome = "tio sam"
			$this->email = "tiosam@GGmail.com"
		}
		
		setNome($nome){
			$this->nome = $nome;
		}
		
		getNome (){
			return $this-> nome;
		}
		
		setEmail($email){
			$this->email = email;
		}
		
		getEmail(){
			return $this->email;
		}
	}