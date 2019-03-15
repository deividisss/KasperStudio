<?php
class Galerija {
        public $path;
    
     public function __construct(){
           $this->path = __DIR__ . '/images';
        }
        public function setPath($path) {
           
  
           if(substr($path, -1) === '/'){      //atims bruksniuka is direktorijos gala pavadinima
               $path = substr($path, 0, -1);
               
           }
           
           $this->path= $path;
       }
      private function getDirectory($path){ // nuskaito vius folderi esancius failus + private paslep
           return scandir($path);
       }

       public function getImages($extensions = array('jpg', 'png')){   //pajims paveiksliukus kuriu formatai jpg,png
           $images = $this->getDirectory($this->path); // is privacios virsuj esancias funkcijas pasijims paveikslelius 
          
          foreach($images as $index => $image){
              $extension = strtolower(end(explode('.', $image))); // nuootraukas pavadinimas atskir per taska norint suzinot pav formata
          if(!in_array($extension, $extensions)) { // jei galune neatiting jpg ir png formatu nuotrauka paprasciausiai nerodoma
              unset($images[$index]);
          }else{ // o jei formatas atitinka tada vykdoma kita funkcija
              $images[$index] = array(
              'didele nuotrauka' => $this->path.'/' . $image,      // tada indexui pvz: indexui 2 bus priskirtos 2 nuotraukos tuo paciu pavadinimu viena esnti path direktorijoje kita tolimesneje thumbs direktorijoje
               'maza nuotrauka' => $this->path.'/thumbs/' . $image
              
              );
          }
          
          }
          
          
            return (count($images)) ? $images : false;  // suskaiciuoja ar nuotrauku skaicius yra lyginis nes visada tures buti 2+2+2+2... ir jei nuotrauku skaicius yra lyginis tai jas ir atvaizduos
       }


}





?>


