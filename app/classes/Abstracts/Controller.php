<?php

namespace App\Abstracts;

/**
 * Class Controller
 *
 * @package App\Abstracts
 * @author  Dainius Vaičiulis   <denncath@gmail.com>
 */
abstract class Controller
{
	protected $page;
	
    /**
     * Controller constructor.
	 *
	 * We can write logic common for all
	 * other methods
	 *
	 * For example, create $page object,
	 * set it's header/navigation
	 * or check if user has a proper role
	 *
	 * Goal is to prepare $page
     */
    abstract public function __construct();

    /**
     * This method builds or sets
     * current $page content
	 * renders it and returns HTML 
	 *
	 * So if we have ex.: ProductsController, 
	 * it can have methods responsible for 
	 * index() (main page, usualy a list), 
	 * view() (preview single), 
	 * create() (form for creating), 
	 * edit() (form for editing) 
	 * delete()
	 *
	 * These methods can then be called on each page accordingly, ex.:
	 * newWish.php:
     * $controller = new PixelsController();
	 * print $controller->add();
	 *
	 *
	 * myWishes.php:
     * $controller = new ProductsController();
	 * print $controller->my();
	 *	
     * @return string|null
     */
    abstract function index(): ?string; 

}
