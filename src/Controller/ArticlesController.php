<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

class ArticlesController extends AppController
{
    public $paginate = [
        'limit' => 2,
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
        
        if ($this->request->is('post')) {
            $searchwd = $this->request->data['searchwd'];
            $this->request->session()->write('searchwd', $searchwd);
        }

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

    public function detail()
    {
        $this->viewBuilder()->autoLayout(false);
        $id = $this->request->query['id'];
        $entity = $this->Articles->get($id);
        $this->set('entity', $entity);
    } 

    public function edit()
    {
        $this->viewBuilder()->autoLayout(false);
        $id = $this->request->query['id'];
        $entity = $this->Articles->get($id);
        $this->set('entity', $entity);
    }

    public function delete()
    {
        $id = $this->request->query['id'];
        $entity = $this->Articles->get($id);
        $this->set('entity', $entity);
        $this->Articles->delete($entity);
        return $this->redirect(['action'=>'index']);
    }
    
    public function add()
    {
        $this->viewBuilder()->autoLayout(false);
        $entity = $this->Articles->newEntity();

        if ($this->request->is('post')) {
            $data = $this->request->data['Articles'];
            $entity = $this->Articles->newEntity($data);
            $entity->date = date("Y-m-d");
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
        if ($this->request->is('post')) {
            $data = $this->request->data['Articles'];
            $entity = $this->Articles->get($data['id']);
            $this->Articles->patchEntity($entity, $data);
            $this->Articles->save($entity);
        }
        return $this->redirect(['action'=>'index']);
    }
}
