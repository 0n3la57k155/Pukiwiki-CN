<?php
// PukiWiki - 又一个 WikiWikiWeb 程序.
// $Id: cn.lng.php,v 0.95 2012/08/14 16:00:00 teanan Exp $
// 版权所有 (C)
//   2002-2005 PukiWiki 开发团队
//   2001-2002 原来由 yu-ji 编写
// 程序授权: GPL v2 或 (根据你的意见) 更新版本
// 汉化授权：CC BY/SA 3.0 中国大陆
// 汉化者(Translator)：XChrome http://puki.xchrome.tk/
// PukiWiki 信息文件 (简体中文)

// 注意: 此文件的编码，必须与编码设置相同

// 编码提示
$_LANG['encode_hint']['zh-CN'] = '华';

///////////////////////////////////////
// 页面标题
$_title_cannotedit = ' $1 不可编辑';
$_title_edit       = '编辑 $1';
$_title_preview    = '预览 $1';
$_title_collided   = '在升级 $1 时，发生了一个冲突。';
$_title_updated    = ' $1 已更新';
$_title_deleted    = ' $1 已删除';
$_title_help       = '帮助';
$_title_invalidwn  = '这不是一个合法的页面名称';
$_title_backuplist = '备份列表';

///////////////////////////////////////
// 页面信息
$_msg_unfreeze = '解锁';
$_msg_preview  = '要确认更改, 请单击页面下方的按钮';
$_msg_preview_delete = '(此页面内容为空. 更新会删除此页面.)';
$_msg_collided = '看起来有人在你编辑页面时已经更新了这个页面.<br />
 + 放在一行的最前面表示这一行是新添加的.<br />
 ! 放在一行的最前面表示这一行可能被更新了.<br />
 编辑以上行, 然后重新提交.';

$_msg_collided_auto = '看起来有人在你编辑页面时已经更新了这个页面.<br /> 这个冲突已经自动解决, 但此页面上也是还有一些问题.<br />
 要确认对此页面的修改, 点击 [更新].<br />';

$_msg_invalidiwn  = ' $1 不是一个合法的 $2.';
$_msg_invalidpass = '不合法的密码.';
$_msg_notfound    = '未找到页面.';
$_msg_addline     = '新加入的行是 <span class="diff_added">这个颜色</span>.';
$_msg_delline     = '被删除的行是 <span class="diff_removed">这个颜色</span>.';
$_msg_goto        = '前往 $1.';
$_msg_andresult   = '在页面<strong> $2</strong> 上, 找到了 <strong>$3</strong> 个页面符合 $1 中所有条件.';
$_msg_orresult    = '在页面<strong> $2</strong> 上, 找到了 <strong>$3</strong> 个页面符合 $1 中至少一个条件.';
$_msg_notfoundresult = '未找到任何符合 $1 条件的页面.';
$_msg_symbol      = '符号';
$_msg_other       = '其他';
$_msg_help        = '查看文档排版规则';
$_msg_week        = array('日','一','二','三','四','五','六');
$_msg_content_back_to_top = '<div class="jumpmenu"><a href="#navigator">&uarr;</a></div>';
$_msg_word        = '这些搜索条件已被高亮:';

///////////////////////////////////////
// 符号
$_symbol_anchor   = '&dagger;';
$_symbol_noexists = '?';

///////////////////////////////////////
// Form buttons
$_btn_preview   = '预览';
$_btn_repreview = '再次预览';
$_btn_update    = '更新';
$_btn_cancel    = '取消';
$_btn_notchangetimestamp = '不要更改时间戳';
$_btn_addtop    = '添加到此文件顶端';
$_btn_template  = '将此页面用作模版';
$_btn_load      = '加载';
$_btn_edit      = '编辑';
$_btn_delete    = '删除';

///////////////////////////////////////
// 授权
$_title_cannotread = ' $1 为只读';
$_msg_auth         = 'PukiWiki 许可';

///////////////////////////////////////
// 页面名称
$rule_page = 'FormattingRules';	// Formatting rules
$help_page = 'Help';		// Help

///////////////////////////////////////
// TrackBack (REMOVED)
$_tb_date   = 'F j, Y, g:i A';

/////////////////////////////////////////////////
// 无主题 (文章)
$_no_subject = '未命名';

/////////////////////////////////////////////////
// 未命名 (文章，注释，pcomment)
$_no_name = '';

/////////////////////////////////////////////////
// 皮肤
/////////////////////////////////////////////////

