<?php

namespace App\Admin\Controllers;

use App\Models\Sites\Contact;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ContactController extends Controller
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

            $content->header('联系方式');
            $content->description('管理网站联系方式');

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

            $content->header('联系方式');
            $content->description('管理网站联系方式');

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

            $content->header('联系方式');
            $content->description('管理网站联系方式');

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
        return Admin::grid(Contact::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->type('类型')->sortable();
            $grid->title('标签')->sortable();
            $grid->value('值')->sortable();
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Contact::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->select('type')->options( [
                "qq"=>"QQ",
                "wechat"=>"微信号",
                "wechat_qrcode"=>"微信二维码",
                'email'=>'邮箱',
                'phone'=>'电话',
                'mobile'=>'手机号',
                'text'=>'文字',
                'link'=>'链接'
            ]);
            $form->text('title');
            $form->text('value');
            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
