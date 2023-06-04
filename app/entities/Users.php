<?php

namespace App\Entities;

require_once 'app/Db/Database.php';
use \App\Db\Database;
use PDO;

	class Users
	{
		public $id;
		public $company;
		public $username;
		public $email;
		public $first_name;
		public $last_name;
		public $address;
		public $city;
		public $country;
		public $postal_code;
		public $about_me;
		public $created_at;
		public $updated_at;
	
		public function create(){
			$this->created_at = date('Y-m-d H:i:s');
			$this->updated_at = date('Y-m-d H:i:s');

			$objDatabase = new Database('user');			

			$this->id = $objDatabase->insert([
                'company'     => $this->company,
                'username'    => $this->username,
                'email'       => $this->email,
                'first_name'  => $this->first_name,
                'last_name'   => $this->last_name,
                'address'     => $this->address,
                'city'        => $this->city,
                'country'     => $this->country,
                'postal_code' => $this->postal_code,
                'about_me'    => $this->about_me,
                'created_at'  => $this->created_at,
                'updated_at'  => $this->updated_at,
            ]);
			return $this->id ? true : false;
		}

		public function update(){
			$this->updated_at = date('Y-m-d H:i:s');

			return (new Database('user'))->update('id = '.$this->id,[
                'company' => $this->company ?? '',
                'username' => $this->username ?? '',
                'email' => $this->email ?? '',
                'first_name' => $this->first_name?? '',
                'last_name' => $this->last_name ?? '',
                'address' => $this->address ?? '',
                'city' => $this->city ?? '',
                'country' => $this->country ?? '',
                'postal_code' => $this->postal_code ?? '',
                'about_me' => $this->about_me ?? '',
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
			]);
		}

		public function delete(){
			return (new Database('user'))->delete('id = '.$this->id);
		}

		public static function getUsers($where = null, $order = null, $limit = null){
			return (new Database('user'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS);
		}

		public static function getUser($id){
			return (new Database('user'))->select("id = ".$id)->fetchObject(self::class);
		}
		
	}
?>
