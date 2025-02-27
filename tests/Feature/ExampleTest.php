<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function GetSurveyListByUser()
    {
        $this->withExceptionHandling();

        $response = $this->getJson(route('survey.get_survey_list_by_user', ['user_id' => 1]));

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'state' => [
                'hasError',
                'codigoError',
                'tipoError',
                'mensajeError',
                'mensajeDetalle',
            ],
            'result' => [
                '*' => [
                    'url',
                    'name',
                    'publicationDate',
                ],
            ],
        ]);
    }
}
