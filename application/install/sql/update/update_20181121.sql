-- ----------------------------
-- �����û�ͷ��
-- ----------------------------
ALTER TABLE `system_user` ADD COLUMN `head_img`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '/static/image/admin/face1.jpg' COMMENT 'ͷ��' AFTER `auth_id`;

-- ----------------------------
-- �����ɼ�������Ϣ
-- ----------------------------
INSERT INTO `system_config` (`name`, `group`, `type`, `value`, `remark`, `sort`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES ('spider_access_key', 'spider', 'string', 'asdfmigshjogsn', '�ɼ��ӿڹ�Կ', '0', '2018-11-19 10:46:26', '0', NULL, NULL);
INSERT INTO `system_config` (`name`, `group`, `type`, `value`, `remark`, `sort`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES ('spider_secret_key', 'spider', 'string', 'twjtrowmlca', '�ɼ��ӿ�˽Կ', '0', '2018-11-19 10:46:36', '0', NULL, NULL);
INSERT INTO `system_config` (`name`, `group`, `type`, `value`, `remark`, `sort`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES ('spider_url', 'spider', 'string', 'http://spider.pollylee.cn/api/article/index.html', '�ɼ��ӿڵ�ַ', '0', '2018-11-19 10:46:46', '0', NULL, NULL);
