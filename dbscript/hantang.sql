/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50710
Source Host           : localhost:3306
Source Database       : hantang

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2016-02-04 12:12:19
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
) ENGINE=InnoDB AUTO_INCREMENT=1070 DEFAULT CHARSET=utf8;

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
INSERT INTO `keyword` VALUES ('ul', '15', '2015', '1', 'ADMIN', '2016-01-23', '7', 'ADMIN', '2016-01-23', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('ul', '16', '2016', '1', 'ADMIN', '2016-01-20', '8', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('ul', '17', '中国', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '18', '奥地利', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '19', '法国', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '20', '瑞士', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '21', '德国', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '22', '意大利', '1', 'ADMIN', '2016-01-20', '6', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '23', '日本', '1', 'ADMIN', '2016-01-20', '7', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '24', '美国', '1', 'ADMIN', '2016-01-20', '8', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('ul', '26', '钟表', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '27', '珠宝', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '28', '时尚', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '29', '音乐', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '30', '艺术', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '31', '汽车', '1', 'ADMIN', '2016-01-20', '7', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '32', '电影', '1', 'ADMIN', '2016-01-22', '2', 'ADMIN', '2016-01-22', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '33', '其他', '1', 'ADMIN', '2016-01-20', '8', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('ul', '34', '展览', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('ul', '35', '开店', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('ul', '36', '走秀', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('ul', '37', '演出', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('ul', '38', '赛事', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('ul', '39', '其他', '1', 'ADMIN', '2016-01-20', '6', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '40', '2009', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('awoe', '41', '2010', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('awoe', '42', '2011', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('awoe', '43', '2012', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('awoe', '44', '2013', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('awoe', '45', '2014', '1', 'ADMIN', '2016-01-20', '6', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('awoe', '46', '2015', '1', 'ADMIN', '2016-01-23', '7', 'ADMIN', '2016-01-23', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('awoe', '47', '2016', '1', 'ADMIN', '2016-01-20', '8', 'ADMIN', '2016-01-20', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('awoe', '48', '中国', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('awoe', '49', '奥地利', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('awoe', '50', '法国', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('awoe', '51', '瑞士', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('awoe', '52', '德国', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('awoe', '53', '意大利', '1', 'ADMIN', '2016-01-20', '6', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('awoe', '54', '日本', '1', 'ADMIN', '2016-01-20', '7', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('awoe', '55', '美国', '1', 'ADMIN', '2016-01-20', '8', 'ADMIN', '2016-01-20', 'zn', 'locationdetails', null);
INSERT INTO `keyword` VALUES ('awoe', '57', '钟表', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '58', '珠宝', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '59', '时尚', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '60', '音乐', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '61', '艺术', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '62', '汽车', '1', 'ADMIN', '2016-01-20', '7', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '63', '其他', '1', 'ADMIN', '2016-01-20', '8', 'ADMIN', '2016-01-20', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '64', '展览', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '65', '开店', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '66', '走秀', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '67', '演出', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '68', '赛事', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '69', '其他', '1', 'ADMIN', '2016-01-20', '6', 'ADMIN', '2016-01-20', 'zn', 'activedetails', null);
INSERT INTO `keyword` VALUES ('awoe', '70', '电影', '1', 'ADMIN', '2016-01-22', '2', 'ADMIN', '2016-01-22', 'zn', 'typedetails', '');
INSERT INTO `keyword` VALUES ('awoe', '71', '2015', '1', 'ADMIN', '2016-01-23', '7', 'ADMIN', '2016-01-23', 'zn', 'yeardetails', null);
INSERT INTO `keyword` VALUES ('brandname', '99', 'A.Lange&Söhne', '1', 'ADMIN', '2016-01-23', '1', 'ADMIN', '2016-01-23', 'zn', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '100', 'A.Lange&Söhne', '1', 'ADMIN', '2016-01-23', '2', 'ADMIN', '2016-01-23', 'en', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '101', '柏林电影节', '1', 'ADMIN', '2016-01-23', '3', 'ADMIN', '2016-01-23', 'zn', 'B', null);
INSERT INTO `keyword` VALUES ('brandname', '102', 'Berlinale', '1', 'ADMIN', '2016-01-23', '4', 'ADMIN', '2016-01-23', 'en', 'B', null);
INSERT INTO `keyword` VALUES ('brandname', '103', '卡地亚', '1', 'ADMIN', '2016-01-23', '5', 'ADMIN', '2016-01-23', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '104', 'Cartier', '1', 'ADMIN', '2016-01-23', '6', 'ADMIN', '2016-01-23', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '105', 'Hermès', '1', 'ADMIN', '2016-01-23', '7', 'ADMIN', '2016-01-23', 'zn', 'H', null);
INSERT INTO `keyword` VALUES ('brandname', '106', 'Hermès', '1', 'ADMIN', '2016-01-23', '8', 'ADMIN', '2016-01-23', 'en', 'H', null);
INSERT INTO `keyword` VALUES ('brandname', '107', '积家', '1', 'ADMIN', '2016-01-23', '9', 'ADMIN', '2016-01-23', 'zn', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '108', 'Jaeger-LeCoultre', '1', 'ADMIN', '2016-01-23', '10', 'ADMIN', '2016-01-23', 'en', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '109', '万宝龙', '1', 'ADMIN', '2016-01-23', '11', 'ADMIN', '2016-01-23', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '110', 'Montblanc', '1', 'ADMIN', '2016-01-23', '12', 'ADMIN', '2016-01-23', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '111', '莫扎特周', '1', 'ADMIN', '2016-01-23', '13', 'ADMIN', '2016-01-23', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '112', 'Mozart Week', '1', 'ADMIN', '2016-01-23', '14', 'ADMIN', '2016-01-23', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '113', 'Piaget', '1', 'ADMIN', '2016-01-23', '15', 'ADMIN', '2016-01-23', 'zn', 'P', null);
INSERT INTO `keyword` VALUES ('brandname', '114', 'Piaget', '1', 'ADMIN', '2016-01-23', '16', 'ADMIN', '2016-01-23', 'en', 'P', null);
INSERT INTO `keyword` VALUES ('brandname', '115', 'Salzburg', '1', 'ADMIN', '2016-01-23', '17', 'ADMIN', '2016-01-23', 'zn', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '116', 'Salzburg', '1', 'ADMIN', '2016-01-23', '18', 'ADMIN', '2016-01-23', 'en', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '117', 'Salzburg Festival', '1', 'ADMIN', '2016-01-23', '19', 'ADMIN', '2016-01-23', 'zn', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '118', 'Salzburg Festival', '1', 'ADMIN', '2016-01-23', '20', 'ADMIN', '2016-01-23', 'en', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '119', 'SHANGXIA', '1', 'ADMIN', '2016-01-23', '21', 'ADMIN', '2016-01-23', 'zn', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '120', 'SHANGXIA', '1', 'ADMIN', '2016-01-23', '22', 'ADMIN', '2016-01-23', 'en', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '121', 'Switzerland', '1', 'ADMIN', '2016-01-23', '23', 'ADMIN', '2016-01-23', 'zn', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '122', 'Switzerland', '1', 'ADMIN', '2016-01-23', '24', 'ADMIN', '2016-01-23', 'en', 'S', null);
INSERT INTO `keyword` VALUES ('brandname', '123', 'Absolut Vodka', '1', 'ADMIN', '2016-01-31', '25', 'ADMIN', '2016-01-31', 'zn', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '124', 'Absolut Vodka', '1', 'ADMIN', '2016-01-31', '26', 'ADMIN', '2016-01-31', 'en', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '125', 'Art Basel', '1', 'ADMIN', '2016-01-31', '27', 'ADMIN', '2016-01-31', 'zn', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '126', 'Art Basel', '1', 'ADMIN', '2016-01-31', '28', 'ADMIN', '2016-01-31', 'en', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '127', 'Berluti', '1', 'ADMIN', '2016-01-31', '29', 'ADMIN', '2016-01-31', 'zn', 'B', null);
INSERT INTO `keyword` VALUES ('brandname', '128', 'Berluti', '1', 'ADMIN', '2016-01-31', '30', 'ADMIN', '2016-01-31', 'en', 'B', null);
INSERT INTO `keyword` VALUES ('brandname', '129', '戛纳电影节', '1', 'ADMIN', '2016-01-31', '31', 'ADMIN', '2016-01-31', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '130', 'Cannes Film Festival', '1', 'ADMIN', '2016-01-31', '32', 'ADMIN', '2016-01-31', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '131', 'CHANEL', '1', 'ADMIN', '2016-01-31', '33', 'ADMIN', '2016-01-31', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '132', 'CHANEL', '1', 'ADMIN', '2016-01-31', '34', 'ADMIN', '2016-01-31', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '133', 'CHAUMET', '1', 'ADMIN', '2016-01-31', '35', 'ADMIN', '2016-01-31', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '134', 'CHAUMET', '1', 'ADMIN', '2016-01-31', '36', 'ADMIN', '2016-01-31', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '135', 'Chopard', '1', 'ADMIN', '2016-01-31', '37', 'ADMIN', '2016-01-31', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '136', 'Chopard', '1', 'ADMIN', '2016-01-31', '38', 'ADMIN', '2016-01-31', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '137', 'Christian Dior', '1', 'ADMIN', '2016-01-31', '39', 'ADMIN', '2016-01-31', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '138', 'Christian Dior', '1', 'ADMIN', '2016-01-31', '40', 'ADMIN', '2016-01-31', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '139', 'COACH', '1', 'ADMIN', '2016-01-31', '41', 'ADMIN', '2016-01-31', 'zn', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '140', 'COACH', '1', 'ADMIN', '2016-01-31', '42', 'ADMIN', '2016-01-31', 'en', 'C', null);
INSERT INTO `keyword` VALUES ('brandname', '141', 'DAZZLE', '1', 'ADMIN', '2016-01-31', '43', 'ADMIN', '2016-01-31', 'zn', 'D', null);
INSERT INTO `keyword` VALUES ('brandname', '142', 'DAZZLE', '1', 'ADMIN', '2016-01-31', '44', 'ADMIN', '2016-01-31', 'en', 'D', null);
INSERT INTO `keyword` VALUES ('brandname', '143', 'Fendi', '1', 'ADMIN', '2016-01-31', '45', 'ADMIN', '2016-01-31', 'zn', 'F', null);
INSERT INTO `keyword` VALUES ('brandname', '144', 'Fendi', '1', 'ADMIN', '2016-01-31', '46', 'ADMIN', '2016-01-31', 'en', 'F', null);
INSERT INTO `keyword` VALUES ('brandname', '145', '日内瓦车展', '1', 'ADMIN', '2016-01-31', '47', 'ADMIN', '2016-01-31', 'zn', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '146', 'Geneva Motor Show', '1', 'ADMIN', '2016-01-31', '48', 'ADMIN', '2016-01-31', 'en', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '147', 'Givenchy', '1', 'ADMIN', '2016-01-31', '48', 'ADMIN', '2016-01-31', 'zn', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '148', 'Givenchy', '1', 'ADMIN', '2016-01-31', '49', 'ADMIN', '2016-01-31', 'en', 'G', null);
INSERT INTO `keyword` VALUES ('brandname', '149', 'Jeep', '1', 'ADMIN', '2016-01-31', '50', 'ADMIN', '2016-01-31', 'zn', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '150', 'Jeep', '1', 'ADMIN', '2016-01-31', '51', 'ADMIN', '2016-01-31', 'en', 'J', null);
INSERT INTO `keyword` VALUES ('brandname', '151', '路易威登', '1', 'ADMIN', '2016-01-31', '52', 'ADMIN', '2016-01-31', 'zn', 'L', null);
INSERT INTO `keyword` VALUES ('brandname', '152', 'Louis Vuitton', '1', 'ADMIN', '2016-01-31', '53', 'ADMIN', '2016-01-31', 'en', 'L', null);
INSERT INTO `keyword` VALUES ('brandname', '153', 'Max Mara', '1', 'ADMIN', '2016-01-31', '54', 'ADMIN', '2016-01-31', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '154', 'Max Mara', '1', 'ADMIN', '2016-01-31', '55', 'ADMIN', '2016-01-31', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '155', 'Meissen', '1', 'ADMIN', '2016-01-31', '56', 'ADMIN', '2016-01-31', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '156', 'Meissen', '1', 'ADMIN', '2016-01-31', '57', 'ADMIN', '2016-01-31', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '157', 'Michael Kors', '1', 'ADMIN', '2016-01-31', '58', 'ADMIN', '2016-01-31', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '158', 'Michael Kors', '1', 'ADMIN', '2016-01-31', '59', 'ADMIN', '2016-01-31', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '159', 'MIKIMOTO', '1', 'ADMIN', '2016-01-31', '60', 'ADMIN', '2016-01-31', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '160', 'MIKIMOTO', '1', 'ADMIN', '2016-01-31', '61', 'ADMIN', '2016-01-31', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '161', 'Milan Furniture Fair', '1', 'ADMIN', '2016-01-31', '62', 'ADMIN', '2016-01-31', 'zn', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '162', 'Milan Furniture Fair', '1', 'ADMIN', '2016-01-31', '63', 'ADMIN', '2016-01-31', 'en', 'M', null);
INSERT INTO `keyword` VALUES ('brandname', '163', 'Panerai', '1', 'ADMIN', '2016-01-31', '64', 'ADMIN', '2016-01-31', 'zn', 'P', null);
INSERT INTO `keyword` VALUES ('brandname', '164', 'Panerai', '1', 'ADMIN', '2016-01-31', '65', 'ADMIN', '2016-01-31', 'en', 'P', null);
INSERT INTO `keyword` VALUES ('brandname', '165', 'Audemars Piguet', '1', 'ADMIN', '2016-01-31', '66', 'ADMIN', '2016-01-31', 'zn', 'A', null);
INSERT INTO `keyword` VALUES ('brandname', '166', 'Audemars Piguet', '1', 'ADMIN', '2016-01-31', '67', 'ADMIN', '2016-01-31', 'en', 'A', null);
INSERT INTO `keyword` VALUES ('ul', '170', '上海', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '17', null);
INSERT INTO `keyword` VALUES ('awoe', '171', '上海', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '48', null);
INSERT INTO `keyword` VALUES ('ul', '172', '北京', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '17', null);
INSERT INTO `keyword` VALUES ('awoe', '173', '北京', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '48', null);
INSERT INTO `keyword` VALUES ('ul', '174', '成都', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '17', null);
INSERT INTO `keyword` VALUES ('awoe', '175', '成都', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '48', null);
INSERT INTO `keyword` VALUES ('ul', '176', '香港', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '17', null);
INSERT INTO `keyword` VALUES ('awoe', '177', '香港', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '48', null);
INSERT INTO `keyword` VALUES ('ul', '178', '澳门', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '17', null);
INSERT INTO `keyword` VALUES ('awoe', '179', '澳门', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '48', null);
INSERT INTO `keyword` VALUES ('ul', '180', '台北', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '17', null);
INSERT INTO `keyword` VALUES ('awoe', '181', '台北', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '48', null);
INSERT INTO `keyword` VALUES ('ul', '182', '其他', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '17', null);
INSERT INTO `keyword` VALUES ('awoe', '183', '其他', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '48', null);
INSERT INTO `keyword` VALUES ('ul', '184', '日内瓦', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '20', null);
INSERT INTO `keyword` VALUES ('awoe', '185', '日内瓦', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '51', null);
INSERT INTO `keyword` VALUES ('ul', '186', '巴塞尔', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '20', null);
INSERT INTO `keyword` VALUES ('awoe', '187', '巴塞尔', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '51', null);
INSERT INTO `keyword` VALUES ('ul', '188', '其他', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '20', null);
INSERT INTO `keyword` VALUES ('awoe', '189', '其他', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '51', null);
INSERT INTO `keyword` VALUES ('ul', '190', '萨尔茨堡', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '18', null);
INSERT INTO `keyword` VALUES ('awoe', '191', '萨尔茨堡', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '49', null);
INSERT INTO `keyword` VALUES ('ul', '192', '巴黎', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '19', null);
INSERT INTO `keyword` VALUES ('awoe', '193', '巴黎', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '50', null);
INSERT INTO `keyword` VALUES ('ul', '194', '戛纳', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '19', null);
INSERT INTO `keyword` VALUES ('awoe', '195', '戛纳', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '50', null);
INSERT INTO `keyword` VALUES ('ul', '196', '其他', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '19', null);
INSERT INTO `keyword` VALUES ('awoe', '197', '其他', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '50', null);
INSERT INTO `keyword` VALUES ('ul', '198', '米兰', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '22', null);
INSERT INTO `keyword` VALUES ('awoe', '199', '米兰', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '53', null);
INSERT INTO `keyword` VALUES ('ul', '200', '威尼斯', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '22', null);
INSERT INTO `keyword` VALUES ('awoe', '201', '威尼斯', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '53', null);
INSERT INTO `keyword` VALUES ('ul', '202', '佛罗伦萨', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '22', null);
INSERT INTO `keyword` VALUES ('awoe', '203', '佛罗伦萨', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '53', null);
INSERT INTO `keyword` VALUES ('ul', '204', '博洛尼亚', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '22', null);
INSERT INTO `keyword` VALUES ('awoe', '205', '博洛尼亚', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '53', null);
INSERT INTO `keyword` VALUES ('ul', '206', '柏林', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '21', null);
INSERT INTO `keyword` VALUES ('awoe', '207', '柏林', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '52', null);
INSERT INTO `keyword` VALUES ('ul', '208', '格拉苏蒂', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '21', null);
INSERT INTO `keyword` VALUES ('awoe', '209', '格拉苏蒂', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '52', null);
INSERT INTO `keyword` VALUES ('ul', '210', '麦森', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '21', null);
INSERT INTO `keyword` VALUES ('awoe', '211', '麦森', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '52', null);
INSERT INTO `keyword` VALUES ('ul', '212', '纽约', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '24', null);
INSERT INTO `keyword` VALUES ('awoe', '213', '纽约', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '55', null);
INSERT INTO `keyword` VALUES ('ul', '214', '洛杉矶', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '24', null);
INSERT INTO `keyword` VALUES ('awoe', '215', '洛杉矶', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '55', null);
INSERT INTO `keyword` VALUES ('ul', '216', '东京', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '23', null);
INSERT INTO `keyword` VALUES ('awoe', '217', '东京', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '54', null);
INSERT INTO `keyword` VALUES ('ul', '218', '其他', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '23', null);
INSERT INTO `keyword` VALUES ('awoe', '219', '其他', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', '54', null);
INSERT INTO `keyword` VALUES ('search', '220', '钟表', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '221', '珠宝', '1', 'ADMIN', '2016-01-31', '2', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '222', '时尚', '1', 'ADMIN', '2016-01-31', '3', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '223', '美妆', '1', 'ADMIN', '2016-01-31', '4', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '224', '音乐', '1', 'ADMIN', '2016-01-31', '5', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '225', '艺术', '1', 'ADMIN', '2016-01-31', '6', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '226', '电影', '1', 'ADMIN', '2016-01-31', '7', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '227', '汽车', '1', 'ADMIN', '2016-01-31', '8', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '228', '游艇', '1', 'ADMIN', '2016-01-31', '9', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '229', '家居', '1', 'ADMIN', '2016-01-31', '10', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '230', '生活方式', '1', 'ADMIN', '2016-01-31', '11', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '231', '旅行', '1', 'ADMIN', '2016-01-31', '12', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '232', '酒', '1', 'ADMIN', '2016-01-31', '13', 'ADMIN', '2016-01-31', 'zn', 'typedetails', null);
INSERT INTO `keyword` VALUES ('search', '233', '新品发布', '1', 'ADMIN', '2016-01-31', '1', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '234', '展览', '1', 'ADMIN', '2016-01-31', '2', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '235', '开店', '1', 'ADMIN', '2016-01-31', '3', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '236', '走秀', '1', 'ADMIN', '2016-01-31', '4', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '237', '演出', '1', 'ADMIN', '2016-01-31', '5', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '238', '赛事', '1', 'ADMIN', '2016-01-31', '6', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '239', '明星', '1', 'ADMIN', '2016-01-31', '7', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '240', '周年庆', '1', 'ADMIN', '2016-01-31', '8', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '241', '人物专访', '1', 'ADMIN', '2016-01-31', '9', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '242', '品牌', '1', 'ADMIN', '2016-01-31', '10', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '243', '故事', '1', 'ADMIN', '2016-01-31', '11', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '244', '国家', '1', 'ADMIN', '2016-01-31', '12', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '245', '博物馆', '1', 'ADMIN', '2016-01-31', '13', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);
INSERT INTO `keyword` VALUES ('search', '246', '其他', '1', 'ADMIN', '2016-01-31', '14', 'ADMIN', '2016-01-31', 'zn', 'keyword', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keyword_source_relation
-- ----------------------------
INSERT INTO `keyword_source_relation` VALUES ('100213', '101', '7');
INSERT INTO `keyword_source_relation` VALUES ('100213', '226', '8');
INSERT INTO `keyword_source_relation` VALUES ('100213', '15', '9');
INSERT INTO `keyword_source_relation` VALUES ('100213', '21', '10');
INSERT INTO `keyword_source_relation` VALUES ('100213', '206', '11');
INSERT INTO `keyword_source_relation` VALUES ('100213', '239', '12');
INSERT INTO `keyword_source_relation` VALUES ('100223', '102', '13');
INSERT INTO `keyword_source_relation` VALUES ('100223', '226', '14');
INSERT INTO `keyword_source_relation` VALUES ('100223', '15', '15');
INSERT INTO `keyword_source_relation` VALUES ('100223', '21', '16');
INSERT INTO `keyword_source_relation` VALUES ('100223', '206', '17');
INSERT INTO `keyword_source_relation` VALUES ('100223', '239', '18');
INSERT INTO `keyword_source_relation` VALUES ('100215', '111', '19');
INSERT INTO `keyword_source_relation` VALUES ('100215', '224', '20');
INSERT INTO `keyword_source_relation` VALUES ('100215', '15', '21');
INSERT INTO `keyword_source_relation` VALUES ('100215', '18', '22');
INSERT INTO `keyword_source_relation` VALUES ('100215', '190', '23');
INSERT INTO `keyword_source_relation` VALUES ('100215', '237', '24');
INSERT INTO `keyword_source_relation` VALUES ('100225', '112', '25');
INSERT INTO `keyword_source_relation` VALUES ('100225', '224', '26');
INSERT INTO `keyword_source_relation` VALUES ('100225', '15', '27');
INSERT INTO `keyword_source_relation` VALUES ('100225', '18', '28');
INSERT INTO `keyword_source_relation` VALUES ('100225', '190', '29');
INSERT INTO `keyword_source_relation` VALUES ('100225', '237', '30');
INSERT INTO `keyword_source_relation` VALUES ('100216', '145', '31');
INSERT INTO `keyword_source_relation` VALUES ('100216', '227', '32');
INSERT INTO `keyword_source_relation` VALUES ('100216', '15', '33');
INSERT INTO `keyword_source_relation` VALUES ('100216', '20', '34');
INSERT INTO `keyword_source_relation` VALUES ('100216', '184', '35');
INSERT INTO `keyword_source_relation` VALUES ('100216', '234', '36');
INSERT INTO `keyword_source_relation` VALUES ('100226', '146', '37');
INSERT INTO `keyword_source_relation` VALUES ('100226', '227', '38');
INSERT INTO `keyword_source_relation` VALUES ('100226', '15', '39');
INSERT INTO `keyword_source_relation` VALUES ('100226', '20', '40');
INSERT INTO `keyword_source_relation` VALUES ('100226', '184', '41');
INSERT INTO `keyword_source_relation` VALUES ('100226', '234', '42');
INSERT INTO `keyword_source_relation` VALUES ('100214', '129', '43');
INSERT INTO `keyword_source_relation` VALUES ('100214', '226', '44');
INSERT INTO `keyword_source_relation` VALUES ('100214', '15', '45');
INSERT INTO `keyword_source_relation` VALUES ('100214', '19', '46');
INSERT INTO `keyword_source_relation` VALUES ('100214', '194', '47');
INSERT INTO `keyword_source_relation` VALUES ('100214', '239', '48');
INSERT INTO `keyword_source_relation` VALUES ('100224', '130', '49');
INSERT INTO `keyword_source_relation` VALUES ('100224', '226', '50');
INSERT INTO `keyword_source_relation` VALUES ('100224', '15', '51');
INSERT INTO `keyword_source_relation` VALUES ('100224', '19', '52');
INSERT INTO `keyword_source_relation` VALUES ('100224', '194', '53');
INSERT INTO `keyword_source_relation` VALUES ('100224', '239', '54');
INSERT INTO `keyword_source_relation` VALUES ('100217', '107', '55');
INSERT INTO `keyword_source_relation` VALUES ('100217', '226', '56');
INSERT INTO `keyword_source_relation` VALUES ('100217', '15', '57');
INSERT INTO `keyword_source_relation` VALUES ('100217', '22', '58');
INSERT INTO `keyword_source_relation` VALUES ('100217', '204', '59');
INSERT INTO `keyword_source_relation` VALUES ('100217', '246', '60');
INSERT INTO `keyword_source_relation` VALUES ('100227', '108', '61');
INSERT INTO `keyword_source_relation` VALUES ('100227', '226', '62');
INSERT INTO `keyword_source_relation` VALUES ('100227', '15', '63');
INSERT INTO `keyword_source_relation` VALUES ('100227', '22', '64');
INSERT INTO `keyword_source_relation` VALUES ('100227', '204', '65');
INSERT INTO `keyword_source_relation` VALUES ('100227', '246', '66');
INSERT INTO `keyword_source_relation` VALUES ('100434', '123', '67');
INSERT INTO `keyword_source_relation` VALUES ('100434', '232', '68');
INSERT INTO `keyword_source_relation` VALUES ('100434', '14', '69');
INSERT INTO `keyword_source_relation` VALUES ('100434', '48', '70');
INSERT INTO `keyword_source_relation` VALUES ('100434', '171', '71');
INSERT INTO `keyword_source_relation` VALUES ('100434', '246', '72');
INSERT INTO `keyword_source_relation` VALUES ('100435', '124', '73');
INSERT INTO `keyword_source_relation` VALUES ('100435', '232', '74');
INSERT INTO `keyword_source_relation` VALUES ('100435', '14', '75');
INSERT INTO `keyword_source_relation` VALUES ('100435', '48', '76');
INSERT INTO `keyword_source_relation` VALUES ('100435', '171', '77');
INSERT INTO `keyword_source_relation` VALUES ('100435', '246', '78');
INSERT INTO `keyword_source_relation` VALUES ('100431', '103', '79');
INSERT INTO `keyword_source_relation` VALUES ('100431', '225', '80');
INSERT INTO `keyword_source_relation` VALUES ('100431', '14', '81');
INSERT INTO `keyword_source_relation` VALUES ('100431', '50', '82');
INSERT INTO `keyword_source_relation` VALUES ('100431', '193', '83');
INSERT INTO `keyword_source_relation` VALUES ('100431', '240', '84');
INSERT INTO `keyword_source_relation` VALUES ('100432', '104', '85');
INSERT INTO `keyword_source_relation` VALUES ('100432', '225', '86');
INSERT INTO `keyword_source_relation` VALUES ('100432', '14', '87');
INSERT INTO `keyword_source_relation` VALUES ('100432', '50', '88');
INSERT INTO `keyword_source_relation` VALUES ('100432', '193', '89');
INSERT INTO `keyword_source_relation` VALUES ('100432', '240', '90');
INSERT INTO `keyword_source_relation` VALUES ('100423', '127', '91');
INSERT INTO `keyword_source_relation` VALUES ('100423', '222', '92');
INSERT INTO `keyword_source_relation` VALUES ('100423', '0', '93');
INSERT INTO `keyword_source_relation` VALUES ('100423', '48', '94');
INSERT INTO `keyword_source_relation` VALUES ('100423', '0', '95');
INSERT INTO `keyword_source_relation` VALUES ('100423', '0', '96');
INSERT INTO `keyword_source_relation` VALUES ('100424', '128', '97');
INSERT INTO `keyword_source_relation` VALUES ('100424', '222', '98');
INSERT INTO `keyword_source_relation` VALUES ('100424', '0', '99');
INSERT INTO `keyword_source_relation` VALUES ('100424', '48', '100');
INSERT INTO `keyword_source_relation` VALUES ('100424', '0', '101');
INSERT INTO `keyword_source_relation` VALUES ('100424', '0', '102');
INSERT INTO `keyword_source_relation` VALUES ('100427', '109', '103');
INSERT INTO `keyword_source_relation` VALUES ('100427', '220', '104');
INSERT INTO `keyword_source_relation` VALUES ('100427', '15', '105');
INSERT INTO `keyword_source_relation` VALUES ('100427', '51', '106');
INSERT INTO `keyword_source_relation` VALUES ('100427', '0', '107');
INSERT INTO `keyword_source_relation` VALUES ('100427', '239', '108');
INSERT INTO `keyword_source_relation` VALUES ('100428', '110', '109');
INSERT INTO `keyword_source_relation` VALUES ('100428', '220', '110');
INSERT INTO `keyword_source_relation` VALUES ('100428', '15', '111');
INSERT INTO `keyword_source_relation` VALUES ('100428', '51', '112');
INSERT INTO `keyword_source_relation` VALUES ('100428', '0', '113');
INSERT INTO `keyword_source_relation` VALUES ('100428', '239', '114');
INSERT INTO `keyword_source_relation` VALUES ('100438', '109', '115');
INSERT INTO `keyword_source_relation` VALUES ('100438', '220', '116');
INSERT INTO `keyword_source_relation` VALUES ('100438', '15', '117');
INSERT INTO `keyword_source_relation` VALUES ('100438', '51', '118');
INSERT INTO `keyword_source_relation` VALUES ('100438', '0', '119');
INSERT INTO `keyword_source_relation` VALUES ('100438', '239', '120');
INSERT INTO `keyword_source_relation` VALUES ('100439', '110', '121');
INSERT INTO `keyword_source_relation` VALUES ('100439', '220', '122');
INSERT INTO `keyword_source_relation` VALUES ('100439', '15', '123');
INSERT INTO `keyword_source_relation` VALUES ('100439', '51', '124');
INSERT INTO `keyword_source_relation` VALUES ('100439', '0', '125');
INSERT INTO `keyword_source_relation` VALUES ('100439', '239', '126');
INSERT INTO `keyword_source_relation` VALUES ('100441', '151', '127');
INSERT INTO `keyword_source_relation` VALUES ('100441', '225', '128');
INSERT INTO `keyword_source_relation` VALUES ('100441', '15', '129');
INSERT INTO `keyword_source_relation` VALUES ('100441', '48', '130');
INSERT INTO `keyword_source_relation` VALUES ('100441', '173', '131');
INSERT INTO `keyword_source_relation` VALUES ('100441', '234', '132');
INSERT INTO `keyword_source_relation` VALUES ('100442', '152', '133');
INSERT INTO `keyword_source_relation` VALUES ('100442', '225', '134');
INSERT INTO `keyword_source_relation` VALUES ('100442', '15', '135');
INSERT INTO `keyword_source_relation` VALUES ('100442', '48', '136');
INSERT INTO `keyword_source_relation` VALUES ('100442', '173', '137');
INSERT INTO `keyword_source_relation` VALUES ('100442', '234', '138');

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
-- Table structure for `musicinfo`
-- ----------------------------
DROP TABLE IF EXISTS `musicinfo`;
CREATE TABLE `musicinfo` (
  `id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL,
  `musictime` varchar(500) DEFAULT NULL,
  `musiclocation` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `music_id` (`music_id`),
  CONSTRAINT `music_id` FOREIGN KEY (`music_id`) REFERENCES `source` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of musicinfo
-- ----------------------------
INSERT INTO `musicinfo` VALUES ('1', '1004558', '2015年07月24日 - 2015年07月30日', '苏州文化艺术中心、上海大剧院、北京国家大剧院、沈阳盛京大剧院');
INSERT INTO `musicinfo` VALUES ('2', '1004568', '2015年8月8日', '上海大剧院');

-- ----------------------------
-- Table structure for `privilige`
-- ----------------------------
DROP TABLE IF EXISTS `privilige`;
CREATE TABLE `privilige` (
  `id` int(11) NOT NULL,
  `privilige` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of privilige
-- ----------------------------
INSERT INTO `privilige` VALUES ('1', '首页');
INSERT INTO `privilige` VALUES ('2', '关于汉唐');
INSERT INTO `privilige` VALUES ('3', '播出平台');
INSERT INTO `privilige` VALUES ('4', '合作伙伴');
INSERT INTO `privilige` VALUES ('5', '极致');
INSERT INTO `privilige` VALUES ('6', '问鼎世界');
INSERT INTO `privilige` VALUES ('7', '汉唐文化音乐年');
INSERT INTO `privilige` VALUES ('8', '加入汉唐');
INSERT INTO `privilige` VALUES ('9', '创建管理员');
INSERT INTO `privilige` VALUES ('10', '删除管理员');

-- ----------------------------
-- Table structure for `privilige_user`
-- ----------------------------
DROP TABLE IF EXISTS `privilige_user`;
CREATE TABLE `privilige_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `privilige_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `privilige_id` (`privilige_id`),
  CONSTRAINT `privilige_id` FOREIGN KEY (`privilige_id`) REFERENCES `privilige` (`id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of privilige_user
-- ----------------------------
INSERT INTO `privilige_user` VALUES ('1', '1', '1');
INSERT INTO `privilige_user` VALUES ('2', '1', '2');
INSERT INTO `privilige_user` VALUES ('3', '1', '3');
INSERT INTO `privilige_user` VALUES ('4', '1', '4');
INSERT INTO `privilige_user` VALUES ('5', '1', '5');
INSERT INTO `privilige_user` VALUES ('6', '1', '6');
INSERT INTO `privilige_user` VALUES ('7', '1', '7');
INSERT INTO `privilige_user` VALUES ('8', '1', '8');
INSERT INTO `privilige_user` VALUES ('9', '1', '9');
INSERT INTO `privilige_user` VALUES ('10', '1', '10');

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
) ENGINE=InnoDB AUTO_INCREMENT=1004574 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of source
-- ----------------------------
INSERT INTO `source` VALUES ('100001', 'http://localhost:8080/bootstrap/images/home01.jpg', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100002', 'http://localhost:8080/bootstrap/images/home02.jpg', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('100003', 'http://localhost:8080/bootstrap/images/home-jz.png', '1', 'homecarousel02-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea11', null, 'zn');
INSERT INTO `source` VALUES ('100004', 'http://localhost:8080/bootstrap/images/wd.png', '1', 'homecarousel03-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea12', null, 'zn');
INSERT INTO `source` VALUES ('100005', 'http://localhost:8080/bootstrap/images/homecarousel02.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea2', null, 'zn');
INSERT INTO `source` VALUES ('100006', 'http://localhost:8080/bootstrap/images/homecarousel03.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea3', null, 'zn');
INSERT INTO `source` VALUES ('100007', 'http://localhost:8080/bootstrap/images/homecarousel04.png', '1', 'homecarousel04', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea4', null, 'zn');
INSERT INTO `source` VALUES ('100008', 'http://localhost:8080/bootstrap/images/homecarousel03.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea2', null, 'zn');
INSERT INTO `source` VALUES ('100009', 'http://localhost:8080/bootstrap/images/homecarousel04.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea3', null, 'zn');
INSERT INTO `source` VALUES ('100010', 'http://localhost:8080/bootstrap/images/homecarousel01.png', '1', 'homecarousel04', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea4', null, 'zn');
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
INSERT INTO `source` VALUES ('100050', 'http://localhost:8080/bootstrap/images/musicinner.png', '1', 'mu', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'img', 'ADMIN', 'musiclogo', null, null, 'zn');
INSERT INTO `source` VALUES ('100051', 'http://localhost:8080/bootstrap/images/jzmap.png', '1', 'jzmap', null, null, '0000-00-00', 'ADMIN', '0000-00-00', 'img', 'ADMIN', 'platform', 'ulmap', null, 'en');
INSERT INTO `source` VALUES ('100052', 'http://localhost:8080/bootstrap/images/wdmap.png', '1', 'wdmap', null, null, '0000-00-00', 'ADMIN', '0000-00-00', 'img', 'ADMIN', 'platform', 'awoemap', null, 'en');
INSERT INTO `source` VALUES ('100053', 'http://localhost:8080/bootstrap/images/jzmap.png', '1', 'jzmap', null, null, '0000-00-00', 'ADMIN', '0000-00-00', 'img', 'ADMIN', 'platform', 'ulmap', null, 'fr');
INSERT INTO `source` VALUES ('100054', 'http://localhost:8080/bootstrap/images/wdmap.png', '1', 'wdmap', null, null, '0000-00-00', 'ADMIN', '0000-00-00', 'img', 'ADMIN', 'platform', 'awoemap', null, 'fr');
INSERT INTO `source` VALUES ('100099', 'http://localhost:8080/video/joinvideo.mp4', '1', 'joinvideo', null, null, '2016-01-19', 'ADMIN', '2016-01-19', 'video/mp4', 'ADMIN', '', null, null, 'zn');
INSERT INTO `source` VALUES ('100200', 'http://localhost:8080/bootstrap/images/partner1.png', '1', 'testvideoimg', null, null, '2016-01-20', 'ADMIN', '2016-01-20', 'videoimg', 'ADMIN', null, null, null, 'zn');
INSERT INTO `source` VALUES ('100201', 'http://localhost:8080/bootstrap/images/homecarousel03.png', '1', 'testvideo2', '/ul', null, '2016-01-20', 'ADMIN', '2016-01-20', 'videoimg', 'ADMIN', null, null, null, 'zn');
INSERT INTO `source` VALUES ('100202', 'http://localhost:8080/bootstrap/images/wd.png', '1', 'testvideo3', '/awoe/awoeinner/test', null, '2016-01-20', 'ADMIN', '2016-01-20', 'videoimg', 'ADMIN', null, null, null, 'zn');
INSERT INTO `source` VALUES ('100203', 'http://localhost:8080/bootstrap/images/homecarousel02.png', '1', 'T4', '/home', null, '2016-01-20', 'ADMIN', '2016-01-20', 'videoimg', 'ADMIN', null, null, null, 'zn');
INSERT INTO `source` VALUES ('100213', 'http://localhost:8080/img/Berlinale 2015.jpg', '1', '2015柏林电影节', '/ul/ulinner/100218', '1', '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '2015柏林电影节 柏林当地时间2015年2月5日，第65届柏林电影节拉开帷幕。四百多部影片在11天中逐一展映，19部角逐金银熊奖。评审团成员汇集由达伦·阿伦诺夫斯基领衔，汇集导演、演员、制片人和电视剧编剧。朱丽叶·比诺什、妮可·基德曼等明星携新作亮相，闪耀红毯。汉唐文化专访柏林电影节主席Dieter Kosslick，用镜头记录这一电影盛事。', 'zn');
INSERT INTO `source` VALUES ('100214', 'http://localhost:8080/img/Cannes Film Festival 2015.jpg', '1', '第68届戛纳电影节', '/ul/ulinner/100219', '2', '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '第68届戛纳电影节 当地时间2015年5月24日，第68届戛纳电影节落下帷幕。最终，《流浪的迪潘》摘得“最佳影片”金棕榈奖。导演拉斯洛·奈米斯凭借处女作《索尔之子》抱得评审团大奖。最佳男演员奖落入《市场法律》的文森特·林顿囊中，《我的国王》的女主角艾玛纽尔·贝克特与《卡罗尔》的女主角鲁妮·玛拉并获最佳女演员奖。侯孝贤凭《刺客聂隐娘》获得了最佳导演奖。', 'zn');
INSERT INTO `source` VALUES ('100215', 'http://localhost:8080/img/Mozart Week 2015.jpg', '1', '2015萨尔茨堡莫扎特周 ', '/ul/ulinner/100220', '3', '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '2015萨尔茨堡莫扎特周  Mozart Week 2015  2015年萨尔茨堡莫扎特周于1月22日拉开大幕，为期11天。这位传奇音乐大师的经典曲目以或传统、或现代的方式精彩呈现。汉唐文化特别受邀前往萨尔茨堡，全方位呈现艺术盛会，纪念音乐大师。', 'zn');
INSERT INTO `source` VALUES ('100216', 'http://localhost:8080/img/Geneva.jpg', '1', '2015日内瓦车展', '/ul/ulinner/100221', '4', '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '2015日内瓦车展 2015年3月5日，第85届日内瓦车展再一次汇聚了全球68万车迷及专业人士的目光。220家参展商共展出约900多辆汽车及100多辆最新款。靓丽色彩，动力十足的发动机、全新概念车款，各大品牌都竞相推出最新杰作。展会现场，各式各样的互动也给观众带来乐趣体验。汉唐摄制组亲赴日内瓦，直击行业最新动向。', 'zn');
INSERT INTO `source` VALUES ('100217', 'http://localhost:8080/img/Jaeger-LeCoultre and LImmagine Ritrovata.jpg', '1', '积家博洛尼亚电影修复实验室之旅', '/ul/ulinner/100222', '5', '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '积家博洛尼亚电影修复实验室之旅 位于意大利北部的博洛尼亚一直是电影人心中的圣地。在瑞士钟表品牌积家的支持下，博洛尼亚电影修复实验室以4K技术，通过清洁、扫描、数字修复、颜色和声音修复经典老电影。2014年，实验室耗费超过1000小时，最终修复完成吴宇森的经典影片《英雄本色》。和《极致》一起，走进博洛尼亚电影修复实验室，探秘老电影修复。', 'zn');
INSERT INTO `source` VALUES ('100218', 'http://localhost:8080/video/20150215_UL20m_Berlinale 2015.mpeg.mp4', '1', '2015柏林电影节', null, '1', '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, '2015柏林电影节 柏林当地时间2015年2月5日，第65届柏林电影节拉开帷幕。四百多部影片在11天中逐一展映，19部角逐金银熊奖。评审团成员汇集由达伦·阿伦诺夫斯基领衔，汇集导演、演员、制片人和电视剧编剧。朱丽叶·比诺什、妮可·基德曼等明星携新作亮相，闪耀红毯。汉唐文化专访柏林电影节主席Dieter Kosslick，用镜头记录这一电影盛事。', 'zn');
INSERT INTO `source` VALUES ('100219', 'http://localhost:8080/video/20150618_UL20m_Cannes Film Festival 2015.mpeg.mp4', '1', '第68届戛纳电影节', null, '2', '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, '第68届戛纳电影节 当地时间2015年5月24日，第68届戛纳电影节落下帷幕。最终，《流浪的迪潘》摘得“最佳影片”金棕榈奖。导演拉斯洛·奈米斯凭借处女作《索尔之子》抱得评审团大奖。最佳男演员奖落入《市场法律》的文森特·林顿囊中，《我的国王》的女主角艾玛纽尔·贝克特与《卡罗尔》的女主角鲁妮·玛拉并获最佳女演员奖。侯孝贤凭《刺客聂隐娘》获得了最佳导演奖。', 'zn');
INSERT INTO `source` VALUES ('100220', 'http://localhost:8080/video/20150227_UL20m_Mozart Week 2015.mpeg.mp4', '1', '2015萨尔茨堡莫扎特周', null, '3', '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, '2015萨尔茨堡莫扎特周  Mozart Week 2015  2015年萨尔茨堡莫扎特周于1月22日拉开大幕，为期11天。这位传奇音乐大师的经典曲目以或传统、或现代的方式精彩呈现。汉唐文化特别受邀前往萨尔茨堡，全方位呈现艺术盛会，纪念音乐大师。', 'zn');
INSERT INTO `source` VALUES ('100221', 'http://localhost:8080/video/20150402_UL20m_Geneva.mpeg.mp4', '1', '2015日内瓦车展', null, '4', '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, '2015日内瓦车展 2015年3月5日，第85届日内瓦车展再一次汇聚了全球68万车迷及专业人士的目光。220家参展商共展出约900多辆汽车及100多辆最新款。靓丽色彩，动力十足的发动机、全新概念车款，各大品牌都竞相推出最新杰作。展会现场，各式各样的互动也给观众带来乐趣体验。汉唐摄制组亲赴日内瓦，直击行业最新动向。', 'zn');
INSERT INTO `source` VALUES ('100222', 'http://localhost:8080/video/20150728_UL20m_Jaeger-LeCoultre and L\'Immagine Ritrovata.mpeg.mp4', '1', '积家博洛尼亚电影修复实验室之旅', null, '5', '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, '积家博洛尼亚电影修复实验室之旅 位于意大利北部的博洛尼亚一直是电影人心中的圣地。在瑞士钟表品牌积家的支持下，博洛尼亚电影修复实验室以4K技术，通过清洁、扫描、数字修复、颜色和声音修复经典老电影。2014年，实验室耗费超过1000小时，最终修复完成吴宇森的经典影片《英雄本色》。和《极致》一起，走进博洛尼亚电影修复实验室，探秘老电影修复。', 'zn');
INSERT INTO `source` VALUES ('100223', 'http://localhost:8080/img/Berlinale 2015.jpg', '1', 'Berlinale 2015', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, 'The 65th Berlinale opened on February 5th, 2015. Over 400 movies screened in 11 days, with 19 in contention. Darren Aronofsky presided over the jury. Juliette Binoche, Nicole Kidman, and other celebrities graced the red carpet. Hantang TV was on hand for coverage and an interview with festival director Dieter Kosslick.', 'en');
INSERT INTO `source` VALUES ('100224', 'http://localhost:8080/img/Cannes Film Festival 2015.jpg', '1', 'Cannes Film Festival 2015', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, 'The 68th Cannes Film Festival closed on May 24th, 2015. Dheepan took home the Palme d’Or. László Nemes won the Grand Prix for his debut work, Saul Fia. Hou Hsiao-Hsien won the Award for Best Director for Nie Yinniang (The Assassin).', 'en');
INSERT INTO `source` VALUES ('100225', 'http://localhost:8080/img/Mozart Week 2015.jpg', '1', 'Mozart Week 2015', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, 'The 2015 Mozart Week in Salzburg began on January 22nd and lasted 11 days. The great composer’s works were interpreted in both classical and modern styles. Hantang TV brings you all the details.', 'en');
INSERT INTO `source` VALUES ('100226', 'http://localhost:8080/img/Geneva.jpg', '1', 'Geneva', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, '', 'en');
INSERT INTO `source` VALUES ('100227', 'http://localhost:8080/img/Jaeger-LeCoultre and LImmagine Ritrovata.jpg', '1', 'Jaeger-LeCoultre and L\'Immagine Ritrovata', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'videoimg', 'ADMIN', 'ul', null, 'Bologna is an important place for movie lovers. With the support of Swiss watchmaker Jaeger-LeCoultre, the L’Immagine Ritrovata film restoration laboratory restores classic films. In 2014, L’Immagine Ritrovata spent over 1,000 hours to restore John Woo’s classic A Better Tomorrow. The Ultimate Luxury gives you a look into the film restoration process.', 'en');
INSERT INTO `source` VALUES ('100228', 'http://localhost:8080/video/20150319_UL20m_Berlinale 2015_ENG_ok.mpeg.mp4', '1', 'Berlinale 2015', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, 'The 65th Berlinale opened on February 5th, 2015. Over 400 movies screened in 11 days, with 19 in contention. Darren Aronofsky presided over the jury. Juliette Binoche, Nicole Kidman, and other celebrities graced the red carpet. Hantang TV was on hand for coverage and an interview with festival director Dieter Kosslick.', 'en');
INSERT INTO `source` VALUES ('100229', 'http://localhost:8080/video/20150324_UL20m_Mozart Week 2015_ENG_ok.mpeg.mp4', '1', 'Mozart Week 2015', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, 'The 2015 Mozart Week in Salzburg began on January 22nd and lasted 11 days. The great composer’s works were interpreted in both classical and modern styles. Hantang TV brings you all the details.', 'en');
INSERT INTO `source` VALUES ('100230', 'http://localhost:8080/video/20150421_UL20m_Geneva_ENG_ok.mpeg.mp4', '1', '', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, null, 'en');
INSERT INTO `source` VALUES ('100231', 'http://localhost:8080/video/20150819_UL20m_Jaeger-LeCoultre and L\'Immagine Ritrovata_ENG_ok.mpeg.mp4', '1', 'Jaeger-LeCoultre and L’Immagine Ritrovata', null, null, '2016-01-22', 'ADMIN', '2016-01-22', 'video/mp4', 'ADMIN', 'ul', null, 'Bologna is an important place for movie lovers. With the support of Swiss watchmaker Jaeger-LeCoultre, the L’Immagine Ritrovata film restoration laboratory restores classic films. In 2014, L’Immagine Ritrovata spent over 1,000 hours to restore John Woo’s classic A Better Tomorrow. The Ultimate Luxury gives you a look into the film restoration process.', 'en');
INSERT INTO `source` VALUES ('100234', 'http://localhost:8080/video/20150215_UL20m_Berlinale 2015.mpeg.mp4', '1', '2015柏林电影节', null, '1', '2016-01-24', 'ADMIN', '2016-01-24', 'video/mp4', 'ADMIN', 'awoe', null, '2015柏林电影节 柏林当地时间2015年2月5日，第65届柏林电影节拉开帷幕。四百多部影片在11天中逐一展映，19部角逐金银熊奖。评审团成员汇集由达伦·阿伦诺夫斯基领衔，汇集导演、演员、制片人和电视剧编剧。朱丽叶·比诺什、妮可·基德曼等明星携新作亮相，闪耀红毯。汉唐文化专访柏林电影节主席Dieter Kosslick，用镜头记录这一电影盛事。', 'zn');
INSERT INTO `source` VALUES ('100235', 'http://localhost:8080/video/20150618_UL20m_Cannes Film Festival 2015.mpeg.mp4', '1', '第68届戛纳电影节', null, '2', '2016-01-24', 'ADMIN', '2016-01-24', 'video/mp4', 'ADMIN', 'awoe', null, '第68届戛纳电影节 当地时间2015年5月24日，第68届戛纳电影节落下帷幕。最终，《流浪的迪潘》摘得“最佳影片”金棕榈奖。导演拉斯洛·奈米斯凭借处女作《索尔之子》抱得评审团大奖。最佳男演员奖落入《市场法律》的文森特·林顿囊中，《我的国王》的女主角艾玛纽尔·贝克特与《卡罗尔》的女主角鲁妮·玛拉并获最佳女演员奖。侯孝贤凭《刺客聂隐娘》获得了最佳导演奖。', 'zn');
INSERT INTO `source` VALUES ('100300', 'http://localhost:8080/bootstrap/logos/A.Lange&Sohne.png', '1', '德国朗格', null, '1', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '99', null, 'zn');
INSERT INTO `source` VALUES ('100301', 'http://localhost:8080/bootstrap/logos/A.Lange&Sohne.png', '1', 'A.Lange&Söhne', null, '2', '2016-01-23', 'ADMIN', '2016-01-23', 'partnerimg', 'ADMIN', 'ul', '100', null, 'en');
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
INSERT INTO `source` VALUES ('100423', 'http://localhost:8080/img/Berluti’s World of Modern Elegance.jpg', '1', 'Berluti当代绅士的优雅世界', '/ul/ulinner/100425', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, '富于趣味，讲究质感，这大概就是Berluti的优雅世界。2014年10月8日，Berluti北京国贸商城精品店隆重开业。优质的皮革、精湛的工艺汇聚成美妙的图案，每一件作品都彰显着品牌独树一帜的绅士风格和古典情怀。跟随汉唐文化，感受Berluti当代绅士风尚。', 'zn');
INSERT INTO `source` VALUES ('100424', 'http://localhost:8080/img/Berluti’s World of Modern Elegance.jpg', '1', 'Berluti’s World of Modern Elegance', '', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, 'On October 8th, 2014, bespoke shoemaker and fashion brand Berluti opened a boutique at Beijing’s China World Shopping Mall. Top quality leather and refined design speak to the brand’s long history of handcrafted excellence. The Ultimate Luxury brings you inside the world of Italian luxury.', 'en');
INSERT INTO `source` VALUES ('100425', 'http://localhost:8080/video/20150116_UL20m_Berluti’s World of Modern Elegance.mpeg.mp4', '1', 'Berluti当代绅士的优雅世界', null, '0', '2016-01-25', 'ADMIN', '2016-01-25', 'video/mp4', 'ADMIN', 'ul', null, '富于趣味，讲究质感，这大概就是Berluti的优雅世界。2014年10月8日，Berluti北京国贸商城精品店隆重开业。优质的皮革、精湛的工艺汇聚成美妙的图案，每一件作品都彰显着品牌独树一帜的绅士风格和古典情怀。跟随汉唐文化，感受Berluti当代绅士风尚。', 'zn');
INSERT INTO `source` VALUES ('100427', 'http://localhost:8080/img/Lin Dan Visits Montblanc Manufacture.jpg', '1', '林丹的万宝龙精密制表工艺之旅', '/ul/ulinner/100429', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, '如何解读真正的卓越？要回到最初的源头，才能找到答案。2015年1月，有着150年悠久历史的美耐华制表工坊，迎来了万宝龙中国区品牌大使林丹。工坊以人手精镶为立足之本，制表传统得以保留。机械表中的一个细微部分——游丝的自主生产，更是工坊精密技艺的代表。制表师们全情投入，以精工细作成就无瑕疵杰作。汉唐摄制组特别受邀，远赴瑞士，与林丹一起探索万宝龙的精密制表工艺。', 'en');
INSERT INTO `source` VALUES ('100428', 'http://localhost:8080/img/Lin Dan Visits Montblanc Manufacture.jpg', '1', 'Lin Dan Visits Montblanc Manufacture', '/ul/ulinner/100430', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, 'In January 2015, Montblanc invited its China brand ambassador, Lin Dan, to visit its Minerva manufacture in Villeret. The 150-year-old manufacture is one of only a handful in the world capable of making its own balance spring. Hantang TV was invited to follow along with Lin Dan to explore the watchmaking excellence of Montblanc.', 'zn');
INSERT INTO `source` VALUES ('100429', 'http://localhost:8080/video/20150206_UL20m_Lin Dan Visits Montblanc Manufacture_final.mpeg.mp4', '1', '林丹的万宝龙精密制表工艺之旅', null, '0', '2016-01-25', 'ADMIN', '2016-01-25', 'video/mp4', 'ADMIN', 'ul', null, '如何解读真正的卓越？要回到最初的源头，才能找到答案。2015年1月，有着150年悠久历史的美耐华制表工坊，迎来了万宝龙中国区品牌大使林丹。工坊以人手精镶为立足之本，制表传统得以保留。机械表中的一个细微部分——游丝的自主生产，更是工坊精密技艺的代表。制表师们全情投入，以精工细作成就无瑕疵杰作。汉唐摄制组特别受邀，远赴瑞士，与林丹一起探索万宝龙的精密制表工艺。', 'zn');
INSERT INTO `source` VALUES ('100430', 'http://localhost:8080/video/20150213_UL20m_Lin Dan Visits Montblanc Manufacture_ENG-ok.mpeg.mp4', '1', 'Lin Dan Visits Montblanc Manufacture', null, '0', '2016-01-25', 'ADMIN', '2016-01-25', 'video/mp4', 'ADMIN', 'ul', null, 'In January 2015, Montblanc invited its China brand ambassador, Lin Dan, to visit its Minerva manufacture in Villeret. The 150-year-old manufacture is one of only a handful in the world capable of making its own balance spring. Hantang TV was invited to follow along with Lin Dan to explore the watchmaking excellence of Montblanc.', 'en');
INSERT INTO `source` VALUES ('100431', 'http://localhost:8080/img/Fondation Cartier’s 30th Anniversary.jpg', '1', '卡地亚当代艺术基金会成立30周年', '/ul/ulinner/100433', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, '2014年，卡地亚当代艺术基金会与艺术家们一起庆祝成立30周年。Diller Scofidio工作室的装置“玻璃盒遐思”邀请观众以不同寻常的方式重新观赏基金会的景物、体验光阴流逝。奎塔卡策划的展览“居住者”，观念传承自基金会另一位艺术家大卫•林奇的作品。作为支持当代艺术的先驱，卡地亚当代艺术基金会是不同流派艺术与思想碰撞之地。30年来，超过400名艺术家在此创作1400余件作品。汉唐文化还将见证未来更多的成就。', 'zn');
INSERT INTO `source` VALUES ('100432', 'http://localhost:8080/img/Fondation Cartier’s 30th Anniversary.jpg', '1', 'Fondation Cartier’s 30th Anniversary', '', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, 'In 2014, the Cartier Foundation for Contemporary Art invited world-renowned artists to celebrate its 30th anniversary. Design studio Diller Scofidio   Renfro took over the entire ground floor of its building in Paris to present “Musings on a Glass Box”, inviting guests to experience the museum in a new way. Guillermo Kuitca’s work was inspired by an exhibition by film director David Lynch. Over its 30 years, the Fondation Cartier has hosted over 1400 works from more than 400 artists. Hantang TV will show you more upcoming projects.', 'en');
INSERT INTO `source` VALUES ('100433', 'http://localhost:8080/video/20150107_UL20m_Fondation Cartier’s 30th Anniversary.mpeg.mp4', '1', '卡地亚当代艺术基金会成立30周年', null, '0', '2016-01-25', 'ADMIN', '2016-01-25', 'video/mp4', 'ADMIN', 'ul', null, '2014年，卡地亚当代艺术基金会与艺术家们一起庆祝成立30周年。Diller Scofidio工作室的装置“玻璃盒遐思”邀请观众以不同寻常的方式重新观赏基金会的景物、体验光阴流逝。奎塔卡策划的展览“居住者”，观念传承自基金会另一位艺术家大卫•林奇的作品。作为支持当代艺术的先驱，卡地亚当代艺术基金会是不同流派艺术与思想碰撞之地。30年来，超过400名艺术家在此创作1400余件作品。汉唐文化还将见证未来更多的成就。', 'zn');
INSERT INTO `source` VALUES ('100434', 'http://localhost:8080/img/Absolut Vodka and Andy Warhol.jpg', '1', '绝对伏特加安迪·沃霍尔限量装与新年特别调制 ', '/ul/ulinner/100436', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, '以波普艺术大师安迪·沃霍尔的经典画作复刻而成，绝对伏特加安迪·沃霍尔限量装在新年交替之际，凭借其饱满丰富的口感为节日派对、家庭聚会带来多款创意调酒，为这个节日季灌注醒目的色彩。汉唐摄制组特别创意策划，用创意开启充满惊喜的新一年。', 'zn');
INSERT INTO `source` VALUES ('100435', 'http://localhost:8080/img/Absolut Vodka and Andy Warhol.jpg', '1', 'Absolut Vodka and Andy Warhol', '/ul/ulinner/100437', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, 'Absolut introduced a limited edition bottle in tribute to pop art master, Andy Warhol. The new design added color to New Year’s celebrations. Hantang TV brings you all the details.', 'en');
INSERT INTO `source` VALUES ('100436', 'http://localhost:8080/video/20150106_UL20m_Absolut Vodka and Andy Warhol_V04_OK.mpeg.mp4', '1', '绝对伏特加安迪·沃霍尔限量装与新年特别调制 ', null, '0', '2016-01-25', 'ADMIN', '2016-01-25', 'video/mp4', 'ADMIN', 'ul', null, '以波普艺术大师安迪·沃霍尔的经典画作复刻而成，绝对伏特加安迪·沃霍尔限量装在新年交替之际，凭借其饱满丰富的口感为节日派对、家庭聚会带来多款创意调酒，为这个节日季灌注醒目的色彩。汉唐摄制组特别创意策划，用创意开启充满惊喜的新一年。', 'zn');
INSERT INTO `source` VALUES ('100437', 'http://localhost:8080/video/20150127_UL20m_Absolut Vodka and Andy Warhol_ENG_ok.mpeg.mp4', '1', 'Absolut Vodka and Andy Warhol', null, '0', '2016-01-25', 'ADMIN', '2016-01-25', 'video/mp4', 'ADMIN', 'ul', null, 'Absolut introduced a limited edition bottle in tribute to pop art master, Andy Warhol. The new design added color to New Year’s celebrations. Hantang TV brings you all the details.', 'en');
INSERT INTO `source` VALUES ('100438', 'http://localhost:8080/img/Kwai Lun-mei and Montblanc Boheme.jpg', '1', '桂纶镁解读万宝龙宝曦女性', '/ul/ulinner/100440', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, '2015年1月，万宝龙品牌大使桂纶镁来到了位于里诺的万宝龙表厂。始建于1906年的里诺表厂，拥有近百年的高级制表历史，是万宝龙实验室500小时质量测试的所在地。而万宝龙宝曦系列女士腕表正是诞生在这里。每一款宝曦系列的腕表，都延续了品牌的精湛技艺，以静谧与奢华并具的方式呈现时计。汉唐摄制组特别受邀，与桂纶镁一起解读当代宝曦女性的成熟优雅。', 'zn');
INSERT INTO `source` VALUES ('100439', 'http://localhost:8080/img/Kwai Lun-mei and Montblanc Boheme.jpg', '1', 'Kwai Lun-mei and Montblanc Bohème', '', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, 'In January 2015, Montblanc invited brand ambassador Kwai Lun-mei to its Le Locle manufacture. Here the brand performs its 500 hour test and created the Bohème collection. Hantang TV was invited to explore the collection together with Kwai Lun-mei.', 'en');
INSERT INTO `source` VALUES ('100440', 'http://localhost:8080/video/20150210_UL20m_Kwai Lun-mei and Montblanc Boheme_Final.mpeg.mp4', '1', '桂纶镁解读万宝龙宝曦女性', null, '0', '2016-01-25', 'ADMIN', '2016-01-25', 'video/mp4', 'ADMIN', 'ul', null, '2015年1月，万宝龙品牌大使桂纶镁来到了位于里诺的万宝龙表厂。始建于1906年的里诺表厂，拥有近百年的高级制表历史，是万宝龙实验室500小时质量测试的所在地。而万宝龙宝曦系列女士腕表正是诞生在这里。每一款宝曦系列的腕表，都延续了品牌的精湛技艺，以静谧与奢华并具的方式呈现时计。汉唐摄制组特别受邀，与桂纶镁一起解读当代宝曦女性的成熟优雅。', 'zn');
INSERT INTO `source` VALUES ('100441', 'http://localhost:8080/img/Frank Gehry and the Louis Vuitton Foundation.jpg', '1', '弗兰克•盖里：巴黎路易威登基金会建筑展', '/ul/ulinner/100443', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, '建筑师弗兰克·盖里设计的巴黎路易威登基金会建筑，外形如一艘巨大的船舰。2015年6月19日，“弗兰克•盖里：巴黎路易威登基金会建筑展”开幕，明星好友纷纷到达现场，表达对基金会的美好祝愿。展览呈现建筑师弗兰克•盖里的构思创意，追溯基金会设计的始终。汉唐文化受邀专访基金会策展人Sebastien Cherruet，见证了这场“无疆界艺术”展览，徜徉在艺术海洋。', 'zn');
INSERT INTO `source` VALUES ('100442', 'http://localhost:8080/img/Frank Gehry and the Louis Vuitton Foundation.jpg', '1', 'Frank Gehry and the Louis Vuitton Foundation', '/ul/ulinner/100444', '0', '2016-01-25', 'ADMIN', '2016-01-25', 'videoimg', 'ADMIN', 'ul', null, 'On June 19th, 2015, the “Fondation Louis Vuitton Building in Paris by Frank Gehry” exhibition opened in Beijing. Many celebrity friends were on hand to express their support. The exhibition explores the design process behind Frank Gehry’s stunning new aesthetic. Hantang Culture sat down with Sebastien Cherruet to discuss the Foundation’s “beyond-the-walls” program.', 'en');
INSERT INTO `source` VALUES ('100443', 'http://localhost:8080/video/20150708_UL20m_Frank Gehry and the Louis Vuitton Foundation_U150239.mpeg.mp4', '1', '弗兰克•盖里：巴黎路易威登基金会建筑展', null, '0', '2016-01-25', 'ADMIN', '2016-01-25', 'video/mp4', 'ADMIN', 'ul', null, '建筑师弗兰克·盖里设计的巴黎路易威登基金会建筑，外形如一艘巨大的船舰。2015年6月19日，“弗兰克•盖里：巴黎路易威登基金会建筑展”开幕，明星好友纷纷到达现场，表达对基金会的美好祝愿。展览呈现建筑师弗兰克•盖里的构思创意，追溯基金会设计的始终。汉唐文化受邀专访基金会策展人Sebastien Cherruet，见证了这场“无疆界艺术”展览，徜徉在艺术海洋。', 'zn');
INSERT INTO `source` VALUES ('100444', 'http://localhost:8080/video/20150722_UL20mFrank Gehry and the Louis Vuitton Foundation_ENG-ok.mpeg.mp4', '1', 'Frank Gehry and the Louis Vuitton Foundation', null, '0', '2016-01-25', 'ADMIN', '2016-01-25', 'video/mp4', 'ADMIN', 'ul', null, 'On June 19th, 2015, the “Fondation Louis Vuitton Building in Paris by Frank Gehry” exhibition opened in Beijing. Many celebrity friends were on hand to express their support. The exhibition explores the design process behind Frank Gehry’s stunning new aesthetic. Hantang Culture sat down with Sebastien Cherruet to discuss the Foundation’s “beyond-the-walls” program.', 'en');
INSERT INTO `source` VALUES ('100445', 'http://localhost:8080/img/Jeep Grand Cherokee Shangri-La Adventure.jpg', '1', 'Jeep大切诺基香格里拉之旅', '/awoe/awoeinner/100447', null, '2016-01-26', 'ADMIN', '2016-01-26', 'videoimg', 'ADMIN', 'awoe', null, '旅行的意义也许是生命中偶尔放纵的一瞬光阴。活在钢筋丛林中的你我，也许应该偶尔忘却单一追求的人生高度,走一段非同寻常的路。2013年5月2014款进口全新8速大切诺基在被誉为“心中日月”的香格里拉展开了一场圣境之旅。汉唐摄制组应邀独家全程纪录，试着去收获更丰富的经历和体验，去领略人生的宽度，亲历各自心中的香格里拉。', 'zn');
INSERT INTO `source` VALUES ('100446', 'http://localhost:8080/img/Jeep Grand Cherokee Shangri-La Adventure.jpg', '1', 'Jeep Grand Cherokee Shangri-La Adventure', '/awoe/awoeinner/100448', null, '2016-01-26', 'ADMIN', '2016-01-26', 'videoimg', 'ADMIN', 'awoe', null, 'Living in the concrete jungle, sometimes you need to forget about the pressures of life, take the road less traveled and seek out new experiences. In May 2013, Hantang TV and Jeep took the newest eight-speed Grand Cherokee to explore the beauty of Shangri-La.', 'en');
INSERT INTO `source` VALUES ('100447', 'http://localhost:8080/video/20140416_AWOE_Jeep Grand Cherokee Shangri-La Adventure.mp4', '1', 'Jeep大切诺基香格里拉之旅', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'video/mp4', 'ADMIN', 'awoe', null, '旅行的意义也许是生命中偶尔放纵的一瞬光阴。活在钢筋丛林中的你我，也许应该偶尔忘却单一追求的人生高度,走一段非同寻常的路。2013年5月2014款进口全新8速大切诺基在被誉为“心中日月”的香格里拉展开了一场圣境之旅。汉唐摄制组应邀独家全程纪录，试着去收获更丰富的经历和体验，去领略人生的宽度，亲历各自心中的香格里拉。', 'zn');
INSERT INTO `source` VALUES ('100448', 'http://localhost:8080/video/20140416_AWOE_Jeep Grand Cherokee Shangri-La Adventure_ENG_V01_OK.mp4', '1', 'Jeep Grand Cherokee Shangri-La Adventure', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'video/mp4', 'ADMIN', 'awoe', null, 'Living in the concrete jungle, sometimes you need to forget about the pressures of life, take the road less traveled and seek out new experiences. In May 2013, Hantang TV and Jeep took the newest eight-speed Grand Cherokee to explore the beauty of Shangri-La.', 'en');
INSERT INTO `source` VALUES ('100449', 'http://localhost:8080/img/The Jeep Wrangler Rubicon Tour in Tengri Desert.jpg', '1', 'Jeep牧马人Rubicon10周年腾格里沙漠之旅', '/awoe/awoeinner/100451', null, '2016-01-26', 'ADMIN', '2016-01-26', 'videoimg', 'ADMIN', 'awoe', null, '2013年恰逢Jeep牧马人Rubicon诞生10周年。8月，Jeep集结中国顶尖摄影师与创意先锋，由银川出发，前往中国第四大沙漠腾格里，体验牧马人Rubicon的卓越特性。出色的四驱性能和良好的操控性，令驾驶者纵行广阔天地之间，回首10年来路，活个彻底。旅程中，牧马人Rubicon10周年限量版也在中国发布。汉唐文化受邀，作为官方记录媒体，和Jeep一起恣意驰骋大漠，释放心底沉睡的激情。', 'zn');
INSERT INTO `source` VALUES ('100450', 'http://localhost:8080/img/The Jeep Wrangler Rubicon Tour in Tengri Desert.jpg', '1', 'The Jeep Wrangler Rubicon Tour in Tengri Desert', '/awoe/awoeinner/100452', null, '2016-01-26', 'ADMIN', '2016-01-26', 'videoimg', 'ADMIN', 'awoe', null, '2013 is the 10th anniversary of the Jeep Wrangler Rubicon. In August, Jeep gathered the best Chinese photographers and entrepreneurs for a trek from Yinchuan for Tengri, the fourth largest desert in China, and experience Rubicon\'s outstanding performance. The excellent four wheel drive system and the superb handling ensure the driver has total control and enjoys himself. Meanwhile, the Wrangler Rubicon 10th Anniversary Edition was launched in China. Hantang TV was invited as the official media to conquer the desert with Jeep and unleash the passion.', 'en');
INSERT INTO `source` VALUES ('100451', 'http://localhost:8080/video/The Jeep Wrangler Rubicon Tour in Tengri Desert.mp4', '1', 'Jeep牧马人Rubicon10周年腾格里沙漠之旅', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'video/mp4', 'ADMIN', 'awoe', null, '2013年恰逢Jeep牧马人Rubicon诞生10周年。8月，Jeep集结中国顶尖摄影师与创意先锋，由银川出发，前往中国第四大沙漠腾格里，体验牧马人Rubicon的卓越特性。出色的四驱性能和良好的操控性，令驾驶者纵行广阔天地之间，回首10年来路，活个彻底。旅程中，牧马人Rubicon10周年限量版也在中国发布。汉唐文化受邀，作为官方记录媒体，和Jeep一起恣意驰骋大漠，释放心底沉睡的激情。', 'zn');
INSERT INTO `source` VALUES ('100452', 'http://localhost:8080/video/The Jeep Wrangler Rubicon Tour in Tengri Desert-ENG.mp4', '1', 'The Jeep Wrangler Rubicon Tour in Tengri Desert', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'video/mp4', 'ADMIN', 'awoe', null, '2013 is the 10th anniversary of the Jeep Wrangler Rubicon. In August, Jeep gathered the best Chinese photographers and entrepreneurs for a trek from Yinchuan for Tengri, the fourth largest desert in China, and experience Rubicon\'s outstanding performance. The excellent four wheel drive system and the superb handling ensure the driver has total control and enjoys himself. Meanwhile, the Wrangler Rubicon 10th Anniversary Edition was launched in China. Hantang TV was invited as the official media to conquer the desert with Jeep and unleash the passion.', 'en');
INSERT INTO `source` VALUES ('100453', 'http://localhost:8080/img/The Meissen Story.jpg', '1', 'Meissen品牌故事', '/awoe/awoeinner/100455', null, '2016-01-26', 'ADMIN', '2016-01-26', 'videoimg', 'ADMIN', 'awoe', null, '三百多年来，麦森瓷器将源自皇室的艺术与美带给全世界。瓷器制作需要超乎寻常的细致与耐心，而一件麦森瓷器中便包含80多道工序，从模具制作、上色，到最后烧制出成品，都体现出对细节的不懈追求。如今，麦森更体现了全方位的精致生活方式，无论是文具、高级珠宝还是高定服装与家具，都是麦森对完美孜孜不倦的追求。汉唐文化亲赴德国麦森小镇，探访瓷器工厂与博物馆，与资深工匠深入交流，再现麦森流传三百年的魅力。', 'zn');
INSERT INTO `source` VALUES ('100454', 'http://localhost:8080/img/The Meissen Story.jpg', '1', 'The Meissen Story', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'videoimg', 'ADMIN', 'awoe', null, 'For 300 years, Meissen has brought the splendor of the porcelain to the world. Porcelain manufacture requires painstaking patience. Just one piece of Meissen porcelain takes 80 steps to complete. The brand has now applied its refined craftsmanship to a full range of lifestyle products. Hantang Culture went to Germany to explore the Meissen manufacture and museum.', null);
INSERT INTO `source` VALUES ('100455', 'http://localhost:8080/video/20150507_AWOE_The Meissen Story.mpeg.mp4', '1', 'Meissen品牌故事', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'video/mp4', 'ADMIN', 'awoe', null, '三百多年来，麦森瓷器将源自皇室的艺术与美带给全世界。瓷器制作需要超乎寻常的细致与耐心，而一件麦森瓷器中便包含80多道工序，从模具制作、上色，到最后烧制出成品，都体现出对细节的不懈追求。如今，麦森更体现了全方位的精致生活方式，无论是文具、高级珠宝还是高定服装与家具，都是麦森对完美孜孜不倦的追求。汉唐文化亲赴德国麦森小镇，探访瓷器工厂与博物馆，与资深工匠深入交流，再现麦森流传三百年的魅力。', 'zn');
INSERT INTO `source` VALUES ('100457', 'http://localhost:8080/img/A. Lange & Sohne A Legend Comes Home.jpg', '1', '朗格：传奇重返故乡', '/awoe/awoeinner/100459', null, '2016-01-26', 'ADMIN', '2016-01-26', 'videoimg', 'ADMIN', 'awoe', null, '朗格是精准，是恒久，同时也代表了格拉苏蒂小镇的制表精神。1845年，出身德累斯顿的费尔迪南多·阿道夫·朗格在格拉苏蒂创办表厂，从此奠定德国萨克森的精密制表业。然而战争令朗格在制表历史上消失了40多年，直到1994年10月24日，朗格重新归来，宣告萨克森精密制表的复兴。朗格复兴20周年专题片：《传奇重返故乡》由汉唐文化特别策划并拍摄。摄制组自2011年首次前往格拉苏蒂小镇后，再次造访这个传奇之地。朗格老先生、格拉苏蒂前市长、朗格首批员工等历史的见证者，在镜头前侃侃而谈他们与朗格的感人故事。', 'zn');
INSERT INTO `source` VALUES ('100458', 'http://localhost:8080/img/A. Lange & Sohne A Legend Comes Home.jpg', '1', 'A. Lange & Söhne: A Legend Comes Home', '/awoe/awoeinner/100460', null, '2016-01-26', 'ADMIN', '2016-01-26', 'videoimg', 'ADMIN', 'awoe', null, 'A. Lange & Söhne stands for accuracy, tradition, and the spirit of Glashütte. Dresden-born watchmaker Ferdinand Adolph Lange established his manufactory in Glashütte in 1845 that stood until the Cold War. 40 years later, on October 24th, 1994, Saxon watchmaking made a triumphant return. Hantang Culture received the brand’s special invitation to make its 20th anniversary film, “A Legend Comes Home”.', 'en');
INSERT INTO `source` VALUES ('100459', 'http://localhost:8080/video/A. Lange & Sohne A Legend Comes Home.mp4', '1', '朗格：传奇重返故乡', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'video/mp4', 'ADMIN', 'awoe', null, '朗格是精准，是恒久，同时也代表了格拉苏蒂小镇的制表精神。1845年，出身德累斯顿的费尔迪南多·阿道夫·朗格在格拉苏蒂创办表厂，从此奠定德国萨克森的精密制表业。然而战争令朗格在制表历史上消失了40多年，直到1994年10月24日，朗格重新归来，宣告萨克森精密制表的复兴。朗格复兴20周年专题片：《传奇重返故乡》由汉唐文化特别策划并拍摄。摄制组自2011年首次前往格拉苏蒂小镇后，再次造访这个传奇之地。朗格老先生、格拉苏蒂前市长、朗格首批员工等历史的见证者，在镜头前侃侃而谈他们与朗格的感人故事。', 'zn');
INSERT INTO `source` VALUES ('100460', 'http://localhost:8080/video/A. Lange & Sohne A Legend Comes Home-ENG.mp4', '1', 'A. Lange & Söhne: A Legend Comes Home', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'video/mp4', 'ADMIN', 'awoe', null, 'A. Lange & Söhne stands for accuracy, tradition, and the spirit of Glashütte. Dresden-born watchmaker Ferdinand Adolph Lange established his manufactory in Glashütte in 1845 that stood until the Cold War. 40 years later, on October 24th, 1994, Saxon watchmaking made a triumphant return. Hantang Culture received the brand’s special invitation to make its 20th anniversary film, “A Legend Comes Home”.', 'en');
INSERT INTO `source` VALUES ('100461', 'http://localhost:8080/img/Louis Vuitton Series 2 Exhibition.jpg', '1', '路易威登“系列二”时尚展览开幕', '/awoe/awoeinner/100463', null, '2016-01-26', 'ADMIN', '2016-01-26', 'videoimg', 'ADMIN', 'awoe', null, '2015年3月27日，路易威登“系列二”过去——现在——未来时尚展览在北京开启，解读计师尼古拉·盖斯奇埃尔创作第二个女士成衣系列的灵感。或是重现大秀现场的台前幕后，或是回顾百年传奇，每一个展厅都布置精心，向历史和创意致敬。汉唐摄制组亲赴现场，专访各路明星嘉宾，一同感受这场灵感之旅。', 'zn');
INSERT INTO `source` VALUES ('100462', 'http://localhost:8080/img/Louis Vuitton Series 2 Exhibition.jpg', '1', 'Louis Vuitton Series 2 Exhibition', '/awoe/awoeinner/100464', null, '2016-01-26', 'ADMIN', '2016-01-26', 'videoimg', 'ADMIN', 'awoe', null, 'On March 27th 2015, the Louis Vuitton Series 2 – Past, Present and Future exhibition opened in Beijing. The Women’s Artistic Director Nicolas Ghesquière showed the inspiration behind his second women’s ready-to-wear collection at Louis Vuitton. Each showroom was elaborately arranged. Hantang brings you event coverage and celebrity interviews.', 'en');
INSERT INTO `source` VALUES ('100463', 'http://localhost:8080/video/Louis Vuitton Series 2 Exhibition.mp4', '1', '路易威登“系列二”时尚展览开幕', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'video/mp4', 'ADMIN', 'awoe', null, '2015年3月27日，路易威登“系列二”过去——现在——未来时尚展览在北京开启，解读计师尼古拉·盖斯奇埃尔创作第二个女士成衣系列的灵感。或是重现大秀现场的台前幕后，或是回顾百年传奇，每一个展厅都布置精心，向历史和创意致敬。汉唐摄制组亲赴现场，专访各路明星嘉宾，一同感受这场灵感之旅。', 'zn');
INSERT INTO `source` VALUES ('100464', 'http://localhost:8080/video/Louis Vuitton Series 2 Exhibition_ENG.mp4', '1', 'Louis Vuitton Series 2 Exhibition', null, null, '2016-01-26', 'ADMIN', '2016-01-26', 'video/mp4', 'ADMIN', 'awoe', null, 'On March 27th 2015, the Louis Vuitton Series 2 – Past, Present and Future exhibition opened in Beijing. The Women’s Artistic Director Nicolas Ghesquière showed the inspiration behind his second women’s ready-to-wear collection at Louis Vuitton. Each showroom was elaborately arranged. Hantang brings you event coverage and celebrity interviews.', 'en');
INSERT INTO `source` VALUES ('100465', 'http://localhost:8080/img/AWOE_Vacation Spots in Switzerland.jpg', '1', '瑞士旅游：度假胜地', '/awoe/awoeinner/100475', null, '2016-01-28', 'ADMIN', '2016-01-28', 'videoimg', 'ADMIN', 'awoe', null, '地中海文化与中欧文化的交融，让瑞士闪耀着别样的光芒。无论是在皑皑雪山上感受壮丽美景、尝试冰雪运动，还是在提契诺州沉浸于色彩斑斓的建筑、触碰古迹的历史，截然不同的人文地理风貌都丰富了旅行体验。而历史悠久而又惬意的酒店、便捷发达的瑞士铁路，则是旅行的重要保障。跟随汉唐文化《问鼎世界》，在瑞士开始一个独一无二的假期。', 'zn');
INSERT INTO `source` VALUES ('100466', 'http://localhost:8080/img/AWOE_Vacation Spots in Switzerland.jpg', '1', 'Vacation Spots in Switzerland', null, null, '2016-01-28', 'ADMIN', '2016-01-28', 'videoimg', 'ADMIN', 'awoe', null, 'The combination of the Mediterranean and central European culture allows Switzerland to shine. Whether you’re enjoying white snowcapped mountain views and testing the slopes, or in Ticino immersed in colorful architecture, this cultural variety will give you a vacation to remember, while historic hotels and express trains make sure it will be comfortable and convenient. Follow Hantang Culture’s A World of Excellence into Switzerland for an unmatched holiday.', 'en');
INSERT INTO `source` VALUES ('100467', 'http://localhost:8080/img/AWOE_Cultured Vacations in Switzerland.jpg', '1', '瑞士旅游：文化瑞士', '/awoe/awoeinner/100476', null, '2016-01-28', 'ADMIN', '2016-01-28', 'videoimg', 'ADMIN', 'awoe', null, '在瑞士这片平和而宁静的土地上，浓郁的文化气息随时将人们包围。在首都伯尔尼感受传统与现代的共存，在小镇爱蒙塔尔体验奶酪制作。或是乘船游览图恩，欣赏老城风景；又或是在巴伦伯格露天博物馆走走，了解从前瑞士人的日常生活。遍布瑞士各地的博物馆、美术馆、歌剧院更令人无限向往。汉唐文化《问鼎世界》深入瑞士，探寻美景之外的文化天地。', 'zn');
INSERT INTO `source` VALUES ('100468', 'http://localhost:8080/img/AWOE_Cultured Vacations in Switzerland.jpg', '1', 'Cultured Vacations in Switzerland', null, null, '2016-01-28', 'ADMIN', '2016-01-28', 'videoimg', 'ADMIN', 'awoe', null, 'The peaceful nation of Switzerland is rich with culture. In the capital city, Bern, experience the confluence of tradition and modernity. Try making cheese in the small village of Emmental or take a boat tour through Thun to admire the Old Town. Walk through the Ballenberg Swiss Open-Air Museum to understand early Swiss life. Switzerland is full of museums, art galleries, opera houses and more. Hantang Culture’s A World of Excellence goes deep into Switzerland, exploring beautiful sights in a cultural haven.', 'en');
INSERT INTO `source` VALUES ('100469', 'http://localhost:8080/img/AWOE_Chanel, Venice, and Leo.jpg', '1', '香奈儿·威尼斯·狮子', '/awoe/awoeinner/100477', null, '2016-01-28', 'ADMIN', '2016-01-28', 'videoimg', 'ADMIN', 'awoe', null, '狮子，是威尼斯的守护神，也是嘉柏丽尔•香奈儿最钟爱的标志之一。威尼斯，是香奈儿女士的幸运之地，也塑造了她的时尚风格。从1932年钻石珠宝展，到狮子成为香奈儿高级珠宝的标志性主题，这些璀璨珠宝承载着香奈儿女士的人生经历，也以绝佳创意和精湛工艺延续香奈儿纯然简单的美。汉唐文化《问鼎世界》栏目娓娓道来一个狮子座女人和珠宝的传奇故事。', 'zn');
INSERT INTO `source` VALUES ('100470', 'http://localhost:8080/img/AWOE_Chanel, Venice, and Leo.jpg', '1', 'Chanel, Venice, and Leo', null, null, '2016-01-28', 'ADMIN', '2016-01-28', 'videoimg', 'ADMIN', 'awoe', null, 'The lion is the guardian of Venice and Coco Chanel’s most beloved symbol. After her trip to Venice, she fell in love with the city and the symbol. The brand incorporated the lion motif in the 1932 Collection inspired by Chanel’s first jewelry collection. Hantang Culture’s A World of Excellence tells the legendary story of Coco Chanel and her jewelry.', 'en');
INSERT INTO `source` VALUES ('100471', 'http://localhost:8080/img/AWOE_MIKIMOTO_Pearls and Persistence.jpg', '1', 'MIKIMOTO：一颗珍珠，一种执着', '/awoe/awoeinner/100478', null, '2016-01-28', 'ADMIN', '2016-01-28', 'videoimg', 'ADMIN', 'awoe', null, '距今120多年前，“珍珠之父”御木本幸吉在日本三重县的相岛成功培育出了历史上第一颗珍珠，开启了近代珍珠发展的新篇章。秉承对珍珠品质的坚持以及融汇东西的设计风格，如今的MIKIMOTO在全球闻名遐迩。汉唐摄制组亲赴日本，探访全球独一无二的“珍珠博物馆”以及“御木本幸吉纪念馆”，独家进入MIKIMOTO珠宝工坊，专访品牌高层、设计师及工匠，用镜头记录下MIKIMOTO传递给全世界女性的美。', 'zn');
INSERT INTO `source` VALUES ('100472', 'http://localhost:8080/img/AWOE_MIKIMOTO_Pearls and Persistence.jpg', '1', 'MIKIMOTO: Pearls and Persistence', null, null, '2016-01-28', 'ADMIN', '2016-01-28', 'videoimg', 'ADMIN', 'awoe', null, 'Over 120 years ago, Kōkichi Mikimoto succeeded in producing the world’s first cultured pearl on Ojima Island in Mie Prefecture, laying the ground for the modern cultured pearl industry. Hantang Culture hopped over to Japan to visit Mikimoto Pearl Island and Kokichi Mikimoto Memorial Hall, and had exclusive interviews with their executives, designers and craftsmen.', 'en');
INSERT INTO `source` VALUES ('100473', 'http://localhost:8080/img/AWOE_Hermes_A Creative Space for the Imagination.jpg', '1', '爱马仕：非凡想象力构筑的创意空间', '/awoe/awoeinner/100479', null, '2016-01-28', 'ADMIN', '2016-01-28', 'videoimg', 'ADMIN', 'awoe', null, 'petit h，一个看似平凡的工作室，却巧妙地利用爱马仕产品中没有被充分使用的材料，构筑出一个想象与趣味的创意空间。2015年11月，逾千件精选自巴黎petit h 工坊的作品，首次从巴黎来到上海爱马仕之家公开展售，呈现爱马仕独具匠心的手工工艺和充满艺术、趣味的浪漫诗意。汉唐摄制组独家深入petit h巴黎工坊与上海爱马仕之家展览现场，专访petit h艺术总监，见证一场材料与灵感间的对话。', 'zn');
INSERT INTO `source` VALUES ('100474', 'http://localhost:8080/img/AWOE_Hermes_A Creative Space for the Imagination.jpg', '1', 'Hermès: A Creative Space for the Imagination', null, null, '2016-01-28', 'ADMIN', '2016-01-28', 'videoimg', 'ADMIN', 'awoe', null, 'Petit h seems like a normal workshop, but it has the special constraint that it can only use materials from the Hermès production process. In November of 2015, over a thousand petit h pieces were on public display for the first time in Hermès Maison Shanghai, presenting Hermès craftsmanship and artistry. The Hantang Culture team peered deep into the petit h Paris atelier and the Hermès Maison Shanghai exhibition, interviewing the creative director to understand the dialogue between materials and innovation.', 'en');
INSERT INTO `source` VALUES ('100475', 'http://localhost:8080/video/AWOE_Vacation Spots in Switzerland.mp4', '1', '瑞士旅游：度假胜地', null, null, '2016-01-28', 'ADMIN', '2016-01-28', 'video/mp4', 'ADMIN', 'awoe', null, '地中海文化与中欧文化的交融，让瑞士闪耀着别样的光芒。无论是在皑皑雪山上感受壮丽美景、尝试冰雪运动，还是在提契诺州沉浸于色彩斑斓的建筑、触碰古迹的历史，截然不同的人文地理风貌都丰富了旅行体验。而历史悠久而又惬意的酒店、便捷发达的瑞士铁路，则是旅行的重要保障。跟随汉唐文化《问鼎世界》，在瑞士开始一个独一无二的假期。', 'zn');
INSERT INTO `source` VALUES ('100476', 'http://localhost:8080/video/AWOE_Cultured Vacations in Switzerland.mp4', '1', '瑞士旅游：文化瑞士', null, null, '2016-01-28', 'ADMIN', '2016-01-28', 'video/mp4', 'ADMIN', 'awoe', null, '在瑞士这片平和而宁静的土地上，浓郁的文化气息随时将人们包围。在首都伯尔尼感受传统与现代的共存，在小镇爱蒙塔尔体验奶酪制作。或是乘船游览图恩，欣赏老城风景；又或是在巴伦伯格露天博物馆走走，了解从前瑞士人的日常生活。遍布瑞士各地的博物馆、美术馆、歌剧院更令人无限向往。汉唐文化《问鼎世界》深入瑞士，探寻美景之外的文化天地', 'zn');
INSERT INTO `source` VALUES ('100477', 'http://localhost:8080/video/AWOE_Chanel, Venice, and Leo.mp4', '1', '香奈儿·威尼斯·狮子', null, null, '2016-01-28', 'ADMIN', '2016-01-28', 'video/mp4', 'ADMIN', 'awoe', null, '狮子，是威尼斯的守护神，也是嘉柏丽尔•香奈儿最钟爱的标志之一。威尼斯，是香奈儿女士的幸运之地，也塑造了她的时尚风格。从1932年钻石珠宝展，到狮子成为香奈儿高级珠宝的标志性主题，这些璀璨珠宝承载着香奈儿女士的人生经历，也以绝佳创意和精湛工艺延续香奈儿纯然简单的美。汉唐文化《问鼎世界》栏目娓娓道来一个狮子座女人和珠宝的传奇故事。', 'zn');
INSERT INTO `source` VALUES ('100478', 'http://localhost:8080/video/AWOE_MIKIMOTO_Pearls and Persistence.mp4', '1', 'MIKIMOTO：一颗珍珠，一种执着', null, null, '2016-01-28', 'ADMIN', '2016-01-28', 'video/mp4', 'ADMIN', 'awoe', null, '距今120多年前，“珍珠之父”御木本幸吉在日本三重县的相岛成功培育出了历史上第一颗珍珠，开启了近代珍珠发展的新篇章。秉承对珍珠品质的坚持以及融汇东西的设计风格，如今的MIKIMOTO在全球闻名遐迩。汉唐摄制组亲赴日本，探访全球独一无二的“珍珠博物馆”以及“御木本幸吉纪念馆”，独家进入MIKIMOTO珠宝工坊，专访品牌高层、设计师及工匠，用镜头记录下MIKIMOTO传递给全世界女性的美。', 'zn');
INSERT INTO `source` VALUES ('100479', 'http://localhost:8080/video/AWOE_Hermes_A Creative Space for the Imagination.mp4', '1', '爱马仕：非凡想象力构筑的创意空间', null, null, '2016-01-28', 'ADMIN', '2016-01-28', 'video/mp4', 'ADMIN', 'awoe', null, 'petit h，一个看似平凡的工作室，却巧妙地利用爱马仕产品中没有被充分使用的材料，构筑出一个想象与趣味的创意空间。2015年11月，逾千件精选自巴黎petit h 工坊的作品，首次从巴黎来到上海爱马仕之家公开展售，呈现爱马仕独具匠心的手工工艺和充满艺术、趣味的浪漫诗意。汉唐摄制组独家深入petit h巴黎工坊与上海爱马仕之家展览现场，专访petit h艺术总监，见证一场材料与灵感间的对话。', 'zn');
INSERT INTO `source` VALUES ('1004557', 'http://localhost:8080/bootstrap/images/home03.gif', '1', 'homecarousel01', null, null, '2016-02-02', 'ADMIN', '2016-02-02', 'img', 'ADMIN', 'home', 'imagearea1', null, 'zn');
INSERT INTO `source` VALUES ('1004558', 'http://localhost:8080/img/cover-herp.jpg', '1', '来自宫廷的吟颂——莉莉·拉斯金国际竖琴大赛优胜者柯琳·佳捷音乐会', '/music/musicinner/1004561', null, '2016-02-03', 'ADMIN', '2016-02-03', 'videoimg', 'ADMIN', 'music', null, '汉唐文化有限公司于2014年设立“汉唐文化奖”及“汉唐文化国际音乐年艺术家”称号，颁发给世界各大著名音乐比赛的首奖获得者，支持青年艺术家和古典音乐文化的交流。\r\n莉莉·拉斯金国际竖琴大赛，是汉唐文化发展有限公司及汉唐文化国际音乐年首个开展长期合作的国际音乐比赛。\r\n\r\n2014年10月27日，柯琳·佳捷获得了第八届莉莉·拉斯金国际竖琴大赛的优胜，同时收获首个“汉唐文化奖”与“汉唐文化国际音乐年艺术家”称号，受邀在“2014-2015走进大剧院——汉唐文化国际音乐年”期间在中国举办巡演音乐会。\r\n\r\n柯琳·佳捷1992年10月4日出生于法国尼斯，5岁开始跟着母亲赫尔维娅·布里根，尼斯爱乐乐团的首席竖琴师，学习竖琴。2003年，11岁的柯琳·佳捷进入法国尼斯国立音乐学院学习，2009年6月顺利进入巴黎国立高等音乐舞蹈学院学习。2013年6月，她获得本科学位，竖琴演奏被评审一致评定为优秀。\r\n\r\n2015年7月24日至30日，柯琳·佳捷来到中国，先后走访了苏州、上海、北京和沈阳，奏响“来自宫廷的颂吟”，为当地观众展现竖琴纯美动人的音色。', 'zn');
INSERT INTO `source` VALUES ('1004559', 'http://localhost:8080/img/music-herp.jpg', '1', '来自宫廷的吟颂——莉莉·拉斯金国际竖琴大赛优胜者柯琳·佳捷音乐会', '/music/musicinner/1004561', null, '2016-02-03', 'ADMIN', '2016-02-03', 'proimg', 'ADMIN', 'music', null, '柯琳·佳捷是第八届莉莉·拉斯金国际竖琴大赛的优胜者，也是首位“汉唐文化奖”和“汉唐文化国际音乐年艺术家”称号的获得者。2015年7月24日至30日，她受“汉唐文化国际音乐年”的邀请，先后来到苏州、上海、北京和沈阳，奏响“来自宫廷的颂吟”。', 'zn');
INSERT INTO `source` VALUES ('1004560', 'http://localhost:8080/img/Performer_herp.jpg', '1', '', '', null, '2016-02-03', 'ADMIN', '2016-02-03', 'img', 'ADMIN', '1004561', '', '', 'zn');
INSERT INTO `source` VALUES ('1004561', 'http://localhost:8080/video/20150807_UL20m_herp_U150292.mpeg.mp4', '1', '来自宫廷的吟颂——莉莉·拉斯金国际竖琴大赛优胜者柯琳·佳捷音乐会', null, null, '2016-02-03', 'ADMIN', '2016-02-03', 'video/mp4', 'ADMIN', 'music', null, '汉唐文化有限公司于2014年设立“汉唐文化奖”及“汉唐文化国际音乐年艺术家”称号，颁发给世界各大著名音乐比赛的首奖获得者，支持青年艺术家和古典音乐文化的交流。\r\n莉莉·拉斯金国际竖琴大赛，是汉唐文化发展有限公司及汉唐文化国际音乐年首个开展长期合作的国际音乐比赛。\r\n\r\n2014年10月27日，柯琳·佳捷获得了第八届莉莉·拉斯金国际竖琴大赛的优胜，同时收获首个“汉唐文化奖”与“汉唐文化国际音乐年艺术家”称号，受邀在“2014-2015走进大剧院——汉唐文化国际音乐年”期间在中国举办巡演音乐会。\r\n\r\n柯琳·佳捷1992年10月4日出生于法国尼斯，5岁开始跟着母亲赫尔维娅·布里根，尼斯爱乐乐团的首席竖琴师，学习竖琴。2003年，11岁的柯琳·佳捷进入法国尼斯国立音乐学院学习，2009年6月顺利进入巴黎国立高等音乐舞蹈学院学习。2013年6月，她获得本科学位，竖琴演奏被评审一致评定为优秀。\r\n\r\n2015年7月24日至30日，柯琳·佳捷来到中国，先后走访了苏州、上海、北京和沈阳，奏响“来自宫廷的颂吟”，为当地观众展现竖琴纯美动人的音色。', 'zn');
INSERT INTO `source` VALUES ('1004562', 'http://localhost:8080/video/20150818_UL20m_herp_V02__ENG-ok.mpeg.mp4', '2', '', null, null, '2016-02-03', 'ADMIN', '2016-02-03', 'video/mp4', 'ADMIN', 'music', null, null, 'en');
INSERT INTO `source` VALUES ('1004563', 'http://localhost:8080/img/cover-herp.jpg', '2', '', '/music/musicinner/1004562', null, '2016-02-03', 'ADMIN', '2016-02-03', 'videoimg', 'ADMIN', 'music', null, null, 'en');
INSERT INTO `source` VALUES ('1004564', 'http://localhost:8080/video/20150821_UL20m_Oxford_V01__Final_U150308.mp4', '1', '纯净之声·五百年咏唱——牛津大学基督大教堂合唱团音乐会', null, null, '2016-02-03', 'ADMIN', '2016-02-03', 'video/mp4', 'ADMIN', 'music', null, '创立于1526年，牛津大学基督大教堂合唱团是英国最知名最古老的合唱团之一，距今已经有近500年的历史。虽然合唱团历史悠久，但是他们但却以青春活力的声音和大胆创新的音乐编排闻名于世。\r\n\r\n合唱团有14名成年男子、18名男孩，以及2位管风琴演奏家。这些男孩经过音乐能力选拔进入牛津大学基督教堂学院。成年团员中，7位是专业歌唱家，7位是大学本科学生。合唱团的现任指挥斯蒂芬·达灵顿是英国顶尖的合唱指挥之一，自1985年至今，一直担任牛津大学基督大教堂合唱团的音乐总监和指挥。\r\n\r\n除了日常教堂唱诗班演唱，合唱团每年都排满了音乐会和海外巡演活动。与国际众多知名乐团和独奏家都有合作，并录制过多张获奖专辑。\r\n\r\n2015年8月8日，牛津大学基督大教堂合唱团来到上海大剧院，献上“纯净之声·五百年咏唱”。演出的曲目既包括早期古典音乐，也有不少当代经典曲目。作为来自《哈利·波特》系列电影拍摄地的合唱团，他们特意安排了电影中的经典插曲压轴，为音乐会来更多魔幻色彩。', 'zn');
INSERT INTO `source` VALUES ('1004565', 'http://localhost:8080/video/20150924_UL20m_Oxford_V02_ENG-ok.mp4', '1', '', null, null, '2016-02-03', 'ADMIN', '2016-02-03', 'video/mp4', 'ADMIN', 'music', null, null, 'en');
INSERT INTO `source` VALUES ('1004566', 'http://localhost:8080/img/music-Oxford.jpg', '1', '纯净之声·五百年咏唱——牛津大学基督大教堂合唱团音乐会', '/music/musicinner/1004564', null, '2016-02-03', 'ADMIN', '2016-02-03', 'proimg', 'ADMIN', 'music', null, '牛津大学基督大教堂合唱团创立于1526年，是英国最知名最古老的合唱团之一，也是英国独一无二的教堂合唱团兼大学合唱团。合唱团对古典合唱作品和现代流行音乐的表演都游刃有余，曾演唱过众多脍炙人口的影视作品主题曲。2015年8月8日，牛津大学基督大教堂合唱团来到上海大剧院，献上“纯净之声·五百年咏唱”。', 'zn');
INSERT INTO `source` VALUES ('1004567', 'http://localhost:8080/img/Performer_Oxford.jpg', '1', '纯净之声·五百年咏唱——牛津大学基督大教堂合唱团音乐会', '', null, '2016-02-03', 'ADMIN', '2016-02-03', 'img', 'ADMIN', '1004564', null, '', 'zn');
INSERT INTO `source` VALUES ('1004568', 'http://localhost:8080/img/cover-Oxford.jpg', '1', '纯净之声·五百年咏唱——牛津大学基督大教堂合唱团音乐会', '/music/musicinner/1004564', null, '2016-02-03', 'ADMIN', '2016-02-03', 'videoimg', 'ADMIN', 'music', null, '创立于1526年，牛津大学基督大教堂合唱团是英国最知名最古老的合唱团之一，距今已经有近500年的历史。虽然合唱团历史悠久，但是他们但却以青春活力的声音和大胆创新的音乐编排闻名于世。\r\n\r\n合唱团有14名成年男子、18名男孩，以及2位管风琴演奏家。这些男孩经过音乐能力选拔进入牛津大学基督教堂学院。成年团员中，7位是专业歌唱家，7位是大学本科学生。合唱团的现任指挥斯蒂芬·达灵顿是英国顶尖的合唱指挥之一，自1985年至今，一直担任牛津大学基督大教堂合唱团的音乐总监和指挥。\r\n\r\n除了日常教堂唱诗班演唱，合唱团每年都排满了音乐会和海外巡演活动。与国际众多知名乐团和独奏家都有合作，并录制过多张获奖专辑。\r\n\r\n2015年8月8日，牛津大学基督大教堂合唱团来到上海大剧院，献上“纯净之声·五百年咏唱”。演出的曲目既包括早期古典音乐，也有不少当代经典曲目。作为来自《哈利·波特》系列电影拍摄地的合唱团，他们特意安排了电影中的经典插曲压轴，为音乐会来更多魔幻色彩。', 'zn');
INSERT INTO `source` VALUES ('1004569', 'http://localhost:8080/img/cover-Oxford.jpg', '1', '', '/music/musicinner/1004565', null, '2016-02-03', 'ADMIN', '2016-02-03', 'videoimg', 'ADMIN', 'music', null, null, 'en');
INSERT INTO `source` VALUES ('1004570', 'http://localhost:8080/video/20151230_UL20m_Pacific_V02_OK_U150473.mp4', '1', '', null, null, '2016-02-03', 'ADMIN', '2016-02-03', 'video/mp4', 'ADMIN', 'music', null, null, 'zn');
INSERT INTO `source` VALUES ('1004571', 'http://localhost:8080/img/music-Pacific.jpg', '1', '', '/music/musicinner/1004570', null, '2016-02-03', 'ADMIN', '2016-02-03', 'proimg', 'ADMIN', 'music', null, null, 'zn');
INSERT INTO `source` VALUES ('1004572', 'http://localhost:8080/img/Perfomer-Pacific.jpg', '1', '', null, null, '2016-02-03', 'ADMIN', '2016-02-03', 'img', 'ADMIN', '1004570', null, null, 'zn');
INSERT INTO `source` VALUES ('1004573', 'http://localhost:8080/img/cover-Pacific.jpg', '1', '', '/music/musicinner/1004570', null, '2016-02-03', 'ADMIN', '2016-02-03', 'videoimg', 'ADMIN', 'music', null, null, 'zn');

-- ----------------------------
-- Table structure for `user_info`
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(64) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `create_time` date NOT NULL,
  `creator` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_info
-- ----------------------------
INSERT INTO `user_info` VALUES ('1', '5f4dcc3b5aa765d61d8327deb882cf99', 'ADMIN', '2016-01-28', 'ADMIN');

-- ----------------------------
-- Table structure for `webcontent`
-- ----------------------------
DROP TABLE IF EXISTS `webcontent`;
CREATE TABLE `webcontent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `page` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  `creator` varchar(100) NOT NULL,
  `updater` varchar(100) NOT NULL,
  `create_time` date NOT NULL,
  `update_time` date NOT NULL,
  `sequence` int(10) NOT NULL,
  `previewstatus` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of webcontent
-- ----------------------------
INSERT INTO `webcontent` VALUES ('1', 'home1', 'home', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '1', '1');
INSERT INTO `webcontent` VALUES ('2', 'home2', 'home', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '2', '1');
INSERT INTO `webcontent` VALUES ('3', 'home3', 'home', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '3', '2');
INSERT INTO `webcontent` VALUES ('4', 'home4', 'home', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '4', '1');
INSERT INTO `webcontent` VALUES ('5', 'about1', 'about', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '1', '1');
INSERT INTO `webcontent` VALUES ('6', 'about2', 'about', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '2', '1');
INSERT INTO `webcontent` VALUES ('7', 'about3', 'about', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '3', '2');
INSERT INTO `webcontent` VALUES ('8', 'platform1', 'platform', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '1', '1');
INSERT INTO `webcontent` VALUES ('9', 'platform2', 'platform', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '2', '1');
INSERT INTO `webcontent` VALUES ('10', 'platform3', 'platform', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '3', '2');
INSERT INTO `webcontent` VALUES ('11', 'platform4', 'platform', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '4', '1');
INSERT INTO `webcontent` VALUES ('12', 'platform5', 'platform', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '5', '2');
INSERT INTO `webcontent` VALUES ('13', 'platform6', 'platform', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '6', '1');
INSERT INTO `webcontent` VALUES ('14', 'partner1', 'partner', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '1', '1');
INSERT INTO `webcontent` VALUES ('15', 'partner2', 'partner', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '2', '1');
INSERT INTO `webcontent` VALUES ('16', 'partner3', 'partner', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '3', '2');
INSERT INTO `webcontent` VALUES ('17', 'ul1', 'ul', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '1', '1');
INSERT INTO `webcontent` VALUES ('18', 'ul2', 'ul', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '2', '1');
INSERT INTO `webcontent` VALUES ('19', 'ul3', 'ul', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '3', '2');
INSERT INTO `webcontent` VALUES ('21', 'awoe1', 'awoe', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '1', '1');
INSERT INTO `webcontent` VALUES ('22', 'awoe2', 'awoe', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '2', '1');
INSERT INTO `webcontent` VALUES ('23', 'awoe3', 'awoe', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '3', '2');
INSERT INTO `webcontent` VALUES ('24', 'music1', 'music', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '1', '1');
INSERT INTO `webcontent` VALUES ('25', 'music2', 'music', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '2', '1');
INSERT INTO `webcontent` VALUES ('26', 'music3', 'music', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '3', '2');
INSERT INTO `webcontent` VALUES ('27', 'join1', 'join', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '1', '1');
INSERT INTO `webcontent` VALUES ('28', 'join2', 'join', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '2', '1');
INSERT INTO `webcontent` VALUES ('29', 'join3', 'join', '1', 'ADMIN', 'ADMIN', '2016-02-04', '2016-02-04', '3', '2');

-- ----------------------------
-- Table structure for `webmodel`
-- ----------------------------
DROP TABLE IF EXISTS `webmodel`;
CREATE TABLE `webmodel` (
  `is_auto` varchar(10) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `areaname` varchar(200) NOT NULL,
  `first_level` varchar(200) DEFAULT NULL,
  `second_level` varchar(200) DEFAULT NULL,
  `third_level` varchar(200) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `remark` varchar(2000) DEFAULT NULL,
  `is_hide` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of webmodel
-- ----------------------------
INSERT INTO `webmodel` VALUES ('1', '1', 'homedisarea1', 'home', 'area1', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '2', 'homedisarea1', 'home', 'area1', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '3', 'homedisarea1', 'home', 'area1', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '4', 'homedisarea2', 'home', 'area2', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '5', 'homedisarea2', 'home', 'area2', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '6', 'homedisarea2', 'home', 'area2', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '7', 'homedisarea3', 'home', 'area3', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '8', 'homedisarea3', 'home', 'area3', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '9', 'homedisarea3', 'home', 'area3', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '10', 'homedisarea4', 'home', 'area4', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '11', 'homedisarea4', 'home', 'area4', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '12', 'homedisarea4', 'home', 'area4', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '13', 'aboutdisarea1', 'about', 'area1', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '14', 'aboutdisarea1', 'about', 'area1', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '15', 'aboutdisarea1', 'about', 'area1', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '16', 'aboutdisarea2', 'about', 'area2', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '17', 'aboutdisarea2', 'about', 'area2', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '18', 'aboutdisarea2', 'about', 'area2', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '19', 'aboutdisarea3', 'about', 'area3', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '20', 'aboutdisarea3', 'about', 'area3', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '21', 'aboutdisarea3', 'about', 'area3', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '22', 'platformdisarea1', 'platform', 'area1', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '23', 'platformdisarea1', 'platform', 'area1', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '24', 'platformdisarea1', 'platform', 'area1', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '25', 'platformdisarea2', 'platform', 'area2', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '26', 'platformdisarea2', 'platform', 'area2', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '27', 'platformdisarea2', 'platform', 'area2', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '28', 'platformdisarea3', 'platform', 'area3', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '29', 'platformdisarea3', 'platform', 'area3', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '30', 'platformdisarea3', 'platform', 'area3', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '31', 'partnerdisarea1', 'partner', 'area1', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '32', 'partnerdisarea1', 'partner', 'area1', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '33', 'partnerdisarea1', 'partner', 'area1', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '34', 'partnerdisarea2', 'partner', 'area2', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '35', 'partnerdisarea2', 'partner', 'area2', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '36', 'partnerdisarea2', 'partner', 'area2', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '37', 'uldisarea1', 'ul', 'area1', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '38', 'uldisarea1', 'ul', 'area1', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '39', 'uldisarea1', 'ul', 'area1', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '40', 'uldisarea2', 'ul', 'area2', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '41', 'uldisarea2', 'ul', 'area2', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '42', 'uldisarea2', 'ul', 'area2', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '43', 'uldisarea3', 'ul', 'area3', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '44', 'uldisarea3', 'ul', 'area3', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '45', 'uldisarea3', 'ul', 'area3', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '46', 'awoedisarea1', 'awoe', 'area1', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '47', 'awoedisarea1', 'awoe', 'area1', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '48', 'awoedisarea1', 'awoe', 'area1', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '49', 'awoedisarea2', 'awoe', 'area2', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '50', 'awoedisarea2', 'awoe', 'area2', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '51', 'awoedisarea2', 'awoe', 'area2', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '52', 'awoedisarea3', 'awoe', 'area3', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '53', 'awoedisarea3', 'awoe', 'area3', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '54', 'awoedisarea3', 'awoe', 'area3', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '55', 'musicdisarea1', 'music', 'area1', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '56', 'musicdisarea1', 'music', 'area1', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '57', 'musicdisarea1', 'music', 'area1', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '58', 'musicdisarea2', 'music', 'area2', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '59', 'musicdisarea2', 'music', 'area2', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '60', 'musicdisarea2', 'music', 'area2', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '61', 'musicdisarea3', 'music', 'area3', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '62', 'musicdisarea3', 'music', 'area3', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '63', 'musicdisarea3', 'music', 'area3', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '64', 'joindisarea1', 'join', 'area1', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '65', 'joindisarea1', 'join', 'area1', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '66', 'joindisarea1', 'join', 'area1', 'fr', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '67', 'joindisarea2', 'join', 'area2', 'zn', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '68', 'joindisarea2', 'join', 'area2', 'en', '1', null, '1');
INSERT INTO `webmodel` VALUES ('1', '69', 'joindisarea2', 'join', 'area2', 'fr', '1', null, '1');
