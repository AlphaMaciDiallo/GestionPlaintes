<?php
class View 
{
    public function load()
    {
        $num = funct_num_args(); //prermet de dire le nombre de param passe a l'appel de load
        $args = funct_get_args();
        switch ($num) {
            case 1:
                require_once 'src/view/'.$args[0].'.php';
                break;
            
            case 2:
                $datas = $args[1];
                require_once 'src/view/'.$args[0].'.php';
                break;
        }
    }
}
?>