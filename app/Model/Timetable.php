<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

// app/Controller/TimetablesController.php
class TimetablesController extends AppController {
    public $helpers = ['Html','Form'];

    public function add($courseId=null) {
        if ($this->request->is('post')) {
            $this->Timetable->create();
            if ($this->Timetable->save($this->request->data)) {
                $this->Session->setFlash('Timetable slot added');
                return $this->redirect(['controller'=>'courses','action'=>'index']);
            }
        }
        $courses = $this->Timetable->Course->find('list');
        $this->set(compact('courses','courseId'));
    }
}
