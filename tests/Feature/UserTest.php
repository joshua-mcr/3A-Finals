<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

use Tests\TestCase;

class testuser extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_get_student(){
        $response = $this->get('api/students');
        $response ->assertStatus(Response::HTTP_OK);
        $response ->assertJsonPath('greetings','hello');
    }

    public function test_post_student(){
        $response = $this->post('/api/students', [
            'firstname'=>'Joswah',
            'lastname'=>'Oi',
            'birthdate'=>'2002-02-01',
            'sex'=>'Male',
            'address'=>'Tacloban',
            'year'=>3,
            'course'=>'BSIT',
            'section'=>'A',
        ]);
        $response->assertStatus(Response::HTTP_CREATED);
        $response->assertJsonStructure(['message']);
        $response->assertJsonPath('message', 'Post Test');
    }

    public function test_patch_student(){
        $response = $this->patch('/api/students/1',[
            'firstname'=>'Joswah',
            'lastname'=>'Oi',
            'birthdate'=>'2002-02-01',
            'sex'=>'Male',
            'address'=>'Tacloban',
            'year'=>3,
            'course'=>'BSIT',
            'section'=>'A',
        ]);
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonStructure(['message']);
        $response->assertJsonPath('message', 'Patch Test');
    }
    
}
