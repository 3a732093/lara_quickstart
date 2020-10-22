@extends('layouts.app')
/*代表tasks視圖將使用
layouts\app.blade.php的佈局*/

@section('content')
    /*代表tasks視圖本身的一個段落
    (section)，並且命名為content*/



    <div class="panel-body">
        <!-- 顯示驗證錯誤 -->
    @include('common.errors')/*代表在此將引入
        common\errors.blade.php視圖的
        內容，用以顯示錯誤訊息*/

    <!-- 新任務的表單 -->
        <form action="/task" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- 任務名稱 -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- 增加任務按鈕-->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 增加任務
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- 代辦：目前任務 -->
@endsection
