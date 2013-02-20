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

	private static function add_child_last_internal()
	{
		$parent=Model_Category::find(Input::post('parent_id'));

		$query=DB::query('UPDATE categories SET lft=lft+2 WHERE lft>'.$parent->rght.';');
		$query->execute();

		$query=DB::query('UPDATE categories SET rght=rght+2 WHERE rght>='.$parent->rght.';');
		$query->execute();

		$query=DB::query('INSERT INTO categories (name, title, parent_id, lft, rght, status, created_at, updated_at) VALUES (\''.Input::post('name').'\', \''.Input::post('title').'\', '.Input::post('parent_id').', '.$parent->rght.', '.($parent->rght+1).', '.Input::post('status').', UNIX_TIMESTAMP(), UNIX_TIMESTAMP());');
		$query->execute();

	}

	public static function delete_node($node_id)
	{
		try
		{
			$node=Model_Category::find($node_id);

			DB::start_transaction();

			$query=DB::query('UPDATE posts SET category_id = 1 WHERE category_id IN (SELECT id FROM categories WHERE lft>='.$node->lft.' AND rght<='.$node->rght.')');
			$query->execute();

			$query=DB::query('UPDATE categories SET lft=lft-'.($node->rght-$node->lft+1).' WHERE lft>'.$node->rght);
			$query->execute();

			$query=DB::query('UPDATE categories SET rght=rght-'.($node->rght-$node->lft+1).' WHERE rght>'.$node->rght);
			$query->execute();

			$query=DB::query('DELETE FROM categories WHERE lft>='.$node->lft.' AND rght<='.$node->rght);
			$query->execute();

			DB::commit_transaction();
		}
		catch(Exception $e)
		{
			DB::rollback_transaction();

			throw $e;
		}
	}

	private static function delete_node_internal($node_id)
	{
		$node=Model_Category::find($node_id);

		$query=DB::query('UPDATE posts SET category_id = 1 WHERE category_id IN (SELECT id FROM categories WHERE lft>='.$node->lft.' AND rght<='.$node->rght.')');
		$query->execute();

		$query=DB::query('UPDATE categories SET lft=lft-'.($node->rght-$node->lft+1).' WHERE lft>'.$node->rght);
		$query->execute();

		$query=DB::query('UPDATE categories SET rght=rght-'.($node->rght-$node->lft+1).' WHERE rght>'.$node->rght);
		$query->execute();

		$query=DB::query('DELETE FROM categories WHERE lft>='.$node->lft.' AND rght<='.$node->rght);
		$query->execute();
	}

	public static function move_node($node_id)
	{
		try
		{
			DB::start_transaction();
			Model_Category::delete_node_internal($node_id);
			Model_Category::add_child_last_internal();
			DB::commit_transaction();
		}
		catch(Exception $e)
		{
			DB::rollback_transaction();

			throw $e;
		}
	}
}
