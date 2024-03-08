<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Wish;

class wishController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Wish';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Wish());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('stockQuantity', __('StockQuantity'));
        $grid->column('total', __('Total'));
        $grid->column('product_id', __('Product id'));
        $grid->column('is_value', __('Is value'));
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
        $show = new Show(Wish::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('stockQuantity', __('StockQuantity'));
        $show->field('total', __('Total'));
        $show->field('product_id', __('Product id'));
        $show->field('is_value', __('Is value'));
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
        $form = new Form(new Wish());

        $form->text('name', __('Name'));
        $form->number('stockQuantity', __('StockQuantity'));
        $form->decimal('total', __('Total'));
        $form->number('product_id', __('Product id'));
        $form->switch('is_value', __('Is value'));

        return $form;
    }
}
