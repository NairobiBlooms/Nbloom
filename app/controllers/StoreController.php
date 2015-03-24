<?php
class StoreController extends BaseController{

	public function getIndex (){
		return View::make('store.make');
	}

	public function postSubmit(){
		$make= new Make;
		$make->type = Input::get('roses');
		$make->Quantity=Input::get('qty');
		$make->save();

		return View::make('index');
	}

}
