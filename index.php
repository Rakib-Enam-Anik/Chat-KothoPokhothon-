<?php
session_start();
if(isset($_SESSION['unique_id'])){//if user is logged in
    header("location: users.php");

}
?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat(kothopokothon) App</header>
            <form action="#">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name">
                    </div>
                    </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field">
                        <input type="submit" value="Continue to Chat">
                    </div>
                </form>
                <div class="link">Already signed up? <a href="#">Login now</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    
</body>
</html>