$_LANG['skin']['add']       = '添加';
$_LANG['skin']['backup']    = '备份';
$_LANG['skin']['copy']      = '复制';
$_LANG['skin']['diff']      = '差异';
$_LANG['skin']['edit']      = '编辑';
$_LANG['skin']['filelist']  = '文件列表';	// List of filenames
$_LANG['skin']['freeze']    = '锁定';
$_LANG['skin']['help']      = '帮助';
$_LANG['skin']['list']      = '页面列表';
$_LANG['skin']['new']       = '新建';
$_LANG['skin']['rdf']       = 'RDF of recent changes';
$_LANG['skin']['recent']    = '最近更改';	// RecentChanges
$_LANG['skin']['refer']     = '引用列表';	// Show list of referer
$_LANG['skin']['reload']    = '重新加载';
$_LANG['skin']['rename']    = '重命名';	// Rename a page (and related)
$_LANG['skin']['rss']       = '最近更改 RSS';
$_LANG['skin']['rss10']     = & $_LANG['skin']['rss'];
$_LANG['skin']['rss20']     = & $_LANG['skin']['rss'];
$_LANG['skin']['search']    = '搜索';
$_LANG['skin']['top']       = '主页';	// Top page
$_LANG['skin']['trackback'] = 'Trackback';	// Show list of trackback
$_LANG['skin']['unfreeze']  = '解锁';
$_LANG['skin']['upload']    = '上传';	// Attach a file

///////////////////////////////////////
// 插件信息
///////////////////////////////////////
// add.inc.php
$_title_add = '添加到 $1';
$_msg_add   = '【汉化无力，日语、英语均未看懂】ページへの追加は、現在のページ内容に改行が二つと入力内容が追加されます。';
	// 英文校正者崩溃了：This message is such bad english that I don't understand it, sorry. --Bjorn De Meyer
	// 作者给的英文：Two and the contents of an input are added for a new-line to the contents of a page of present addition.

///////////////////////////////////////
// article.inc.php
$_btn_name    = '标题: ';
$_btn_article = '提交';
$_btn_subject = '主题: ';
$_msg_article_mail_sender = '作者: ';
$_msg_article_mail_page   = '页面: ';

///////////////////////////////////////
// attach.inc.php
$_attach_messages = array(
	'msg_uploaded' => '已把文件上传至  $1',
	'msg_deleted'  => '删除了 $1 文件',
	'msg_freezed'  => '此文件已被锁定.',
	'msg_unfreezed'=> '此文件已被解锁',
	'msg_renamed'  => '此文件已被重命名',
	'msg_upload'   => '上传到 $1',
	'msg_info'     => '文件信息',
	'msg_confirm'  => '<p>删除 %s.</p>',
	'msg_list'     => '此页面附件列表',
	'msg_listpage' => '$1 附件列表',
	'msg_listall'  => '所有页面的附件列表',
	'msg_file'     => '上传附件',
	'msg_maxsize'  => '最大文件大小为 %s.',
	'msg_count'    => ' <span class="small">下载 %s</span>',
	'msg_password' => '密码',
	'msg_adminpass'=> '管理员密码',
	'msg_delete'   => '删除文件。',
	'msg_freeze'   => '锁定文件。',
	'msg_unfreeze' => '解锁文件。',
	'msg_isfreeze' => '文件已锁定。',
	'msg_rename'   => '重命名',
	'msg_newname'  => '新文件名',
	'msg_require'  => '(需要管理员密码)',
	'msg_filesize' => '大小',
	'msg_date'     => '日期',
	'msg_dlcount'  => '访问数',
	'msg_md5hash'  => 'MD5 校验值',
	'msg_page'     => '页面',
	'msg_filename' => '已保存的文件名',
	'err_noparm'   => '无法上传或下载 $1 中的文件',
	'err_exceed'   => '对 $1 来说文件太大',
	'err_exists'   => '$1 已存在文件',
	'err_notfound' => '无法找到 $1 中文件',
	'err_noexist'  => '文件不存在。',
	'err_delete'   => '无法删除在 $1 中的文件',
	'err_rename'   => '无法重命名此文件',
	'err_password' => '密码错误',
	'err_adminpass'=> '错误的管理员密码',
	'btn_upload'   => '上传',
	'btn_info'     => '信息',
	'btn_submit'   => '提交'
);

///////////////////////////////////////
// back.inc.php
$_msg_back_word = '返回';

///////////////////////////////////////
// backup.inc.php
$_title_backup_delete  = '正在删除 $1 的备份';
$_title_backupdiff     = '备份差别  $1(No. $2)';
$_title_backupnowdiff  = '备份差别  $1 与现在相比(No. $2)';
$_title_backupsource   = '备份源 $1(No. $2)';
$_title_backup         = '$1 的备份(No. $2)';
$_title_pagebackuplist = '$1 的备份列表';
$_title_backuplist     = '备份名单';
$_msg_backup_deleted   = '$1 的备份已删除。';
$_msg_backup_adminpass = '请输入删除密码。';
$_msg_backuplist       = '备份列表';
$_msg_nobackup         = '无 $1 的备份。';
$_msg_diff             = '差别';
$_msg_nowdiff          = '目前差异';
$_msg_source           = '源码';
$_msg_backup           = '备份';
$_msg_view             = '查看 $1。';
$_msg_deleted          = ' $1 已删除。';

