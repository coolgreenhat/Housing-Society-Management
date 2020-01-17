<?php

namespace App\Controller;

class EventsController extends AppController
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
        $events = $this->Paginator->paginate($this->Events->find());
        $this->set(compact('events'));
    }

    public function add()
    {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData());

            $event->id = 4;
            if ($this->Events->save($event)) {
                $this->Flash->success(__('Event has been Added.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add Event.'));
        }
        $this->set('event', $event);
    }

    public function edit($slug)
    {
        $event = $this->Events->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('Your Event has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your Event.'));
        }
        $this->set('event', $event);
    }

    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->findBySlug($slug)->firstOrFail();
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The Event has been deleted.'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>
