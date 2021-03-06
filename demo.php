<?php 

   /*
       Redis 介绍

       1. Redis是一个简单的，高效的，分布式的，基于内存的缓存工具

       2. 在性能方面：Redis是足够高效的
                      和Memcache对比，在数据量较小情况下，Redis性能更优秀。
                      数据量大到一定程度的时候，Memcache性能会比较好

       3. Redis数据类型：string(字符串,存储高达512兆字节)，hash(哈希),list(列表)，set(集合,每个集合中元素数量可达40亿个),zset(有序集合)
   ————————————————————————————————————————————————————————————————————————————

		1、问：什么是消息队列？

		　  答：是一个消息的链表，是一个异步处理的数据处理引擎。

		2、问：有什么好处？

		答：不仅能够提高系统的负荷，还能够改善因网络阻塞导致的数据缺失。

		3、问：用途有哪些？

		答：邮件发送、手机短信发送，数据表单提交、图片生成、视频转换、日志储存等。

		4、问：有哪些软件？

		答：ZeroMQ、Posix、SquirrelMQ、Redis、QDBM、Tokyo Tyrant、HTTPSQS等（linux平台下）。

		5、问：怎么实现？

		答：顾名思义，先入队，后出队；先把数据丢到消息队列（入队），后根据相应的key来获取数据（出队）。

		6、问：Redis可以做消息队列？

		答：首先，redis设计用来做缓存的，但是由于它自身的某种特性使得它可以用来做消息队列，它有几个阻塞式的API可以使用，正是这些阻塞式的API让其有能力做消息队列；另外，做消息队列的其他特性例如FIFO（先入先出）也很容易实现，只需要一个list对象从头取数据，从尾部塞数据即可；redis能做消息队列还得益于其list对象blpop brpop接口以及Pub/Sub（发布/订阅）的某些接口，它们都是阻塞版的，所以可以用来做消息队列。
    */

 ?>