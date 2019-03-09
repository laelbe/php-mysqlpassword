<?php
// php implementation of mysql password function.
function mysql_password_hash($input)
{
  return '*' . strtoupper(sha1(sha1($input, true), false));
}
