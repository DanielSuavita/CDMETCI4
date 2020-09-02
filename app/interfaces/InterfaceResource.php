<?php namespace App\Interfaces;

    interface InterfaceResource{

        public function index();
        public function new();
        public function create();
        public function showAll();
        public function show($id = null);
        public function edit($id = null);
        public function update($id = null);
        public function delete($id = null);
    }
    
?>