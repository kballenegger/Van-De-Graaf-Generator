<?php

function point($x, $y) {
    return array(0=>$x, 1=>$y);
}

function intersect($A, $B, $C, $D) {
    $Ax = $A[0]; $Ay = $A[1];
    $Bx = $B[0]; $By = $B[1];
    $Cx = $C[0]; $Cy = $C[1];
    $Dx = $D[0]; $Dy = $D[1];
    
    //  Fail if either line is undefined.
    if ($Ax==$Bx && $Ay==$By || $Cx==$Dx && $Cy==$Dy) return NO;

    //  (1) Translate the system so that point A is on the origin.
    $Bx-=$Ax; $By-=$Ay;
    $Cx-=$Ax; $Cy-=$Ay;
    $Dx-=$Ax; $Dy-=$Ay;

    //  Discover the length of segment A-B.
    $distAB=sqrt($Bx*$Bx+$By*$By);

    //  (2) Rotate the system so that point B is on the positive X axis.
    $theCos=$Bx/$distAB;
    $theSin=$By/$distAB;
    $newX=$Cx*$theCos+$Cy*$theSin;
    $Cy  =$Cy*$theCos-$Cx*$theSin; $Cx=$newX;
    $newX=$Dx*$theCos+$Dy*$theSin;
    $Dy  =$Dy*$theCos-$Dx*$theSin; $Dx=$newX;

    //  Fail if the lines are parallel.
    if ($Cy==$Dy) return NO;

    //  (3) Discover the position of the intersection point along line A-B.
    $ABpos=$Dx+($Cx-$Dx)*$Dy/($Dy-$Cy);

    //  (4) Apply the discovered position to line A-B in the original coordinate system.
    $X=$Ax+$ABpos*$theCos;
    $Y=$Ay+$ABpos*$theSin;
    
    return(point($X, $Y));
}

// Returns array($top, $bottom, $inside, $outside)
function van_der_graaf($width, $height) {
    $T = intersect(
            point(0-$width, $height),
            point($width, 0),
            point(0, 0),
            point($width, $height)
        );
                
    $K = intersect(
            point(0, 0),
            point($width, $height),
            point(0-$T[0], $T[1]),
            point($T[0], 0)
        );
        
    $O = intersect(
            $K,
            point($width, $K[1]),
            point(0-$width, $height),
            point($width, 0)
        );
    
    $B = intersect(
            point(0, 0),
            point($width, $height),
            $O,
            point($O[0], $height)
        );
        
    $top = $K[1];
    $bottom = $height-$B[1];
    $inside = $K[0];
    $outside = $width-$B[0];
    return array($top, $bottom, $inside, $outside);
}
