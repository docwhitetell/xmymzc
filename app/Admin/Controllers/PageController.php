<?php

namespace App\Admin\Controllers;

use App\Models\Sites\Page;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PageController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Page::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->page('页面类型')->sortable();
            $grid->title('标题');
            $grid->title_animation_in('标题进场动画');
            $grid->title_animation_out('标题出场动画');
            $grid->title_animation_delay('标题动画延迟');
            $grid->title_animation_duration('标题动画持续时间');
            $grid->description('描述');
            $grid->desc_animation_in('描述进场动画');
            $grid->desc_animation_out('描述出场动画');
            $grid->desc_animation_delay('描述动画延迟');
            $grid->desc_animation_duration('描述动画持续时间');
            $grid->content('主要内容');
            $grid->content_animation_in('主要内容进场动画');
            $grid->content_animation_out('主要内容出场动画');
            $grid->content_animation_delay('主要内容动画延迟');
            $grid->content_animation_duration('主要内容动画持续时间');
   /*         $grid->created_at();
            $grid->updated_at();*/
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Page::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
