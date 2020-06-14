<form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">User name:</label>
        <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Password:</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button type="submit">Login</button>
</form>
