<?php
    function SolListe(){
        $db->get_results('SELECT * FROM test');
        return ;
    }