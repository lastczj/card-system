<?php
 namespace zgldh\QiniuStorage\Plugins; use League\Flysystem\Plugin\AbstractPlugin; class PrivateImagePreviewUrl extends AbstractPlugin { public function getMethod() { return 'privateImagePreviewUrl'; } public function handle($path = null, $ops = null) { return $this->filesystem->getAdapter()->privateImagePreviewUrl($path, $ops); } }