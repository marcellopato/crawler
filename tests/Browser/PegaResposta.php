<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PegaResposta extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testDescobrirResposta()
    {
        $this->browse(function (Browser $browser) {
            $answer = $browser->visit('http://applicant-test.us-east-1.elasticbeanstalk.com/')
                            ->press('Descobrir resposta');
            dd($answer->text('span[id=answer]'));
        });
    }
}
