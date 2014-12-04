<?php
abstract class Apartment
{
	public ID_A;
	public data_apart;
	public isRent;

	public function Seach(data_apart)
	{	
		if (isRent != True)
		{
			print (RezultSeach)
		}
		else
		{
			print(Квартира сдана в аренду)
		}
	}

	protected function CheckSeach(isRent)
	{
		
	}
	
}

abstract class User
{
	protected login;
	protected email;
	protected role;
	private password;
	public ID_U;
	public data_user; //Массив данных о пользователе
	protected isLogIn; //Отображение страниц по разному для разных пользователей 

	abstract public function CheckLogin(login)
	{
		if (isLogIn = false)
		{
			print(Page_for_Guest)
		}
		else
		{
			print(Page_for_Users)
		}
	}

	public function NewUser(email,password,login,ID,role)
	{

	}

	public function Seach(ID_U)
	{
	}
}

class Guest extends User
{
	isLogIn = false;
}

class RegUser extends User
{	
	protected isBanned; // banned/notBanned
	protected cash;
	protected cash_id;

	isLogIn = true;

	public function getCashID(cash_id)
	{
		return cash_id
	}

	public function LogIn(email,password)
	{
		if (isBanned = true)
		{
			print(Данный пользователь заблокирован);
		}
		else
		{
			print(Page_for_Users);
		}
	}

	public function LogOut()
	{

	}

	public function GetProfile(ID_U)
	{

	}

	public function SendMessage(ID_U)
	{
		
	}

	public function setEmail(email)
	{
		CheckEmail(email);
		this -> email = email;
	}

	public function setPassword(email)
	{
		CheckEmail(password);
		this -> password = password;
	}
}

class Admin extends RegUser
{
	public function EditApartData(ID_U)
	{

	}

	public function SendEmail(ID_U)
	{
		
	}

	public function getBann(ID_U,isBanned)
	{


	}
}

class Agent extends RegUser
{
	private function NewApart(...)
	{

	}

	public function ChangeStatusApart(isRent)
	{

	}

	public function TransCash(cash_id)
	{
		checkUser(password,email);
	}
}

class Client extends RegUser
{
	private function RentApart(...)
	{

	}

	public function AddCash(cash_id)
	{
		checkUser(password,email);
	}
}