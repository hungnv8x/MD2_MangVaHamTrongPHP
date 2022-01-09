<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .err{
            color: red;
        }
        input{
            margin-left: 40px;
        }
        button{
            margin-left: 40px;
        }
    </style>
</head>
<body>

<?php
function loadRegister($fileName)
{
    $jsonData = file_get_contents($fileName);
    return json_decode($jsonData, true);
}

function saveDataJson($fileName, $name, $email, $phone)
{
    $contact = [
        "name" => $name,
        "email" => $email,
        "phone" => $phone
    ];

    $arrData = loadRegister($fileName);
    $arrData[] = $contact;
    $jsonData = json_encode($arrData);
    file_put_contents($fileName, $jsonData);
}

function checkUser($name)
{
    $arrListUser = loadRegister('data.json');
    foreach ($arrListUser as $user) {
        if ($name == $user["name"]) {
            return true;
        }
    }
    return false;
}

$name = "";
$email = "";
$phone = "";
$errName = "";
$errEmail = "";
$erPhone = "";
$err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $flag = true;
    if (empty($name)) {
        $errName = "Tên đăng nhập không được để trống <br>";
        $flag = false;
    }
    if (empty($email)) {
        $errEmail = "Email không được để trống <br>";

        $flag = false;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errEmail = "Nhập sai định dạng Email <br>";
        $flag = false;
    }
    if (empty($phone)) {
        $erPhone = "Phone không được để trống ";
        $flag = false;
    }
    if ($flag) {
        if (checkUser($name)) {
            $err = "Username đã tồn tại";
        } else {
            saveDataJson("data.json", $name, $email, $phone);
        }
    }
}
?>
<form method="post" style="width: 600px">
    <fieldset>
        <legend> Register Information</legend>
        <p><input name="name" placeholder="User Name"><span class="err"> <?php echo $errName ?></span></p>
        <p><input name="email" placeholder="Email"><span class="err"> <?php echo $errEmail ?></span></p>
        <p><input name="phone" placeholder="Phone Number"><span class="err"> <?php echo $erPhone ?></span></p>
        <button>Register</button>
        <span class="err"><?php echo $err; ?></span>
    </fieldset>
</form>
<?php
$arrListUser = loadRegister("data.json");
?>
<table border="1px" style="border-collapse: collapse ; width: 600px">
    <caption style="background-color: aquamarine"><h3>List User</h3></caption>
    <th>User Name</th>
    <th>Email</th>
    <th>Phone</th>
    <?php foreach ($arrListUser as $user) { ?>
        <tr>
            <td><?php echo $user["name"]; ?></td>
            <td><?php echo $user["email"]; ?></td>
            <td><?php echo $user["phone"]; ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>