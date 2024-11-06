<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Auth\RoleController;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function users()
    {

        return view('backend.page.users.users')->withRoles(Role::all());
    }
    public function userList(Request $request)
    {


        $searchField = $request->input('search.value');
        $users = User::where(function ($query) use ($searchField) {
            $query->where('first_name', 'like', '%' . $searchField . '%')
                ->orWhere('last_name', 'like', '%' . $searchField . '%')
                ->orWhere('email', 'like', '%' . $searchField . '%')
                ->orWhere('created_at', 'like', '%' . $searchField . '%')
                ->orWhere('updated_at', 'like', '%' . $searchField . '%');
        })->orderBy($request->columns[$request->order[0]['column']]['data'], $request->order[0]['dir'])
            ->paginate(
                $request->length, ['*'], 'page', $request->start == 0 ? 1 : ($request->start / $request->length) + 1
            );

        $response = [
            'recordsTotal' => $users->total(),
            'recordsFiltered' => $users->total(),
            'data' => $users->items(),
            'meta' => [
                'page' => $users->currentPage(),
                'pages' => $users->lastPage(),
                'perpage' => $users->perPage(),
                'recordsTotal' => $users->total(),
                'recordsFiltered' => $users->total(),
            ],
        ];

        return $response;
    }

    public function userCreate(Request $request)
    {


        $request->validate([
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:50',
        ]);

        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return response()->json([
            'success' => true,
            'title' => 'İşlem Başarılı!',
            'icon' => 'success',
            'text' => 'Kullanıcı oluşturuldu.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'
        ]);


    }


    public function userEdit(Request $request)
    {
        if ($request->filled('userGET')) {
            $user = User::with('roles')->find($request->userID);
            if ($user) {
                $user->load('roles');
                return response()->json([
                    'status' => true,
                    'title' => 'İşlem Başaralı!',
                    'icon' => 'success',
                    'text' => 'Kullanıcı bulundu.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!',
                    'user' => $user,
                    'roles'=>$user->roles,
                ]);
            }
            else {
                return response()->json([
                    'status' => false,
                    'title' => 'İşlem Başarısız!',
                    'icon' => 'error',
                    'text' => 'Kullanıcı bulunamadı.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!'
                ]);
            }

        }

        if ($request->filled('userPOST')) {

            $request->validate([
                'first_name' => 'required|min:3|max:50',
                'last_name' => 'required|min:3|max:50',
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users')->ignore($request->userID),
                ],
                'roles' => 'required|array',
                'roles.*' => 'exists:roles,id',
            ]);

            $user = User::find($request->userID);

            if ($user) {

                $data = $request->only('first_name', 'last_name', 'email');

                if ($request->input('password')) {
                    $data['password'] = Hash::make($request->input('password'));
                }

                $user->update($data);
                $roles = Role::query()->whereIn('id', $request->input('roles'))->get()->pluck('name');
                $user->syncRoles($roles);

                return response()->json([
                    'success' => true,
                    'title' => 'İşlem Başarılı!',
                    'icon' => 'success',
                    'text' => 'Kullanıcı düzenlendi.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!'
                ]);
            }
            return response()->json([
                'success' => false,
                'title' => 'İşlem Başarısız!',
                'icon' => 'error',
                'text' => 'Kullanıcı bulunamadı.',
                'confirmButtonText' => 'Anlaşıldı, Tamam!'
            ]);



        }
    }


    public function userDestroy($id): \Illuminate\Http\JsonResponse
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json([
            'status' => true,
            'success' => true,
            'title' => 'Kullanıcı silindi',
            'icon' => 'success',
            'text' => 'Kullanıcı başarıyla silindi.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'

        ]);

    }

}
