<?php 
//ini_set("display_errors", "Off");  //set this to "On" for debugging  ,especially when no reason blank shows up.
//error_reporting(E_ALL);
//header('X-Frame-Options:SAMEORIGIN');
//for people using hustoj out of China , be careful of the last two line of this file !
// 本文件是系统配置文件，全局包含，修改时请慎重保存，千万不要少分号，少引号，出现语法错误可导致全站无法打开。若遇到此种情况，可以备份后删除本文件，用/home/judge/src/install/fixing.sh脚本修复生成。
// connect db 
static 	$DB_HOST="localhost";  //数据库服务器ip或域名
static 	$DB_NAME="jol";   //数据库名
static 	$DB_USER="root";  //数据库账户
static 	$DB_PASS="root";  //数据库密码

static 	$OJ_NAME="HUSTOJ";  //左上角显示的系统名称
static 	$OJ_HOME="./";    //主页目录
static 	$OJ_ADMIN="root@localhost";  //管理员email
static 	$OJ_DATA="/home/judge/data";  //测试数据目录
static 	$OJ_BBS=false; //设为"discuss3" 启用， "bbs" for phpBB3 bridge or "discuss" for mini-forum or false for close any 
static  $OJ_ONLINE=false;  //是否记录在线情况
static  $OJ_LANG="en";  //默认语言
static  $OJ_SIM=false;  //显示相似度，注意只是显示，启动检测的开关在judge.conf，且自己抄自己不计为抄袭
static  $OJ_DICT=false; //显示在线翻译
static  $OJ_LANGMASK=4194224; //掩码计算器:https://pigeon-developer.github.io/hustoj-langmask/
static  $OJ_ACE_EDITOR=true;  // 是否启用有高亮提示的提交代码输入框
static  $OJ_AUTO_SHARE=false; //true: 设为true则通过的题目可在统计页查看其他人代码.
static  $OJ_CSS="white.css";  // bing.css | kawai.css | black.css | blue.css | green.css | hznu.css
static  $OJ_SAE=false; //使用新浪引擎
static  $OJ_VCODE=false;  //验证码
static 	$OJ_REG_SPEED=0 ; //限制每小时同ip注册个数，0不限制
static  $OJ_APPENDCODE=true;  // 代码预定模板
if (!$OJ_APPENDCODE) 	ini_set("session.cookie_httponly", 1);   // APPENDCODE模式需要允许javascript操作cookie保存当前语言。
@session_start();
static  $OJ_CE_PENALTY=false;  // 编译错误是否罚时
static  $OJ_PRINTER=false;  //启用打印服务
static  $OJ_MAIL=false; //内邮
static  $OJ_MARK="mark"; // "mark" 显示正确得分， "percent" 显示错误比率
static  $OJ_MEMCACHE=false;  //使用内存缓存
static  $OJ_MEMSERVER="127.0.0.1";
static  $OJ_MEMPORT=11211;
static  $OJ_UDP=true;   //使用UDP通知
static  $OJ_UDPSERVER="127.0.0.1";    // 多个判题机可用逗号分隔，有非标端口可以用冒号 如 $OJ_UDPSERVER="192.168.0.1,192.168.0.2,192.168.0.3:1537"; 
static  $OJ_UDPPORT=1536;
static  $OJ_JUDGE_HUB_PATH="../judge";  // UDP 发给给JudgeHub的子路径
static  $OJ_REDIS=false;   //使用REDIS队列
static  $OJ_REDISSERVER="127.0.0.1";
static  $OJ_REDISPORT=6379;
static  $OJ_REDISQNAME="hustoj";
static  $SAE_STORAGE_ROOT="http://hustoj-web.stor.sinaapp.com/";  //新浪云存储引擎
static  $OJ_CDN_URL="";  // 如果服务器带宽较小，可选用他人同版本的OJ作为静态资源来源 http://cdn.hustoj.com/ 
static  $OJ_TEMPLATE="syzoj"; //使用的默认模板,template目录下的每个子目录都是一个模板, [bs3 mdui sweet syzoj mario bshark] work with discuss3
static 	$OJ_BG="";  //双引号里面填写背景图片的url，默认不写为默认白色
static  $OJ_LOGIN_MOD="hustoj"; //需要在include目录下配置login-xxxx.php来调用其他登录模块。
static  $OJ_REGISTER=true; //允许注册新用户
static  $OJ_REG_NEED_CONFIRM=false; //新注册用户需要审核
static  $OJ_NEED_LOGIN=false; //需要登录才能访问
static  $OJ_LONG_LOGIN=false; //启用长时间登录信息保留
static  $OJ_KEEP_TIME="30";  //登录Cookie有效时间(单位:天(day),仅在上一行为true时生效)
static  $OJ_RANK_LOCK_PERCENT=0; //比赛封榜时间比例
static  $OJ_SHOW_DIFF=true; //是否显示WA的对比说明
static  $OJ_DOWNLOAD=false; //是否允许下载WA的测试数据
static  $OJ_TEST_RUN=false; //提交界面是否允许测试运行
static  $OJ_MATHJAX=true;  // 激活mathjax
static  $OJ_BLOCKLY=false; //是否启用Blockly界面 , remember to execute `wget http://dl.hustoj.com/blockly.tar.gz; tar xzf blockly.tar.gz` in /home/judge/src/web
static  $OJ_ENCODE_SUBMIT=false; //是否启用base64编码提交的功能，用来回避WAF防火墙误拦截。
static  $OJ_OI_1_SOLUTION_ONLY=false; //比赛是否采用noip中的仅保留最后一次提交的规则。true则在新提交发生时，将本场比赛该题老的提交删除。
static  $OJ_OI_MODE=false; //是否开启OI比赛模式，禁用排名、状态、统计、用户信息、内邮、论坛等。
static  $OJ_SHOW_METAL=true; //榜单上是否按比例显示奖牌
static  $OJ_RANK_LOCK_DELAY=3600; //赛后封榜持续时间，单位秒。根据实际情况调整，在闭幕式颁奖结束后设为0即可立即解封。
static  $OJ_BENCHMARK_MODE=false; //此选项将影响代码提交，不再有提交间隔限制，提交后会返回solution id
static  $OJ_CONTEST_RANK_FIX_HEADER=false; //比赛排名水平滚动时固定名单
static  $OJ_NOIP_KEYWORD="noip";  // 标题包含此关键词，激活noip模式，赛中不显示结果，仅保留最后一次提交。
static  $OJ_BEIAN=false;  // 如果有备案号，填写备案号
static  $OJ_RANK_HIDDEN="'admin','zhblue'";  // 管理员不显示在排名中
static  $OJ_FRIENDLY_LEVEL=0; //系统友好级别，暂定0-9级，级别越高越傻瓜，系统易用度高的同时将降低安全性，仅供非专业用途，造成泄题、抄袭概不负责。
static  $OJ_FREE_PRACTICE=false; //自由练习，不受比赛作业用题限制
static  $OJ_SUBMIT_COOLDOWN_TIME=1; //提交冷却时间，连续两次提交的最小间隔，单位秒。
static  $OJ_POISON_BOT_COUNT=10; //给机器人账号投毒的起始AC数。例如设为10，则认为一个账号对某个题提交了10次正确之后还在提交，就是机器人行为，开始给出随机答复。
static  $OJ_MARKDOWN=true; // 开启MARKDOWN，开启后在后台编辑题目时默认为源码模式，用[md] # Markdown [/md] 格式插入markdown代码, 如果需要用到[]也可以用<div class='md'> </div>。
static  $OJ_INDEX_NEWS_TITLE='HelloWorld!';   // 在syzoj的首页显示哪一篇标题的文章（可以有多个相同标题）
static  $OJ_DIV_FILTER=false;   // 过滤题面中的div，修复显示异常，特别是来自其他OJ系统的题面。
static  $OJ_LIMIT_TO_1_IP=false;  // 限制用户同一时刻只能在一个IP地址登录
static  $OJ_REMOTE_JUDGE=false; //是否启用Remote Judge ，启用哪些模块请在remote.php中设置
static  $OJ_NO_CONTEST_WATCHER=false ; //是否禁止无权限用户观战私有比赛

