<?php

namespace Agenda;

class Page {

    public static function view(string $view, array $dados)
    {
        $fileHtml = file_get_contents('../view/' . $view . '.html');
        $htmlRplace = [];
        $htmlRplaceValues = [];
        foreach ($dados as $dado) {
            foreach ($dado as $key => $value) {
                $pos = strpos($fileHtml,'%' . $key . '%');
                if ($pos > 0) {
                    $htmlRplace[] = '%' . $key . '%';
                    $htmlRplaceValues[] = $value;
                }
            }
        }
        echo str_replace($htmlRplace, $htmlRplaceValues, $fileHtml);
    }
}