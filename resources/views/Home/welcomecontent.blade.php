

<section>
    <header>
        <h2> <a href="#" class="logo" ><img src="images/logo.png" ></a></h2>
        <div class="navigation">
            <a href="3" >Home</a>
            <a href="3" >About</a>
            <a href="3" >Contact Us</a>
        </div>
    </header>
    <div class="content">
        <div class="info">
            <h2> BulBeni </h2>
            <p>
                This is a website that you can publish your lost property to find them,
                or if you find derelict you can upload this website to find them.
            </p>
            <a href="#" class="info-btn">More Info</a>
        </div>
    </div>
    <div class="buttons">
        <a href="#" class = "info-btn">I have lost something</a>
        <a href="#" class = "info-btn">I have find something</a>
    </div>
    <div class="media-icons">
        <a href="#" <i class="fa-brands fa-facebook"></i></a>
        <a href="#" <i class="fa-brands fa-twitter"></i></a>
        <a href="#" <i class="fa-brands fa-instagram"></i></a>
    </div>



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;800&family=Shantell+Sans:wght@300&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins",sans-serif;

}

section {
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-direction:column;
    justify-content: flex-start;
    background-size: cover;
    background-position: center;
    /*background-color: aqua;*/
}

header {
    position: relative;
    top: 0;
    width: 100%;
    padding: 30px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
header logo {
    position: relative;
    color: #000;
    font-size: 30px;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 1px;

}
img {
    max-width: 80px;

}

header .navigation a {
    color: #000;
    background: #fff;
    text-decoration: none;
    font-weight: 500;
    letter-spacing: 1px;
    padding: 2px 15px;
    border-radius: 20px;
    transition-property: background;
}

header .navigation a:no(:last-child){
    margin-right: 30px;
}

header.navigation a:hover{
    background: #fff;
}
.content{
    max-width: 650px;
    margin: 60px 100px;
}
.content .info h2{
    color: #226A80;
    font-size: 55px;
    font-weight: 800;
    letter-spacing: 2px;
    line-height:60px;
    margin-bottom: 30px;
}
.content .info p {
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 40px;
}

.content .info-btn{
    color:#fff;
    background: #226A80;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 2px;
    padding: 10px 20px;
    border-radius: 10px;
    transition: 0.3s;
}

.content .info-btn:hover {
    background: #0C4F60;
}

.buttons {
    position: relative;
    justify-content: center;
}


.buttons .info-btn {

    color:#fff;
    background: #226A80;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 3px;
    padding: 15px 30px;
    border-radius: 15px;
    transition: 0.3s;
}
.buttons .info-btn:hover {
    background: #0C4F60;
}

.media-icons{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
}
.media-icons a {
    position: relative;
    color: #111;
    font-size: 25px;
    text-decoration: none;
}
.media-icons a:not(:last-child){
    margin-right: 60px;

}

.media-icons a:hover{
    transform: scale(1.5);


}
    </style>