//static  $OJ_EXAM_CONTEST_ID=1000; // 启用考试状态，填写考试比赛ID
//static  $OJ_ON_SITE_CONTEST_ID=1000; //启用现场赛状态，填写现场赛比赛ID



/* share code */
static  $OJ_SHARE_CODE=false; // 代码分享功能
/* recent contest */
static  $OJ_RECENT_CONTEST=false; // "http://algcontest.rainng.com/contests.json" ; // 名校联赛


static $OJ_ON_SITE_TEAM_TOTAL=0;  //用于根据比例的计算奖牌的队伍总数，0表示根据榜单上的出现的队伍总数计算，不计打星队伍

static $OJ_OPENID_PWD='8a367fe87b1e406ea8e94d7d508dcf01';

/* weibo config here */
static  $OJ_WEIBO_AUTH=false;
static  $OJ_WEIBO_AKEY='1124518951';
static  $OJ_WEIBO_ASEC='df709a1253ef8878548920718085e84b';
static  $OJ_WEIBO_CBURL='http://192.168.0.108/JudgeOnline/login_weibo.php';

/* renren config here */
static  $OJ_RR_AUTH=false;
static  $OJ_RR_AKEY='d066ad780742404d85d0955ac05654df';
static  $OJ_RR_ASEC='c4d2988cf5c149fabf8098f32f9b49ed';
static  $OJ_RR_CBURL='http://192.168.0.108/JudgeOnline/login_renren.php';
/* qq config here */
static  $OJ_QQ_AUTH=false;
static  $OJ_QQ_AKEY='1124518951';
static  $OJ_QQ_ASEC='df709a1253ef8878548920718085e84b';
static  $OJ_QQ_CBURL='192.168.0.108';

/* log */
static  $OJ_LOG_ENABLED=false;
static  $OJ_LOG_DATETIME_FORMAT="Y-m-d H:i:s";
static  $OJ_LOG_PID_ENABLED=false;
static  $OJ_LOG_USER_ENABLED=false;
static  $OJ_LOG_URL_ENABLED=false;
static  $OJ_LOG_URL_HOST_ENABLED=false;
static  $OJ_LOG_URL_PARAM_ENABLED=false;
static  $OJ_LOG_TRACE_ENABLED=false;


static $OJ_SaaS_ENABLE=false;
static $OJ_MENU_NEWS=true;

require_once(dirname(__FILE__) . "/pdo.php");
require_once(dirname(__FILE__) . "/init.php");




