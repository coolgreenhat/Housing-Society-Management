<?php

namespace App\Controller;

class VisitorController extends AppController
{

    public function initialize()
    {
    parent::initialize();
    $this->loadComponent('Paginator');
    $this->loadComponent('Flash'); // Include the FlashComponent
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $visitors = $this->Paginator->paginate($this->Visitor->find());
        $this->set(compact('visitors'));
    }

    public function add()
    {
        $visitor = $this->Visitor->newEntity();
        if ($this->request->is('post')) {
            $visitor = $this->Visitor->patchEntity($visitor, $this->request->getData());

            $visitor->id = 4;
            if ($this->Visitor->save($visitor)) {
                $this->Flash->success(__('Visitor has been Added.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add Visitor.'));
        }
        $this->set('visitor', $visitor);
    }

    public function edit($slug)
    {
        $visitor = $this->Visitor->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Visitor->patchEntity($visitor, $this->request->getData());
            if ($this->Visitor->save($visitor)) {
                $this->Flash->success(__('Visitor has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update Visitor.'));
        }
        $this->set('visitor', $visitor);
    }

    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visitor = $this->Visitor->findBySlug($slug)->firstOrFail();
        if ($this->Visitor->delete($visitor)) {
            $this->Flash->success(__('The Visitor has been deleted.'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>