///////////////////////////////////////
// calendar_viewer.inc.php
$_err_calendar_viewer_param2   = '第二个参数错误。';
$_msg_calendar_viewer_right    = '向后 %d&gt;&gt;';
$_msg_calendar_viewer_left     = '&lt;&lt; 向前 %d';
$_msg_calendar_viewer_restrict = '由于锁定，日历查看器无法切换到 $1.';

///////////////////////////////////////
// calendar2.inc.php
$_calendar2_plugin_edit  = '[编辑]';
$_calendar2_plugin_empty = '%s 是空的。';

///////////////////////////////////////
// comment.inc.php
$_btn_name    = '姓名: ';
$_btn_comment = '发表评论';
$_msg_comment = '评论: ';
$_title_comment_collided = '在更新 $1 时，发生了a collision。';
$_msg_comment_collided   = '看起来在你编辑时有人已经更新了页面。<br />
 注释已添加，虽然它可能被放置在错误的位置。<br />';

///////////////////////////////////////
// deleted.inc.php
$_deleted_plugin_title = '已删除页面列表';
$_deleted_plugin_title_withfilename = '已删除页面列表 (包括文件名)';

///////////////////////////////////////
// diff.inc.php
$_title_diff         = '$1 的差异';
$_title_diff_delete  = '删除 $1 差异';
$_msg_diff_deleted   = '$1 的差异已删除。';
$_msg_diff_adminpass = '请输入删除密码。';

///////////////////////////////////////
// filelist.inc.php (list.inc.php)
$_title_filelist = '页面文件列表';

///////////////////////////////////////
// freeze.inc.php
$_title_isfreezed = ' $1 已锁定';
$_title_freezed   = ' $1 被锁定。';
$_title_freeze    = '锁定 $1';
$_msg_freezing    = '请输入锁定密码';
$_btn_freeze      = '锁定';

///////////////////////////////////////
// include.inc.php
$_msg_include_restrict = '由于锁定，$1 无法被包含。';

///////////////////////////////////////
// insert.inc.php
$_btn_insert = '添加';

///////////////////////////////////////
// interwiki.inc.php
$_title_invalidiwn = '这不是一个合法的跨维基(InterWiki)名';

///////////////////////////////////////
// list.inc.php
$_title_list = '页面列表';

///////////////////////////////////////
// ls2.inc.php
$_ls2_err_nopages = '<p>在 \' $1\' 中没有子页面</p>';
$_ls2_msg_title   = '以 \' $1\' 开头的页面列表';

///////////////////////////////////////
// memo.inc.php
$_btn_memo_update = '更新';

///////////////////////////////////////
// navi.inc.php
$_navi_prev = '向前';
$_navi_next = '向后';
$_navi_up   = '向上';
$_navi_home = '主页';

///////////////////////////////////////
// newpage.inc.php
$_msg_newpage = '新建页面';

///////////////////////////////////////
// paint.inc.php
$_paint_messages = array(
	'field_name'    => '名称',
	'field_filename'=> '文件名',
	'field_comment' => '评论',
	'btn_submit'    => '涂鸦',
	'msg_max'       => '(最大 %d x %d)',
	'msg_title'     => '画完之后将上传到 $1',
	'msg_title_collided' => '在更新 $1 时，发生了一个错误。',
	'msg_collided'  => '看起来在你编辑时有人已经更新了页面。<br />
 注释和图片虽已添加，但可能发生一些错误。<br />'
);

///////////////////////////////////////
// pcomment.inc.php
$_pcmt_messages = array(
	'btn_name'       => '姓名: ',
	'btn_comment'    => '发表评论',
	'msg_comment'    => '评论: ',
	'msg_recent'     => '显示最新 %d 条评论。',
	'msg_all'        => '前往评论页面。',
	'msg_none'       => '无评论。',
	'title_collided' => '在更新 $1 时，发生了 collision.',
	'msg_collided'   => '看起来在你编辑时有人已经更新了页面。<br />
 注释虽已添加，但可能发生一些错误。<br />',
	'err_pagename'   => '[[%s]] : 不是一个合法的页面名称。',
);
$_msg_pcomment_restrict = '由于锁定，从 $1 无法读取任何评论。';

