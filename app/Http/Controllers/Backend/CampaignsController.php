<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CampaignsCreateRequest;
use App\Http\Requests\CampaignsUpdateRequest;
use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class CampaignsController extends Controller
{
    public function index()
    {

        return view('backend.page.campaign.campaign');
    }

    public function campaigns(Request $request)
    {


        $searchField = $request->input('search.value');
        $campaigns = Campaign::where(function ($query) use ($searchField) {
            $query->where('name', 'like', '%' . $searchField . '%')
                ->orWhere('summary', 'like', '%' . $searchField . '%')
                ->orWhere('goal_amount', 'like', '%' . $searchField . '%')
                ->orWhere('description', 'like', '%' . $searchField . '%');
        })->orderBy($request->columns[$request->order[0]['column']]['data'], $request->order[0]['dir'])
            ->paginate(
                $request->length, ['*'], 'page', $request->start == 0 ? 1 : ($request->start / $request->length) + 1
            );

        $response = [
            'recordsTotal' => $campaigns->total(),
            'recordsFiltered' => $campaigns->total(),
            'data' => $campaigns->items(),
            'meta' => [
                'page' => $campaigns->currentPage(),
                'pages' => $campaigns->lastPage(),
                'perpage' => $campaigns->perPage(),
                'recordsTotal' => $campaigns->total(),
                'recordsFiltered' => $campaigns->total(),
            ],
        ];

        return $response;
    }

    public function create(CampaignsCreateRequest $request): \Illuminate\Http\JsonResponse
    {

        $campaign = Campaign::create([
            'name' => $request->input('name'),
            'goal_amount' => $request->input('goal_amount'),
            'summary' => $request->input('summary'),
            'description' => $request->input('description'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'status' => $request->input('status'),
        ]);
        return response()->json([
            'success' => true,
            'title' => 'İşlem Başarılı!',
            'icon' => 'success',
            'text' => 'Kampanya oluşturuldu.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'
        ]);


    }

    public function CampaignEdit(Request $request): \Illuminate\Http\JsonResponse
    {

            $campaign = Campaign::find($request->campaignID);

            if ($campaign) {
                return response()->json([
                    'status' => true,
                    'title' => 'İşlem Başaralı!',
                    'icon' => 'success',
                    'text' => 'Kullanıcı bulundu.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!',
                    'campaign' => $campaign
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'title' => 'İşlem Başarısız!',
                    'icon' => 'error',
                    'text' => 'Kullanıcı bulunamadı.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!'
                ]);
            }

    }
    public function CampaignUpdate(CampaignsUpdateRequest $request): \Illuminate\Http\JsonResponse
    {
        $campaign = Campaign::find($request->campaignID);

        if ($campaign) {

            $data = $request->only('name', 'goal_amount', 'summary', 'description', 'start_date', 'end_date', 'status');
            $campaign->update($data);

            return response()->json([
                'success' => true,
                'title' => 'İşlem Başarılı!',
                'icon' => 'success',
                'text' => 'Kampanya düzenlendi.',
                'confirmButtonText' => 'Anlaşıldı, Tamam!'
            ]);
        }
        return response()->json([
            'success' => false,
            'title' => 'İşlem Başarısız!',
            'icon' => 'error',
            'text' => 'Kampanya bulunamadı.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'
        ]);

    }


    public function destroy($id)
    {
        $campaign = Campaign::find($id);

        if (is_null($campaign)) {
            return response()->json([
                'status' => false,
                'success' => false,
                'title' => 'Kampanya Bulunamadı',
                'icon' => 'error',
                'text' => 'Kampanya bulunmamadığı için silinemedi!',
                'confirmButtonText' => 'Anlaşıldı, Tamam!'

            ]);
        }
        $campaign->delete();
        return response()->json([
            'status' => true,
            'success' => true,
            'title' => 'Kampanya silindi',
            'icon' => 'success',
            'text' => 'Kampanya başarıyla silindi',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'

        ]);
    }
}
