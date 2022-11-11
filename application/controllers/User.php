<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
  }

  //load tampilan awal
  public function index()
  {
    $this->load->view('Autentifikasi/tampilan_awal');
  }

  //load tampilan dashboard
  public function index_admin()
  {
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {
      $data['semua'] = $this->M_smart->semua_data();

      $i = 0;
      $data['semua']['data_alternatif_dan_bobot'] = [];
      foreach ($data['semua']['data_alternatif'] as $key => $rowDA) {
        foreach ($data['semua']['bobot_kriteria'] as $rowBK) {
          foreach ($data['semua']['kriteria'] as $rowK) {
            if ($rowDA['id'] == $rowBK['id_alternatif']) {
              if ($rowK['id'] == $rowBK['id_kriteria']) {
                $data['semua']['data_alternatif_dan_bobot'][$key]['id'] = $rowDA['id'];
                $data['semua']['data_alternatif_dan_bobot'][$key]['alternatif'] = $rowDA['alternatif'];
                $data['semua']['data_alternatif_dan_bobot'][$key]['bobot_' . $rowK['kriteria']] = $rowBK['bobot'];
                $data['semua']['data_alternatif_dan_bobot'][$key]['gambar'] = $rowDA['gambar'];
              }
            }
          }
        }
        $i++;
      }

      $i = 0;
      $kriteria_ada = [];
      foreach ($data['semua']['kriteria'] as $key => $value) {
        $kriteria_ada[$i] = 'bobot_' . $value['kriteria'];
        $i++;
      }

      // print_r($data['semua']['data_alternatif_dan_bobot']);

      for ($i = 0; $i < count($data['semua']['data_alternatif_dan_bobot']); $i++) {
        foreach ($kriteria_ada as $key => $value) {
          if (isset($data['semua']['data_alternatif_dan_bobot'][$i][$value])) {
            $data['semua']['data_alternatif_dan_bobot'][$i][$value] = $data['semua']['data_alternatif_dan_bobot'][$i][$value];
          } else {
            $data['semua']['data_alternatif_dan_bobot'][$i][$value] = 0;
          }
        }
      }

      // print_r($data['semua']['data_alternatif_dan_bobot']);

      $data['title'] = "Dashboard";
      $data['topbar_detail'] = $this->M_smart->getDataRoleUser($this->session->userdata('nama'));
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/index_admin', $data);
      $this->load->view('templates/footer');
    }
  }

  public function index_input_bobot_kriteria()
  {
    $data['title'] = "Halaman Input Bobot";
    $data['semua'] = $this->M_smart->semua_data();;
    $this->load->view('templates/header', $data);
    $this->load->view('user/index_input_bobot_kriteria', $data);
    $this->load->view('templates/footer');
  }

  public function input_bobot_kriteria()
  {
    $var = $this->input->post();
    $j = 0;
    $arr = [];
    foreach ($var as  $key => $value) {
      $arr[$j] = [$key, $value];
      $j++;
    }

    $data['bobot'] = [];
    $i = 0;
    foreach ($arr as $rowARR) {
      $data['bobot'] = ['bobot' => $rowARR[1]];
      $this->db->where('kriteria', $rowARR[0]);
      $this->db->update('tabel_kriteria', $data['bobot']);
      $i++;
    }

    $this->hasil_rekomendasi();
  }

  public function hasil_rekomendasi()
  {
    $data['title'] = "Halaman Hasil Rekomendasi";
    $data['smart'] = $this->M_smart->smart();
    $this->load->view('templates/header', $data);
    $this->load->view('user/index_hasil_rekomendasi', $data);
    $this->load->view('templates/footer');
  }

  public function lihat_lokasi()
  {
    $data['lat'] = $this->input->get('lat');
    $data['lng'] = $this->input->get('lng');
    $data['title'] = "Halaman Lihat Lokasi";
    $data['semua'] = $this->M_smart->semua_data();
    $this->load->view('templates/header', $data);
    $this->load->view('user/index_lihat_lokasi', $data);
    $this->load->view('templates/footer');
  }

  public function rincian_lokasi($id)
  {
    $data['title'] = "Halaman Hasil Rekomendasi";
    $data['semua'] = $this->M_smart->semua_data();
    $data['detail'] = $this->M_smart->detail_data('tabel_data_alternatif', 'id', $id);

    $i = 0;
    $data['data_alternatif_dan_bobot'] = [];
    foreach ($data['semua']['data_alternatif'] as $key => $rowDA) {
      foreach ($data['semua']['bobot_kriteria'] as $rowBK) {
        foreach ($data['semua']['kriteria'] as $rowK) {
          if ($rowDA['id'] == $rowBK['id_alternatif']) {
            if ($rowK['id'] == $rowBK['id_kriteria']) {
              if ($data['detail']['id'] == $rowDA['id']) {
                $data['data_alternatif_dan_bobot']['id'] = $rowDA['id'];
                $data['data_alternatif_dan_bobot']['alternatif'] = $rowDA['alternatif'];
                $data['data_alternatif_dan_bobot']['alamat'] = $rowDA['alamat'];
                $data['data_alternatif_dan_bobot']['bobot_' . $rowK['kriteria']] = $rowBK['bobot'];
                $data['data_alternatif_dan_bobot']['gambar'] = $rowDA['gambar'];
              }
            }
          }
        }
      }
      $i++;
    }

    // print_r($data['data_alternatif_dan_bobot']);
    // die;
    $this->load->view('templates/header', $data);
    $this->load->view('user/index_rincian_lokasi', $data);
    $this->load->view('templates/footer');
  }

  public function index_tambah_data($key)
  {
    if ($key == 'alternatif') {
      $data['title'] = "Halaman Tambah Data Alternatif";
      $data['semua'] = $this->M_smart->semua_data();
      $data['topbar_detail'] = $this->M_smart->getDataRoleUser($this->session->userdata('nama'));
      $this->load->view('templates/topbar', $data);
      $this->load->view('templates/header', $data);
      $this->load->view('user/index_tambah_alternatif', $data);
      $this->load->view('templates/footer');
    }
  }

  public function tambah_data($key)
  {
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {
      if ($key == 'alternatif') {

        //jika ada gambar
        $gambar = $_FILES['gambar'];

        //jika tidak ada gambar
        if ($gambar != '') {
          $config['upload_path'] = './assets/img/';
          $config['allowed_types'] = 'jpg|png|jpeg';

          $this->load->library('upload', $config);
          $this->upload->do_upload('gambar');
          $gambar = $this->upload->data('file_name');
        }

        //set data tambah alternatif
        $data['nama_tabel'] = 'tabel_data_alternatif';
        $data['tambah_alternatif'] = [
          'alternatif' =>   $this->input->post('alternatif'),
          'alamat' =>   $this->input->post('alamat'),
          'lat' => $this->input->post('lat'),
          'lng' => $this->input->post('lng'),
          'gambar' => $gambar
        ];
        $duplikat = $this->M_smart->anti_duplikasi($data['nama_tabel'], 'alternatif', $data['tambah_alternatif']['alternatif']);
        if ($duplikat > 0) {
          $this->session->set_flashdata('pesanGagalTambah', 'Gagal');
          redirect(base_url('User/index_admin'));
        } else {
          $this->M_smart->tambah_data($data);
        }

        //set data tambah bobot kriteria
        $data['nama_tabel'] = 'tabel_bobot_kriteria';
        $data['tambah_bobot_kriteria'] = $this->input->post();

        //menghilangkan index yang tidak perlu
        unset($data['tambah_bobot_kriteria']['alternatif'], $data['tambah_bobot_kriteria']['alamat'], $data['tambah_bobot_kriteria']['lat'], $data['tambah_bobot_kriteria']['lng'], $data['tambah_bobot_kriteria']['gambar']);

        //menambahkan 'id_kriteria', 'is_alternatif' & 'bobot' 
        $i = 0;
        foreach ($data['tambah_bobot_kriteria'] as $key => $value) {
          $data['tambah_bobot_kriteria_fix'][$i]['id_kriteria'] = $this->M_smart->detail_data('tabel_kriteria', 'kriteria', $key)['id'];
          $data['tambah_bobot_kriteria_fix'][$i]['id_alternatif'] = $this->M_smart->detail_data('tabel_data_alternatif', 'alternatif', $this->input->post('alternatif'))['id'];
          $data['tambah_bobot_kriteria_fix'][$i]['bobot'] = $value;
          $i++;
        }

        $this->M_smart->tambah_data($data);

        $this->session->set_flashdata('pesan', 'Berhasil');
        redirect(base_url('User/index_admin'));
      }

      if ($key == 'kriteria') {
        $data['nama_tabel'] = 'tabel_kriteria';
        $data['tambah_kriteria'] = [
          'kriteria' => $this->input->post('kriteria'),
          'cMAX' => $this->input->post('cMAX'),
          'cMIN' => $this->input->post('cMIN'),
          'utility' => $this->input->post('utility')
        ];

        $duplikat = $this->M_smart->anti_duplikasi($data['nama_tabel'], 'kriteria', $data['tambah_kriteria']['kriteria']);
        if ($duplikat > 0) {
          $this->session->set_flashdata('pesanGagalTambah', 'Gagal');
          redirect(base_url('User/index_atur_data_kriteria/' . $key));
        } else {
          $this->M_smart->tambah_data($data);
          $this->session->set_flashdata('pesan', 'Berhasil');
          redirect(base_url('User/index_atur_data_kriteria/' . $key));
        }
      }
    }
  }

  //load logika hapus data
  public function hapus_data($key, $id)
  {
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {
      if ($key == 'alternatif') {
        $data = [
          'key' => $key,
          'id' => $id
        ];
        $this->M_smart->Hapus_data($data);
        $this->session->set_flashdata('pesan', 'hapus');
        redirect(base_url('user/index_admin'));
      }
      if ($key == 'kriteria') {
        $data = [
          'key' => $key,
          'id' => $id
        ];
        $this->M_smart->Hapus_data($data);
        $this->session->set_flashdata('pesan', 'hapus');
        redirect(base_url('user/index_atur_data_kriteria'));
      }
    }
  }

  //load logika ubah data 
  public function index_ubah_data($key, $id = null)
  {
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {
      $data['key'] = $key;
      $data['title'] = 'Halaman Ubah Data';
      $data['topbar_detail'] = $this->M_smart->getDataRoleUser($this->session->userdata('nama'));
      $data['semua'] = $this->M_smart->semua_data();
      if ($key == 'alternatif') {
        $data['detail_alternatif'] = $this->M_smart->detail_data('tabel_data_alternatif', 'id', $id);
        $i = 0;
        foreach ($data['semua']['bobot_kriteria'] as $rowBK) {
          foreach ($data['semua']['kriteria'] as $rowK) {
            if ($id == $rowBK['id_alternatif']) {
              if ($rowK['id'] == $rowBK['id_kriteria']) {
                $data['detail_bobot_kriteria']['bobot_' . $rowK['kriteria']] = $rowBK['bobot'];
              }
            }
          }
          $i++;
        }

        $i = 0;
        $kriteria_ada = [];
        foreach ($data['semua']['kriteria'] as $key => $value) {
          $kriteria_ada[$i] = 'bobot_' . $value['kriteria'];
          $i++;
        }

        for ($i = 0; $i < 1; $i++) {
          foreach ($kriteria_ada as $key => $value) {
            if (isset($data['detail_bobot_kriteria'][$value])) {
              $data['detail_bobot_kriteria'][$value] = $data['detail_bobot_kriteria'][$value];
            } else {
              $data['detail_bobot_kriteria'][$value] = 0;
            }
          }
        }
        // print_r($data['detail_bobot_kriteria']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('user/index_ubah_data_alternatif', $data);
        $this->load->view('templates/footer');
      }
    }
  }

  public function index_atur_data_kriteria()
  {
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {
      $data['title'] = 'Halaman Ubah Data';
      $data['topbar_detail'] = $this->M_smart->getDataRoleUser($this->session->userdata('nama'));
      $data['semua'] = $this->M_smart->semua_data();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('user/index_atur_data_kriteria', $data);
      $this->load->view('templates/footer');
    }
  }

  public function ubah_data_alternatif($key, $id)
  {
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {
      if ($key == 'alternatif') {
        $gambar = $_FILES['gambar'];

        if ($gambar['error'] != 4) {
          $config['upload_path'] = './assets/img/';
          $config['allowed_types'] = 'jpg|png|jpeg';

          $this->load->library('upload', $config);
          $this->upload->do_upload('gambar');
          $gambar = $this->upload->data('file_name');
        } else if ($gambar['error'] == 4) {
          $gambar = $this->input->post('gambar');
        }

        $data['nama_tabel'] = 'tabel_data_alternatif';
        $data['id'] = $id;
        $data['ubah_alternatif'] = [
          'alternatif' =>   $this->input->post('alternatif'),
          'alamat' =>   $this->input->post('alamat'),
          'lat' => $this->input->post('lat'),
          'lng' => $this->input->post('lng'),
          'gambar' => $gambar
        ];
        $this->M_smart->ubah_data($data);
        // print_r($data['ubah_kriteria']);
        // die;

        $data['nama_tabel'] = 'tabel_bobot_kriteria';
        $data['ubah_bobot_kriteria'] = $this->input->post();

        unset($data['ubah_bobot_kriteria']['alternatif'], $data['ubah_bobot_kriteria']['alamat'], $data['ubah_bobot_kriteria']['lat'], $data['ubah_bobot_kriteria']['lng'], $data['ubah_bobot_kriteria']['gambar']);

        $i = 0;
        foreach ($data['ubah_bobot_kriteria'] as $key => $value) {
          $data['ubah_bobot_kriteria_fix'][$i]['id_kriteria'] = $this->M_smart->detail_data('tabel_kriteria', 'kriteria', $key)['id'];
          $data['ubah_bobot_kriteria_fix'][$i]['id_alternatif'] = $this->M_smart->detail_data('tabel_data_alternatif', 'id', $id)['id'];
          $data['ubah_bobot_kriteria_fix'][$i]['bobot'] = $value;
          $i++;
        }

        // print_r($data['ubah_bobot_kriteria_fix']);
        // die;

        $this->M_smart->ubah_data($data);

        $this->session->set_flashdata('pesan', 'sukses');
        redirect(base_url('User/index_admin'));
      }
    }
  }
}
