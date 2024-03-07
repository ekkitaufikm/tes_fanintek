<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UsersResources;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response(['users' => UsersResources::collection($users), 'message' => 'Data Berhasil Ditampilkan'], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'npp' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'npp' => $request->npp,
            'npp_supervisor' => $request->npp_supervisor,
            'm_role_id' => $request->m_role_id,
        ]);

        return response()->json(['message' => 'Data User Berhasil ditambahkan', 'user' => $user], 200);
    }

    public function show($id)
    {
        $users = User::findOrFail($id);
        return response(['users' => new UsersResources($users), 'message' => 'Data Berhasil Ditampilkan'], 200);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($request->all());

        return response()->json(['message' => 'Data User Berhasil diubah', 'user' => $user], 200);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Data User Berhasil dihapus']);
    }
}
