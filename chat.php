<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat(Kothopokothon) App</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="#" alt="">
                    <div class="details">
                        <span>Rakib Enam</span>
                        <p>Active now</p>
                    </div>
                </div>
            </header>
            <div class="chat-box">
            <div class="chat outgoing">
            <div class="details">
                <p>Lorem ipsum</p>
            </div>
             </div>
            <div class="chat incoming">
            <img src="img.jpg" alt="">
             <div class="details">
                    <p>Lorem ipsum</p>
                </div>
                </div>
             
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>

            </form>
            
        </section>
    </div>
    <script src="javasript/chat.js"></script>
</body>
</html>