/*
Navicat MySQL Data Transfer

Source Server         : HT
Source Server Version : 50710
Source Host           : localhost:3306
Source Database       : hantang

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2016-01-25 12:53:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `department`
-- ----------------------------
DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sequence` int(10) DEFAULT NULL,
  `update_time` date NOT NULL,
  `create_time` date NOT NULL,
  `updater` varchar(50) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of department
-- ----------------------------
INSERT INTO `department` VALUES ('1', '1', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '客户部');
INSERT INTO `department` VALUES ('2', '2', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '编辑部');
INSERT INTO `department` VALUES ('3', '3', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '制片部');
INSERT INTO `department` VALUES ('4', '4', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '翻译部');
INSERT INTO `department` VALUES ('5', '5', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '后期剪辑部');
INSERT INTO `department` VALUES ('6', '6', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '动画特效部');
INSERT INTO `department` VALUES ('7', '7', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '音乐部');
INSERT INTO `department` VALUES ('8', '8', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '创意部');
INSERT INTO `department` VALUES ('9', '9', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '数据库');
INSERT INTO `department` VALUES ('10', '10', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '网络技术部');
INSERT INTO `department` VALUES ('11', '11', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '人事部');
INSERT INTO `department` VALUES ('12', '12', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '管理部');
INSERT INTO `department` VALUES ('13', '13', '2016-01-20', '2016-01-20', 'ADMIN', 'ADMIN', '1', '新媒体事业部');

-- ----------------------------
-- Table structure for `jobinfo`
-- ----------------------------
DROP TABLE IF EXISTS `jobinfo`;
CREATE TABLE `jobinfo` (
  `sequence` int(10) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `need` varchar(2048) DEFAULT NULL,
  `jobname` varchar(50) NOT NULL,
  `todo` varchar(2048) DEFAULT NULL,
  `creator` varchar(50) NOT NULL,
  `create_time` date NOT NULL,
  `updater` varchar(50) NOT NULL,
  `update_time` date NOT NULL,
  `status` smallint(1) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `department_id` (`department_id`),
  CONSTRAINT `department_id` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100027 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jobinfo
-- ----------------------------
INSERT INTO `jobinfo` VALUES ('1', '100001', '1. 优良的中英文语言能力，优良的英文口语交流能力。\r\n2. 良好的协调沟通能力，理解事件的轻重缓急，思路调理清晰。\r\n3. 有很强的团队合作精神，较强的抗压能力。\r\n4. 吃苦耐劳，有很强的责任心。\r\n5. 有2年以上留学工作经验者优先考虑。\r\n注：请附近照。\r\n', '客户执行', '1. 品牌方的信息收集及整理。\r\n2. 协调公司内部各部门的工作流程。\r\n3. 对栏目整体质量的把控。\r\n4. 协助主管完成相关的客户执行工作。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '1');
INSERT INTO `jobinfo` VALUES ('1', '100002', '1.热爱电视、视频制作及传媒行业。\r\n2.对新兴媒体平台和节目性质感兴趣。\r\n3.喜爱、了解并关注奢侈品行业。\r\n4.在钟表、珠宝、时尚、汽车、游艇、生活方式、艺术文化等类别中有2-3个有所深入了解。\r\n5.思维活跃，学习能力强，喜欢尝试新事物并发掘新话题。\r\n6.有画面感，懂得画面语言，会使用剪辑软件，拥有制作拍摄者优先。\r\n7.中文语言表达、书写能力强，文、史、哲综合知识丰富者优先。\r\n8.英语听说读写精通， 通过TEM-8或CET-6，拥有高级口译证书或以上水平语言能力考核者优先。\r\n9.广电新闻学、 广告学、传播学、语言翻译类专业毕业者优先。\r\n10.有电视传媒、工作经验者优先。\r\n注：请附近照。\r\n', '编辑', '1.根据制作需求，进行前期制作准备。\r\n2.负责现场拍摄及采访，并应对突发事件。\r\n3.负责素材整理、撰稿、粗编，并跟进后期制作。\r\n4.对视频节目进行初审，确保导向正确，品质符合节目调性。\r\n5.及时整理、跟进各方修改意见和建议，并主动寻求解决方案。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '2');
INSERT INTO `jobinfo` VALUES ('2', '100003', '1.为人正直诚信，有奉献精神\r\n2.自我要求高，有进取心和责任心\r\n3.工作有逻辑性，懂得轻重缓急，有效率地完成管理层布置的工作内容\r\n4.善于与人沟通，及时协调团队合作及制作流程中出现的问题\r\n注：请附近照。\r\n', '编导', '1.热爱电视、视频制作及传媒行业。\r\n2.喜爱、了解并关注奢侈品行业。\r\n3.在钟表、珠宝、时尚、汽车、游艇、生活方式、艺术文化等类别中有2-3个有所深入了解。\r\n4.思维活跃，学习能力强，喜欢尝试新事物并发掘新话题。\r\n5.有画面感，懂得画面语言，会使用剪辑软件并参与过制作拍摄者优先。\r\n6.中文语言表达、书写能力强，文、史、哲综合知识丰富者优先。\r\n7.英语听说读写精通， 通过TEM-8或CET-6，拥有高级口译证书或以上水平语言能力考核者优先。\r\n8.广电新闻学、 广告学、传播学、语言翻译类专业毕业者优先。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '2');
INSERT INTO `jobinfo` VALUES ('1', '100004', '1.  具有良好的协调沟通能力，思路清晰、逻辑性强。\r\n2.  具有良好的时间管理意识。\r\n3.  具备团队合作精神，责任心强。\r\n4.  能吃苦耐劳，抗压能力强。\r\n5.  有优秀的中英文语言能力，包括听、说、读、写。\r\n6.  有海外留学或工作经验者优先考虑。\r\n\r\n注：请附近照。\r\n', '制片助理', '1.  供拍摄利用的各种信息资料的收集及整理。\r\n2.  协调公司内相关业务部门的合作。\r\n3.  协助主管完成相关的制片工作。\r\n4.  在实践中逐步实现对节目整体质量的把控。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '3');
INSERT INTO `jobinfo` VALUES ('1', '100005', '1. 英文专业8级以上，较强的英语听、说、读、写。\r\n2. 较强的语言功底，有良好的文学功底，知识面宽广。\r\n3. 对文化艺术相关的信息有强烈的兴趣。\r\n4. 有很强的团队合作精神。\r\n5. 吃苦耐劳，有很强的责任心。\r\n6. 专业的英文翻译专业或有留学工作经验者优先考虑。\r\n注：请附近照。\r\n', '英语翻译', '1. 对拍摄素材的听打及翻译。\r\n2. 对文案文稿的翻译及校对。\r\n3. 对公司介绍等相关信息进行翻译。\r\n4. 对公司网站内容进行相关翻译。\r\n5. 协助主管及领导进行相关翻译工作。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '4');
INSERT INTO `jobinfo` VALUES ('2', '100006', '1. 法语专业8级以上，较强的法语听、说、读、写。\r\n2. 较强的语言功底，有良好的文学功底，知识面宽广。\r\n3. 对文化艺术相关的信息有强烈的兴趣。\r\n4. 有很强的团队合作精神。\r\n5. 吃苦耐劳，有很强的责任心。\r\n6. 专业的法语翻译专业 或 有留学工作经验者优先考虑。\r\n注：请附近照。\r\n', '法文翻译', '1. 对拍摄素材的听打及翻译。\r\n2. 对文案文稿的翻译及校对。\r\n3. 对公司介绍等相关信息进行翻译。\r\n4. 对公司网站内容进行相关翻译。\r\n5. 协助主管及领导进行相关翻译工作。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '4');
INSERT INTO `jobinfo` VALUES ('1', '100007', '1. 剪辑、影视制作、编导等相关专业本科及以上学历，专业基础扎实。\r\n2. 能熟练运用Final Cut Pro/premiere/Avid（任选其一）等剪辑软件。\r\n3. 精通基本的作图软件（如PS，AI），对特效包装有一定基础（AE，3D）。\r\n4. 了解并掌握各种视、音频格式及转换方法。\r\n5. 对文字和画面的组合配合感强，具有较高的视听审美水准，有良好的审美意识和艺术修养。\r\n6. 有较强的学习能力和理解能力, 富有创造力,  善于沟通。\r\n7. 具备良好的职业道德及团队精神, 诚信、有进取心、责任感强。\r\n8. 能适媒体行业高强度的工作节奏，对媒体制作和广告传播行业兴趣浓厚。\r\n9. 具有3年以上影视广告节目及后期工作经验。\r\n10. 有独立完成电视节目剪辑项目的工作经验者优先。\r\n11. 上海地区优先。\r\n', '后期剪辑', '1. 后期剪辑设备的熟练操作运用。\r\n2. 熟悉部门工作流程，清楚工作范畴。\r\n3. 负责各栏目的视频、音频剪辑工作。\r\n4. 配合主管完成每天的工作任务。\r\n5. 独立完成某些紧急剪辑工作任务。\r\n注：请附近照。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '5');
INSERT INTO `jobinfo` VALUES ('1', '100008', ' 1. 有大专以上的学历，有美术、设计功底。\r\n 2. 二年以上的动画制作经验。\r\n 3. 有很强的团队合作精神、吃苦耐劳、细心。\r\n 4. 熟悉操作相关制作软件，如MAYA，3DMAX等。\r\n 5. 有相关动画特效工作经验者优先。\r\n注：请附近照。\r\n', '动画特效师', ' 1. 对设计的效果图进行合理的动画特效制作。\r\n 2. 页面、图片、界面、视频等设计处理。\r\n 3. 负责客户方案的设计创意及效果实现。\r\n 4. 负责公司官网的设计创意及效果实现。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '6');
INSERT INTO `jobinfo` VALUES ('1', '100009', '1．工作认真敬业，责任心强，有较强的人际沟通和协调能力。\r\n2．熟练使用Cubase软件以及各类音频插件。\r\n3．对各种音乐风格有比较广泛的了解，有一定的管弦乐编曲能力。\r\n4．对于时尚、钟表、汽车类高端品牌有大概的了解。\r\n注：请附近照。\r\n', '音乐编辑', '1．根据不同品牌要求在版权音乐库中挑选合适的音乐风格。\r\n2．完成节目的配乐工作，对复杂的工程有整体的音乐设计。\r\n3．对整体音效有把控能力，能有设计性的完成整体音效制作。\r\n4．完成常规的配音录音以及后期处理。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '7');
INSERT INTO `jobinfo` VALUES ('1', '100010', '1. 美术或设计相关专业学历，三年以上相关工作经验。\r\n2. 熟练操作苹果机，使用Illustrator, Photoshop等设计软件。\r\n3. 具备独到的创意思维和敏锐的触觉。\r\n4. 具备扎实的美术功底和较强的画面执行能力。\r\n5. 有很强的团队合作精神，以及良好的个人品行与职业操守。\r\n6. 吃苦耐劳，有很强的责任心。\r\n7. 有相关工作经验者优先。\r\n注：请附近照。\r\n', '创意设计', '1. 公司产品的创意与包装设计。\r\n2. 公司官网的页面创意及设计。\r\n3. 协助主管完成相关的创意与设计。\r\n4. 电视栏目的创意及包装设计。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '8');
INSERT INTO `jobinfo` VALUES ('2', '100011', '1. 美术或设计相关专业学历，三年以上相关工作经验。\r\n2. 熟练操作苹果机，会使用Illustrator、Photoshop等设计软件。\r\n3. 具备独到的创意思维和敏锐的触觉。\r\n4. 具备扎实的美术功底和较强的画面执行能力。\r\n5. 具有很强的责任心、团队合作精神及良好的个人品行与职业操守，能吃苦耐劳。\r\n6. 有相关工作经验者优先。\r\n注：请附近照。\r\n', '平面设计', '1. 公司产品的创意与包装设计。\r\n2. 公司官网的页面创意及设计。\r\n3. 电视栏目的创意及包装设计。\r\n4. 协助主管完成相关的创意与设计。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '8');
INSERT INTO `jobinfo` VALUES ('1', '100012', '为人正直诚信，有奉献精神\r\n自我要求高，有进取心和责任心\r\n工作仔细认真，有耐心，有逻辑性\r\n善于与人沟通，有团队合作精神\r\n', '助理数据库执行', '1.使用视频剪辑软件，整理并存档自拍影像资料，内容包括汉唐文化摄制组亲赴现场拍摄的全球艺术、时尚、电影、家居、钟表、珠宝、汽车、游艇等盛会\r\n2.为节目制作各个环节提供视频/音频/图片/文字等数据支持\r\n3.整理并存档全球各大奢侈品牌的历史文化、产品系列、全球活动等文字/图片/音频/视频资料\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '9');
INSERT INTO `jobinfo` VALUES ('1', '100013', '1. 三年以上web前端工作经验。\r\n2. 熟练使用各种Web前端技术，包括(X)HTML、CSS和JavaScript等。\r\n3. 熟悉w3c标准，结构表现行为分离，html语义化。\r\n4. 熟练手写原生JavaScript代码，了解JS性能优化。\r\n5. 注重设计模式、模块化开发，代码架构设计，有前端改进与优化经验优先。\r\n6. 有实际的一站式开发，响应式设计项目经验。\r\n7. 熟悉HTML5/CSS3，有移动设备前端应用开发经验优先。\r\n8. 如有Github或技术博客等，请提供给我们（加分项）。\r\n', 'Web前端开发工程师', '1. 对公司 旗下产品进行性能优化，确保产品在不同平台、设备上兼具优质的用户使用体验。\r\n2. 结合实际前端开发流程建立或优化提升工作效率的工具。\r\n3. 参与前端基础平台建设。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '10');
INSERT INTO `jobinfo` VALUES ('2', '100014', '1.大专及以上学历。\r\n2.熟悉linux系统管理，三年以上实际工作经验。\r\n3.具备扎实的网络理论知识，会判断处理常规的网络故障。\r\n4.熟悉运维流程，对运维及开源技术有强烈兴趣及爱好。\r\n5.高度责任心，积极主动，有团队精神。\r\n6.熟悉移动互联网常用架构，熟悉客户端的日常监控和分析技术。\r\n7.满足以下五项以上技术要求：\r\na. 熟悉大规模服务器运维,熟悉大并发网站的基础架构，熟悉各种高可用性解决方案。\r\nb. 熟悉Varnish,Nginx,Memcached,Redis,Tomcat,PHP-FPM,Mongodb,Mysql等应用。\r\nc. 良好的系统性能优化及故障排除能力。\r\nd. 熟悉LVS,HAProxy,F5等负载均衡产品。\r\ne. 熟悉Python,Perl,Ruby,Bash脚本语言中的至少一种。\r\nf. 熟悉Cacti,Zabbix,Nagios等开源监控工具。\r\n注：请附近照。\r\n', 'Linux 运维工程师', '1. 负责故障数据中心的搭建、部署、监控、调优、升级、日常维护和安全管理工作。\r\n2. 负责系统安装、配置与维护，系统升级、扩容需求与资源落实、配合开发需求，测试、调整运维平台。\r\n3. 负责处理系统方面日常变更、控制突发情况，对疑难问题进行分析并解决。\r\n4. 管理维护日常文档，制定系统集成项目计划，维护运维项目。\r\n5. 协助相关故障、疑难问题排查处理，编制汇总故障、问题，定期提交汇总报告。\r\n6. 完成领导交办的其它运维相关任务。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '10');
INSERT INTO `jobinfo` VALUES ('3', '100015', '1. 计算机或相关专业专科及以上学历。\r\n2. 懂XHTML/HTML5/CSS3，能编写符合W3C标准、兼容主流浏览器的代码。\r\n3. liaops切图、懂DIV+CSS网页设计布局。\r\n4. 责任心强，工作认真高效，能承受一定的工作压力，有较强的沟通能力和团队合作精神。\r\n5. 优秀的学习能力，分析和解决问题的能力和强烈的进取心。\r\n注：请附近照。\r\n', 'UI 开发工程师', '1. 对UI设计界面进行页面制作。\r\n2. 能够理解后端架构，实现系统页面制作与开发。\r\n3. 基于HTML5.0标准进行手机端页面制作。\r\n4. 调试网站页面在不同浏览器下的兼容性。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '10');
INSERT INTO `jobinfo` VALUES ('4', '100016', '1. 具有2年以上PHP开发经验，有大型网站工作经验优先。\r\n2. 精通PHP开发语言，熟悉PHP框架，了解各种框架的特点。\r\n3. 熟悉 mysql，包括数据库设计,速度优化。\r\n4. 对互联网的技术有较全面理解，能独立应付大访问量下网站的设计和开发工作。\r\n5. 具有PHP缓存技术、静态化设计方面的经验，能够独立开发后台。\r\n6. 具有较强的团队意识，高度的责任感，对工作积极严谨，勇于承担压力。\r\n7. 有良好的沟通和学习能力、有较强的团队协作能力以及快速解决问题的能力。\r\n注：请附近照。\r\n', 'PHP 开发工程师', '1. 负责公司互联网项目php代码开发，维护工作，mobile 开发。\r\n2. 后端应用的开发与维护。 \r\n3. 完成部门领导交代的其他工作任务。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '10');
INSERT INTO `jobinfo` VALUES ('5', '100017', '1.有网站编辑、维护经验者优先。\r\n2.熟悉网络图文等处理软件、平面设计或网页设计。\r\n3.注重团队合作,有良好的语言表达能力及沟通能力,工作认真负责、细致周到,拥有积极乐观的人生态度,富有激情和挑战性。\r\n', '网站内容运维助理', '1.在上级领导和监督下,根据开发进度和任务分配,定期完成量化的各项网站日常事务，按时完成工作进度和任务需求。\r\n2.负责网站维护和更新,包括编辑、SEO、链接、广告交换和网站层面的合作推广工作。\r\n3.完成上级领导安排的其他公司相关工作。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '10');
INSERT INTO `jobinfo` VALUES ('6', '100018', '1、大学本科及以上学历，计算机及相关专业毕业。\r\n2、3年c/c++的开发经验。\r\n3、精通socket编程，多线程等技术，熟悉TCP/IP协议。\r\n4、数学基础扎实，熟悉各种视频/音频格式之间的转换算法。\r\n5、熟悉视频音频的处理，有流媒体存储、软解码、硬解码等相关经验。\r\n6、熟悉各种音视频容器、编码规范，包括H.264/MPEG-2/AAC/MP3/MP4/TS等。\r\n7、熟悉RTSP/RTP/RTMP/HTTP/HLS协议，有网络流媒体编程的相关经验。\r\n8、有Ngnix二次开发经验或者FFMpeg/vlc/mplayer等开源项目开发经验。\r\n9、较强的文件检索，英文专业文献阅读能力。\r\n注：请附近照。\r\n', '流媒体开发工程师', '1.从事移动端平台的多媒体功能（采集、播放、效果处理）的开发和维护。\r\n2.视频文件和直播流的格式转换、加工等处理。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '10');
INSERT INTO `jobinfo` VALUES ('1', '100019', '1. 本科及以上学历，中英文沟通优秀。\r\n2. 有招聘的实务操作经验，能独立进行候选人的沟通和过滤。\r\n3. 良好商务气质，大方得体，职业干练。\r\n4. 结果导向、执行力强，自我管理能力优秀。\r\n5. 熟练使用办公软件，具备基本的网络知识。\r\n注：请附近照。\r\n', '招聘专员', '1. 主要负责各岗位招聘工作。\r\n2. 招聘渠道维护及拓展，电话邀约，面试安排，offer发放，入职安排等。\r\n3. 对新员工组织入职培训及开发。\r\n4. 执行并完善员工入职、转正、晋升、离职等相关规范及流程工作。\r\n5. 负责公司企业文化的推广。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '11');
INSERT INTO `jobinfo` VALUES ('1', '100020', '1. 熟练使用办公自动化软件。\r\n2. 英语能力良好，会简单的交流等。\r\n3. 良好的沟通能力及工作态度。\r\n4. 有较好的服务意识。\r\n5. 工作细心，有较强的责任心。\r\n注：请附近照。\r\n', '行政前台', '1. 来访客人的接待、咨询、引见及电话转接。\r\n2. 快递的接受、费用的核对及请款。\r\n3. 办公用品的管理，包括发放及购买。\r\n4. 公司清洁用品的订购和管理。\r\n5. 与物业沟通及协调相关事宜。\r\n6. 会议室的安排协调。\r\n7. 完成上级交办的其他或临时性工作。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '12');
INSERT INTO `jobinfo` VALUES ('1', '100021', '1.熟悉微信运营，了解互联网、移动互联网行业；\r\n2.文字工作能力强，对互联网文化敏感，能够准确把握用户心态；\r\n3.对热点事件、新闻动态等信息敏感、把握能力强,能够及时组织语言作出响应。\r\n', '新媒体编辑', '1.负责公司产品（包括网站、App和自媒体等）的内容采集、编写、整理和维护更新；\r\n2.参与微信运营内容和排期方案的讨论，并执行微信的内容发布、粉丝互动、话题制造和活动执行等；\r\n3.跟踪微信推广效果，分析数据并反馈，分享微信推广经验；\r\n4.日常维护微信号的客户，及时反馈用户的咨询；\r\n5.协助部门主管其他相关工作等；\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '13');
INSERT INTO `jobinfo` VALUES ('2', '100022', '1.熟悉互联网社交产品，好奇心强，沟通能力强；\r\n2.认真负责仔细，且有耐心；\r\n3.有一定的文字功底和审美能力。\r\n', '实习生', '1.负责自媒体官方账号内容的日常维护更新 \r\n2.收集用户反馈，为运营效果、产品改进提供建议 \r\n3.协助产品运营同事制定运营计划，参与推广运营工作的具体执行\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '13');
INSERT INTO `jobinfo` VALUES ('3', '100023', '', '文案/策划', '', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '13');
INSERT INTO `jobinfo` VALUES ('4', '100024', '1.熟悉html、css、javascript、jquery、ajax等前端技术；\r\n2.对一些流行的前端框架有所了解；\r\n3.熟悉当前互联网的各种流行应用，在交互、用户体验等方面有自己的见解；\r\n4.拥有良好的沟通能力和团队协作能力，有积极解决各种难题的能力\r\n', '前端开发工程师', '1.根据产品原型开发前端代码，配合技术部完成后端数据的接口；\r\n 2.解决不同移动设备、不同浏览器及不同版本的兼容性问题；\r\n 3.优化页面载入速度及前端代码的性能；\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '13');
INSERT INTO `jobinfo` VALUES ('5', '100025', '1. 具有2年以上PHP开发经验，有大型网站工作经验优先。\r\n2. 精通PHP开发语言，熟悉PHP框架，了解各种框架的特点。\r\n3. 熟悉 mysql，包括数据库设计,速度优化。\r\n4. 对互联网的技术有较全面理解，能独立应付大访问量下网站的设计和开发工作。\r\n5. 具有PHP缓存技术、静态化设计方面的经验，能够独立开发后台。\r\n6. 具有较强的团队意识，高度的责任感，对工作积极严谨，勇于承担压力。\r\n7. 有良好的沟通和学习能力、有较强的团队协作能力以及快速解决问题的能力。\r\n注：请附近照。\r\n', 'PHP 开发工程师', '1. 负责公司互联网项目php代码开发，维护工作，mobile 开发。\r\n2. 后端应用的开发与维护。 \r\n3. 完成部门领导交代的其他工作任务。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '13');
INSERT INTO `jobinfo` VALUES ('6', '100026', '1. 计算机或相关专业专科及以上学历。\r\n2. 懂XHTML/HTML5/CSS3，能编写符合W3C标准、兼容主流浏览器的代码。\r\n3. liaops切图、懂DIV+CSS网页设计布局。\r\n4. 责任心强，工作认真高效，能承受一定的工作压力，有较强的沟通能力和团队合作精神。\r\n5. 优秀的学习能力，分析和解决问题的能力和强烈的进取心。\r\n注：请附近照。\r\n', 'UI 开发工程师', '1. 对UI设计界面进行页面制作。\r\n2. 能够理解后端架构，实现系统页面制作与开发。\r\n3. 基于HTML5.0标准进行手机端页面制作。\r\n4. 调试网站页面在不同浏览器下的兼容性。\r\n', 'ADMIN', '2016-01-20', 'ADMIN', '2016-01-20', '1', '13');

-- ----------------------------
-- Table structure for `keyword`
-- ----------------------------
DROP TABLE IF EXISTS `keyword`;
CREATE TABLE `keyword` (
  `first_level` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `creator` varchar(30) NOT NULL,
  `create_time` date NOT NULL,
  `sequence` int(11) DEFAULT NULL,
  `updater` varchar(30) NOT NULL,
  `update_time` date NOT NULL,
  `third_level` varchar(100) DEFAULT NULL,
  `second_level` varchar(100) DEFAULT NULL,
  `keyword_remark` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keyword
-- ----------------------------
INSERT INTO `keyword` VALUES ('music', '1', '2013-2014', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'seasondetails', null);
INSERT INTO `keyword` VALUES ('music', '2', '2014-2015', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'seasondetails', null);
INSERT INTO `keyword` VALUES ('music', '3', '2015-2016', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'seasondetails', null);
INSERT INTO `keyword` VALUES ('music', '4', '合唱', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'displaydetails', null);
INSERT INTO `keyword` VALUES ('music', '5', '独奏', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'displaydetails', null);
INSERT INTO `keyword` VALUES ('music', '6', '室内乐', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'displaydetails', null);
INSERT INTO `keyword` VALUES ('music', '7', '交响乐', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'displaydetails', null);
INSERT INTO `keyword` VALUES ('music', '8', '其他', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'displaydetails', null);
INSERT INTO `keyword` VALUES ('ul', '9', '2009', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('ul', '10', '2010', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('ul', '11', '2011', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('ul', '12', '2012', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('ul', '13', '2013', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('ul', '14', '2014', '1', 'ADMIN', '2016-01-20', '6', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('ul', '16', '2016', '1', 'ADMIN', '2016-01-20', '8', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('ul', '17', '中国大陆', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '18', '港澳台', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '19', '法国', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '20', '瑞士', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '21', '德国', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '22', '意大利', '1', 'ADMIN', '2016-01-20', '6', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '23', '英国', '1', 'ADMIN', '2016-01-20', '7', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '24', '美国', '1', 'ADMIN', '2016-01-20', '8', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '25', '其他', '1', 'ADMIN', '2016-01-20', '9', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '26', '钟表', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '27', '珠宝', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '28', '时尚', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '29', '音乐', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '30', '艺术', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '31', '电影', '1', 'ADMIN', '2016-01-20', '6', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '32', '汽车', '1', 'ADMIN', '2016-01-20', '7', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '33', '其他', '1', 'ADMIN', '2016-01-20', '8', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '34', '展览', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('ul', '35', '开店', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('ul', '36', '走秀', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('ul', '37', '演出', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('ul', '38', '赛事', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('ul', '39', '其他', '1', 'ADMIN', '2016-01-20', '6', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('brandname', '71', 'Abrand', '1', 'ADMIN', '2016-01-22', '1', 'ADMIN', '2016-01-22', 'zn', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '95', '积家', '1', 'ADMIN', '2016-01-23', '1', 'ADMIN', '2016-01-23', 'zn', 'J', null);
INSERT INTO `keyword` VALUES ('ul', '96', '电影', '1', 'ADMIN', '2016-01-22', '2', 'ADMIN', '2016-01-22', 'zn', 'typedetails', '');
INSERT INTO `keyword` VALUES ('ul', '97', '2015', '1', 'ADMIN', '2016-01-23', '7', 'ADMIN', '2016-01-23', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('ul', '98', '博洛尼亚', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-23', 'zn', '22', null);
INSERT INTO `keyword` VALUES ('brandname', '99', '德国朗格', '1', 'ADMIN', '2016-01-23', '1', 'ADMIN', '2016-01-23', 'zn', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '100', 'A.Lange&Söhne', '1', 'ADMIN', '2016-01-23', '2', 'ADMIN', '2016-01-23', 'en', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '101', 'BAUME&MERCIER', '1', 'ADMIN', '2016-01-23', '3', 'ADMIN', '2016-01-23', 'zn', 'B', null);
INSERT INTO `keyword` VALUES ('brandname', '102', 'BAUME&MERCIER', '1', 'ADMIN', '2016-01-23', '4', 'ADMIN', '2016-01-23', 'en', 'B', null);
INSERT INTO `keyword` VALUES ('brandname', '103', 'Cartier', '1', 'ADMIN', '2016-01-23', '5', 'ADMIN', '2016-01-23', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '104', 'Cartier', '1', 'ADMIN', '2016-01-23', '6', 'ADMIN', '2016-01-23', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '105', 'IWC Schaffhausen', '1', 'ADMIN', '2016-01-23', '7', 'ADMIN', '2016-01-23', 'zn', 'I', null);
INSERT INTO `keyword` VALUES ('brandname', '106', 'IWC Schaffhausen', '1', 'ADMIN', '2016-01-23', '8', 'ADMIN', '2016-01-23', 'en', 'I', null);
INSERT INTO `keyword` VALUES ('brandname', '107', '积家', '1', 'ADMIN', '2016-01-23', '9', 'ADMIN', '2016-01-23', 'zn', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '108', 'Jaeger-LeCoultre', '1', 'ADMIN', '2016-01-23', '10', 'ADMIN', '2016-01-23', 'en', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '109', 'Montblanc', '1', 'ADMIN', '2016-01-23', '11', 'ADMIN', '2016-01-23', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '110', 'Montblanc', '1', 'ADMIN', '2016-01-23', '12', 'ADMIN', '2016-01-23', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '111', 'OFFICINE PANERAI', '1', 'ADMIN', '2016-01-23', '13', 'ADMIN', '2016-01-23', 'zn', 'O', null);
INSERT INTO `keyword` VALUES ('brandname', '112', 'OFFICINE PANERAI', '1', 'ADMIN', '2016-01-23', '14', 'ADMIN', '2016-01-23', 'en', 'O', null);
INSERT INTO `keyword` VALUES ('brandname', '113', 'PIAGET', '1', 'ADMIN', '2016-01-23', '15', 'ADMIN', '2016-01-23', 'zn', 'P', null);
INSERT INTO `keyword` VALUES ('brandname', '114', 'PIAGET', '1', 'ADMIN', '2016-01-23', '16', 'ADMIN', '2016-01-23', 'en', 'P', null);
INSERT INTO `keyword` VALUES ('brandname', '115', '罗杰杜彼', '1', 'ADMIN', '2016-01-23', '17', 'ADMIN', '2016-01-23', 'zn', 'R', null);
INSERT INTO `keyword` VALUES ('brandname', '116', 'ROGER DUBUIS', '1', 'ADMIN', '2016-01-23', '18', 'ADMIN', '2016-01-23', 'en', 'R', null);
INSERT INTO `keyword` VALUES ('brandname', '117', '江诗丹顿', '1', 'ADMIN', '2016-01-23', '19', 'ADMIN', '2016-01-23', 'zn', 'V', null);
INSERT INTO `keyword` VALUES ('brandname', '118', 'VACHERON CONSTANTIN', '1', 'ADMIN', '2016-01-23', '20', 'ADMIN', '2016-01-23', 'en', 'V', null);
INSERT INTO `keyword` VALUES ('brandname', '119', '梵克雅宝', '1', 'ADMIN', '2016-01-23', '21', 'ADMIN', '2016-01-23', 'zn', 'V', null);
INSERT INTO `keyword` VALUES ('brandname', '120', 'VanCleef&Arpels', '1', 'ADMIN', '2016-01-23', '22', 'ADMIN', '2016-01-23', 'en', 'V', null);
INSERT INTO `keyword` VALUES ('brandname', '121', 'AUDEMARS PIGUET', '1', 'ADMIN', '2016-01-23', '23', 'ADMIN', '2016-01-23', 'zn', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '122', 'AUDEMARS PIGUET', '1', 'ADMIN', '2016-01-23', '24', 'ADMIN', '2016-01-23', 'en', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '123', 'Breguet', '1', 'ADMIN', '2016-01-23', '25', 'ADMIN', '2016-01-23', 'zn', 'B', null);
INSERT INTO `keyword` VALUES ('brandname', '124', 'Breguet', '1', 'ADMIN', '2016-01-23', '26', 'ADMIN', '2016-01-23', 'en', 'B', null);
INSERT INTO `keyword` VALUES ('brandname', '125', '宝珀', '1', 'ADMIN', '2016-01-23', '27', 'ADMIN', '2016-01-23', 'zn', 'B', null);
INSERT INTO `keyword` VALUES ('brandname', '126', 'Blancpain', '1', 'ADMIN', '2016-01-23', '28', 'ADMIN', '2016-01-23', 'en', 'B', null);
INSERT INTO `keyword` VALUES ('brandname', '127', 'Glashutte', '1', 'ADMIN', '2016-01-23', '29', 'ADMIN', '2016-01-23', 'zn', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '128', 'Glashutte', '1', 'ADMIN', '2016-01-23', '30', 'ADMIN', '2016-01-23', 'en', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '129', '雅克德罗', '1', 'ADMIN', '2016-01-23', '31', 'ADMIN', '2016-01-23', 'zn', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '130', 'JAQUET DROZ', '1', 'ADMIN', '2016-01-23', '32', 'ADMIN', '2016-01-23', 'en', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '131', 'OMEGA', '1', 'ADMIN', '2016-01-23', '33', 'ADMIN', '2016-01-23', 'zn', 'O', null);
INSERT INTO `keyword` VALUES ('brandname', '132', 'OMEGA', '1', 'ADMIN', '2016-01-23', '34', 'ADMIN', '2016-01-23', 'en', 'O', null);
INSERT INTO `keyword` VALUES ('brandname', '133', 'LONGINES', '1', 'ADMIN', '2016-01-23', '35', 'ADMIN', '2016-01-23', 'zn', 'L', null);
INSERT INTO `keyword` VALUES ('brandname', '134', 'LONGINES', '1', 'ADMIN', '2016-01-23', '36', 'ADMIN', '2016-01-23', 'en', 'L', null);
INSERT INTO `keyword` VALUES ('brandname', '135', 'Dior', '1', 'ADMIN', '2016-01-23', '37', 'ADMIN', '2016-01-23', 'zn', 'D', null);
INSERT INTO `keyword` VALUES ('brandname', '136', 'Dior', '1', 'ADMIN', '2016-01-23', '38', 'ADMIN', '2016-01-23', 'en', 'D', null);
INSERT INTO `keyword` VALUES ('brandname', '137', 'CELINE', '1', 'ADMIN', '2016-01-23', '39', 'ADMIN', '2016-01-23', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '138', 'CELINE', '1', 'ADMIN', '2016-01-23', '40', 'ADMIN', '2016-01-23', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '139', 'FENDI', '1', 'ADMIN', '2016-01-23', '41', 'ADMIN', '2016-01-23', 'zn', 'F', null);
INSERT INTO `keyword` VALUES ('brandname', '140', 'FENDI', '1', 'ADMIN', '2016-01-23', '42', 'ADMIN', '2016-01-23', 'en', 'F', null);
INSERT INTO `keyword` VALUES ('brandname', '141', 'GIVENCHY', '1', 'ADMIN', '2016-01-23', '43', 'ADMIN', '2016-01-23', 'zn', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '142', 'GIVENCHY', '1', 'ADMIN', '2016-01-23', '44', 'ADMIN', '2016-01-23', 'en', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '143', 'Louis Vuitton', '1', 'ADMIN', '2016-01-23', '45', 'ADMIN', '2016-01-23', 'zn', 'L', null);
INSERT INTO `keyword` VALUES ('brandname', '144', 'Louis Vuitton', '1', 'ADMIN', '2016-01-23', '46', 'ADMIN', '2016-01-23', 'en', 'L', null);
INSERT INTO `keyword` VALUES ('brandname', '145', 'GUERLAIN', '1', 'ADMIN', '2016-01-23', '47', 'ADMIN', '2016-01-23', 'zn', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '146', 'GUERLAIN', '1', 'ADMIN', '2016-01-23', '48', 'ADMIN', '2016-01-23', 'en', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '147', 'CHAUMET', '1', 'ADMIN', '2016-01-23', '49', 'ADMIN', '2016-01-23', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '148', 'CHAUMET', '1', 'ADMIN', '2016-01-23', '50', 'ADMIN', '2016-01-23', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '149', 'DE BEERS', '1', 'ADMIN', '2016-01-23', '51', 'ADMIN', '2016-01-23', 'zn', 'D', null);
INSERT INTO `keyword` VALUES ('brandname', '150', 'DE BEERS', '1', 'ADMIN', '2016-01-23', '52', 'ADMIN', '2016-01-23', 'en', 'D', null);
INSERT INTO `keyword` VALUES ('brandname', '151', 'Hennessy', '1', 'ADMIN', '2016-01-23', '53', 'ADMIN', '2016-01-23', 'zn', 'H', null);
INSERT INTO `keyword` VALUES ('brandname', '152', 'Hennessy', '1', 'ADMIN', '2016-01-23', '54', 'ADMIN', '2016-01-23', 'en', 'H', null);
INSERT INTO `keyword` VALUES ('brandname', '153', 'Qeelin', '1', 'ADMIN', '2016-01-23', '55', 'ADMIN', '2016-01-23', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '154', 'Qeelin', '1', 'ADMIN', '2016-01-23', '56', 'ADMIN', '2016-01-23', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '155', '芝柏表', '1', 'ADMIN', '2016-01-23', '57', 'ADMIN', '2016-01-23', 'zn', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '156', 'GIRARD-PERREGAUX', '1', 'ADMIN', '2016-01-23', '58', 'ADMIN', '2016-01-23', 'en', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '157', 'HERMES', '1', 'ADMIN', '2016-01-23', '59', 'ADMIN', '2016-01-23', 'zn', 'H', null);
INSERT INTO `keyword` VALUES ('brandname', '158', 'HERMES', '1', 'ADMIN', '2016-01-23', '60', 'ADMIN', '2016-01-23', 'en', 'H', null);
INSERT INTO `keyword` VALUES ('brandname', '159', 'SHANG XIA', '1', 'ADMIN', '2016-01-23', '61', 'ADMIN', '2016-01-23', 'zn', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '160', 'SHANG XIA', '1', 'ADMIN', '2016-01-23', '62', 'ADMIN', '2016-01-23', 'en', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '161', 'CHANEL', '1', 'ADMIN', '2016-01-23', '63', 'ADMIN', '2016-01-23', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '162', 'CHANEL', '1', 'ADMIN', '2016-01-23', '64', 'ADMIN', '2016-01-23', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '163', 'Patek Philippe', '1', 'ADMIN', '2016-01-23', '65', 'ADMIN', '2016-01-23', 'zn', 'P', null);
INSERT INTO `keyword` VALUES ('brandname', '164', 'Patek Philippe', '1', 'ADMIN', '2016-01-23', '66', 'ADMIN', '2016-01-23', 'en', 'P', null);
INSERT INTO `keyword` VALUES ('brandname', '165', 'ROLEX', '1', 'ADMIN', '2016-01-23', '67', 'ADMIN', '2016-01-23', 'zn', 'R', null);
INSERT INTO `keyword` VALUES ('brandname', '166', 'ROLEX', '1', 'ADMIN', '2016-01-23', '68', 'ADMIN', '2016-01-23', 'en', 'R', null);
INSERT INTO `keyword` VALUES ('brandname', '167', '萧邦', '1', 'ADMIN', '2016-01-23', '69', 'ADMIN', '2016-01-23', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '168', 'Chopard', '1', 'ADMIN', '2016-01-23', '70', 'ADMIN', '2016-01-23', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '169', 'FOREVERMARK', '1', 'ADMIN', '2016-01-23', '71', 'ADMIN', '2016-01-23', 'zn', 'F', null);
INSERT INTO `keyword` VALUES ('brandname', '170', 'FOREVERMARK', '1', 'ADMIN', '2016-01-23', '72', 'ADMIN', '2016-01-23', 'en', 'F', null);
INSERT INTO `keyword` VALUES ('brandname', '171', 'MIKIMOTO', '1', 'ADMIN', '2016-01-23', '73', 'ADMIN', '2016-01-23', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '172', 'MIKIMOTO', '1', 'ADMIN', '2016-01-23', '74', 'ADMIN', '2016-01-23', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '173', 'PLATINUM', '1', 'ADMIN', '2016-01-23', '75', 'ADMIN', '2016-01-23', 'zn', 'P', null);
INSERT INTO `keyword` VALUES ('brandname', '174', 'PLATINUM', '1', 'ADMIN', '2016-01-23', '76', 'ADMIN', '2016-01-23', 'en', 'P', null);
INSERT INTO `keyword` VALUES ('brandname', '175', 'Wellendorff', '1', 'ADMIN', '2016-01-23', '77', 'ADMIN', '2016-01-23', 'zn', 'W', null);
INSERT INTO `keyword` VALUES ('brandname', '176', 'Wellendorff', '1', 'ADMIN', '2016-01-23', '78', 'ADMIN', '2016-01-23', 'en', 'W', null);
INSERT INTO `keyword` VALUES ('brandname', '177', 'VERTU', '1', 'ADMIN', '2016-01-23', '79', 'ADMIN', '2016-01-23', 'zn', 'V', null);
INSERT INTO `keyword` VALUES ('brandname', '178', 'VERTU', '1', 'ADMIN', '2016-01-23', '80', 'ADMIN', '2016-01-23', 'en', 'V', null);
INSERT INTO `keyword` VALUES ('brandname', '179', 'LONGCHAMP', '1', 'ADMIN', '2016-01-23', '81', 'ADMIN', '2016-01-23', 'zn', 'L', null);
INSERT INTO `keyword` VALUES ('brandname', '180', 'LONGCHAMP', '1', 'ADMIN', '2016-01-23', '82', 'ADMIN', '2016-01-23', 'en', 'L', null);
INSERT INTO `keyword` VALUES ('brandname', '181', 'MaxMara', '1', 'ADMIN', '2016-01-23', '83', 'ADMIN', '2016-01-23', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '182', 'MaxMara', '1', 'ADMIN', '2016-01-23', '84', 'ADMIN', '2016-01-23', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '183', 'Ermenegildo Zegna', '1', 'ADMIN', '2016-01-23', '85', 'ADMIN', '2016-01-23', 'zn', 'E', null);
INSERT INTO `keyword` VALUES ('brandname', '184', 'Ermenegildo', '1', 'ADMIN', '2016-01-23', '86', 'ADMIN', '2016-01-23', 'en', 'E', null);
INSERT INTO `keyword` VALUES ('brandname', '185', 'ST.JOHN', '1', 'ADMIN', '2016-01-23', '87', 'ADMIN', '2016-01-23', 'zn', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '186', 'ST.JOHN', '1', 'ADMIN', '2016-01-23', '88', 'ADMIN', '2016-01-23', 'en', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '187', 'COACH', '1', 'ADMIN', '2016-01-23', '89', 'ADMIN', '2016-01-23', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '188', 'COACH', '1', 'ADMIN', '2016-01-23', '90', 'ADMIN', '2016-01-23', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '189', 'ALFA ROMEO', '1', 'ADMIN', '2016-01-23', '91', 'ADMIN', '2016-01-23', 'zn', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '190', 'ALFA ROMEO', '1', 'ADMIN', '2016-01-23', '92', 'ADMIN', '2016-01-23', 'en', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '191', 'MASERATI', '1', 'ADMIN', '2016-01-23', '93', 'ADMIN', '2016-01-23', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '192', 'MASERATI', '1', 'ADMIN', '2016-01-23', '94', 'ADMIN', '2016-01-23', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '193', 'Ferrari', '1', 'ADMIN', '2016-01-23', '95', 'ADMIN', '2016-01-23', 'zn', 'F', null);
INSERT INTO `keyword` VALUES ('brandname', '194', 'Ferrari', '1', 'ADMIN', '2016-01-23', '96', 'ADMIN', '2016-01-23', 'en', 'F', null);
INSERT INTO `keyword` VALUES ('brandname', '195', 'CHRYSLER', '1', 'ADMIN', '2016-01-23', '97', 'ADMIN', '2016-01-23', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '196', 'CHRYSLER', '1', 'ADMIN', '2016-01-23', '98', 'ADMIN', '2016-01-23', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '197', 'JEEP', '1', 'ADMIN', '2016-01-23', '99', 'ADMIN', '2016-01-23', 'zn', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '198', 'JEEP', '1', 'ADMIN', '2016-01-23', '100', 'ADMIN', '2016-01-23', 'en', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '199', 'JAGUAR', '1', 'ADMIN', '2016-01-23', '101', 'ADMIN', '2016-01-23', 'zn', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '200', 'JAGUAR', '1', 'ADMIN', '2016-01-23', '102', 'ADMIN', '2016-01-23', 'en', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '201', 'Ferretti Group', '1', 'ADMIN', '2016-01-23', '103', 'ADMIN', '2016-01-23', 'zn', 'F', null);
INSERT INTO `keyword` VALUES ('brandname', '202', 'Ferretti Group', '1', 'ADMIN', '2016-01-23', '104', 'ADMIN', '2016-01-23', 'en', 'F', null);
INSERT INTO `keyword` VALUES ('brandname', '203', 'GODIVA', '1', 'ADMIN', '2016-01-23', '105', 'ADMIN', '2016-01-23', 'zn', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '204', 'GODIVA', '1', 'ADMIN', '2016-01-23', '106', 'ADMIN', '2016-01-23', 'en', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '205', '洲际酒店及度假村', '1', 'ADMIN', '2016-01-23', '107', 'ADMIN', '2016-01-23', 'zn', 'I', null);
INSERT INTO `keyword` VALUES ('brandname', '206', 'INTERCONTINENTAL', '1', 'ADMIN', '2016-01-23', '108', 'ADMIN', '2016-01-23', 'en', 'I', null);
INSERT INTO `keyword` VALUES ('brandname', '207', 'THE LEADING HOTELS', '1', 'ADMIN', '2016-01-23', '109', 'ADMIN', '2016-01-23', 'zn', 'T', null);
INSERT INTO `keyword` VALUES ('brandname', '208', 'THE LEADING HOTELS', '1', 'ADMIN', '2016-01-23', '110', 'ADMIN', '2016-01-23', 'en', 'T', null);
INSERT INTO `keyword` VALUES ('brandname', '209', 'Dorchester Collection', '1', 'ADMIN', '2016-01-23', '111', 'ADMIN', '2016-01-23', 'zn', 'D', null);
INSERT INTO `keyword` VALUES ('brandname', '210', 'Dorchester Collection', '1', 'ADMIN', '2016-01-23', '112', 'ADMIN', '2016-01-23', 'en', 'D', null);
INSERT INTO `keyword` VALUES ('brandname', '211', '地中海俱乐部', '1', 'ADMIN', '2016-01-23', '113', 'ADMIN', '2016-01-23', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '212', 'Club Med', '1', 'ADMIN', '2016-01-23', '114', 'ADMIN', '2016-01-23', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '213', '瑞士航空', '1', 'ADMIN', '2016-01-23', '115', 'ADMIN', '2016-01-23', 'zn', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '214', 'Swissair', '1', 'ADMIN', '2016-01-23', '116', 'ADMIN', '2016-01-23', 'en', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '215', '新西兰航空', '1', 'ADMIN', '2016-01-23', '117', 'ADMIN', '2016-01-23', 'zn', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '216', 'Air New Zealand', '1', 'ADMIN', '2016-01-23', '118', 'ADMIN', '2016-01-23', 'en', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '217', '施坦威钢琴', '1', 'ADMIN', '2016-01-23', '119', 'ADMIN', '2016-01-23', 'zn', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '218', 'Steinway&Sons', '1', 'ADMIN', '2016-01-23', '120', 'ADMIN', '2016-01-23', 'en', 'S', null);

-- ----------------------------
-- Table structure for `keyword_source_relation`
-- ----------------------------
DROP TABLE IF EXISTS `keyword_source_relation`;
CREATE TABLE `keyword_source_relation` (
  `source_id` int(11) NOT NULL,
  `keyword_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `keyword_id` (`keyword_id`),
  KEY `source_id` (`source_id`),
  CONSTRAINT `keyword_id` FOREIGN KEY (`keyword_id`) REFERENCES `keyword` (`id`),
  CONSTRAINT `source_id` FOREIGN KEY (`source_id`) REFERENCES `source` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keyword_source_relation
-- ----------------------------
INSERT INTO `keyword_source_relation` VALUES ('100217', '22', '1');
INSERT INTO `keyword_source_relation` VALUES ('100217', '95', '3');
INSERT INTO `keyword_source_relation` VALUES ('100217', '96', '4');
INSERT INTO `keyword_source_relation` VALUES ('100217', '97', '5');
INSERT INTO `keyword_source_relation` VALUES ('100217', '98', '6');

-- ----------------------------
-- Table structure for `language`
-- ----------------------------
DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  `value` varchar(200) NOT NULL,
  `lang` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of language
-- ----------------------------
INSERT INTO `language` VALUES ('28', 'commit', '确认', 'zn');
INSERT INTO `language` VALUES ('29', 'inputtip', '请输入关键字', 'zn');
INSERT INTO `language` VALUES ('30', 'seniorsearch', '高级搜索', 'zn');
INSERT INTO `language` VALUES ('31', 'search', '搜索', 'zn');
INSERT INTO `language` VALUES ('32', 'language', '语言选择', 'zn');
INSERT INTO `language` VALUES ('33', 'introduce', '公司简介', 'zn');
INSERT INTO `language` VALUES ('34', 'platform', '播出平台', 'zn');
INSERT INTO `language` VALUES ('35', 'partner', '合作伙伴', 'zn');
INSERT INTO `language` VALUES ('36', 'home', '首页', 'zn');
INSERT INTO `language` VALUES ('37', 'about', '博览汉唐', 'zn');
INSERT INTO `language` VALUES ('38', 'ul', '《极致》', 'zn');
INSERT INTO `language` VALUES ('39', 'awoe', '《问鼎世界》', 'zn');
INSERT INTO `language` VALUES ('40', 'music', '汉唐文化音乐年', 'zn');
INSERT INTO `language` VALUES ('41', 'join', '加入汉唐', 'zn');
INSERT INTO `language` VALUES ('42', 'brandname', '品牌名称', 'zn');
INSERT INTO `language` VALUES ('43', 'type', '类型分类', 'zn');
INSERT INTO `language` VALUES ('44', 'location', '地点', 'zn');
INSERT INTO `language` VALUES ('45', 'keyword', '关键字', 'zn');
INSERT INTO `language` VALUES ('46', 'time', '时间', 'zn');
INSERT INTO `language` VALUES ('47', 'reset', '重新筛选', 'zn');
INSERT INTO `language` VALUES ('48', 'dogandhorse', '声色犬马', 'zn');
INSERT INTO `language` VALUES ('49', 'displayseason', '演出季', 'zn');
INSERT INTO `language` VALUES ('50', 'displaytype', '演出形式', 'zn');
INSERT INTO `language` VALUES ('51', 'yeartype', '年份', 'zn');
INSERT INTO `language` VALUES ('52', 'locationtype', '国家/地区', 'zn');
INSERT INTO `language` VALUES ('53', 'typetype', '品类', 'zn');
INSERT INTO `language` VALUES ('54', 'activetype', '活动类型', 'zn');
INSERT INTO `language` VALUES ('55', 'commit', 'commit', 'en');
INSERT INTO `language` VALUES ('56', 'inputtip', 'Please input the keyword', 'en');
INSERT INTO `language` VALUES ('57', 'seniorsearch', 'advanced search', 'en');
INSERT INTO `language` VALUES ('58', 'search', 'search', 'en');
INSERT INTO `language` VALUES ('59', 'language', 'language', 'en');
INSERT INTO `language` VALUES ('60', 'introduce', 'introduce', 'en');
INSERT INTO `language` VALUES ('61', 'platform', 'Platforms', 'en');
INSERT INTO `language` VALUES ('62', 'partner', 'Partners', 'en');
INSERT INTO `language` VALUES ('63', 'home', 'Home', 'en');
INSERT INTO `language` VALUES ('64', 'about', 'Follow Us', 'en');
INSERT INTO `language` VALUES ('65', 'ul', 'The Ultimate Luxury', 'en');
INSERT INTO `language` VALUES ('66', 'awoe', 'A World of Excellence', 'en');
INSERT INTO `language` VALUES ('67', 'music', 'Hantang Music Festival', 'en');
INSERT INTO `language` VALUES ('68', 'join', 'Join Us', 'en');
INSERT INTO `language` VALUES ('69', 'brandname', 'brandname', 'en');
INSERT INTO `language` VALUES ('70', 'type', 'type', 'en');
INSERT INTO `language` VALUES ('71', 'location', 'location', 'en');
INSERT INTO `language` VALUES ('72', 'keyword', 'keyword', 'en');
INSERT INTO `language` VALUES ('73', 'time', 'time', 'en');
INSERT INTO `language` VALUES ('74', 'reset', 'reset', 'en');
INSERT INTO `language` VALUES ('75', 'dogandhorse', 'Hedonist', 'en');
INSERT INTO `language` VALUES ('76', 'displayseason', 'Season', 'en');
INSERT INTO `language` VALUES ('77', 'displaytype', 'Genre', 'en');
INSERT INTO `language` VALUES ('78', 'yeartype', 'Year', 'en');
INSERT INTO `language` VALUES ('79', 'locationtype', 'Country/Region', 'en');
INSERT INTO `language` VALUES ('80', 'typetype', 'Category', 'en');
INSERT INTO `language` VALUES ('81', 'activetype', 'Type of Event', 'en');
INSERT INTO `language` VALUES ('82', 'commit', 'V', 'fr');
INSERT INTO `language` VALUES ('83', 'inputtip', 'Saisie de mots clefs', 'fr');
INSERT INTO `language` VALUES ('84', 'seniorsearch', 'Recherche avanc', 'fr');
INSERT INTO `language` VALUES ('85', 'search', 'De recherche', 'fr');
INSERT INTO `language` VALUES ('86', 'language', 'langue', 'fr');
INSERT INTO `language` VALUES ('87', 'introduce', 'Introduction', 'fr');
INSERT INTO `language` VALUES ('88', 'platform', 'Plate-forme de diffusion', 'fr');
INSERT INTO `language` VALUES ('89', 'partner', 'Partenaires', 'fr');
INSERT INTO `language` VALUES ('90', 'home', 'Page d', 'fr');
INSERT INTO `language` VALUES ('91', 'about', 'Pour nous suivre', 'fr');
INSERT INTO `language` VALUES ('92', 'ul', 'The Ultimate Luxury', 'fr');
INSERT INTO `language` VALUES ('93', 'awoe', 'A World of Excellence', 'fr');
INSERT INTO `language` VALUES ('94', 'music', 'Festival de musique Hantang', 'fr');
INSERT INTO `language` VALUES ('95', 'join', 'Pour nous joindre', 'fr');
INSERT INTO `language` VALUES ('96', 'brandname', 'Nom de marque', 'fr');
INSERT INTO `language` VALUES ('97', 'type', 'Le type de classification', 'fr');
INSERT INTO `language` VALUES ('98', 'location', 'Lieu', 'fr');
INSERT INTO `language` VALUES ('99', 'keyword', 'Mots - cl', 'fr');
INSERT INTO `language` VALUES ('100', 'time', 'Le temps', 'fr');
INSERT INTO `language` VALUES ('101', 'reset', 'Re de criblage', 'fr');
INSERT INTO `language` VALUES ('102', 'dogandhorse', 'Salut', 'fr');
INSERT INTO `language` VALUES ('103', 'displayseason', 'Saisons', 'fr');
INSERT INTO `language` VALUES ('104', 'displaytype', 'Genres de spectacle', 'fr');
INSERT INTO `language` VALUES ('105', 'yeartype', 'Ann', 'fr');
INSERT INTO `language` VALUES ('106', 'locationtype', 'Pays/R', 'fr');
INSERT INTO `language` VALUES ('107', 'typetype', ' Domaines', 'fr');
INSERT INTO `language` VALUES ('108', 'activetype', 'Activit', 'fr');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------

-- ----------------------------
-- Table structure for `privilege`
-- ----------------------------
DROP TABLE IF EXISTS `privilege`;
CREATE TABLE `privilege` (
  `id` int(11) NOT NULL,
  `privilege` varchar(100) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `menu_id` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of privilege
-- ----------------------------

-- ----------------------------
-- Table structure for `source`
-- ----------------------------
DROP TABLE IF EXISTS `source`;
CREATE TABLE `source` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source_location` varchar(500) NOT NULL,
  `status` smallint(1) NOT NULL,
  `source_name` varchar(200) NOT NULL,
  `link_url` varchar(500) DEFAULT NULL,
  `sequence` int(10) DEFAULT NULL,
  `update_time` date NOT NULL,
  `updater` varchar(30) NOT NULL,
  `create_time` date NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `creator` varchar(30) NOT NULL,
  `first_level` varchar(100) DEFAULT NULL,
  `second_level` varchar(100) DEFAULT NULL,
  `source_remark` varchar(2000) DEFAULT NULL,
  `third_level` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100422 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of source
-- ----------------------------
INSERT INTO `source` VALUES ('100001', 'http://localhost:8080/bootstrap/images/partner1.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100002', 'http://localhost:8080/bootstrap/images/homecarousel01.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100003', 'http://localhost:8080/bootstrap/images/home-jz.png', '1', 'homecarousel02-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea11', null, 'zn');
INSERT INTO `source` VALUES ('100004', 'http://localhost:8080/bootstrap/images/wd.png', '1', 'homecarousel03-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea12', null, 'zn');
INSERT INTO `source` VALUES ('100005', 'http://localhost:8080/bootstrap/images/homecarousel02.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea2', null, 'zn');
INSERT INTO `source` VALUES ('100006', 'http://localhost:8080/bootstrap/images/homecarousel03.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea3', null, 'zn');
INSERT INTO `source` VALUES ('100007', 'http://localhost:8080/bootstrap/images/homecarousel04.png', '1', 'homecarousel04', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea4', null, 'zn');
INSERT INTO `source` VALUES ('100008', 'http://localhost:8080/bootstrap/images/homecarousel03.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea2', null, 'zn');
INSERT INTO `source` VALUES ('100009', 'http://localhost:8080/bootstrap/images/homecarousel04.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea3', null, 'zn');
INSERT INTO `source` VALUES ('100010', 'http://localhost:8080/bootstrap/images/homecarousel02.png', '1', 'homecarousel04', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea4', null, 'zn');
INSERT INTO `source` VALUES ('100011', 'http://localhost:8080/bootstrap/images/music.png', '1', 'homecarousel04-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea13', null, 'zn');
INSERT INTO `source` VALUES ('100012', 'http://localhost:8080/bootstrap/images/homecarousel04.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea2', null, 'zn');
INSERT INTO `source` VALUES ('100013', 'http://localhost:8080/bootstrap/images/homecarousel02.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea3', null, 'zn');
INSERT INTO `source` VALUES ('100014', 'http://localhost:8080/bootstrap/images/homecarousel03.png', '1', 'homecarousel04', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea4', null, 'zn');
INSERT INTO `source` VALUES ('100015', 'http://localhost:8080/bootstrap/images/platform1.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'platform', 'imagearea2', null, 'zn');
INSERT INTO `source` VALUES ('100016', 'http://localhost:8080/bootstrap/images/platform2.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'platform', 'imagearea3', null, 'zn');
INSERT INTO `source` VALUES ('100017', 'http://localhost:8080/bootstrap/images/partner1.png', '1', 'partner1', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'partner', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100018', 'http://localhost:8080/bootstrap/images/homecarousel02.png', '1', 'ul01', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'ul', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100019', 'http://localhost:8080/bootstrap/images/homecarousel03.png', '1', 'ul02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'ul', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100020', 'http://localhost:8080/bootstrap/images/homecarousel04.png', '1', 'ul02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'ul', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100021', 'http://localhost:8080/bootstrap/images/homecarousel03.png', '1', 'awoe01', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'awoe', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100022', 'http://localhost:8080/bootstrap/images/homecarousel04.png', '1', 'awoe02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'awoe', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100023', 'http://localhost:8080/bootstrap/images/homecarousel02.png', '1', 'awoe03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'awoe', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100024', 'http://localhost:8080/bootstrap/images/jz.png', '1', 'ul-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'ul', 'imagearea11', null, 'zn');
INSERT INTO `source` VALUES ('100025', 'http://localhost:8080/bootstrap/images/wd.png', '1', 'awoe-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'awoe', 'imagearea11', null, 'zn');
INSERT INTO `source` VALUES ('100026', 'http://localhost:8080/bootstrap/images/homecarousel04.png', '1', 'music01', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'music', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100027', 'http://localhost:8080/bootstrap/images/homecarousel02.png', '1', 'music02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'music', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100028', 'http://localhost:8080/bootstrap/images/homecarousel03.png', '1', 'music02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'music', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100029', 'http://localhost:8080/bootstrap/images/logo.png', '1', 'logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'logoimage', '', null, 'zn');
INSERT INTO `source` VALUES ('100030', 'http://localhost:8080/bootstrap/images/partner1.png', '1', 'partner2', null, null, '2016-01-19', 'ADMIN', '2016-01-19', 'img', 'ADMIN', 'partner', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100031', 'http://localhost:8080/bootstrap/images/platform1.png', '1', 'ullogo', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'img', 'ADMIN', 'ullogo', null, null, 'zn');
INSERT INTO `source` VALUES ('100032', 'http://localhost:8080/bootstrap/images/wd.png', '1', 'awoelogo', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'img', 'ADMIN', 'awoelogo', null, null, 'zn');
INSERT INTO `source` VALUES ('100033', 'http://localhost:8080/bootstrap/images/musicinner.png', '1', 'mu', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'img', 'ADMIN', 'musiclogo', null, null, 'zn');
INSERT INTO `source` VALUES ('100034', 'http://localhost:8080/bootstrap/images/logo1.png', '1', 'footerlogo1', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'footerlogo1', null, 'zn');
INSERT INTO `source` VALUES ('100035', 'http://localhost:8080/bootstrap/images/logo2.png', '1', 'footerlogo2', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'footerlogo2', null, 'zn');
INSERT INTO `source` VALUES ('100036', 'http://localhost:8080/bootstrap/images/logo3.png', '1', 'footerlogo3', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'footerlogo3', null, 'zn');
INSERT INTO `source` VALUES ('100037', 'http://localhost:8080/bootstrap/images/logo4.png', '1', 'footerlogo4', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'footerlogo4', null, 'zn');
INSERT INTO `source` VALUES ('100038', 'http://localhost:8080/bootstrap/images/weibo.png', '1', 'footerweibo', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'weibo', null, 'zn');
INSERT INTO `source` VALUES ('100039', 'http://localhost:8080/bootstrap/images/youku.png', '1', 'footeryouku', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'youku', null, 'zn');
INSERT INTO `source` VALUES ('100040', 'http://localhost:8080/bootstrap/images/wangyi.png', '1', 'footerwangyi', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'wangyi', null, 'zn');
INSERT INTO `source` VALUES ('100041', 'http://localhost:8080/bootstrap/images/tengxun.png', '1', 'footertengxun', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'tengxun', null, 'zn');
INSERT INTO `source` VALUES ('100042', 'http://localhost:8080/bootstrap/images/jianshu.png', '1', 'footerjianshu', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'jianshu', null, 'zn');
INSERT INTO `source` VALUES ('100043', 'http://localhost:8080/bootstrap/images/douban.png', '1', 'footerdouban', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'douban', null, 'zn');
INSERT INTO `source` VALUES ('100044', 'http://localhost:8080/bootstrap/images/wxin.png', '1', 'footerweixin', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'weixin', null, 'zn');
INSERT INTO `source` VALUES ('100045', 'http://localhost:8080/bootstrap/images/guanzhu.png', '1', 'footerguanzhu', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'guanzhu', null, 'zn');
INSERT INTO `source` VALUES ('100046', 'http://localhost:8080/bootstrap/images/jz_erwei.png', '1', 'footerjzerwei', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'erwei', null, 'zn');
INSERT INTO `source` VALUES ('100047', 'http://localhost:8080/bootstrap/images/close.png', '1', 'footerclose', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'footer', 'guanbi', null, 'zn');
INSERT INTO `source` VALUES ('100048', 'http://localhost:8080/bootstrap/images/jzmap.png', '1', 'jzmap', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'platform', 'ulmap', null, 'zn');
INSERT INTO `source` VALUES ('100049', 'http://localhost:8080/bootstrap/images/wdmap.png', '1', 'wdmap', null, null, '2016-01-23', 'ADMIN', '2016-01-23', 'img', 'ADMIN', 'platform', 'awoemap', null, 'zn');
INSERT INTO `source` VALUES ('100099', 'http://localhost:8080/video/joinvideo.mp4', '1', 'joinvideo', null, null, '2016-01-19', 'ADMIN', '2016-01-19', 'video/mp4', 'ADMIN', 'join', null, null, 'zn');
INSERT INTO `source` VALUES ('100200', 'http://localhost:8080/bootstrap/images/partner1.png', '1', 'testvideoimg', null, null, '2016-01-20', 'ADMIN', '2016-01-20', 'videoimg', 'ADMIN', null, null, null, 'zn');
INSERT INTO `source` VALUES ('100201', 'http://localhost:8080/bootstrap/images/homecarousel03.png', '1', 'testvideo2', '/ul', null, '2016-01-20', 'ADMIN', '2016-01-20', 'videoimg', 'ADMIN', null, null, null, 'zn');
INSERT INTO `source` VALUES ('100202', 'http://localhost:8080/bootstrap/images/wd.png', '1', 'testvideo3', '/awoe/awoeinner/test', null, '2016-01-20', 'ADMIN', '2016-01-20', 'videoimg', 'ADMIN', null, null, null, 'zn');
INSERT INTO `source` VALUES ('100203', 'http://localhost:8080/bootstrap/images/homecarousel02.png', '1', 'T4', '/home', null, '2016-01-20', 'ADMIN', '2016-01-20', 'videoimg', 'ADMIN', null, null, null, 'zn');
INSERT INTO `source` VALUES ('100213', 'http://localhost:8080/img/视频定格图片：2015第65届柏林电影节.jpg', '1', '2015柏林电影节', '/ul/ulinner/100218', '1', '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '2015柏林电影节 柏林当地时间2015年2月5日，第65届柏林电影节拉开帷幕。四百多部影片在11天中逐一展映，19部角逐金银熊奖。评审团成员汇集由达伦·阿伦诺夫斯基领衔，汇集导演、演员、制片人和电视剧编剧。朱丽叶·比诺什、妮可·基德曼等明星携新作亮相，闪耀红毯。汉唐文化专访柏林电影节主席Dieter Kosslick，用镜头记录这一电影盛事。', 'zn');
INSERT INTO `source` VALUES ('100214', 'http://localhost:8080/img/视频定格图片：2015第68届戛纳电影节集锦概览.jpg', '1', '第68届戛纳电影节', '/ul/ulinner/100219', '2', '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '第68届戛纳电影节 当地时间2015年5月24日，第68届戛纳电影节落下帷幕。最终，《流浪的迪潘》摘得“最佳影片”金棕榈奖。导演拉斯洛·奈米斯凭借处女作《索尔之子》抱得评审团大奖。最佳男演员奖落入《市场法律》的文森特·林顿囊中，《我的国王》的女主角艾玛纽尔·贝克特与《卡罗尔》的女主角鲁妮·玛拉并获最佳女演员奖。侯孝贤凭《刺客聂隐娘》获得了最佳导演奖。', 'zn');
INSERT INTO `source` VALUES ('100215', 'http://localhost:8080/img/视频定格图片：2015莫扎特周概览.jpg', '1', '2015萨尔茨堡莫扎特周 ', '/ul/ulinner/100220', '3', '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '2015萨尔茨堡莫扎特周  Mozart Week 2015  2015年萨尔茨堡莫扎特周于1月22日拉开大幕，为期11天。这位传奇音乐大师的经典曲目以或传统、或现代的方式精彩呈现。汉唐文化特别受邀前往萨尔茨堡，全方位呈现艺术盛会，纪念音乐大师。', 'zn');
INSERT INTO `source` VALUES ('100216', 'http://localhost:8080/img/视频定格图片：2015日内瓦车展.jpg', '1', '2015日内瓦车展', '/ul/ulinner/100221', '4', '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '2015日内瓦车展 2015年3月5日，第85届日内瓦车展再一次汇聚了全球68万车迷及专业人士的目光。220家参展商共展出约900多辆汽车及100多辆最新款。靓丽色彩，动力十足的发动机、全新概念车款，各大品牌都竞相推出最新杰作。展会现场，各式各样的互动也给观众带来乐趣体验。汉唐摄制组亲赴日内瓦，直击行业最新动向。', 'zn');
INSERT INTO `source` VALUES ('100217', 'http://localhost:8080/img/视频定格图片：积家博洛尼亚电影修复工作室之旅.jpg', '1', '积家博洛尼亚电影修复实验室之旅', '/ul/ulinner/100222', '5', '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '积家博洛尼亚电影修复实验室之旅 位于意大利北部的博洛尼亚一直是电影人心中的圣地。在瑞士钟表品牌积家的支持下，博洛尼亚电影修复实验室以4K技术，通过清洁、扫描、数字修复、颜色和声音修复经典老电影。2014年，实验室耗费超过1000小时，最终修复完成吴宇森的经典影片《英雄本色》。和《极致》一起，走进博洛尼亚电影修复实验室，探秘老电影修复。', 'zn');
INSERT INTO `source` VALUES ('100218', 'http://localhost:8080/video/20150215_UL20m_2015柏林电影节.mpeg.mp4', '1', '2015柏林电影节', null, '1', '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, '2015柏林电影节 柏林当地时间2015年2月5日，第65届柏林电影节拉开帷幕。四百多部影片在11天中逐一展映，19部角逐金银熊奖。评审团成员汇集由达伦·阿伦诺夫斯基领衔，汇集导演、演员、制片人和电视剧编剧。朱丽叶·比诺什、妮可·基德曼等明星携新作亮相，闪耀红毯。汉唐文化专访柏林电影节主席Dieter Kosslick，用镜头记录这一电影盛事。', 'zn');
INSERT INTO `source` VALUES ('100219', 'http://localhost:8080/video/20150618_UL20m_2015戛纳电影节集锦_U150220.mpeg.mp4', '1', '第68届戛纳电影节', null, '2', '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, '第68届戛纳电影节 当地时间2015年5月24日，第68届戛纳电影节落下帷幕。最终，《流浪的迪潘》摘得“最佳影片”金棕榈奖。导演拉斯洛·奈米斯凭借处女作《索尔之子》抱得评审团大奖。最佳男演员奖落入《市场法律》的文森特·林顿囊中，《我的国王》的女主角艾玛纽尔·贝克特与《卡罗尔》的女主角鲁妮·玛拉并获最佳女演员奖。侯孝贤凭《刺客聂隐娘》获得了最佳导演奖。', 'zn');
INSERT INTO `source` VALUES ('100220', 'http://localhost:8080/video/20150227_UL20m_萨尔茨堡莫扎特周概览_EP1_VO4.mpeg.mp4', '1', '2015萨尔茨堡莫扎特周', null, '3', '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, '2015萨尔茨堡莫扎特周  Mozart Week 2015  2015年萨尔茨堡莫扎特周于1月22日拉开大幕，为期11天。这位传奇音乐大师的经典曲目以或传统、或现代的方式精彩呈现。汉唐文化特别受邀前往萨尔茨堡，全方位呈现艺术盛会，纪念音乐大师。', 'zn');
INSERT INTO `source` VALUES ('100221', 'http://localhost:8080/video/20150402_UL20m_第20届日内瓦车展.mpeg.mp4', '1', '2015日内瓦车展', null, '4', '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, '2015日内瓦车展 2015年3月5日，第85届日内瓦车展再一次汇聚了全球68万车迷及专业人士的目光。220家参展商共展出约900多辆汽车及100多辆最新款。靓丽色彩，动力十足的发动机、全新概念车款，各大品牌都竞相推出最新杰作。展会现场，各式各样的互动也给观众带来乐趣体验。汉唐摄制组亲赴日内瓦，直击行业最新动向。', 'zn');
INSERT INTO `source` VALUES ('100222', 'http://localhost:8080/video/20150728_UL20m_积家_探访博洛尼亚电影修复实验室_FINAL_U150270.mpeg.mp4', '1', '积家博洛尼亚电影修复实验室之旅', null, '5', '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, '积家博洛尼亚电影修复实验室之旅 位于意大利北部的博洛尼亚一直是电影人心中的圣地。在瑞士钟表品牌积家的支持下，博洛尼亚电影修复实验室以4K技术，通过清洁、扫描、数字修复、颜色和声音修复经典老电影。2014年，实验室耗费超过1000小时，最终修复完成吴宇森的经典影片《英雄本色》。和《极致》一起，走进博洛尼亚电影修复实验室，探秘老电影修复。', 'zn');
INSERT INTO `source` VALUES ('100223', 'http://localhost:8080/img/视频定格图片：2015第65届柏林电影节.jpg', '1', 'Berlinale 2015', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, 'The 65th Berlinale opened on February 5th, 2015. Over 400 movies screened in 11 days, with 19 in contention. Darren Aronofsky presided over the jury. Juliette Binoche, Nicole Kidman, and other celebrities graced the red carpet. Hantang TV was on hand for coverage and an interview with festival director Dieter Kosslick.', 'en');
INSERT INTO `source` VALUES ('100224', 'http://localhost:8080/img/视频定格图片：2015第68届戛纳电影节集锦概览.jpg', '1', 'Cannes Film Festival 2015', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, 'The 68th Cannes Film Festival closed on May 24th, 2015. Dheepan took home the Palme d’Or. László Nemes won the Grand Prix for his debut work, Saul Fia. Hou Hsiao-Hsien won the Award for Best Director for Nie Yinniang (The Assassin).', 'en');
INSERT INTO `source` VALUES ('100225', 'http://localhost:8080/img/视频定格图片：2015莫扎特周概览.jpg', '1', 'Mozart Week 2015', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, 'The 2015 Mozart Week in Salzburg began on January 22nd and lasted 11 days. The great composer’s works were interpreted in both classical and modern styles. Hantang TV brings you all the details.', 'en');
INSERT INTO `source` VALUES ('100226', 'http://localhost:8080/img/视频定格图片：2015日内瓦车展.jpg', '1', '', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '', 'en');
INSERT INTO `source` VALUES ('100227', 'http://localhost:8080/img/视频定格图片：积家博洛尼亚电影修复工作室之旅.jpg', '1', 'Jaeger-LeCoultre and L’Immagine Ritrovata', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, 'Bologna is an important place for movie lovers. With the support of Swiss watchmaker Jaeger-LeCoultre, the L’Immagine Ritrovata film restoration laboratory restores classic films. In 2014, L’Immagine Ritrovata spent over 1,000 hours to restore John Woo’s classic A Better Tomorrow. The Ultimate Luxury gives you a look into the film restoration process.', 'en');
INSERT INTO `source` VALUES ('100228', 'http://localhost:8080/video/20150319_UL20m_2015柏林电影节_V03_ENG_张锐锐-ok.mpeg.mp4', '1', 'Berlinale 2015', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, 'The 65th Berlinale opened on February 5th, 2015. Over 400 movies screened in 11 days, with 19 in contention. Darren Aronofsky presided over the jury. Juliette Binoche, Nicole Kidman, and other celebrities graced the red carpet. Hantang TV was on hand for coverage and an interview with festival director Dieter Kosslick.', 'en');
INSERT INTO `source` VALUES ('100229', 'http://localhost:8080/video/20150324_UL20m_萨尔茨堡莫扎特周概览_EP1_V05_ENG_张锐锐-ok.mpeg.mp4', '1', 'Mozart Week 2015', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, 'The 2015 Mozart Week in Salzburg began on January 22nd and lasted 11 days. The great composer’s works were interpreted in both classical and modern styles. Hantang TV brings you all the details.', 'en');
INSERT INTO `source` VALUES ('100230', 'http://localhost:8080/video/20150421_UL20m_2015日内瓦车展_ENG-ok.mpeg.mp4', '1', '', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, null, 'en');
INSERT INTO `source` VALUES ('100231', 'http://localhost:8080/video/20150819_UL20m_积家_探访博洛尼亚电影修复实验室_V02_张昊_ENG-ok.mpeg.mp4', '1', 'Jaeger-LeCoultre and L’Immagine Ritrovata', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, 'Bologna is an important place for movie lovers. With the support of Swiss watchmaker Jaeger-LeCoultre, the L’Immagine Ritrovata film restoration laboratory restores classic films. In 2014, L’Immagine Ritrovata spent over 1,000 hours to restore John Woo’s classic A Better Tomorrow. The Ultimate Luxury gives you a look into the film restoration process.', 'en');
INSERT INTO `source` VALUES ('100232', 'http://localhost:8080/img/视频定格图片：2015第65届柏林电影节.jpg', '1', '2015柏林电影节', 'awoe/awoeinner/100234', '1', '2016-01-24', 'ADMIN', '2016-01-24', 'videoimg', 'ADMIN', 'awoe', null, '2015柏林电影节 柏林当地时间2015年2月5日，第65届柏林电影节拉开帷幕。四百多部影片在11天中逐一展映，19部角逐金银熊奖。评审团成员汇集由达伦·阿伦诺夫斯基领衔，汇集导演、演员、制片人和电视剧编剧。朱丽叶·比诺什、妮可·基德曼等明星携新作亮相，闪耀红毯。汉唐文化专访柏林电影节主席Dieter Kosslick，用镜头记录这一电影盛事。', 'zn');
INSERT INTO `source` VALUES ('100233', 'http://localhost:8080/img/视频定格图片：2015第68届戛纳电影节集锦概览.jpg', '1', '第68届戛纳电影节', 'awoe/awoeinner/100235', '2', '2016-01-24', 'ADMIN', '2016-01-24', 'videoimg', 'ADMIN', 'awoe', null, '第68届戛纳电影节 当地时间2015年5月24日，第68届戛纳电影节落下帷幕。最终，《流浪的迪潘》摘得“最佳影片”金棕榈奖。导演拉斯洛·奈米斯凭借处女作《索尔之子》抱得评审团大奖。最佳男演员奖落入《市场法律》的文森特·林顿囊中，《我的国王》的女主角艾玛纽尔·贝克特与《卡罗尔》的女主角鲁妮·玛拉并获最佳女演员奖。侯孝贤凭《刺客聂隐娘》获得了最佳导演奖。', 'zn');
INSERT INTO `source` VALUES ('100234', 'http://localhost:8080/video/20150215_UL20m_2015柏林电影节.mpeg.mp4', '1', '2015柏林电影节', null, '1', '2016-01-24', 'ADMIN', '2016-01-24', 'video/mp4', 'ADMIN', 'awoe', null, '2015柏林电影节 柏林当地时间2015年2月5日，第65届柏林电影节拉开帷幕。四百多部影片在11天中逐一展映，19部角逐金银熊奖。评审团成员汇集由达伦·阿伦诺夫斯基领衔，汇集导演、演员、制片人和电视剧编剧。朱丽叶·比诺什、妮可·基德曼等明星携新作亮相，闪耀红毯。汉唐文化专访柏林电影节主席Dieter Kosslick，用镜头记录这一电影盛事。', 'zn');
INSERT INTO `source` VALUES ('100235', 'http://localhost:8080/video/20150618_UL20m_2015戛纳电影节集锦_U150220.mpeg.mp4', '1', '第68届戛纳电影节', null, '2', '2016-01-24', 'ADMIN', '2016-01-24', 'video/mp4', 'ADMIN', 'awoe', null, '第68届戛纳电影节 当地时间2015年5月24日，第68届戛纳电影节落下帷幕。最终，《流浪的迪潘》摘得“最佳影片”金棕榈奖。导演拉斯洛·奈米斯凭借处女作《索尔之子》抱得评审团大奖。最佳男演员奖落入《市场法律》的文森特·林顿囊中，《我的国王》的女主角艾玛纽尔·贝克特与《卡罗尔》的女主角鲁妮·玛拉并获最佳女演员奖。侯孝贤凭《刺客聂隐娘》获得了最佳导演奖。', 'zn');
INSERT INTO `source` VALUES ('100236', 'http://localhost:8080/img/视频定格图片：积家博洛尼亚电影修复工作室之旅.jpg', '1', '积家博洛尼亚电影修复实验室之旅', 'music/musicinner/100237', '1', '2016-01-24', 'ADMIN', '2016-01-24', 'videoimg', 'ADMIN', 'music', null, '积家博洛尼亚电影修复实验室之旅 位于意大利北部的博洛尼亚一直是电影人心中的圣地。在瑞士钟表品牌积家的支持下，博洛尼亚电影修复实验室以4K技术，通过清洁、扫描、数字修复、颜色和声音修复经典老电影。2014年，实验室耗费超过1000小时，最终修复完成吴宇森的经典影片《英雄本色》。和《极致》一起，走进博洛尼亚电影修复实验室，探秘老电影修复。', 'zn');
INSERT INTO `source` VALUES ('100237', 'http://localhost:8080/video/20150728_UL20m_积家_探访博洛尼亚电影修复实验室_FINAL_U150270.mpeg.mp4', '1', '积家博洛尼亚电影修复实验室之旅', null, '2', '2016-01-24', 'ADMIN', '2016-01-24', 'video/mp4', 'ADMIN', 'music', null, '积家博洛尼亚电影修复实验室之旅 位于意大利北部的博洛尼亚一直是电影人心中的圣地。在瑞士钟表品牌积家的支持下，博洛尼亚电影修复实验室以4K技术，通过清洁、扫描、数字修复、颜色和声音修复经典老电影。2014年，实验室耗费超过1000小时，最终修复完成吴宇森的经典影片《英雄本色》。和《极致》一起，走进博洛尼亚电影修复实验室，探秘老电影修复。', 'zn');
INSERT INTO `source` VALUES ('100300', 'http://localhost:8080/bootstrap/logos/A.Lange&Söhne.png', '1', '德国朗格', null, '1', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '99', null, 'zn');
INSERT INTO `source` VALUES ('100301', 'http://localhost:8080/bootstrap/logos/A.Lange&Söhne.png', '1', 'A.Lange&Söhne', null, '2', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '100', null, 'en');
INSERT INTO `source` VALUES ('100302', 'http://localhost:8080/bootstrap/logos/BAUME&MERCIER.png', '1', 'BAUME&MERCIER', null, '3', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '101', null, 'zn');
INSERT INTO `source` VALUES ('100303', 'http://localhost:8080/bootstrap/logos/BAUME&MERCIER.png', '1', 'BAUME&MERCIER', null, '4', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '102', null, 'en');
INSERT INTO `source` VALUES ('100304', 'http://localhost:8080/bootstrap/logos/Cartier.png', '1', 'Cartier', null, '5', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '103', null, 'zn');
INSERT INTO `source` VALUES ('100305', 'http://localhost:8080/bootstrap/logos/Cartier.png', '1', 'Cartier', null, '6', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '104', null, 'en');
INSERT INTO `source` VALUES ('100306', 'http://localhost:8080/bootstrap/logos/IWC Schaffhausen.png', '1', 'IWC Schaffhausen', null, '7', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '105', null, 'zn');
INSERT INTO `source` VALUES ('100307', 'http://localhost:8080/bootstrap/logos/IWC Schaffhausen.png', '1', 'IWC Schaffhausen', null, '8', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '106', null, 'en');
INSERT INTO `source` VALUES ('100308', 'http://localhost:8080/bootstrap/logos/Jaeger-LeCoultre.png', '1', '积家', null, '9', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '107', null, 'zn');
INSERT INTO `source` VALUES ('100309', 'http://localhost:8080/bootstrap/logos/Jaeger-LeCoultre.png', '1', 'Jaeger-LeCoultre', null, '10', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '108', null, 'en');
INSERT INTO `source` VALUES ('100310', 'http://localhost:8080/bootstrap/logos/Montblanc.png', '1', 'Montblanc', null, '11', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '109', null, 'zn');
INSERT INTO `source` VALUES ('100311', 'http://localhost:8080/bootstrap/logos/Montblanc.png', '1', 'Montblanc', null, '12', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '110', null, 'en');
INSERT INTO `source` VALUES ('100312', 'http://localhost:8080/bootstrap/logos/OFFICINE PANERAI.png', '1', 'OFFICINE PANERAI', null, '13', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '111', null, 'zn');
INSERT INTO `source` VALUES ('100313', 'http://localhost:8080/bootstrap/logos/OFFICINE PANERAI.png', '1', 'OFFICINE PANERAI', null, '14', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '112', null, 'en');
INSERT INTO `source` VALUES ('100314', 'http://localhost:8080/bootstrap/logos/PIAGET.png', '1', 'PIAGET', null, '15', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '113', null, 'zn');
INSERT INTO `source` VALUES ('100315', 'http://localhost:8080/bootstrap/logos/PIAGET.png', '1', 'PIAGET', null, '16', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '114', null, 'en');
INSERT INTO `source` VALUES ('100316', 'http://localhost:8080/bootstrap/logos/ROGER DUBUIS.png', '1', '罗杰杜彼', null, '17', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '115', null, 'zn');
INSERT INTO `source` VALUES ('100317', 'http://localhost:8080/bootstrap/logos/ROGER DUBUIS.png', '1', 'ROGER DUBUIS', null, '18', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '116', null, 'en');
INSERT INTO `source` VALUES ('100318', 'http://localhost:8080/bootstrap/logos/VACHERON CONSTANTIN.png', '1', '江诗丹顿', null, '19', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '117', null, 'zn');
INSERT INTO `source` VALUES ('100319', 'http://localhost:8080/bootstrap/logos/VACHERON CONSTANTIN.png', '1', 'VACHERON CONSTANTIN', null, '20', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '118', null, 'en');
INSERT INTO `source` VALUES ('100320', 'http://localhost:8080/bootstrap/logos/VanCleef&Arpels.png', '1', '梵克雅宝', null, '21', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '119', null, 'zn');
INSERT INTO `source` VALUES ('100321', 'http://localhost:8080/bootstrap/logos/VanCleef&Arpels.png', '1', 'VanCleef&Arpels', null, '22', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '120', null, 'en');
INSERT INTO `source` VALUES ('100322', 'http://localhost:8080/bootstrap/logos/AUDEMARS PIGUET.png', '1', 'AUDEMARS PIGUET', null, '23', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '121', null, 'zn');
INSERT INTO `source` VALUES ('100323', 'http://localhost:8080/bootstrap/logos/AUDEMARS PIGUET.png', '1', 'AUDEMARS PIGUET', null, '24', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '122', null, 'en');
INSERT INTO `source` VALUES ('100324', 'http://localhost:8080/bootstrap/logos/Breguet.png', '1', 'Breguet', null, '25', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '123', null, 'zn');
INSERT INTO `source` VALUES ('100325', 'http://localhost:8080/bootstrap/logos/Breguet.png', '1', 'Breguet', null, '26', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '124', null, 'en');
INSERT INTO `source` VALUES ('100326', 'http://localhost:8080/bootstrap/logos/Blancpain.png', '1', '宝珀', null, '27', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '125', null, 'zn');
INSERT INTO `source` VALUES ('100327', 'http://localhost:8080/bootstrap/logos/Blancpain.png', '1', 'Blancpain', null, '28', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '126', null, 'en');
INSERT INTO `source` VALUES ('100328', 'http://localhost:8080/bootstrap/logos/Glashutte PANERAI.png', '1', 'Glashutte PANERAI', null, '29', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '127', null, 'zn');
INSERT INTO `source` VALUES ('100329', 'http://localhost:8080/bootstrap/logos/Glashutte PANERAI.png', '1', 'Glashutte PANERAI', null, '30', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '128', null, 'en');
INSERT INTO `source` VALUES ('100330', 'http://localhost:8080/bootstrap/logos/JAQUET DROZ.png', '1', '雅克德罗', null, '31', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '129', null, 'zn');
INSERT INTO `source` VALUES ('100331', 'http://localhost:8080/bootstrap/logos/JAQUET DROZ.png', '1', 'JAQUET DROZ', null, '32', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '130', null, 'en');
INSERT INTO `source` VALUES ('100332', 'http://localhost:8080/bootstrap/logos/OMEGA.png', '1', 'OMEGA', null, '33', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '131', null, 'zn');
INSERT INTO `source` VALUES ('100333', 'http://localhost:8080/bootstrap/logos/OMEGA.png', '1', 'OMEGA', null, '34', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '132', null, 'en');
INSERT INTO `source` VALUES ('100334', 'http://localhost:8080/bootstrap/logos/LONGINES.png', '1', 'LONGINES', null, '35', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '133', null, 'zn');
INSERT INTO `source` VALUES ('100335', 'http://localhost:8080/bootstrap/logos/LONGINES.png', '1', 'LONGINES', null, '36', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '134', null, 'en');
INSERT INTO `source` VALUES ('100336', 'http://localhost:8080/bootstrap/logos/Dior.png', '1', 'Dior', null, '37', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '135', null, 'zn');
INSERT INTO `source` VALUES ('100337', 'http://localhost:8080/bootstrap/logos/Dior.png', '1', 'Dior', null, '38', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '136', null, 'en');
INSERT INTO `source` VALUES ('100338', 'http://localhost:8080/bootstrap/logos/CELINE.png', '1', 'CELINE', null, '39', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '137', null, 'zn');
INSERT INTO `source` VALUES ('100339', 'http://localhost:8080/bootstrap/logos/CELINE.png', '1', 'CELINE', null, '40', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '138', null, 'en');
INSERT INTO `source` VALUES ('100340', 'http://localhost:8080/bootstrap/logos/FENDI.png', '1', 'FENDI', null, '41', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '139', null, 'zn');
INSERT INTO `source` VALUES ('100341', 'http://localhost:8080/bootstrap/logos/FENDI.png', '1', 'FENDI', null, '42', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '140', null, 'en');
INSERT INTO `source` VALUES ('100342', 'http://localhost:8080/bootstrap/logos/GIVENCHY.png', '1', 'GIVENCHY', null, '43', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '141', null, 'zn');
INSERT INTO `source` VALUES ('100343', 'http://localhost:8080/bootstrap/logos/GIVENCHY.png', '1', 'GIVENCHY', null, '44', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '142', null, 'en');
INSERT INTO `source` VALUES ('100344', 'http://localhost:8080/bootstrap/logos/Louis Vuitton.png', '1', 'Louis Vuitton', null, '45', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '143', null, 'zn');
INSERT INTO `source` VALUES ('100345', 'http://localhost:8080/bootstrap/logos/Louis Vuitton.png', '1', 'Louis Vuitton', null, '46', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '144', null, 'en');
INSERT INTO `source` VALUES ('100346', 'http://localhost:8080/bootstrap/logos/GUERLAIN.png', '1', 'GUERLAIN', null, '47', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '145', null, 'zn');
INSERT INTO `source` VALUES ('100347', 'http://localhost:8080/bootstrap/logos/GUERLAIN.png', '1', 'GUERLAIN', null, '48', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '146', null, 'en');
INSERT INTO `source` VALUES ('100348', 'http://localhost:8080/bootstrap/logos/CHAUMET.png', '1', 'CHAUMET', null, '49', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '147', null, 'zn');
INSERT INTO `source` VALUES ('100349', 'http://localhost:8080/bootstrap/logos/CHAUMET.png', '1', 'CHAUMET', null, '50', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '148', null, 'en');
INSERT INTO `source` VALUES ('100350', 'http://localhost:8080/bootstrap/logos/DE BEERS.png', '1', 'DE BEERS', null, '51', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '149', null, 'zn');
INSERT INTO `source` VALUES ('100351', 'http://localhost:8080/bootstrap/logos/DE BEERS.png', '1', 'DE BEERS', null, '52', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '150', null, 'en');
INSERT INTO `source` VALUES ('100352', 'http://localhost:8080/bootstrap/logos/Hennessy.png', '1', 'Hennessy', null, '53', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '151', null, 'zn');
INSERT INTO `source` VALUES ('100353', 'http://localhost:8080/bootstrap/logos/Hennessy.png', '1', 'Hennessy', null, '54', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '152', null, 'en');
INSERT INTO `source` VALUES ('100354', 'http://localhost:8080/bootstrap/logos/Qeelin.png', '1', 'Qeelin', null, '55', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '153', null, 'zn');
INSERT INTO `source` VALUES ('100355', 'http://localhost:8080/bootstrap/logos/Qeelin.png', '1', 'Qeelin', null, '56', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '154', null, 'en');
INSERT INTO `source` VALUES ('100356', 'http://localhost:8080/bootstrap/logos/GIRARD-PERREGAUX.png', '1', '芝柏表', null, '57', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '155', null, 'zn');
INSERT INTO `source` VALUES ('100357', 'http://localhost:8080/bootstrap/logos/GIRARD-PERREGAUX.png', '1', 'GIRARD-PERREGAUX', null, '58', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '156', null, 'en');
INSERT INTO `source` VALUES ('100358', 'http://localhost:8080/bootstrap/logos/HERMES.png', '1', 'HERMES', null, '59', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '157', null, 'zn');
INSERT INTO `source` VALUES ('100359', 'http://localhost:8080/bootstrap/logos/HERMES.png', '1', 'HERMES', null, '60', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '158', null, 'en');
INSERT INTO `source` VALUES ('100360', 'http://localhost:8080/bootstrap/logos/SHANG XIA.png', '1', 'SHANG XIA', null, '61', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '159', null, 'zn');
INSERT INTO `source` VALUES ('100361', 'http://localhost:8080/bootstrap/logos/SHANG XIA.png', '1', 'SHANG XIA', null, '62', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '160', null, 'en');
INSERT INTO `source` VALUES ('100362', 'http://localhost:8080/bootstrap/logos/CHANEL.png', '1', 'CHANEL', null, '63', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '161', null, 'zn');
INSERT INTO `source` VALUES ('100363', 'http://localhost:8080/bootstrap/logos/CHANEL.png', '1', 'CHANEL', null, '64', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '162', null, 'en');
INSERT INTO `source` VALUES ('100364', 'http://localhost:8080/bootstrap/logos/Patek Philippe.png', '1', 'Patek Philippe', null, '65', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '163', null, 'zn');
INSERT INTO `source` VALUES ('100365', 'http://localhost:8080/bootstrap/logos/Patek Philippe.png', '1', 'Patek Philippe', null, '66', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '164', null, 'en');
INSERT INTO `source` VALUES ('100366', 'http://localhost:8080/bootstrap/logos/ROLEX.png', '1', 'ROLEX', null, '67', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '165', null, 'zn');
INSERT INTO `source` VALUES ('100367', 'http://localhost:8080/bootstrap/logos/ROLEX.png', '1', 'ROLEX', null, '68', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '166', null, 'en');
INSERT INTO `source` VALUES ('100368', 'http://localhost:8080/bootstrap/logos/Chopard.png', '1', '萧邦', null, '69', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '167', null, 'zn');
INSERT INTO `source` VALUES ('100369', 'http://localhost:8080/bootstrap/logos/Chopard.png', '1', 'Chopard', null, '70', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '168', null, 'en');
INSERT INTO `source` VALUES ('100370', 'http://localhost:8080/bootstrap/logos/FOREVERMARK.png', '1', 'FOREVERMARK', null, '71', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '169', null, 'zn');
INSERT INTO `source` VALUES ('100371', 'http://localhost:8080/bootstrap/logos/FOREVERMARK.png', '1', 'FOREVERMARK', null, '72', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '170', null, 'en');
INSERT INTO `source` VALUES ('100372', 'http://localhost:8080/bootstrap/logos/MIKIMOTO.png', '1', 'MIKIMOTO', null, '73', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '171', null, 'zn');
INSERT INTO `source` VALUES ('100373', 'http://localhost:8080/bootstrap/logos/MIKIMOTO.png', '1', 'MIKIMOTO', null, '74', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '172', null, 'en');
INSERT INTO `source` VALUES ('100374', 'http://localhost:8080/bootstrap/logos/PLATINUM.png', '1', 'PLATINUM', null, '75', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '173', null, 'zn');
INSERT INTO `source` VALUES ('100375', 'http://localhost:8080/bootstrap/logos/PLATINUM.png', '1', 'PLATINUM', null, '76', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '174', null, 'en');
INSERT INTO `source` VALUES ('100376', 'http://localhost:8080/bootstrap/logos/Wellendorff.png', '1', 'Wellendorff', null, '77', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '175', null, 'zn');
INSERT INTO `source` VALUES ('100377', 'http://localhost:8080/bootstrap/logos/Wellendorff.png', '1', 'Wellendorff', null, '78', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '176', null, 'en');
INSERT INTO `source` VALUES ('100378', 'http://localhost:8080/bootstrap/logos/VERTU.png', '1', 'VERTU', null, '79', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '177', null, 'zn');
INSERT INTO `source` VALUES ('100379', 'http://localhost:8080/bootstrap/logos/VERTU.png', '1', 'VERTU', null, '80', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '178', null, 'en');
INSERT INTO `source` VALUES ('100380', 'http://localhost:8080/bootstrap/logos/LONGCHAMP.png', '1', 'LONGCHAMP', null, '81', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '179', null, 'zn');
INSERT INTO `source` VALUES ('100381', 'http://localhost:8080/bootstrap/logos/LONGCHAMP.png', '1', 'LONGCHAMP', null, '82', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '180', null, 'en');
INSERT INTO `source` VALUES ('100382', 'http://localhost:8080/bootstrap/logos/MaxMara.png', '1', 'MaxMara', null, '83', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '181', null, 'zn');
INSERT INTO `source` VALUES ('100383', 'http://localhost:8080/bootstrap/logos/MaxMara.png', '1', 'MaxMara', null, '84', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '182', null, 'en');
INSERT INTO `source` VALUES ('100384', 'http://localhost:8080/bootstrap/logos/Ermenegildo.png', '1', 'Ermenegildo Zegna', null, '85', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '183', null, 'zn');
INSERT INTO `source` VALUES ('100385', 'http://localhost:8080/bootstrap/logos/Ermenegildo.png', '1', 'Ermenegildo', null, '86', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '184', null, 'en');
INSERT INTO `source` VALUES ('100386', 'http://localhost:8080/bootstrap/logos/ST.JOHN.png', '1', 'ST.JOHN', null, '87', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '185', null, 'zn');
INSERT INTO `source` VALUES ('100387', 'http://localhost:8080/bootstrap/logos/ST.JOHN.png', '1', 'ST.JOHN', null, '88', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '186', null, 'en');
INSERT INTO `source` VALUES ('100388', 'http://localhost:8080/bootstrap/logos/COACH.png', '1', 'COACH', null, '89', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '187', null, 'zn');
INSERT INTO `source` VALUES ('100389', 'http://localhost:8080/bootstrap/logos/COACH.png', '1', 'COACH', null, '90', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '188', null, 'en');
INSERT INTO `source` VALUES ('100390', 'http://localhost:8080/bootstrap/logos/ALFA ROMEO.png', '1', 'ALFA ROMEO', null, '91', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '189', null, 'zn');
INSERT INTO `source` VALUES ('100391', 'http://localhost:8080/bootstrap/logos/ALFA ROMEO.png', '1', 'ALFA ROMEO', null, '92', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '190', null, 'en');
INSERT INTO `source` VALUES ('100392', 'http://localhost:8080/bootstrap/logos/MASERATI.png', '1', 'MASERATI', null, '93', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '191', null, 'zn');
INSERT INTO `source` VALUES ('100393', 'http://localhost:8080/bootstrap/logos/MASERATI.png', '1', 'MASERATI', null, '94', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '192', null, 'en');
INSERT INTO `source` VALUES ('100394', 'http://localhost:8080/bootstrap/logos/Ferrari.png', '1', 'Ferrari', null, '95', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '193', null, 'zn');
INSERT INTO `source` VALUES ('100395', 'http://localhost:8080/bootstrap/logos/Ferrari.png', '1', 'Ferrari', null, '96', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '194', null, 'en');
INSERT INTO `source` VALUES ('100396', 'http://localhost:8080/bootstrap/logos/CHRYSLER.png', '1', 'CHRYSLER', null, '97', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '195', null, 'zn');
INSERT INTO `source` VALUES ('100397', 'http://localhost:8080/bootstrap/logos/CHRYSLER.png', '1', 'CHRYSLER', null, '98', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '196', null, 'en');
INSERT INTO `source` VALUES ('100398', 'http://localhost:8080/bootstrap/logos/JEEP.png', '1', 'JEEP', null, '99', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '197', null, 'zn');
INSERT INTO `source` VALUES ('100399', 'http://localhost:8080/bootstrap/logos/JEEP.png', '1', 'JEEP', null, '100', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '198', null, 'en');
INSERT INTO `source` VALUES ('100400', 'http://localhost:8080/bootstrap/logos/JAGUAR.png', '1', 'JAGUAR', null, '101', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '199', null, 'zn');
INSERT INTO `source` VALUES ('100401', 'http://localhost:8080/bootstrap/logos/JAGUAR.png', '1', 'JAGUAR', null, '102', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '200', null, 'en');
INSERT INTO `source` VALUES ('100402', 'http://localhost:8080/bootstrap/logos/Ferretti Group.png', '1', 'Ferretti Group', null, '103', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '201', null, 'zn');
INSERT INTO `source` VALUES ('100403', 'http://localhost:8080/bootstrap/logos/Ferretti Group.png', '1', 'Ferretti Group', null, '104', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '202', null, 'en');
INSERT INTO `source` VALUES ('100404', 'http://localhost:8080/bootstrap/logos/GODIVA.png', '1', 'GODIVA', null, '105', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '203', null, 'zn');
INSERT INTO `source` VALUES ('100405', 'http://localhost:8080/bootstrap/logos/GODIVA.png', '1', 'GODIVA', null, '106', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '204', null, 'en');
INSERT INTO `source` VALUES ('100406', 'http://localhost:8080/bootstrap/logos/INTERCONTINENTAL.png', '1', '洲际酒店及度假村', null, '107', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '205', null, 'zn');
INSERT INTO `source` VALUES ('100407', 'http://localhost:8080/bootstrap/logos/INTERCONTINENTAL.png', '1', 'INTERCONTINENTAL', null, '108', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '206', null, 'en');
INSERT INTO `source` VALUES ('100408', 'http://localhost:8080/bootstrap/logos/THE LEADING HOTELS.png', '1', 'THE LEADING HOTELS', null, '109', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '207', null, 'zn');
INSERT INTO `source` VALUES ('100409', 'http://localhost:8080/bootstrap/logos/THE LEADING HOTELS.png', '1', 'THE LEADING HOTELS', null, '110', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '208', null, 'en');
INSERT INTO `source` VALUES ('100410', 'http://localhost:8080/bootstrap/logos/Dorchester Collection.png', '1', 'Dorchester Collection', null, '111', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '209', null, 'zn');
INSERT INTO `source` VALUES ('100411', 'http://localhost:8080/bootstrap/logos/Dorchester Collection.png', '1', 'Dorchester Collection', null, '112', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '210', null, 'en');
INSERT INTO `source` VALUES ('100412', 'http://localhost:8080/bootstrap/logos/Club Med.png', '1', '地中海俱乐部', null, '113', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '211', null, 'zn');
INSERT INTO `source` VALUES ('100413', 'http://localhost:8080/bootstrap/logos/Club Med.png', '1', 'Club Med', null, '114', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '212', null, 'en');
INSERT INTO `source` VALUES ('100414', 'http://localhost:8080/bootstrap/logos/Swissair.png', '1', '瑞士航空', null, '115', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '213', null, 'zn');
INSERT INTO `source` VALUES ('100415', 'http://localhost:8080/bootstrap/logos/Swissair.png', '1', 'Swissair', null, '116', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '214', null, 'en');
INSERT INTO `source` VALUES ('100416', 'http://localhost:8080/bootstrap/logos/Air New Zealand.png', '1', '新西兰航空', null, '117', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '215', null, 'zn');
INSERT INTO `source` VALUES ('100417', 'http://localhost:8080/bootstrap/logos/Air New Zealand.png', '1', 'Air New Zealand', null, '118', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '216', null, 'en');
INSERT INTO `source` VALUES ('100418', 'http://localhost:8080/bootstrap/logos/Steinway&Sons.png', '1', '施坦威钢琴', null, '119', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '217', null, 'zn');
INSERT INTO `source` VALUES ('100419', 'http://localhost:8080/bootstrap/logos/Steinway&Sons.png', '1', 'Steinway&Sons', null, '120', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '218', null, 'en');

-- ----------------------------
-- Table structure for `user_info`
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `create_time` date NOT NULL,
  `creator` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_info
-- ----------------------------

-- ----------------------------
-- Table structure for `user_privilege`
-- ----------------------------
DROP TABLE IF EXISTS `user_privilege`;
CREATE TABLE `user_privilege` (
  `user_id` int(11) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`privilege_id`),
  KEY `privilege_id` (`privilege_id`),
  CONSTRAINT `privilege_id` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_privilege
-- ----------------------------

-- ----------------------------
-- Table structure for `webmodel`
-- ----------------------------
DROP TABLE IF EXISTS `webmodel`;
CREATE TABLE `webmodel` (
  `is_auto` varchar(10) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `areaname` varchar(200) NOT NULL,
  `first_level` varchar(200) DEFAULT NULL,
  `second_level` varchar(200) DEFAULT NULL,
  `thirdlevel` varchar(200) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `remark` varchar(2000) DEFAULT NULL,
  `is_hide` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of webmodel
-- ----------------------------
