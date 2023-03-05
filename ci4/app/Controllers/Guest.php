
<?php
namespace App\Controllers;
use App\Models\GuestModel;
class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

		$data = [
            'guest'  => $model->getGuest(),
            'title' => 'Guestbook',
        ];

        return view('templates/header', $data)
             . view('guest/index')
             . view('templates/footer');
    }
    public function view()
    {
      $model = model(GuestModel::class);
  
      $data['guest'] = $model->getGuest();
  
      if (empty($data['guest'])) {
        throw new PageNotFoundException('Cannot find the guest with the ID: ' . $id);
      }
  
      $data['title'] = 'Guestbook';
  
      return view('templates/header', $data)
        . view('guest/index')
        . view('templates/footer');
    }
	
	public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a guest entry'])
                . view('guest/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['name', 'email', 'website', 'comment', 'gender']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'website' => 'required|max_length[255]|min_length[3]',			
            'comment'  => 'required|max_length[5000]|min_length[10]',
            'gender' => 'required|max_length[255]|min_length[3]',			
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Add a guest entry'])
                . view('guest/create')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'name' => $post['name'],
            'email'  => $post['email'],
            'website'  => $post['website'],
            'comment'  => $post['comment'],
            'gender'  => $post['gender'],
        ]);

        return view('templates/header', ['title' => 'Add a Guest Entry'])
            . view('guest/success')
            . view('templates/footer');
    }
    
}
<div class="topnav">
  <a class ="icon" href="home"><img src="https://64.media.tumblr.com/e0b978612c68d83635151d03fa995a0c/e1089a909f72b296-c7/s540x810/640bd85b2a8cc63ab5d08ee11459fec87c3a681a.jpg" style="width:48px;height:48px; margin:0px; margin-bottom:-5px;"></a>
  <a href="home">Home</a>
  <a class="active" href="news">SIMP CONFESSIONS</a>
  <a href="create">CONFESS!</a>
</div>
<div class = "divbody">