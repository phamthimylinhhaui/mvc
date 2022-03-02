<?php
class DB
{
    private static $instance = NULl;
    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
                self::$instance->exec("SET NAMES '{DB_CHARSET}'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}
//DB::getInstance();
////B1: viết truy vấn:
//$sql_select_all="SELECT * FROM users ORDER BY username DESC";// không có param nào
//
////B2: chuẩn bị obj truy vấn:
//$obj_selected_all= $x->prepare($sql_select_all);
//
////B3: (tùy chọn) [option] truyền các gtri thật cho các param trong câu truy vấn nếu có-> bỏ qua vì k có param
//
////B4: Thực thi obj truy vấn, chú ý SELECT chưa tve mảng kqua mong muốn tịa bước này
//$obj_selected_all->execute();// k có bước 3 nên k cần truyền tham số vào execute
//
////B5: lấy mảng kết hợp 2 chiều: CHÚ Ý: CÚ PHÁP TRUY CẬP HẰNG TRONG 1 CLASS GIỐNG VỚI PTTT TĨNH
//$products=$obj_selected_all->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>";
//print_r($products);
//echo "</pre>";
