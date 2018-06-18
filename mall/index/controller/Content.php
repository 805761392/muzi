<?php
namespace app\index\controller;
class Content extends Base
{

    public function article()
    {
        $this ->setSidebar('article');
        return $this->fetch();  //文章
    }

    public function topicType()
    {
        $this ->setSidebar('topicType');
        return $this->fetch();  //专题分类
    }

    public function topic()
    {
        $this ->setSidebar('topic');
        return $this->fetch();  //专题
    }

    public function video()
    {
        $this ->setSidebar('video');
        return $this->fetch();  //视频
    }

    public function store()
    {
        $this ->setSidebar('store');
        return $this->fetch();  //门店
    }
}
