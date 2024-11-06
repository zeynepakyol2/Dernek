<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\PermissionCreateRequest;
use App\Http\Requests\PermissionUpdateRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function Laravel\Prompts\error;


class PermissionController extends Controller
{
    public function index()
    {

        return view('backend.page.permission.permission');
    }
    public function permissions_list(Request $request)
    {


        $searchField = $request->input('search.value');
        $permissions= Permission::where(function ($query) use ($searchField) {
            $query->where('name', 'like', '%' . $searchField . '%')
                ->orWhere('guard_name', 'like', '%' . $searchField . '%')
                ->orWhere('created_at', 'like', '%' . $searchField . '%')
                ->orWhere('updated_at', 'like', '%' . $searchField . '%');
        })->orderBy($request->columns[$request->order[0]['column']]['data'], $request->order[0]['dir'])
            ->paginate(
                $request->length, ['*'], 'page', $request->start == 0 ? 1 : ($request->start / $request->length) + 1
            );

        $response = [
            'recordsTotal' => $permissions->total(),
            'recordsFiltered' => $permissions->total(),
            'data' => $permissions->items(),
            'meta' => [
                'page' => $permissions->currentPage(),
                'pages' => $permissions->lastPage(),
                'perpage' => $permissions->perPage(),
                'recordsTotal' => $permissions->total(),
                'recordsFiltered' => $permissions->total(),
            ],
        ];

        return $response;
    }
    public function permissionUpdate(PermissionUpdateRequest $request): \Illuminate\Http\JsonResponse
    {
        $permissions = Permission::find($request->permissionID);

        if ($permissions) {

            $data = $request->only('name');

            $permissions->update($data);


            return response()->json([
                'success' => true,
                'title' => 'İşlem Başarılı!',
                'icon' => 'success',
                'text' => 'İzin düzenlendi.',
                'confirmButtonText' => 'Anlaşıldı, Tamam!'
            ]);

        }
        return response()->json([
            'success' => false,
            'title' => 'İşlem Başarısız!',
            'icon' => 'error',
            'text' => 'İzin bulunamadı.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'
        ]);

    }

    public function permissionEdit(Request $request): \Illuminate\Http\JsonResponse
    {

            $permissions = Permission::find($request->permissionID);

            if ($permissions) {
                return response()->json([
                    'status' => true,
                    'title' => 'İşlem Başaralı!',
                    'icon' => 'success',
                    'text' => 'İzin bulundu.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!',
                    'permission' => $permissions
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'title' => 'İşlem Başarısız!',
                    'icon' => 'error',
                    'text' => 'İzin bulunamadı.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!'
                ]);
            }



//        if ($request->filled('permissionPOST')) {
//
//
//            $permissions = Permission::find($request->permissionID);
//
//            if ($permissions) {
//
//                $data = $request->only('name', 'guard_name', 'created_at', 'updated_at');
//
//                $permissions->update($data);
//
//
//                return response()->json([
//                    'success' => true,
//                    'title' => 'İşlem Başarılı!',
//                    'icon' => 'success',
//                    'text' => 'İzin düzenlendi.',
//                    'confirmButtonText' => 'Anlaşıldı, Tamam!'
//                ]);
//
//            }
//            return response()->json([
//                'success' => false,
//                'title' => 'İşlem Başarısız!',
//                'icon' => 'error',
//                'text' => 'İzin bulunamadı.',
//                'confirmButtonText' => 'Anlaşıldı, Tamam!'
//            ]);
//
//
//        }
    }

    public function permissionCreate(PermissionCreateRequest $request): \Illuminate\Http\JsonResponse
    {

        $permissions = Permission::create([
            'name' => $request->input('name'),
        ]);
        return response()->json([
            'success' => true,
            'title' => 'İşlem Başarılı!',
            'icon' => 'success',
            'text' => 'İzin oluşturuldu.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'
        ]);


    }

    public function permissionDestroy($id): \Illuminate\Http\JsonResponse
    {

        $permissions = Permission::find($id);

        if (is_null($permissions)) {
            return response()->json([
                'status' => false,
                'success' => false,
                'title' => 'İzin Bulunamadı',
                'icon' => 'error',
                'text' => 'İzin bulunmamadığı için silinemedi!',
                'confirmButtonText' => 'Anlaşıldı, Tamam!'

            ]);
        }
        $permissions->delete();
        return response()->json([
            'status' => true,
            'success' => true,
            'title' => 'İzin silindi',
            'icon' => 'success',
            'text' => 'İzin başarıyla silindi',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'

        ]);
    }
}
