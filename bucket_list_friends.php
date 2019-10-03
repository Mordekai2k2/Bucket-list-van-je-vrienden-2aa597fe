<?php

echo 'Hoe veel vrienden wil je vragen om hun droom?' . PHP_EOL;
$aantal = readline();
if (is_numeric($aantal)) {
    echo "Je gaat $aantal vrienden toevoegen!" . PHP_EOL;
    $friends = array();
        for ($o = 1; $o <= $aantal; $o++) {
            $student = array(
                "Name"=>readline("wat is je naam?".PHP_EOL),
                "Dream"=>readline("Wat is je droom?".PHP_EOL)
            );
            array_push($friends, $student);
        }
        echo "de dromen van jouw vrienden zijn:". PHP_EOL;
        foreach ($friends as $actie1)
            echo $actie1["Name"] . " heeft als droom " . $actie1["Dream"] . PHP_EOL;
}

else {
    echo "Feck you reetkever", exit();
}
/*
                        ,/XM#MMMX;,
                      -%##########M%,
                     -@######%  $###@=
      .,--,         -H#######$   $###M:
   ,;$M###MMX;     .;##########$;HM###X=
,/@###########H=      ;################+
-+#############M/,      %##############+
%M###############=      /##############:
H################      .M#############;.
@###############M      ,@###########M:.
X################,      -$=X#######@:
/@##################%-     +######$-
.;##################X     .X#####+,
 .;H################/     -X####+.
   ,;X##############,       .MM/
      ,:+$H@M#######M#$-    .$$=
           .,-=;+$@###X:    ;/=.
                  .,/X$;   .::,
                      .,    ..                ~Randy



      db    db    db   d8b   db    db    db
      88    88    88   I8I   88    88    88
      88    88    88   I8I   88    88    88
      88    88    Y8   I8I   88    88    88
      88b  d88    `8b d8'8b d8'    88b  d88
      ~Y8888P'     `8b8' `8d8'     ~Y8888P'
*/