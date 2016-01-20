/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50710
Source Host           : localhost:3306
Source Database       : hantang

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2016-01-20 21:18:32
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
  `upader` varchar(30) NOT NULL,
  `update_time` date NOT NULL,
  `third_level` varchar(100) DEFAULT NULL,
  `second_level` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keyword
-- ----------------------------
INSERT INTO `keyword` VALUES ('music', '1', '2013-2014', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', null, 'seasondetails');
INSERT INTO `keyword` VALUES ('music', '2', '2014-2015', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', null, 'seasondetails');
INSERT INTO `keyword` VALUES ('music', '3', '2015-2016', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', null, 'seasondetails');
INSERT INTO `keyword` VALUES ('music', '4', '合唱', '1', 'ADMIN', '2016-01-20', '1', 'ADMIN', '2016-01-20', null, 'displaydetails');
INSERT INTO `keyword` VALUES ('music', '5', '独奏', '1', 'ADMIN', '2016-01-20', '2', 'ADMIN', '2016-01-20', null, 'displaydetails');
INSERT INTO `keyword` VALUES ('music', '6', '室内乐', '1', 'ADMIN', '2016-01-20', '3', 'ADMIN', '2016-01-20', null, 'displaydetails');
INSERT INTO `keyword` VALUES ('music', '7', '交响乐', '1', 'ADMIN', '2016-01-20', '4', 'ADMIN', '2016-01-20', null, 'displaydetails');
INSERT INTO `keyword` VALUES ('music', '8', '其他', '1', 'ADMIN', '2016-01-20', '5', 'ADMIN', '2016-01-20', null, 'displaydetails');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keyword_source_relation
-- ----------------------------

-- ----------------------------
-- Table structure for `privilege`
-- ----------------------------
DROP TABLE IF EXISTS `privilege`;
CREATE TABLE `privilege` (
  `privilege` int(3) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`)
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
  `third_level` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of source
-- ----------------------------
INSERT INTO `source` VALUES ('100000', 'bootstrap/images/homecarousel01.png', '1', 'homecarousel01', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea1', null);
INSERT INTO `source` VALUES ('100001', 'bootstrap/images/homecarousel01.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea1', null);
INSERT INTO `source` VALUES ('100002', 'bootstrap/images/homecarousel01.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea1', null);
INSERT INTO `source` VALUES ('100003', 'bootstrap/images/home-jz.png', '1', 'homecarousel02-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea11', null);
INSERT INTO `source` VALUES ('100004', 'bootstrap/images/wd.png', '1', 'homecarousel03-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea12', null);
INSERT INTO `source` VALUES ('100005', 'bootstrap/images/homecarousel02.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea2', null);
INSERT INTO `source` VALUES ('100006', 'bootstrap/images/homecarousel03.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea3', null);
INSERT INTO `source` VALUES ('100007', 'bootstrap/images/homecarousel04.png', '1', 'homecarousel04', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea4', null);
INSERT INTO `source` VALUES ('100008', 'bootstrap/images/homecarousel03.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea2', null);
INSERT INTO `source` VALUES ('100009', 'bootstrap/images/homecarousel04.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea3', null);
INSERT INTO `source` VALUES ('100010', 'bootstrap/images/homecarousel02.png', '1', 'homecarousel04', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea4', null);
INSERT INTO `source` VALUES ('100011', 'bootstrap/images/music.png', '1', 'homecarousel04-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea13', null);
INSERT INTO `source` VALUES ('100012', 'bootstrap/images/homecarousel04.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea2', null);
INSERT INTO `source` VALUES ('100013', 'bootstrap/images/homecarousel02.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea3', null);
INSERT INTO `source` VALUES ('100014', 'bootstrap/images/homecarousel03.png', '1', 'homecarousel04', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'home', 'imagearea4', null);
INSERT INTO `source` VALUES ('100015', 'bootstrap/images/platform1.png', '1', 'homecarousel02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'platform', 'imagearea2', null);
INSERT INTO `source` VALUES ('100016', 'bootstrap/images/platform2.png', '1', 'homecarousel03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'platform', 'imagearea3', null);
INSERT INTO `source` VALUES ('100017', 'bootstrap/images/partner1.png', '1', 'partner1', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'partner', 'imagearea1', null);
INSERT INTO `source` VALUES ('100018', 'bootstrap/images/homecarousel02.png', '1', 'ul01', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'ul', 'imagearea1', null);
INSERT INTO `source` VALUES ('100019', 'bootstrap/images/homecarousel03.png', '1', 'ul02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'ul', 'imagearea1', null);
INSERT INTO `source` VALUES ('100020', 'bootstrap/images/homecarousel04.png', '1', 'ul02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'ul', 'imagearea1', null);
INSERT INTO `source` VALUES ('100021', 'bootstrap/images/homecarousel03.png', '1', 'awoe01', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'awoe', 'imagearea1', null);
INSERT INTO `source` VALUES ('100022', 'bootstrap/images/homecarousel04.png', '1', 'awoe02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'awoe', 'imagearea1', null);
INSERT INTO `source` VALUES ('100023', 'bootstrap/images/homecarousel02.png', '1', 'awoe03', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'awoe', 'imagearea1', null);
INSERT INTO `source` VALUES ('100024', 'bootstrap/images/jz.png', '1', 'ul-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'ul', 'imagearea11', null);
INSERT INTO `source` VALUES ('100025', 'bootstrap/images/wd.png', '1', 'awoe-logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'awoe', 'imagearea11', null);
INSERT INTO `source` VALUES ('100026', 'bootstrap/images/homecarousel04.png', '1', 'music01', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'music', 'imagearea1', null);
INSERT INTO `source` VALUES ('100027', 'bootstrap/images/homecarousel02.png', '1', 'music02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'music', 'imagearea1', null);
INSERT INTO `source` VALUES ('100028', 'bootstrap/images/homecarousel03.png', '1', 'music02', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'music', 'imagearea1', null);
INSERT INTO `source` VALUES ('100029', 'bootstrap/images/logo.png', '1', 'logo', null, null, '2016-01-18', 'ADMIN', '2016-01-18', 'img', 'ADMIN', 'logoimage', '', null);
INSERT INTO `source` VALUES ('100030', 'bootstrap/images/partner1.png', '1', 'partner2', null, null, '2016-01-19', 'ADMIN', '2016-01-19', 'img', 'ADMIN', 'partner', 'imagearea1', null);
INSERT INTO `source` VALUES ('100099', 'video/joinvideo.mp4', '1', 'joinvideo', null, null, '2016-01-19', 'ADMIN', '2016-01-19', 'video/mp4', 'ADMIN', 'join', null, null);

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
