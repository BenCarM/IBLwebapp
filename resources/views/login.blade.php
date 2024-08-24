<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login</h1>
<form action="">
    
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        @error('email')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Login</button>
</form>
</body>
</html>