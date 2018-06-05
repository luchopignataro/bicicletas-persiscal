<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bicicletas Controller
 *
 * @property \App\Model\Table\BicicletasTable $Bicicletas
 *
 * @method \App\Model\Entity\Bicicleta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BicicletasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $bicicletas = $this->paginate($this->Bicicletas);

        $this->set(compact('bicicletas'));
    }

    /**
     * View method
     *
     * @param string|null $id Bicicleta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bicicleta = $this->Bicicletas->get($id, [
            'contain' => []
        ]);

        $this->set('bicicleta', $bicicleta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bicicleta = $this->Bicicletas->newEntity();
        if ($this->request->is('post')) {
            $bicicleta = $this->Bicicletas->patchEntity($bicicleta, $this->request->getData());
            if ($this->Bicicletas->save($bicicleta)) {
                $this->Flash->success(__('La bicicleta se agregó correctamente'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La bicicleta no pudo agregarse, vuelve a intentarlo.'));
        }
        $this->set(compact('bicicleta'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bicicleta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bicicleta = $this->Bicicletas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bicicleta = $this->Bicicletas->patchEntity($bicicleta, $this->request->getData());
            if ($this->Bicicletas->save($bicicleta)) {
                $this->Flash->success(__('La bicicleta se guardó correctamente'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La bicicleta no pudo guardarse, vuelve a intentarlo.'));
        }
        $this->set(compact('bicicleta'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bicicleta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bicicleta = $this->Bicicletas->get($id);

        if ($this->Bicicletas->delete($bicicleta)) {
            $path = new \Proffer\Lib\ProfferPath($this->Bicicletas, $bicicleta, 'foto', $this->Bicicletas->behaviors()->Proffer->config('foto'));
            $path->deleteFiles($path->getFolder(), true);
            $this->Flash->success(__('La bicicleta se eliminó correctamente'));
        } else {
            $this->Flash->error(__('La bicicleta no pudo eliminarse, vuelve a intentarlo'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
