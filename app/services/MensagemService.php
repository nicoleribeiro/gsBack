<?php

    namespace AgroTech\Services;

    use \AgroTech\Models\Mensagem;

    class MensagemServices{

        public function get($id = null){
            if($id){
                return Mensagem::select($id);
            }else{
                return Mensagem::selectAll();
            }
        }
        public function post(){

        }
        public function update(){

        }
        public function delete(){

        }
    }