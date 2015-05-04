<?php

class CartsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /carts
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /carts/create
	 *
	 * @return Response
	 */
	public function create()
	{
	     //
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /carts
	 *
	 * @return Response
	 */
	public function store()
	{
	    $data = Input::all();
		$cart = new Cart;
		$cart->bphone = $data['bphone'];
		$cart->payType = $data['payType'];	
		$cart->sphone = '255756738275';
		$cart->username = 'fredy';
		$cart->status = 'unpaid';
		
		$cart->save();

		$cartLength = $data['cartLength'];
		$totalAmount = 0;
	   for ( $counter = 1; $counter < $cartLength; $counter++){
		$cart_item = new CartItem;
		$cart_item->item_name = $data["item_name_".$counter];
		$cart_item->item_number = $data["item_number_".$counter];
		$cart_item->quantity = $data["quantity_".$counter];
		$totalAmount += (int)$data["amount_".$counter] * (int)$data["quantity_".$counter];
		$cart_item->amount = $totalAmount;
		$cart_item->cart_id = $cart->id;
		$cart_item->save(); 
		}

		return Response::json([
			'data'=>'done'
			]);
	}

	/**
	 * Display the specified resource.
	 * GET /carts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /carts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /carts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /carts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}