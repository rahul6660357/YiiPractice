<?php

class backenduserTest extends WebTestCase
{
	public $fixtures=array(
		'backendusers'=>'backenduser',
	);

	public function testShow()
	{
		$this->open('?r=backenduser/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=backenduser/create');
	}

	public function testUpdate()
	{
		$this->open('?r=backenduser/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=backenduser/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=backenduser/index');
	}

	public function testAdmin()
	{
		$this->open('?r=backenduser/admin');
	}
}
