<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class AssistantConversation extends Conversation
{
	/*protected $size;
	protected $topping;
	protected $address;*/

	protected $name;
	protected $help;
	protected $websiteinfo;

	public function run()
	{
		$this->ask('Welcome to Virtual Assistant Tessa. What is your name?', function($answer) {
			$this->name = $answer->getText();
			$this->askName();
		});
	}

	public function askHelp()
	{
		$this->ask('What is your question? You can say things like: What is the company website?', function($answer) {
			$this->help = $answer->getText();
			$this->askHelp();
		});
	}

	public function askWebsite()
	{
		$this->ask('What is the company website?', function($answer) {
			$this->website = $answer->getText();
			$this->say('You can find our company website at https://developer.cisco.com');
			$this->say('Requestor: '.$this->name);
			$this->say('Answer: '. 'You can find our company website at' . $this->website);
		});
	}

}
