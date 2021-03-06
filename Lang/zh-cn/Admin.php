<?php
/**
 * 后台语言包
 */
return array(
'SysConfig' =>	array(
					'cfg_name' => array(
									'site_info'	=> '基本设置',
									'smtp'		=> '邮件服务器设置',
									'sms'		=> '短信通道设置',
									'payment'	=>  '在线支付配置',
									'date_format'	=> '日期格式',
									'time_format'	=> '时间格式',
									'site_name'		=> '站点名称',
									'site_title'	=> '站点标题',
									'site_keywords'	=> '站点关键字',
									'site_description'	=> '站点描述',
									'site_domain'	=>	'站点域名',
									'timezone'		=> '系统时区',
									'open_gzip'		=> '开启gzip压缩',
									'thumb_width'	=> '缩略图宽度',
									'thumb_height'	=> '缩略图高度',
									'image_water_path'	=> '图片水印地址',
									'data_cache_time'	=>	'动态数据缓存时间',
									'service_qq'		=>	'客服QQ',
									'weibo_sina'		=>	'新浪微博昵称',
									'weibo_qq'			=>	'腾讯微博昵称',
									'sms_url_send'		=> '短信即时发送接口地址',
									'sms_url_sendtime'	=> '短信定时发送接口地址',
									'sms_url_get'		=> '短信接收接口地址',
									'sms_cdkey'			=> '短信接口序列号',
									'sms_password'		=> '短信接口密码',
									'mail_service'		=> '邮件服务',
									'smtp_host'			=> '发送邮件服务器地址(SMTP)',
									'smtp_port'			=> '服务器端口',
									'smtp_user'			=> '邮件发送帐号',
									'smtp_pass'			=> '帐号密码',
									'smtp_mail'			=> '邮件回复地址',
									'mail_charset'		=> '邮件编码',
									'smtp_ssl'			=> '邮件服务器是否要求加密连接(SSL)',
									'alipay_partner'	=> '支付宝合作身份者id',
									'alipay_key'		=> '支付宝安全检验码',
									'alipay_seller_email'	=> '签约支付宝账号',
									'alipay_type'		=> '支付宝签约类型',
									'icp_number'		=> 'ICP备案号',
									'url_rewrite'		=> '开启伪静态',
									'code_in_secret'	=> '优惠券保密时间',
									'invite_credit'		=> '邀请好友奖励积分',
									'statis_code'		=> '统计代码',
									'open_platform'		=> '开放平台配置',
									'qq_appid'			=> 'QQ开放平台appid',
									'qq_appkey'			=> 'QQ开放平台appkey',
									'qq_open'			=> '开启QQ开放平台登陆',
									'sina_wb_akey'		=> '新浪微博App Key',
									'sina_wb_skey'		=> '新浪微博App Secret',
									'sina_wb_open'		=> '开启新浪微博开放平台登陆',
									'sina_wb_office_id' => '官方新浪微博ID',
									'max_left_days'		=> '最大剩余天数',
									),
					'save_success' => '保存网站设置成功',
					'cfg_range' => array(
										'timezone' => array(
															'-12' => '(GMT -12:00) Eniwetok, Kwajalein',
															'-11' => '(GMT -11:00) Midway Island, Samoa',
															'-10' => '(GMT -10:00) Hawaii',
															'-9' => '(GMT -09:00) Alaska',
															'-8' => '(GMT -08:00) Pacific Time (US &amp; Canada), Tijuana',
															'-7' => '(GMT -07:00) Mountain Time (US &amp; Canada), Arizona',
															'-6' => '(GMT -06:00) Central Time (US &amp; Canada), Mexico City',
															'-5' => '(GMT -05:00) Eastern Time (US &amp; Canada), Bogota, Lima, Quito',
															'-4' => '(GMT -04:00) Atlantic Time (Canada), Caracas, La Paz',
															'-3.5' => '(GMT -03:30) Newfoundland',
															'-3' => '(GMT -03:00) Brassila, Buenos Aires, Georgetown, Falkland Is',
															'-2' => '(GMT -02:00) Mid-Atlantic, Ascension Is., St. Helena',
															'-1' => '(GMT -01:00) Azores, Cape Verde Islands',
															'0' => '(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia',
															'1' => '(GMT +01:00) Amsterdam, Berlin, Brussels, Madrid, Paris, Rome',
															'2' => '(GMT +02:00) Cairo, Helsinki, Kaliningrad, South Africa',
															'3' => '(GMT +03:00) Baghdad, Riyadh, Moscow, Nairobi',
															'3.5' => '(GMT +03:30) Tehran',
															'4' => '(GMT +04:00) Abu Dhabi, Baku, Muscat, Tbilisi',
															'4.5' => '(GMT +04:30) Kabul',
															'5' => '(GMT +05:00) Ekaterinburg, Islamabad, Karachi, Tashkent',
															'5.5' => '(GMT +05:30) Bombay, Calcutta, Madras, New Delhi',
															'5.75' => '(GMT +05:45) Katmandu',
															'6' => '(GMT +06:00) Almaty, Colombo, Dhaka, Novosibirsk',
															'6.5' => '(GMT +06:30) Rangoon',
															'7' => '(GMT +07:00) Bangkok, Hanoi, Jakarta',
															'8' => '(GMT +08:00) Beijing, Hong Kong, Perth, Singapore, Taipei',
															'9' => '(GMT +09:00) Osaka, Sapporo, Seoul, Tokyo, Yakutsk',
															'9.5' => '(GMT +09:30) Adelaide, Darwin',
															'10' => '(GMT +10:00) Canberra, Guam, Melbourne, Sydney, Vladivostok',
															'11' => '(GMT +11:00) Magadan, New Caledonia, Solomon Islands',
															'12' => '(GMT +12:00) Auckland, Wellington, Fiji, Marshall Island',
															),
										'open_gzip' => array(
															0 => '不开启',
															1 => '开启',
															),
										'mail_service' => array(
															0 => '采用服务器内置的 Mail 服务',
															1 => '采用其他的 SMTP 服务',
															),
										'smtp_ssl' => array(
															0 => '否',
															1 => '是',
															),
										'alipay_type'=> array(
															'direct' =>	'直接交易类型',
															'warrant'=>	'担保交易类型'
															),
										'url_rewrite'=> array(
															0 =>	'不开启',
															1 =>	'开启'
															),
										'qq_open'	=> array(
															0 =>	'不开启',
															1 =>	'开启'
															),
										'sina_wb_open'=> array(
															0 =>	'不开启',
															1 =>	'开启'
															),
										),
					'cfg_desc'	=>	array(
										'data_cache_time'	=>	'(单位：小时)',
										'url_rewrite'		=>	'开启伪静态前请确认您的服务器支持url_rewrite',
										'code_in_secret'	=>	'被领取的优惠券代码超过该时间后将被公开。(单位：分钟)',
										'max_left_days'		=>	'当优惠券真实剩余天数超过该值时则显示为该值(单位：天)',
										),
					),
);