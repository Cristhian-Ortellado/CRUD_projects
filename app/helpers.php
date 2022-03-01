<?php
function isActive($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
}

