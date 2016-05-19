<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Tasks;

class TasksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks=Tasks::all();
        return view('tasks',['tasks'=>$tasks]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Tasks::create($request->all());
        return redirect('/tasks');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tasks=Tasks::find($id);
        return view('show',['tasks'=>$tasks]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tasks=Tasks::find($id);
        return view('edit',['tasks'=>$tasks]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function update(Request $request, $id)
	// {
	// 	$tasks=Tasks::find($id);
 //        $tasks->title=$request->title;
 //        $tasks->content=$request->content;
 //        $tasks->save();
 //        return redirect('/articles');
	// }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tasks=Tasks::find($id);
        $tasks->delete();
        return redirect('/tasks');
	}

}
