<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Oder;

class OderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Oder';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Oder());

        $grid->column('id', __('Id'));
        $grid->column('email', __('Email'));
        $grid->column('address', __('Address'));
        $grid->column('phone', __('Phone'));
        $grid->column('name', __('Name'));
        $grid->column('price', __('Price'));
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
        $show = new Show(Oder::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('email', __('Email'));
        $show->field('address', __('Address'));
        $show->field('phone', __('Phone'));
        $show->field('name', __('Name'));
        $show->field('price', __('Price'));
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
        $form = new Form(new Oder());

        $form->email('email', __('Email'));
        $form->text('address', __('Address'));
        $form->phonenumber('phone', __('Phone'));
        $form->text('name', __('Name'));
        $form->text('price', __('Price'));

        return $form;
    }
}
