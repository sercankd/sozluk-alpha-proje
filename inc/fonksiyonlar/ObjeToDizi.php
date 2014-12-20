<?php 
function ObjedenDiziye( $obje ){
    if( !is_object( $obje ) && !is_array( $obje ) ){
            return $obje;
        }
    if( is_object( $obje ) ){
            $obje = get_object_vars( $obje );
        }
    return array_map( 'ObjedenDiziye', $obje );
}
?>