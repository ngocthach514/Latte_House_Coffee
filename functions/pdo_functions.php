<?php
include_once 'config/config.php';
/**
 * Lấy đối tượng PDO cho kết nối đến CSDL
 * @return PDO đối tượng PDO
 */
function get_pdo_connection() {
    $dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME . ';charset=utf8';

    try {
        $conn = new PDO($dsn, DBUSER, DBPASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        // Xử lý lỗi kết nối
        die('Connection failed: ' . $e->getMessage());
    }
}

/**
 * Thực hiện câu lệnh SQL thao tác dữ liệu (INSERT, UPDATE, DELETE) sử dụng PDO
 * Được ứng dụng nhiều trong các hàm xử lý Signin, các hàm CRUD trong trang admin
 * @param string $sql Câu lệnh SQL
 * @param array $params Mảng giá trị cung cấp cho các tham số của $sql
 * @throws PDOException Ném ngoại lệ nếu có lỗi trong quá trình thực hiện câu lệnh
 */
function execute_sql($sql, $params = []) {
    try {
        // Kết nối đến CSDL
        $conn = get_pdo_connection();
        
        // Chuẩn bị và thực hiện câu lệnh SQL
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        // Lưu ý: Không cần unset($conn) ở đây vì PDO sẽ tự đóng kết nối khi đối tượng được hủy
    } catch (PDOException $e) {
        // Ném lại ngoại lệ để thông báo lỗi và giữ lại thông tin lỗi gốc
        throw $e;
    }
}

/**
 * Thực hiện câu lệnh SQL truy vấn dữ liệu (SELECT) sử dụng PDO
 * Được ứng dụng nhiều khi cần in ra dữ liệu từ CSDL. 
 * Ví dụ như lấy toàn bộ sản phẩm, danh mục từ CSDL
 * @param string $sql Câu lệnh SQL
 * @param array $params Mảng giá trị cung cấp cho các tham số của $sql
 * @return array Mảng các bản ghi
 * @throws PDOException Ném ngoại lệ nếu có lỗi trong quá trình thực hiện câu lệnh
 */
function query_data($sql, $params = []) {
    try {
        // Kết nối đến CSDL
        $conn = get_pdo_connection();
        
        // Chuẩn bị và thực hiện câu lệnh SQL
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        // Lấy mảng kết quả
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    } catch (PDOException $e) {
        // Ném lại ngoại lệ để thông báo lỗi và giữ lại thông tin lỗi gốc
        throw $e;
    }
}

/**
 * Thực hiện câu lệnh SQL truy vấn một bản ghi sử dụng PDO
 * Thường được sử dụng khi cần truy vấn 1 đối tượng trong 1 bảng của CSDL
 * Ví dụ: In ra chi tiết sản phẩm khi người dùng click vào sản phẩm đó
 * @param string $sql Câu lệnh SQL
 * @param array $params Mảng giá trị cung cấp cho các tham số của $sql
 * @return array Mảng chứa bản ghi
 * @throws PDOException Ném ngoại lệ nếu có lỗi trong quá trình thực hiện câu lệnh
 */
function query_one_record($sql, $params = []) {
    try {
        // Kết nối đến CSDL
        $conn = get_pdo_connection();
        
        // Chuẩn bị và thực hiện câu lệnh SQL
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        // Lấy một bản ghi
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        // Ném lại ngoại lệ để thông báo lỗi và giữ lại thông tin lỗi gốc
        throw $e;
    }
}

/**
 * Thực hiện câu lệnh SQL truy vấn một giá trị sử dụng PDO
 * Thường được sử dụng khi cần truy vấn 1 đối tượng trong 1 bảng của CSDL 
 * Tuy nhiên sẽ in ra 1 đối tượng được chỉ định 
 * Ví dụ: In ra chi tiết sản phẩm tại vị trí thứ [n] trong danh sách sản phẩm
 * @param string $sql Câu lệnh SQL
 * @param array $params Mảng giá trị cung cấp cho các tham số của $sql
 * @return mixed Giá trị
 * @throws PDOException Ném ngoại lệ nếu có lỗi trong quá trình thực hiện câu lệnh
 */
function query_single_value($sql, $params = []) {
    try {
        // Kết nối đến CSDL
        $conn = get_pdo_connection();
        
        // Chuẩn bị và thực hiện câu lệnh SQL
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        // Lấy giá trị
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? array_values($row)[0] : null;
    } catch (PDOException $e) {
        // Ném lại ngoại lệ để thông báo lỗi và giữ lại thông tin lỗi gốc
        throw $e;
    }
}