<?php

    class Bootstrap{

        private $Controller;
        private $Action;
        private $Request;

        public function __construct($Request){

            $this->Request=$Request;
            if($this->Request['Controller']==''){

                $this->Controller='Home';

            }
            else{

                $this->Controller=$this->Request['Controller'];

            }
            
            if($this->Request['Action']==''){

                $this->Action='Main';

            }
            else{

                $this->Action = $this->Request['Action'];

            }
        }

    }

?>