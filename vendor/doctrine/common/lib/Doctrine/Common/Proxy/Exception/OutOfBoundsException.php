<?php
 namespace Doctrine\Common\Proxy\Exception; use OutOfBoundsException as BaseOutOfBoundsException; class OutOfBoundsException extends BaseOutOfBoundsException implements ProxyException { public static function missingPrimaryKeyValue($className, $idField) { return new self(sprintf("Missing value for primary key %s on %s", $idField, $className)); } } 