<?php

namespace huenisys\Bloom\Tests;

use huenisys\Bloom\BloomFacade;
use huenisys\Bloom\BloomServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Setup the test environment.
     */
    protected function setUp()
    {
        parent::setUp();

        // Your code here
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'bloombench');
        $app['config']->set('database.connections.bloombench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return huenisys\Bloom\BloomServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [BloomServiceProvider::class];
    }

    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Bloom' => BloomFacade::class,
        ];
    }
}