<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Welcome to Together We Fight Covid-19 Web Application',
			'isi' => 'homepage',
		];
		echo view('homepage', $data);
	}
	public function index2()
	{
		$nasional = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'), true);
		$provinsi = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), true);
		$data = [
			'title' => 'Data Covid-19 Nasional',
			'nasional' => $nasional,
			'provinsi' => $provinsi,
			'isi' => 'home',
		];
		echo view('layout/wrapper', $data);
	}
	public function pemetaan_nasional()
	{
		$provinsi = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), true);
		$nasional = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'), true);
		$data = [
			'title' => 'Pemetaan Kasus Covid-19 Nasional',
			'nasional' => $nasional,
			'provinsi' => $provinsi,
			'isi' => 'pemetaan_nasional',
		];
		echo view('layout/wrapper', $data);
	}
	public function global()
	{
		$positif = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), true);
		$sembuh = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'), true);
		$meninggal = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), true);
		$global = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
		$data = [
			'title' => 'Data Kasus Covid-19 Global',
			'positif' => $positif,
			'sembuh' => $sembuh,
			'meninggal' => $meninggal,
			'global' => $global,
			'isi' => 'global',
		];
		echo view('layout/wrapper', $data);
	}
	public function pemetaan_global()
	{
		$positif = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), true);
		$sembuh = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'), true);
		$meninggal = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), true);
		$global = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
		$data = [
			'title' => 'Pemetaan Kasus Covid-19 Global',
			'positif' => $positif,
			'sembuh' => $sembuh,
			'meninggal' => $meninggal,
			'global' => $global,
			'isi' => 'pemetaan_global',
		];
		echo view('layout/wrapper', $data);
	}
	public function about()
	{
		$data = [
			'title' => 'About Application',
			'isi' => 'about',
		];
		echo view('about', $data);
	}
	public function aboutcoronavirus()
	{
		$data = [
			'title' => 'About Coronavirus',
			'isi' => 'aboutcoronavirus',
		];
		echo view('aboutcoronavirus', $data);
	}
	public function gejalacorona()
	{
		$data = [
			'title' => 'Gejala Covid-19',
			'isi' => 'gejalacorona',
		];
		echo view('gejalacorona', $data);
	}
	public function contact()
	{
		$data = [
			'title' => 'Contact Page',
			'isi' => 'contact',
		];
		echo view('contact', $data);
	}
}
