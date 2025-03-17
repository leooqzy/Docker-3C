<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Series extends Controller
{
    public function ListarSeries()
    {

        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }

        $html .= '</ul>';

        echo $html;
    }
}
