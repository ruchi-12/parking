<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\User;
use \App\Vendor;


class MasterController{

	public function _getUser($id,$type = null){

		/*
			Find data in Users table
		*/


		if(!$type){

			$user  = User::find((int)$id);

			if($user) {
				return $user;
			}

			$vendor = Vendor::find((int)$id);

			return $vendor;
		} else {

			if($type == "vendor"){
				return Vendor::find((int)$id);
			}

			return User::find((int)$id);
		}

	}


	public function _getUserByCondtion($condition,$type = null){

		/*
			Find data in Users table
		*/


		if(!$type){

			$user  = User::where($condition)->first();

			if($user) {
				return $user;
			}

			$vendor = Vendor::where($condition)->first();

			return $vendor;
		} else {

			if($type == "vendor"){
				return Vendor::where($condition)->first();
			}

			return User::where($condition)->first();
		}

	}

	public function __getPaypalToken(){
		$ch = curl_init();

		$clientId = env('PAYPAL_CLIENT');
		$secret = env('PAYPAL_KEY');

		// GET ACCESS TOKEN

		curl_setopt($ch, CURLOPT_URL,env('PAYPAL_ACCESS_TOKEN_URL'));
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERPWD, $clientId.":".$secret);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

		$result = curl_exec($ch);
		if(empty($result)){
			return false;
		}else{
		    $json = json_decode($result);
		    return $json->access_token;
		}
		curl_close($ch);
	}


	public function __getPaymentLink($acToken,$bill){
		$ch = curl_init();
		$clientId = env('PAYPAL_CLIENT');
		$secret = env('PAYPAL_KEY');

		// GET ACCESS TOKEN

		curl_setopt($ch, CURLOPT_URL,env('PAYPAL_BILL_URL'));
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',
		    'Authorization: Bearer '.$acToken
		));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$bill);

		$result = curl_exec($ch);
		if(empty($result)){
			return false;
		}else{
		    $json = json_decode($result);
		    return $json->links[1]->href;
		}
		curl_close($ch);

	}
}
