<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Daycalc;
use Illuminate\Http\Request;
use DateTime;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Daycalc $daycalc,Customer $customer)
    {
            $this->daycalc = $daycalc;
        $this->customer = $customer;


    }



    public function index(Request $request)
    {
        $sdate= $request->startdate;
        $edate= $request['enddate'];
        $person= $request['person'];

//        $emp=$this->daycalc->create($request->all());

        $startdate = new DateTime($sdate);
        $enddate = new DateTime($edate);
        $interval = $startdate->diff($enddate);
        $days = $interval->format('%a');
    //    dd($days);

        $data=$this->daycalc->where('from_day', '<=', $days)->where('to_day', '>=', $days)->first();
//        dd($data);
        $type               = $data->type;
        $personpercentage   = $data->person_offers; //30
        $person_disc_amount = $data ->amount;
        if($type == 2){
            $person_disc_amount     = (1000 * ($data->amount /100)); //1000*10/100=100
            $personpercentage       = (1000 * ($data->person_offers/100)); //1000*3/100=30
        }


        $calc = $days * 1000; // 4*1000 = 3000
        $rate = $calc - $person_disc_amount ; //3000 - 100 =2900
        $result = $person * $personpercentage; // 2*30 = 90
        $total = $rate + $result;//2900 +90=2990

        return view('form',compact('total'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $total = '';
       return view('form',compact('total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Swagger Implementation...

    /**
     * @OA\Post(
     ** path="/form",
     *   tags={"Customer Insert"},
     *   operationId="store",
     *   summary="Forms In Customer Elements Added",
     *   description="Returns the message and status",
     * @OA\Parameter(
     *              name="authId",
     *              in="header",
     *              required=true,
     *              description="{This is the user id}",
     *              example="c0216492-113e-4c2f-b1d3-734d9e54de4e"
     *             ),
     *      @OA\RequestBody(
     *        @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 type="object",
     *                  @OA\Property(
     *                      property="language_id",
     *                      example="deb77b0b-50ae-4a75-8c09-21b2580723bc",
     *                      type="string"
     *                  ),
     *                  @OA\Property(
     *                      property="main_category_id",
     *                      example="deb77b0b-50ae-4a75-8c09-21b2580723bc",
     *                      type="string"
     *
     *                  ),
     *                  @OA\Property(
     *                      property="sub_category_id",
     *                      example="deb77b0b-50ae-4a75-8c09-21b2580723bc",
     *                      type="string"
     *                  ),
     *                  @OA\Property(
     *                      property="title",
     *                      example="Audio title",
     *                      type="string"
     *                  ),
     *                  @OA\Property(
     *                      property="audio",
     *                      example="audio file with supported extension mpeg,mpga,mp3,wav,.m4a",
     *                      type="string"
     *                  ),
     *              )
     *          ),
     *      ),
     *   @OA\Response(
     *      response=201,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *)
     *
     *
     */
    public function store(Request $request)
    {
        $emp=$this->customer->create($request->all());


        return view('student_add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
