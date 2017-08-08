<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
	private $bedrooms;
	
	public function __construct()
	{
		$this->bedrooms = [
			[
				'id' => 1,
				'code_name' => 'Chambre 12',
				'bedroom_category_id' => 1,
				'bedroom_category' => [
					'id' => 1,
					'name' => 'Basic',
					'price' => '$30.00'
				]
			],
			[
				'id' => 2,
				'code_name' => 'Chambre 22',
				'bedroom_category_id' => 2,
				'bedroom_category' => [
					'id' => 2,
					'name' => 'Premium',
					'price' => '$100.00'
				]
			],
			[
				'id' => 3,
				'code_name' => 'Chambre 32',
				'bedroom_category_id' => 1,
				'bedroom_category' => [
					'id' => 1,
					'name' => 'Basic',
					'price' => '$30.00'
				]
			]
		];
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null, Request $request)
    {
    	if($id) { $bedroom = $this->bedrooms[$id-1];
            return view('reservation.create', compact('bedroom'));
        }

        dd($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
