<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return string
   */
  public function index()
  {
    $users = User::all();
    return view('admin.users.index')->with('users', $users);
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @return Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param User $user
   * @return Response
   */
  public function show(User $user)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param User $user
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
   */
  public function edit(User $user)
  {

    if (Gate::denies('edit-users')) {
      return redirect(route('admin.users.index'));
    }

    $roles = Role::all();
    return view('admin.users.edit')->with([
      'user' => $user,
      'roles' => $roles
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param User $user
   * @return RedirectResponse
   */
  public function update(Request $request, User $user)
  {
    $user->roles()->sync($request->roles);
    $user->name = $request->name;
    $user->email = $request->email;
    if ($user->save()) {
      $request->session()->flash('success', 'Data updated successfully!');
    } else {
      $request->session()->flash('error', 'Data is not updated!');
    }


    return redirect()->route('admin.users.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param User $user
   * @return RedirectResponse
   */
  public function destroy(User $user)
  {

    if (Gate::denies('delete-users')) {
      return redirect(route('admin.users.index'));
    }

    $user->roles()->detach();
    $user->delete();
    return redirect()->route('admin.users.index');
  }
}
