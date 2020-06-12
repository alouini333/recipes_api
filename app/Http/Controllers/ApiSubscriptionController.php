<?php

namespace App\Http\Controllers;

use App\Resthook;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ApiSubscriptionController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate(
                [
                    'hook_url' => 'required|string',
                    'api_key' => 'required|string',
                    'event_name' => 'required|string']
            );
            $user = User::where('api_key', $request->api_key)->firstOrFail();
            $resthook = Resthook::where('user_id', $user->id)->where('event_name', $request->event_name)->first();
            if ($resthook === null) {
                /**
                 * This will prevent creating many Resthook for the same user and same event.
                 */
                $resthook = new Resthook();
                $resthook->fill($request->only(['hook_url', 'event_name']));
                $resthook->user_id = $user->id;
                $resthook->save();
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Hook created with success'
            ], 201);
        } catch (ModelNotFoundException $e) {
            // In case the api_key is wrong, we will return a 401 code error
            return response()->json([
                'status' => 'fail',
                'message' => 'Please check your api key'
            ], 401);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Something is wrong with server, please try later'
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        try {
            $request->validate(
                [
                    'api_key' => 'required|string',
                    'event_name' => 'required|string'
                ]
            );
            $user = User::where('api_key', $request->api_key)->firstOrFail();
            $resthook = Resthook::where('user_id', $user->id)->where('event_name', $request->event_name)->delete();

            return response()->json(
                [
                    'status' => 'success',
                    'message' => 'Hook deleted with success'
                ]
            );
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Please check your api key'
            ], 401);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Something went wrong, please try later'
            ], 500);
        }
    }
}
