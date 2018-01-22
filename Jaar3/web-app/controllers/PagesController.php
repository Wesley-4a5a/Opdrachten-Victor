<?php

/**
 * Pages Controller
 */
class PagesController
{

    /**
     * Action "home"
     * URL: /index.php?controller=pages&action=home
     */
    public function home()
    {
        // load views
        include 'views/theme/header.php';
        include 'views/pages/home.php';
        include 'views/theme/footer.php';
    }

    /**
     * Action "about"
     * URL: /index.php?controller=pages&action=about
     */
    public function about()
    {
        // load views
        include 'views/theme/header.php';
        include 'views/pages/about.php';
        include 'views/theme/footer.php';
    }

}
