<?php
 namespace MailPoetVendor; if (!defined('ABSPATH')) exit; class Swift_NullTransport extends \MailPoetVendor\Swift_Transport_NullTransport { public function __construct() { \call_user_func_array([$this, 'MailPoetVendor\\Swift_Transport_NullTransport::__construct'], \MailPoetVendor\Swift_DependencyContainer::getInstance()->createDependenciesFor('transport.null')); } } 