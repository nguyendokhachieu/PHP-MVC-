<?php require_once './views/header.php'; ?>
<div class="content">
    <form action="" method="POST" name="loginForm" id="loginForm">
        <div class="row username-input">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" />
        </div>
        <div class="row password-input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
        </div>
        <div class="row">
            <input type="submit" name="submit" id="submit" value="Đăng nhập" />
        </div>
    </form>
</div>
<?php require_once './views/footer.php'; ?>
