<?php

class mainController
{

    public function index()
    {
        loadView('model.view/dashboard/home');
    }

    public function login()
    {
        loadView('model.view/dashboard/login');
    }

}