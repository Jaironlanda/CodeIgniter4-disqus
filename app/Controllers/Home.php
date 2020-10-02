<?php namespace App\Controllers;

// Declare Blog Model
use App\Models\BlogModel;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "My Blog Index";
		// load Blog Model
		$BlogModel = new BlogModel();
		// Get all blog data
		$data['listBlog'] = $BlogModel->findAll();
		// blog index view
		return view('blog_index', $data);
	}

	/**
	 * View blog
	 * @param blog id
	 */
	public function viewBlog(int $blog_id)
	{
		
		$data['title'] = "My Blog";
		// load Blog Model
		$BlogModel = new BlogModel();
		// Get blog data based blog id, using find() method
		$data['viewBlog'] = $BlogModel->find($blog_id);
		// blog view
		return view('blog_view', $data);
	}
	//--------------------------------------------------------------------

}
