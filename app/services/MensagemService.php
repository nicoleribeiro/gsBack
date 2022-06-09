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
            $data = $_POST;

            return Mensagem::insert($data);
        }
        public function update(){

        }
        public function delete(){

        }
    }