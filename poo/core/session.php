<?php
class Session {
    
    static $started=false;
    static $session;

    public static function Start()
    {
        /*
            el key para encriptar la session (1er parametro) debe ser de 24 caracteres
        */
        
        self::$session = new SecureSessionHandler('myexamples', 'arcangel');

        ini_set('session.save_handler', 'files');
        session_set_save_handler(self::$session, true);

        $appPath = dirname(dirname(__FILE__));
        $sessDir = $appPath . '/sessions';
        if (!is_dir($sessDir)){mkdir($sessDir, 0776);}

        session_save_path($sessDir);
        ini_set('session.gc_probability', 1);

        self::$session->start();

        // if (!self::$session->isValid(35)) {
        //     self::$session->forget();
        // }
    }

    public static function Set($key, $value)
    {
        self::$session->put($key, $value);
        // HTTPContext::Set($key, $value);
    }

    public static function Get($key)
    {
        return self::$session->get($key);
        // return HTTPContext::Get($key);
    }

    public static function Destroy()
    {
        self::$session->forget();
        // HTTPContext::Destroy();
    }

}