<?php

function superAdmin()
{
    return auth()->user()->type == 1 ; 
}