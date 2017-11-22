<?php

class Connection {

    private static $instance = null;

    private function __construct() {
        
    }

// private construction not allows to creat instance
    public function connect() {
        $ketnoi['host'] = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
        $ketnoi['dbname'] = 'sp_ict_group04'; //Đây là tên của Database
        $ketnoi['username'] = 'root'; //Tên sử dụng Database
        $ketnoi['password'] = ''; //Mật khẩu của tên sử dụng Database
        @mysql_connect("{$ketnoi['host']}", "{$ketnoi['username']}", "{$ketnoi['password']}")
                or
                die("Không thể kết nối database");
        @mysql_select_db(
                        "{$ketnoi['dbname']}")
                or
                die("Không thể chọn database");
    }

    public static function getOnlyConnection() {
        if (self::$instance == null) {
            self::$instance = new Connection();
        }

        return self::$instance;
    }
}
?>