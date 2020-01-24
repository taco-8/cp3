<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

class ArticlesController extends AppController
{
    public $paginate = [
        'limit' => 6,
    ];

    public $helpers = [
        'Paginator' => ['templates' => 'paginator-templates']
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $this->viewBuilder()->autoLayout(false);

        $adminflg = $this->request->session()->read('adminflg');
        $this->set('adminflg', $adminflg);

        $searchwd = $this->request->session()->read('searchwd');
        if(isset($searchwd)){
            $data = $this->paginate($this->Articles->find()
            ->where(['title like'=>'%'.$searchwd.'%'])
            ->orWhere(['content like'=>'%'.$searchwd.'%'])
            ->order(['Articles.id'=>'desc']));
            $this->set('searchwd', $searchwd);
        }else{
            //$data = $this->Articles->find('all')->order(['Articles.id'=>'desc']);
            $data = $this->paginate($this->Articles->find('all')->order(['Articles.id'=>'desc']));
            $this->set('searchwd', '');
        }

        $this->set('data', $data);
    }

    public function logout()
    {
        $this->request->session()->write('adminflg', null);
        return $this->redirect(['action'=>'index']);
    }

    public function search()
    {
        $searchwd = $this->request->query['q'];
        $this->request->session()->write('searchwd', $searchwd);

        return $this->redirect(['action'=>'index']);
    }

    public function detail($id)
    {
        $this->viewBuilder()->autoLayout(false);
        // $id = $this->request->query['id'];
        $entity = $this->Articles->get($id);
        $this->set('entity', $entity);
    } 

    public function edit()
    {
        $adminflg = $this->request->session()->read('adminflg');
        if($adminflg!='u1'){
            return $this->redirect(['action'=>'index']);
        }

        $this->viewBuilder()->autoLayout(false);
        $id = $this->request->query['id'];
        $entity = $this->Articles->get($id);
        $this->set('entity', $entity);
    }

    public function delete()
    {
        $adminflg = $this->request->session()->read('adminflg');
        if($adminflg!='u1'){
            return $this->redirect(['action'=>'index']);
        }

        $id = $this->request->query['id'];
        $entity = $this->Articles->get($id);
        $this->set('entity', $entity);
        $this->Articles->delete($entity);
        return $this->redirect(['action'=>'index']);
    }
    
    public function add()
    {
        $adminflg = $this->request->session()->read('adminflg');
        if($adminflg!='u1'){
            return $this->redirect(['action'=>'index']);
        }

        $this->viewBuilder()->autoLayout(false);
        $entity = $this->Articles->newEntity();

        if ($this->request->is('post')) {
            $data = $this->request->data['Articles'];
            $entity = $this->Articles->newEntity($data);
            $entity->date = date("Y-m-d");

            //新規登録時には改行コード<br />を追加
            $str1 = $entity->content;
            $order1   = array("\r\n", "\n", "\r");
            $replace1 = '<br />';
            $str2 = str_replace($order1, $replace1, $str1);
            $order2   = array("<br />");
            $replace2 = '<br />'."\n";
            $entity->content = str_replace($order2, $replace2, $str2);

            if ($this->Articles->save($entity)) {
                $this->request->session()->write('searchwd', null);
                return $this->redirect(['action'=>'index']);
            } else {
                //validationエラーが発生した場合も入力欄に入力内容を反映させる
                $entity->errtitle = $data['title'];
                $entity->errsummary = $data['summary'];
                $entity->errcontent = $data['content'];
            }
        }

        $this->set('entity', $entity);
    }

    public function update()
    {
        $adminflg = $this->request->session()->read('adminflg');
        if($adminflg!='u1'){
            return $this->redirect(['action'=>'index']);
        }

        if ($this->request->is('post')) {
            $data = $this->request->data['Articles'];
            $entity = $this->Articles->get($data['id']);
            $this->Articles->patchEntity($entity, $data);
            $this->Articles->save($entity);
            return $this->redirect(['controller'=>'Articles', 'action'=>'edit', '?'=>array('id' => $data['id'])]);
        }
        //return $this->redirect(['action'=>'index']);
    }
}
