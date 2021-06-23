<?php

    class DATABASE_CONNECT
    {
        public $connect = array();

        public function __construct()
        {
            $this->connect[0] = "remotemysql.com";
            $this->connect[1] = "pAsG17rffJ";
            $this->connect[2] = "i3n3IWG5uZ";
            $this->connect[3] = "pAsG17rffJ";
        }

        public function __destruct()
        {
            $this->connect[0] = null;
            $this->connect[1] = null;
            $this->connect[2] = null;
            $this->connect[3] = null;
        }
    }

?>


