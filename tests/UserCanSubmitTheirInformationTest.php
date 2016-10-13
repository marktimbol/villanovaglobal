<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserCanSubmitTheirInformationTest extends TestCase
{
	use DatabaseMigrations;

    public function test_a_user_can_submit_their_information()
    {
    	$this->visit('/')
    		->see('Interested?')

    		->type('John Doe', 'name')
    		->type('john@example.com', 'email')
    		->type('0563759865', 'phone')
    		->type('EB6159498', 'passport')
    		->type('The Message', 'message')

    		->press('Submit Form')

    		->seeInDatabase('inquiries', [
    			'name'	=> 'John Doe',
    			'email'	=> 'john@example.com',
    			'phone'	=> '0563759865',
    			'passport'	=> 'EB6159498',
    			'message'	=> 'The Message'
    		]);
    }

    public function test_a_user_cannot_submit_inquiry_without_filling_up_all_the_required_fields()
    {
        $this->visit('/')
            ->see('Interested?')
            ->press('Submit Form')

            ->see('The name field is required.')
            ->see('The email field is required.')
            ->see('The phone field is required.')

            ->dontSeeInDatabase('inquiries', [
                'name'  => 'John Doe',
            ]); 
    }
}
