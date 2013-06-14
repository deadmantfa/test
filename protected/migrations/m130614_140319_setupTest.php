<?php

class m130614_140319_setupTest extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('users', array(
				'id'=>'int AUTO_INCREMENT',
				'PRIMARY KEY (id)',
				'username'=>'string NOT NULL',
				'password'=>'string NOT NULL',
			),
			'ENGINE=InnoDB CHARSET=utf8'
		);
		$this->insert('users', array(
			'id'=>1,
			'username'=>'bruce',
			'password'=>md5('4815162342')
		));
		$this->createTable('content', array(
				'id'=>'int AUTO_INCREMENT',
				'PRIMARY KEY (id)',
				'content'=>'string NOT NULL',
				'author'=>'string NOT NULL',
			),
			'ENGINE=InnoDB CHARSET=utf8'
		);
		$this->insert('content', array(
			'id'=>1,
			'content'=>"Your body is a temple treat it like one",
			'author'=>'Anonymous'
		));
		$this->insert('content', array(
			'id'=>2,
			'content'=>"Who? What? Where?",
			'author'=>'Wenceslaus Dsilva'
		));
		$this->insert('content', array(
			'id'=>3,
			'content'=>"Walla Habhibi kamm karo kahbibhi",
			'author'=>'Vineet Dsilva (Brother)'
		));
		$this->insert('content', array(
			'id'=>4,
			'content'=>"Birds of the same feather flock together",
			'author'=>'Anonymous'
		));
		$this->insert('content', array(
			'id'=>5,
			'content'=>"Do you smell what the rock is cooking?",
			'author'=>'Dwayne "The Rock" Johnson'
		));
		$this->insert('content', array(
			'id'=>6,
			'content'=>"Its clobbering time.",
			'author'=>'The Thing (Fantastic 4)'
		));
		$this->insert('content', array(
			'id'=>7,
			'content'=>"A successful man is one who makes more money than his wife can spend. A successful woman is one who can find such a man.",
			'author'=>'Lana Tuner'
		));
		$this->insert('content', array(
			'id'=>8,
			'content'=>"Behind every great man is a woman rolling her eyes.",
			'author'=>'Jim Carrey'
		));
		$this->insert('content', array(
			'id'=>9,
			'content'=>"When you are courting a nice girl an hour seems like a second. When you sit on a red-hot cinder a second seems like an hour. That's relativity.",
			'author'=>'Albert Einstein'
		));
		$this->insert('content', array(
			'id'=>10,
			'content'=>"A day without sunshine is like, you know, night.",
			'author'=>'Steve Martin'
		));
		$this->insert('content', array(
			'id'=>11,
			'content'=>"Go to heaven for the climate, Hell for the company.",
			'author'=>'Mark Twain'
		));
		$this->insert('content', array(
			'id'=>12,
			'content'=>"Idiot!!!",
			'author'=>'Vincent Dsilva (Dad)'
		));
		$this->insert('content', array(
			'id'=>13,
			'content'=>"Ayiiiiiiiya!!!",
			'author'=>'Janet Dsilva (Mom)'
		));
		$this->insert('content', array(
			'id'=>14,
			'content'=>"Sundar (read Hindi)",
			'author'=>'Tinsy Dsilva (Wife)'
		));
	}

	public function safeDown()
	{
		$this->dropTable('users');
		$this->dropTable('content');
	}
}