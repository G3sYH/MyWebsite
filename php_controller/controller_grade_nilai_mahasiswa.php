<?php
function hitungNilai($nilai) {
    if ($nilai < 0 || $nilai > 100) {
        return [
            "grade" => "-",
            "status" => "Nilai tidak valid"
        ];
    }

    if ($nilai >= 85) {
        return ["grade" => "A", "status" => "LULUS"];
    } elseif ($nilai >= 75) {
        return ["grade" => "B", "status" => "LULUS"];
    } elseif ($nilai >= 65) {
        return ["grade" => "C", "status" => "LULUS"];
    } elseif ($nilai >= 45) {
        return ["grade" => "D", "status" => "LULUS"];
    } else {
        return ["grade" => "E", "status" => "TIDAK LULUS"];
    }
}