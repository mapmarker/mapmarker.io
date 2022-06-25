<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ChangelogTest extends DuskTestCase
{
    public function test_homepage()
    {
        $this->browse(function (Browser $browser) {

            $expectedVersionString = 'v' . \Composer\InstalledVersions::getRootPackage()['pretty_version'];

            $browser->visit('/changelog')
                ->screenshot('page.changelog')
                ->assertSee($expectedVersionString)
                ->assertSee('Changelog');
        });
    }
}
