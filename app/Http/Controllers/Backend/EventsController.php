<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventsCreateRequest;
use App\Http\Requests\EventsUpdateRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return view('frontend.page.events',compact('event'));
    }
    public function detail($id)
    {
        $event = Event::findOrFail($id); // ID'ye göre event bulunur, bulunmazsa 404 hatası döner
        return view('frontend.page.events_detail', compact('event')); // event_details view'ine event verisini gönderir
    }
    public function events()
    {
        $events = Event::all();
        return view('backend.page.events.events',compact('events'));
    }
    public function eventEdit(Request $request): \Illuminate\Http\JsonResponse
    {
            $event = Event::find($request->eventsID);
            if($event) {
                return response()->json([
                    'status' => true,
                    'title' => 'İşlem Başarılı!',
                    'icon' => 'success',
                    'text' => 'Etkinlik bulundu.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!',
                    'event' => $event
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'title' => 'İşlem Başarısız!',
                    'icon' => 'error',
                    'text' => 'Etkinlik bulunamadı.',
                    'confirmButtonText' => 'Anlaşıldı, Tamam!'
                ]);
        }
    }
    public function eventUpdate(EventsUpdateRequest$request): \Illuminate\Http\JsonResponse
    {
        $events = Event::find($request->eventsID);
        if($events){$data = $request->only('name', 'description','location', 'details', 'status','category','event_time');
            $events->update($data);
            return response()->json([
                'success' => true,
                'title' => 'İşlem Başarılı!',
                'icon' => 'success',
                'text' => 'Yetkiniz var etkinlik düzenlendi.',
                'confirmButtonText' => 'Anlaşıldı, Tamam!'
            ]);}

        return response()->json([
            'success' => false,
            'title' => 'İşlem Başarısız!',
            'icon' => 'error',
            'text' => 'Etkinlik düzenlenemedi.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'
        ]);

    }
    public function create(EventsCreateRequest $request)
    {

            // Ürün oluşturulmadan önce tüm alanların sağlandığından emin olun
            $event = Event::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                //'event_date' => $request->input('event_date'),
                'event_time' => $request->input('event_time'),
                'location' => $request->input('location'),
                'status' => $request->input('status'),
                'details' => $request->input('details'),
                'category' => $request->input('category'),

            ]);


        return response()->json([
            'success' => true,
            'title' => 'İşlem Başarılı!',
            'icon' => 'success',
            'text' => 'Etkinlik oluşturuldu.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'
        ]);
    }
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return response()->json([
            'status' => true,
            'success' => true,
            'title' => 'Etkinlik silindi',
            'icon' => 'success',
            'text' => 'Etkinlik başarıyla silindi.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'

        ]);
        return redirect()->route('eventslist')->with('success', 'Etkinlik başarıyla silindi.');
    }
}
