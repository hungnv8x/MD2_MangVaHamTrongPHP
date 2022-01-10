<?php
$arr=[];
for ($i = 0; $i <100 ;$i++){
    $arr[$i] = rand(1,100);
}
function getValueArr($arr,$index){
    return $arr[$index];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input name="index" placeholder="Nhap gia tri index cua phan tu can xem">
    <button>Search</button>
</form>
<?php
echo "<pre>";
print_r($arr);
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $index = $_REQUEST["index"];
    try {
        if ($index >= 0 && $index <= 100){
            echo getValueArr($arr,$index);
        }else{
            throw new Exception("Chi so nhap vao khong hop le");
        }
    }catch (Exception $exception){
        echo $exception ->getMessage();
    }
}
?>
</body>
</html>
