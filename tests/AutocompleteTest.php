<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AutocompleteTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
    	$luis = seed('User',[
    		'name'=>'Luis',
    		'email'=>'luis.mayta@gmail.com',
    		]);
    	$jesus = seed('User',[
    		'name'=>'jesus',
    		'email'=>'jesus.mayta@gmail.com',
    		]);
    	$josue = seed('User',[
    		'name'=>'jesue',
    		'email'=>'josue.mayta@gmail.com',
    		]);

    	seed('User',['name'=>'Lucy','email'=>'lucy.mayta@gmail.com']);
    	seed('User',['name'=>'Neyli','email'=>'neyli.mayta@gmail.com']);
    	seed('User',['name'=>'Hernan','email'=>'hernan.mayta@gmail.com']);

        $this->get('autocomplete/users?term=Luis')
        ->seeStatusCode(200)
        ->seeJsonEquals([
        		[
        			'id' => $luis->id,
        			'name' => 'Luis',
        			'email' => 'luis.mayta@gmail.com'
        		]
        	]);


        $this->get('autocomplete/users?term=je')
        ->seeStatusCode(200)
        ->seeJsonEquals([
        		[
        			'id' => $jesus->id,
        			'name' => 'jesus',
        			'email' => 'jesus.mayta@gmail.com'
        		],
        		[
        			'id' => $josue->id,
        			'name' => 'jesue',
        			'email' => 'josue.mayta@gmail.com'
        		]
        	]);
    }
}
