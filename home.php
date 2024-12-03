<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page-php</title>
<style>
body {
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
    justify-content: center;
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

#containerBase {
    /*border: 2px solid greenyellow;*/
    background-color: rgb(0, 46, 212);
    width: 99%;
    height: 87%;
    box-shadow: 0 15px 50px 5px;
    border-radius: 15px;

    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-direction: column;
    gap: 20px;
}

#categoriesEvents {
    background-color: rgb(208, 218, 255);
    /*border: 4px solid red;*/
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
    width: 90%;
    height: 15%;
    border-radius: 20px;

    display: flex;
    justify-content: space-around;
    align-items: center;
}

#dbEvent {
    background-color: rgb(208, 218, 255);
    /*border: 4px solid red;*/
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
    width: 90%;
    height: 35%;
    border-radius: 20px;

    display: flex;
    justify-content: space-evenly;
    align-items: center;
}

#specific_event {
    background-color: rgb(146, 158, 199);
    /*border: 4px solid red;*/
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
    width: 30%;
    height: 80%;
    border-radius: 20px;
}

#subscribed {
    background-color: rgb(208, 218, 255);
    /*border: 4px solid red;*/
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
    width: 90%;
    height: 35%;
    border-radius: 20px;

    display: flex;
    justify-content: space-around;
    align-items: center;
}
</style>
</head>
<body>
    <?='
    <div id="navBar">
        <p id="logo">BrFideliza</p>
        <div id="searchBar">
            <label for="search">Search Events</label>
            <input type="text" id="search" name="search">
        </div>
        <div id="perfil">
            <div id="photo"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg></div>
            <div id="tegsName">
                <div id="nameUser">nameUser</div>
                <div id="typeUser">typeUser</div>
            </div>
        </div>
    </div>
    ';?>

    <?='<div id="containerBase">';?>
        <?='
            <div id="categoriesEvents">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-award-fill"viewBox="0 0 16 16">
                    <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z" />
                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                    <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-database-lock" viewBox="0 0 16 16">
                    <path d="M13 5.698a5 5 0 0 1-.904.525C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777A5 5 0 0 1 3 5.698V7c0 .374.356.875 1.318 1.313C5.234 8.729 6.536 9 8 9c.666 0 1.298-.056 1.876-.156-.43.31-.804.693-1.102 1.132A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777A5 5 0 0 1 3 8.698V10c0 .374.356.875 1.318 1.313C5.234 11.729 6.536 12 8 12h.027a4.6 4.6 0 0 0-.017.8A2 2 0 0 0 8 13c-1.573 0-3.022-.289-4.096-.777A5 5 0 0 1 3 11.698V13c0 .374.356.875 1.318 1.313C5.234 14.729 6.536 15 8 15c0 .363.097.704.266.997Q8.134 16.001 8 16c-1.573 0-3.022-.289-4.096-.777C2.875 14.755 2 14.007 2 13V4c0-1.007.875-1.755 1.904-2.223C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4v4.256a4.5 4.5 0 0 0-1.753-.249C12.787 7.654 13 7.289 13 7zm-8.682-3.01C3.356 3.124 3 3.625 3 4c0 .374.356.875 1.318 1.313C5.234 5.729 6.536 6 8 6s2.766-.27 3.682-.687C12.644 4.875 13 4.373 13 4c0-.374-.356-.875-1.318-1.313C10.766 2.271 9.464 2 8 2s-2.766.27-3.682.687Z" />
                    <path d="M9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                </svg>
            </div>
        ';?>

        <?='<div id="dbEvent">';?>
            <?='<div id="specific_event">';?>
            <?='</div>';?>
        <?='</div>';?>    
                
        <?='<div id="subscribed">';?>  
            
        

        <?='</div>';?>    
        <?='';?>
        <?='';?>    
                

            



    <?='</div>';?>

</body>
</html>