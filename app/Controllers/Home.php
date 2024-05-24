<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Home extends BaseController
{
    public function portofolio()
    {
        return view('index');
    }

    public function collaborate()
    {
        $contactModel = new ContactModel();
        $data['contacts'] = $contactModel->getContacts();
        return view('collaborate', $data);
    }

    public function project()
    {
        return view('project');
    }

    public function project2()
    {
        return view('project2');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submit()
    {
        // Load the contact model
        $contactModel = new ContactModel();

        // Get the posted data
        $data = [
            'name'    => $this->request->getPost('cname'),
            'email'   => $this->request->getPost('cemail'),
            'message' => $this->request->getPost('cmessage')
        ];

        // Save the data to the database
        if ($contactModel->save($data)) {
            // Redirect to success page if save is successful
            return redirect()->to('success');
        } else {
            // Redirect to error page or show error message
            return redirect()->back()->with('error', 'Failed to save contact information.');
        }
    }

    public function success()
    {
        // Load the success view
        return view('contact_success');
    }
}
