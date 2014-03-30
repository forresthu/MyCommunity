<?php
/**
 * Created by PhpStorm.
 * User: forresthu
 * Date: 30/03/14
 * Time: 3:25 PM
 */

class DatabaseCommand extends CConsoleCommand
{

    public function actionSetup($args){
        $connection=Yii::app()->db;
        $command=$connection->createCommand("select * from web_answer");
        $dr=$command->query();
        foreach($dr as $row) {
           echo json_encode($row);;
        }
    }

}