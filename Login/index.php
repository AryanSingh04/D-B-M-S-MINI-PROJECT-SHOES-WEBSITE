<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
    <title>Sign Up | Log In</title>
</head>
<body>
   <div class="container">
    <div class="card">
        <div class="card-h">
            <div class="toggle"></div>
            <h3 class="type">LOG IN</h3>
            <h3 class="type">SIGN UP</h3>
        </div>
        <div class="card-m">
            <div class="card-rotate" id="card-rotate">
                <form class="card-m-log" action="config.php" method="post">
                    <h2>LOG IN</h2>
                
                    <div class="input-box">
                        <label for="einput">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z"></path></svg>
                            <input type="text" name="email" placeholder="E-mail" id="einput" required>
                        </label>
                    </div>
                    <div class="input-box">
                        <label for="pinput">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18 8H20C20.5523 8 21 8.44772 21 9V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V9C3 8.44772 3.44772 8 4 8H6V7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7V8ZM11 15.7324V18H13V15.7324C13.5978 15.3866 14 14.7403 14 14C14 12.8954 13.1046 12 12 12C10.8954 12 10 12.8954 10 14C10 14.7403 10.4022 15.3866 11 15.7324ZM16 8V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V8H16Z"></path></svg>
                            <input type="password" name="pass" placeholder="Password" id="pinput" required>
                        </label>
                    </div>
                    <select name="role" id="" required >
                        <option value="User">User</option>
                        <option value="Admin">Admin</option>
                    </select>
                    <button type="submit"><i class='ri-login-circle-line'></i>LOG IN</button>
                    
                
                </form>
                <form class="card-m-sign" action="register.php" method="post">
                    <h2>SIGN UP</h2>
                    <div class="input-box">
                        <label for="ninput">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z"></path></svg>
                            <input type="text" name="name" placeholder="Name" id="ninput" required>
                        </label>
                    </div>
                    <div class="input-box">
                        <label for="einput">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z"></path></svg>
                            <input type="text" name="email" placeholder="E-mail" id="einput" required>
                        </label>
                    </div>
                    <div class="input-box">
                        <label for="pinput">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18 8H20C20.5523 8 21 8.44772 21 9V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V9C3 8.44772 3.44772 8 4 8H6V7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7V8ZM11 15.7324V18H13V15.7324C13.5978 15.3866 14 14.7403 14 14C14 12.8954 13.1046 12 12 12C10.8954 12 10 12.8954 10 14C10 14.7403 10.4022 15.3866 11 15.7324ZM16 8V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V8H16Z"></path></svg>
                            <input type="password" name="pass" placeholder="Password" id="pinput" required>
                        </label>
                    </div>
                    <div class="input-box">
                        <label for="pinput">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18 8H20C20.5523 8 21 8.44772 21 9V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V9C3 8.44772 3.44772 8 4 8H6V7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7V8ZM11 15.7324V18H13V15.7324C13.5978 15.3866 14 14.7403 14 14C14 12.8954 13.1046 12 12 12C10.8954 12 10 12.8954 10 14C10 14.7403 10.4022 15.3866 11 15.7324ZM16 8V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V8H16Z"></path></svg>
                            <input type="password" name="cnfp" placeholder="Confrim Password" id="pinput" required>
                        </label>
                    </div>
                    <select name="role" id="">
                        <option value="User">User</option>
                        <option value="Admin">Admin</option>
                    </select>
                    <button type="submit"><i class='ri-user-add-fill'></i> SIGN UP</button>
                
                </form>
            </div>
        </div>
    </div>
   </div>
   <script src="script.js"></script>
</body>
</html>