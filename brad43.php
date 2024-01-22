<?php
    if (isset($_REQUEST['account'])) { 
       $account = $_REQUEST['account']; 
       $passwd = $_REQUEST['password'];
    
       $sql = ' select id, account, passwd, name from member where account = ?';
       //因為prepare要搭配欄位，不要用*
       //where account= ? =>避免隱碼攻擊
       $mysqli = new mysqli('localhost', 'root', '','ispan', 3306);
       $mysqli ->  set_charset('utf8');
       $stmt = $mysqli -> prepare($sql);
       $stmt->bind_param('s', $account); //'s' 代表參數的型別是字串，而 $account 則是要傳入的實際值。
       $stmt->execute();
       $stmt-> store_result(); //儲存後才能綁定
       if ($stmt->num_rows > 0) { //如果有撈到資料
            $stmt->bind_result($id, $account, $hashpasswd, $name); //要換成hashpasswd!(才能比對)
            $stmt->fetch(); //合理情況下，只會撈到一比（與primary key有關）
            if (password_verify($passwd, $hashpasswd)) {
                header('location:main.php');
            } else {
                echo "Login Failed";
            }
        }
    }
?>


<meta charset="utf-8"/> <!--copy from brad41-->
<h1>login</h1>

<form method="post"> 
        Account: <input name="account"/><br/>
        password: <input type="password" name="password"/><br/>
         <input type="submit" value="Register"/>

    <!-- 點下送出，會產生url，再由browser對後端提出request;
    http response; -->
</form>