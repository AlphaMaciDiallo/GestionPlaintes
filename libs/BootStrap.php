<?php
class BootStrap
{
    public function __construct()
    {
        if(isset($_GET['url']))
        {
            //echo $_GET['url'];
            $url = explode("/", $_GET['url']); //Recuperer l'url et le mettre dans un tableau et / est le delimiteur
            //echo $url[0];
            if(isset($url[0]))
            {
                $controller_file = 'src/controller/'.$url[0].'Controller.php';
                if(file_exists($controller_file))
                {
                    require_once $controller_file;
                    $controller = $url[0];
                    $controller_object = new $controller();
                    if(isset($url[1]))
                    {
                        if($url[1] == "")
                        {
                            if(method_exists($controller_object, "index")){
                                $controller_object->index();
                            }else{
                                die("La methode index n'existe pas dans ".$url[0]);
                            }
                        }else{
                            if(method_exists($controller_object, $url[1])){
                                $m = $url[1];
                                if(isset($url[2])){
                                    $controller_object->$m($url[2]);
                                }else{
                                    $controller_object->$m();
                                }
                                //$controller_object->$m();
                            }else{
                                die("La methode ".$url[1]." n'existe pas dans ".$url[0]);
                            }
                        }
                    }else{
                        if(method_exists($controller_object, "index")){
                            $controller_object->index();
                        }else{
                            die("La methode index n'existe pas dans ".$url[0]);
                        }
                    }
                }else{
                    die('Le Controller <b>'.$url[0].'Controller.php</b>, non cree');
                }
            }
        } else {
            require_once 'src/controller/WelcomeController.php';
            new Welcome(); //appel du constructreur de la classe welcome
        }
    }
}
?>