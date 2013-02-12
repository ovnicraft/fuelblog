<?php

namespace Fuel\Migrations;

class Create_posts_uploads
{
	public function up()
	{
		\DBUtil::create_table('posts_uploads', array(
			'post_id' => array('constraint' => 11, 'type' => 'int'),
			'upload_id' => array('constraint' => 11, 'type' => 'int'),

		), array('post_id','upload_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('posts_uploads');
	}
}
