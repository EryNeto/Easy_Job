<?php

class teste
{
   
    public $v;
    
   public function a() 
    {
       global $v;
        $v = 2;
        return $v;
    }
    
    public function b($v) 
    {
      echo $v;
    }
    
  
}