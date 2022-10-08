<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="text" name="icPengguna" placeholder="nric">
    <input class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="password"/>
    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log Masuk</button>    
</form>
