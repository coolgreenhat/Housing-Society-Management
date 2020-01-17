<?php

namespace App\Controller;

class ComplaintsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $complaints = $this->Paginator->paginate($this->Complaints->find());
        $this->set(compact('complaints'));
    }

    public function add()
    {
        $complaint = $this->Complaints->newEntity();
        if ($this->request->is('post')) {
            $complaint = $this->Complaints->patchEntity($complaint, $this->request->getData());

            $complaint->id = 4;
            if ($this->Complaints->save($complaint)) {
                $this->Flash->success(__('Complaint has been Added.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add Complaint.'));
        }
        $this->set('complaint', $complaint);
    }

    public function edit($slug)
    {
        $complaint = $this->Complaints->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Complaints->patchEntity($complaint, $this->request->getData());
            if ($this->Complaints->save($complaint)) {
                $this->Flash->success(__('Your Complaint has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your Complaint.'));
        }
        $this->set('complaint', $complaint);
    }

    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);
        $complaint = $this->Complaints->findBySlug($slug)->firstOrFail();
        if ($this->Complaints->delete($complaint)) {
            $this->Flash->success(__('The Complaint has been deleted.'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>
