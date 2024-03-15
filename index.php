<div class="posts">

    <div class="textInput">Input your message (150 characters max)
        <div class="textBox">
            <textarea type="text" id="message" name="message" maxlength="175" rows="10" columns = "80"></textarea>

        </div>
    </div>

    <div class="card">
        <a class="cardUser" href="#">Jeffrey Jefferson (UID #2940283)</a>
        <p class="cardText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa velit corrupti doloremque maxime odio soluta alias odit ipsam. Natus totam voluptate in architecto deleniti suscipit voluptas libero ad iusto. Laborum at, officia voluptatibus sit rem optio unde laboriosam quo sapiente, error ut repudiandae tempore ratione ullam. Non voluptatem assumenda neque dolor a eaque saepe quam ullam perferendis explicabo dolorum maxime illo, aut perspiciatis doloremque eligendi sapiente placeat. Quaerat nam itaque blanditiis sint quia totam qui commodi nostrum odit, ex temporibus. Consequatur temporibus, voluptatum at distinctio dolorem alias deserunt delectus. Est necessitatibus sint explicabo veniam veritatis esse omnis possimus iste repellendus dolore inventore quaerat maiores accusamus porro, eaque quas rem? Perspiciatis dolorem ab inventore illum quos vitae libero cumque nemo, voluptatum quis. Ullam, amet! Voluptatem praesentium temporibus hic repellendus, esse doloremque asperiores adipisci iste ipsa maiores veniam aspernatur, officiis reprehenderit ipsum incidunt rem impedit harum tempore ad sunt quo numquam.</p>
    </div>
</div>  


<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

:root {
    background: radial-gradient(circle, #0A0A33 36%, #000068 100%);
}

.posts {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px;
    margin: 10px;
}

body {
    font-family: Roboto, sans-serif;
    color: white;
    display: flexbox;
    justify-content: center;
    align-items: center;
}

.card {
    width: 100vh;
    max-width: 600px; /* Limit card width for readability */
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    display: flexbox;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    margin: 20px;
}

.cardUser {
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
    color: #0A0A33;
}

.cardText {
    color: #000068;
    font-size: 15px;
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
