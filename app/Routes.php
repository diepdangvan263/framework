<?php
/**
 * Routes - all standard Routes are defined here.
 *
 * @author David Carr - dave@daveismyname.com
 * @version 4.0
 */


/** Define static routes. */

// Default Routing
Route::any('/',       'Welcome@index');
Route::any('subpage', 'Welcome@subPage');

/** End default Routes */
