<?php

class Planta {

    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $imagen;
    private $cuidado;
    private $categoria;
    private $tamanio;


    /**
     * Devuelve el nombre de la planta
     * @return string
     */

     public function nombre_completo():string {
        return $this->nombre;
     }


    /**
     * Devuelve el catalogo completo de plantas
     * @return Planta[] //una array de objetos Planta
     */

     public static function catalogo_completo():array {
       

        $JSON = file_get_contents("datos/catalogo.json");
        $JSONData = json_decode($JSON);


        foreach ($JSONData as $valor) {

                $planta = new self();

                $planta->id = $valor->id;
                $planta->nombre = $valor->nombre;
                $planta->descripcion = $valor->descripcion;
                $planta->precio = $valor->precio;
                $planta->imagen = $valor->imagen;
                $planta->cuidado = $valor->cuidado;
                $planta->categoria = $valor->categoria;
                $planta->tamanio = $valor->tamanio;

                $catalogo[]= $planta;
        }

        return $catalogo;

     }


     /**
      * Devuelve el catalogo de plantas de una categoria en concreto
        * @param string $planta un string con el nombre de la planta
        * @return array //una array de objetos Planta
      */

      public static function catalogo_x_categoria(string $categoria):array {


        $resultado = [];


        $catalogo = self::catalogo_completo();

        foreach ($catalogo as $p){
            if ($p->categoria == $categoria) {
                $resultado[] = $p;
            }
        }
   


     
        return $resultado;


      }


      /**
       * Devuelve el catalogo de plantas por su tamaño
       * @param string $tamanio un string con el tamaño de la planta
       * @return array //una array de objetos Planta
       */
      public static function catalogo_x_tamanio(string $tamanio):array {


        $resultado = [];


        $catalogo = self::catalogo_completo();

        foreach ($catalogo as $t){
            if ($t->tamanio== $tamanio) {
                $resultado[] = $t;
            }
        }
   


     
        return $resultado;


      }


    
      /**
       * Devuelve el catalogo de plantas por su id
       * @param int $id un entero con el id de la planta
       * @return ?Planta devuelve un objeto Planta o null si no existe
       */

       public static function catalogo_x_id(int $idPlanta):?Planta {

        $catalogo = self::catalogo_completo();

            
            foreach ($catalogo as $planta) {
                if ($planta->id == $idPlanta) {
                    return $planta;
                }
            }

            return null;
        
       }



       /**
        * Devuelve el precio de la planta formateado
        */

       public function formatear_precio():string {
        return  number_format($this->precio, 2, ",", ".") . " $";     
       }
        

       /**
        * Devuelve la descripcion de la
        */

       public function descripcion_reducida(int $cantidad = 8):string {

        $texto=$this->descripcion;

        $arrayTexto=explode(" ", $texto);
        if (count($arrayTexto) <= $cantidad) {
            $resultado = $texto;

       }else {
        array_splice($arrayTexto, $cantidad);
            $resultado = implode(" ", $arrayTexto) . "...";
       }

        return $resultado;
       }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
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
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of imagen
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     */
    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of cuidado
     */
    public function getCuidado()
    {
        return $this->cuidado;
    }

    /**
     * Set the value of cuidado
     */
    public function setCuidado($cuidado): self
    {
        $this->cuidado = $cuidado;

        return $this;
    }

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     */
    public function setCategoria($categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of tamanio
     */
    public function getTamanio()
    {
        return $this->tamanio;
    }

    /**
     * Set the value of tamanio
     */
    public function setTamanio($tamanio): self
    {
        $this->tamanio = $tamanio;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}

