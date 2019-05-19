<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestHome extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_Cargar_Pagina_Correcta()
     {
         $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/login.blade.php')
                     ->assertPathIs('/login.blade.php');
         });
     }

     /*
     public function test_Enlaces_Correctos()
     {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/login/1')
                     ->clickLink('Tiendin')
                     ->assertPathIs('/home/1');
         });
         $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/login/1')
                     ->clickLink('Buscar')
                     ->assertPathIs('/buscar/1');
         });
         $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/login/1')
                     ->clickLink('Carrito')
                     ->assertPathIs('/carrito/1');
         });
         $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/login/1')
                     ->clickLink('Login')
                     ->assertPathIs('/login/1');
         });
      }*/

}
