<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use App\Models\PesananModel;

class MyAccount extends BaseController
{
    protected function checkLogin()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return false;
        }
        return true;
    }

    public function index()
    {
        if (!$this->checkLogin()) return redirect()->to('/')->with('error', 'Silakan login terlebih dahulu.');

        $email = session()->get('email_pengguna');
        $name = explode('@', $email)[0];

        $data = [
            'tab' => 'dashboard',
            'email' => $email,
            'name' => $name
        ];

        return view('my_account', $data);
    }

    public function orders()
    {
        if (!$this->checkLogin()) return redirect()->to('/')->with('error', 'Silakan login terlebih dahulu.');

        $email = session()->get('email_pengguna');
        $pesananModel = new PesananModel();
        
        $orders = $pesananModel->where('email_pengguna', $email)->orderBy('tanggal_pembelian', 'DESC')->findAll();

        $data = [
            'tab' => 'orders',
            'orders' => $orders
        ];

        return view('my_account', $data);
    }

    public function downloads()
    {
        if (!$this->checkLogin()) return redirect()->to('/')->with('error', 'Silakan login terlebih dahulu.');

        $data = [
            'tab' => 'downloads'
        ];

        return view('my_account', $data);
    }

    public function addresses()
    {
        if (!$this->checkLogin()) return redirect()->to('/')->with('error', 'Silakan login terlebih dahulu.');

        $email = session()->get('email_pengguna');
        $penggunaModel = new PenggunaModel();
        
        $user = $penggunaModel->find($email);

        $data = [
            'tab' => 'addresses',
            'user' => $user
        ];

        return view('my_account', $data);
    }

    public function editAddress($type)
    {
        if (!$this->checkLogin()) return redirect()->to('/')->with('error', 'Silakan login terlebih dahulu.');

        if (!in_array($type, ['billing', 'shipping'])) {
            return redirect()->to('/my-account/addresses');
        }

        $email = session()->get('email_pengguna');
        $penggunaModel = new PenggunaModel();
        $user = $penggunaModel->find($email);

        $data = [
            'tab' => 'edit_address',
            'type' => $type,
            'user' => $user
        ];

        return view('my_account', $data);
    }

    public function saveAddress($type)
    {
        if (!$this->checkLogin()) return redirect()->to('/')->with('error', 'Silakan login terlebih dahulu.');

        if (!in_array($type, ['billing', 'shipping'])) {
            return redirect()->to('/my-account/addresses');
        }

        $email = session()->get('email_pengguna');
        $penggunaModel = new PenggunaModel();

        $post = $this->request->getPost();

        // For now, save both billing and shipping to the same fields
        $updateData = [
            'nama_depan'    => $post['first_name'] ?? '',
            'nama_belakang' => $post['last_name'] ?? '',
            'company'       => $post['company'] ?? '',
            'country'       => $post['country'] ?? '',
            'jalan'         => $post['address_1'] ?? '',
            'detail_alamat' => $post['address_2'] ?? '',
            'kota'          => $post['city'] ?? '',
            'provinsi'      => $post['province'] ?? '',
            'kode_pos'      => $post['postcode'] ?? ''
        ];

        $penggunaModel->update($email, $updateData);

        return redirect()->to('/my-account/addresses')->with('success', ucfirst($type) . ' address saved successfully.');
    }

    public function details()
    {
        if (!$this->checkLogin()) return redirect()->to('/')->with('error', 'Silakan login terlebih dahulu.');

        $email = session()->get('email_pengguna');
        $penggunaModel = new PenggunaModel();
        
        $user = $penggunaModel->find($email);
        $displayName = explode('@', $email)[0];

        $data = [
            'tab' => 'details',
            'user' => $user,
            'displayName' => $displayName
        ];

        return view('my_account', $data);
    }

    public function updateDetails()
    {
        if (!$this->checkLogin()) return redirect()->to('/')->with('error', 'Silakan login terlebih dahulu.');

        $session = session();
        $email = $session->get('email_pengguna');
        $penggunaModel = new PenggunaModel();
        $user = $penggunaModel->find($email);

        $post = $this->request->getPost();

        $updateData = [
            'nama_depan'    => $post['first_name'] ?? $user['nama_depan'],
            'nama_belakang' => $post['last_name'] ?? $user['nama_belakang'],
        ];

        // Handle password change
        $currentPass = $post['current_password'] ?? '';
        $newPass = $post['new_password'] ?? '';
        $confirmPass = $post['confirm_password'] ?? '';

        if (!empty($newPass)) {
            if (empty($currentPass)) {
                return redirect()->back()->with('error', 'Current password is required to set a new password.');
            }
            if (!password_verify($currentPass, $user['password'])) {
                return redirect()->back()->with('error', 'Current password is incorrect.');
            }
            if ($newPass !== $confirmPass) {
                return redirect()->back()->with('error', 'New password and confirmation do not match.');
            }
            if (strlen($newPass) < 6) {
                return redirect()->back()->with('error', 'New password must be at least 6 characters long.');
            }
            
            $updateData['password'] = password_hash($newPass, PASSWORD_DEFAULT);
        }

        $penggunaModel->update($email, $updateData);

        return redirect()->to('/my-account/details')->with('success', 'Account details changed successfully.');
    }
}
