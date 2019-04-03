<?php
 namespace Doctrine\DBAL\Driver\PDOSqlsrv; use Doctrine\DBAL\Driver\PDOConnection; class Connection extends PDOConnection implements \Doctrine\DBAL\Driver\Connection { public function __construct($dsn, $user = null, $password = null, array $options = null) { parent::__construct($dsn, $user, $password, $options); $this->setAttribute(\PDO::ATTR_STATEMENT_CLASS, array(Statement::class, array())); } public function lastInsertId($name = null) { if (null === $name) { return parent::lastInsertId($name); } $stmt = $this->prepare('SELECT CONVERT(VARCHAR(MAX), current_value) FROM sys.sequences WHERE name = ?'); $stmt->execute(array($name)); return $stmt->fetchColumn(); } public function quote($value, $type=\PDO::PARAM_STR) { $val = parent::quote($value, $type); if (strpos($val, "\0") !== false) { $val = substr($val, 0, -1); } return $val; } } 