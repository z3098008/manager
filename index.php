<?php
    $root_url = 'http://'.$_SERVER['HTTP_HOST'];
    define('ROOT',$root_url);
    define('CONTROLLER','./controller');

    $url = explode('/',$_SERVER["PHP_SELF"]);

    $m_key = array_search('m',$url);
    $a_key = array_search('a',$url);

    function __autoload($class_name)
    {
        require_once CONTROLLER.'/'.$class_name.'.php';
    }
    $className = $url[$m_key+1].'Controller';
    $object = new $className();

    if(!$a_key){
        $object->index();
    }else{
        $action = $url[$a_key+1].$url[$m_key+1];
        $object->$action();
    }