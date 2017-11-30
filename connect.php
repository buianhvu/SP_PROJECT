<?php
class Connection {

    private static $instance = null;

    private function __construct() {
        
    }

// private construction not allows to creat instance
    public function connect() {
        $ketnoi['host'] = 'mysql.hostinger.vn'; //Tên server, nếu dùng hosting free thì cần thay đổi
        $ketnoi['dbname'] = 'u882635201_xyz'; //Đây là tên của Database
        $ketnoi['username'] = 'u882635201_xyz'; //Tên sử dụng Database
        $ketnoi['password'] = '123456'; //Mật khẩu của tên sử dụng Database
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
    public static function check_login(){
        if(isset($_SESSION['username']) && isset($_SESSION['password']))
            return true;
        return false;
    }
}
?>

