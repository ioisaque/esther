<?php

    function getHeaderFor($page = 'home')
    {
        return '<nav class="navbar navbar-fixed-top navbar-default" id="nav-wrapper">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <a class="logo" href="index.php"><img src="assets/images/logo.png" class="full-width" alt="Crocus"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">

                        <button type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        
                        <ul class="nav navbar-nav">
                            <li '. ($page == 'home' ? 'class="current_page_item"' : '') .'>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="'. (($page == 'aboutMe' | $page == 'aboutTheProject') ? 'current_page_item ' : '') .'hasSub">
                                <a href="">About</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="aboutMe.php">Esther Ribeiro</a>
                                    </li>
                                    <li>
                                        <a href="aboutTheProject.php">Stewardship Project</a>
                                    </li>
                                </ul>
                            </li>
                            <li '. ($page == 'gallery' ? 'class="current_page_item"' : '') .'>
                                <a href="gallery.php">Gallery</a>
                            </li>
                            <li '. ($page == 'blog' ? 'class="current_page_item"' : '') .'>
                                <a href="blog.php">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>';
    }
?>