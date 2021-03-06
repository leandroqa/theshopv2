<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\Categoria;

class CategoriaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Assert showing all categories.
     *
     * @return void
     */
    public function testShouldShowAllCategories(){        

        $this->get('/api/categories/', [])
            ->assertStatus(200)
            ->assertJsonCount(0, $key = null);
        
        $categoria = Categoria::factory()->count(5)->create();            
        
        $this->get('/api/categories/', [])
            ->assertStatus(200)
            ->assertJsonCount(5, $key = null);        
    }
    
}
