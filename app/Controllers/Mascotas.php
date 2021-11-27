<?php

namespace App\Controllers;

use App\Models\MascotasModelo;

class Mascotas extends BaseController
{
    public function index()
    {
        return view('registroMascotas');
    }
    public function registrar(){
        
        $nombre=$this->request->getPost("nombre");
        $foto=$this->request->getPost("foto");
        $edad=$this->request->getPost("edad");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        // se aplican validaciones
        if ($this->validate('formularioMascota')) {
            
            try {

              $modelo=new MascotasModelo();
            
              $datos=array(
                "nombre"=>$nombre,
                "foto"=>$foto,
                "edad"=>$edad,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo
            );

            
            $modelo->insert($datos);

            $mensaje = "Exito agregando mascota ";
            return redirect()->to(site_url('/mascotas/registros'))->with('mensaje',$mensaje);
  

            
               
            } catch (\Exception $error) {
              $mensaje=$error->getMessage();
              return redirect()->to(site_url('/mascotas/registros'))->with('mensaje',$mensaje);
            }

        }else{
          $mensaje=("campos sin llenar");
          return redirect()->to(site_url('/mascotas/registros'))->with('mensaje',$mensaje);
        }
   

    }

    public function buscar(){

      try{

        $modelo = new MascotasModelo();

        $resultado=$modelo->findAll();

        $mascotas=array("mascotas"=>$resultado);
        return view("listaMascotas",$mascotas);

      }catch(\Exception $error){
        $mensaje=$error->getMessage();
            return redirect()->to(site_url('/mascotas/registros'))->with('mensaje',$mensaje);
      }

      
    }
    public function eliminar($id){
       
      try{

        $modelo = new MascotasModelo();

        $modelo->where('id',$id)->delete();

        $mensaje ="Exito eliminando el Registro";
          return redirect()->to(site_url('/mascotas/registros'))->with('mensaje',$mensaje);

      }catch(\Exception $error){
        $mensaje=$error->getMessage();
        return redirect()->to(site_url('/mascotas/registros'))->with('mensaje',$mensaje);

      }
    }

    public function editar($id){
      
      $nombre=$this->request->getPost("nombre");
      $edad=$this->request->getPost("edad");
      

      if($this->validate('formEditarMascota')){
        //intentar conectarme a la bd e insertar datos
        try{

          //instanciar. sacar una copia de la clase
          $modelo = new MascotasModelo();

          //armo el paquete de datos a registrar 
          $datos=array(
            
            "edad"=>$edad,
            "nombre"=>$nombre,
            
        );

          //agrego los datos
          $modelo->update($id,$datos);

          //entrego una respuesta
          $mensaje = "Exito editando el mascota ";
          return redirect()->to(site_url('/mascotas/registros'))->with('mensaje',$mensaje);

        }catch(\Exception $error){
            $mensaje=$error->getMessage();
            return redirect()->to(site_url('/mascotas/registros'))->with('mensaje',$mensaje);
        }
      }else{
        $mensaje=("campos sin llenar");
        return redirect()->to(site_url('/mascotas/registros'))->with('mensaje',$mensaje);
      }
      
      
    }
}