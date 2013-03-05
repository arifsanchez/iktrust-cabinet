<?php
/**
* Simple Menu Helper for CakePHP
* 
* Conventient to use when switching css classes to the currently active url.
* I wrote this class to be used with the bootstrap library.
*
* Usage:
* In your controller include the helper
* class AppController extends Controller{
*     public $helpers = array('Menu');
* }
* 
* Anywhere in your view create a menu array
*
* $menu = array(
*    'options'=>array('class'=>'nav'),
*    'items'=>
*    array(
*        array('title'=>'Home', 'url'=> array('controller'=>'index', 'action'=>'home')),
*        array('title'=>'Users', 'url'=> array('controller'=>'users', 'action'=>'index'), 'items'=>
*            array(
*                array('title'=> 'Login', 'url'=>array('controller'=>'users', 'action'=>'login')),
*            )
*        ),
*    )
* );
*
* Then render it
* print $this->Menu->render($menu);
*
* @author  Aris Karageorgos <aris@deepspacehosting.com>
* @version 1.0
* @link    http://deepspacehosting.com
* @license MIT License (http://www.opensource.org/licenses/mit-license.php)
*
*/
App::uses('AppHelper', 'View/Helper');
/**
*@property HtmlHelper $Html
*/
class MenuHelper extends AppHelper{
    public $helpers = array('Html');
    public $menu = array();
   
    /**
     * Adds an item to the menu array.
     * @param array $item Item to be added to the menu
     */
    public function addItem($item){
        $this->menu['items'][] = $item;
    }
   
    /**
     * Adds items to the $menu array
     * @param array $items Items to be added to the menu
     * @return void
     */
    public function addItems($items){
        foreach($items as $item){
            $this->addItem($item);
        }
    }
   
    /**
     * This methods recursively generates the menu
     * @param type $menu array of nested items
     * @param boolean $merge whether to merge this input with $this->menu
     * @return string nested list elements
     */
    public function render($menu = array(), $merge = true){
        if($merge){
            $menu = array_merge($menu, $this->menu);
        }
        return $this->Html->tag('ul', $this->buildItems($menu['items']), $menu['options']);
    }
    /**
     * Render list items within each recursive list
     * @param array $items list items to be placed inside the list
     * @return string list items
     */
    public function buildItems($items){
        $list_items = $li = '';
        foreach($items as $item){
            /* Default Access is true */
            if(!isset($item['access'])){
                $item['access'] = true;
            }
            if($item['access'] === false){
                continue;
            }
            if(!isset($item['options'])){
                $item['options'] = array();
            }
            /* This is needed for nav headers */
            $url = isset($item['url']) ? $this->url($item['url']) : null;
           
            /* Check for if we should add the active class */
            $active = $this->request->here == $url? 'active': null;
            if(isset($item['options']['class']) && !empty($active)){
                $item['options']['class'] .= " {$active}";
            }
            elseif(!empty($active)){
                $item['options']['class'] = $active;
            }
            $options = $item['options'];
           
            if(isset($item['items']) && is_array($item['items'])){
                /* Recursive call within the current item */
                if($item['access'] === true){
                    if(isset($item['url'])){
                        $li = $this->Html->tag('li', $this->Html->link($item['title'],
                            $item['url']).$this->render($item), $options);
                    }
                    else{
                        $li = $this->Html->tag('li', $item['title'].$this->render($item), $options);                       
                    }
                }
            }
            elseif($item['access'] === true){
                if(isset($item['url'])){
                    $li = $this->Html->tag('li', $this->Html->link($item['title'],
                            $item['url']), $options);
                }
                else{
                    $li = $this->Html->tag('li', $item['title'], $options);                   
                }
            }
            $list_items .= $li;           
        }
        return $list_items;
    }
}
?>