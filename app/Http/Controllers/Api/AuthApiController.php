<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthApiController extends Controller
{
    public function auth(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'ic_no' => 'required',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::where('ic_no', $request->ic_no)->first();

            if (empty($user)) {
                return response()->json([
                    'success' => false,
                    'message' => 'No. Kad Pengenalan atau Kata Laluan tidak sah.',
                ], 401);
            }

            if (!Hash::check($request->password, $user->password)) {
                return response()->json([
                    'success' => false,
                    'message' => 'No. Kad Pengenalan atau Kata Laluan tidak sah.',
                ], 401);
            }

            return response()->json([
                'success' => true,
                'user' => $user,
                'token' => 'Bearer ' . $user->createToken("API TOKEN")->accessToken,
                'role' => $user->getRoleNames()[0]
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
