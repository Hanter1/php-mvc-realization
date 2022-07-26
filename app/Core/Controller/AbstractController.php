<?php

namespace App\Core\Controller;

use App\Core\Model\AbstractModel;
use App\Core\View\HtmlView;
use App\Core\View\Interfaces\ViewInterface;

abstract class AbstractController
{
    protected AbstractModel $model;
    protected ViewInterface $view;

    public function __construct()
    {
        $this->view = new HtmlView();
    }
    abstract public function index(): void;
}