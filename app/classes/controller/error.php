<?php
use Fuel\Core\Response;

class Controller_Error extends Controller
{
	public function action_400()
	{
		return new Response();
	}

	public function action_403()
	{
		return new Response();
	}

	public function action_404()
	{
		return new Response();
	}

	public function action_500()
	{
		return new Response();
	}
}