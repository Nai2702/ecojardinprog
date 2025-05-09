<?php

class Pagina{
    private $nombre;
    private $titulo;


/**
 * valida la pagina y devuelve un objeto con los datos de la misma
 * @param string $pagina un string con el nombre de la pagina
 * @return Pagina un objeto de la clase Pagina con los datos de la pagina
 */

 public static function validar_pagina(?string $identificador){


    //se obtienen los datos de las paginas desde el archivo json
    $JSON = file_get_contents("datos/paginas.json");
    $paginasData = json_decode($JSON);

    
    //se recorre el json 
    foreach ($paginasData as $pagina) {
        //se busca la pagina que coincide con el nombre de la pagina
        if($pagina->nombre == $identificador){
            //verificamos si la pagina existe y si es activa
            if($pagina->activa){
                //verificamos si la pagina no es restringida
                if($pagina->restringida){

                    
                $paginaNoDisponible = new self();

                $paginaNoDisponible->nombre = "403";
                $paginaNoDisponible->titulo = "Página restringida";
              
                
                return $paginaNoDisponible;



                }else{
                    //devuelvo los datos de la pagina
                    $objPagina = new self();

                    $objPagina->nombre = $pagina->nombre;
                    $objPagina->titulo = $pagina->titulo;
                   
                    
                    return $objPagina;
                   
                }


            }else{
                //decuelvo la pagina no disponible
                $paginaNoDisponible = new self();

                $paginaNoDisponible->nombre = "pagina_no_disponible";
                $paginaNoDisponible->titulo = "Página no Disponible";
           
                
                return $paginaNoDisponible;
            }

            
          
        }
            
       
    }
   
    //si no se encuentra la pagina devuelvo la pagina 404
    $pagina404 = new self();

    $pagina404->nombre = "404";
    $pagina404->titulo = "Página no Encontrada";
   

    return $pagina404;
 }



    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

}










?>