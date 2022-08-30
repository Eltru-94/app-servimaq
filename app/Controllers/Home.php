<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }

    public function nosotros()
    {
        return view('pages/nosotros');
    }

    public function maquinas()
    {
        return view('pages/maquinas');
    }

    public function respuestos()
    {
        return view('pages/repuestos');

        
    }

    public function sugerencias()
    {
        return view('pages/sugerencias');

        
    }


    public function maquinas_recta()
    {

        //print("aaaaaa");
        return view('pages/productos/maquinas/recta');

        
    }

    public function maquinas_overlok()
    {

        //print("aaaaaa");
        return view('pages/productos/maquinas/overlok');

        
    }

    public function maquinas_recubridora()
    {

       
        return view('pages/productos/maquinas/recubridora');

        
    }


    public function maquinas_especiales()
    {

       
        return view('pages/productos/maquinas/especiales');

        
    }


    public function maquinas_domesticas()
    {

       
        return view('pages/productos/maquinas/domesticas');

        
    }

    public function maquinas_bordadoras()
    {

       
        return view('pages/productos/maquinas/bordadoras');

        
    }

    public function maquinas_cortadoras()
    {

       
        return view('pages/productos/maquinas/cortadoras');

        
    }




    //////////////////////////


    public function repuestos_recta()
    {

        //print("aaaaaa");
        return view('pages/productos/repuestos/recta');

        
    }

    public function repuestos_overlok()
    {

        //print("aaaaaa");
        return view('pages/productos/repuestos/overlok');

        
    }

    public function repuestos_recubridora()
    {

       
        return view('pages/productos/repuestos/recubridora');

        
    }


    public function repuestos_especiales()
    {

       
        return view('pages/productos/repuestos/especiales');

        
    }


    public function repuestos_domesticas()
    {

       
        return view('pages/productos/repuestos/domesticas');

        
    }

    public function repuestos_bordadoras()
    {

       
        return view('pages/productos/repuestos/bordadoras');

        
    }

    public function repuestos_cortadoras()
    {

       
        return view('pages/productos/repuestos/cortadoras');

        
    }

    public function insumos()
    {

       
        return view('pages/productos/insumos/insumos');

        
    }
    
    
    
    





    





}
