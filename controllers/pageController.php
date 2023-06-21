<?php

class pageController
{

    public function index()
    {
        loadView('model.view/dashboard/home');
    }

    public function newpage()
    {
        loadView('model.view/page/newpage');
    }
    public function pages()
    {
        loadView('model.view/page/addpage');
    }
}
