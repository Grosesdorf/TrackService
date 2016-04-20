<?php namespace App\Http\Controllers;

class IndexController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('index');
	}

}
