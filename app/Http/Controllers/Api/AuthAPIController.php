<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AsnafProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class AuthAPIController extends Controller
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

    public function register(Request $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $input['password'] = bcrypt($request->password);

            $validator = Validator::make($input, [
                'role' => 'required'
            ], [
                'role.required' => 'Sila masukkan peranan'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()
                ]);
            }

            $user = User::create($input);

            if ($request->role === 'Asnaf') {
                if (!empty(auth()->user())) {
                    $input['created_by'] = auth()->user()->id;
                }
                $input['user_id'] = $request->user_id;

                $asnafProfile = AsnafProfile::create($input);
            }

            $user->assignRole($request->role);

            DB::commit();
            return response()->json([
                'success' => true
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function index()
    {
        $users = User::get();

        return response()->json([
            'success' => true,
            'data' => $users
        ]);
    }

    public function asnafByAuthOrId($id = '')
    {
        $user = User::where('created_by', $id ?: auth()->user()->id);

        $user->load(['asnaf']);

        return response()->json([
            'success' => true,
            'data' => $user
        ]);
    }

    public function show($id = '')
    {
        $user = User::find($id ?: auth()->user()->id);

        return response()->json([
            'success' => true,
            'data' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();

            $user = User::find($id ?: auth()->user()->id);

            $user->update($input);

            DB::commit();

            return response()->json([
                'success' => true
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }
    }

    public function byRole(string $id)
    {
        $users = Role::with('users')->find($id);

        return response()->json([
            'success' => true,
            'data' => $users
        ]);
    }
}
