<?php

namespace App\Admin\Controllers;

use App\Models\Sites\Example;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ExampleController extends Controller
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
        return Admin::grid(Example::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->description('简述');
            $grid->column('poster','海报')->display(function ($poster){
                return "<img style='max-width: 100px' src='$poster'/>";
            });
            $grid->link('链接');
            //$grid->downloads('下载次数');
      /*      $grid->created_at('发布于');
            $grid->updated_at('上次修改');*/
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Example::class, function (Form $form) {
            $form->select('type','类型')->options(['example'=>'客户案例','solutions'=>'解决方案']);
            $form->text('title','案例名');
            $form->text('description','简述');
            $form->text('poster','海报图');
            $form->text('link','链接');
        });
    }
}
