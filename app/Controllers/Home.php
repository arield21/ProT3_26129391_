<?php

namespace App\Controllers;

use App\Models\usuario_Model;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
        
    }
    public function quienes_somos()
    {
        $data['titulo']='quienes somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    
    public function acerca_de()
    {
        $data['titulo']='acerca de';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }
   
    public function registro()
    {
        $data['titulo']='registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/registro');
        echo view('front/footer_view');
    }
    public function login()
    {
        $data['titulo']='login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/login');
        echo view('front/footer_view');
    }

    public function usuarioing()
    {
        $model = new usuario_Model();
        $datos = $model->getUsuarios();

        $data['titulo']='usuarioing';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/usuarioing', compact('datos'));
        echo view('front/footer_view');
    }
     public function listado()
    {
        $model = new usuario_Model();
        $datos = $model->getUsuarios();

        $data['titulo']='listado';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/listado', compact('datos'));
        echo view('front/footer_view');

    }
    public function add(){

        $data['titulo']='add';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/add');
        echo view('front/footer_view');

    }

    public function store(){

    $validacion =$this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'usuario' => 'required',
            'pass' => 'required',]);

        if($_POST && $validacion){

          //print_r($_POST);exit;

        $datos = [            
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'email' => $_POST['email'],
            'usuario' => $_POST['usuario'],
            'pass' => $_POST['pass'],            
        ];

        $model = new usuario_Model();
        $model->add($datos);

        session()->setFlashdata('mensaje', 'Registro guardado exitosamente' );      

        return redirect()->to(base_url('Home'));

        }else{

            $error = $this->validator->listErrors();

            session()->setFlashdata('mensaje', $error );
            return redirect()->to(base_url('Home/add'));
           
        }

    }
    public function edit($id){ 

        $model = new usuario_Model();
        $dato = $model->getUsuario($id);

        $data['titulo']='edit';
        echo view('front/head_view',$data);
        echo view('/front/navbar_view');
        echo view('/Back/usuario/edit', compact('dato'));
        echo view('front/footer_view');
    }

    public function update(){
            $validacion =$this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'usuario' => 'required',
            'pass' => 'required',]);

        if($_POST && $validacion){

          //print_r($_POST);exit;

        $datos = [ 
            'id'=> $_POST['id'],           
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'email' => $_POST['email'],
            'usuario' => $_POST['usuario'],
            'pass' => $_POST['pass'],            
        ];        

        $model = new usuario_Model();
        $model->updateDatos($id, $datos);

        session()->setFlashdata('mensaje', 'Registro Editado exitosamente' );   

        return redirect()->to(base_url('Home'));   

        }else{
            
            //$id= $_POST['id'];

            $error = $this->validator->listErrors();

            session()->setFlashdata('mensaje', $error );
            return redirect()->to(base_url('Home/edit'));
           
        }
    }
    public function delete($id){

        $model = new usuario_Model();
        $model->delete($id);
        session()->setFlashdata('mensaje', 'Registro Eliminado');
        return redirect()->to(base_url('Home/'));
    }

    public function carrito()
    {
        $data['titulo']='carrito';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/carrito');
        echo view('front/footer_view');
    }
     public function carrito_cliente()
    {
        $data['titulo']='carrito_cliente';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/carrito_cliente');
        echo view('front/footer_view');
    }
    
}



