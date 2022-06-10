<?php
    function set_active($route){
        // if(Route::is($route)){
        //     return 'active';
        // }
        return Route::is($route) ? 'active':'';
    }
?>
