<?php

$installer = $this;

$installer->startSetup();

$installer->run("

ALTER TABLE {$this->getTable('bannerslider')} ADD `stores` text default '' AFTER `title`;

ALTER TABLE {$this->getTable('bannerslider')} ADD `is_home` tinyint(1) NOT NULL default '0' AFTER `update_time`;
    ALTER TABLE {$this->getTable('bannerslider')} ADD `is_principal` int(1) NOT NULL default '0' AFTER `is_home`;
ALTER TABLE {$this->getTable('bannerslider')} ADD `categories` text default '' AFTER `is_principal`;

    ");

$installer->endSetup();