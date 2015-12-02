<?php 

/**
* YearRangeCollectionTest
*/
class YearRangeCollectionTest extends CDbTestCase
{

	/**
	 * Test if collection returned is correct
	 * @covers YearRangeCollection::getCollection()
	 */
	public function testGetCollection()
	{
		$yearRangeCollection = YearRangeCollection::getCollection();
		$this->assertArrayHasKey('2015', $yearRangeCollection, 'Assert that there is 2015 in the array collection');
	}
}