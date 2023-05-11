<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Jenssegers\Blade\Blade;

class Welcome extends CI_Controller
{
    
    public function index()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $umur = $this->input->post('umur');
        $kategori = $this->input->post('kategori');
        
        
        $blade = new Blade(VIEWPATH, APPPATH . 'cache');
        echo $blade->make('form', [])->render();
    }

    public function tampil()
    { 
        
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $umur = $this->input->post('umur');
        $kategori = $this->input->post('kategori');


        if(($umur >=0)&& ($umur <=10)){
            $kategori = 'Anak';
           }
           elseif(($umur >10)&& ($umur <=20)){
            $kategori = 'Remaja';
           }
           elseif(($umur >20)&& ($umur <=30)){
            $kategori = 'Dewasa';
           }
           elseif($umur >30){
            $kategori = 'Tua';
           }

           
        $blade = new Blade(VIEWPATH, APPPATH . 'cache');
         echo $blade->make('tampil', ['nama' => $nama, 'nim' => $nim, 'umur' => $umur, 'kategori'=>$kategori])->render();

        
       
    }
}
