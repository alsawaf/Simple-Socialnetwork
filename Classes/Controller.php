<?php

    abstract class Contoller{

        protected $Request;
        protected $Action;

        public function __construct($Request,$Action){

            $this->Request=$Request;
            $this->Action=$Action;

        }

        public function ExecuteAction(){

            return $this->{$this->Action}();


        }

    }


?>