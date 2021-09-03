<?php

namespace App\Http\Controllers;

use App\DataTables\HospitalDatatable;
use App\Models\Cart;
use App\Traits\LogTrait;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\Hospital;
use \Carbon\Carbon;
use App\Traits\HospitalScheduleTrait;
use Auth;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use SEOMeta;
use PDF;

class HospitalController extends Controller
{

    use HospitalScheduleTrait, SEOToolsTrait, LogTrait;


    public function index(HospitalDatatable $hospitalDatatable)
    {
        return $hospitalDatatable->render('panel.hospitals.index');
    }

    public function listProducts($id)
    {

        $hospital = Hospital::find($id);

        if (empty($hospital))
            return response()->json(["message" => "No se encontró la clínica"], 404);

        $products = $hospital->products()
            ->select('hospital_product.id', 'product.product', 'hospital_product.price')->join('product', 'product.id', '=', 'hospital_product.product_id')
            ->get();


        return response()->json(["products" => $products], 200);

    }


    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {


    }

    public function setStatus()
    {

    }

    public function getSetAppointment($slug, $userId, $cartId)
    {
        $decode = html_entity_decode($slug);
        $name = urldecode($decode);


        $hospital = Hospital::where('name', $name)
            ->with([
                'hospitalProfile',
                'hospitalAvailability',
                'products',
                'hospitalSchedule' => function ($query) {
                    $query->where('start_date', '>=', Carbon::now()->toDateTimeString());
                }
            ])
            ->first();


        if (empty($hospital))
            abort(404, 'Hospital no encontrado');

        return view('panel.hospital-schedule')
            ->with([
                'hospital' => $hospital,
                'userId'   => $userId,
                'cartId'   => $cartId,
                'calendar' => $this->getSchedule($hospital, true)
            ]);


    }


    public function getHospital($slug, Request $request)
    {

        $decode = html_entity_decode($slug);
        $name = urldecode($decode);


        $hospital = Hospital::where('name', $name)
            ->with([
                'hospitalProfile',
                'hospitalAvailability',
                'products',
                'hospitalSchedule' => function ($query) {
                    $query->where('start_date', '>=', Carbon::now()->toDateTimeString());
                }
            ])
            ->first();


        if (empty($hospital))
            abort(404, 'Hospital no encontrado');


        $this->seo()->setTitle('BabyPassport | ' . $hospital->name);
        $this->seo()->setDescription($hospital->about);
        SEOMeta::addKeyword('parto en usa,ginecologos en usa');


        return view('web.hospital-profile')
            ->with([
                'hospital' => $hospital
            ]);

    }

    public function postSetAppointment($id, Request $request)
    {

        $hospital = Hospital::find($id);
        $cart = Cart::find($request["cart_id"]);

        if (empty($hospital)) {
            abort(404, "No se encontró el hospital");
        }

        try {

            $isScheduled = $hospital->hospitalSchedule()->where('pacient_id', $request["pacient_id"])->first();

            if (!empty($isScheduled)) {

                $isScheduled->update([
                    "start_date" => $request["start_date"],
                    "end_date"   => $request["end_date"]
                ]);


            } else {

                $hospital->hospitalSchedule()->create([
                    'pacient_id' => $request["pacient_id"],
                    "cart_id"    => $request["cart_id"],
                    "start_date" => $request["start_date"],
                    "end_date"   => $request["end_date"]
                ]);
            }


            $receiptUrl = asset('storage/moms/' . $request["pacient_id"] . '/' . $request["cart_id"] . '.pdf');
            $path = storage_path() . '/app/public/moms/' . $request["pacient_id"] . '/' . $request["cart_id"] . '.pdf';
            $pdf = PDF::loadView('formats/payment_receipt', ["cart" => $cart]);
            $pdf->save($path);

            $request->session()->flash('success', 'La cita ha sido agendada correctamente');


            return redirect()->route('users.profile', [$request["pacient_id"]]);

        } catch (QueryException $e) {
            $log = $this->saveLog($e->getMessage(), $e->getCode(), 'database');
            $request->session()->flash('error', 'Hubo un error al agendar su cita, consulte a uno de nuestros agentes vía chat');
            return back();
        }


    }
}
