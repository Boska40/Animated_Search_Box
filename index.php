<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Animated Search Box</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="searchbox">
            <div class="search"><ion-icon name="search-outline"></ion-icon></div>
            <div class="button">
                <input type="text" placeholder="Tapez ici !">
            </div>
            <div class="fermer"><ion-icon name="close-circle-outline"></ion-icon></div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            let search = document.querySelector('.search');
            let searchbox = document.querySelector('.searchbox');
            let fermer= document.querySelector('.fermer');
            search.onclick= function(){
                searchbox.classList.add('active');
            }
            fermer.onclick=function(){
                searchbox.classList.remove('active');
            }
        </script>
    </body>
</html>