<?php namespace Rtablada\WardrobeDisqus;

use Illuminate\Support\ServiceProvider;

class WardrobeDisqusServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['disqus'] = $this->app->share(function($app)
        {
            return new WardrobeDisqus($app['config']);
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
