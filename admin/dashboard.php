<html>
    <head>
<?php include('../config.php')?>
<?php include(ROOT_PATH . '/admin/admin_function.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<link rel="stylesheet" href="static/css/admin_styling.css">
<title>admin | dashboard </title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="<?php echo BASE_URL .'admin/dashboard.php'?>">
            <h1>Life Blog -admin</h1>
</a>
        </div>
        <?php if(isset($_SESSION['user'])): ?>
            <div class="user-info">
                <span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp;
                <a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout-btn">Logout</a>
    </div>
    <?php endif; ?>
    </div>

    <div class="container dashboard">
        <h1>welcome</h1>
        <div class="stats">
            <a href="users.php" class="first">
                <span>43</span> <br>
                <span>newly registered user</span>
                </a>
        <a href="posts.php">
            <span>43</span> <br>
            <span>published posts</span>
            </a>
            <a>
                <span>43</span> <br>
                <span>published comments</span>
                </a>
                </div>
                <br><br><br>
                <div class="buttons">
                    <a href="user.php">Add users</a>
                    <a href="posts.php">add posts</a>
                    </div>
    </div>
</body>
</html>