<?php
// Khai báo 2 biến số nguyên
$a = 17;
$b = 5;

// 1. Tính phần nguyên (dùng hàm intdiv)
$phan_nguyen = intdiv($a, $b); // Kết quả: 3

// 2. Tính phần dư (dùng toán tử %)
$phan_du = $a % $b; // Kết quả: 2

echo "Phần nguyên của $a / $b là: " . $phan_nguyen . "<br>";
echo "Phần dư của $a / $b là: " . $phan_du;
?>