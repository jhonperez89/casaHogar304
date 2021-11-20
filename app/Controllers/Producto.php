<?php

namespace App\Controllers;

use App\Models\ProductoModelo;

class Producto extends BaseController
{
    public function index()
    {
        return view('registroProductos');
    }

    public function registrar(){
      $producto=$this->request->getPost("producto");
      $foto=$this->request->getPost("foto");
      $precio=$this->request->getPost("precio");
      $descripcion=$this->request->getPost("descripcion");
      $seleccion=$this->request->getPost("seleccion");

      // se aplican validaciones
      if($this->validate('formularioProducto')){
        //conectarme a la bd e insertar datos
        try{
          //sacar una copia de la clase 
          $modelo=new ProductoModelo();

          //armo el paquete de datos  a registrar

          $datos=array(
            "nombre"=>$producto,
            "foto"=>$foto,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "seleccion"=>$seleccion
        );

          //agrego los datos
          $modelo -> insert($datos);

          //entrego una respuesta

          $mensaje ="Exito agregando el producto";
          return redirect()->to(site_url('/productos/registros'))->with('mensaje',$mensaje);

        }catch(\Exception $error){
          $mensaje=$error->getMessage();
          return redirect()->to(site_url('/productos/registros'))->with('mensaje',$mensaje);
        }
        
      }else{
        $mensaje=("campos sin llenar");
        return redirect()->to(site_url('/productos/registros'))->with('mensaje',$mensaje);
      }

      //2.construir un arreglo asociativo con los datos

    /*  $datos=array(
          "producto"=>$producto,
          "foto"=>$foto,
          "precio"=>$precio,
          "descripcion"=>$descripcion,
          "seleccion"=>$seleccion
      );
      print_r($datos);*/
    }
    public function buscar(){

      try{

        //necesito llamar al modelo
      //crear un objeto de clase modelo
      $modelo = new ProductoModelo();

      //utilizar el modelo para hablar con la BD
      //y buscar todos los datos de la tabla
      $resultado=$modelo->findAll();

      //organizo los datos como un arreglo asociativo
      $productos=array("productos"=>$resultado);
      //cargar la vista entregandole los datos
      return view("listaProductos",$productos);

      }catch(\Exception $error){

        $mensaje=$error->getMessage();
          return redirect()->to(site_url('/productos/registros'))->with('mensaje',$mensaje);
      }

      


      
    }

    public function eliminar($id){
       
      try{

        $modelo=new ProductoModelo();

        $modelo->where('id',$id)->delete();

        $mensaje ="Exito eliminando el producto";
          return redirect()->to(site_url('/productos/registros'))->with('mensaje',$mensaje);

      }catch(\Exception $error){
        $mensaje=$error->getMessage();
        return redirect()->to(site_url('/productos/registros'))->with('mensaje',$mensaje);

      }
    }

    public function editar($id){
     
      $producto=$this->request->getPost("producto");
       $precio=$this->request->getPost("precio");

       if($this->validate('formularioEditar')){
        //conectarme a la bd e insertar datos
        try{
          //sacar una copia de la clase 
          $modelo=new ProductoModelo();

          //armo el paquete de datos  a registrar

          $datos=array(
            "nombre"=>$producto,
            "precio"=>$precio
            
        );

          //agrego los datos
          $modelo -> update($id,$datos);

          //entrego una respuesta

          $mensaje ="Exito editando el producto";
          return redirect()->to(site_url('/productos/registros'))->with('mensaje',$mensaje);

        }catch(\Exception $error){
          $mensaje=$error->getMessage();
          return redirect()->to(site_url('/productos/registros'))->with('mensaje',$mensaje);
        }
        
      }else{
        $mensaje=("campos sin llenar");
        return redirect()->to(site_url('/productos/registros'))->with('mensaje',$mensaje);
      }
     

    }
}