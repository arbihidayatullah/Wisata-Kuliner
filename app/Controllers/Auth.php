<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		$data = [
			'title' => 'Login Admin'
		];

		if ($this->request->getMethod() == 'post') {

			$rules = [
				'username' => 'required',
				'password' => 'required'
			];

			$validate = $this->validate($rules);
			if ($validate) {
				return view('auth/index');
			} else {
				return redirect()->back()->withInput()->with('validation', $this->validator);
			}
		}
		echo view('template/auth_header', $data);
		echo view('auth/login', $data);
		echo view('template/auth_footer');
	}

	public function register()
	{
		$data = [
			'title' => 'Register Admin'
		];

		echo view('template/auth_header', $data);
		echo view('auth/register');
		echo view('template/auth_footer');
	}

	public function index()
	{
		$data = [
			'title' => 'Home'
		];
		echo view('template/header', $data);
		echo view('auth/index');
		echo view('template/footer');
	}

	public function dashboard()
	{
		$data = [
			'title' => 'Dashboard Admin'
		];
		echo view('template/header', $data);
		echo view('auth/dashboard');
		echo view('template/footer');
	}

	public function about()
	{
		$data = [
			'title' => 'About Me'
		];
		echo view('template/header', $data);
		echo view('auth/about');
		echo view('template/footer');
	}

	public function detail1()
	{
		$data = [
			'title' => 'Detail | Sate'
		];
		echo view('template/header', $data);
		echo view('auth/detail1');
		echo view('template/footer');
	}

	public function detail2()
	{
		$data = [
			'title' => 'Detail | Bakso'
		];
		echo view('template/header', $data);
		echo view('auth/detail2');
		echo view('template/footer');
	}

	public function detail3()
	{
		$data = [
			'title' => 'Detail | Rendang'
		];
		echo view('template/header', $data);
		echo view('auth/detail3');
		echo view('template/footer');
	}

	public function detail4()
	{
		$data = [
			'title' => 'Detail | Nasi Goreng'
		];
		echo view('template/header', $data);
		echo view('auth/detail4');
		echo view('template/footer');
	}

	public function detail5()
	{
		$data = [
			'title' => 'Detail | Martabak'
		];
		echo view('template/header', $data);
		echo view('auth/detail5');
		echo view('template/footer');
	}

	public function detail6()
	{
		$data = [
			'title' => 'Detail | Mie Ayam'
		];
		echo view('template/header', $data);
		echo view('auth/detail6');
		echo view('template/footer');
	}
}
