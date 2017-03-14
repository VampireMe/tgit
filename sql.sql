



INSERT INTO `cj_object_field_config` (`city_id`, `cate`, `group_name`, `show_group_name`, `name`, `value`, `show_txt`, `is_show`, `show_index`, `scene`, `desc`, `creator`, `create_datetime`, `updator`, `update_datetime`) VALUES (2, 1, 'project_type_list', '建筑类型', 'commercial', '3', '商办', 1, 3, 'commercial,backend_downlist', '建筑类型', NULL, NULL, NULL, NULL);


                                                                                                                                                                                (`city_id`, `cate`, `group_name`, `show_group_name`, `name`, `value`, `show_txt`, `is_show`, `show_index`, `scene`, `desc`, `creator`, `create_datetime`, `updator`, `update_datetime`)


INSERT INTO `cj_object_field_config` (`city_id`, `cate`, `group_name`, `show_group_name`, `name`, `value`, `show_txt`, `is_show`, `show_index`, `scene`, `desc`, `creator`, `create_datetime`, `updator`, `update_datetime`) VALUES (0, 1, 'common_site', '通用站点', 'pc_site', '1', 'PC', 1, 0, '', 'PC端', 48, UNIX_TIMESTAMP(), 48, UNIX_TIMESTAMP());
INSERT INTO `cj_object_field_config` (`city_id`, `cate`, `group_name`, `show_group_name`, `name`, `value`, `show_txt`, `is_show`, `show_index`, `scene`, `desc`, `creator`, `create_datetime`, `updator`, `update_datetime`) VALUES (0, 1, 'common_site', '通用站点', 'm_site', '2', 'M', 1, 0, '', 'M端', 48, UNIX_TIMESTAMP(), 48, UNIX_TIMESTAMP());
INSERT INTO `cj_object_field_config` (`city_id`, `cate`, `group_name`, `show_group_name`, `name`, `value`, `show_txt`, `is_show`, `show_index`, `scene`, `desc`, `creator`, `create_datetime`, `updator`, `update_datetime`) VALUES (0, 1, 'common_site', '通用站点', 'app_site', '3', 'APP', 1, 0, '', 'APP端', 48, UNIX_TIMESTAMP(), 48, UNIX_TIMESTAMP());


INSERT INTO `cj_object_field_config` (`city_id`, `cate`, `group_name`, `show_group_name`, `name`, `value`, `show_txt`, `is_show`, `show_index`, `scene`, `desc`, `creator`, `create_datetime`, `updator`, `update_datetime`) VALUES (0, 1, 'article_type', '文章类型', 'common', '1', '通用', 1, 0, '', '通用', 48, UNIX_TIMESTAMP(), 48, UNIX_TIMESTAMP());
INSERT INTO `cj_object_field_config` (`city_id`, `cate`, `group_name`, `show_group_name`, `name`, `value`, `show_txt`, `is_show`, `show_index`, `scene`, `desc`, `creator`, `create_datetime`, `updator`, `update_datetime`) VALUES (0, 1, 'article_type', '文章类型', 'selection', '2', '精选', 1, 0, '', '精选', 48, UNIX_TIMESTAMP(), 48, UNIX_TIMESTAMP());

ALTER TABLE yw_data_collection_module add description VARCHAR(50) DEFAULT '' COMMENT '模块描述';
ALTER TABLE yw_data_collection_module add img VARCHAR(200) DEFAULT '' COMMENT '模块图片';
