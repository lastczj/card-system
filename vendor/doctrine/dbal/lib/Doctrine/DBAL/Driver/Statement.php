<?php
 namespace Doctrine\DBAL\Driver; interface Statement extends ResultStatement { function bindValue($param, $value, $type = null); function bindParam($column, &$variable, $type = null, $length = null); function errorCode(); function errorInfo(); function execute($params = null); function rowCount(); } 