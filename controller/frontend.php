<?php

// Include Manager class

function projects() 
{
    require('view/frontend/projectsView.php');
}

function posts() // Blog
{
    require('view/frontend/postsView.php');
}

function cv() 
{
    require('view/frontend/cvView.php');
}

function contact() 
{
    require('view/frontend/contactView.php');
}