<?php
//tạo mảng kết hợp chứa thông tin sản phẩm
$products = [
    [
        "name" => "Laptop Dell",
        "price" => 25000000,
        "quantity" => 3
    ],
    [
        "name" => "Điện thoại iPhone 18",
        "price" => 22000000,
        "quantity" => 5
    ],
    [
        "name" => "Tai nghe Bluetooth",
        "price" => 1500000,
        "quantity" => 10
    ]
];
//hàm tính tổng giá trị của tất cả sản phẩm
function calculateTotalValue($productList) {
    $total = 0;
    foreach ($productList as $product) {
        $total += $product['price'] * $product['quantity'];
    }
    return $total;
}
//hiển thị thông tin tất cả sản phẩm
echo "<h3>Danh sách sản phẩm:</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Giá (VNĐ)</th>
        <th>Số lượng</th>
        <th>Thành tiền (VNĐ)</th>
      </tr>";

$stt = 1;
foreach ($products as $product) {
    $subtotal = $product['price'] * $product['quantity'];
    echo "<tr>";
    echo "<td>" . $stt++ . "</td>";
    echo "<td>" . $product['name'] . "</td>";
    echo "<td>" . number_format($product['price']) . "</td>";
    echo "<td>" . $product['quantity'] . "</td>";
    echo "<td>" . number_format($subtotal) . "</td>";
    echo "</tr>";
}
echo "</table>";
//hiển thị tổng giá trị đơn hàng
$totalValue = calculateTotalValue($products);
echo "<br><strong>Tổng giá trị tất cả sản phẩm trong kho: " . number_format($totalValue) . " VNĐ</strong>";
?>