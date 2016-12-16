<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

/**
 * HomepageTest is a very simple starting point
 * to introduce QA into your project.
 *
 * Start simple! Build from there.
 * Adding too much will be too difficult to
 * manage, and your project manager will likely
 * get cranky.
 *
 * I do not like camel case - I use snake case.
 * Adjust to taste.
 *
 * The parent model TestCase is supplied by Laravel.
 * It creates an instance of the application otherwise
 * none of this will work ;)
 *
 * This includes two tests, which is a great start!
 */
class HomepageTest extends TestCase
{
  /**
   * Very simple homepage test.
   *
   * @return void
   */
  public function test_homepage_up()
  {
    $this->visit('/')->assertResponseOk();
    
    // This also works (assuming you name your routes!)
    // $this->visit(route('index'))->assertResponseOk();
  }
  
  /**
   * This is one of our tests that we include in
   * all of our projects.
   *
   * This kind of test is useful is almost any context.
   * You just added another piece of quality assurance! Nice!
   *
   * Are obvious 404s downgrading to 500 errors?
   * Also, this tests handling of random strings.
   *
   * @return void
   */
  public function missing_are_not_errors () {
    $this->visit(str_random(5))
      ->see('404');
  }
}
