<?php
$response = [
    "status" => false,
    "detail" => "Not found"
];
if (isset($_POST["phone"])) {
    $json = json_decode(file_get_contents("phone-codes.json"), true);
    foreach ($json as $row) {
        $code = preg_replace("/\D/", "", $_POST["phone"]);
        $row_code = preg_replace("/[+\-()]/", "", $row["mask"]);
        $row_code = preg_replace("/#/", "\d", $row_code);
        if (preg_match("/^$row_code$/", $code)) {
            $response = [
                "status" => true,
                "detail" => $row["name_ru"]
            ];
            break;
        }
    }
}
echo json_encode($response, JSON_UNESCAPED_UNICODE);