<div class="header1__nav">
    <nav class ="col-12 col-s-12 topnav" id="myTopnav">
        <img class="logo" src="icon (1).gif" alt="St-George-Russian-Orthodox-Church-Salt-Lake-City-UT-98028488055">
        <div class="dropdown">
            <button class="dropbtn">Home</button>
            <div class="dropdown-content">
                <a href="home.php">Home</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">About us</button>
            <div class="dropdown-content">
                <a href="about.php">About us</a>
                <a href="leadership.php">Leadership</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">History</button>
            <div class="dropdown-content">
                <a href="history.php">History</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Organizations</button>
            <div class="dropdown-content">
                <a href="sisterhood.php">Sisterhood</a>
                <a href="school.php">School</a>
                <a href="choir.php">Choir</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Special services</button>
            <div class="dropdown-content">
                <a href="specialservices.php">Special services</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Library</button>
            <div class="dropdown-content">
                <a href="pictures.php">Pictures</a>
                <a href="https://www.youtube.com/channel/UCkLqpPjVd5gt1VjudS3FIoQ">Videos</a>
                <a href="eBooks.php">eBooks</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Contacts</button>
            <div class="dropdown-content">
                <a href="contact.php">Contacts</a>
            </div>
        </div>
        <div class=" dropdown">
            <button class="dropbtn">Русский</button>
            <div class="dropdown-content">
                <a href="homerussian.php">Русская версия</a>
            </div>
        </div>
        <button class="mobile-toggle-button js-toggle-dropdown"><i class="fa fa-bars"></i></button>
    </nav>

    <div class="mobile-dropdown d-none js-mobile-dropdown">
        <ul class="mobile-nav">
             <li class="mobile-nav__item">
                 <a class="mobile-nav__link" href="home.php">Home</a>
             </li>
             <li class="mobile-nav__item">
                 <div class="mobile-nav__link mobile-nav__link--hasArrow js-mobile-submenu-button">About us</div>
                 <ul class="mobile-nav__submenu d-none js-mobile-submenu">
                     <li class="mobile-nav__item">
                         <a class="mobile-nav__link mobile-nav__link--submenu" href="about.php">About us</a>
                     </li>
                     <li class="mobile-nav__item">
                         <a class="mobile-nav__link mobile-nav__link--submenu"  href="leadership.php">Leadership</a>
                     </li>
                 </ul>
             </li>
             <li class="mobile-nav__item">
                 <a class="mobile-nav__link" href="history.php">History</a>
             </li>
             <li class="mobile-nav__item">
                 <div class="mobile-nav__link mobile-nav__link--hasArrow js-mobile-submenu-button">Organizations</div>
                 <ul class="mobile-nav__submenu d-none js-mobile-submenu">
                     <li class="mobile-nav__item">
                         <a class="mobile-nav__link mobile-nav__link--submenu"  href="sisterhood.php">Sisterhood</a>
                     </li>
                     <li class="mobile-nav__item">
                         <a class="mobile-nav__link mobile-nav__link--submenu"  href="school.php">School</a>
                     </li>
                     <li class="mobile-nav__item">
                         <a class="mobile-nav__link mobile-nav__link--submenu"  href="choir.php">Choir</a>
                     </li>
                 </ul>
             </li>
             <li class="mobile-nav__item">
                <a class="mobile-nav__link" href="specialservices.php">Special services</a>
             </li>
             <li class="mobile-nav__item">
                 <div class="mobile-nav__link mobile-nav__link--hasArrow js-mobile-submenu-button">Library</div>
                 <ul class="mobile-nav__submenu d-none js-mobile-submenu">
                     <li class="mobile-nav__item">
                         <a class="mobile-nav__link mobile-nav__link--submenu"  href="pictures.php">Pictures</a>
                     </li>
                     <li class="mobile-nav__item">
                         <a class="mobile-nav__link mobile-nav__link--submenu"  href="https://www.youtube.com/channel/UCkLqpPjVd5gt1VjudS3FIoQ">Videos</a>
                     </li>
                     <li class="mobile-nav__item">
                         <a class="mobile-nav__link mobile-nav__link--submenu"  href="eBooks.php">eBooks</a>
                     </li>
                 </ul>
             </li>
             <li class="mobile-nav__item">
                 <a class="mobile-nav__link" href="contact.php">Contacts</a>
             </li>
             <li class="mobile-nav__item">
                 <a class="mobile-nav__link" href="homerussian.php">Русская версия</a>
             </li>
        </div>
    </div>
    <script>

     function myFunction1() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>
</div>

