<form action='brad45.php' method="get"> <!--開發階段用get 比較好除錯-->
        Account: <input name="account"/><br/>
        password: <input type="password" name="password"/><br/>
        Name: <input name="name"/><br/>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br/>
        
        City:
        <input type="radio" id="Taipei" name="city" value="Taipei" checked>
        <label for="Taipei">Taipei</label>
        <input type="radio" id="Taichung" name="city" value="Taichung">
        <label for="Taichung">Taichung</label>
        <input type="radio" id="Kaoshiung" name="city" value="Kaoshiung">
        <label for="Kaoshiung">Kaoshiung</label><br>

        <!-- value的意義：讓後端辨識選到啥（否則都是“on”） -->

        
        
        
        <hr/>
        <input type="checkbox" name="remember[]" id="remember" value="rembermer"/>
        <label for="remember">Remember me</label>
        <input type="checkbox" name="remember[]" id="donnotremember" value="donotrembermer"/>
        <label for="donnotremember">do not Remember me</label>
        <input type="checkbox" name="remember[]" id="seeya" value="seeya"/>
        <label for="seeya">seeya</label>
        <input type="submit" value="Register"/>

        
   
</form>