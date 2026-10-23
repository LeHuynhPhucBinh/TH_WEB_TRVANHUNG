<?php
$a = 2;
$b = -6;
$c = 3;

function giaiPhuongTrinhBacHai($a, $b, $c) {
    echo "Giải phương trình: {$a}x^2 + {$b}x + {$c} = 0<br>";

    // Kiểm tra nếu a = 0 (trở thành phương trình bậc 1)
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                echo "=> Phương trình có vô số nghiệm.<br><br>";
            } else {
                echo "=> Phương trình vô nghiệm.<br><br>";
            }
        } else {
            $x = -$c / $b;
            echo "=> Phương trình là bậc nhất, có 1 nghiệm: x = " . $x . "<br><br>";
        }
    } else {
        // Tính delta (Đã sửa lại cú pháp chuẩn)
        $delta = ($b * $b) - (4 * $a * $c);
        echo "=> Delta = " . $delta . "<br>";

        if ($delta < 0) {
            echo "=> Phương trình vô nghiệm thực.<br><br>";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            echo "=> Phương trình có nghiệm kép: x1 = x2 = " . $x . "<br><br>";
        } else {
            $x1 = round((-$b + sqrt($delta)) / (2 * $a) ,2);
            $x2 = round((-$b - sqrt($delta)) / (2 * $a) ,2);
            echo "=> Phương trình có 2 nghiệm phân biệt:<br>";
            echo "x1 = " . $x1 . "<br>";
            echo "x2 = " . $x2 . "<br><br>";
        }
    }
}

// Gọi hàm để thực thi với các biến đã khai báo ở trên
giaiPhuongTrinhBacHai($a, $b, $c);
?>