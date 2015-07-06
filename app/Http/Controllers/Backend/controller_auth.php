<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\model_users;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Http\Request;

class controller_auth extends Controller {

	public function index()
	{
		$actionFormUrl = '/backend/login';
		if(ISSET($_GET['goto']))
		{
			$actionFormUrl = '/backend/login?goto=' . $_GET['goto'];
		}

		return view('backend/login')->with(compact('actionFormUrl'));
	}

	public function login(Request $request)
	{
		$this->validate($request,
			[
				'name'	=>	'required',
				'password'	=>	'required'
			],
			[
				'name.required'		=>	'Silahkan mengisikan username.',
				'password.required'		=>	'Silahkan mengisikan password'
			]);

		$credential = $request->only('name','password');

		if (Auth::attempt($credential, $request->has('remember'))) {
			$goto = '';
			if($request->has('goto'))
			{
				$goto = $request->get('goto');
			}
			return redirect()->intended($this->redirectPath($goto));
		}

		return redirect('/backend/login')
			->withInput($request->only('name', 'remember'))
			->withErrors([
					'name' => 'Username/Password tidak benar, silahkan mencoba kembali.',
				]);

		//$user->login($request->all());
	}

	/**
	 * Get the post register / login redirect path.
	 *
	 * @return string
	 */
	public function redirectPath($url)
	{
		//return '/1';
		if (property_exists($this, 'redirectPath'))
		{
			return $this->redirectPath;
		}

		if($url != ''){
			return $url;
		}

		return property_exists($this, 'redirectTo') ? $this->redirectTo : 'backend/home';
	}
}
