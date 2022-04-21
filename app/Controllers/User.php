<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
    public function index()
    {
		$pager = \Config\Services::pager();
    	$model = new ModelUser();
    	$kunci = $this->request->getVar('cari');

        if ($kunci) {
            $query = $model->pencarian($kunci);
            $jumlah = "Pencarian dengan username <B>$kunci</B>";
        } else {
            $query = $model;
            $jumlah = "";
        }

        $data['user'] = $query->paginate(10);
        $data['pager'] = $model->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $data['jumlah'] = $jumlah;

        echo view('users',$data);
    }

    public function detailUser($username)
    {
		$userModel = new ModelUser();
        $data['user'] = $userModel->where(['username' => $username])->first();

        return view('detail_user', $data);
    }
}
