<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_smart extends CI_Model
{
  //logika ambil semua data  dan user
  public function semua_data()
  {
    return [
      "data_alternatif" => $this->db->get('tabel_data_alternatif')->result_array(),
      // "token" => $this->db->get('tabel_token')->result_array(),
      "user" => $this->db->get('tabel_user')->result_array(),
      "kriteria" => $this->db->get('tabel_kriteria')->result_array(),
      "bobot_kriteria" => $this->db->get('tabel_bobot_kriteria')->result_array()
    ];
  }

  public function anti_duplikasi($tabel, $index, $key)
  {
    $duplikat = false;
    $query = $this->db->get_where($tabel, [$index => $key])->row_array();
    if ($query) {
      $duplikat = true;
    }

    return $duplikat;
  }


  //logika ambil data detail
  public function detail_data($tabel, $index, $key)
  {
    $detail = $this->db->get_where($tabel, [$index => $key])->row_array();
    return $detail;
  }

  //logika hapus data
  public function hapus_data($data)
  {
    if ($data['key'] == 'alternatif') {
      $this->db->where('id', $data['id']);
      $this->db->delete('tabel_data_alternatif');
      $this->db->where('id_alternatif', $data['id']);
      $this->db->delete('tabel_bobot_kriteria');
    }

    if ($data['key'] == 'kriteria') {
      $this->db->where('id', $data['id']);
      $this->db->delete('tabel_kriteria');

      $this->db->where('id_kriteria', $data['id']);
      $this->db->delete('tabel_bobot_kriteria');
    }
  }

  //logika cek login
  public function cekLogin($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  //logika cek login ulang
  public function cekReLogin($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  //logika input data user
  public function inputDataAkunUser($data)
  {
    $duplikasi_email = $this->db->get_where('tabel_user', ['email' => $data['email']])->num_rows();
    if ($duplikasi_email) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Telah digunakan!</div>');
      redirect(base_url('Autentifikasi/index_buat_akun'));
    } else {
      $this->db->insert('tabel_user', $data);
    }
  }

  //logika tamba data
  public function tambah_data($data)
  {
    $semuaData = $this->M_smart->semua_data();

    //aturan
    // if ($data['nama_tabel'] == 'tabel_data_alternatif') {
    //   $this->db->insert($data['nama_tabel'], $data['tambah_alternatif']);
    //   $this->db->where('alternatif', $data['tambah_alternatif']['alternatif']);
    //   $rowAlternatif = $this->db->get($data['nama_tabel'])->row_array();

    // $i = 0;
    // foreach ($this->input->post() as $key => $rowP) {
    //   foreach ($semuaData['kriteria'] as $rowK) {
    //     if ($key == $rowK['kriteria']) {
    //       $data['tambah_bobot'] = [
    //         'id_alternatif' => $rowAlternatif['id'],
    //         'id_kriteria' => $rowK['id']
    //       ];
    //       $this->db->insert('tabel_bobot_kriteria', $data['tambah_bobot']);
    //     }
    //     $i++;
    //   }
    // }
    // }

    //kriteria
    if ($data['nama_tabel'] == 'tabel_kriteria') {
      $this->db->insert($data['nama_tabel'], $data['tambah_kriteria']);
      $temp = $this->db->get_where('tabel_kriteria', ['kriteria' => $data['tambah_kriteria']['kriteria']])->row_array();
      $query = $this->M_smart->semua_data();
      foreach ($query['data_alternatif'] as $key => $value) {
        $dataBK = [
          'id_kriteria' => $temp['id'],
          'id_alternatif' => $value['id'],
          'bobot' => 0
        ];
        // print_r($dataBK);
        // die;
        $this->db->insert('tabel_bobot_kriteria', $dataBK);
      }
    }

    //alternatif
    if ($data['nama_tabel'] == 'tabel_data_alternatif') {
      $this->db->insert($data['nama_tabel'], $data['tambah_alternatif']);
    }

    //tabel_bobot_kriteria
    if ($data['nama_tabel'] == 'tabel_bobot_kriteria') {
      foreach ($data['tambah_bobot_kriteria_fix'] as $key => $value) {
        $this->db->insert($data['nama_tabel'], $value);
      }
      // print_r($data['tambah_bobot_kriteria_fix']);
      // die;
    }
  }

  //logika ubah data akun
  public function ubahDataAkun($data)
  {
    $this->db->where('id', $data['id_user']);
    $this->db->update('tabel_user',  $data = [
      'username' => $data['username'],
      'email' => $data['email'],
      'password' => md5($data['password'])
    ]);
    $this->session->set_userdata(['nama' => $data['username']]);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Data akun berhasil dirubah!</div>');
  }

  //logika ubah data
  public function ubah_data($data)
  {
    //alternatif
    if ($data['nama_tabel'] == 'tabel_data_alternatif') {
      $this->db->where('id', $data['id']);
      $this->db->update('tabel_data_alternatif', $data['ubah_alternatif']);
    }

    // if (isset($data['ubah_bobot_kriteria_fix'])) {
    //   print_r($data['ubah_bobot_kriteria_fix']);
    //   die;
    // }
    if ($data['nama_tabel'] == 'tabel_bobot_kriteria') {
      $semua_data = $this->M_smart->semua_data();

      $i = 0;
      $temp = [];
      $temp2 = [];
      foreach ($data['ubah_bobot_kriteria_fix'] as $key => $value) {
        $temp = $this->db->get_where('tabel_bobot_kriteria', ['id_alternatif' => $value['id_alternatif'], 'id_kriteria' => $value['id_kriteria']])->row_array();
        if ($temp < 1) {
          // $temp2[$i] = $value;
          $this->db->insert('tabel_bobot_kriteria', $value);
        }
        $i++;
      }
      // print_r($temp2);
      // die;
      foreach ($data['ubah_bobot_kriteria_fix'] as $key => $value) {
        $this->db->set($value);
        $this->db->where('id_kriteria', $value['id_kriteria']);
        $this->db->where('id_alternatif', $value['id_alternatif']);
        $this->db->update('tabel_bobot_kriteria', $value);
      }
      // return;
      // print_r($result);
      // die;
      // $this->db->update_batch('tabel_bobot_kriteria', $result, 'id_alternatif');
    }
  }

  //logika ambilstatus user
  public function getDataRoleUser($username)
  {
    $this->db->where('username', $username);
    $detail = $this->db->get('tabel_user')->row();
    return $detail;
  }

  //logika simpan data
  public function simpan_data($data)
  {
    $this->db->insert('tabel_simpan_data_konsultasi_user', $data);
    if ($this->db->affected_rows('tabel_simpan_data_konsultasi_user')) {
      $this->session->set_flashdata('pesan_simpan', '<div class="alert alert-success" role="alert">
      Data berhasil di simpan!</div>');
    } else {
      $this->session->set_flashdata('pesan_simpan', '<div class="alert alert-danger" role="alert">
      Data gagal di simpan!</div>');
    }
  }

  public function smart()
  {
    //ambil semua data dari database
    $semua_data = $this->semua_data(); //ambil data dari method semuaData
    $total = 0;
    foreach ($semua_data['kriteria'] as $rowK) {
      $total = $total + $rowK['bobot'];
    }
    // print_r($total);
    // echo '<br>';
    // die;
    if ($total == 0) {
      $this->session->set_flashdata('pesan_error', '<div class="alert alert-success" role="alert">
     Total bobot tidak boleh = 0!</div>');
      redirect(base_url('User/index_input_bobot_kriteria'));
    }

    //normalisasi bobot kriteria Count()

    // $i = 0;
    $r = [];
    foreach ($semua_data['kriteria'] as $rowK2) {
      $r['r_' . $rowK2['kriteria']] = $rowK2['bobot'] / $total;
    }

    $i = 0;
    foreach ($semua_data['data_alternatif'] as $rowDA) {
      foreach ($semua_data['bobot_kriteria'] as $rowBK) {
        foreach ($semua_data['kriteria'] as $rowK) {
          if ($rowDA['id'] == $rowBK['id_alternatif']) {
            if ($rowK['id'] == $rowBK['id_kriteria']) {
              $semua_data['data_alternatif'][$i]['bobot_' . $rowK['kriteria']] = $rowBK['bobot'];
            }
          }
        }
      }
      $i++;
    }

    $i = 0; // buat variabel i = 0

    foreach ($semua_data['data_alternatif'] as $d) //lakukan perulangan sebanyak data alternatif
    {
      $j = 1;
      foreach ($semua_data['kriteria'] as $rowK) {
        if ($rowK['utility'] == 'benefit') {
          $semua_data['data_alternatif'][$i]['R' . $j] = (($d['bobot_' . $rowK['kriteria']] - $rowK['cMIN']) / ($rowK['cMAX'] - $rowK['cMIN']));
        }
        if ($rowK['utility'] == 'cost') {
          $semua_data['data_alternatif'][$i]['R' . $j] = (($rowK['cMAX'] - $d['bobot_' . $rowK['kriteria']]) / ($rowK['cMAX'] - $rowK['cMIN']));
        }
        $j++;
      }
      $i++;
    }

    $i = 0;
    foreach ($semua_data['data_alternatif'] as $rowDA) {
      $k = 1;
      $temp = 0;
      foreach ($r as $rowN) {
        $temp = $temp + ($rowN * $rowDA['R' . $k]);
        $k++;
      }
      $semua_data['data_alternatif'][$i]['perengkingan'] = $temp;
      $i++;
    }



    $i = 0; // defenisikan fariabel  i dengan nilai 0
    foreach ($semua_data['data_alternatif'] as $d) // lakuan perulangan sebanyak total data dari tabel alternatif
    {
      $temp = $semua_data['data_alternatif'][$i]['id']; // defenisikan variabel temp = id dari tabel alternatif
      $semua_data['data_alternatif'][$i]['id'] = $semua_data['data_alternatif'][$i]['perengkingan']; // id tabel alternatif == index dari variabel perengkingan
      $semua_data['data_alternatif'][$i]['perengkingan'] = $temp;
      $i++;
    }

    // var_dump($semua_data['data_alternatif']);
    rsort($semua_data['data_alternatif']); // urutkanc nilai dari data alternatif dari besar ke kecil
    $i = 0;
    foreach ($semua_data['data_alternatif'] as $d) {
      $temp = $semua_data['data_alternatif'][$i]['perengkingan'];
      $semua_data['data_alternatif'][$i]['perengkingan'] = $semua_data['data_alternatif'][$i]['id'];
      $semua_data['data_alternatif'][$i]['id'] = $temp;
      $i++;
    }

    return $semua_data['data_alternatif']; // kembalikan nilai dari variabel data alternatif
  }
}
