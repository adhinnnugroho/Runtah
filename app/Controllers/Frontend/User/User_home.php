<?php

namespace App\Controllers\Frontend\User;

use App\Controllers\BaseController;
use App\Models\jenisSampahModel;
use App\Models\namaSampah;
use App\Models\UserModel;

class User_home extends BaseController
{
     public function __construct()
     {
          $this->namasampah = new namaSampah();
          $this->jenisSampah = new jenisSampahModel();
          $this->usermodel = new UserModel();
     }

     public function index()
     {
          session()->set(['url_aktif' => "user/home"]);
          $data = [
               'title' => "selamat datang di runtah",
               'data_sampah' => $this->jenisSampah->JoinSampah(),
               'data_user' => $this->usermodel->get_foto_profile()
          ];
          return view('Frontend/User/index', $data);
     }
}
