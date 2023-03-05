<?php
namespace App\Controllers;
use App\Models\GuestModel;
class Guest extends BaseController
{
	public function index ()
	{
		$model = model (GuestModel :: class);
		
		$data = ['guest' => $model->getGuest(),
		'title'=> 'Guestbook',];
		
		return view('templates/header', $data)
			.view('guest/index')
			.view('templates/footer');
	}
	public function create()
	{
		if (! $this->request->is('post')){
			return view ('templates/header', ['title'=> 'Be a Guest'])
			.view('guest/create')
			.view('templates/footer');
		}
		$post = $this->request->getPost(['name','email','website','comment','gender']);
	}
	public function view($slug=null)
	{
		$model = model(GuestModel::class);
		
		$data['ldlaigo_guest'] = $model->getGuest($slug);
	}

}