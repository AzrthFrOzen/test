<?php

namespace App\Controllers;

use Controller;

class HomeController extends \Libs\Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {

        require_once __DIR__ . '/../views/home/index.php';

    }

    public function suma($param = null)
    {
        if ($param == null) {
            $number1 = (isset($_POST['number1']) ? $_POST['number1'] : 0);
            $number2 = (isset($_POST['number2']) ? $_POST['number2'] : 0);
        }
        else
        {
            $number1 = (isset($param[0]) ? $param[0] : 0);
            $number2 = (isset($param[1]) ? $param[1] : 0);
        }
        $rpta = $number1 + $number2;

        require_once __DIR__ . '/../views/home/suma.php';
    }

    public function resta($param = null)
    {
        if ($param == null) {
            $number1 = (isset($_POST['number1']) ? $_POST['number1'] : 0);
            $number2 = (isset($_POST['number2']) ? $_POST['number2'] : 0);
        } else {
            $number1 = (isset($param[0]) ? $param[0] : 0);
            $number2 = (isset($param[1]) ? $param[1] : 0);
        }
        $rpta = $number1 - $number2;

        require_once __DIR__ . '/../views/home/resta.php';
    }

    public function multiplicacion($param = null)
    {
        if ($param == null) {
            $number1 = (isset($_POST['number1']) ? $_POST['number1'] : 0);
            $number2 = (isset($_POST['number2']) ? $_POST['number2'] : 0);
        } else {
            $number1 = (isset($param[0]) ? $param[0] : 0);
            $number2 = (isset($param[1]) ? $param[1] : 0);
        }
        $rpta = $number1 * $number2;

        require_once __DIR__ . '/../views/home/multiplicacion.php';
    }

    public function division($param = null)
    {
        if ($param == null) {
            $number1 = (isset($_POST['number1']) ? $_POST['number1'] : 0);
            $number2 = (isset($_POST['number2']) ? $_POST['number2'] : 0);
        } else {
            $number1 = (isset($param[0]) ? $param[0] : 0);
            $number2 = (isset($param[1]) ? $param[1] : 0);
        }
        if ($number2 == 0) {
            $rpta = 'No se puede realizar la operación.';
        }
        else
        {
            $rpta = $number1 / $number2;
        }
        require_once __DIR__ . '/../views/home/division.php';
    }

    public function isimple($param = null)
    {
        if ($param == null) {
            $capital = (isset($_POST['capital']) ? $_POST['capital'] : 0);
            $tasa = (isset($_POST['tasa']) ? $_POST['tasa'] : 0);
            $tiempo = (isset($_POST['tiempo']) ? $_POST['tiempo'] : 0);
        } else {
            $capital = (isset($param[0]) ? $param[0] : 0);
            $tasa = (isset($param[1]) ? $param[1] : 0);
            $tiempo = (isset($param[2]) ? $param[2] : 0);
        }
        $rpta = $capital * $tasa * $tiempo;

        require_once __DIR__ .  '/../views/home/isimple.php';
    }

    public function icompuesto($param = null)
    {
        if ($param == null) {
            $capini = (isset($_POST['capini']) ? $_POST['capini'] : 0);
            $tasainteres = (isset($_POST['tasainteres']) ? $_POST['tasainteres'] : 0);
            $periodo = (isset($_POST['periodo']) ? $_POST['periodo'] : 0);
        } else {
            $capini = (isset($param[0]) ? $param[0] : 0);
            $tasainteres = (isset($param[1]) ? $param[1] : 0);
            $periodo = (isset($param[2]) ? $param[2] : 0);
        }
        $rpta = $capini * pow((1 + ($tasainteres/100)), $periodo);

        require_once __DIR__ .  '/../views/home/icomp.php';
    }
}
