<?php
class Lieu
{
    public function __construct()
    {
    }
    public function index()
    {
        echo "index";
    }
    public function liste()
    {
        echo "liste des Lieux";
    }
    public function get($id)
    {
        echo $id;
    }
}
?>