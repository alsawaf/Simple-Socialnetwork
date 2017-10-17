<?php

    class Bootstrap{

        private $Controller;
        private $Action;
        private $Request;

        public function __construct($Request){

            $this->Request=$Request;

            if($this->Request['controller']==""){

                $this->Controller='Home';

            }
            else{

                $this->Controller=$this->Request['controller'];

            }

            if($this->Request['action']==''){

                $this->Action='Main';

            }
            else{

                $this->Action = $this->Request['action'];

            }
//            echo $this->Controller.'<br>';
//            echo $this->Action;
    }

        public function CreateController(){

            //check Class
            if(class_exists($this->Controller)){

                $parents = class_parents($this->Controller);

                //check extend

                if(in_array("Controller",$parents)){
                    if(method_exists($this->Controller,$this->Action)){
                        return new $this->Controller($this->Action,$this->Request);
                    }
                    else{
                        //method doesn't exist
                        echo '<h1 style="text-align: center;">action not found</h1>';
                        return;
                    }}

                else {
                        echo '<h1 style="text-align: center;">Controller not found</h1>';
                        return;

                    }}

                else{
                    echo '<h1 style="text-align: center;">Controller class not found</h1>';
                    return;
                }


        }





    }

?>