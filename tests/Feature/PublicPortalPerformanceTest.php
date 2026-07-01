<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Tender;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PublicPortalPerformanceTest extends TestCase
{
    use DatabaseMigrations;

    public function test_public_homepage_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('NATIONAL COUNCIL FOR NOMADIC EDUCATION IN KENYA');
    }

    public function test_blank_search_parameter_returns_baseline_view_without_errors(): void
    {
        $response = $this->get('/?search=');

        $response->assertStatus(200);
        $response->assertDontSee('Showing results for search term');
    }

    public function test_rest_api_endpoint_delivers_structured_json(): void
    {
        Tender::create([
            'tender_number' => 'NACONEK/TND/TEST/2026/99',
            'title' => 'Automated Integration Testing Protocol Block',
            'category' => 'Consultancy',
            'tender_fee' => 0,
            'document_path' => 'tenders/sample_test.pdf',
            'closing_at' => now()->addDays(30),
            'status' => 'active',
        ]);

        // The request line must execute right before assertions run
        $response = $this->getJson('/api/v1/tenders');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'tender_number',
                    'title',
                    'category',
                    'status',
                    'tender_fee',
                    'document_path',
                    'closing_at',
                ]
            ]
        ]);
    }
}