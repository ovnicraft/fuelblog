<?php
use Orm\Model;

class Model_Language extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'status',
		'created_at',
		'updated_at',
	);

	protected static $_has_many=array('posts');

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
		$val->add_field('status', 'Status', 'required');

		return $val;
	}

}
