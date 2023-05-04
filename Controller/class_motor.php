<?php
    class motor{

        protected      $numeracao_motor;
        protected      $descricao_motor;
        protected      $base;
        

      
        public function getnumeracao_motor(){
            return $this-> numeracao_motor;
        }
        public function setnumeracao_motor($numeracao_motor){
            $this-> numeracao_motor = $numeracao_motor;
        }

        public function getdescricao_motor(){
            return $this-> descricao_motor;
        }
        public function setdescricao_motor($descricao_motor){
            $this-> descricao_motor = $descricao_motor;
        }

        public function getbase(){
            return $this-> base;
        }
        public function setbase($base){
            $this-> base = $base;
        }


    }



?>