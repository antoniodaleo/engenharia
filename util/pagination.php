public function index()
	{
		$this->load->model('Usuarios_model');

		$config = array(
			"base_url" => base_url('post/p'),
			"per_page" => 3,
			"num_links" => 3,
			"uri_segment" => 3,
			"total_rows" => $this->Usuarios_model->CountAll(),
			"full_tag_open" => "<ul class='pagination' id='ajaxPagination'>",
			"full_tag_close" => "</ul>",
			"first_link" => FALSE,
			"last_link" => FALSE,
			"first_tag_open" => "<li>",
			"first_tag_close" => "</li>",
			"prev_link" => "Anterior",
			"prev_tag_open" => "<li class='prev'>",
			"prev_tag_close" => "</li>",
			"next_link" => "Próxima",
			"next_tag_open" => "<li class='next'>",
			"next_tag_close" => "</li>",
			"last_tag_open" => "<li>",
			"last_tag_close" => "</li>",
			"cur_tag_open" => "<li class='active'><a href='#'>",
			"cur_tag_close" => "</a></li>",
			"num_tag_open" => "<li>",
			"num_tag_close" => "</li>"
		);

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['post'] = $this->Usuarios_model->GetAll('post_titulo','asc',$config['per_page'],$offset);
		
		$this->load->view('home',$data);
		
		/* 
		if (!$this->input->is_ajax_request()) {
			$this->load->view('home',$data);
		}else{
			$this->load->view('pagina-resultados',$data);
		}*/
	}


    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?> ">

   
  </head>
  <body>
  <div class="container">
	<div class="page-header">
		<h1>Paginação de Resultados com CodeIgniter e Bootstrap</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php if($post): ?>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <th>#</th>
            <th>Titulo</th>
            <th>Descricao</th>
          </thead>
          <tbody>
            <?php foreach($post as $p): ?>
            <tr>
              <td><?=$p->post_id?></td>
              <td><?=$p->post_titulo ?></td>
              <td><?=$p->post_descricao ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
        <?php echo $pagination; ?>
      </div>
	  
    <?php endif; ?>
		</div>
	</div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js') ?>" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" ></script>
  </body>
</html>

<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

  var $table = "post";

  function __construct() {
    parent::__construct();
  }

  function GetAll($sort = 'id', $order = 'asc', $limit = null, $offset = null) {
    $this->db->order_by($sort, $order);

    if($limit)
      $this->db->limit($limit,$offset);

    $query = $this->db->get($this->table);

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return null;
    }

  }

  function CountAll(){
    return $this->db->count_all($this->table);
  }

}

/* End of file */




