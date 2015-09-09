<?php

use Prototypemvc\Core\Controller;
use Prototypemvc\Core\View;

class welcome extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        View::load('welcome/view/index');
    }
}
