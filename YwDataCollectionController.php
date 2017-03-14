<?php

namespace console\controllers;

use common\models\CjObjectFieldConfig;
use Yii;
use yii\console\Controller;
use common\models\YwDataCollection;
use yii\db\Exception;

class YwDataCollectionController extends Controller{
    
    /**
     * 批量处理资讯文章，抓取其中的图片作为头图存储（执行一次）
     */
    public function actionGenerateHeadImg(){
        $list = YwDataCollection::find()->all();
        if(empty($list)) return;

        foreach($list as $k=>$v){
            if(empty($v->content)){
                continue;
            }
            //取内容中图片的src，多张，取第一张。
            if(preg_match("/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)(\'|\")(.*?)\s*>/i", $v->content, $match)){
                if(!empty($match[2])){
                    //判断图片已在自己的网站
                    if(strpos($match[2], '/file/ueditor') === 0){
                        $v->head_img = $match[2];
                        $v->save(false);
                    }
                }
            }
        }
    }

    /**
     * 处理历史数据 <br>
     * 新增 适用端（APP&PC&M）、文章类型、是否置顶字段后，需要给历史数据设置默认值
     * 其中：
     *      （1）适用端（APP&PC&M）：全选
     *      （2）文章类型：          通用
     *      （3）是否置顶：          否
     * @date 2017-03-13
     * @author gaoqing
     */
    public function actionHandleHistory(){
        $affectNum = 0;
        $adaptors = '';

        $adaptorArr = CjObjectFieldConfig::find()->select('value')->where(['group_name' => 'common_site', 'is_show' => 1])->asArray()->all();
        foreach ($adaptorArr as $adaptor){
            $adaptors .= $adaptor['value'] . ',';
        }

        $articleType = CjObjectFieldConfig::find()->select('value')->where(['group_name' => 'article_type', 'name' => 'common', 'is_show' => 1])->scalar();
        $isTop = CjObjectFieldConfig::find()->select('value')->where(['group_name' => 'index_top', 'name' => 'sticky', 'is_show' => 1])->scalar();

        try{
            $db = Yii::$app->db;
            $affectNum = $db->createCommand()->update(YwDataCollection::tableName(), [
                'apply' => trim($adaptors, ','),
                'class' => $articleType,
                'index_top' => $isTop,
            ])->execute();
        }catch (Exception $e){
            echo $e->getMessage();
        }
        echo "执行完成，共更新了：" . $affectNum . " 条数据！" . PHP_EOL;
    }

}