<?php

namespace App\Controllers\Frontend\Auth;

use App\Controllers\BaseController;

use App\Models\levelModel;
use App\Models\UserModel;

class AuthController extends BaseController
{
     public function __construct()
     {
          $this->userModel = new UserModel();
          $this->levelModel = new levelModel();
     }

     public function index()
     {
          $data = [
               'title' => "Login - Runtah",
               'validation' => \Config\Services::validation()
          ];

          return view("Frontend/Auth/User/Login", $data);
     }
     public function handle_login()
     {
          if (!$this->validate([
               'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                         'required' => '{field} Harus diisi',
                         'valid_email' => 'Format Email Harus Valid',
                    ]
               ],
               'password' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => '{field} Harus diisi',
                    ]
               ],
          ])) {
               return redirect()->back()->withInput();
          }

          $username = htmlspecialchars($this->request->getVar('email'));
          $password = htmlspecialchars($this->request->getVar('password'));
          $data = $this->userModel->where(['email' => $username])->first();
          if ($data) {
               if (password_verify($password, $data['password'])) {
                    session()->set([
                         'id' => $data['id_user'],
                         'username' => $data['username'],
                         'password' => $data['password'],
                         'email' => $data['email'],
                    ]);
                    if ($data['id_level'] == "4") {
                         session()->set([
                              'logged_in' => TRUE
                         ]);
                         return redirect()->to('/');
                    } elseif ($data['id_level'] == "2") {
                         session()->set([
                              'id_level' => $data['id_level'],
                              'is_admin' => TRUE
                         ]);

                         return redirect()->to('Admin');
                    } elseif ($data['id_level'] == "3") {
                         return redirect()->to('Petugas');
                    } else {
                         return redirect()->to('/login');
                    }
               } else {
                    session()->setFlashdata('error', 'Login Failed');
                    return redirect()->back();
               }
          } else {
               session()->setFlashdata('error', 'Login Failed');
               return redirect()->back();
          }
     }

     public function logout()
     {
          session()->destroy();
          return redirect()->to('/Login');
     }

     public function daftar()
     {
          $data = [
               'title' => "Daftar - Runtah",
               'validation' => \Config\Services::validation()
          ];

          return view("Frontend/Auth/User/Daftar", $data);
     }

     public function handle_daftar()
     {
          // ! scannning yang saya perlukan
          $rekening_sampah = $this->userModel->rekeningSampah(8);
          $level = $this->request->getVar("nama_level");
          $nama_level = $this->levelModel->where(['nama_level' => $level])->first();
          $slug = url_title(htmlspecialchars($this->request->getVar("username")), '-',  true);

          // ! proses  validasi
          if (!$this->validate([
               'username' => [
                    'rules' => 'required|max_length[26]|alpha_numeric',
                    'errors' => [
                         'required' => '{field} Harus diisi',
                         'max_length' => '{field} Maksimal 26 Karakter',
                         'alpha_numeric' => 'username hanya boleh diisi dengan huruf dan angka',
                    ]
               ],
               'password' => [
                    'rules' => 'required|min_length[8]|max_length[50]',
                    'errors' => [
                         'required' => '{field} Harus diisi',
                         'min_length' => '{field} Minimal 8 Karakter',
                         'max_length' => '{field} Maksimal 50 Karakter',
                    ]
               ],
               'email' => [
                    'rules' => 'required|valid_email|is_unique[users.email]',
                    'errors' => [
                         'required' => '{field} Harus diisi',
                         'valid_email' => 'Format Email Harus Valid',
                         'is_unique' => 'email sudah digunakan sebelumnya'
                    ]
               ],
          ])) {
               return redirect()->back()->withInput();
          }

          if ($level == null) {
               $this->userModel->save([
                    'id_level' => "4",
                    'username' => htmlspecialchars($this->request->getVar("username")),
                    'email' => htmlspecialchars($this->request->getVar("email")),
                    'password' => password_hash(htmlspecialchars($this->request->getVar("password")), PASSWORD_DEFAULT),
                    'rekening_sampah' => $rekening_sampah,
                    'slug' => $slug
               ]);
               $data = $this->userModel->where(['username' => htmlspecialchars($this->request->getVar("username"))])->first();
               session()->set([
                    'id' => $data['id_user'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'gambar' => $data['foto'],
                    'logged_in' => TRUE
               ]);

               session()->setFlashdata('success', 'Terima kasih dan selamat datang diruntah');
               return redirect()->to("/");
          } else {
               $this->userModel->save([
                    'id_level' => $nama_level['id_level'],
                    'username' => htmlspecialchars($this->request->getVar("username")),
                    'email' => htmlspecialchars($this->request->getVar("email")),
                    'password' => password_hash(htmlspecialchars($this->request->getVar("password")), PASSWORD_DEFAULT),
                    'rekening_sampah' => $rekening_sampah,
                    'slug' => $slug,
               ]);
               $data = $this->userModel->where(['username' => htmlspecialchars($this->request->getVar("username"))])->first();
               session()->set([
                    'id' => $data['id_user'],
                    'id_level' => $data['id_level'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'gambar' => $data['foto'],
                    'logged_in' => TRUE
               ]);
               session()->setFlashdata('success', 'Terima kasih dan selamat datang diruntah');
               return redirect()->to("Admin");
          }
     }
}
