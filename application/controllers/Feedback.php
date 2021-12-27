<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

  public function kirimFeedback(){
    $data=[
      'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap')),
      'isi_feedback' => htmlspecialchars($this->input->post('isi_feedback')),
      'status_feedback' => 0
    ];
    $this->db->insert('feedback', $data);
    $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span>
                            <b> Success - </b> Bukti Pembayaran Berhasil Terkirim Silahkan Tunggu informasi Verifikasi!</span>
                        </div>');
    redirect('Welcome/kontak');
    


  }

  public function hapusCalonPendaki(){

    
  }

}

/* End of file Feedback.php */

?>