<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\BannersModel;

class BannersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BannersModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BannersModel());

        $grid->column('id', __('Id'));
        $grid->column('banner_title', __('Banner title'));
        $grid->column('banner_url', __('Banner url'));
        $grid->column('banner_image')->image();;
        $grid->column('banner_desc', __('Banner desc'));
        $grid->column('banner_content', __('Banner content'));
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
        $show = new Show(BannersModel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('banner_title', __('Banner title'));
        $show->field('banner_url', __('Banner url'));
        $show->field('banner_image', __('Image'));
        $show->field('banner_desc', __('Banner desc'));
        $show->field('banner_content', __('Banner content'));
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
        $form = new Form(new BannersModel());

        $form->text('banner_title', __('Banner title'));
        $form->text('banner_url', __('Banner url'));
        $form->image('banner_image', __('Image'));
        $form->text('banner_desc', __('Banner desc'));
        $form->ckeditor('banner_content', __('Banner content'));

        return $form;
    }
}
