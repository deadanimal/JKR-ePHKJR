<form method="POST" action="/pengguna-login">
    @csrf
    <input type="text" name="nric" placeholder="nric">
    <input class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="password"/>
    <button type="submit" name="submit">Log Masuk</button>    
</form>
