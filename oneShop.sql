#----- ��Ʒ�� ------
CREATE TABLE `sp_item` (
	`id` MEDIUMINT (8) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '��ƷID',
	`category_id` SMALLINT (3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '��Ʒ����ID',
	`brand_id` SMALLINT (3) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Ʒ��ID',
	`name` VARCHAR (150) NOT NULL DEFAULT '' COMMENT '��Ʒ����',
	`description` VARCHAR (255) NOT NULL DEFAULT '' COMMENT '��Ʒ����',
	`content` TEXT COMMENT '��Ʒ����',
	`barcode` VARCHAR (30) NOT NULL DEFAULT '' COMMENT '��Ʒ��',
	`stock` MEDIUMINT (6) NOT NULL DEFAULT '0' COMMENT '���',
	`price` DECIMAL (10, 2) NOT NULL DEFAULT '0.00' COMMENT '',
	`market_price` DECIMAL (10, 2) NOT NULL DEFAULT '0.00' COMMENT '�г���',
	`add_time` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '����ʱ��',
	`update_time` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '����ʱ��',
	`status` TINYINT (2) UNSIGNED NOT NULL DEFAULT '0' COMMENT '״̬',
	`sort` MEDIUMINT (8) UNSIGNED NOT NULL DEFAULT '0' COMMENT '����',
	`clicks` INT (8) UNSIGNED NOT NULL DEFAULT '0' COMMENT '�����',
	KEY `category_id` (`category_id`),
	KEY `brand_id` (`brand_id`),
	KEY `status` (`status`)
) ENGINE = MyISAM DEFAULT CHARSET = UTF8;

#----����payment
CREATE TABLE `sp_payment` (
	`id` INT (10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`uid` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '�û�Id',
	`payment_id` BIGINT (16) UNSIGNED NOT NULL DEFAULT '0' COMMENT '������',
	`type` VARCHAR (20) DEFAULT '' COMMENT '֧������',
	`add_time` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '֧��ʱ��',
	`note` VARCHAR (255) DEFAULT '' COMMENT '֧��˵��',
	`terrace_id` VARCHAR (60) DEFAULT '' COMMENT '֧��ƽ̨����'
) ENGINE = MyISAM DEFAULT CHARSET = UTF8;

#----- �������� -----
CREATE TABLE `sp_order` (
	`id` INT (10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '����ID',
	`uid` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '�û�Id',
	`type` TINYINT (2) UNSIGNED NOT NULL DEFAULT '0' COMMENT '��������',
	`payment_id` BIGINT (16) UNSIGNED NOT NULL DEFAULT '0' COMMENT '������',
	`title` VARCHAR (125) DEFAULT '' COMMENT '����',
	`amount` DECIMAL (10, 2) NOT NULL DEFAULT '0.00' COMMENT '�����ܽ��',
	`consignee` VARCHAR (30) NOT NULL DEFAULT '' COMMENT '�ջ���',
	`mobile` VARCHAR (30) NOT NULL DEFAULT '' COMMENT '�ֻ�',
	`tel` VARCHAR (30) NOT NULL DEFAULT '' COMMENT '�绰����',
	`country` SMALLINT (5) NOT NULL DEFAULT '0' COMMENT '����',
	`province` SMALLINT (5) NOT NULL DEFAULT '0' COMMENT '��ַʡ��',
	`city` SMALLINT (5) NOT NULL DEFAULT '0' COMMENT '����',
	`district` SMALLINT (5) NOT NULL DEFAULT '0' COMMENT '��/��',
	`zipcode` VARCHAR (30) NULL DEFAULT '' COMMENT '�ʱ�',
	`address` VARCHAR (255) NOT NULL DEFAULT '' COMMENT '��ϸ��ַ',
	`note` VARCHAR (500) NOT NULL DEFAULT '' COMMENT '������ע',
	`track_no` VARCHAR (30) NULL DEFAULT '' COMMENT '��������',
	`track_code` VARCHAR (30) DEFAULT '' COMMENT '������˾���',
	`add_time` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '����ʱ��',
	`payment_time` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '֧��ʱ��',
	`refund_time` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '�˿�ʱ��',
	`cancel_time` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'ȡ��ʱ��',
	`status` TINYINT (2) UNSIGNED NOT NULL DEFAULT '0' COMMENT '״̬',
	`sort` MEDIUMINT (8) UNSIGNED NOT NULL DEFAULT '0' COMMENT '����',
	KEY `uid` (`uid`),
	KEY `type` (`type`),
	KEY `payment_id` (`payment_id`)
) ENGINE = MyISAM DEFAULT CHARSET = UTF8;

#----- ������Ʒ�� ----
-- �����ɹ����������attr��¼��
CREATE TABLE `sp_order_item` (
	`id` INT (10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '����ID',
	`order_id` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '����id',
	`iid` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '��Ʒid',
	`title` VARCHAR (255) NOT NULL DEFAULT '' COMMENT '����',
	`thumb` VARCHAR (255) NOT NULL DEFAULT '' COMMENT '����ͼ',
	`amount` DECIMAL (10, 2) NOT NULL DEFAULT '0.00' COMMENT '����',
	`count` SMALLINT (6) NOT NULL DEFAULT '1' COMMENT '����',
	`add_time` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'ʱ��',
	`sku` VARCHAR (255) NOT NULL DEFAULT '' COMMENT '��Ʒsku',
	`attr` text COMMENT '�������',
	KEY `order_id` (`order_id`),
	KEY `iid` (`iid`)
) ENGINE = MyISAM DEFAULT CHARSET = UTF8;

#----- ���ﳵ�� ----
-- ���ﳵ�� ��Ʒsku ֱ�Ӷ�ȡ�������
CREATE TABLE `sp_cart` (
	`id` INT (10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '����ID',
	`uid` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '�û�Id',
	`iid` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '��Ʒid',
	`title` VARCHAR (255) NOT NULL DEFAULT '' COMMENT '����',
	`thumb` VARCHAR (255) NOT NULL DEFAULT '' COMMENT '����ͼ',
	`amount` DECIMAL (10, 2) NOT NULL DEFAULT '0.00' COMMENT '����',
	`count` SMALLINT (6) NOT NULL DEFAULT '1' COMMENT '����',
	`add_time` INT (10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'ʱ��',
	`sku` VARCHAR (255) NOT NULL DEFAULT '' COMMENT '��Ʒsku',
	KEY `uid` (`uid`),
	KEY `iid` (`iid`)
) ENGINE = MyISAM DEFAULT CHARSET = UTF8;

