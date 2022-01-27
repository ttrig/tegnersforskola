<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_all_pages()
    {
        $this->get(route('home'))->assertOk();
        $this->get(route('parents'))->assertOk();
        $this->get(route('opening-hours'))->assertOk();
        $this->get(route('queue'))->assertOk();
        $this->get(route('staff'))->assertOk();
        $this->get(route('business'))->assertOk();
    }
}
