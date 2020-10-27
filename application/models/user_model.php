<?php

class user_model extends CI_Model
{
    var $user_tb = "user_tb";

    public function logged_in()
    {
        return $this->session->userdata('id_user');
    }


    //fungsi check login
    public function check_login($data){
        $username = $data['username'];
        $password = $data['password'];		

        $cek = $this->db->get_where($this->user_tb,array('username'=>$username))->num_rows();
        $result = $this->db->get_where($this->user_tb,array('username'=>$username))->result();

        if ($cek != 0){

            $pass_hash = $result[0]->password;

            if (password_verify($password,$pass_hash)){
					
                        $hakAkses = $result[0]->id_user;
                        $session['id_user'] = $result[0]->id_user;
                        $session['nama_lengkap'] = $result[0]->nama_lengkap;
                        $session['role'] = $result[0]->role;
                        $this->session->set_userdata($session);
                        redirect('dashboard');

                } else{

                    $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
                    redirect('user');
                }

        } else{
            $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
            redirect('user');
        }
    }

}