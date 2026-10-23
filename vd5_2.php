<?php
// Thay đổi giá trị của $a để kiểm tra (ví dụ: 10 hoặc 10.5)
$a = 10; 

if (is_int($a)) {
    echo "Biến \$a là số nguyên.";
} elseif (is_float($a)) {
    echo "Biến \$a là số thực.";
} else {
    echo "Biến \$a không phải là kiểu số nguyên hay số thực.";
}
?>