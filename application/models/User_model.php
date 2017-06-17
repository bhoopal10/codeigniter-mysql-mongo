<?php
class User_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        public $first_name;
        public $last_name;
        public $email;

        public function get_entries()
        {
                $query = $this->db->get('users', 10);
                return $query->result();
        }

        public function insert_entry($data)
        {
                $this->first_name  = $data['first_name'];
                $this->last_name     = $data['last_name'];
                $this->email    = $data['email']; // please read the below note

                $this->db->insert('users', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('users', $this, array('id' => $_POST['id']));
        }



}