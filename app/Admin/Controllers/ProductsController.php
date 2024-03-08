<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Products;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Products';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Products());

        $grid->column('id', __('Id'));
        $grid->column('image')->image();
        $grid->column('name', __('Name'));  
        $grid->column('description', __('Description'));
        $grid->column('price', __('Price'));
        $grid->column('stockquantily', __('Stockquantily'));
        $grid->column('slug', __('Slug'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Products::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image')->image();
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('stockquantily', __('Stockquantily'));
        $show->field('slug', __('Slug'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Products());

        $form->image('image', __('Image'));
        $form->text('name', __('Name'));
        $form->text('description', __('Description'));
        $form->decimal('price', __('Price'));
        $form->number('stockquantily', __('Stockquantily'));
        $form->text('slug', __('Slug'));

        return $form;
    }
    
}
