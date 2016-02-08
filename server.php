<?php 

require_once 'MyClass.php';

try {
  $server = new SOAPServer(
    NULL,
    array(
     'uri' => 'http://localhost/soap/server.php'
    )
  );

  $server->setClass('MyClass');
  $server->handle();
}

catch (SOAPFault $f) {
  print $f->faultstring;
}

?>
