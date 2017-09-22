<?php
/*
 *des:openstatck各模块接口列表
 *by：pcf
 * date:2017-09-21
 * */
namespace Conf;

class API
{
    /**
     *认证模块 v3版本
     *
     */
    const AUTH_001 = '/v3/auth/tokens';

    /*
     * 对象存储模块 v1版本
     *
     * */
    const OBJECT_001 = '/v1/{account}';
}
?>