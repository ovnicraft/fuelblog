<?php
use Orm\Model;

class Model_Category extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'title',
		'parent_id',
		'lft',
		'rght',
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
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('parent_id', 'Parent Id', 'required');
		$val->add_field('status', 'Status', 'required');

		return $val;
	}

	public static function add_child_last()
	{
		try
		{
			$parent=Model_Category::find(Input::post('parent_id'));

			DB::start_transaction();

			$query=DB::query('UPDATE categories SET lft=lft+2 WHERE lft>'.$parent->rght.';');
			$query->execute();

			$query=DB::query('UPDATE categories SET rght=rght+2 WHERE rght>='.$parent->rght.';');
			$query->execute();

			$query=DB::query('INSERT INTO categories (name, title, parent_id, lft, rght, status, created_at, updated_at) VALUES (\''.Input::post('name').'\', \''.Input::post('title').'\', '.Input::post('parent_id').', '.$parent->rght.', '.($parent->rght+1).', '.Input::post('status').', UNIX_TIMESTAMP(), UNIX_TIMESTAMP());');
			$query->execute();

			DB::commit_transaction();
		}
		catch(Exception $e)
		{
			DB::rollback_transaction();

			throw $e;
		}
	}
}
