<?php
/* Widget Fixture generated on: 2011-11-08 21:35:49 : 1320784549 */

/**
 * WidgetFixture
 *
 */
class WidgetFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'part_no' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 12, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'quantity' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'part_no' => 'Lorem ipsu',
			'quantity' => 1
		),
	);
}
