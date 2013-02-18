<?php

namespace Fuel\Tasks;

/**
 * Populate task
 *
 * Task that will add fixtures for the blog application 
 *
 * @package		Fuel
 * @version		1.0
 * @author		anothertestaccount
*/


class Populate
{
	/**
	 * This method is for populating posts table.
	 *
	 * Usage (from run function):
	 *
	 * self::populate_posts();
	 */
	private static function populate_posts()
	{
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociis',
			'title' => 'cum sociis',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();

		$post=\Model_Post::forge(array(
			'name' => 'cum-sociia',
			'title' => 'cum sociia',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();

		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-1',
			'title' => 'cum sociib 1',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();

		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-2',
			'title' => 'cum sociib 2',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-3',
			'title' => 'cum sociib 3',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-4',
			'title' => 'cum sociib 4',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-5',
			'title' => 'cum sociib 5',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-6',
			'title' => 'cum sociib 6',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-7',
			'title' => 'cum sociib 7',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-8',
			'title' => 'cum sociib 8',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-9',
			'title' => 'cum sociib 9',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-10',
			'title' => 'cum sociib 10',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-11',
			'title' => 'cum sociib 11',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-12',
			'title' => 'cum sociib 12',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-13',
			'title' => 'cum sociib 13',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-14',
			'title' => 'cum sociib 14',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-15',
			'title' => 'cum sociib 15',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-16',
			'title' => 'cum sociib 16',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-17',
			'title' => 'cum sociib 17',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-18',
			'title' => 'cum sociib 18',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-19',
			'title' => 'cum sociib 19',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-20',
			'title' => 'cum sociib 20',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-21',
			'title' => 'cum sociib 21',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-22',
			'title' => 'cum sociib 22',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-23',
			'title' => 'cum sociib 23',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-24',
			'title' => 'cum sociib 24',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-25',
			'title' => 'cum sociib 25',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-26',
			'title' => 'cum sociib 26',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-27',
			'title' => 'cum sociib 27',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-28',
			'title' => 'cum sociib 28',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-29',
			'title' => 'cum sociib 29',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-30',
			'title' => 'cum sociib 30',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-31',
			'title' => 'cum sociib 31',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-32',
			'title' => 'cum sociib 32',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-33',
			'title' => 'cum sociib 33',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-34',
			'title' => 'cum sociib 34',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-35',
			'title' => 'cum sociib 35',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-36',
			'title' => 'cum sociib 36',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-37',
			'title' => 'cum sociib 37',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-38',
			'title' => 'cum sociib 38',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-39',
			'title' => 'cum sociib 39',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-40',
			'title' => 'cum sociib 40',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-41',
			'title' => 'cum sociib 41',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-42',
			'title' => 'cum sociib 42',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-43',
			'title' => 'cum sociib 43',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-44',
			'title' => 'cum sociib 44',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-45',
			'title' => 'cum sociib 45',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-46',
			'title' => 'cum sociib 46',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-47',
			'title' => 'cum sociib 47',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-48',
			'title' => 'cum sociib 48',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-49',
			'title' => 'cum sociib 49',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-50',
			'title' => 'cum sociib 50',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-51',
			'title' => 'cum sociib 51',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-52',
			'title' => 'cum sociib 52',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-53',
			'title' => 'cum sociib 53',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-54',
			'title' => 'cum sociib 54',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-55',
			'title' => 'cum sociib 55',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-56',
			'title' => 'cum sociib 56',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-57',
			'title' => 'cum sociib 57',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-58',
			'title' => 'cum sociib 58',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-59',
			'title' => 'cum sociib 59',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-60',
			'title' => 'cum sociib 60',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-61',
			'title' => 'cum sociib 61',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-62',
			'title' => 'cum sociib 62',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-63',
			'title' => 'cum sociib 63',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-64',
			'title' => 'cum sociib 64',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-65',
			'title' => 'cum sociib 65',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-66',
			'title' => 'cum sociib 66',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-67',
			'title' => 'cum sociib 67',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-68',
			'title' => 'cum sociib 68',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-69',
			'title' => 'cum sociib 69',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-70',
			'title' => 'cum sociib 70',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-71',
			'title' => 'cum sociib 71',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-72',
			'title' => 'cum sociib 72',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-73',
			'title' => 'cum sociib 73',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-74',
			'title' => 'cum sociib 74',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-75',
			'title' => 'cum sociib 75',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-76',
			'title' => 'cum sociib 76',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-77',
			'title' => 'cum sociib 77',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-78',
			'title' => 'cum sociib 78',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-79',
			'title' => 'cum sociib 79',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-80',
			'title' => 'cum sociib 80',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-81',
			'title' => 'cum sociib 81',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-82',
			'title' => 'cum sociib 82',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-83',
			'title' => 'cum sociib 83',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-84',
			'title' => 'cum sociib 84',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-85',
			'title' => 'cum sociib 85',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-86',
			'title' => 'cum sociib 86',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-87',
			'title' => 'cum sociib 87',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-88',
			'title' => 'cum sociib 88',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-89',
			'title' => 'cum sociib 89',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-90',
			'title' => 'cum sociib 90',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-91',
			'title' => 'cum sociib 91',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-92',
			'title' => 'cum sociib 92',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-93',
			'title' => 'cum sociib 93',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-94',
			'title' => 'cum sociib 94',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-95',
			'title' => 'cum sociib 95',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-96',
			'title' => 'cum sociib 96',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-97',
			'title' => 'cum sociib 97',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-98',
			'title' => 'cum sociib 98',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-99',
			'title' => 'cum sociib 99',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-100',
			'title' => 'cum sociib 100',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-101',
			'title' => 'cum sociib 101',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-102',
			'title' => 'cum sociib 102',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-103',
			'title' => 'cum sociib 103',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-104',
			'title' => 'cum sociib 104',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-105',
			'title' => 'cum sociib 105',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-106',
			'title' => 'cum sociib 106',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-107',
			'title' => 'cum sociib 107',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-108',
			'title' => 'cum sociib 108',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-109',
			'title' => 'cum sociib 109',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-110',
			'title' => 'cum sociib 110',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-111',
			'title' => 'cum sociib 111',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-112',
			'title' => 'cum sociib 112',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-113',
			'title' => 'cum sociib 113',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-114',
			'title' => 'cum sociib 114',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-115',
			'title' => 'cum sociib 115',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-116',
			'title' => 'cum sociib 116',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-117',
			'title' => 'cum sociib 117',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-118',
			'title' => 'cum sociib 118',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-119',
			'title' => 'cum sociib 119',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-120',
			'title' => 'cum sociib 120',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-121',
			'title' => 'cum sociib 121',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-122',
			'title' => 'cum sociib 122',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-123',
			'title' => 'cum sociib 123',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-124',
			'title' => 'cum sociib 124',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-125',
			'title' => 'cum sociib 125',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-126',
			'title' => 'cum sociib 126',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-127',
			'title' => 'cum sociib 127',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-128',
			'title' => 'cum sociib 128',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-129',
			'title' => 'cum sociib 129',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-130',
			'title' => 'cum sociib 130',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-131',
			'title' => 'cum sociib 131',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-132',
			'title' => 'cum sociib 132',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-133',
			'title' => 'cum sociib 133',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-134',
			'title' => 'cum sociib 134',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-135',
			'title' => 'cum sociib 135',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-136',
			'title' => 'cum sociib 136',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-137',
			'title' => 'cum sociib 137',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-138',
			'title' => 'cum sociib 138',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-139',
			'title' => 'cum sociib 139',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-140',
			'title' => 'cum sociib 140',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-141',
			'title' => 'cum sociib 141',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-142',
			'title' => 'cum sociib 142',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-143',
			'title' => 'cum sociib 143',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-144',
			'title' => 'cum sociib 144',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-145',
			'title' => 'cum sociib 145',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-146',
			'title' => 'cum sociib 146',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-147',
			'title' => 'cum sociib 147',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-148',
			'title' => 'cum sociib 148',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-149',
			'title' => 'cum sociib 149',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-150',
			'title' => 'cum sociib 150',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-151',
			'title' => 'cum sociib 151',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-152',
			'title' => 'cum sociib 152',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-153',
			'title' => 'cum sociib 153',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-154',
			'title' => 'cum sociib 154',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-155',
			'title' => 'cum sociib 155',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-156',
			'title' => 'cum sociib 156',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-157',
			'title' => 'cum sociib 157',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-158',
			'title' => 'cum sociib 158',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-159',
			'title' => 'cum sociib 159',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-160',
			'title' => 'cum sociib 160',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-161',
			'title' => 'cum sociib 161',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-162',
			'title' => 'cum sociib 162',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-163',
			'title' => 'cum sociib 163',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-164',
			'title' => 'cum sociib 164',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-165',
			'title' => 'cum sociib 165',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-166',
			'title' => 'cum sociib 166',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-167',
			'title' => 'cum sociib 167',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-168',
			'title' => 'cum sociib 168',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-169',
			'title' => 'cum sociib 169',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-170',
			'title' => 'cum sociib 170',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-171',
			'title' => 'cum sociib 171',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-172',
			'title' => 'cum sociib 172',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-173',
			'title' => 'cum sociib 173',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-174',
			'title' => 'cum sociib 174',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-175',
			'title' => 'cum sociib 175',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-176',
			'title' => 'cum sociib 176',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-177',
			'title' => 'cum sociib 177',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-178',
			'title' => 'cum sociib 178',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-179',
			'title' => 'cum sociib 179',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-180',
			'title' => 'cum sociib 180',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-181',
			'title' => 'cum sociib 181',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-182',
			'title' => 'cum sociib 182',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-183',
			'title' => 'cum sociib 183',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-184',
			'title' => 'cum sociib 184',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-185',
			'title' => 'cum sociib 185',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-186',
			'title' => 'cum sociib 186',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-187',
			'title' => 'cum sociib 187',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-188',
			'title' => 'cum sociib 188',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-189',
			'title' => 'cum sociib 189',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-190',
			'title' => 'cum sociib 190',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-191',
			'title' => 'cum sociib 191',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-192',
			'title' => 'cum sociib 192',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-193',
			'title' => 'cum sociib 193',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-194',
			'title' => 'cum sociib 194',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-195',
			'title' => 'cum sociib 195',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-196',
			'title' => 'cum sociib 196',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-197',
			'title' => 'cum sociib 197',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-198',
			'title' => 'cum sociib 198',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-199',
			'title' => 'cum sociib 199',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-200',
			'title' => 'cum sociib 200',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
		$post=\Model_Post::forge(array(
			'name' => 'cum-sociib-201',
			'title' => 'cum sociib 201',
			'body_short' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 
			'body' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
			'status' => 1,
			'category_id' => 2,
			'language_id' => 2,
		));

		$post->save();
	}

	/**
	 * This method is for populating categories table.
	 *
	 * Usage (from run function):
	 *
	 * self::populate_categories();
	 */
	private static function populate_categories()
	{
		$category=\Model_Category::forge(array(
			'name' => 'parent',
			'title' => 'parent',
			'parent_id' => NULL,
			'lft' => 1,
			'rght' => 4,
			'status' => 1,
		));

		$category->save();

		$category=\Model_Category::forge(array(
			'name' => 'news',
			'title' => 'news',
			'parent_id' => 1,
			'lft' => 2,
			'rght' => 3,
			'status' => 1,
		));

		$category->save();
	}

	/**
	 * This method is for populating languages table.
	 *
	 * Usage (from run function):
	 *
	 * self::populate_languages();
	 */
	private static function populate_languages()
	{
		$language=\Model_Language::forge(array(
			'name' => 'sr',
			'status' => 1
		));

		$language->save();

		$language=\Model_Language::forge(array(
			'name' => 'eng',
			'status' => 2
		));

		$language->save();
	}

	/**
	 * This method is for populating users table.
	 *
	 * Usage (from run function):
	 *
	 * self::populate_users();
	 */
	private static function populate_users()
	{
		$user=\Model_User::forge(array(
			'username' => 'admin',
			'password' => crypt('admin','!2y!'.\Config::get('blowfish_difficulty').'!admin!'),
			'email' => 'admin@something.com',
			'status' => 1,
			'level' => 1
		));

		$user->save();

		$user=\Model_User::forge(array(
			'username' => 'johndoe',
			'password' => crypt('admin','!2y!'.\Config::get('blowfish_difficulty').'!johndoe!'),
			'email' => 'johndoe@something.com',
			'status' => 1,
			'level' => 2
		));

		$user->save();

		$user=\Model_User::forge(array(
			'username' => 'janedoe',
			'password' => crypt('admin','!2y!'.\Config::get('blowfish_difficulty').'!janedoe!'),
			'email' => 'janedoe@something.com',
			'status' => 1,
			'level' => 2
		));

		$user->save();
	}

	/**
	 * This method is for populating comments table.
	 *
	 * Usage (from run function):
	 *
	 * self::populate_comments();
	 */
	private static function populate_comments()
	{
		$comment=\Model_Comment::forge(array(
			'comment' => 'Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.',
			'user_id' => 2,
			'status' => 1,
			'post_id' => 1,
			'language_id' => 2
		));

		$comment->save();

		$comment=\Model_Comment::forge(array(
			'comment' => 'Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.',
			'user_id' => 2,
			'status' => 1,
			'post_id' => 1,
			'language_id' => 2
		));

		$comment->save();

		$comment=\Model_Comment::forge(array(
			'comment' => 'Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.',
			'user_id' => 2,
			'status' => 1,
			'post_id' => 1,
			'language_id' => 2
		));

		$comment->save();
	}

	/**
	 * This method gets ran when a valid method name is not used in the command.
	 *
	 * Usage (from command line):
	 *
	 * php oil refine populate
	 */
	public static function run()
	{
		self::populate_posts();
		self::populate_categories();
		self::populate_languages();
		self::populate_users();
		self::populate_comments();
	}
}

/* End of file tasks/populate.php */
