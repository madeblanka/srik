<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model
{
    private $_table = "tb_penilaian";

    public $id_penilaian;
    public $id_banjar;
    public $pu1;
    public $pu2;
    public $pu3;
    public $pu4;
    public $pu5;
    public $pe1;
    public $pe2;
    public $pe3;
    public $pe4;

    public function rules()
    {
        return [
            ['field' => 'id_penilaian',
            'label' => 'id_penilaian',
            'rules' => 'required'],

            ['field' => 'id_banjar',
            'label' => 'id_banjar',
            'rules' => 'required'],

            ['field' => 'pu1',
            'label' => 'pu1',
            'rules' => 'required'],

            ['field' => 'pu2',
            'label' => 'pu2',
            'rules' => 'required'],

            ['field' => 'pu3',
            'label' => 'pu3',
            'rules' => 'required'],

            ['field' => 'pu4',
            'label' => 'pu4',
            'rules' => 'required'],

            ['field' => 'pu5',
            'label' => 'pu5',
            'rules' => 'required'],

            ['field' => 'pe1',
            'label' => 'pe1',
            'rules' => 'required'],

            ['field' => 'pe2',
            'label' => 'pe2',
            'rules' => 'required'],

            ['field' => 'pe3',
            'label' => 'pe3',
            'rules' => 'required'],

            ['field' => 'pe4',
            'label' => 'pe4',
            'rules' => 'required'],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_penilaian" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_penilaian = uniqid();
        $this->id_banjar = $post["id_banjar"];
        $this->pu1 = $post["pu1"];
        $this->pu1 = $post["pu2"];
        $this->pu1 = $post["pu3"];
        $this->pu1 = $post["pu4"];
        $this->pu1 = $post["pu5"];
        $this->pu1 = $post["pe1"];
        $this->pu1 = $post["pe2"];
        $this->pu1 = $post["pe3"];
        $this->pu1 = $post["pe4"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_banjar = $post["id_banjar"];
        $this->pu1 = $post["pu1"];
        $this->pu1 = $post["pu2"];
        $this->pu1 = $post["pu3"];
        $this->pu1 = $post["pu4"];
        $this->pu1 = $post["pu5"];
        $this->pu1 = $post["pe1"];
        $this->pu1 = $post["pe2"];
        $this->pu1 = $post["pe3"];
        $this->pu1 = $post["pe4"];
        return $this->db->update($this->_table, $this, array('id_penilaian' => $post['id_penilaian']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_penilaian" => $id_penilaian));
    }
}