<?php
session_start();
if(isset($_SESSION['unique_id'])){//if user is logged in
    header("location: users.php");

}
?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat(kothopokothon) App</header>
            <form action="#">
                <div class="error-text"></div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Enter new Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                </form>
                <div class="link">Not yet signed up? <a href="#">Signup now</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>