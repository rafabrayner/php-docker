<?php

  namespace Classes;

  class Triangulo extends Figura
  {
    
    function mostrarArea()
    {
      echo (($this->x * $this->y) / 2 );
    }
  }
?>