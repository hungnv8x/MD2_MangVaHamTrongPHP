<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<?php
$customerList = [
    "1" => [
        "ten" => "Mai Văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà Nội",
        "anh" => "images/img1.jpeg"
    ],
    "2" => [
        "ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Bắc Giang",
        "anh" => "images/img2.jpeg"
    ],
    "3" => [
        "ten" => "Nguyễn Thái Hòa",
        "ngaysinh" => "1983-08-21",
        "diachi" => "Nam Định",
        "anh" => "images/img3.jpeg"
    ],
    "4" => [
        "ten" => "Trần Đăng Khoa",
        "ngaysinh" => "1983-08-22",
        "diachi" => "Hà Tây",
        "anh" => "images/img4.jpeg"
    ],
    "5" => [
        "ten" => "Nguyễn Đình Thi",
        "ngaysinh" => "1983-08-17",
        "diachi" => "Hà Nội",
        "anh" => "images/img5.jpeg"
    ]
];
?>
<form method="GET" style="text-align: center">
    Chọn ngày sinh từ: <input id="from" type="date" name="from" placeholder="yyyy/mm/dd"
                              value=""/>
    đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd"
                value=""/>
    <input type="submit" id="submit" value="Lọc"/>
</form>

<?php
function searchByDate($customers,$fromDate,$toDate){
    if (empty($fromDate) || empty($toDate)){
        return $customers;
    }else{
        $filterCustomer =[];
        foreach ($customers as $customer ){
            if (strtotime($customer["ngaysinh"]) <strtotime($fromDate)){
                continue;
            }
            if (strtotime($customer["ngaysinh"]) > strtotime($toDate)){
                continue;
            }
            $filterCustomer[]=$customer;
        }
        return $filterCustomer;
    }
}

if ($_SERVER["REQUEST_METHOD"] =="GET"){
    $fromDate = $_GET["from"];
    $toDate = $_GET["to"];
}

$filterCustomer = searchByDate($customerList,$fromDate,$toDate)

?>
<table border="1px" >
    <caption><h1 style="background: aquamarine">Danh sách khách hàng</h1></caption>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($filterCustomer as $key => $value){ ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value['ten'] ?></td>
            <td><?php echo $value['ngaysinh'] ?></td>
            <td><?php echo $value['diachi'] ?></td>
            <td><img src="<?php echo $value['anh'] ?>" alt="" width="50" height="60"></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
