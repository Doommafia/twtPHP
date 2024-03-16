<?php include_once 'sidebar.php'; ?>

<div class="posts">
    <div class="textInput">Input your message (150 characters max)
        <div class="textBox">
            <textarea type="text" id="message" name="message" maxlength="175" rows="10" columns = "80"></textarea>
        </div>
    </div>
       <?php include 'messages.php';?>
</div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

:root {
    background: radial-gradient(circle, #0A0A33 36%, #000068 100%);
}

.posts {
    position: absolute !important;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto; 
    width: 70dvh;

}

body {
    font-family: Roboto, sans-serif;
    color: white;
    display: flexbox;
    justify-content: center;
    align-items: center;
}

.textInput {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.textBox {
    width: 600px;
    background-color: white;
    height: 150px;
    border: none;
    border-radius: 10px;
    padding: 10px;
    margin: 10px;
    font-size: 12px;
    font-weight: bold;
    color: #0A0A33;
}

#message{
    border: grey 1px solid;
    border-radius: 10px;
    width: 600px;
    height: 100px;
}

</style>
