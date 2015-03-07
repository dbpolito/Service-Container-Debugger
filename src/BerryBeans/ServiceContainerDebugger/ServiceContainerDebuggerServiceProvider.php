<?php namespace BerryBeans\ServiceContainerDebugger;

use Illuminate\Support\ServiceProvider;
use BerryBeans\ServiceContainerDebugger\Console\Commands\ContainerDebug;

class ServiceContainerDebuggerServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->app->instance('container.debug', new ContainerDebug);
		$this->commands('container.debug');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// $this->app->instance('container.debug', new ContainerDebug);
		// $this->commands('container.debug');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
