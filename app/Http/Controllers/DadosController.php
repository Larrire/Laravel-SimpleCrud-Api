<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosController extends Controller
{
    public function dados(){
      $dados = [
        array(
          'id' => 1,
          'title' => 'Teste um'
        ),
        array(
          'id' => 2,
          'title' => 'Teste dois'
        ),
        array(
          'id' => 3,
          'title' => 'Teste três'
        ),
        array(
          'id' => 1,
          'title' => 'Teste um'
        ),
        array(
          'id' => 2,
          'title' => 'Teste dois'
        ),
        array(
          'id' => 3,
          'title' => 'Teste três'
        ),
        array(
          'id' => 1,
          'title' => 'Teste um'
        ),
        array(
          'id' => 2,
          'title' => 'Teste dois'
        ),
        array(
          'id' => 3,
          'title' => 'Teste três'
        ),
        array(
          'id' => 1,
          'title' => 'Teste um'
        ),
        array(
          'id' => 2,
          'title' => 'Teste dois'
        ),
        array(
          'id' => 3,
          'title' => 'Teste três'
        ),
      ];
      echo json_encode($dados);
      // echo json_encode([]);
    }
}
