<?php
/**
 * @link http://www.yee-soft.com/
 * @copyright Copyright (c) 2015 Taras Makitra
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace yeesoft\post;

use Yii;

/**
 * Post Module For Yee CMS
 *
 * @author Taras Makitra <makitrataras@gmail.com>
 */
class PostModule extends \yii\base\Module
{
    /**
     * Version number of the module.
     */
    const VERSION = '0.1-a';

    /**
     * Table aliases
     *
     * @var string
     */
    public $post_table = '{{%post}}';
    public $controllerNamespace = 'yeesoft\post\controllers';

    
    public $viewList;
    public $layoutsList;

    public function init()
    {


        /**
         * Default views and layouts
         * Add more views and layouts in your main config file by calling the module
         *
         *   Example: 
         *
         *   'post' => [
         *       'class' => 'yeesoft\post\PostModule',
         *       'viewList' => [
         *           'post' => 'View Label 1',
         *           'post_test' => 'View Label 2',
         *       ],
         *       'layoutsList' => [
         *           'main' => 'Layout Label 1',
         *           'dark_layout' => 'Layout Label 2',
         *       ],
         *   ],
         */
        
        if(empty($this->viewList)){

            $this->viewList = [
                'post' => Yii::t('yee', 'Post view')
            ];
        }

        if(empty($this->layoutsList)){

            $this->viewList = [
                'main' => Yii::t('yee', 'Main layout')
            ];
        }

        parent::init();
    }

}