<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{
    background-color: rgb(208, 218, 255);
    height: 100vh;

    display: flex;
    align-items: center;
    flex-direction: column;
    gap: 10px;
}

#navBar {
    /*border: 2px solid red;*/
    width: 99%;
    height: 10%;
    background-color: rgb(246, 251, 255);
    border-radius: 20px 20px 0 20px;
    box-shadow: 0 5px 15px;

    display: flex;
    justify-content: space-around;
    align-items: center;
}

#logo {
    /*border: 2px solid red;*/
    width: 10%;
    height: 100%;

    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;

    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 30px;
}

#searchBar {
    /*border: 2px solid red;*/
    width: 60%;
    height: 100%;

    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    gap: 15px;
}

#search {
    width: 50%;
    height: 40%;
    border-radius: 10px;
}

#perfil {
    /*border: 2px solid red;*/
    width: 20%;
    height: 100%;

    display: flex;
    justify-content: space-evenly;
    align-items: center;
    text-align: center;
}

#photo {
    background-color: aqua;
    width: 40px;
    height: 40px;
    border-radius: 20px;

    display: flex;
    justify-content: center;
    align-items: center;
}

#tegsName {
    font-size: large;
    font-family: 'Courier New', Courier, monospace;
}

#typeUser {
    color: red;
}

.container{
    /*border: 2px solid greenyellow;*/
    background-color: rgb(246, 251, 255);
    width: 99%;
    height: 87%;
    box-shadow: 0 15px 50px 5px;
    border-radius: 15px;

    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-direction: column;
    
}

.listEvents{
    background-color: rgb(146, 158, 199);
    /*border: 4px solid red;*/
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
    width: 100%;
    height: 70%;
    border-radius: 15px;

    display: flex;
    justify-content: space-around;
    align-items: center;
    overflow: auto;

}

.registrantsList{
    background-color: rgb(146, 158, 199);
    /*border: 4px solid red;*/
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
    width: 100%;
    height: 70%;
    border-radius: 15px;

    display: flex;
    justify-content: space-around;
    align-items: center;
    overflow: auto;
}

.NewEvents{
    background-color: rgb(146, 158, 199);
    /*border: 4px solid red;*/
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
    width: 100%;
    height: 70%;
    border-radius: 15px;

    display: flex;
    justify-content: space-around;
    align-items: center;
    overflow: auto;

}

button {
    width: 20%;
    height: 15%;
}

p {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 25px;
}


</style>
</head>
<body>
    <div id="navBar">
            <p id="logo">BrFideliza</p>
            
            <div id="perfil">
                <div id="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </div>
                <div id="tegsName">
                    <div id="nameUser">Marcelo Marcio</div>
                    <div id="typeUser">Adm</div>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="listEvents">
            <p>Event created by you:</p>
            <button>9</button>
        </div>
    <hr>
        <div class="registrantsList">
            <p>subscribed list in events:</p>
            <button>1/50</button>
        </div>
    <hr>   
        <div class="NewEvents">
            <p>Create New Events:</p>
            <button>New Event</button>
        </div>
    </div>
</body>
</html>