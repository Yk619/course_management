<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow registration and logout without being logged in
        $this->Auth->allow('register', 'logout');
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function register() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been created'));
                return $this->redirect(array('action' => 'login'));
            }
            $this->Session->setFlash(__('Unable to add the user.'));
        }
    }

    public function dashboard() {
        // Authenticated user area
    }
}
