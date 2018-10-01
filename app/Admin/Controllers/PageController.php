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
            $grid->actions(function ($actions) {
                $actions->disableDelete();
            });
            $grid->disableCreateButton();
            $grid->id('ID')->sortable();
            $grid->page('页面类型')->sortable();
            $grid->title('标题');
            $grid->title_font_size('标题字体大小');
            $grid->title_font_color('标题字体颜色');

/*            $grid->title_animation_in('标题进场动画');
            $grid->title_animation_out('标题出场动画');
            $grid->title_animation_delay('标题动画延迟');
            $grid->title_animation_duration('标题动画持续时间');*/
            $grid->description('描述');
            $grid->desc_font_size('描述字体大小');
            $grid->desc_font_color('描述字体颜色');
 /*           $grid->desc_animation_in('描述进场动画');
            $grid->desc_animation_out('描述出场动画');
            $grid->desc_animation_delay('描述动画延迟');
            $grid->desc_animation_duration('描述动画持续时间');*/
            $grid->content('主要内容');
            $grid->content_font_size('内容字体大小');
            $grid->content_font_color('内容字体颜色');
/*            $grid->content_animation_in('主要内容进场动画');
            $grid->content_animation_out('主要内容出场动画');
            $grid->content_animation_delay('主要内容动画延迟');
            $grid->content_animation_duration('主要内容动画持续时间');*/
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

            $form->html('背景设置', $label = '');
            $form->select('background_type','背景类型')->options(['image'=>'图片','color'=>'颜色']);
            $form->text('background','背景图URL/颜色');
            $form->divide();

            /*$form->display('id', 'ID');*/
            $form->html('标题设置', $label = '');
            $form->display('page', '页面');
            $form->text('title','标题内容');
            $form->text('title_font_size','标题字体大小');
            $form->text('title_font_color','标题字体颜色');
            $form->select('title_animation_in','标题入场动画')->options(config('animation.animation'));
            $form->select('title_animation_out','标题出场动画')->options(config('animation.animation'));
            $form->select('title_animation_delay','标题动画延迟时间(秒)')->options(config('animation.delay'));
            $form->select('title_animation_duration','标题动画速度')->options(config('animation.duration'));
            $form->divide();

            $form->html('简述设置', $label = '');
            $form->text('description','页面简述');
            $form->text('desc_font_size','简述字体大小');
            $form->text('desc_font_color','简述字体颜色');
            $form->select('desc_animation_in','简述入场动画')->options(config('animation.animation'));
            $form->select('desc_animation_out','简述出场动画')->options(config('animation.animation'));
            $form->select('desc_animation_delay','简述动画延迟时间(秒)')->options(config('animation.delay'));
            $form->select('desc_animation_duration','简述动画速度')->options(config('animation.duration'));
            $form->divide();

            $form->html('主要内容设置', $label = '');
            $form->text('content','主要内容');
            $form->text('content_font_size','主要内容字体大小');
            $form->text('content_font_color','主要内容字体颜色');
            $form->select('content_animation_in','主要内容入场动画')->options(config('animation.animation'));
            $form->select('content_animation_out','主要内容出场动画')->options(config('animation.animation'));
            $form->select('content_animation_delay','主要内容动画延迟时间(秒)')->options(config('animation.delay'));
            $form->select('content_animation_duration','主要内容动画速度')->options(config('animation.duration'));
         /*   $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');*/
        });
    }
}
