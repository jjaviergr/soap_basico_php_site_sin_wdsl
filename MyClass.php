<?php

class MyClass {
  public function helloWorld() {

    return 'Hallo Welt '. print_r(func_get_args(), true);
  }
}