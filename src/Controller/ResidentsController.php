<?php

namespace App\Controller;

class ResidentsController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }

    public function index()
    {
        $residents = $this->Paginator->paginate($this->Residents->find());
        $this->set(compact('residents'));
    }


    public function add()
    {
        $resident = $this->Residents->newEntity();
        if ($this->request->is('post')) {
            $resident = $this->Residents->patchEntity($resident, $this->request->getData());

            $resident->res_id = 1;

            if ($this->Residents->save($resident)) {
                $this->Flash->success(__('Resident has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add Resident.'));
        }
        $this->set('resident', $resident);
    }

    public function edit($slug)
    {
        $resident = $this->Residents->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Residents->patchEntity($resident, $this->request->getData());
            if ($this->Residents->save($resident)) {
                $this->Flash->success(__('Resident has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update Resident.'));
        }
        $this->set('resident', $resident);
    }

    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resident = $this->Residents->findBySlug($slug)->firstOrFail();
        if ($this->Residents->delete($resident)) {
            $this->Flash->success(__('The Resident has been deleted.'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>
