<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\RoleUpdateRequest;
use App\Http\Requests\RoleControllerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller


{
    public function index()
    {

        return view('backend.page.role.role')->withPermissions(Permission::all());
    }
    public function roles_list(Request $request)
    {


        $searchField = $request->input('search.value');
        $roles= Role::where(function ($query) use ($searchField) {
            $query->where('name', 'like', '%' . $searchField . '%')
                ->orWhere('guard_name', 'like', '%' . $searchField . '%')
                ->orWhere('created_at', 'like', '%' . $searchField . '%')
                ->orWhere('updated_at', 'like', '%' . $searchField . '%');
        })->orderBy($request->columns[$request->order[0]['column']]['data'], $request->order[0]['dir'])
            ->paginate(
                $request->length, ['*'], 'page', $request->start == 0 ? 1 : ($request->start / $request->length) + 1
            );

        $response = [
            'recordsTotal' => $roles->total(),
            'recordsFiltered' => $roles->total(),
            'data' => $roles->items(),
            'meta' => [
                'page' => $roles->currentPage(),
                'pages' => $roles->lastPage(),
                'perpage' => $roles->perPage(),
                'recordsTotal' => $roles->total(),
                'recordsFiltered' => $roles->total(),
            ],
        ];

        return $response;
    }
    public function rolesEdit(Request $request )
    {
            $role = Role::with('permissions')->find($request->roleID);

            if ($role) {
                $role->load('permissions');

                return response()->json([
                    'status' => true,
                    'title' => 'İşlem Başaralı!',
                    'icon' => 'success',
                    'text' => 'Rol bulundu.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!',
                    'role' => $role,
                    'permissions' => $role->permissions,
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'title' => 'İşlem Başarısız!',
                    'icon' => 'error',
                    'text' => 'Rol bulunamadı.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!'
                ]);
            }



    }

    public function rolesUpdate(RoleUpdateRequest $request){

            $role = Role::find($request->roleID);

            if ($role) {

                $data = $request->only('name');

                $role->update($data);
                $permissions = Permission::query()->whereIn('id', $request->input('permissions'))->get()->pluck('name');
                $role->syncPermissions($permissions);

                return response()->json([
                    'success' => true,
                    'title' => 'İşlem Başarılı!',
                    'icon' => 'success',
                    'text' => 'Rol düzenlendi.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!'
                ]);

            }
            return response()->json([
                'success' => false,
                'title' => 'İşlem Başarısız!',
                'icon' => 'error',
                'text' => 'Rol bulunamadı.',
                'confirmButtonText' => 'Anlaşıldı, Tamam!'
            ]);



    }
    public function rolesCreate(RoleControllerRequest $request): \Illuminate\Http\JsonResponse
    {

        $role = Role::create([
            'name' => $request->input('name'),
        ]);

        $permissions = Permission::query()->whereIn('id', $request->input('permissions'))->get()->pluck('name');
        $role->syncPermissions($permissions);

        return response()->json([
            'success' => true,
            'title' => 'İşlem Başarılı!',
            'icon' => 'success',
            'text' => 'Rol oluşturuldu.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'
        ]);


    }
    public function rolesDestroy($id): \Illuminate\Http\JsonResponse
    {
        $roles=Role::find($id);
        if (is_null($roles)) {
            return response()->json([
                'status' => false,
                'success' => false,
                'title' => 'Rol Bulunamadı',
                'icon' => 'error',
                'text' => 'Rol bulunmamadığı için silinemedi!',
                'confirmButtonText' => 'Anlaşıldı, Tamam!'

            ]);
        }
        $roles->delete();
        return response()->json([
            'status' => true,
            'success' => true,
            'title' => 'Rol silindi',
            'icon' => 'success',
            'text' => 'Rol başarıyla silindi',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'

        ]);
    }

}

