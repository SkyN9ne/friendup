<?php

/*©lgpl*************************************************************************
*                                                                              *
* This file is part of FRIEND UNIFYING PLATFORM.                               *
* Copyright (c) Friend Software Labs AS. All rights reserved.                  *
*                                                                              *
* Licensed under the Source EULA. Please refer to the copy of the GNU Lesser   *
* General Public License, found in the file license_lgpl.txt.                  *
*                                                                              *
*****************************************************************************©*/

$object = new stdClass();

$i = isset( $configfilesettings[ 'Security' ] ) && $configfilesettings[ 'Security' ][ 'InvitesEnabled' ] ? true : false;
$object->invitesEnabled = $i;

die( 'ok<!--separate-->' . json_encode( $object ) );

?>
