<?php
use Orm\Model;

class Model_Post extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'title',
		'body_short',
		'body',
		'status',
		'category_id',
		'language_id',
		'created_at',
		'updated_at',
	);

	protected static $_has_many=array('comments');

	protected static $_many_many=array('uploads');

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
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('body_short', 'Body Short', 'required');
		$val->add_field('body', 'Body', 'required');
		$val->add_field('status', 'Status', 'required');
		$val->add_field('category_id', 'Category Id', 'required');
		$val->add_field('language_id', 'Language Id', 'required');

		return $val;
	}

}
