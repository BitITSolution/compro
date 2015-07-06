<?php namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->getDetailAuth();
	}

	public function getDetailAuth()
	{
		view()->composer('backend/',function($view){

			$auth = null;
			if( Auth::check() )
			{
				$auth = Auth::user();
			}

			$view->with([
					'auth'	=>	$auth
				]);

		});
	}
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
