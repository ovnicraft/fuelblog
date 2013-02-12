<?php
use Orm\Model;

class Model_Upload extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'location',
		'file_name',
		'type',
		'created_at',
		'updated_at',
	);

	protected static $_many_many=array('posts');

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('location', 'Location', 'required|max_length[255]');
		$val->add_field('file_name', 'File Name', 'required|max_length[255]');
		$val->add_field('type', 'Type', 'required|max_length[255]');

		return $val;
	}

}
