<?php
class DbTest extends CTestCase
{
	public function testConnction()
	{
		$this->assertNotEquals(NULL, Yii::app()->db);
	}
}

