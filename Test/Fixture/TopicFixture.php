<?php
/**
 * Topic Fixture
 */
class TopicFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4', 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'created' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'modified' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'visible' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_0900_ai_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 'Lorem ipsum dolor sit amet',
			'user_id' => 'Lorem ipsum dolor sit amet',
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => 'Lorem ipsum dolor sit amet',
			'modified' => 'Lorem ipsum dolor sit amet',
			'visible' => 'Lorem ipsum dolor sit amet'
		),
	);

}