///////////////////////////////////////
// popular.inc.php
$_popular_plugin_frame       = '<h5>流行的(%d)</h5><div>%s</div>';
$_popular_plugin_today_frame = '<h5>今日(%d)</h5><div>%s</div>';

///////////////////////////////////////
// recent.inc.php
$_recent_plugin_frame = '<h5>最近(%d)</h5>
 <div>%s</div>';

///////////////////////////////////////
// referer.inc.php
$_referer_msg = array(
	'msg_H0_Refer'       => '引用者',
	'msg_Hed_LastUpdate' => '最后更新',
	'msg_Hed_1stDate'    => '初次注册',
	'msg_Hed_RefCounter' => '引用次数',
	'msg_Hed_Referer'    => '引用者',
	'msg_Fmt_Date'       => 'F j, Y, g:i A',
	'msg_Chr_uarr'       => '&uArr;',
	'msg_Chr_darr'       => '&dArr;',
);

///////////////////////////////////////
// rename.inc.php
$_rename_messages  = array(
	'err'            => '<p>错误:%s</p>',
	'err_nomatch'    => '无匹配页面',
	'err_notvalid'   => '新名称不合法。',
	'err_adminpass'  => '管理员密码错误。',
	'err_notpage'    => '%s 不是一个合法的页面名称。',
	'err_norename'   => '不能重命名 %s。',
	'err_already'    => '已存在 :%s。',
	'err_already_below' => '以下文件已存在。',
	'msg_title'      => '重命名页面',
	'msg_page'       => '指定源页面的名称',
	'msg_regex'      => '用正则表达式重命名',
	'msg_related'    => '关联页面',
	'msg_do_related' => '关联页面也被重命名。',
	'msg_rename'     => '重命名 %s',
	'msg_oldname'    => '目前的页面名称',
	'msg_newname'    => '新页面名称',
	'msg_adminpass'  => '管理员密码',
	'msg_arrow'      => '→',
	'msg_exist_none' => '当页面已存在时，不会被操作。',
	'msg_exist_overwrite' => '当页面存在时将被覆盖。',
	'msg_confirm'    => '下列文件将被重命名：',
	'msg_result'     => '下列文件将被覆盖：',
	'btn_submit'     => '提交',
	'btn_next'       => '下一步'
);

///////////////////////////////////////
// search.inc.php
$_title_search  = '搜索';
$_title_result  = '$1 的搜索结果';
$_msg_searching = '搜索所有页面（关键词对大小不敏感，多个关键词用空格分隔）';
$_btn_search    = '搜索';
$_btn_and       = '和';
$_btn_or        = '或';
$_search_pages  = '搜索以 $1 开始的页面';
$_search_all    = '搜索所有页面';

///////////////////////////////////////
// source.inc.php
$_source_messages = array(
	'msg_title'    => '$1 的源码',
	'msg_notfound' => '无法找到 $1 ',
	'err_notfound' => '不能显示页面源码。'
);

///////////////////////////////////////
// template.inc.php
$_msg_template_start   = '开始:<br />';
$_msg_template_end     = '结束:<br />';
$_msg_template_page    = '$1/复制';
$_msg_template_refer   = '页面:';
$_msg_template_force   = '编辑一个已存在的页面';
$_err_template_already = ' $1 已存在.';
$_err_template_invalid = ' $1 不是一个合法的页面名。';
$_btn_template_create  = '创建';
$_title_templatei      = '以 $1 为模板创建一个新页面。';

///////////////////////////////////////
// tracker.inc.php
$_tracker_messages = array(
	'msg_list'   => '$1 的列表项目',
	'msg_back'   => '<p> $1</p>',
	'msg_limit'  => '最高 $2 结果当制定 $1 时。',
	'btn_page'   => '页面',
	'btn_name'   => '名称',
	'btn_real'   => '真实姓名',
	'btn_submit' => '添加',
	'btn_date'   => '日期',
	'btn_refer'  => '引用页面',
	'btn_base'   => '源页面',
	'btn_update' => '更新',
	'btn_past'   => '向前',
);

///////////////////////////////////////
// unfreeze.inc.php
$_title_isunfreezed = ' $1 未锁定';
$_title_unfreezed   = ' $1 已解锁';
$_title_unfreeze    = '解锁 $1';
$_msg_unfreezing    = '请输入解锁密码';
$_btn_unfreeze      = '解锁';

///////////////////////////////////////
// versionlist.inc.php
$_title_versionlist = '版本列表';

///////////////////////////////////////
// vote.inc.php
$_vote_plugin_choice = '选择';
$_vote_plugin_votes  = '投票';

///////////////////////////////////////
// yetlist.inc.php
$_title_yetlist = '未创建的页面列表。';
$_err_notexist  = '所有页面均被创建。';
?>
