<form action='brad42-1.php' method="post" enctype="multipart/form-data"> <!--用post方式傳遞-->
        Account: <input name="account"/><br/>;
        password: <input type="password" name="password"/><br/>;
        Name: <input name="name"/><br/>;
        Icon:<input type="file" name="icon"/><br/>;
    <input type="submit" value="Register"/>

    <!-- 點下送出，會產生url，再由browser對後端提出request;
    http response; -->
</form>