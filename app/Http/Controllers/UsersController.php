<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class UsersController extends Controller
{
    public function index() {
        return $this->helpReturn(
            DB::table('users')->simplePaginate(15)
        );
    }

    public function create() {

    }

    /**
     * @api {post} /v1/users storeUser
     * @apiVersion 0.1.0
     * @apiName storeUser
     * @apiGroup Users
     *
     * @apiParam {string} email
     * @apiParam {string} [password]
     * @apiParam {string} [first_name]
     * @apiParam {string} [second_name]
     *
     */
    public function store(Request $request) {
        $valid = Validator::make($request->all(), ['email' => 'required']);
        if(!$valid->fails()) {
            $user = User::withTrashed()->where('email', $request->email)->first();
            if($user) {
                if($user->delete_at) {
                    $user->restore();
                    $user->first_name = null;
                    $user->last_name = null;
                } else {
                    return Controller::helpError('User already registered');
                }
            } else {
                $user = new User;
            }
            $user->email = $request->email;
            $user->status = 'active';
            $user->password = $request->password;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->token = md5(uniqid());
            $user->save();
            return $this->helpReturn($user);
        } else {
            return Controller::helpError($valid->errors()->all());
        }
    }


    /**
     * @api {get} /v1/users/:id showUser
     * @apiVersion 0.1.0
     * @apiName showUser
     * @apiGroup Users
     *
     * @apiParam {id} id
     *
     */
    public function show($id) {
        return $this->helpReturn(User::find($id));
    }


    public function edit(Request $request, $id) {

    }

    /**
     * @api {put} /v1/users/:id updateUser
     * @apiVersion 0.1.0
     * @apiName updateUser
     * @apiGroup Users
     *
     * @apiParam {string} [email]
     * @apiParam {string} [password]
     * @apiParam {string} [first_name]
     * @apiParam {string} [second_name]
     *
     */
    public function update(Request $request, $id) {
        $user = User::findorfail($id);
        $user->email = $request->email;
        $user->status = 'active';
        $user->password = $request->password;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->token = md5(uniqid());
        $user->save();
        return $this->helpReturn($user);
    }

    /**
     * @api {delete} /v1/users/:id updateUser
     * @apiVersion 0.1.0
     * @apiName deleteUser
     * @apiGroup Users
     *
     *
     */
    public function destroy($id) {
        User::findorfail($id)->delete();
        return $this->helpReturn([]);
    }
}
